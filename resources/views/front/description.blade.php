<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Description</title>


<link rel="stylesheet" type="text/css" href="{{asset('front/styles/styles.css')}}">
  
<link rel="icon" type="image/x-icon" href="/front/images/clothes-hanger.png">
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
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<style>
    
/* Section */

.section
{
    display: flex;
    padding: 3em;
}
.photo3{
    /* padding: 2rem; */
   flex:2;
   flex-wrap: wrap;

}

.photo4
{
    /* padding: 1rem; */
    flex:6;
    flex-wrap: wrap;

}
.info1
{
    height: 500px;
    /* flex:1; */
    padding: 1rem;
}
@media(max-width:600px)
{
    .section{
        flex-direction: column;
    }
}
#pic1
{
    width: 100%;
    height: 100%;
}
.section .photo4 .button button:hover{
}
.b1:hover{
    background-color: #fa7cfe;

}
</style>

<body>
    	<!-- Main Navigation -->
        <header class="header trans_300">
            <!-- Main Navigation -->
    
            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <a href="#">Bas<span>tra</span></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="{{route('index')}}">home</a></li>
                                    <li class="account">
                                        <a href="{{route('category')}}">Category
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="{{route('category')}}">Men</a></li>
                                            <li><a href="{{route('category')}}">Women</a></li>
                                            <li><a href="{{route('category')}}">Accessories</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">contact</a></li>
                                    <li class="account">
                                        <a href="#">
                                            My Account
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="account_selection">
                                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<br>
<br>
<br>
<br>
<br>
<br>

<section>
    <div class="section">
      <div class="photo3 info1">
        <img class="align-items-center" style="width:400px;height:auto;" src="front/images/product_1.png" alt="">
        

      </div>
      <div class="photo4 info1"> 
       <p style="font-size:3rem;color:black;"> Hollister Hoodie</p>
       <div class="price d-flex">
        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
        <i class="fa-solid fa-star"style="color:orange;font-size:1.5rem;"></i>
    </div>
    <br>
    <button class="b1" style="background-color:#ab4cfe;color:white;padding:2rem;width:20px;height:20px;font-size:1.5rem;border:1px solid white;" type="button" class="">-</button>&nbsp;&nbsp;
    <button style="background-color:#ab4cfe;color:white;padding:2rem;width:20px;font-size:1.5rem;height:20px;border:1px solid white;" type="button" class="">+</button>
    <div class="product_price">Price: $520.00</div>
    <br>
    <h3>Product Description</h3>
    <p style="font-size:1rem;color:black;"> Casual and Laid back hoodie has kangaroo pockets that give you a convenient place for your hands, as well as drawstrings to adjust the size of the hood. 
    It is designed specifically for comfort, providing warmth and protection from elements, with soft fabric underneath.</p>

        <button class="b1" style="background-color:#ab4cfe;color:white;padding:1rem;width:200px;font-size:1.5rem;border:1px solid white;" type="button" class="">Buy</button>&nbsp;&nbsp;
        <button style="background-color:#ab4cfe;color:white;padding:1rem;width:200px;font-size:1.5rem;border:1px solid white;" type="button" class="">Add to Cart</button>
     <br>
     <br>
     <br>
<br>
    </div>
  </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>