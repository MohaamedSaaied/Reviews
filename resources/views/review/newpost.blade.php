@extends('layouts.nav')
@section('title','Review Home')
<div style="background-color: blueviolet; height:auto";>
@section('content')


<form action="/add" method="post" enctype="multipart/form-data" >
@csrf
    <div style=" margin-left:25px;">
  <label for="title">Title:</label>
  <input type="text" name="title">

  <label for="cat">Choose a Catigoury:</label>
  <select name="catigoure" style="margin-bottom:20px;" >
  <option value="Cars">Cars</option>
  <option value="Movies">Movies</option>
  <option value="Books">Books</option>
  <option value="Resturants">Resturants</option>
  </select>

    <input type="file" name="path" style="width:200px; height:50px;">
    <textarea style=" height:400px; width:500px;" name="review"></textarea>
    <br><br>
    <input type="submit" class="bt" >
   </div>

  </form>




</div>
@endsection
