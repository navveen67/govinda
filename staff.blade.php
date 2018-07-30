@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>

<style>
h1
{
position:absolute;
top:80px;
left:80px;
}

P1
{
position:absolute;
top:350px;
left:150px;
}

P2
{
position:absolute;
top:350px;
left:500px;
}
P3
{
position:absolute;
top:350px;
left:855px;
}

P4
{
position:absolute;
top:650px;
left:150px;
}
P5
{
position:absolute;
top:650px;
left:500px;
}
P6
{
position:absolute;
top:650px;
left:855px;
}






img {
    width: 350px;
    height: 290px;
    
    padding: 25px;
    padding-top: 67px;
    box-sizing: border-box;
}

    
</style>
<body>


<img src="v2.jpg" alt="Cinque Terre" width="300" height="150">

<img src="v3.jpg" alt="Cinque Terre" width="300" height="150">

<img src="v4.jpg" alt="Cinque Terre" width="300" height="150">
<br><br>


<img src="v5.png" alt="Cinque Terre" width="300" height="150">

<img src="v8.jpg" alt="Cinque Terre" width="300" height="150">

<img src="v9.jpg" alt="Cinque Terre" width="300" height="150">

  
</body>
</html>
<h1>Staff Details</h1>


<p1> <b>Name:MARUTHI <br>
        Type:RACER
        </b></p1>


<p2> <b>Name:SWIFT <br>
        Type:RACER
        </b></p2>



<p3> <b>Name:BENZ <br>
        Type:RACER
        </b></p3>

  
<p4> <b>Name:BENZ <br>
        Type:RACER
        </b></p4>


        
<p5> <b>Name:BENZ <br>
        Type:RACER
        </b></p5>

        
<p6> <b>Name:BENZ <br>
        Type:RACER
        </b></p6>
@endsection