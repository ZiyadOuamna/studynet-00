<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyNet</title>
    <link rel="website icon" href="pics/blue_logo.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       body, html {
    height: 100%; 
    margin: 0; 
    display: flex;
    flex-direction: column;
}
        header {
            background-color: #ffffff; 
            border-bottom: 1px solid #dee2e6;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo img {
            height: 40px;
            width : 10px;
        }
        .nav-bar input,
        .nav-bar select {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 5px 10px;
            color: #495057;
            transition: all 0.3s ease-in-out;
        }
        .nav-bar input:hover,
        .nav-bar select:hover {
            background-color: #007bff;
             background-color: white;
            color: black;;
        }
        .body-content {
            text-align: center;
            margin-top: 10vh;
        }
        .text-body h1 {
            color: #212529;
        }
        .text-body h4 {
            color: #495057;
        }
        .text-body p {
            color: #6c757d;
        }
        form input {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 10px;
            width: 300px;
        }
        form button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        form button:hover {
            background-color: #0056b3;
        }
        .landing_page {
    flex: 1; 
}
        footer {
    text-align: center;
    background-color: #f8f9fa;
    border-top: 1px solid #dee2e6;
    padding: 10px 0;
    color: #6c757d;
    height: 3rem;
  
}
.vit-content {
            text-align: center;
            margin-bottom: 2vh;
        }


    </style>
</head>
<body>
    <section class="landing_page">
        <header>
            <div>
                <img class="logo" src="pics/blue_logo.png" alt="Logo" width="100px">
            </div>
            <div class="nav-bar d-flex gap-3">
                <input class="identifier" type="button" value="S'identifie">
                <select class="language">
                    <option value="fr">Français</option>
                    <option value="en">English</option>
                    <option value="es">Español</option>
                </select>
                <select class="mode">
                    <option value="fr">Sombre</option>
                    <option value="en">Blanc</option>
                    
                </select>
            </div>
        </header>
    
        <div class="body-content">
          
            <div class="text-body">
                <h1>Contenu d'apprentissage en illimité, et bien plus encore.</h1>
                <h4>À partir de 35 MAD. Annulable à tout moment.</h4>
                <p>
                    Prêt à rejoindre StudyNet ? Saisissez votre adresse e-mail pour vous inscrire et commencer dès aujourd'hui.
                </p>
            </div>
     
            <form class="sign-up mt-4" action="/acceuil-page" method="POST">
                <input class="email mb-3" type="email" name="email" placeholder="Saisissez Votre E-mail">
                <br>
      
                <button class="commencer" name="submit" type="submit">Commencer</button>
                </form>
                
                <div class="vit-content"> 
                <h3>YOUR GATEWAY TO MASTERING SKILLS</h3>
                </div>
            </form>
        </div>
    </section>
</body> 
<footer class="mt-auto">
        <div class="container">
            <p>&copy; 2024 StudyNet. All rights reserved.</p>
        </div>
    </footer>
</html>