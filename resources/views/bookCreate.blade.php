@extends('template')
@section('content')


    @if (session('confirmacionregistro'))
        <script>
            Swal.fire(
                'Book registered',
                'Book {{ session('confirmacionregistro')['title'] }} Registered!',
                'success'
            )
        </script>
    @endif

    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-5 py-4">
            <div class="card-body">
                <form action="{{ route('book.store') }}" method="POST">

                    @csrf


                    <h6 class="card-title mb-3">Introduce ISBN of your book</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="isbn" class="form-control" type="text"placeholder="ISBN">
                                <p class='card-title text-danger fst-italic fw-bold text-start'>{{ $errors->first('isbn') }}
                                </p>

                            </div>
                        </div>

                    </div>
                    <h6 class="information mt-4">Fill the next info of the book</h6>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="title" class="form-control" type="text"placeholder="Title"
                                    value={{ old('title') }}>
                                <p class='card-title text-danger fst-italic fw-bold text-start'>
                                    {{ $errors->first('title') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="author" class="form-control" type="text"placeholder="Author's Name"
                                    value={{ old('author') }}>
                                <p class='card-title text-danger fst-italic fw-bold text-start'>
                                    {{ $errors->first('author') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="pages" class="form-control" type="text" placeholder="No. Pages"
                                    value={{ old('pages') }}>
                                <p class='card-title text-danger fst-italic fw-bold text-start'>
                                    {{ $errors->first('pages') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="editorial" class="form-control" type="text" placeholder="Editorial"
                                    value={{ old('editorial') }}>
                                <p class='card-title text-danger fst-italic fw-bold text-start'>
                                    {{ $errors->first('editorial') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="editorialEmail"
                                    class="form-control"type="text"placeholder="Editorial's Email"
                                    value={{ old('editorialEmail') }}>
                                <p class='card-title text-danger fst-italic fw-bold text-start'>
                                    {{ $errors->first('editorialEmail') }}</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-dark btn-block confirm-button mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>

@stop
