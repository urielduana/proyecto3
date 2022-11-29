@extends('template')
@section('content')
@include('modalDeleteBook')

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
                    <h5 class="card-title text-center mb-1">{{ $consulta->Title}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ISBN: </b>{{ $consulta->Isbn}}</li>
                    <li class="list-group-item"><b>Author: </b>{{ $consulta->Author}}</li>
                    <li class="list-group-item"><b>No Pages: </b>{{ $consulta->Number_page}}</li>
                    <li class="list-group-item"><b>Editorial: </b>{{ $consulta->Editorial_name}}</li>
                    <li class="list-group-item"><b>Editorial Email: </b>{{ $consulta->Editorial_email}}</li>

                </ul>
                <div class="card-body text-center">
                    <button type="button" class="btn btn-dark" >Edit</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$consulta->Id_book}}">Delete</button>
                </div>
            </div>
        @endforeach


    </div>

@stop
