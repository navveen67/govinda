@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  img{
      padding-bottom:20%;
      }
      .jumbotron{
          padding:0px;
      }

      </style>
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h1>NayaGadai</h1> 
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
    responsive, mobile-first projects on the web.</p> 
          
  <img src="v2.jpg" alt="Cinque Terre" width="404" height="336"> 
  <br><br>
  
  <img src="v3.jpg" alt="Cinque Terre" width="404" height="336"> 
</div>


</body>
@endsection
</html>
