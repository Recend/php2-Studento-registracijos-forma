<?php

$name = $_POST['vardas'];
$lastName = $_POST['pavarde'];
$lytis = $_POST['lytis'];
$city = $_POST['miestas'];
$save = $_POST['tekstas'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font.css">
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
            <h1>Registracija pavyko!</h1>
            <div class="card mx-auto mt-3" style="width: 18rem;">
            <div class="card-body text-bg-success">
                <ul class="list-group list-group-flush ">
                    <li class="list-group-item">Vardas: <?php echo ($name) ?></li>
                    <li class="list-group-item">Pavardė: <?php echo ($lastName) ?></li>
                    <li class="list-group-item">Lytis: <?php echo ($lytis) ?></li>
                    <li class="list-group-item">Į paskaitas atvyksta: <?php if (isset($_POST['multiple'])) {
                                            if (!empty($_POST['transport'])) {
                                                foreach ($_POST['transport'] as $transport) {
                                                    echo $transport . ' ';
                                                }
                                            } else {
                                                echo 'Reikia pasirinkti';
                                            }
                                        }
                                        ?></li>
                    <li class="list-group-item">Studijų miestas: <?php echo ($city) ?></li>
                    <li class="list-group-item">Apie mane: <?php echo ($save) ?></li>
                </ul>
                </div>
            </div>
            <div class="mx-auto mt-4">
    <a href="form.php" class="btn btn-warning">Gryžti atgal</a>
    </div>
    </div>
    
</body>

</html>