@extends('template')
@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-5 py-4">
            <div class="card-body">
                <form action="{{ route('customer.update', $consultaId->Id_customer) }}" method="POST">

                    @csrf
                    {!! method_field('PUT') !!}


                    <h2 class="card-title mb-3">Customer Edit</h2>

            </div>
            <h6 class="information mt-4">Fill the next info of the customer</h6>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="customerName" class="form-control" type="text"placeholder="Customer's Name"
                            value="{{ $consultaId->Name}}">
                        <p class='card-title text-danger fst-italic fw-bold text-start'>{{ $errors->first('customerName') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="customerEmail" class="form-control"type="text"placeholder="Customer's Email"
                            value="{{ $consultaId->Customer_email }}">
                        <p class='card-title text-danger fst-italic fw-bold text-start'>
                            {{ $errors->first('customerEmail') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input name="ine" class="form-control" type="text" placeholder="No. INE"
                                value="{{ $consultaId->ine }}">
                            <p class='card-title text-danger fst-italic fw-bold text-start'>
                                {{ $errors->first('ine') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('customer.index') }}" class="btn btn-danger mt-4">Cancel</a>
                <button class="btn btn-primary btn-dark btn-block confirm-dark mt-4">Update Book</button>
            </div>
            </form>
        </div>
    </div>
    </div>


@stop
