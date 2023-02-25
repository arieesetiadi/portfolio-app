<div class="app-header">
    <nav class="navbar navbar-light navbar-expand-lg container">
        <div class="container-fluid">
            <div class="navbar-nav" id="navbarNav">
                <div class="logo">
                    <a href="{{ route('dashboard') }}">System</a>
                </div>
            </div>
            <div class="d-flex">
                <ul class="navbar-nav">
                    <li class="nav-item hidden-on-mobile">
                        <a class="nav-link language-dropdown-toggle" href="#" id="languageDropDown"
                            data-bs-toggle="dropdown">
                            <img src="assets/images/flags/us.png" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end language-dropdown"
                            aria-labelledby="languageDropDown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/flags/germany.png" alt="">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <img src="assets/images/flags/italy.png" alt="">Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="app-menu">
    <div class="container">
        <ul class="menu-list">
            <li class="active-page">
                <a href="{{ route('dashboard') }}" class="active">Dashboard</a>
            </li>
            <li>
                <a href="#">Web<i class="material-icons has-sub-menu">keyboard_arrow_down</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="mailbox.html">Mailbox<span
                                class="badge rounded-pill badge-danger float-end">87</span></a>
                    </li>
                    <li>
                        <a href="file-manager.html">File Manager</a>
                    </li>
                    <li>
                        <a href="calendar.html">Calendar<span
                                class="badge rounded-pill badge-success float-end">14</span></a>
                    </li>
                    <li>
                        <a href="todo.html">Todo</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
