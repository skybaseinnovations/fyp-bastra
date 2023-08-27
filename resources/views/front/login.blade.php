@extends('front.component.layout');

@section('title', 'Login')

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
        display: flex;
        padding: 5em;
        width:1300px;
    }
    .photo3{
       flex-wrap: wrap;
    
    }
    
    .photo4
    {
        flex-wrap: wrap;
        justify-content: center;
    }
    .info1
    {
        height: 500px;
        flex:1;
        padding: 1rem;
    }
    @media(max-width:600px)
    {
        .section{
            flex-direction: column;
        }
    }
    
   
    </style>
<body>
	<br>
	<br>
	<br>
	<br>
<section>
    <div class="section">
      <div class="photo3 info1">
        <img class="align-items-center" style="width:100%;" src="front/images/shopping.avif" alt="">
        

      </div>
      <div class="photo4 info1 d-flex"> 
        <h3>Welcome to Bastra</h3>
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-12 ">
          <label for="validationCustom01" class="form-label">Email</label>
          <input type="email" class="form-control" id="validationCustom01" value="" required>
         
        </div>
        <div class="col-md-12">
          <label for="validationCustom02" class="form-label">Password</label>
          <input type="password" class="form-control" id="validationCustom02" value="" required>
        </div>
        <div class="forget">
            &nbsp;&nbsp;&nbsp;<a href="{{ route('register') }}">Forget Password?</a>
        </div>
        <br>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Login</button>
        </div>
      </form>

     <br>
     <br>
     <br>
<br>
    </div>
  </section>
@endsection