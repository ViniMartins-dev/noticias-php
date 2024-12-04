<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <title>login</title>
</head>

<body>
    <div class="container-fluid h-100 mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <form method="POST" action="/noticias-php/script/loginValidate.php">

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form-user">Usuário</label>
                        <input type="text" id="form-user" class="form-control form-control-lg"
                            placeholder="Entre com um usuário válido" name="form-user" required />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form-pswd">Senha</label>
                        <input type="password" id="form-pswd" class="form-control form-control-lg"
                            placeholder="Entre com uma senha" name="form-pswd" required />
                    </div>

                    <div class="text-center text-lg-center mt-4 pt-2">
                        <input type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>