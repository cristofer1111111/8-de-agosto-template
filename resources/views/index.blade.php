@extends('layout.template')
@section('title','Inicio')

@section('img')
   
@section('opciones')
                <li class="list-group-item bg-secondary">Inicio</li>
                <li class="list-group-item">Acerca de</li>
                <li class="list-group-item">Contacto</li>
                @endsection
                @section('content')
                <h1>Index</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sequi impedit consequatur quas facere, et beatae? Quo sed delectus
                     voluptate impedit hic excepturi sapiente animi, dolore, sit maxime ab eaque!</p>
                <hr>
                <br>
                <div class="card text-white bg-secondary mb-3 d-inline-block" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                <h4 class="card-title">Primary card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 </div>
                </div>  
                <div class="card text-white bg-secondary mb-3 d-inline-block" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                <h4 class="card-title">Primary card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                </div>
@endsection
