<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <a class="dn_btn" href="tel:+22892971128"><i class="ti-mobile"></i>+1 (205) 325-1235</a>
                <span class="dn_btn"> <i class="ti-location-pin"></i> 4256 Marshville Road, Poughkeepsie, NY 12601</span>
            </div>
            <div class="float-right">
                <span class="follow_us">Follow us: </span>
                <ul class="list header_social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                    <li><a href="#"><i class="ti-skype"></i></a></li>
                    <li><a href="#"><i class="ti-vimeo"></i></a></li>
                </ul>	
            </div>
        </div>	
    </div>	
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">Home</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{route('a-propos.index')}}">A Propos</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{route('services.index')}}">services</a></li> 
                        <li class="nav-item"><a class="nav-link" href="{{route('nos-projets.index')}}">Nos Projets</a></li>    
                        <li class="nav-item ">
                            <a href="{{route('nos-projets.index')}}" class="nav-link">Nos News</a>
                            
                        </li> 
                        <li class="nav-item"><a class="nav-link" href="{{route('contacts.index')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="right-button">
                    <ul>
                        <li class="shop-icon"><a href="#"><i class="ti-phone"></i></a></li>
                        <li><a id="search" href="#"><i class="ti-search"></i></a></li>
                    </ul>

                </div> 
            </div>
        </nav>

    </div>
    {{-- <div class="search_input" id="search_input_box">
        <div class="container ">
            <form class="d-flex justify-content-between search-inner">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div> --}}
</header>