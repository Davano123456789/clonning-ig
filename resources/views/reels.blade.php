@extends('elements.front')
@section('title', 'reels')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/reels.css">
<style>
    body {
        overflow-x: hidden
    }
</style>
@section('content')
    <div class="row">
        @extends('elements.sideBar')
        <div class="col-10 offset-2">


            <div class="wrap-video ">
                <div class="video">
                    <video controls autoplay loop muted>
                        <source src="../images/video.mp4" type="video/mp4">
                    </video>
                    <div class="wrap-user">
                        <img src="../images/profile.jpg" alt="">
                        <p>DavanoAlif <span>&#8226;</span></p>
                        <a href="">Follow</a>

                    </div>
                </div>
                <div class="icon-reels">
                    <div class="fill-icon">
                        <a href=""> <i class="bi bi-heart"></i> </a>
                        <p> 972K</p>
                    </div>
                    <div class="fill-icon mt-4">
                        <a href=""> <i class="bi bi-chat"></i> </a>
                        <p> 97K</p>
                    </div>
                    <div class="fill-icon mt-4">
                        <a href=""> <i class="bi bi-send"></i> </a>

                    </div>
                    <div class="fill-icon mt-5">
                        <a href=""><i class="bi bi-bookmark"></i></a>

                    </div>
                    <div class="fill-icon mt-4">
                        <i class="bi bi-three-dots"></i>

                    </div>
                    <div class="fill-icon mt-4">
                        <img src="../images/profile.jpg" style="width: 30px;height:30px;border-radius:50%;" alt="">

                    </div>

                </div>
            </div>
            <div class="wrap-video ">
                <div class="video">
                    <video controls autoplay loop muted>
                        <source src="../images/video.mp4" type="video/mp4">
                    </video>
                    <div class="wrap-user">
                        <img src="../images/profile.jpg" alt="">
                        <p>DavanoAlif <span>&#8226;</span></p>
                        <a href="">Follow</a>

                    </div>
                </div>
                <div class="icon-reels">
                    <div class="fill-icon">
                        <a href=""> <i class="bi bi-heart"></i> </a>
                        <p> 972K</p>
                    </div>
                    <div class="fill-icon mt-4">
                        <a href=""> <i class="bi bi-chat"></i> </a>
                        <p> 97K</p>
                    </div>
                    <div class="fill-icon mt-4">
                        <a href=""> <i class="bi bi-send"></i> </a>

                    </div>
                    <div class="fill-icon mt-5">
                        <a href=""><i class="bi bi-bookmark"></i></a>

                    </div>
                    <div class="fill-icon mt-4">
                        <i class="bi bi-three-dots"></i>

                    </div>
                    <div class="fill-icon mt-4">
                        <img src="../images/profile.jpg" style="width: 30px;height:30px;border-radius:50%;" alt="">

                    </div>

                </div>
            </div>
            <div class="wrap-video ">

                <div class="video">
                    <video controls autoplay loop muted>
                        <source src="../images/video.mp4" type="video/mp4">
                    </video>
                    <div class="wrap-user">
                        <img src="../images/profile.jpg" alt="">
                        <p>DavanoAlif <span>&#8226;</span></p>
                        <a href="">Follow</a>

                    </div>
                </div>
                <div class="icon-reels">
                    <div class="fill-icon">
                        <a href=""> <i class="bi bi-heart"></i> </a>
                        <p> 972K</p>
                    </div>
                    <div class="fill-icon mt-4">
                        <a href=""> <i class="bi bi-chat"></i> </a>
                        <p> 97K</p>
                    </div>
                    <div class="fill-icon mt-4">
                        <a href=""> <i class="bi bi-send"></i> </a>

                    </div>
                    <div class="fill-icon mt-5">
                        <a href=""><i class="bi bi-bookmark"></i></a>

                    </div>
                    <div class="fill-icon mt-4">
                        <i class="bi bi-three-dots"></i>

                    </div>
                    <div class="fill-icon mt-4">
                        <img src="../images/profile.jpg" style="width: 30px;height:30px;border-radius:50%;" alt="">

                    </div>

                </div>
            </div>


        </div>
    </div>


@endsection
