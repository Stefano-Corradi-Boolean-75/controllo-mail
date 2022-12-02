<?php


require_once  __DIR__ . '/functions.php';

if(!empty($_GET['mail'])){
    // se non è vuoto il parametro in GEt effettuo la verifica di validità della mail
    $response = checkMail($_GET['mail']);

    if($response){
        // se l'email è valida reindirizzo alla pagina success.php passando la mail in sessione
        // apro la sessione
        session_start();
        // inizializzo una variabile di sessione
        $_SESSION['mail'] = $_GET['mail'];
        header('Location: ./success.php');

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iscrizione Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

   <?php if(isset($response)): ?>
    <section class="email pt-5">
        <div class="container mb-3 pt-3">
            <div class="row">
                <div class="col-12">
                    
                    <?php if($response): ?>
                        <div class="alert alert-success" role="alert">
                            Iscrizione avvenuta con successo!
                            Riceverai i nostri aggiornamenti sulla tua casella email!
                        </div> 
                    <?php else: ?>
                        <div class="alert alert-danger" role="alert">
                            Errore durante la procedura di iscrizione.
                            Formato email non corretto!
                        </div>
                    <?php endif; ?>
               
                    
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    

    <section class="email py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Iscriviti alla nostra newsletter!</h1>
                    <form class="p-4 border border-1 rounded-2 bg-light" action="index.php" method="GET">
                        <div class="mb-3">
                            <label for="mail" class="form-label">E-mail</label>
                            <input type="text" name="mail" id="mail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <button type="reset" class="btn btn-secondary">Annulla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>