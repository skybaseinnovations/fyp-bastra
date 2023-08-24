<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">

                    <label for="">Order Number</label>
                    <input type="number" name="number" value="{{ isset($item) ? $item->number : '' }}" id=""
                        class="form-control" placeholder="" aria-describedby="helpId" required
                        {{ isset($show) ? $show : '' }}>

                    <label for=""> User Id</label>
                    <input type="number" name="user_id" value="{{ isset($item) ? $item->user_id : '' }}" id=""
                        class="form-control" placeholder="" aria-describedby="helpId" required
                        {{ isset($show) ? $show : '' }}>

                    <label for="">Location</label>
                    <input type="text" name="location"
                        value="{{ isset($item) ? $item->location : '' }}"id="" class="form-control"
                        placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                    <label for=""> Payment Reference Id</label>
                    <input type="number" name="payment_reference_id" id=""
                        value="{{ isset($item) ? $item->payment_reference_id : '' }}" class="form-control"
                        placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                    <label for=""> Payment Status</label>
                    <select name="payment_status" id="" class="form-control">
                        <option value="Pending">Pending</option>
                        <option value="Accepted">Accepted</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>

                    <label for=""> Order Status</label>
                    <select name="payment_status" id="" class="form-control">
                        <option value="Pending">Pending</option>
                        <option value="Delivering">Delivering</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>
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
