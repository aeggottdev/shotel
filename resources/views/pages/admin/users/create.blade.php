@extends ('layouts.admin-master')
@section ('custom-styles')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@stop
@section ('custom-scripts')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stop
@section ('main-content')
<div class="container">
    <div class="card ">
        <div class="card-header text-center bg-secondary" >
            User Creation
        </div>
        <div class="card-body text-center justify-content-center">
            <form>
                <div class="card">
                    <div class="card-header bg-warning-soft">
                        User Personal Information
                    </div>
                    <div class="card-body">
                        <div class="form-group text-center">                    
                                <label for="firstName" class="col-form-label">First Name: </label>                       
                                <input type="text" class="form-control-sm" id="firstName" placeholder="First Name">&nbsp;
                                <label for="middleName" class="col-form-label">Middle Name:  </label>                        
                                <input type="text" class="form-control-sm" id="middletName" placeholder="Middle Name">&nbsp;
                                <label for="lastName" class="col-form-label">Last Name:  </label>                        
                                <input type="text" class="form-control-sm" id="lastName" placeholder="Last Name">&nbsp;                                         
                        </div>
                        <div class="form-group text-center">                  
                            <label for="street" class="col-form-label">Street Name: </label>
                            <input type="text" class="form-control-sm" id="street" placeholder="">&nbsp;
                            <label for="street" class="col-form-label">Street Number: </label>
                            <input type="text" class="form-control-sm" id="street" placeholder="">&nbsp;
                           
                        </div>
                        <div class="form-group text-center">                  
                            <label for="PhoneNumber" class="col-form-label">Phone Name: </label>
                            <input type="text" class="form-control-sm" id="street" placeholder="">&nbsp;
                            <label for="email" class="col-form-label">Email address: </label>
                            <input type="email" class="form-control-sm" id="email" placeholder="example@example">&nbsp;
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
@stop