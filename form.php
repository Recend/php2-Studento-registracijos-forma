<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font.css">
    <title>Registracija</title>
</head>

<body>
    <div class="container d-flex flex-column align-items-center">
        <h1>Studento Registracija</h1>
        <div class="card col-5 text-center text-bg-warning border-dark mt-2 p-3">
            <form action="response.php" method="post">
                <!-- Vardas Pavardė -->
                <h2>Vardas ir Pavardė</h2>
                <div class="input-group">
                    <span class="input-group-text">Registracija</span>
                    <input type="text" aria-label="First name" class="form-control" name="vardas" placeholder="Vardas" required>
                    <input type="text" aria-label="Last name" class="form-control" name="pavarde" placeholder="Pavardė" required>
                </div>
                <h2 class="mt-2">Lytis</h2>
                <!-- Lytis -->
                <div class="input-group">
                    <div class="input-group-text col-12">
                        <div class="mx-auto">
                            <input class="form-check-input mt-1" name="lytis" id="vyras" type="radio" value="Vyras">
                            <label class="mx-2" for="vyras">Vyras</label>
                            <input class="form-check-input mt-1" name="lytis" id="moteris" type="radio" value="Moteris">
                            <label class="mx-2" for="moteris">Moteris</label>
                            <input class="form-check-input mt-1" name="lytis" id="kita" type="radio" value="Kita">
                            <label class="mx-2" for="kita">Kita</label>
                        </div>
                    </div>
                </div>

                <!-- Transporto budas -->
                <h2 class="mt-2">Transporto priemonė</h2>
                <div class="input-group mb-3 text-center">
                    <div class="input-group-text col-12">
                        <div class="mx-auto">
                            <input class="form-check-input mt-1" type="checkbox" value="Dviračiu" name="transport[]" id="dviratis">
                            <label for="dviratis">Dviračiu</label>


                            <input class="form-check-input mt-1" type="checkbox" value="Mašina" name="transport[]" id="masina">
                            <label for="masina">Mašina</label>


                            <input class="form-check-input mt-1" type="checkbox" value="Autobusu" name="transport[]" id="autobusas">
                            <label for="autobusas">Autobusu</label>


                            <input class="form-check-input mt-1" type="checkbox" value="Pėsčiomis" name="transport[]" id="pescias">
                            <label for="pescias">Pėsčias/-ia</label>
                        </div>
                    </div>
                </div>
                <!-- Miestas -->
                <h2 class="mt-2">Studijų miestas</h2>
                <select class="form-select" name="miestas" id="miestas">
                    <option></option>
                    <option value="Vilnius">Vilnius</option>
                    <option value="Kaunas">Kaunas</option>
                    <option value="Klaipėda">Klaipėda</option>
                    <option value="Šiauliai">Šiauliai</option>
                    <option value="Panevėžys">Panevėžys</option>
                    <option value="Alytus">Alytus</option>
                    <option value="Marijampolė">Marijampolė</option>
                    <option value="Mažeikiai">Mažeikiai</option>
                    <option value="Jonava">Jonava</option>
                    <option value="Utena">Utena</option>
                    <option value="Kėdainiai">Kėdainiai</option>
                    <option value="Telšiai">Telšiai</option>
                    <option value="Ukmergė">Ukmergė</option>
                    <option value="Tauragė">Tauragė</option>
                    <option value="Plungė">Plungė</option>
                </select>
                <!-- Apie save -->
                <h2 class="mt-2">Apie save</h2>
                <div class="form-floating">
                    <textarea class="form-control" name="tekstas" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px"></textarea>
                </div>
                <!-- submit -->
                <button class="btn btn-success mt-2" type="submit" name="multiple">Įrašyti</button>
            </form>
        </div>
    </div>
</body>

</html>