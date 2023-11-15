@php
    $logos = App\Models\Logo::latest()->first();
@endphp
<header class="transparent">
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="column">Working Hours Monday - Friday <span
                            class="id-color"><strong>08:00-16:00</strong></span></div>
                    <div class="column">Toll Free <span class="id-color"><strong>1800.899.900</strong></span>
                    </div>
                    <!-- social icons -->
                    <div class="column social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-rss"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                    <!-- social icons close -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- logo begin -->
                <div id="logo">
                    <a href="/">
                        <img class="logo" src="{{ asset($logos->frontend_logo_image) }}" alt="">
                    </a>
                </div>
                <!-- logo close -->

                <!-- small button begin -->
                <span id="menu-btn"></span>
                <!-- small button close -->

                <!-- mainmenu begin -->
                <nav class="md-flex">
                    <ul id="mainmenu">
                        <li><a href="/">Home<span></span></a>
                        </li>
                        <li><a href="project-wide-4-cols.html">Projects</a>
                            <ul>
                                <li><a href="project-wide-4-cols.html">New: Creative Style</a>
                                    <ul>
                                        <li><a href="project-creative-one.html">Creative One</a></li>
                                        <li><a href="project-creative-two.html">Creative Two</a></li>
                                        <li><a href="project-creative-three.html">Creative Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Single Project</a>
                                    <ul>
                                        <li><a href="10_project-details.html">Architect</a></li>
                                        <li><a href="02_project-details.html">Web Studio</a></li>
                                        <li><a href="08_project-details-industry.html">Industry</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Misc</a>
                                    <ul>
                                        <li><a href="project-before-after.html">Before After</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="services.html">Services</a>
                            <ul>
                                <li><a href="service-1.html">Residential Design</a></li>
                                <li><a href="service-2.html">Hospitaly Design</a></li>
                            </ul>
                        </li>
                        <li><a href="services.html">Gallary</a>
                            <ul>
                                <li><a href="{{ route('image.gallery') }}">Image Gallary</a></li>
                                <li><a href="{{ route('video.gallery') }}">Video Gallary</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('all.blogs.list') }}">Blog</a>
                        </li>
                        <li><a href="{{ route('contact.us') }}">Contact</a>
                        </li>
                    </ul>
                </nav>

                <!-- mainmenu close -->

            </div>


        </div>
    </div>
</header>
