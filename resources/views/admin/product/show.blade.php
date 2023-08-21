@extends('admin.templates.show')

@section('show_form')
    <div class="form-group">
        <label for="">Product Name</label>
        <input type="text" name="name" value="" id="" class="form-control" placeholder=""
            aria-describedby="helpId">

        <label for="">Product Price</label>
        <input type="number" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
            value="">

        <label for="">Product Description</label>
        <input type="text" name="description" value="" id="" class="form-control" placeholder=""
            aria-describedby="helpId">

        <label for=""> Rating</label>
        <input type="number" name="rate_count" id="" value="" class="form-control" placeholder=""
            aria-describedby="helpId">

        <label for="">Image</label>
        <input type="file" name="img_url" value="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="float-right">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-secondary">Cancel</button>
    </div>
@stop
