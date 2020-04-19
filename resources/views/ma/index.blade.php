@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Maman&Papa</h1>
@stop

@section('content')
        <div class="mb-5 container">
            <div class="text-center">

                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Maman&Papa's Congelo </h1>
            </div>
            <table class="table table-striped table-primary">
                <thead class="bg-dark text-info">
                    <tr>
                        <th scope="col" class="text-center">Id</th>
                        <th scope="col" class="text-center">Nom</th>
                        <th scope="col" class="text-center">quantite</th>
                        <th scope="col" class="text-center">unité</th>
                        <th scope="col" class="text-center">note</th>
                        <th scope="col" class="text-center">img</th>
                        <th scope="col" class="text-center">tiroir</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tmas as $tma)
                    <thead>
                        <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tma->categorie}} <a href="{{route('tma.edit',$tma)}}"> <i class="fas fa-pencil-alt border rounded-circle p-1 ml-1"></i></a></th>
                    </thead>
                    @foreach ($tma->article as $ma)
                        
                    
                        <tr>
                            <th scope="row" class="text-center">{{$ma->id}}</th>
                            <td class="text-center">{{$ma->nom}}</td>
                            <td class="text-center">{{$ma->quantite}}</td>
                            <td class="text-center">{{$ma->unite}}</td>
                            <td class="text-center">{{$ma->note}}</td>
                            <td class="text-center"><img class="img-fluid w-25" src="{{'storage/'.$ma->img}}" alt=""></td>
                            <td class="text-center">{{$ma->tiroir->categorie}}</td>

                            
                            <td class="d-flex justify-content-around ">  
                                <a class="btn btn-warning border rounded-circle" href="{{route('ma.edit',$ma)}}"><i class="fas fa-pencil-alt "></i></a>   
                                <form action="{{route('ma.destroy',$ma)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>  
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
   

   
    @stop