@extends('layouts.nav')
@section('title','Cars')
<div style="background-color: blueviolet; height:auto";>
    @section('content')


        <h1 style="margin-left: 20px;">Cars</h1>



        <div class="con">
            @foreach ($posts as $posts )
                
                @if ( $posts->catigoure ==='Cars')
                
            
                  
            
                         <div class="card">
                        
                          <h2>{{ $posts->title }}</h2>
                        
                         <img src="\storage\posts\{{ $posts->path }}"style="width: 250px; height:250px" alt="Car">
                        
                             <p>{{ $posts->review }}</p>
            
                        </div>
            
            
                    
                @endif
            @endforeach
         </div>
        <a href="{{ route('new') }}" target="blank">
            <input type="button" class="float" value="+">
            </a>
        @endsection
