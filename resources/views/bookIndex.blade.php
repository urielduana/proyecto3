@extends('template')
@section('content')
    @include('modalDeleteBook')

    @if (session()->has('confirmacioneliminar'))
        {!! "<script>
                Swal.fire(
                    'Deleted!',
                    'Book Deleted',
                    'success'
                )
                </script>" !!}
    @endif

    @if (session()->has('confirmacioneditar'))
    {!! "<script>
            Swal.fire(
                'Updated!',
                'Book Updated',
                'success'
            )
            </script>" !!}
@endif

<div class="d-flex justify-content-center"><h1 class="card-title mt-3 ">Book Data</h1></div>
<div class="d-flex justify-content-center"><a href="{{ route('book.create') }}" class="btn btn-warning mt-4 text-white p-3">Add Book</a></div>
    

    <div class="d-flex justify-content-center m-3 flex-wrap">
        @foreach ($selectBook as $consulta)
            @csrf
            {!! method_field('PUT') !!}
            <div class="card bg-light m-3 rounded-lg border-gray border-2" style="width: 18rem;">
                <div class="d-flex justify-content-center p-3">
                    <img src="https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../releases/preview/2017/png/iconmonstr-book-27.png&r=0&g=0&b=0"
                        alt="" width="30%">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-1">{{ $consulta->Title }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ISBN: </b>{{ $consulta->Isbn }}</li>
                    <li class="list-group-item"><b>Author: </b>{{ $consulta->Author }}</li>
                    <li class="list-group-item"><b>No Pages: </b>{{ $consulta->Number_page }}</li>
                    <li class="list-group-item"><b>Editorial: </b>{{ $consulta->Editorial_name }}</li>
                    <li class="list-group-item"><b>Editorial Email: </b>{{ $consulta->Editorial_email }}</li>

                </ul>
                <div class="card-body text-center">
                    <a href="{{ route('book.edit', $consulta->Id_book) }}" class="btn btn-dark">
                        Edit
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal{{ $consulta->Id_book }}">Delete</button>
                </div>
            </div>
        @endforeach


    </div>

@stop
