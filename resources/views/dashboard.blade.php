<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Toaster/toaster.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <title>Document</title>
</head>

<body>
  
{{-- Contenu a afficher aux admins --}}


    @if (Auth::check() && Auth::user()->isAdmin)


        {{-- bonjour  {{ Auth()->user()->name }} --}}

        <script src="{{ asset('Js/jquery.js') }}"></script>

        <script src="{{ asset('Toaster/toaster.js') }}"></script>

        @if (session('success'))
            <script>
                toastr.success('{{ session('success') }}')
            </script>
        @endif

          


        <div class="container text-center">
            <div class="row align-items-end">
                <div class="col s12">
                    <br>
                    <h1>Liste des utilisateurs</h1>
                    <hr>

                    <a href="{{ route('create') }}" class="btn btn-primary">Ajouter un utilisateur</a>
                    <a href="" class="btn btn-danger">Deconnexion</a>
                    <hr>

                    <table class="table table-striped">
                        <thead>
                            <tr>

                                <th>id</th>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Email</th>

                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>

                            {{-- Boucle pour afficher dynamiquement les donnees des utilisateurs --}}
                            @foreach ($users as $user)
                                
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td><img src="{{ asset('profil.png') }}" alt="" class="profil"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email}}</td>

                                <td>
                                    <a href="#" class="btn btn-info">Modifier</a>
                                    <a href="#" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                            @endforeach





                        </tbody>

                    </table>

                </div>
            </div>
        </div>




        @else

        {{-- Contenu a afficher aux simples utilisateurs --}}
        <p>Bonjour</p>
    @endif

</body>

</html>
