@extends('layouts.app')
@section('content')
    

<div class="jumbotron">
    <h1 class="row3">Official information</h1>
    <div class="col-md-6">
       
          <form action="{{ action('UserController@postRegister') }}" method="post">
           <div class="form-group">
                <label for="name">Your Name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name')}}">
             </div>
              <!--Value field will save the old email -->  

               <div class="form-group">
               <label for="email">Email</label>
               <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email')}}">
               </div>
             
               <div class="form-group">
                  <label for="comapny-name">Company Name</label>
                  <input class="form-control" type="text" name="company_name" id="company_name">
              </div>

             <div class="form-group">
                 <label for="joining-date">Joining Date</label>
                 <input class="form-control" type="text" name="joining_date" id="joining_date">
             </div>

             <div class="form-group">
                <label for="designation">Designation</label>
                <input class="form-control" type="text" name="designation" id="designation">
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input class="form-control" type="text" name="salary" id="salary">
            </div>

              <button type="submit" class="btn btn-primary">Submit</button>
              <input type="hidden" name="_token" value="{{ Session::token() }} ">   
              </form>
                 </div>
             
  </div>


   
<div class="jumbotron">
    <h1 class="row3">General information</h1>
    <div class="col-md-6">
       
          <form action="{{ action('UserController@postRegister') }}" method="post">
           <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input class="form-control" type="text" name="dob" id="dob" value="{{ Request::old('dob')}}">
             </div>
              <!--Value field will save the old email -->  

               <div class="form-group">
               <label for="address">Permanent Address</label>
               <input class="form-control" type="text" name="address" id="address" value="{{ Request::old('address')}}">
               </div>
             
               <div class="form-group">
                  <label for="present-address">Present Address</label>
                  <input class="form-control" type="text" name="present_address" id="present_address">
              </div>

             <div class="form-group">
                 <label for="mobile-number">Mobile Numbe</label>
                 <input class="form-control" type="text" name="number" id="number">
             </div>

             <div class="form-group">
                <label for="passport-number">Passport Number</label>
                <input class="form-control" type="text" name="passport_number" id="passport_number">
            </div>

            <div class="form-group">
                <label for="profile">Profile</label>
                <input class="form-control" type="text" name="profile" id="profile">
            </div>

              <button type="submit" class="btn btn-primary">Submit</button>
              <input type="hidden" name="_token" value="{{ Session::token() }} ">   
              </form>
                 </div>
             
  </div>



  @stop