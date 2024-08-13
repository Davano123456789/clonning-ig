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

    .custom-modal-width .modal-dialog {
        max-width: 80%;
    }

    .modal-body {
        /* Warna latar belakang untuk contoh */
        height: 84vh;
        /* Tinggi maksimum modal-body relatif terhadap viewport height */

        /* Atau, jika ingin menggunakan height (tetap tinggi tetap): */
        /* height: 600px; */
    }

    .gambar img {
        width: 540px;
        height: 540px;
    }
</style>

@section('content')
    <div class="row">
        @extends('elements.sideBar')

        <div class="col-10 offset-2">
            <div class="wrap-profile">
                <div class="wrap-top">
                    <div class="top-img">
                        <img src="{{ asset('images/' . Auth::user()->image) }}" alt="">
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
                                <button class="tombol" data-toggle="modal"
                                    data-target="#exampleModalCenter{{ $post->id }}">
                                    <img src="{{ asset('images/' . $post->image) }}" class="img-fluid post-user"
                                        alt="">
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade custom-modal-width" id="exampleModalCenter{{ $post->id }}"
                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="row">
                                                <div class="col-6 gambar">
                                                    <!-- Gambar yang dipilih akan ditampilkan di sini -->
                                                    <img src="{{ asset('images/' . $post->image) }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="col-6 pt-4 ps">
                                                    <div class="wrap-allpost"style="padding-right: 3rem">
                                                        <div class="wrap-user-img-post">
                                                            <img src="{{ asset('images/' . Auth::user()->image) }}"
                                                                alt="">
                                                            <p>{{ Auth::user()->username }}</p>
                                                        </div>
                                                        <div class="icon-more">
                                                            <i class="bi bi-three-dots"></i>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="wrap-user-bio">
                                                        <div class="bio-img">
                                                            <img src="{{ asset('images/' . Auth::user()->image) }}"
                                                                alt="">
                                                        </div>
                                                        <div class="fill-bio">
                                                            <p><b>{{ Auth::user()->username }}</b> {{ $post->deskripsi }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="wrap-komen">
                                                        <div class="komen-img">
                                                            <img src="../images/user-2.jpg" alt="">
                                                        </div>
                                                        <div class="komen-user">
                                                            <p><b>FeryGnas</b> Keren banget brow menyala abangku... 🔥</p>
                                                        </div>
                                                    </div>
                                                    <div class="wrap-komen">
                                                        <div class="komen-img">
                                                            <img src="../images/user-3.jpg" alt="">
                                                        </div>
                                                        <div class="komen-user">
                                                            <p><b>KasiraAul</b> ampun suhu.. 🙏</p>
                                                        </div>
                                                    </div>
                                                    <div class="wrap-komen">
                                                        <div class="komen-img">
                                                            <img src="../images/user-4.jpg" alt="">
                                                        </div>
                                                        <div class="komen-user">
                                                            <p><b>KasiraAul</b> kelazz suhu.. 🙏</p>
                                                        </div>
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
                                                        <input type="text" placeholder="Tambahkan komentar">
                                                        <button>Post</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('.tombol').click(function() {
                // Ambil sumber gambar dari tombol yang diklik
                var imageUrl = $(this).find('img').attr('src');

                // Setel sumber gambar ke dalam modal yang sesuai
                $('#exampleModalCenter').find('.gambar img').attr('src', imageUrl);
            });
        });
    </script>

@endsection
