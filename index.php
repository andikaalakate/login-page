<?php include 'config/koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EXAM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap Icons and Font Awesome -->
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
</head>

<body>
    <section class="login vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-lg border-4 rounded-4 loginform">
                        <div class="card-body p-5">

                            <h3 class="text-center">Sign In</h3>

                            <hr class="border border-white border-1 opacity-50">

                            <!-- Form Start -->
                            <form action="config/logina.php" method="post">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <div class="input-group">
                                        <label for="typeEmailX-2">
                                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        </label>
                                        <input type="email" name="email" id="typeEmailX-2" name="email"
                                            class="form-control form-control-md" placeholder="Masukkan Email Anda ..." required />
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <div class="input-group">
                                        <label for="typePasswordX-2">
                                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        </label>
                                        <input type="password" name="password" id="typePasswordX-2" name="password"
                                            class="form-control form-control-md" placeholder="Masukkan Password Anda ..." required />
                                    </div>
                                </div>

                                <div class="log">
                                    <button class="btn btn-primary btn-md shadow loginbtn" type="submit">Sign
                                        In</button>
                                    <a href="registrasi" class="btn btn-primary btn-md shadow regisbtn">
                                        Sign Up
                                    </a>
                                </div>
                            </form>

                            <!-- Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>