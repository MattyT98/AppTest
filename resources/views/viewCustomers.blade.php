@extends("mainPartial")
@section('page-content')
    <div class="container-fluid sticky-footer-wrapper mainContent">
        <div class="row vh90 padding-top-100 text-center align-cotent-center justify-content-center margin-gap-sidebar">
            <div class="col-md-12">                  
                <div class="row">
                    <div class="col-sm-3"></div>                        
                    <div class="col-sm-6">
                        <h1 class="h1-responsive font-weight-bold text-center my-4 form-padding-50">View Customers</h1>
                    </div>  
                    <div class="col-sm-3"></div>
                </div>
                
                <div class="row padding-top-50">
                    <div class="col-sm-1"></div>                        
                    <div class="col-sm-10 table-responsive">
                        <table class="table table-hover users-table-background">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">email</th>
                                    <th scope="col">Address 1</th>
                                    <th scope="col">Address 2</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Postcode</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $customers as $customer)
                                    <tr>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->address1}}</td>
                                        <td>{{$customer->address2}}</td>
                                        <td>{{$customer->city}}</td>
                                        <td>{{$customer->postcode}}</td>
                                        
                                        <td><a href="editCustomer/{{$customer->id}}" class="btn-admin-nav btn-block form-send-opacity font-weight-bold text-center text-decoration-none">Edit Customer</a></td>
                                        <td><a href="deleteCustomer/{{$customer->id}}" class="btn-admin-nav btn-block form-send-opacity font-weight-bold text-center text-decoration-none">Remove Customer</a></td>
                                    </tr>
                                @endforeach
                            </tbody>                                                       
                        </table>
                    </div>  
                    <div class="col-sm-1"></div>
                </div>                    
            </div>
        </div>
    </div>   
@endsection