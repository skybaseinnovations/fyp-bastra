@extends('admin.templates.show')

@section('show_form')

    <div class="form-group">
        <div class="row">

            <div class="col-md-8">
                <label for="">Order Number</label>
                <input type="text" name="name" value="{{ $item->number }}" id="" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for="">User Id</label>
                <input type="number" name="price" value="{{ $item->user_id }}" id="" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for="">Order Location</label>
                <input type="text" name="description" value="{{ $item->location }} "id="" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for=""> Payment Reference Id</label>
                <input type="number" name="rate_count" id="" value="{{ $item->payment_reference_id }}"
                    class="form-control" placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for=""> Payment Status</label>
                <input type="text" name="rate_count" id="" value="{{ $item->payment_status }}"
                    class="form-control" placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for=""> Order Status</label>
                <input type="text" name="rate_count" id="" value="{{ $item->order_status }}"
                    class="form-control" placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label class="mt-4"> Order Details</label>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">Order Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($item->orderItems as $key => $orderItem)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $orderItem->product_title ?? 'N/a' }}</td>
                                <td>{{ $orderItem->quantity ?? 'N/a' }}</td>
                                <td>{{ $orderItem->total_amount ?? 'N/a' }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>


            <div class="col-md-12 ">
                <a onclick="history.back()" class="btn btn-warning float-right">
                    Back</a>
            </div>
        </div>

    </div>
@stop
