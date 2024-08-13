<link rel="stylesheet" href="../css/sideBar.css">
<style>
    /* Add this CSS to your stylesheet */
    /* Add this CSS to your stylesheet */
    .hide-text .logo-ig-inhome {
        display: none;
    }

    #searchContainer {
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        transform: translateX(-100%);
        opacity: 0;
    }

    #searchContainer.show {
        transform: translateX(0);
        opacity: 1;
    }

    #searchContainer.hide {
        transform: translateX(-100%);
        opacity: 0;
    }

    .hide-text .link-side a {
        transition: .3s ease-in-out;
        display: flex;
        align-items: center;
    }

    .hide-text .link-side a i,
    .hide-text .link-side a img {
        margin-right: 0;
        transition: .3s ease-in-out;
    }

    .hide-text .link-side a span {
        display: none;
        transition: .3s ease-in-out;
    }

    .sidebarContainer {
        z-index: 9999999;
    }
</style>
<div id="sidebarContainer" class="col-2" style="position: fixed">
    <div class="wrap-sidebar">
        <div class="logo-ig-inhome">
            <img src="../images/logo.png" alt="">
        </div>
        <div class="link-side">
            <a href="/home" class="@if (request()->route()->uri == 'dashboard') class='active' @endif"><i
                    class="bi bi-house-door-fill"></i> <span>Home</span></a>
            <a href="#" id="searchLink"><i class="bi bi-search"></i> <span>Search</span></a>
            <a href="/explore" @if (request()->route()->uri == 'explore') class='activ' @endif><i class="bi bi-compass"></i>
                <span>Explore</span></a>
            <a href="/reels" @if (request()->route()->uri == 'reels') class='activ' @endif><i class="bi bi-film"></i>
                <span>Reels</span></a>
            <a href=""><i class="bi bi-messenger"></i> <span>Messages</span></a>
            <a href=""><i class="bi bi-heart"></i> <span>Notifications</span></a>
            <a href=""><i class="bi bi-plus-square-fill"></i> <span>Create</span></a>
            <a href="/profile"@if (request()->route()->uri == 'profile') class='activ' @endif><img src="../images/profile.jpg"
                    style="border-radius: 50%;width:30px;height: 30px;" alt=""> <span>Profile</span></a>
            <a href=""><i class="bi bi-list"></i> <span>More</span></a>
        </div>
    </div>
    <div id="searchContainer" class="wrap-search-aktif-ril d-none">
        <div class="wrap-search-aktif">
            <h4>Search</h4>
            <div class="wrapinput">
                <div class="icon"><i class="bi bi-search"></i></div>
                <input type="text" id="searchInput" placeholder="search">
            </div>
        </div>
        <hr>
        @foreach ($users as $item)
            <div class="wrap-user-search">
                <a href="/viewUser/{{ $item->id }}">
                    <div class="img-user-search">
                        <img src="{{ asset('images/' . $item->image) }}" alt="">
                    </div>
                </a>
                <div class="fil-user-search mt-2">
                    <p><b>{{ $item->username }}</b></p>
                    <p>{{ \Illuminate\Support\Str::limit($item->bio, 30) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the elements by their IDs
        const searchLink = document.getElementById('searchLink');
        const searchContainer = document.getElementById('searchContainer');
        const sidebarContainer = document.getElementById('sidebarContainer');

        // Add a click event listener to the search link
        searchLink.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior

            // Toggle the visibility and animation of the searchContainer
            if (searchContainer.classList.contains('d-none')) {
                searchContainer.classList.remove('d-none');
                setTimeout(() => {
                    searchContainer.classList.add('show');
                }, 10); // Delay to allow the browser to register the removal of 'd-none'
            } else {
                searchContainer.classList.remove('show');
                searchContainer.classList.add('hide');
                setTimeout(() => {
                    searchContainer.classList.add('d-none');
                    searchContainer.classList.remove('hide');
                }, 300); // Match this duration with the CSS transition duration
            }

            // Toggle the classes of the sidebarContainer
            if (sidebarContainer.classList.contains('col-2')) {
                sidebarContainer.classList.remove('col-2');
                sidebarContainer.classList.add('col-4', 'd-flex', 'hide-text');
            } else {
                sidebarContainer.classList.remove('col-4', 'd-flex', 'hide-text');
                sidebarContainer.classList.add('col-2');
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var query = $(this).val();
            if (query.length > 2) { // Start searching when there are more than 2 characters
                $.ajax({
                    url: '{{ route('search') }}',
                    type: 'GET',
                    data: {
                        term: query
                    },
                    success: function(data) {
                        $('#searchContainer').removeClass('d-none').addClass('d-block');
                        var usersHtml = '';
                        data.forEach(function(user) {
                            usersHtml += `
                                <div class="wrap-user-search">
                                    <a href="/viewUser/${user.id}">
                                        <div class="img-user-search">
                                            <img src="/images/${user.image}" alt="">
                                        </div>
                                    </a>
                                    <div class="fil-user-search mt-2">
                                        <p><b>${user.username}</b></p>
                                        <p>${user.bio.substring(0, 30)}</p>
                                    </div>
                                </div>
                            `;
                        });
                        $('#searchContainer').html(usersHtml);
                    }
                });
            } else {
                $('#searchContainer').removeClass('d-block').addClass('d-none');
            }
        });
    });
</script>
