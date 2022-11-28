@extends('template')
@section('content')

<div class="d-flex justify-content-center m-3 flex-wrap">
    <div class="card bg-light" style="width: 18rem;">
        <div class="d-flex justify-content-center p-3">
            <img src="https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../releases/preview/2017/png/iconmonstr-book-27.png&r=0&g=0&b=0" alt="" width="30%">
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">ISBN:</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Author: </li>
            <li class="list-group-item">No Pages: </li>
            <li class="list-group-item">Editorial: </li>
            <li class="list-group-item">Editorial Email: </li>

        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    
    
</div>    

@stop
