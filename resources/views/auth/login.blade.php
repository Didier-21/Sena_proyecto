<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #307b19;
            --secondary-color: #0813d8;
            --text-color: #0a158b;
            --hover-color: #004d40;
        }

        body {
            height: 100vh;
            margin: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)),
            url('images/login.jpeg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
            max-width: 800px;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h2 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            padding-bottom: 10px;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--primary-color);
        }

        .card {
            border: none;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.2em;
            border-radius: 15px 15px 0 0 !important;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #ab1515;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(0, 121, 107, 0.2);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .btn-secondary {
            background-color: #546e7a;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #37474f;
            transform: translateY(-2px);
        }

        .form-check-input {
            width: 20px;
            height: 20px;
            margin-top: 0;
        }

        .form-check-label {
            margin-left: 10px;
            font-size: 0.9em;
        }

        a {
            color: var(--primary-color);
            transition: all 0.3s ease;
            text-decoration: none;
        }

        a:hover {
            color: var(--hover-color);
            text-decoration: none;
        }

        .invalid-feedback {
            font-size: 0.85em;
            color: #d32f2f;
        }

        /* Animaciones para los campos del formulario */
        .form-group {
            opacity: 0;
            animation: fadeInUp 0.5s ease forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.2s; }
        .form-group:nth-child(2) { animation-delay: 0.4s; }
        .form-group:nth-child(3) { animation-delay: 0.6s; }
        .form-group:nth-child(4) { animation-delay: 0.8s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Efecto de carga en el botón */
        .btn-loading {
            position: relative;
            pointer-events: none;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin: -10px 0 0 -10px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: #b36d6d;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 15px;
            }

            .card-body {
                padding: 15px;
            }

            h2 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>

    <div class="container animate__animated animate__fadeIn">
        <h2 class="text-center">Inicio de Sesión CDR SAN JOSÉ</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" id="loginForm">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Aquí se agrega el reCAPTCHA -->
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="g-recaptcha" data-sitekey="TU_SITE_KEY_AQUÍ"></div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="loginButton">
                                        {{ __('INICIAR') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-4">
                            <a href="{{ route('register') }}" class="btn btn-secondary mb-2">Registrar nuevo usuario</a>
                            <div class="mt-2">
                                <a href="" class="forgot-password">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animación de entrada para el formulario
    const form = document.getElementById('loginForm');
    form.classList.add('animate__animated', 'animate__fadeIn');

    // Efecto de carga en el botón al enviar
    form.addEventListener('submit', function(e) {
        const button = document.getElementById('loginButton');
        button.classList.add('btn-loading');
    });

    // Animación al focus de los inputs
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });

    // Validación del email en tiempo real
    const emailInput = document.getElementById('email');
    emailInput.addEventListener('input', function() {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(this.value)) {
            this.classList.add('is-invalid');
            if (!this.nextElementSibling) {
                const feedback = document.createElement('div');
                feedback.className = 'invalid-feedback';
                feedback.textContent = 'Por favor, ingrese un email válido';
                this.parentElement.appendChild(feedback);
            }
        } else {
            this.classList.remove('is-invalid');
            const feedback = this.nextElementSibling;
            if (feedback && feedback.className === 'invalid-feedback') {
                feedback.remove();
            }
        }
    });

    // Efecto hover para el contenedor principal
    const container = document.querySelector('.container');
    container.addEventListener('mouseover', function() {
        this.style.transform = 'translateY(-5px)';
    });

    container.addEventListener('mouseout', function() {
        this.style.transform = 'translateY(0)';
    });
});
</script>

</body>
</html>
