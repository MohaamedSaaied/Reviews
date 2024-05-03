@extends('layouts.nav')
@section('title','Book')
<div style="background-color: blueviolet; height:auto";>
        @section('content')


        <h1 style="margin-left: 20px;">Book</h1>



        <div class="con">
            @foreach ($posts as $posts )
                
                @if ( $posts->catigoure ==='Books')
                
            
                  
            
                         <div class="card">
                        
                          <h2>{{ $posts->title }}</h2>
                        
                         <img src="\storage\posts\{{ $posts->path }}" style="width: 250px; height:250px" alt="Book">
                        
                             <p>{{ $posts->review }}</p>
            
                        </div>
            
            
                    
                @endif
            @endforeach
            </div>

        <a href="{{ route('new') }}" target="blank">
            <input type="button" class="float" value="+">
            </a>
        @endsection