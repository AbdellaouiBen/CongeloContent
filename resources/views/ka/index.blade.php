@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Karim&Kelly</h1>
@stop

@section('content')
        <div class="mb-5 container">
            <div class="text-center">

                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-warning rounded">Karim&Kelly's Congelo </h1>
            </div>
            <table class="table table-striped table-secondary">
                <thead class="bg-dark text-warning">
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
                    @foreach ($kas as $ka)
                    <thead>
                        <th colspan="8" class='text-center bg-secondary text-white'>Tirroir {{$tka->categorie}}</th>
                    </thead>
                    @foreach ($tka->article as $ka)
                    <tr>
                        <th scope="row" class="text-center">{{$ka->id}}</th>
                        <td class="text-center">{{$ka->nom}}</td>
                        <td class="text-center">{{$ka->quantite}}</td>
                        <td class="text-center">{{$ka->unite}}</td>
                        <td class="text-center">{{$ka->note}}</td>
                        <td class="text-center"><img class="img-fluid w-25" src="{{'storage/'.$ka->img}}" alt=""></td>
                        <td class="text-center">{{$ka->tiroir->categorie}}</td>

                        
                        <td class="d-flex justify-content-around ">  
                                <a class="btn btn-warning" href="{{route('ka.edit',$ka)}}">edit</a>   
                                <form action="{{route('ka.destroy',$ka)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">delete</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
   
        @stop