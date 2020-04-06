<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionValidation;
use App\Model\Category;
use App\Model\Question;
use App\Model\Reply;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:question-list|question-create|question-edit|question-delete', ['only' => ['index','show']]);
        $this->middleware('permission:question-create', ['only' => ['create','store']]);
        $this->middleware('permission:question-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:question-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $question = Question::latest()->get();
        $category = Category::all();
        return view('Question.index',['question'=>$question,'category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('Question.ask',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionValidation $request)
    {

             $slug = Str::slug($request->title,'.');
              $create_question = Question::create([
            'title'=>$request->input('title'),
            'category_id'=>$request->input('category'),
            'body'=>$request->input('body'),
            'user_id'=>auth()->user()->id,
            'slug'=> $slug,

        ]);
        if($create_question){

            return redirect('question')->with('success','QUESTION POST');
        }else{
            return redirect()->back()->withInput()->with('error','FAILED TO POST YOUR QUESTION');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($question)
    {
        $category = Category::all();
       $show_question = Question::where('slug',$question)->first();
       $replies = Reply::where('question_id',$show_question->id)->latest()->get();
       $count = $replies->count();
       return view('Question.show',['question'=>$show_question,'replies'=>$replies,'count'=>$count,'category'=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $edit_question = Question::where('slug',$id)->first();
        if($edit_question->user_id==auth()->user()->id) {
            $category = Category::all();
            return view('Question.edit', ['question' => $edit_question,'category'=>$category]);
        }else{
            return redirect()->back()->with('error','YOU ARE NOT GIVEN THIS PERMISSION');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionValidation $request, $id)
    {
        $update_question = Question::where('slug',$id)->update([
            'title'=>$request->input('title'),
            'category_id'=>$request->input('category'),
            'body'=>$request->input('body'),
        ]);
        if($update_question){

            return redirect()->back()->with('success','EDIT SUCCESSFUL');
        }else{
            return redirect()->back()->withInput()->with('error','SOMETHING GOES WRONG');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($question)
    {
        $delete_question = Question::where('slug', $question)->first();
           if($delete_question->user_id==auth()->user()->id){
             if($delete_question->delete()){
                return redirect('question')->with('success','QUESTION DELETED');
            } else{
                 return redirect()->back()->with('error','UNABLE TO DELETE QUESTION');
             }
           }
         else{
             return redirect()->back()->with('error','YOU ARE NOT GIVEN THIS PERMISSION');
         }
    }
}
