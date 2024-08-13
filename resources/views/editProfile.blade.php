@extends('elements.front')
@section('title', 'home')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="../css/home.css">
<link rel="stylesheet" href="../css/profile.css">
<style>
    body {
        overflow-x: hidden;
        overflow-y: hidden;
        height: 100vh;

    }

    .wrap-edit-profile {
        overflow-x: scroll;
        height: 100vh;
        scrollbar-width: none;
        /* Untuk Firefox */
        -ms-overflow-style: none;
        /* Untuk Internet Explorer */
    }

    .wrap-edit-profile::-webkit-scrollbar {
        display: none;
        /* Untuk Chrome, Safari, dan Opera */
    }

    .custom-file-input {
        background-color: #3498db;
        /* Ganti dengan warna biru yang Anda inginkan */
        border-radius: 5px;
        color: white;
        padding: 5px 25px;
        cursor: pointer;
    }
</style>
@section('content')
    <div class="row">
        @extends('elements.sideBar')
        <div class="col-3 offset-2">
            <div class="wrap-setting">
                <div class="title">
                    <h5>Settings</h5>
                </div>
                <div class="wrap-meta">
                    <img src="../images/meta.png" alt="">
                    <h6 class="mt-1">Accounts Center</h6>
                    <p>Manage your connected experiences and account settings across Meta technologies.</p>
                    <div style="line-height: 10px">
                        <p><i style="font-size: 17px" class="bi bi-person me-2"></i> Personal Details</p>
                        <p><i style="font-size: 17px" class="bi bi-shield-check me-2"></i> Password and Security</p>
                        <p><i style="font-size: 17px" class="bi bi-sliders2 me-2"></i>Add preferences</p>
                        <a href="" style="text-decoration: none;font-size:12px;font-weight:500;">See more in Accounts
                            Center</a>
                    </div>
                </div>
                <div class="wrap-link-botton">
                    <p>How you use Instagram</p>
                    <div class="link-butoom activ-link">
                        <a href="" class=""><i class="bi bi-person-bounding-box "></i> Edit
                            Profile</a>
                    </div>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-bell"></i> Notifications</a>
                    </div>
                    <p class="mt-2">What you see</p>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-bell-slash"></i> Notifications</a>
                    </div>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-star"></i> Like and share</a>
                    </div>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-coin"></i> Subscriptions</a>
                    </div>
                    {{--  --}}
                    <p class="mt-2">Who can see your content</p>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-lock"></i> Account Privacy</a>
                    </div>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-star-half"></i> Close Friends</a>
                    </div>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-ban"></i> Blocked</a>
                    </div>
                    {{--  --}}
                    <p class="mt-2">Who can see your content</p>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-lock"></i> Account Privacy</a>
                    </div>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-star-half"></i> Close Friends</a>
                    </div>
                    <div class="link-butoom">
                        <a href="" class=""><i class="bi bi-ban"></i> Blocked</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="wrap-edit-profile">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h4>Edit Profile</h4>
                    <div class="edit-image mt-5">
                        <div class="image">
                            <img src="{{ asset('images/' . $user->image) }}" alt="">
                            <p>{{ $user->username }}</p>
                        </div>
                        <div class="upload">
                            <label for="image" class="custom-file-input">Pilih File</label>
                            <input type="file" id="image" name="image" style="display: none;"
                                placeholder="Pilih file">
                        </div>
                    </div>
                    <h6 class="mt-4">Username</h6>
                    <div class="wrap-input" style="margin-top: 1rem">
                        <input type="text" name="username" class="w-100" value="{{ $user->username }}">
                    </div>
                    <h6 class="mt-4">Bio</h6>
                    <div class="wrap-input" style="margin-top: 1rem">
                        <textarea name="bio" id="" class="w-100" style="border: none;outline:none;" rows="2">{{ $user->bio }}</textarea>
                    </div>
                    <h6 class="mt-4">Gender</h6>
                    <div class="wrap-input" style="margin-top: 1rem">
                        <input type="text" name="gender" class="w-100" value="{{ $user->gender }}">
                    </div>
                    <p style="font-size: 0.8rem;color:rgb(119, 119, 119);">This won’t be part of your public profile.</p>
                    <div class="text-end mt-4">
                        <button class="btn btn-primary w-50">Submit</button>
                    </div>
                    <div class="link-gambar text-center mt-4">
                        <img src="../images/link.png" alt="">
                    </div>
                </form>


            </div>
        </div>
    </div>

@endsection
