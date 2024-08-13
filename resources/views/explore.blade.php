@extends('elements.front')
@section('title', 'home')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/explore.css">
<style>
    body {
        overflow-x: hidden;
    }
</style>
@section('content')
    <div class="row">
        @extends('elements.sideBar')
        <div class="col-10 offset-2">
            <div class="row wrap-explore">
                <div class="col-4 mb-3">
                    <div class="wrap-img-explore">
                        <img src="../images/post-3.jpg" class="img-fluid" alt="">
                        <div class="wrap-icon-vd">
                            <i class="bi bi-pause-btn"></i>
                        </div>
                        <div class="bg-top">
                            <div class="icon-bg">
                                <a href="" class="me-3"><i class="bi bi-heart-fill"></i> 200K</a>
                                <a href=""><i class="bi bi-chat-fill"></i> 20K</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="wrap-img-explore">
                        <img src="../images/post.jpg" class="img-fluid" alt="">
                        <div class="wrap-icon-vd">
                            <i class="bi bi-pause-btn"></i>
                        </div>
                        <div class="bg-top">
                            <div class="icon-bg">
                                <a href="" class="me-3"><i class="bi bi-heart-fill"></i> 200K</a>
                                <a href=""><i class="bi bi-chat-fill"></i> 20K</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="wrap-img-explore">
                        <img src="../images/post-2.jpg" class="img-fluid" alt="">
                        <div class="bg-top">
                            <div class="icon-bg">
                                <a href="" class="me-3"><i class="bi bi-heart-fill"></i> 200K</a>
                                <a href=""><i class="bi bi-chat-fill"></i> 20K</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="wrap-img-explore">
                        <img src="../images/post-5.jpg" class="img-fluid" alt="">
                        <div class="bg-top">
                            <div class="icon-bg">
                                <a href="" class="me-3"><i class="bi bi-heart-fill"></i> 200K</a>
                                <a href=""><i class="bi bi-chat-fill"></i> 20K</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="wrap-img-explore">
                        <img src="../images/post-6.jpg" class="img-fluid" alt="">
                        <div class="bg-top">
                            <div class="icon-bg">
                                <a href="" class="me-3"><i class="bi bi-heart-fill"></i> 200K</a>
                                <a href=""><i class="bi bi-chat-fill"></i> 20K</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="wrap-img-explore">
                        <img src="../images/post-3.jpg" class="img-fluid" alt="">
                        <div class="bg-top">
                            <div class="icon-bg">
                                <a href="" class="me-3"><i class="bi bi-heart-fill"></i> 200K</a>
                                <a href=""><i class="bi bi-chat-fill"></i> 20K</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="wrap-img-explore">
                        <img src="../images/post-7.jpg" class="img-fluid" alt="">
                        <div class="bg-top">
                            <div class="icon-bg">
                                <a href="" class="me-3"><i class="bi bi-heart-fill"></i> 200K</a>
                                <a href=""><i class="bi bi-chat-fill"></i> 20K</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
