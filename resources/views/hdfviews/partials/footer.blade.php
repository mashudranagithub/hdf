    <footer id="Footer">
        
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="contact-address">                         
                            <h5>  Human Development Foundation </h5>
                            
                            {!! $settings->address !!}
<!--
                            <p>Flat # 9/C, Rupayan-Shelford</p>
                            <p>23/6, Block-B, Bir Uttam A.N.M Nuruzzaman Road, Shyamoli, Dhaka-1207.</p>
                            <p>Tel: 9121190,9121191 Cell: 01727-209098</p>
                            <p></p>
                            <p>Email: hdf.dhaka@gmail.com, info@hdfbd.com</p>
-->
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="footer-social-menu text-center">
                            <ul>
                                <li>
                                    <a href="{{ $settings->facebook }}" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                        <p>Facebook</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings->twitter }}" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                        <p>Twitter</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings->google_plus }}" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                        <p>Google +</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings->youtube }}" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                        <p>Youtube</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $settings->linkedin }}" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                        <p>LinkedIn</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p class="copyright-text">©2018, All rights reserved <a href="http://hdfbd.com">Human Development Foundation </a></p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="developed-by">Powered by <a href="http://www.websoftbd.net" target="_blank">websoftbd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!--  back to top button  -->
    <a href="#" id="top"><i class="fa fa-chevron-up"></i></a>

    

    <!-- Optional JavaScripts -->
    
    <!-- jQuery Library -->
    <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
    
    <!-- Popper.js -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    
    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    
    <!-- JsGallary JS -->
    <script src="{{asset('frontend/js/jquery.jsgallery.min.js')}}"></script>
    
    <!-- owlCarousel JS -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    
    <!-- Wow JS -->
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    
    
    <script src="{{asset('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.themepunch.tools.min.js')}}"></script>
    
    
    <!-- HDF JS -->
    <script src="{{asset('frontend/js/typer.js')}}"></script>
    <script src="{{asset('frontend/js/hdf.js')}}"></script>
	
		<script>
		
		$(function() {
			$("body").jsgallery({
				imgSelector : ".gallary-image>a>img",
				bgClickClose : true
			});
		});
		
	</script>

    
    
  </body>
</html>