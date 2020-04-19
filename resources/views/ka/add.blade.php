

@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Ajouter au congelo Karim&Kelly</h1>
@stop

@section('content')
    

<div class="container">

    <form action="{{route('ka.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="nom" class="">Nom</label>
            <input value="@if($errors->first('nom'))@else{{old('nom')}}@endif"
            type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" id="nom" >
            @error('nom')
            <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="quantite" class="">Quantité (facultatif) </label>
            <input value="@if($errors->first('quantite'))@else{{old('quantite')}}@endif"
            type="number" step="any" name="quantite" class="form-control @error('quantite') is-invalid @enderror" id="quantite" >
            @error('quantite')
            <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="unite" class="">Unité (facultatif) </label>
            <input value="@if($errors->first('unite'))@else{{old('unite')}}@endif"
            type="text" name="unite" class="form-control @error('unite') is-invalid @enderror" id="unite" >
            @error('unite')
            <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="note" class="">Note (facultatif)</label>
            <input value="@if($errors->first('note'))@else{{old('note')}}@endif"
            type="text" name="note" class="form-control @error('note') is-invalid @enderror" id="note" >
            @error('note')
            <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="img" class="">Image (facultatif)</label> <br>
            <input value="@if($errors->first('img'))@else{{old('img')}}@endif"
            type="file" name="img" class=" @error('img') is-invalid @enderror" id="img" >
            @error('img')
                <div  class="alert alert-danger">{{  $message  }}</div>
            @enderror
        </div>

        <div class="form-group row">
            <label for="tiroir_id">Tiroir</label>
            <div class="col-md-6">
                <select name="tiroir_id" id="tiroir_id">
                    @foreach ($tkas as $tka)
                        @if ($tka->id=== old('tiroir_id'))
                            <option selected value="{{$tka->id}}">{{$tka->categorie}}</option>
                        @else
                            <option value="{{$tka->id}}">{{$tka->categorie}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-dark btn-outline-warning">Submit</button>

    </form>
</div>
 
@stop