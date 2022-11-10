<button type="button" title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="modal" data-target="#delete{{ $id }}">
    <i class="la la-trash"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="delete{{ $id }}" tabindex="-1" aria-labelledby="deleteLabel{{ $id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel{{ $id }}">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">{{ __('Are you sure you want to delete :name?', ['name' => $name]) }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                <form action="{{ $route }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


