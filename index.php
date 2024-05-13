<?php
function validate($email){
if( strpos($email, '@') === false){
    return false;
}

if( strpos($email, '.') === false){
    return false;
}

return true;

}



$email = $_POST['email'] ?? null;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
        <form action="" method="POST">
            <h1>Iscriviti alla nostra Newsletter</h1>
            <input required type="email" placeholder="Scrivi qui la tua email" class="form-control" name="email">
            <button >Invia</button>
        </form>
        <?php
        if($email !== null):
        ?>
            <div class="mt-3">
                <?php
               if(validate($email)) :
                
                ?>
                <div class="alert alert-success" role="alert">
                    Email Confermata
                </div>

                <?php
               else :
                ?>
                <div class="alert alert-danger" role="alert">
                    Email non valida, riprovare!
                </div>
                <?php
                endif;

                ?>
            </div>
            </div>
        <?php
        
        endif;

        ?>
        </div>

    </main>
</body>
</html>