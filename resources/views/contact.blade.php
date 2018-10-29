@extends('layouts.app')
@section('content')

<h1>Contact</h1>

{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
    	{{Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter name'])}}
    </div>
    <div class="form-group">
    	{{Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter email'])}}
    </div>
    <div class="form-group">
    	{{Form::textarea('message', '',['class'=>'form-control','placeholder'=>'Any message!!'])}}
    </div>
    <center>
    	{{Form::submit('submit',['class'=>'btn btn-success', 'id'=>'block'])}}
    </center>
{!! Form::close() !!}

<!--
<form action="/action_page.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" >
  <br>
  Last name:<br>
  <input type="text" name="lastname">
  <br><br>
  <input type="submit" value="Submit">
</form>-->
@endsection