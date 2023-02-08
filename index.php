<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

</head>
<body>
    <header class="container text-center my-5">
        <h1>Password Generator</h1>
    </header>
    <main class="container">
        <form action="" method="GET" class="card d-flex p-5">
            <div class="row row-cols-2 mb-3">
                <div class="col">
                    <label for="pw-lenght">Lunghezza Password:</label>
                </div>
                <div class="col">
                    <input type="number" id="pw-lenght" name="pw-lenght" min="8" max="20">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary">Genera</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>