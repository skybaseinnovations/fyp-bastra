@extends('admin.templates.show')

@section('show_form')

    <div class="form-group">
        <div class="row">

            <div class="col-md-8">
                <label for="">Product Id</label>
                <input type="number" name="product_id" value="{{ $item->product_id }}" id="" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for="">Order Id</label>
                <input type="number" name="order_id" value="{{ $item->order_id }}" id="" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>


                <label for="">Total Amount</label>
                <input type="text" name="total_amount" value="{{ $item->total_amount }} "id=""
                    class="form-control" placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>
                <label for=""> Quantity</label>
                <input type="quantity" name="rate_count" id="" value="{{ $item->quantity }}" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>
            </div>
            <div class="col-md-12 ">
                <a onclick="history.back()" class="btn btn-warning float-right">
                    Back</a>
            </div>
        </div>

    </div>
@stop
