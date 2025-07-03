<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin - ASUNICACO</title>

    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #2952A1;
            --primary-dark: #1f3d77;
            --secondary-color: #f8f9fc;
            --accent-color: #4e73df;
            --text-light: #f8f9fa;
            --text-gray: #858796;
        }

        body {
            background-color: var(--secondary-color);
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            border: none;
            border-radius: 12px;
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: var(--text-light);
            padding: 30px 20px;
            text-align: center;
            position: relative;
        }

        .login-header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 0;
            right: 0;
            height: 20px;
            background-color: white;
            border-radius: 20px 20px 0 0;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .logo-img {
            width: 60px;
            height: 60px;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
        }

        .brand-title {
            font-weight: 600;
            font-size: 1.8rem;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .brand-subtitle {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-top: 5px;
        }

        .card-body {
            padding: 30px;
            background-color: white;
        }

        .form-label {
            font-weight: 500;
            color: var(--text-gray);
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-control {
            font-size: 0.95rem;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            /* transition: all 0.3s; */
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }

        .input-group-text {
            background-color: transparent;
            border-right: none;
        }

        .input-with-icon {
            border-left: none;
        }

        .btn-login {
            border: none;
            padding: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
            border-radius: 8px;
            color: white;
            background: var(--primary-color);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .alert {
            border-radius: 8px;
            padding: 12px 15px;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: var(--text-gray);
        }

        .password-container {
            position: relative;
        }

        .footer-links {
            text-align: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: var(--text-gray);
        }

        .footer-links a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        @media (max-width: 576px) {
            .login-card {
                margin-top: 0;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card login-card">
            <div class="login-header">
                <div class="logo-container">
                    <img src="<?= base_url('assets/img/favicon_io/logo-asunicaco.png') ?>" alt="Logo" class="logo-img">
                </div>
                <h1 class="brand-title">ASUNICACO</h1>
                <p class="brand-subtitle">Connexion Administrateur</p>
            </div>

            <div class="card-body">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form method="get" action="<?= base_url('dashboard') ?>">
                    <div class="mb-4">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control input-with-icon" id="email" required placeholder="admin@example.com">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="password-container">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" name="password" class="form-control input-with-icon" id="password" required placeholder="••••••••">
                            </div>
                            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-login" style="background-color: var(--primary-color);">
                             Se connecter
                        </button>
                    </div>

                    <div class="footer-links">
                        <a href="#">Mot de passe oublié ?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });

        // Add animation to form inputs when focused
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.querySelector('.input-group-text').style.color = '#4e73df';
            });

            input.addEventListener('blur', function() {
                this.parentElement.querySelector('.input-group-text').style.color = '';
            });
        });
    </script>
</body>

</html>