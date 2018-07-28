@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>


  <style>
  left-padding:50px;
  </style>
</head>
<body>
  
</body>
</html>
<h1>Contact</h1>

{!!  Form::open(['url' => 'contact/submit'])  !!}
      <div class="form-group">
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '' ,['class'=>'form-control','placeholder'=>'enter the name'])}}
      </div> 
      <div class="form-group">
      {{Form::label('email', 'E-mail')}}
      {{Form::text('email', '',['class'=>'form-control','placeholder'=>'enter the email'])}}
      </div>
        <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::text('message', '',['class'=>'form-control','placeholder'=>'enter the message(within 60 characters)'])}}
      </div>  
      <div>
       {{Form::submit('submit',['class'=> 'btn btn-primary'])}}
      </div> 
      
      .
   {!!  Form::close()  !!}
@endsection