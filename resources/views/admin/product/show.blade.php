@extends('admin.templates.show')

@section('show_form')

    <div class="form-group">
        <div class="row">

            <div class="col-md-8">
                <label for="">Product Name</label>
                <input type="text" name="name" value="{{ $item->name }}" id="" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for="">Product Price</label>
                <input type="number" name="price" value="{{ $item->price }}" id="" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>
                <label for="">Product Category</label>
                <input type="text" name="product_category_id" value="{{ $item->productCategory->name }}" id=""
                    class="form-control" placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>


                <label for="">Product Description</label>
                <input type="text" name="description" value="{{ $item->description }} "id=""
                    class="form-control" placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                <label for=""> Rating</label>
                <input type="number" name="rate_count" id="" value="{{ $item->rate_count }}" class="form-control"
                    placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>
            </div>

            <div class="col-md-4">
                <img id='imgContainer'
                    src="{{ isset($item->img_url) ? asset('uploads/' . $item->img_url) : asset('uploads/' . 'placeholder.png') }}"
                    alt="" class="rounded " style="width:250px;height:300px;object-fit:contain;">
            </div>
            <div class="col-md-12 ">
                <a onclick="history.back()" class="btn btn-warning float-right">
                    Back</a>
            </div>
        </div>

    </div>
@stop
