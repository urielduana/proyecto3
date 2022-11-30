@foreach ($selectBook as $consulta)
    <!-- Modal -->
    <div class="modal fade" id="deleteModal{{ $consulta->Id_book }}" tabindex="-1"
        aria-labelledby="exampleModalLabel{{ $consulta->Id_book }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Delete Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want to delete:<br>
                    <b>{{ $consulta->Title }}</b><br>
                    <b>ISBN: </b>{{ $consulta->Isbn }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('book.destroy', $consulta->Id_book) }}" method="POST">
                      @csrf
                      @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
