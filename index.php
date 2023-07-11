<?php

    require_once __DIR__."/Models/System.php";
    require_once __DIR__."/Models/Email.php";
    require_once __DIR__."/Models/Message.php";
    require_once __DIR__."/Models/Notification.php";
    require_once __DIR__."/Models/Database.php";

    



    
    // $email_1 = new Email ('Drin', 'Pippo', 'Paperino', 'Benvenuto', 'Benvenuto a Topolinia', 'C:/Documents/file.txt', 'ciao', 'treno');
    // $email_1->setAttachment('C:/Documents/file.txt');
    // $email_1->setAttachment('C:/Documents/patente.pdf');
    // $email_1->stampa();
    

    // die;



    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <title>Php OOP 3</title>
    </head>
    <body>

        <header>
            <div class="container d-flex justify-content-center align-items-center mt-5">
                <h1>Email OOP 3</h1>
            </div>
        </header>
        
        <div class="container">
            <div class="row">
                <?php foreach($emails as $email){?>
                
                <div class="col-12">
                    <div class="content card m-3 p-3">
                        <div>Inviato da: <?php echo $email->GetSender() ?></div>
                        <div>A: <?php echo $email->GetReceiver() ?></div>
                        <div>Oggetto: <?php echo $email->GetObject() ?></div>
                        <div>Contenuto: <?php echo $email->GetContent() ?></div>

                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        
    </body>
</html>