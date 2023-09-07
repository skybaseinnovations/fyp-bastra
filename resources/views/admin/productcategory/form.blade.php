<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">

                    <label for="">Product Category Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" value="{{ isset($item) ? $item->name : '' }}" id=""
                        class="form-control" placeholder="" aria-describedby="helpId" required
                        {{ isset($show) ? $show : '' }}>

                    <label for="" class=" {{ isset($show) ? 'd-none' : '' }}">Image</label>
                    <input id='newImg' type="file" name="img_url" value=""
                        class="form-control {{ isset($show) ? 'd-none' : '' }}" placeholder="" aria-describedby="helpId"
                        onchange={handleImgChange()}>
                </div>
            </div>

            <div class="col-md-4 {{ isset($item) ? '' : 'd-none' }}">
                <img id='imgContainer'
                    src="{{ isset($item->img_url) ? asset('uploads/' . $item->img_url) : asset('uploads/' . 'placeholder.png') }}"
                    alt="" class="rounded " style="width:250px;height:300px;object-fit:contain;">
            </div>
        </div>
        <div class="row float-right">
            <div>
                <button type="submit" class="btn btn-primary  {{ isset($show) ? 'd-none' : '' }}">Submit</button>
                @if (isset($show))
                    <a onclick="history.back()" class="btn btn-warning">
                        Back</a>
                @else
                    <button type="submit" class="btn  btn-secondary">
                        Cancel</button>
                @endif

            </div>
        </div>
    </div>
</section>
