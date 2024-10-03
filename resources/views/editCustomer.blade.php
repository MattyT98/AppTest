@extends("mainPartial")
@section('page-content')
    <div class="container-fluid sticky-footer-wrapper mainContent">
        <div class="row padding-top-100 text-center align-cotent-center justify-content-center margin-gap-sidebar">
            <div class="col-md-12">                  
                <div class="row">                    
                    <div class="col-sm-12">
                        <h1 class="h1-responsive font-weight-bold text-center my-4 form-padding-50">Viewing Customer: {{$customer->name}}</h1>
                        <a href="/viewCustomers" class="btn btn-admin-nav btn-block form-send-opacity font-weight-bold text-center">Back</a>
                    </div>  
                </div>          
                
                <div class="row padding-top-50">
                    <div class="col-md-12">
                        <form id="updateForm" name="updateForm" action="/editCustomer/{{$customer->id}}" method="POST">
                            @csrf
                            <div class="row">                             
                                <div class="col-sm-1"></div>
                                <div class="col-xl-5 padding-top-10">
                                    <h2>Name: *</h2>
                                </div>
                                <div class="col-xl-5 align-self-end padding-top-10">
                                    <input class="form-control" type="text" name="name" value="{{$customer->name}}" placeholder="Enter New Name or leave blank">    
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                            
                            <div class="row">                             
                                <div class="col-sm-1"></div>
                                <div class="col-xl-5 padding-top-10">
                                    <h2>email: *</h2>
                                </div>
                                <div class="col-xl-5 align-self-end padding-top-10">
                                    <input class="form-control" type="text" name="email" value="{{$customer->email}}" placeholder="Enter Email">    
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                            <div class="row">                             
                                <div class="col-sm-1"></div>
                                <div class="col-xl-5 padding-top-10">
                                    <h2>phone: *</h2>
                                </div>
                                <div class="col-xl-5 align-self-end padding-top-10">
                                    <input class="form-control" type="text" name="phone"  value="{{$customer->phone}}" placeholder="Enter New phone or leave blank">    
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                            <div class="row">                             
                                <div class="col-sm-1"></div>
                                <div class="col-xl-5 padding-top-10">
                                    <h2>Address 1: * </h2>
                                </div>
                                <div class="col-xl-5 align-self-end padding-top-10">
                                    <input class="form-control" type="text" name="address1" value="{{$customer->address1}}" placeholder="Enter New Address or leave blank">    
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                            <div class="row">                             
                                <div class="col-sm-1"></div>
                                <div class="col-xl-5 padding-top-10">
                                    <h2>Address 2: </h2>
                                </div>
                                <div class="col-xl-5 align-self-end padding-top-10">
                                    <input class="form-control" type="text" name="address2"  value="{{$customer->address2}}" placeholder="Enter New Address or leave blank">    
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                            <div class="row">                             
                                <div class="col-sm-1"></div>
                                <div class="col-xl-5 padding-top-10">
                                    <h2>City: * </h2>
                                </div>
                                <div class="col-xl-5 align-self-end padding-top-10">
                                <input class="form-control" type="text" name="city" value="{{$customer->city}}" placeholder="Enter New City or leave blank">    
                                    
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                            <div class="row">                             
                                <div class="col-sm-1"></div>
                                <div class="col-xl-5 padding-top-10">
                                    <h2>Postcode: * </h2>
                                </div>
                                <div class="col-xl-5 align-self-end padding-top-10">
                                <input class="form-control" type="text" name="postcode"  value="{{$customer->postcode}}" placeholder="Enter New Postcode or leave blank">    
                                    
                                </div>
                                <div class="col-sm-1"></div>
                            </div>

                            <div class="row padding-top-50">                             
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-home btn-dark btn-block form-send-opacity text-dark" id="submitBtn" type="submit">Update Details</button>

                                </div>
                                <div class="col-sm-1"></div>
                            </div> 
                        </form>
                    </div>  
                </div>               
            </div>
        </div>
    </div>































@endsection