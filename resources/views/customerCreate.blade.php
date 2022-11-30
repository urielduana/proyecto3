@extends('template')
@section('content')

    @if (session('confirmacionregistro'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">Customer
            {{ session('confirmacionregistro')['name'] }} Registered <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button></div>
    @endif

    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-5 py-4">
            <div class="card-body">
                <form action="{{ route('customer.store') }}" method="POST">

                    @csrf


                    <h2 class="card-title mb-3">Customer Register</h6>

            </div>
            <h6 class="information mt-4">Fill the next info of the customer</h6>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="customerName" class="form-control" type="text"placeholder="Customer's Name"
                            value={{ old('customerName') }}>
                        <p class='card-title text-danger fst-italic fw-bold text-start'>{{ $errors->first('customerName') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input name="customerEmail" class="form-control"type="text"placeholder="Customer's Email"
                            value={{ old('customerEmail') }}>
                        <p class='card-title text-danger fst-italic fw-bold text-start'>
                            {{ $errors->first('customerEmail') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input name="ine" class="form-control" type="text" placeholder="No. INE"
                                value={{ old('ine') }}>
                            <p class='card-title text-danger fst-italic fw-bold text-start'>
                                {{ $errors->first('ine') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-dark btn-block confirm-button mt-4">Confirm</button>
            </form>
        </div>
    </div>
    </div>

@stop
