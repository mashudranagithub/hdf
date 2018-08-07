    <header id="Header">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <ul class="call-mail animated bounceInLeft">
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="#">+880{{$settings->phone}}</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a href="#">{{$settings->email}}</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-md-5">
                        <div id="Latest_notice">
                            
                        <p>
                            <a href="{{route('noticeboardpage')}}"><span class="typer" id="main" data-words="{{ $top_slide_notice[0]->notice_title }}" data-colors="black" data-delay="100" data-deleteDelay="1000"></span></a>
                            <span class="cursor" data-cursorDisplay="|" data-owner="main"></span>
                        </p>
                        </div>
                    </div>
                    
                    <div class="col-auto animated bounceInRight">
                        <ul class="header-social-icons">
                            <li><a href="{{ $settings->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $settings->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $settings->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{ $settings->google_plus }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="{{ $settings->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
                            
        <div class="header-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="logo">
                            <a href="{{route('homepage')}}">
                                <img src="{{asset('frontend/images/logo/'.$settings->logo ) }}" alt="Logo">
                            </a>
                            <span class="name">Human Development Foundation</span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg navbar-light">
                               
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                       
                                        <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{route('aboutpage')}}">About Us</a></li>
                                           
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{route('tasprojectpage')}}"> TAS </a>
                                                <a class="dropdown-item" href="{{route('ruslepprojectpage')}}"> RUSLEP </a>
                                                <a class="dropdown-item" href="{{route('supportingprojectpage')}}"> Supporting Projects </a>
                                            </div>
                                        </li>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publications
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                               <a class="dropdown-item" href="{{route('annualpage')}}">Annual Report</a>
                                               <a class="dropdown-item" href="{{route('nobinpage')}}">Nobin</a>
                                            </div>
                                        </li>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Photo Gallary
                                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{route('managementgallarypage')}}"> Management </a>
                                                <a class="dropdown-item" href="{{route('tasgallarypage')}}"> TAS </a>
                                                <a class="dropdown-item" href="{{route('ruslepgallarypage')}}"> RUSLEP </a>
                                                <a class="dropdown-item" href="{{route('supportinggallarypage')}}"> Supporting Projects </a>
                                            </div>
                                        </li>
                                        

                                        
                                        <li class="nav-item"> <a class="nav-link" href="{{route('contactpage')}}">Contact Us</a> </li>
                                        
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>