@extends('template')
@section('content')


    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-5 py-4">
            <div class="card-body">
                <form action="{{ route('book.update', $consultaId->Id_book) }}" method="POST">

                    @csrf
                    {!! method_field('PUT') !!}


                    <h2 class="card-title mb-3">Book Edit</h6>


                        <h6 class="card-title mb-3">Introduce ISBN of your book</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="isbn" class="form-control" type="text"placeholder="ISBN"
                                        value="{{ $consultaId->Isbn }}">
                                    <p class='card-title text-danger fst-italic fw-bold text-start'>
                                        {{ $errors->first('isbn') }}
                                    </p>

                                </div>
                            </div>

                        </div>
                        <h6 class="information mt-4">Fill the next info of the book</h6>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="title" class="form-control" type="text"placeholder="Title"
                                        value="{{ $consultaId->Title }}">
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
                                        value="{{ $consultaId->Author }}">
                                    <p class='card-title text-danger fst-italic fw-bold text-start'>
                                        {{ $errors->first('author') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="pages" class="form-control" type="text" placeholder="No. Pages"
                                        value="{{ $consultaId->Number_page }}">
                                    <p class='card-title text-danger fst-italic fw-bold text-start'>
                                        {{ $errors->first('pages') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="editorial" class="form-control" type="text" placeholder="Editorial"
                                        value="{{$consultaId->Editorial_name}}">
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
                                        value="{{$consultaId->Editorial_email}}">
                                    <p class='card-title text-danger fst-italic fw-bold text-start'>
                                        {{ $errors->first('editorialEmail') }}</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('book.index') }}" class="btn btn-danger mt-4">Cancel</a>
                            <button class="btn btn-primary btn-dark btn-block confirm-dark mt-4">Update Book</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

@stop
