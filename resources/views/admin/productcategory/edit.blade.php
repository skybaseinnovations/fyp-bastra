@extends('admin.templates.edit')

@section('edit_form')
    @include('admin.productcategory.form')
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
