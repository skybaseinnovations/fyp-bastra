@extends('front.component.layout');

@section('content')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
<style>
    
    /* Section */
    
    .section
    {
        display: flex;
        padding: 3em;
        width:1100px;
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
    <div class="increment d-flex">
        <button class="b1" style="background-color:#ab4cfe;color:white;width:30px;height:30px;font-size:1.5rem;border:1px solid white;" type="button" class="">-</button>&nbsp;&nbsp;
        <input type="number" style="width:30px;text-align:center;" value="1">&nbsp;&nbsp;
        <button style="background-color:#ab4cfe;color:white;width:30px;font-size:1.5rem;height:30px;border:1px solid white;" type="button" class="">+</button>
    </div>
    <br>
    <div class="product_price">Price: $520.00</div>
    <br>
    <h3>Product Description</h3>
    <p style="font-size:1rem;color:black;text-align:justify;"> Casual and Laid back hoodie has kangaroo pockets that give you a convenient place for your hands, as well as drawstrings to adjust the size of the hood. 
    It is designed specifically for comfort, providing warmth and protection from elements, with soft fabric underneath.</p>

        <button class="b1" style="background-color:#ab4cfe;color:white;padding:1rem;width:150px;font-size:1.2rem;border:1px solid white;" type="button" class="">Buy</button>&nbsp;&nbsp;
        <button style="background-color:#ab4cfe;color:white;padding:1rem;width:150px;font-size:1.2rem;border:1px solid white;" type="button" class="">Add to Cart</button>
     <br>
     <br>
     <br>
<br>
    </div>
  </section>
@endsection


