@extends("mainPartial")
@section('page-content')

    <div class="container-fluid sticky-footer-wrapper mainContent">
        <div class="row padding-top-100 text-center align-cotent-center justify-content-center margin-gap-sidebar">
            <div class="col-md-12">                  
                <div class="row">                    
                    <div class="col-sm-12">
                        <h1 class="h1-responsive font-weight-bold text-center my-4 form-padding-50">Create New Customer</h1>
                    </div>  
                </div>          
                
                <div class="row padding-top-50">
                    <div class="col-md-12">
                        <form name="createNewCustomerForm" id="createNewCustomerForm" method="post" action="/createNewCustomer">
                            @csrf
                            <div class="form-group">
                                <label for="customer_name">Name *</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <label for="customer_email">Email *</label>
                                <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label for="customer_phone">Phone *</label>
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <label for="customer_address1">Address 1 *</label>
                                <input type="text" id="address1" name="address1" class="form-control" placeholder="Address Line 1" required="">
                            </div>
                            <div class="form-group">
                                <label for="customer_address2">Address 2</label>
                                <input type="text" id="address2" name="address2" placeholder="Address Line 2" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="customer_city">City *</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="City" required="">
                            </div>
                            <div class="form-group">
                                <label for="customer_postcode">Postcde *</label>
                                <input type="text" id="postcode" name="postcode" class="form-control" placeholder="Postcode" required="">
                            </div>
                            <button class="btn btn-home btn-dark btn-block form-send-opacity text-dark" id="submitBtn" type="submit">Create Customer</button>
                        </form>
                    </div>  
                </div>               
            </div>
        </div>
    </div>
@endsection






















