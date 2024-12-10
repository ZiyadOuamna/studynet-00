<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyNet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            width: 40px;
            height: 40px;
        }
        .hero {
            background-color: #ffffff;
            padding: 60px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .card {
            border: none;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .contact-form input, .contact-form textarea {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }
        .contact-form button {
            background-color: #007bff;
            color: #fff;
        }
        footer {
            background-color: #ffffff;
            color: #6c757d;
            padding: 20px 0;
            border-top: 1px solid #e9ecef;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="pics/blue_logo.png" alt="Logo">
                StudyNet
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#domains">Domains</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                 
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-center">
        <div class="container">
            <h1>Welcome to StudyNet</h1>
            <p class="lead">Your gateway to mastering skills. Explore unlimited learning content.</p>
        </div>
    </header>

    <!-- Domains Section -->
    <section id="domains" class="container my-5">
        <h2 class="text-center mb-4">Explorez nos Domaines</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">IT</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Economie</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Littérature financière</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Ecommerce</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Développement Web</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Crypto</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Freelance</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Mathematique</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">physique-chimie</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Analytics Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <h3>25,162</h3>
                    <p>Utilisateurs Enregistrés</p>
                </div>
                <div class="col-md-3">
                    <h3>10,222</h3>
                    <p>Actif Maintenant</p>
                </div>
                <div class="col-md-3">
                    <h3>2,121</h3>
                    <p>Diplômés</p>
                </div>
                <div class="col-md-3">
                    <h3>20</h3>
                    <p>Diplômes Offerts</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">Contactez-Nous</h2>
            <form class="row contact-form">
                <div class="col-md-6 mb-3">
                    <textarea class="form-control" rows="5" placeholder="Insérez votre message ici"></textarea>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control mb-3" placeholder="Insérez votre email ici">
                    <input type="tel" class="form-control mb-3" placeholder="Insérez votre numéro de téléphone">
                    <input type="text" class="form-control mb-3" placeholder="Insérez votre nom complet">
                    <button type="submit" class="btn btn-primary w-100">Valider</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-auto">
        <div class="container">
            <p>&copy; 2024 StudyNet. All rights reserved.</p>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>