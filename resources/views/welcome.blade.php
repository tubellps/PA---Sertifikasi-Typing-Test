<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Computer Course</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

     <!-- style -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="py-2">
        <div class="container">
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img class="d-block px-2" src="{{ asset('img/Login.png') }}" alt="login">
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                <form>
                                <div class="d-flex px-5 mb-3 pb-4">
                                    <i class="fas fa-cubes fa-2x me-3"></i>
                                    <span class="h1 fw-bold mb-0">Computer Course</span>
                                </div>
                                <h5 class="fw-normal mb-2 pb-0" style="letter-spacing: 1px;">Yuk Masuk Akunmu</h5>

                                <div class="input-group flex-nowrap mb-4">
                                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-send-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                                  </div>

                                  <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping"><i class="bi bi-unlock-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
                                  </div>

                                <div class="pt-4 mb-4">
                                    <a class="btn btn-dark gap-2 col-6" href="/login" role="button"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                                </div>

                                <p class="text-left text-dark py-5">
                                    Copyright &copy; 2022
                                    | MI BUSTANUL MUBTADIIN KETAPANG
                                </p>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
      </div>

</body>
</html>
