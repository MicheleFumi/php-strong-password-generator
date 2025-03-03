<?php


require_once './function.php'

?>


<!doctype html>
<html lang="en">

<head>
    <title>Strong Password Generator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <h1 class="text-center py-3">STRONG PASSWORD GENERATOR</h1>
    </header>
    <main>
        <div class="container">

            <form action="" method="post">
                <div class="my-3">
                    <label for="number" class="form-label">Inserisci un numero con almeno 5 cifre.</label>
                    <input type="number" class="form-control" id="number" name="number" min="5" required>

                </div>

                <div class="mb-3">
                    <label class="form-label">Seleziona i tipi di carattere</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lowercase" name="lowercase">
                        <label class="form-check-label" for="lowercase">Caratteri minuscoli</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="uppercase" name="uppercase">
                        <label class="form-check-label" for="uppercase">Caratteri maiuscoli</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="numbers" name="numbers">
                        <label class="form-check-label" for="numbers">Numeri</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="symbols" name="symbols">
                        <label class="form-check-label" for="symbols">Simboli</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
            </form>


            <div class="text-center my-3">
                <?php echo passwordGenerator(); ?>
            </div>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>