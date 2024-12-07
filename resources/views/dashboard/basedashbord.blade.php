<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar fixed-top">
    <a class="navbar-brand" href="#">
    <img src="{{ asset('inpageimages\png-transparent-infant-jesus-of-prague-religion-christ-child-the-imitation-of-christ-statue-jesus-statue-child-infant-resurrection-of-jesus-thumbnail.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
    Admin
  </a>
        <button class="toggle-btn" id="toggle-btn">
            <i class="bi bi-list"></i>
        </button>
        <div class="profile-dropdown float-end">
            <img src="https://via.placeholder.com/40" alt="Profile">
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Activity Log</a>
                @if(auth()->check())
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                @endif

        
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div id="sidebar">
        <ul>
            <li><i class="bi bi-speedometer2"></i>Dashboard</li>
            <li><i class="bi bi-building-add"></i><a href="{{ route('admin.addproperty') }}"> Add Property</a></li>
            <li><i class="bi bi-building-add"></i><a href=""> Add Keys</a></li>
            <li><i class="bi bi-box-arrow-right"></i>Logout</li>
        </ul>
    </div>

    <div id="sidebar-overlay" class="sidebar-overlay"></div>
    @yield('content')
  

    <!-- end wrapper -->
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>



</body>
</html>
