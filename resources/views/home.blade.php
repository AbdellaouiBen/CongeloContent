@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 id="top" class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class=" col-xl-4">

<div class="mb-5 container">
    <div class="text-center">

        <h1 id="congelo" class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Papy's Congelo </h1>
    </div>
    <div class="text-center pt-0 pb-1">
        <a class="btn btn-success" href="{{route('pa.create')}}">
            <i class="fas fa-plus-square"></i>
        </a>
    </div>
    <table class="table table-striped table-primary">
        <thead class="bg-dark text-info">
            <tr>
                {{-- <th scope="col" class="text-center">Id</th> --}}
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">quantite</th>
                <th scope="col" class="text-center">unité</th>
                <th scope="col" class="text-center">note</th>
                {{-- <th scope="col" class="text-center">img</th>
                <th scope="col" class="text-center">tiroir</th> --}}
                {{-- <th scope="col" class="text-center">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($tpas as $tpa)
            <thead>
                <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tpa->categorie}} <a href="{{route('tpa.edit',$tpa)}}"> <i class="fas fa-pencil-alt border rounded-circle p-1 ml-1  text-white"></i></a></th>
            </thead>
            @foreach ($tpa->article as $pa)
            <tr>
                {{-- <th scope="row" class="text-center">{{$pa->id}}</th> --}}
                
                <td class="text-center border"><a class="text-body" href="{{route('pa.edit',$pa)}}">{{$pa->nom}}</a></td>
           
                <td class="text-center border">{{$pa->quantite}}</td>
                <td class="text-center border">{{$pa->unite}}</td>
                <td class="text-center border">{{$pa->note}}</td>
                {{-- <td class="text-center"><img class="w-25" src="{{'storage/'.$pa->img}}" alt=""></td>
                <td class="text-center">{{$pa->tiroir->categorie}}</td> --}}

                
                {{-- <td class="d-flex justify-content-around ">  
                        <a class="btn btn-warning border border-white rounded-circle" href="{{route('pa.edit',$pa)}}"><i class="fas fa-pencil-alt "></i></a>   
                        <form action="{{route('pa.destroy',$pa)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger border-white rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                </td> --}}
            
            </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>
</div>
 </div>
 {{--    ----------------------------- --}}
 <div class="col-xl-4">
        


 <div class="mb-5 container">
    <div class="text-center">

        <h1 class="text-white shadow-lg p-3 mt-3 bg-primary rounded">Maman&Papa's Congelo </h1>
    </div>
    <div class="text-center pt-0 pb-1">
        <a class="btn btn-success" href="{{route('ma.create')}}">
            <i class="fas fa-plus-square"></i>
        </a>
    </div>
    <table class="table table-striped table-primary">
        <thead class="bg-dark text-info">
            <tr>
                {{-- <th scope="col" class="text-center">Id</th> --}}
                <th scope="col" class="text-center">Nom</th>
                <th scope="col" class="text-center">quantite</th>
                <th scope="col" class="text-center">unité</th>
                <th scope="col" class="text-center">note</th>
                {{-- <th scope="col" class="text-center">img</th>
                <th scope="col" class="text-center">tiroir</th> --}}
                {{-- <th scope="col" class="text-center">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($tmas as $tma)
            <thead>
                <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tma->categorie}} <a href="{{route('tma.edit',$tma)}}"> <i class="fas fa-pencil-alt border rounded-circle p-1 ml-1  text-white"></i></a></th>
            </thead>
            @foreach ($tma->article as $ma)
                
            
                <tr>
                    {{-- <th scope="row" class="text-center">{{$ma->id}}</th> --}}
                    <td class="text-center border"><a class="text-body" href="{{route('ma.edit',$ma)}}">{{$ma->nom}}</a></td>
                    <td class="text-center border">{{$ma->quantite}}</td>
                    <td class="text-center border">{{$ma->unite}}</td>
                    <td class="text-center border">{{$ma->note}}</td>
                    {{-- <td class="text-center"><img class="img-fluid w-25" src="{{'storage/'.$ma->img}}" alt=""></td>
                    <td class="text-center">{{$ma->tiroir->categorie}}</td> --}}

{{--                     
                    <td class="d-flex justify-content-around ">  
                        <a class="btn btn-warning border border-white rounded-circle" href="{{route('ma.edit',$ma)}}"><i class="fas fa-pencil-alt "></i></a>   
                        <form action="{{route('ma.destroy',$ma)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger border-white rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td> --}}
                </tr>  
                @endforeach
            @endforeach
        </tbody>
    </table>
</div>
</div>
{{-- ------------------------------------------------- --}}
<div class="col-xl-4">

    <div class="mb-5 container">
        <div class="text-center">

            <h1 class="text-white shadow-lg p-3 mt-3  bg-primary rounded">Karim&Kelly's Congelo </h1>
        </div>
        <div class="text-center pt-0 pb-1">
            <a class="btn btn-success" href="{{route('ka.create')}}">
                <i class="fas fa-plus-square"></i>
            </a>
        </div>
        <table class="table table-striped table-primary">
            <thead class="bg-dark text-info">
                <tr class=" ">
                    {{-- <th scope="col" class="text-center">Id</th> --}}
                    <th scope="col" class="text-center">Nom</th>
                    <th scope="col" class="text-center">quantite</th>
                    <th scope="col" class="text-center">unité</th>
                    <th scope="col" class="text-center">note</th>
                    {{-- <th scope="col" class="text-center">img</th>
                    <th scope="col" class="text-center">tiroir</th> --}}
                    {{-- <th scope="col" class="text-center">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($tkas as $tka)
                <thead>
                    <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tka->categorie}} <a href="{{route('tka.edit',$tka)}}"> <i class="fas fa-pencil-alt border rounded-circle p-1 ml-1  text-white"></i></a></th>
                </thead>
                @foreach ($tka->article as $ka)
                <tr>
                    {{-- <th scope="row" class="text-center">{{$ka->id}}</th> --}}
                    <td class="text-center border"><a class="text-body" href="{{route('ka.edit',$ka)}}">{{$ka->nom}}</a> </td>
                    <td class="text-center border">{{$ka->quantite}}</td>
                    <td class="text-center border">{{$ka->unite}}</td>
                    <td class="text-center border">{{$ka->note}}</td>
                    {{-- <td class="text-center"><img class="img-fluid w-25" src="{{'storage/'.$ka->img}}" alt=""></td>
                    <td class="text-center">{{$ka->tiroir->categorie}}</td> --}}
                    
                    {{-- <td class="d-flex justify-content-around ">  
                            <a class="btn btn-warning border border-white rounded-circle" href="{{route('ka.edit',$ka)}}"><i class="fas fa-pencil-alt "></i></a>   
                            <form action="{{route('ka.destroy',$ka)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger border-white rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
                            </form>
                    </td> --}}
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

<div style="position: fixed; bottom: 20px; right: 20px;">
    <a href="#top" class="btn btn-info rounded-circle">
        <i class="fas fa-arrow-circle-up "></i>
    </a>
</div>
@stop
