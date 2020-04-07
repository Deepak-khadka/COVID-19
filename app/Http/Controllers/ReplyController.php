<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyValidation;
use App\Model\Reply;
use App\User;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
function __construct()
{
$this->middleware('permission:reply-list|reply-create|reply-edit|reply-delete', ['only' => ['index','show']]);
$this->middleware('permission:reply-create', ['only' => ['create','store']]);
$this->middleware('permission:reply-edit', ['only' => ['edit','update']]);
$this->middleware('permission:reply-delete', ['only' => ['destroy']]);
}
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReplyValidation $request)
    {
               $reply = Reply::create([
                   'body'=>$request->input('body'),
                   'question_id'=>$request->input('question_id'),
                   'user_id'=>auth()->user()->id,
               ]);
               if($reply)
               {
                   return redirect()->back()->with('success','Reply Success');
               }
               else{
                   return redirect()->back()->withInput()->with('error','Unable to Comment');
               }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reply = Reply::find($id)->first();
        return view('Reply.edit',['reply'=>$reply]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $reply = Reply::where('id',$id)->update([
            'body'=>$request->input('body'),
            'question_id'=>$request->input('question_id'),
            'user_id'=>auth()->user()->id,
        ]);
        if($reply)
        {
            return redirect()->back()->with('success','Edit Success');
        }
        else{
            return redirect()->back()->withInput()->with('error','Unable to Edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $reply = Reply::find($id)->delete();
      if($reply){
          return redirect()->back()->with('success','Deleted');
      }else{
          return redirect()->back()->with('error','Unable to Delete');
      }
    }
}
