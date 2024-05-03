<div style="background-color: blueviolet; height:auto" ;>
    @extends('layouts.nav')
  @section('title','Catigoures')

    @section('content')


    <h1 style="margin-left: 10px; margin-top:60px; color:black;">Catigoures</h1>

    <div class="con">

        <div class="card">
          <img src="\img\books.png" alt="book" style="width: 100%; height:300px">
          <a href="{{ route('book') }}"><button class="btn"><i class="fa fa-folder"></i>Books</button></a>
          </div>


        <div class="card">
        <img src="\img\rest.png" alt="car" style="width: 100%; height:300px">
        <a href="{{ route('rest') }}"><button class="btn"><i class="fa fa-folder"></i>Resturants</button></a>  
          </div>


      <div class="card">
        <img src="\img\mov.jpg" alt="Movies" style="width: 100%;; height:300px">
        <a href="{{ route('mov') }}"><button class="btn"><i class="fa fa-folder"></i>Movies</button></a>
      </div>

        <div class="card">
        <img src="\img\carsrun.png" alt="car" style="width: 100%; height:300px">
        <a href="{{ route('car') }}"><button class="btn"><i class="fa fa-folder"></i>Cars</button></a>
        </div>


      </div>




    @endsection
</div>