{{-- Mobile Menu --}}
<div class="edina_tm_mobile_menu">
    <div class="mobile_menu_inner">
        <div class="container">
            <div class="mobile_in">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('assets/web/img/logo/light.png') }}" alt="Light logo" />
                    </a>
                </div>
                <div class="my_trigger">
                    <div class="hamburger hamburger--collapse-r">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <div class="container">
            <div class="dropdown_inner">
                <ul class="anchor_nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonial">Testimonial</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

{{-- Sidebar Menu --}}
<div class="edina_tm_sidebar">
    <div class="sidebar_inner">
        <div class="logo">
            <a href="#">
                <img src="{{ asset('assets/web/img/logo/light.png') }}" alt="Light logo" />
            </a>
        </div>
        <div class="menu">
            <ul class="anchor_nav">
                <li>
                    <div class="list_inner current">
                        <a href="#home"><img class="svg custom" src="{{ asset('assets/web/img/svg/home.svg') }}"
                                alt="" />Home</a>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <a href="#about"><img class="svg custom" src="{{ asset('assets/web/img/svg/human.svg') }}"
                                alt="" />About</a>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <a href="#service"><img class="svg custom" src="{{ asset('assets/web/img/svg/service.svg') }}"
                                alt="" />Service</a>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <a href="#portfolio"><img class="svg custom" src="{{ asset('assets/web/img/svg/portfolio.svg') }}"
                                alt="" />Portfolio</a>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <a href="#testimonial"><img class="svg custom"
                                src="{{ asset('assets/web/img/svg/testimonial.svg') }}" alt="" />Testimonial</a>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <a href="#blog"><img class="svg custom" src="{{ asset('assets/web/img/svg/blog.svg') }}"
                                alt="" />Blog</a>
                    </div>
                </li>
                <li>
                    <div class="list_inner">
                        <a href="#contact"><img class="svg custom" src="{{ asset('assets/web/img/svg/contact.svg') }}"
                                alt="" />Contact</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="author">
            <div class="inner">
                <div class="image">
                    {{-- <img src="{{ asset('assets/web/img/about/avatar.jpg') }}" alt="Profile picture"> --}}
                    {{-- <div class="main" data-img-url="assets/img/about/avatar.jpg"></div> --}}
                </div>
                <div class="short">
                    <h3>Arie Setiadi</h3>
                    <a href="#">ariee.setiadi@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
