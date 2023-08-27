@extends('front.component.layout');

@section('content-header')
Product Cart
@stop
	@section('content')
    <style>
 .section
    {
        display: flex;
        padding: 3em;
    }
    .cart1{
       flex-wrap: wrap;
    
    }
    
    .cart2
    {
        flex-wrap: wrap;
    
    }
    .info1
    {
        /* height: 500px; */
        flex:1; 
        padding: 1rem;
    }
    @media(max-width:600px)
    {
        .section{
            flex-direction: column;
        }
    }
    .cart-page
    {
      /* margin:80px auto; */
    }
    table{
        text-align: center;
        width:100%;
        border-collapse: collapse;
    }
    .cart-info
    {
        display: flex;
        flex-wrap: wrap;
    }
    th{
        text-align: center;
        padding: 5px;
        color:#ffff;
        background:#ab4cfe;
        font-weight: normal;
    }
    td{
        padding: 10px 5px;
    }
    td input{
        width:40px;
        height: 30px;
        padding: 5px;
    }
    td img{
        width: 80px;
        height:80px;
        margin-right: 10px;
    }

    </style>
<div class="container pt-5">
    <section>
        <div class="section">
          <div class="cart1 info1">
            <div class="container cart-page">
                <table>
                    <tr>
                        <th>S.N</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="cart-info">
                                <img src="front/images/product_7.png">
                                <div style="justify-content: center">
                                    <h4>Givency</h4>
                                    <p>Price: $50.00</p>
                                    <a style="color: red">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <div class="cart-info">
                                <img src="front/images/product_5.png">
                                <div style="justify-content: center">
                                    <h4>Givency</h4>
                                    <p>Price: $50.00</p>
                                    <a style="color: red">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div class="cart-info">
                                <img src="front/images/product_10.png">
                                <div style="justify-content: center">
                                    <h4>Givency</h4>
                                    <p>Price: $50.00</p>
                                    <a style="color: red">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <div class="cart-info">
                                <img src="front/images/product_3.png">
                                <div style="justify-content: center">
                                    <h4>Givency</h4>
                                    <p>Price: $50.00</p>
                                    <a style="color: red">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>$50.00</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <div class="cart-info">
                                <img src="front/images/product_4.png">
                                <div style="justify-content: center">
                                    <h4>Givency</h4>
                                    <p>Price: $50.00</p>
                                    <a style="color: red">Remove</a>
                                </div>
                            </div>
                        </td>
                        <td><input type="number" value="1"></td>
                        <td>$50.00</td>
                    </tr>
                </table>
            </div>
    
          </div>
          <div class="cart2 info1"> 
            <div class="total-price">
                <table>
                    <tr>
                        <td style="font-size:1.2em;">Order Summary</td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>$200.00</td>
                    </tr>
                </table>
            </div>
        </div>
      </section>

</div>

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>