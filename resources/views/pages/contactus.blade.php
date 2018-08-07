@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    

        
            
                
                    
                        
                            
                                
    <section id="Contact_content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1290.9144293965423!2d90.36615309586004!3d23.773847148111553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1526157384095" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="contact_info">
                        <div class="contact-address">
                            <h3>Contact Information</h3>                            
                            <h5>  Human Development Foundation </h5>
                            
                            {!! $settings->address !!}
<!--
                            <p>Flat # 9/C, Rupayan-Shelford,Plot # 23/6, Block-B</p>
                            <p>Bir Uttam A.N.M Nuruzzaman Road, Shyamoli, Dhaka-1207.</p>
                            <p>Tel: 9121190,9121191</p>
                            <p>Cell: 01727-209098</p>
                            <p>Email: hdf.dhaka@gmail.com</p>
-->
                        </div>
                        
                        <div class="information">
                            <h3>Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos doloribus quisquam ex ab obcaecati, perspiciatis sint fugiat recusandae ut facilis.</p>
                        </div>
                        
                        <div class="contact_social_menu">
                            <h3>Stay Connected</h3>
                            <ul class="header-social-icons">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contact_form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="example@email.com" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" cols="30" rows="10"></textarea>
                            </div>
                            
                            <button class="btn btn-danger" type="reset">Reset</button>
                            <button class="btn btn-success" type="submit">Send</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>                             
                                        
    
@endsection