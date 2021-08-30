<!-- Header Section Start -->
<section class="header">
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="logo">
            <a href="{{ route('index') }}" class="mobile">
                <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="logo-pic" class="img-fluid">
            </a>
            <span class="logo-2">
                <a href="https://unicornpirates.studio/" target="blank">
                    <img src="assets/img/brand/nikolina.png" alt="">
                </a>
                <a class="px-2">
                    <img src="assets/img/brand/bar.png" alt="">
                </a>
                <a href="https://fxps.services/" target="blank">
                    <img src="assets/img/brand/nikolina2.png" alt="">
                </a>
            </span>
        </div>
        <div class="trigger-icon">
            <span class="menu" onclick="openNav()">&#9776;</span>
        </div>
    </nav>
    <div id="sidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="side-menu" href="{{ route('index') }}">Home</a>
        <a class="side-menu" href="{{ route('speaking') }}">Speaking</a> 
        <a class="side-menu" href="{{ route('podcast') }}">Podcast</a> 
        <a class="side-menu" href="{{ route('courses') }}">Courses</a> 
        <a class="side-menu" href="{{ route('games') }}">Games</a>
        <a class="side-menu" href="{{ route('contact') }}">Contact</a>
    </div>
</section>
<!-- Header Section End -->