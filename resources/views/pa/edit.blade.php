
@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Edit {{$pa->nom}}</h1>
@stop

@section('content')
    
<div class="card-body">
    <form action="{{route('pa.update',$pa)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group row">
            <label for="nom" class="col-md-4 col-form-label  text-md-right">Nom</label>
            <div class="col-md-6">
                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom',$pa->nom) }}" >
                @error('nom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="quantite" class="col-md-4 col-form-label  text-md-right">Quantité (facultatif)</label>
            <div class="col-md-6">
                <input id="quantite" type="number" step="any" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite',$pa->quantite) }}" >
                @error('quantite')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group row">
            <label for="unite" class="col-md-4 col-form-label  text-md-right">Unité (facultatif)</label>
            <div class="col-md-6">
                
                <textarea class="form-control @error('unite') is-invalid @enderror" name="unite" id="unite" cols="30" rows="3">{{ old('unite',$pa->unite) }}</textarea>
                @error('unite')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group row">
            <label for="note" class="col-md-4 col-form-label  text-md-right">Note (facultatif)</label>
            <div class="col-md-6">
                
                <textarea class="form-control @error('note') is-invalid @enderror" name="note" id="note" cols="30" rows="3">{{ old('note',$pa->note) }}</textarea>
                @error('note')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        
        <div class="form-group row">
            <label for="img" class="col-md-4 col-form-label text-md-right">Image (facultatif)</label>
            <div class="col-md-6">
                <input id="img" type="file" class=" @error('img') is-invalid @enderror" name="img" value="{{ old('img',$pa->img) }}" >
                @error('img')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="tiroir_id">Tiroir</label>
            <div class="col-md-6">
                <select name="tiroir_id" id="tiroir_id">
                    @foreach ($tpas as $tpa)
                        @if ($tpa->id===old('tiroir_id',$pa->tiroir_id))
                            <option selected value="{{$tpa->id}}">{{$tpa->categorie}}</option>
                        @else
                            <option value="{{$tpa->id}}">{{$tpa->categorie}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="text-center">
            <button class="btn btn-warning">Editer</button>
            <a href="{{route('pa.index')}}" class="btn btn-danger">annuler</a>
            <form action="{{route('pa.destroy',$pa)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger border-white rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
            </form>
        </div>
    </form>
</div>

@stop



