@extends('elements.front')
@section('title', 'home')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/profile.css">
<style>
    body {
        overflow-x: hidden
    }

    img.post-user {
        width: 300px;
        height: 300px;
    }
</style>

@section('content')
    <div class="row">
        @extends('elements.sideBar')

        <div class="col-10 offset-2">
            <div class="wrap-profile">
                <div class="wrap-top">
                    <div class="top-img">
                        <img src="{{ asset('images/' . $user->image) }}" alt="">
                    </div>
                    <div class="top-all">
                        <div class="top-fil">
                            <div class="name">
                                <p>{{ $user->username }}</p>
                            </div>
                            <div class="edit">
                                <a href="/editProfile" class="btn" style="background-color: rgb(230, 230, 230)">Edit
                                    Profile</a>
                            </div>
                            <div class="edit">
                                <a href="" class="btn" style="background-color: rgb(230, 230, 230)">View
                                    Archive</a>
                            </div>
                            <div class="setting">
                                <a href=""><i class="bi bi-gear-wide"></i></a>
                            </div>
                        </div>
                        <div class="top-follow">
                            <div class="post">
                                <p><b>50</b> Posts</p>
                            </div>
                            <div class="post">
                                <p><b>100</b> Folowwers</p>
                            </div>
                            <div class="post">
                                <p><b>10</b> Following</p>
                            </div>
                        </div>
                        <div class="top-follow mt-1">
                            <div class="bio">
                                <p>{!! nl2br(e($user->bio)) !!}</p>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="wrap-post-history">
                    <div class="fil-history">
                        <img src="../images/history.jpg" alt="">
                        <p>Mendaki</p>
                    </div>
                    <div class="fil-history">
                        <img src="../images/history-2.jpg" alt="">
                        <p>Sepak Bola</p>
                    </div>
                    <div class="fil-history">
                        <img src="../images/history-3.jpg" alt="">
                        <p>Air terjun</p>
                    </div>
                    <div class="fil-history">
                        <img src="../images/history.jpg" alt="">
                        <p>Mendaki</p>
                    </div>
                    <div class="fil-history">
                        <img src="../images/history-2.jpg" alt="">
                        <p>Mendaki</p>
                    </div>
                </div>
                <div class="wrap-link-post">
                    <div class="link-post">
                        <a href=""><i class="bi bi-ui-checks-grid"></i> POSTS</a>
                    </div>
                    <div class="link-post">
                        <a href=""><i style="font-size: 0.8rem" class="bi bi-bookmark"></i> SAVED</a>
                    </div>
                    <div class="link-post">
                        <a href=""><i class="bi bi-person-bounding-box"></i> TAGGED</a>
                    </div>
                </div>
                <div class="wrap-post-ril">
                    <div class="row mt-4">
                        @foreach ($posts as $post)
                            <div class="col-4 mb-3">
                                <img src="{{ asset('images/' . $post->image) }}" class="img-fluid post-user" alt="">
                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>

    </div>
@endsection
