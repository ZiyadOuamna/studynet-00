<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyNet</title>
    <link rel="website icon" href="pics/blue_logo.png">
    <style>   
        :root{

        }
        *{
            font-weight: 700;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background-image: linear-gradient(#B24900,#00567F);
            background-attachment:fixed;
            background-size:cover;
        }

        header{
            display: flex;
            justify-content: space-between;
            
        }
        .logo{

        }
        .identifier , .mode , .language{
            color: white;
            padding: 5px 10px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: #00567F;
            transition: all 0.5s;
        } 
        .identifier:hover , .mode:hover , .language:hover , .commencer:hover{
            background-color: transparent;
            color: black;
        }
        .language{

        }
        .mode{

        }
        .body-content{
            text-align: center;
            position: relative;
            margin: auto;
            top: 15vh;
        }
        .text-body{
            align-content: center;
            text-align: center;
            font-size: 20px;
        }
        footer h3{
            position: absolute;
            bottom: 0;
            right: 30px;
        }
        .commencer{
            color: white;
            padding: 10px 20px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: #00567F;
            transition: all 0.5s;
        }
        input{
            text-align: center;
            background-color: transparent;
            border: 1px solid black;
            padding: 10px 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <section class="landing_page">
        
        <header>
            <div>
                <img class="logo" src="pics/blue_logo.png" height="30" width="" >
            </div>
            <div class="nav-bar">
                <input class="identifier" type="button" value="S'identifie">
                
                <select class="language">
                    <option value="fr">Français</option>
                    <option value="en">English</option>
                    <option value="es">Español</option>
                </select>
    
                <select class="mode">
                    <option value="fr">Sombre</option>
                    <option value="en">Blanc</option>
                    <option value="es">gris</option>
                </select>
            </div>
        </header>
        <!------le contenu du body ------>
        <div class="body-content">

            <!------texte de présetation ------>
            <div class="text-body">
                <h1>
                    Contenu d'apprentissage en illimité, et bien plus encore.
                </h1>
                <h4>
                    À partir de 35 MAD.Annulable à tout moment.
                </h4>
                <p>
                    Prêt à rejoindre StudyNet ? Saisissez votre adresse e-mail pour vous inscrire et commencer dès aujourd'hui.
                </p>
            </div>

            <!------ premier formulaire d'inscription  ------>
            <form class="sign-up" method="POST">
                <input class="email"     type="email"  name="email"  placeholder="Saisissez Votre E-mail">
                <button class="commencer"  name="submit" >Commencer</button>
            </form>
        </div>
            
    </section>
    
</body> 

<footer>
    <h3>YOUR GETEWAY TO MASTERING SKILLS</h3>
    <script src="script.js"></script>
</footer>

</html>
