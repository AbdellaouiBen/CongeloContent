@extends('adminlte::page')

@section('title', 'AdminNova')

@section('content_header')
    <h1 class="m-0 text-dark">Papy</h1>
@stop

@section('content')
        <div class="mb-5 container">
            <div class="text-center">

                <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-warning rounded">Papy's Congelo </h1>
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
                    @foreach ($pas as $pa)
                    <tr>
                        <th scope="row" class="text-center">{{$pa->id}}</th>
                        <td class="text-center">{{$pa->nom}}</td>
                        <td class="text-center">{{$pa->quantite}}</td>
                        <td class="text-center">{{$pa->unite}}</td>
                        <td class="text-center">{{$pa->note}}</td>
                        <td class="text-center"><img class="w-25" src="{{'storage/'.$pa->img}}" alt=""></td>
                        <td class="text-center">{{$pa->tiroir->categorie}}</td>

                        
                        <td class="d-flex justify-content-around ">  
                                <a class="btn btn-warning" href="{{route('pa.edit',$pa)}}">edit</a>   
                                <form action="{{route('pa.destroy',$pa)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">delete</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   
        @stop