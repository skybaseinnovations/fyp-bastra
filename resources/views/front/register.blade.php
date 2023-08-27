@extends('front.component.layout');

@section('title', 'Contact')

@section('content')


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans:ital,wght@0,400;1,300&family=Roboto:wght@500&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">

<style>

  /* Section */
    
  .section
    {
        padding: 5em;
        width:1300px;
    }

    </style>
<body>
	<br>
	<br>
	<br>
	<br>
<section>
    <div class="section w-50 m-auto">
      
        <h3 class="w-50 m-auto">Register Here</h3>
        <br>
        <br>
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-12 ">
          <label for="validationCustom01" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="validationCustom01" value="" required>
         
        </div>
        <div class="col-md-12 ">
          <label for="validationCustom01" class="form-label">Username</label>
          <input type="text" class="form-control" id="validationCustom01" value="" required>
         
        </div>
        
        <div class="col-md-12 ">
          <label for="validationCustom01" class="form-label">Email</label>
          <input type="email" class="form-control" id="validationCustom01" value="" required>
        </div>
        
        <div class="col-md-12">
          <label for="validationCustom02" class="form-label">Password</label>
          <input type="password" class="form-control" id="validationCustom02" value="" required>
        </div>
        <div class="col-md-12">
          <label for="validationCustom02" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="validationCustom02" value="" required>
        </div>

        <br>
        <br>
        <br>
        <br>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Register</button>
        </div>
      </form>

     <br>
     <br>
     <br>
<br>
    </div>
  </section>
@endsection