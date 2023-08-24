<div class="d-flex justify-content-around">
    <a href="{{ route($view, $item->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i>
        View</a>
    <a href="{{ route($edit, $item->id) }}" class="btn btn-sm btn-success"> <i class="fa fa-edit"></i>
        Edit</a>
    <form onsubmit="return confirm('Are you sure?')" action="{{ route($delete, $item->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i>
            Delete</button>
    </form>
</div>
