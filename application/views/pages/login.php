<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <style>
        body {
            background-color: black;
        }

        .login {
            max-width: 350px;
            width: 100%;
            height: 500px;
            border-radius: 4px;
        }
    </style>
    <div class="position-fixed col-12 h-100 w-100 d-flex flex-column justify-content-center align-items-center">
        <?php
        $status = @$_GET['verify'];
        if ($status == "failed-to-verify-account") {
            $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Login Fail</strong> failed to verify your account
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
        } else {
            $alert = "";
        }
        echo $alert;
        ?>
        <div class="bg-light login text-center p-5 text-dark">
            <h1>Latizep.me</h1>
            <form class="text-start pt-4" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        let url = document.URL;
        let dataUrl = url.split('?verify=')
        window.history.pushState("", "", dataUrl[0]);
    </script>
</body>

</html>