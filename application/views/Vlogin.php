<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>LOGIN</title>
    <style>
        .img-login{
            width: 80%;
        }
    </style>
</head>
<body>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-6">
                        <img src="https://img.freepik.com/free-vector/computer-login-concept-illustration_114360-7962.jpg?w=2000" class="img-login" alt="image login">
                    </div>
                    <div class="col-md-5" style=" background: #aacbff; padding: 50px; border-radius:20px;">
                        
                        <form method="POST">

                        <h1 class="mb-3 pb-3 text-center" style="letter-spacing: 1px;">SIGN IN</h1>
                        <hr>
                        <div class="form-outline mb-4">
                            <input type="text" name="txt_user" class="form-control " placeholder="Username" />

                        </div>

                        <div class="form-outline mb-4">
                            <input  type="password" name="txt_pass" class="form-control " placeholder="Password" />
                        </div>

                        <div class="pt-2 mb-4">
                            <button class="btn btn-primary fw-bold btn-lg w-100" type="submit" value="Login" name="btn_login">Login</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
</body>
</html>