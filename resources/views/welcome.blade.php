<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 30vh;
            }

            .flex-center {
                align-items: center;
                display: flex; 
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body >
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="title" class="title m-b-md">
                    Congelo Content By Ben Abdellaoui
                </div>

                <div class="links">
                    <a href="https://www.instagram.com/benabdell?igshid=lem5zbyksm36">Ben's Instagram</a>

                </div>
            </div>
        </div>
        {{-- --------------------------------- --}}
    <div class="row  mx-1">

            <div class="mb-5 container col-xl-4"> 
                <div class="text-center">
            
                    <h1 class="text-white shadow-lg p-3 mt-3  bg-primary rounded">Papy's Congelo </h1>
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
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tpas as $tpa)
                        <thead>
                            <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tpa->categorie}} <a href="{{route('tpa.edit',$tpa)}}"> <i class="fas fa-pencil-alt border rounded-circle p-1 ml-1  text-white"></i></a> </th>
                        </thead>
                        @foreach ($tpa->article as $pa)
                        <tr>
                            {{-- <th scope="row" class="text-center">{{$pa->id}}</th> --}}
                            <td class="text-center">{{$pa->nom}}</td>
                            <td class="text-center">{{$pa->quantite}}</td>
                            <td class="text-center">{{$pa->unite}}</td>
                            <td class="text-center">{{$pa->note}}</td>
                            {{-- <td class="text-center"><img class="w-25" src="{{'storage/'.$pa->img}}" alt=""></td>
                            <td class="text-center">{{$pa->tiroir->categorie}}</td> --}}
            
                            
                            <td class="d-flex justify-content-around ">  
                                    <a class="btn btn-warning border border-white rounded-circle" href="{{route('pa.edit',$pa)}}"><i class="fas fa-pencil-alt "></i></a>   
                                    <form action="{{route('pa.destroy',$pa)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger border-white rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            
             {{--    ----------------------------- --}}
             <div class="mb-5 container col-xl-4">
                <div class="text-center">
            
                    <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Maman&Papa's Congelo </h1>
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
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tmas as $tma)
                        <thead>
                            <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tma->categorie}}<a href="{{route('tma.edit',$tma)}}"> <i class="fas fa-pencil-alt border rounded-circle p-1 ml-1 text-white"></i></a></th>
                        </thead>
                        @foreach ($tma->article as $ma)
                            
                        
                            <tr>
                                {{-- <th scope="row" class="text-center">{{$ma->id}}</th> --}}
                                <td class="text-center">{{$ma->nom}}</td>
                                <td class="text-center">{{$ma->quantite}}</td>
                                <td class="text-center">{{$ma->unite}}</td>
                                <td class="text-center">{{$ma->note}}</td>
                                {{-- <td class="text-center"><img class="img-fluid w-25" src="{{'storage/'.$ma->img}}" alt=""></td>
                                <td class="text-center">{{$ma->tiroir->categorie}}</td> --}}
            
                                
                                <td class="d-flex justify-content-around ">  
                                    <a class="btn btn-warning border border-white rounded-circle" href="{{route('ma.edit',$ma)}}"><i class="fas fa-pencil-alt "></i></a>   
                                    <form action="{{route('ma.destroy',$ma)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger border-white rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>  
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            {{-- ------------------------------------------------- --}}
            <div class="mb-5 container col-xl-4">
                <div class="text-center">
            
                    <h1 class="text-white shadow-lg p-3 mt-3 mb- bg-primary rounded">Karim&Kelly's Congelo </h1>
                </div>
                <div class="text-center pt-0 pb-1">
                    <a class="btn btn-success" href="{{route('ka.create')}}">
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
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tkas as $tka)
                        <thead>
                            <th colspan="8" class='text-center bg-secondary text-white'>Tiroir {{$tka->categorie}} <a href="{{route('tka.edit',$tka)}}"> <i class="fas fa-pencil-alt border rounded-circle p-1 ml-1 text-white"></i></a></th>
                        </thead>
                        @foreach ($tka->article as $ka)
                        <tr>
                            {{-- <th scope="row" class="text-center">{{$ka->id}}</th> --}}
                            <td class="text-center">{{$ka->nom}}</td>
                            <td class="text-center">{{$ka->quantite}}</td>
                            <td class="text-center">{{$ka->unite}}</td>
                            <td class="text-center">{{$ka->note}}</td>
                            {{-- <td class="text-center"><img class="img-fluid w-25" src="{{'storage/'.$ka->img}}" alt=""></td>
                            <td class="text-center">{{$ka->tiroir->categorie}}</td> --}}
            
                            
                            <td class="d-flex justify-content-around ">  
                                    <a class="btn btn-warning border border-white rounded-circle" href="{{route('ka.edit',$ka)}}"><i class="fas fa-pencil-alt "></i></a>   
                                    <form action="{{route('ka.destroy',$ka)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger border-white rounded-circle ml-1" type="submit"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
        <div style="position: fixed; bottom: 20px; right: 20px;">
            <a href="#title" class="btn btn-info rounded-circle">
                <i class="fas fa-arrow-circle-up "></i>
            </a>
        </div>

    </body>
</html>
