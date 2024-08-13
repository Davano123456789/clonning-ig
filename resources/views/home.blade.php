@extends('elements.front')

@section('title', 'home')
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/profile.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    body {
        overflow-x: hidden
    }

    .user-comment button {
        display: none;
        /* Hide button by default */
    }

    img.tampil-img {
        width: 290px;
        height: 290px;
    }

    .custom-modal-width .modal-dialog {
        max-width: 58%;
        /* Atau ukuran lain yang Anda inginkan */
    }

    .custom-modal-width .modal-dialog {
        max-width: 75%;
    }

    .modal-body {
        /* Warna latar belakang untuk contoh */
        height: 76vh;
        /* Tinggi maksimum modal-body relatif terhadap viewport height */

        /* Atau, jika ingin menggunakan height (tetap tinggi tetap): */
        /* height: 600px; */
    }

    .gambar img {
        width: 540px;
        height: 540px;
    }

    .bio-img img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    .komen-img img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }

    .wrap-scroll {
        overflow-y: scroll;
        height: 180px;
        /* Webkit-based browsers */
        scrollbar-width: none;
        /* For Firefox */
        -ms-overflow-style: none;
        /* For Internet Explorer and Edge */
    }

    /* Webkit-based browsers (Chrome, Safari) */
    .wrap-scroll::-webkit-scrollbar {
        display: none;
    }

    .wrap-user-bio {
        /* background-color: aqua; */
        height: 100px;
    }
</style>
@section('content')
    <div class="row">

        <div class="modal fade custom-modal-width" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                        </button>
                        <h5 class="modal-title" style="margin-right: 18rem" id="exampleModalLongTitle">Create new post</h5>
                    </div>
                    <div class="modal-body">
                        <form action="/createPost" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <input style="background: transparent" type="file" id="fileInput" name="image">
                                    <img src="" class="tampil-img mt-2" id="previewImage">
                                </div>
                                <div class="col-6">
                                    <div class="wrap-user-img-post">
                                        <img src="{{ asset('images/' . Auth::user()->image) }}" alt="">
                                        <p>{{ Auth::user()->username }}</p>
                                    </div>
                                    <div class="des mt-2">
                                        <textarea name="deskripsi" id="" rows="5" placeholder="write a caption..."></textarea>
                                    </div>
                                    <div class="fil-botton">
                                        <p>Add Location</p>
                                        <span><i class="bi bi-geo-alt"></i></span>
                                    </div>
                                    <div class="fil-botton">
                                        <p>Accessibility</p>
                                        <span><i class="bi bi-chevron-down"></i></span>
                                    </div>
                                    <div class="fil-botton">
                                        <p>Advanced setting</p>
                                        <span><i class="bi bi-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary w-100">Posting</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-2" style="position: fixed">
            <div class="wrap-sidebar">
                <div class="logo-ig-inhome">
                    <img src="../images/logo.png" alt="">
                </div>
                <div class="link-side">
                    <a href="/home" class="activ"><i class="bi bi-house-door-fill"></i> Home</a>
                    <a href=""><i class="bi bi-search"></i> Search</a>
                    <a href="/explore"><i class="bi bi-compass"></i> Explore</a>
                    <a href="/reels"><i class="bi bi-film"></i> Reels</a>
                    <a href=""><i class="bi bi-messenger"></i>Messages</a>
                    <a href=""><i class="bi bi-heart"></i>Notifications</a>
                    <button class="tombol" data-toggle="modal" data-target="#exampleModalCenter"><i
                            class="bi bi-plus-square-fill"></i>Create</button>
                    <a href="/profile"><img src="../images/profile.jpg" style="border-radius: 50%;width:30px;height: 30px;"
                            alt="">Profile</a>
                    <a href=""><i class="bi bi-list"></i>More</a>

                </div>
            </div>
        </div>

        <div class="col-6 offset-2">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="wrap-status">
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/profile.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/user-2.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/user-3.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/user-4.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/user-5.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/user-6.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/profile.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/profile.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/profile.jpg" alt="">
                    </div>
                </div>
                <div class="wrap-status-user">
                    <div class="img-status">
                        <img src="../images/profile.jpg" alt="">
                    </div>
                </div>
            </div>
            @foreach ($post as $item)
                @php
                    $userLike = $item->likes->where('user_id', Auth::id())->first();
                @endphp
                <div class="wrap-post-user">
                    <div class="wrap-all-post">

                        <div class="img-user-post">
                            <img src="{{ 'images/' . $item->user->image }}" alt="">
                            <h6>{{ $item->user->username }} <span>&#8226;</span> <!-- This is the bullet point symbol -->
                            </h6>
                        </div>
                        <i class="bi bi-three-dots"></i>
                    </div>
                    <div class="img-post mt-4">
                        <img src="{{ 'images/' . $item->image }}" alt="">
                    </div>
                    <div class="wrap-icon-reaksi">
                        <div class="icon-1">
                            @if ($userLike)
                                {{-- Jika sudah di-like, tampilkan ikon hati merah --}}
                                <form action="{{ route('unlikePost', $item->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" style="color: red; border: none; background: none;">
                                        <i style="font-size: 1.4rem" class="bi bi-heart-fill me-2"></i>
                                    </button>
                                </form>
                            @else
                                {{-- Jika belum di-like, tampilkan ikon hati biasa --}}
                                <form action="{{ route('likePost', $item->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" style="border: none; background: none;">
                                        <i class="bi bi-heart me-2" style="font-size: 1.4rem"></i>
                                    </button>
                                </form>
                            @endif


                            <a href=""><i class="bi bi-chat"></i></a>
                            <a href=""><i class="bi bi-send"></i></a>

                        </div>
                        <div class="icon-1">
                            <a href=""><i class="bi bi-bookmark"></i></a>

                        </div>
                    </div>
                    <div class="like mt-2">
                        <p>{{ $item->likes->count() }} likes</p>
                    </div>
                    <div class="des mt-2">
                        <p><b><span class="">{{ $item->user->username }}</span></b> {{ $item->deskripsi }}</p>
                    </div>
                    <button style="background-color: transparent; border: none; outline: none;" data-toggle="modal"
                        data-target="#exampleModalCenter{{ $item->id }}">
                        <div class="coment">
                            {{ $item->comments->count() }} comments, View all comment
                        </div>
                    </button>
                    <div class="komentar mt-4 " style="border-bottom:1px solid rgb(223, 223, 223);">
                        <form class="d-flex justify-between w-100" action="{{ route('commentPost', $item->id) }}"
                            method="POST">
                            @csrf
                            <input type="text" name="deskripsi" placeholder="Tambahkan komentar">
                            <button type="submit">Post</button>
                        </form>
                    </div>
                    <div class="modal fade custom-modal-width" id="exampleModalCenter{{ $item->id }}" tabindex="-1"
                        role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <div class="row">
                                        <div class="col-6 gambar">
                                            <img src="{{ asset('images/' . $item->image) }}" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div class="col-6 pt-4 ps">
                                            <div class="wrap-allpost d-flex justify-between" style="padding-right: 3rem">
                                                <div class="wrap-user-img-post">
                                                    <img src="{{ asset('images/' . $item->user->image) }}"
                                                        alt="">
                                                    <p>{{ $item->user->username }}</p>
                                                </div>
                                                <div class="icon-more">
                                                    <i class="bi bi-three-dots"></i>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="wrap-user-bio">
                                                <div class="bio-img">
                                                    <img src="{{ asset('images/' . $item->user->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="fill-bio">
                                                    <p><b>{{ $item->user->username }}</b> {{ $item->deskripsi }}</p>
                                                </div>
                                            </div>
                                            <div class="wrap-scroll">

                                                @foreach ($item->comments as $comment)
                                                    <div class="wrap-komen">
                                                        <div class="komen-img">
                                                            <img src="{{ asset('images/' . $comment->user->image) }}"
                                                                alt="">
                                                        </div>
                                                        <div class="komen-user">
                                                            <p><b>{{ $comment->user->username }}</b>
                                                                {{ $comment->deskripsi }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="wrap-bottom-post">
                                                <div class="icon-utama">
                                                    <a href=""><i class="bi bi-heart"></i></a>
                                                    <a href=""><i class="bi bi-chat"></i></a>
                                                    <a href=""><i class="bi bi-send"></i></a>
                                                </div>
                                                <div class="icon-sendiri">
                                                    <a href=""><i class="bi bi-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <div class="komentar">
                                                <form class="d-flex justify-between w-100"
                                                    action="{{ route('commentPost', $item->id) }}" method="POST">
                                                    @csrf
                                                    <input type="text" name="deskripsi"
                                                        placeholder="Tambahkan komentar">
                                                    <button type="submit">Post</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="col-4 offset-8" style="position: fixed">
            <div class="wrap-sideright ">
                <div class="allright ">
                    <div class="img-sideright">
                        <img src="{{ 'images/' . $user->image }}" alt="">
                        <p>{{ $user->username }}</p>
                    </div>
                    <div class="follow">
                        <a href="" class="text-primary">switch</a>

                    </div>

                </div>
                <div class="d-flex justify-content-between mt-4">
                    <p style="color:rgb(141, 141, 141)">Suggested for you</p>
                    <a href="" class="text-decoration-none text-dark">See all</a>
                </div>
                @foreach ($users as $item)
                    <a href="viewUser/{{ $item->id }}" style="text-decoration: none;color:black;">
                        <div class="allright mb-4">
                            <div class="img-sideright">
                                <img src="{{ 'images/' . $item->image }}" alt="">
                                <p>{{ $item->username }} <br> <span
                                        style="font-size: 0.8rem; color:rgb(131, 131, 131);">Suggested for
                                        you</span></p>
                            </div>
                            <div class="follow">
                                <a href="" class="text-primary">Follow</a>

                            </div>

                        </div>
                    </a>
                @endforeach



            </div>
        </div>
    </div>

    <script>
        document.getElementById('fileInput').addEventListener('change', function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var img = document.getElementById('previewImage');
                img.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
    <script>
        // Auto close alert after 5 seconds
        setTimeout(function() {
            $('.alert').alert('close');
        }, 5000);
    </script>

@endsection
