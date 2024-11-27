<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
    <link rel="stylesheet" href="{{ asset('Toaster/toaster.css') }}">
    <title>Page de connexion</title>
</head>

<body>
    <form action="{{ route('handle_login') }}" method="POST">
        @csrf
        <h1 style="margin-top: 10px">Page de connexion</h1>
        <label for="">email</label>
        <input type="email" placeholder="Entrer votre email" name="email" autocomplete="off">
        <label for="">Mot de passe</label>
        <input type="password" placeholder="Entrer votre mot de passe" name="password" autocomplete="off">
        <button type="submit">Se connecter</button>
        <a href="">Mot de passe oublié</a><br>
    </form>
    <script src="{{ asset('Js/jquery.js') }}"></script>

    <script src="{{ asset('Toaster/toaster.js') }}"></script>
    

    @if (session('error'))

        <script>

            toastr.error('{{ session('error') }}')

        </script>

    @endif

   

</body>

</html>
