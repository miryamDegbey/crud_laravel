<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>
    <form action="{{route('insertAdmin')}}" method="POST">
        @csrf
        <input type="text" name="nom" id="" placeholder="name" value={{ old('nom')}}>
        <input type="email" name="email" id="" placeholder="email" value={{ old('email')}}>
        <input type="password" name="psd" id="" placeholder="mot de passe">

        {{-- <input type="hidden" name="isAdmin" value="1"> --}}

        <button type="submit">soumetter</button>
    </form>
    
</body>
</html>