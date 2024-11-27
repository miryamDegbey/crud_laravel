<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <style>
      body{
        display: flex;
        flex-direction: column;
        height: 100vh;
        align-items: center;
        justify-content: center; 
        background: #a2d2ff;
      }
    </style>
    <form action="">
<h3>Ajouter un utilisateur</h3><br>
      <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" placeholder="Entrer le nom">

      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Entrer l'email">

      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Photo de profil</label>
        <input type="file" class="form-control" id="image" placeholder="Ajouter une image">

      </div>

      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>