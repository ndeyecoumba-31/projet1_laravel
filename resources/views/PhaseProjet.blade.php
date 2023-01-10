<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css">
        <title>Phase</title>
    </head>
    <body class="bg-info">
    <div class="container">
    <div class="card">
        
            <div class="card-body col-md-6 col-md-offset-3">
                <div class="bg-primary">
                <h2 class="text-center" style="color: white;">phase</h2>
            </div>
            <form action="" method="POST">
            @csrf
           
            <div class="card-body ">
                <label for="">ID </label>
                <input type="int" name="Id" class="form-control">
                <label for="">NOM</label>
                <input type="text" name="Nom" class="form-control">
                <label for="">DUREE</label>
                <input type="int" name="Duree" class="form-control">
                <label for="">PROPRIETE</label>
                <input type="text" name="Propriete" class="form-control">
               
                
            </div>
        </form>
            </div>
             
           
    </div>
</div>
     
    </body>
    
</html>
