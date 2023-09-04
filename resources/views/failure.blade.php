<!doctype html>
<html lang="en">
<head>
    <title>Bastra</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bastra">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('front/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet"
          type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/responsive.css') }}">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/categories_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/categories_responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/contact_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/contact_responsive.css') }}">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Open+Sans:ital,wght@0,400;1,300&family=Roboto:wght@500&family=Source+Code+Pro:ital@1&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>

        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
            border: none;
        }

        .form-check-input:checked {
            background-color: #6d4cfe;
            border-color: #6d4cfe;
        }
    </style>
</head>
<body>
<div class="super_container">
    <div style="height: 97vh">
        <div class="container fill_height">
            <div class="row d-flex align-items-center fill_height">
                <div class="card w-50 m-auto rounded elevation-1 border-0 "
                     style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                    <div class="card-body m-5 p-0">
                        <div class="row p-0">
                            <h4 class="text-center my-2" style="color: #de2c1f">{{$order->payment_method == 'cod'? 'Order' : 'Payment'}} Failed</h4>
                            <svg id="myImg" class="mainimage" width="80%" height="33px" style="fill:#de2c1f" role="img" xmlns="http://www.w3.org/2000/svg" h viewBox="0 0 1000 1000"><title>Error SVG icon</title><path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,929.7C263.6,929.7,71.3,736.4,71.3,500S263.6,71.3,500,71.3c236.4,0,428.8,192.4,428.8,428.8S736.4,929.7,500,929.7z M673.3,326.8c-12-12-31.3-12-43.3,0L500,456.7L370.1,326.8c-12-12-31.4-12-43.3,0c-11.9,11.9-11.9,31.4,0,43.3L456.7,500L326.7,629.8c-11.9,12-11.9,31.4,0,43.3c12,12,31.4,12,43.3,0L500,543.3l129.8,129.8c12,12,31.4,12,43.3,0c12-11.9,12-31.3,0-43.3L543.3,500l129.8-129.9C685.2,358.1,685.2,338.7,673.3,326.8z"></path></svg>

                            <table class="table table-borderless bg-light center mx-2 px-5 my-4 ">
                                <tr>
                                    <td class=" text-secondary">Order ID</td>
                                    <td class=" text-secondary text-right">#{{$order->id}}</td>
                                </tr>
                                <tr>
                                    <td class=" text-secondary">Payment type</td>
                                    <td class=" text-secondary text-right">{{$order->payment_method == 'skypay'? 'Sky Pay': 'COD'}}</td>
                                </tr>
                                <tr>
                                    <td class=" text-secondary">Order Date</td>
                                    <td class="text-secondary text-right">{{$order->created_at->format('Y-m-d')}}</td>
                                </tr>
                                <tr>
                                    <td class="text-secondary">Number of Items</td>
                                    <td class="text-secondary text-right">{{$order->orderItems->count()}}</td>
                                </tr>

                            </table>
                            <a href="{{route('order-history')}}" class="btn btn-primary">Go To Order History</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

