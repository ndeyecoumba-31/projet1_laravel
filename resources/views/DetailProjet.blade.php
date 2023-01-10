<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
        <title>Details_Projets</title>
    </head>
    <body class="bg-info">
    <div class="container">
    <div class="card">
        
            <div class="card-body col-md-6 col-md-offset-3">
                <div class="bg-primary">
                <h2 class="text-center" style="color: white;">Details</h2>
            </div>
            <form action="" method="POST">
            @csrf
           
            <div class="card-body ">
                <label for="">Nom </label>
               
                <input type="text" name="nom" class="form-control">
                <label for="">Date debut</label>
                <input type="date" name="Date_debut" class="form-control">
                <label for="">Date fin</label>
                <input type="date" name="Date_fin" class="form-control">
                <label for="">Description</label>
                <input type="text" name="Description" class="form-control">
                <div class="col-md-12 text-right">
                   <button name="btnAjout" type="submit" class="btn btn-primary btn-lg"><a  href="http://127.0.0.1:8000/PhaseProjet"></a>VOIR_PHASE</button>
                </div>
              
                
            </div>
        </form>
            </div>
             
           
    </div>
</div>
    
    </body>
    
</html>
