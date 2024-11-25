<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #13e616;
            --secondary-color: #e0f7fa;
            --text-color: #0b0303;
            --hover-color: #004d40;
        }

        body {
            height: 100vh;
            margin: 0;
            background: url('images/register.jpeg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
            max-width: 800px;
            margin: 20px;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        .card {
            background: rgba(8, 223, 223, 0.1);
            border: none;
            backdrop-filter: blur(5px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background: transparent;
            border: none;
            padding-bottom: 20px;
        }

        h2 {
            color: #31d318;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: center;
            margin-bottom: 30px;
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

        .form-label {
            color: #fff;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 0.95em;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 12px;
            color: #fff;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--primary-color);
            box-shadow: 0 0 10px rgba(0, 121, 107, 0.2);
            color: #fff;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        .btn-primary:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .form-check-input {
            width: 20px;
            height: 20px;
            margin-top: 0;
            background-color: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-check-label {
            margin-left: 10px;
            font-size: 0.9em;
        }

        .alert-danger {
            background: rgba(220, 53, 69, 0.9);
            border: none;
            color: #fff;
            border-radius: 10px;
        }

        .text-primary {
            color: var(--secondary-color) !important;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .text-primary:hover {
            color: #fff !important;
        }

        /* Animaciones para los campos del formulario */
        .mb-3 {
            opacity: 0;
            animation: fadeInUp 0.5s ease forwards;
        }

        .mb-3:nth-child(1) { animation-delay: 0.2s; }
        .mb-3:nth-child(2) { animation-delay: 0.4s; }
        .mb-3:nth-child(3) { animation-delay: 0.6s; }
        .mb-3:nth-child(4) { animation-delay: 0.8s; }
        .mb-3:nth-child(5) { animation-delay: 1s; }

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

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .card {
                padding: 20px;
            }

            h2 {
                font-size: 1.5em;
            }
        }

        /* Efecto de validación en tiempo real */
        .form-control.is-valid {
            border-color: #198754;
            background-image: none;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
            background-image: none;
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
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container animate__animated animate__fadeIn">
        <div class="card">
            <div class="card-header">
                <h2>Registro de Usuarios CDR</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger animate__animated animate__fadeIn">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Ingrese su nombre completo">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" name="email" id="email" class="form-control" required placeholder="ejemplo@correo.com">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" name="password" id="password" class="form-control" required placeholder="Mínimo 8 caracteres">
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required placeholder="Repita su contraseña">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">Acepto los <a href="#" class="text-primary">términos y condiciones</a></label>
                    </div>

                    <button type="submit" class="btn btn-primary" id="registerButton">Registrarse</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registerForm');
        const password = document.getElementById('password');
        const passwordConfirm = document.getElementById('password_confirmation');
        const email = document.getElementById('email');

        // Validación del email en tiempo real
        email.addEventListener('input', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(this.value)) {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
            } else {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });

        // Validación de contraseña en tiempo real
        password.addEventListener('input', validatePassword);
        passwordConfirm.addEventListener('input', validatePassword);

        function validatePassword() {
            if (password.value.length >= 8) {
                password.classList.add('is-valid');
                password.classList.remove('is-invalid');
            } else {
                password.classList.add('is-invalid');
                password.classList.remove('is-valid');
            }

            if (passwordConfirm.value === password.value && password.value !== '') {
                passwordConfirm.classList.add('is-valid');
                passwordConfirm.classList.remove('is-invalid');
            } else {
                passwordConfirm.classList.add('is-invalid');
                passwordConfirm.classList.remove('is-valid');
            }
        }

        // Efecto de carga en el botón al enviar
        form.addEventListener('submit', function(e) {
            const button = document.getElementById('registerButton');
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
    });
    </script>
</body>
</html>
