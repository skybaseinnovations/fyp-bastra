<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">

                    <label for="">Product Id</label>
                    <input type="number" name="product_id" value="{{ isset($item) ? $item->product_id : '' }}"
                        id="" class="form-control" placeholder="" aria-describedby="helpId" required
                        {{ isset($show) ? $show : '' }}>

                    <label for="">Order Id</label>
                    <input type="number" name="order_id" value="{{ isset($item) ? $item->order_id : '' }}"
                        id="" class="form-control" placeholder="" aria-describedby="helpId" required
                        {{ isset($show) ? $show : '' }}>
                    {{-- <label for="">Product Category</label>
                    <select name="product_category_id" id="product_category_id" class="form-control">
                        @foreach ($productCategories as $category)
                            <option value="{{ $category->id }}"
                                {{ $category->id === $item->product_category_id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach

                    </select> --}}

                    <label for="">Total Amount</label>
                    <input type="number" name="total_amount"
                        value="{{ isset($item) ? $item->total_amount : '' }}"id="" class="form-control"
                        placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                    <label for=""> Quantity</label>
                    <input type="number" name="quantity" id=""
                        value="{{ isset($item) ? $item->quantity : '' }}" class="form-control" placeholder=""
                        aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                </div>
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
