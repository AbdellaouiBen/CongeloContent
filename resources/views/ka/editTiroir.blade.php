
@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Edit tiroir {{$tka->id}}</h1>
@stop

@section('content')
    
<div class="card-body">
    <form action="{{route('tka.update',$tka)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="categorie" class="col-md-4 col-form-label  text-md-right">Nom</label>
            <div class="col-md-6">
                <input id="categorie" type="text" class="form-control @error('categorie') is-invalid @enderror" name="categorie" value="{{ old('categorie',$tka->categorie) }}" >
                @error('categorie')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
  
        
        <div class="text-center">
            <button class="btn btn-warning">Editer</button>
            <a href="{{route('ka.index')}}" class="btn btn-danger">annuler</a>
        </div>
    </form>
</div>

@stop



