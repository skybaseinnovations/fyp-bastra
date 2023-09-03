@extends('front.component.layout');

@section('title', 'Orderhistory')

@section('content')
<br><br>

<style>
    table{
        border:1px solid black;
        border-collapse: collapse;
        /* border-radius:10px !important; */
    }
    table tr{
    }
</style>
    <div class="super_container">
    </div>
    <section>

        <div class="order p-5 mx-auto" style="width:1200px;">

            <h4>
                Order history
            </h4>
            <p>Check the status of recent orders and shipment.</p>
            
            {{-- Order Table: --}}
            <table class="table p-3 text-center table-sm table-responsive-sm " style="border-radius:2rem;">
                <thead>
                    <tr class="p-3" style="background-color:#ab4cfe;color:white;">
                        <th scope="col">Order Number</th>
                        <th scope="col">Date Placed </th>
                        <th scope="col">Total Amount</th>
                        <th>  
                            <button type="button" class="btn">View Order</button> &nbsp; 
                            <button type="button" class="btn">View Invoice</button>
                        </th>            
            </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>1</td>
                        <td>111</td>
                    </tr>
                </tbody>
            </table>
            
            {{-- Image section --}}
            
            <div class="image-des">
                <table class="text-center" style="width:100%;padding31rem;">
                <tr >
                       <div>
                        <td class="d-flex">           
                            <img src="front/images/product_7.png" alt="">
                            <div style="justify-content:center" class="my-5">
                                    <p>Shoes</p>
                                    <p>Adidas Shoes</p>
                                    <p>Qty: 5</p>
                                    <p>Order - ID : 12345678</p>
                                </td>
                            </div>
                       <td>   
                       </td>
            
                        <td> <a href="#" style="color:red;">Remove Product</a></td>
                        <td></td>
                      <td>
                      $120.00
                    </td>
                       </div>
                </tr>
                    <tr> 
                    <td>Delivered on August 24, 2023</td>
                    <td></td>
                    <td></td>
                    <td><a href="#">View Product</a></td>
                    <td><a href="#">Buy Again</a></td>
                    </tr>
                </table>
            
            
            {{-- Image section --}}
            
            <div class="image-des">
                <table class="text-center" style="width:100%;padding31rem;">
                <tr >
                       <div>
                        <td class="d-flex">           
                            <img src="front/images/product_5.png" alt="">
                            <div style="justify-content:center" class="my-5">
                                    <p>Shoes</p>
                                    <p>Adidas Shoes</p>
                                    <p>Qty: 5</p>
                                    <p>Order - ID : 12345678</p>
                                </td>
                            </div>
                       <td>   
                       </td>
            
                        <td> <a href="#" style="color:red;">Remove Product</a></td>
                        <td></td>
                      <td>
                      $120.00
                    </td>
                       </div>
                </tr>
                    <tr> 
                    <td>Delivered on August 24, 2023</td>
                    <td></td>
                    <td></td>
                    <td><a href="#">View Product</a></td>
                    <td><a href="#">Buy Again</a></td>
                    </tr>
                </table>
        </div>
    </section>
   

    @endsection