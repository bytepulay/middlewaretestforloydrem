@extends('layout.master')
@section('title','Register Page')
@section('content')
  <div class="row">
      <div class="col-md-2"></div>
    <div class="col-md-8 mr-20 mt-5 " >
        <div class="card card-body  " >

            <form method="post">
                
                <legend>User Register</legend>
                <hr>
            
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="username">User Name</label>
                  <input type="text" class="form-control" id="username"  name="name"  placeholder="Enter User Name" required>
                </div>
{{-- 
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="phone" class="form-control" id="phone"  name="phone" placeholder="Enter Phone" required>
                  </div> --}}

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                  </div>

                  <div class="form-group">
                    <label for="comfirmpassword">Comfirm Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Comfirm Password" required>
                  </div>

                  {{-- <div class="form-group">
                    <label for="township">Township</label>
                    <input type="text" class="form-control" id="township" name="township" placeholder="Enter Township" required>
                  </div>
 --}}

                  {{-- {{-- <div class="form-group">
                    <label for="address">Address </label>
                    <input type="address" class="form-control" id="address" name="address" placeholder="Home Noumber , Street , Quartar" required>
                  </div> --}}
        
                <button type="submit" class="btn btn-primary float-right">Register</button>
              </form>
        </div>
       
    </div>
</div>
@endsection