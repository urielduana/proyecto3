@extends('template')
@section('content')
    @include('modalDeleteCustomer')

    <div class="d-flex justify-content-center m-3 flex-wrap">
        @foreach ($selectCustomer as $consulta)
            @csrf
            {!! method_field('PUT') !!}
            <div class="card bg-light m-3 rounded-lg border-gray border-2" style="width:auto;">
                <div class="d-flex justify-content-center p-3 flex-wrap">
                    <div class="text-center pt-3 mb-1">
                        <img src="https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../releases/preview/2012/png/iconmonstr-user-5.png&r=0&g=0&b=0"
                            alt="" width="60%">
                    </div>

                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Name: </b>{{ $consulta->Name }}</li>
                            <li class="list-group-item"><b>Email: </b>{{ $consulta->Customer_email }}</li>
                            <li class="list-group-item"><b>INE: </b>{{ $consulta->ine }}</li>
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-dark">Edit</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $consulta->Id_customer }}">Delete</button>
                            </div>
                        </ul>
                    </div>

                </div>

            </div>
        @endforeach


    </div>

@stop
