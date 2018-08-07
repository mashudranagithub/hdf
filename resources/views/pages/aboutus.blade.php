@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    
    <section id="Mission-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="aboutus.html" class="active">About Us</a></li>
                    </ul>
                    <div class="page-header text-center">
                        <h2>Our Mission</h2>
                    </div>
                    <div class="page-content">
                        <p> <span>Human Development Foundation (HDF)</span> is a non-profit social welfare organization of Bangladesh, working since 1994 with an endeavor to promote welfare of the poor and provide assistance for the distressed by social welfare steps, especially in the field of education.</p>
                        <br>
                        <p>To set up, run or assist institutions of learning for imparting of knowledge, institutions for imparting technical and vocational skills, institutions for studies and research and for formal and non-formal education, institutions promoting human development and welfare, centres for medical aid and relief, homes for children, orphans and old people, maternity homes, homes for women and generally to promote welfare of the poor and relief of distress by social and welfare steps, to print and publish or assist in printing and publishing books, papers, scientific and useful works and adopt programmes and projects which may seem conducive to the attainment of the objects of the Foundation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <section id="Management-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h2>Our Management</h2>
                    </div>
                    <div class="page-content">
                        <p><span>Management of Human Development Foundation:</span></p>
                        <br>
                        <p>As per Articles of Association of the organization, a Governing Board under the general control and supervision of a General Body manages the affairs of the Foundation. The General Body is composed of all members of the Foundation with the proviso that the total number of members shall not exceed 27. And the Governing Board shall be composed of not more than 11 members from among the members of the General Body. At present there are 20 members in the General Body and 9 members in the Governing Board. The term of the Board is for two years. Therefore, the election of the Board is held every alternate year. The Governing Board has the responsibility to determine the direction and scope of the activities of the Foundation. It also has the responsibility to approve projects and to approve and administer the annual and supplementary budgets. The Governing Board exercises full management and financial control of the Foundation.</p>
                        
                        
                        <div class="members">
                            <div class="management-members">
                               
                                @foreach($main_management as $m_management)
                                <div class="single-member">
                                    <div class="row justify-content-between">
                                        <div class="col-md-8">
                                            <div class="member-detail">
                                                <h5> {{ $m_management->name }} </h5>
                                                <p> {!! $m_management->details !!} </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$m_management->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                            
                            <div class="present-governing-body">
                                <h4 class="members-heading text-center">Members of the present Governing Board (2012 -2014) </h4>
                                
                                @foreach($present_governing_board as $p_gov_board)
                                
                                <div class="single-member">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="member-detail">
                                                <h5> {{ $p_gov_board->name }} </h5>
                                                <p> {!! $p_gov_board->details !!} </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$p_gov_board->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @endforeach
                                
                            </div>
                            
                            
                            <div class="general-body">
                                <h4 class="members-heading text-center">Members of the General Body </h4>
                                <h5 class="members-sub-heading">Sponsors (Membership Category – I) :</h5>
                                
                                
                                @foreach($sponsor_membership as $s_member)
                                <div class="single-member">
                                    <div class="row justify-content-between">
                                        <div class="col-md-9">
                                            <div class="member-detail">
                                                <h5>{{ $s_member->name }}</h5>
                                                <p>{!! $s_member->details !!}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$s_member->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                                <h5 class="members-sub-heading">Government Officials (Membership Category – II): Currently lying vacant.</h5>
                                
                                <h5 class="members-sub-heading">Eminent Individuals  (Membership Category – III): </h5>
                                
                                
                                @foreach($govt_official_membership as $g_member)
                                <div class="single-member">
                                    <div class="row justify-content-between">
                                        <div class="col-md-8">
                                            <div class="member-detail">
                                                <h5>{{ $g_member->name }}</h5>
                                                <p>{!! $g_member->details !!}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$g_member->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                                <h5 class="members-sub-heading">Private Organizations  (Membership Category – IV): </h5>
                                
                                @foreach($private_membership as $private)
                                <div class="single-member">
                                    <div class="row justify-content-between">
                                        <div class="col-md-10">
                                            <div class="member-detail">
                                                <h5>{{ $private->name }}</h5>
                                                <p>{!! $private->details !!}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$private->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                <h5 class="members-sub-heading">Members from Social Welfare Organizations (Membership Category - V)	:</h5>
                                
                                
                                @foreach($social_membership as $social_member)
                                <div class="single-member">
                                    <div class="row justify-content-between">
                                        <div class="col-md-10">
                                            <div class="member-detail">
                                                <h5> {{ $social_member->name }} </h5>
                                                <p> {!! $social_member->details !!} </p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$social_member->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                            
                            <div class="lest-forget">
                                <h4 class="members-heading text-center">Lest We Forget</h4>
                                
                                @foreach($lest_forget as $past_member)
                                <div class="single-member">
                                    <div class="row justify-content-between">
                                        <div class="col-md-10">
                                            <div class="member-detail">
                                                <h5> {{$past_member->name}} </h5>
                                                <p>{!! $past_member->details !!}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$past_member->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        
    <section id="Staff-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header text-center">
                        <h2>The Staffs of the HDF</h2>
                    </div>
                    <div class="page-content">
                        <div class="row">
                           
                           
                            @foreach($staffs as $single_staff)
                            <div class="col-md-3">
                                <div class="staff-image">
                                    <img src="{{url('/frontend/images/staffs/'.$single_staff->image )}}" alt="Member Image">
                                    <h4 class="text-center">{{$single_staff->name}}</h4>
                                    <h5 class="text-center">{{$single_staff->designation}}</h5>
                                </div>
                            </div>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="Management-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
<!--
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="sponsors.html" class="active">Sponsors of HDF</a></li>
                    </ul>
-->
                    <div class="page-header text-center">
                        <h2>Our First Ten Sponsors</h2>
                    </div>
                    <div class="page-content">
                        
                        
                        <div class="members">
                            <div class="sponsors-members">
                                
                                @foreach($first_ten_sponsors as $sponsor)
                                <div class="single-member">
                                    <div class="row justify-content-between">
                                        <div class="col-md-8">
                                            <div class="member-detail">
                                                <h5>{{ $sponsor->name }}</h5>
                                                {!! $sponsor->details !!}
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="member-image">
                                                <img src="{{url('/frontend/images/aboutpage/members/'.$sponsor->image )}}" alt="Member Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                            
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection