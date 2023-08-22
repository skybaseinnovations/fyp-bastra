@extends('admin.templates.edit')

@section('edit_form')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">

                        <label for="">Product Name</label>
                        <input type="text" name="name" value="{{ $item->name }}" id="" class="form-control"
                            placeholder="" aria-describedby="helpId">

                        <label for="">Product Price</label>
                        <input type="number" name="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId" value="{{ $item->price }}">

                        <label for="">Product Description</label>
                        <input type="text" name="description" value="{{ $item->description }}" id=""
                            class="form-control" placeholder="" aria-describedby="helpId">

                        <label for=""> Rating</label>
                        <input type="number" name="rate_count" id="" value="{{ $item->rate_count }}"
                            class="form-control" placeholder="" aria-describedby="helpId">

                        <label for="">Image</label>
                        <input id='newImg' type="file" name="img_url" value="" class="form-control"
                            placeholder="" aria-describedby="helpId" onchange={handleImgChange()}>
                    </div>
                </div>
                <div class="col-md-4">
                    <img id='imgContainer' src="{{ asset('uploads/' . $item->img_url) }}" alt="" class="rounded"
                        style="width:250px;height:300px;object-fit:contain;">
                </div>
            </div>
            <div class="row float-right">
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </section>


@stop
@section('scripts')
    <script type="text/javascript">
        $("document").ready(function() {
            setTimeout(function() {
                $("div.alert") - > remove();
            }, 3000);
        });
    </script>
    <script>
        const fileInput = document.getElementById('newImg');

        // handle image upload event
        fileInput.addEventListener('change', function(event) {
            files = event.target.files[0]

            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function() {
                // console.log(this.result)
                document.getElementById('imgContainer').style.display = "block";
                document.getElementById('imgContainer').src = this.result;
            });
            const selectedFile = event.target.files[0]; // Get the first selected file
            if (selectedFile) {
                const fileName = selectedFile.name;
                console.log('Selected file:', fileName);
            }
        });
    </script>
@endsection
