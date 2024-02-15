<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    @livewireStyles
    @livewireScripts
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .navbar {
            z-index: 2;
            position: fixed;
            background-color: rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        footer {
            height: 5vh;
            background-color: rgba(0, 0, 0, 0.3);
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        .image-container {
            position: relative;
        }

        .image {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px;
        }

        .title {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar justify-content-center w-100">
        <div class="d-flex justify-content-center mt-1">
            <img src="{{ asset('image/logo.png') }}" width="70px">
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="image-container">
                    <img src="{{ asset('image/home.png') }}" class="image">
                    <div class="overlay d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center mt-5">
                            <p class="title mb-0">Welcome to TanHS Property</p>
                            <p class="title">Custodian Management System!</p>
                        </div>
                        <div class="text-center mt-1">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-primary rounded-pill px-4 py-2 w-100"
                                        data-bs-toggle="modal" data-bs-target="#login_modal">
                                        <span class="fw-bold">Login</span>
                                    </button>
                                    @livewire('login')
                                </div>
                                <div class="col-auto d-flex align-items-center justify-content-center">
                                    or
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-outline-light rounded-pill px-4 py-2 w-100"
                                        data-bs-toggle="modal" data-bs-target="#reg_modal">
                                        <span class="fw-bold">Register</span>
                                    </button>
                                </div>
                            </div>
                            <div wire:ignore.self class="modal" tabindex="-1" role="dialog" id="reg_modal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="insertModalLabel" style="margin-left: 35%;">
                                                Admin Reg</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/register" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" placeholder="Username"
                                                        name="username" required>
                                                </div>
                                                <div class="mb-3">
                                                    <input class="form-control" placeholder="Password" name="password"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <input class="form-control" name="role" value="1">
                                                </div>
                                                <button type="submit" class="btn btn-primary"
                                                    style="width: 60%; margin-left: 20%;">submit</button>
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
    </div>

    <footer>
        <p class="text-center fs-6 text-light"><small>Copyright &copy;2023 Team SpyxFamily</small></p>
    </footer>

    @include('partial.footer')
</body>
