<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" name="location"
                        value="{{ isset($item) ? $item->location : '' }}"id="" class="form-control"
                        placeholder="" aria-describedby="helpId" required {{ isset($show) ? $show : '' }}>

                    <label for=""> Payment Status</label>
                    <select name="payment_status" id="" class="form-control">
                        <option value="Pending">Pending</option>
                        <option value="Completed">Completed</option>
                        <option value="Failed">Failed</option>
                        <option value="Cancelled">Cancelled</option>
                    </select>

                    <label for=""> Order Status</label>
                    <select name="order_status" id="" class="form-control">
                        <option value="Pending">Pending</option>
                        <option value="Processing">Processing</option>
                        <option value="Problem">Problem</option>
                        <option value="Pickup Available">Pickup Available</option>
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
