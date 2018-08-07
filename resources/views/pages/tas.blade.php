@extends('hdfviews.layouts.master')

@section('content')
    
    <section style="padding-top:131.5px;"></section>
    
    <section id="Project_page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <ul class="about-pages-menu">
                        <li><a href="../index.html">Home <i class="fa fa-angle-double-right"></i></a></li>
                        <li><a href="tas.html">Projects <i class="fa fa-angle-double-right"></i> </a></li>
                        <li><a href="tas.html" class="active">TAS</a></li>
                    </ul>
                    
                    @foreach($project as $p)
                    
                    <h3 class="text-center"> {{ $p->project_name }} </h3>
                    
                    {!! $p->details !!}
                    
                    @endforeach
                    

              
                    <p>Batch wise portfolio of TAS members:</p>  
                    
                    @foreach($batches as $single_batch)
                    <span>{{ $single_batch->name }} :</span>
                    <table border="1" width="100%">
                        <tbody>
                            <tr>
                                <td width="30">Sl. No.</td>
                                <td width="247">Name of the Students</td>
                                <td width="150">Picture</td>
                                <td width="80">Membership No.</td>
                                <td width="238">Education: Institution &amp; Degree</td>
                                <td width="282">Present Professional Status</td>
                            </tr>
                            
                            @foreach($batch_members as $single_member)
                                @if($single_batch->name == $single_member->batch_name)
                                <tr>
                                    <td>01</td>
                                    <td>{{ $single_member->name }}</td>
                                    <td width="150"><img src="{{url('frontend/images/batchmembers/'.$single_member->image)}}" width="150" style="display: inline;"></td>
                                    <td>{{ $single_member->membership_no }}</td>
                                    <td>{{ $single_member->degree }}</td>
                                    <td>{{ $single_member->present_professional_status }}</td>
                                </tr>
                                @endif
                            @endforeach
                            

                        </tbody>
                    </table>
                    @endforeach
                    
               
                </div>
            </div>
        </div>
    </section>
    


@endsection