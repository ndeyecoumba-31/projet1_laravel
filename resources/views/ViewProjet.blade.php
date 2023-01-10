<!DOCTYPE html>
<html>
  
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
        <title>Liste_Projet</title>
    </head>
  <body class="bg-info">
  <div class="bg-primary">
            <h2 class="text-center" style="color: white;">Liste Des Projets</h2>
        </div>
    <div class="container">
      <h1></h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Date Debut</th>
            <th>Date de Fin</th>
            <th>Description</th>
            <th>Details</th>
          </tr>
          @foreach($view_projet as $p)
          <tr>
            <th>{{$p->id}}</th>I
            <th>{{$p->nom}}</th>
            <th>{{$p->date_debut}}</th>
            <th>{{$p->date_fin}}</th>
            <th>{{$p->description}}</th>
            <th><a  href="http://127.0.0.1:8000/DetailProjet">Detail</a></th>
      
          </tr>
          @endforeach
          
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </body>
</html>