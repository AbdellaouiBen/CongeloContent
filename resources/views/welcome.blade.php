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
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Congelo Content By Ben Abdellaoui
                </div>

                <div class="links">
                    <a href="https://www.instagram.com/benabdell?igshid=lem5zbyksm36">Instagram</a>

                </div>
            </div>
        </div>
        {{-- --------------------------------- --}}
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
                        <tr>
                            <th colspan="8" class='text-center'>Tirroir {{$tpa->categorie}}</th>
                        </tr>
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
                        <tr>
                            <th colspan="8" class='text-center'>Tirroir {{$tma->categorie}}</th>
                        </tr>
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
                        <tr>
                            <th colspan="8" class='text-center'>Tirroir {{$tka->categorie}}</th>
                        </tr>
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
        
    </body>
</html>