@extends('master.master')

@section('content')
       <div class="main-body">

            <div class="main-panel">
                <div class="content-wrapper">
                    <!--Chat-box-->
                    <div class="chat-box">
                        <!--Message-box-->
                        <div class="message-box">
                            <div class="chat-top">
                                <div class="chatbar">
                                    <div class="message-with">
                                        <a href=""><img src="../images/manish.jpg" alt=""> Manish Gurung</a>
                                    </div>
                                    <div class="delete">
                                        <a href=""><img src="../images/delete.png" alt=""></a>
                                    </div>
                                </div>



                            </div>
                            <!--Messange-Section-->
                            <div class="message-section">
                                <div class="conversation-receive">
                                    <a href=""><img src="../images/manish.jpg" alt=""></a>
                                    <div class="conversation-box1">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing eli</p>
                                    </div>
                                </div>
                                <div class="conversation-send">
                                    <a href=""><img src="../images/ceelina.jpg" alt=""></a>
                                    <div class="conversation-box2">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                                <div class="conversation-receive">
                                    <a href=""><img src="../images/manish.jpg" alt=""></a>
                                    <div class="conversation-box1">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing eli</p>
                                    </div>
                                </div>
                                <div class="conversation-send">
                                    <a href=""><img src="../images/ceelina.jpg" alt=""></a>
                                    <div class="conversation-box2">
                                        <p>Lorem ipsum dolor sit amet , </p>
                                    </div>
                                </div>
                                <div class="conversation-receive">
                                    <a href=""><img src="../images/manish.jpg" alt=""></a>
                                    <div class="conversation-box1">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing eli</p>
                                    </div>
                                </div>
                                <div class="conversation-send">
                                    <a href=""><img src="../images/ceelina.jpg" alt=""></a>
                                    <div class="conversation-box2">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </div>
                            </div>
                            <!--End of Message-Section-->
                            <!--End of Message-box-->
                            <div class="chat-form">
                                <div class="form-input">
                                    <input type="text" placeholder="Message">
                                </div>
                                <div class="form-list">
                                    <div class="send">
                                        <button ><img src="../images/send.png" alt=""></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Online-list-->
                        <div class="online-list">
                            <!--Seacrh Message-->
                            <div class="mess-search">
                                <div class="search-mess">
                                    <input type="search" placeholder="Search Message" class="form-control">
                                </div>

                            </div>
                            <!--End of Message_search-->
                            <!--Online People-->
                            <div class="people-list">
                                <ul>
                                    <li>
                                        <a href=""><img src="../images/deepak.jpg" alt=""></a>
                                        <div class="active-line">

                                        </div>
                                    </li>
                                    <li>
                                        <a href=""><img src="../images/manish.jpg" alt=""></a>
                                        <div class="active-line">

                                        </div>
                                    </li>
                                    <li>
                                        <a href=""><img src="../images/salina.jpg" alt=""></a>
                                        <div class="active-line">

                                        </div>
                                    </li>
                                    <li>
                                        <a href=""><img src="../images/ceelina.jpg" alt=""></a>

                                    </li>
                                    <li>
                                        <a href=""><img src="../images/manish.jpg" alt=""></a>

                                    </li>
                                    <li>
                                        <a href=""><img src="../images/salina.jpg" alt=""></a>
                                        <div class="active-line">

                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End of Online People-->
                            <!--Conversation-list-->
                            <div class="conversation-list">
                                <div class="conversation">
                                    <img src="../images/ceelina.jpg" alt="">
                                    <div class="conversation-mess">
                                        <div class="text-title">
                                            Ceelina Gurung
                                        </div>
                                        <div class="created-date">
                                            Mar 12
                                        </div>
                                        <div class="conversation-message">
                                           <p>This is a message</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="conversation">
                                    <img src="../images/deepak.jpg" alt="">
                                    <div class="conversation-mess">
                                        <div class="text-title">
                                            Ceelina Gurung
                                        </div>
                                        <div class="created-date">
                                            Mar 12
                                        </div>
                                        <div class="conversation-message">
                                           <p>This is a message</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="conversation">
                                    <img src="../images/manish.jpg" alt="">
                                    <div class="conversation-mess">
                                        <div class="text-title">
                                            Ceelina Gurung
                                        </div>
                                        <div class="created-date">
                                            Mar 12
                                        </div>
                                        <div class="conversation-message">
                                           <p>This is a message</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of Coversation-List-->
                        </div>
                        <!--End of Online-list-->
                    </div>
                    <!--End of Chat-->
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!--Footer-->
            <footer class="footer">
                <span>Project Sanjeevani</span>
            </footer>
            <!-- partial -->
          </div>
   @endsection
