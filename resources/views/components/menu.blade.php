<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    nav {
        font-family: 'Poppins', sans-serif;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
    }

    .navbar-brand img.logo {
        width: 50px; /* Ukuran logo */
        height: auto;
        margin-right: 10px; /* Memberikan jarak antara logo dan foto */
    }

    .navbar-brand img.profile {
        width: 40px; /* Ukuran foto */
        height: 40px; /* Ukuran foto agar simetris */
        border-radius: 50%; /* Membuat foto berbentuk lingkaran */
        border: 2px solid #fff; /* Memberikan border putih agar foto lebih jelas */
    }

    .nav-link img {
        width: 20px; /* Ukuran gambar di dalam menu */
        height: auto;
        margin-right: 8px; /* Memberikan sedikit jarak antara gambar dan teks */
    }

    .navbar-toggler img {
        width: 25px;
        height: auto;
    }
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container fw-bold">
            <a class="navbar-brand" href="/" aria-label="Homepage">
                <!-- Logo -->
                <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/12/09/1653401665.jpg" 
                     alt="Brand Logo" class="logo">
                <!-- Foto di samping logo -->
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS6bIeY8IEI8p8zzTtl5E_YzZaA19bMmK2tw&s" 
                     alt="Profile Photo" class="profile">
                    NEWS JATIM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="https://logonesia.com/wp-content/uploads/2024/05/Logo-Kabupaten-Ponorogo00-248x300.svg" alt="Menu Icon">
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto fw-bold">
                    @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                            <img src="https://i.pinimg.com/474x/d2/12/2a/d2122a52c65f4cb86f2afd1ba240f820.jpg" alt="Home Icon">
                            HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <img src="https://i.pinimg.com/564x/57/00/c0/5700c04197ee9a4372a35ef16eb78f4e.jpg" alt="Profile Icon">
                            PROFILE
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">
                            <img src="https://st5.depositphotos.com/81614282/67619/v/450/depositphotos_676194432-stock-illustration-phone-flat-icon-trendy-symbol.jpg" alt="Contact Icon">
                            CONTACT
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('users') }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0a/Users_icon.svg" alt="Users Icon">
                            DATA USERS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/e/eb/Hand_money_icon.svg" alt="Transfer Icon">
                            TRANSFER PINJAMAN
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Information_icon.svg" alt="Rumor Icon">
                            RUMOR
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Category_icon.svg" alt="Categories Icon">
                            CATEGORIES
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts') }}">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Post_icon.svg" alt="Posts Icon">
                            POSTS
                        </a>
                    </li>
                    @endif
                </ul>
                <div class="d-flex">
                    @if (!Auth::check())
                    <a href="{{ route('signup') }}" class="btn btn-dark me-2 fw-bold">Signup</a>
                    <a href="{{ route('signin') }}" class="btn btn-dark fw-bold">Signin</a>
                    @else
                    <a href="{{ route('logout') }}" class="btn btn-dark fw-bold">Logout</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>
