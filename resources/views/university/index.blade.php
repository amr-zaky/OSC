
@extends('layouts.app')


@section('content')
<br>
<br>

    <div class="container ">
        <h1>Univeristies</h1>
        <br>
        @foreach ($var as $uni)
            <h2><a href="http://localhost/OSC/public/university/{{$uni->id}}"> <strong>{{$uni->University_name}}</<strong></a> </h2>
            <br>
        @endforeach
        <br>
        <a href="http://localhost/OSC/public/university/create"> <button class=" btn btn-primary">Add University</button> </a>
    </div>


@endsection