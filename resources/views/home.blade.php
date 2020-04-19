@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
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
            @foreach ($tpas as $tpa)
            <thead>
                <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tpa->categorie}}</th>
            </thead>
            @foreach ($tpa->article as $pa)
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
            @endforeach
        </tbody>
    </table>
</div>

 {{--    ----------------------------- --}}
 <div class="mb-5 container">
    <div class="text-center">

        <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-warning rounded">Maman&Papa's Congelo </h1>
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
            @foreach ($tmas as $tma)
            <thead>
                <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tma->categorie}}</th>
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
                        <a class="btn btn-warning" href="{{route('ma.edit',$ma)}}">edit</a>   
                        <form action="{{route('ma.destroy',$ma)}}" method="post">
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

{{-- ------------------------------------------------- --}}
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
                <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tka->categorie}}</th>
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
