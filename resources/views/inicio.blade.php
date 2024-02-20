@extends('plantilla')

@section('css')
   <style media="screen">
      .circular{
            border-top-left-radius: 50% 50%;
            border-top-right-radius: 50% 50%;
            border-bottom-right-radius: 50% 50%;
            border-bottom-left-radius: 50% 50%;
        }

        .drop { 
            filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.7)); 
        }

        img.redimension {
            width: 500px;
            height:500px;
            border-radius: 50%
        }

   </style>
@endsection

@section('contenido')

   
      
        <div align="center">
            <h2>Bienvenido al Sistema De Inventario => {{session()->get('usuario') ?? 'Invitado'}}</h2>
        </div>
            
         
            <img class="mx-auto d-block redimension drop" src="{{asset('logos/logo_covi6.png')}}"> <!-- random image -->
         
            
          
        @include('includes.mensaje')
   

   

@endsection