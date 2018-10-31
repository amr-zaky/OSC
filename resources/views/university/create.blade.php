
@extends('layouts.app')


@section('content')
    <br>
        
    
    <div class="container">
        <h1>Create University</h1>
        <form method="POST" action="/OSC/public/university">

            {{csrf_field()}}

            <input class="form-control form-control-lg" name="uniName" type="text" placeholder="University Name">

            <br>

            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Image</label>
                <input type="file" class="form-control-file" name="uniImage">
            </div>
                
            <br>
            
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Files</label>
                <input type="file" class="form-control-file" name="unifile">
            </div>

            <button type="submit">Submit</button>

        </form>  
        <br>
        <a href="http://localhost/OSC/public/university"> <button class=" btn btn-primary">Back</button> </a>
    </div>



@endsection