<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: linear-gradient(#B24900,#00567F);
            background-attachment:fixed;
            background-size:cover;
            z-index: -1;
            margin-top: 4%;
        }
        header{
            z-index: 1;
            display: flex;
            position: absolute;
            justify-content: space-between;
            height: 7%;
            width: 100%;
            top: 0;
            left: 0;
            border-bottom: 1px solid black;
        }
        .logo{
            display: flex;
            align-items: center;
            margin-left: 1%;
        }
        .logo img{
            width: 60%;
            height:60%;
        }
        .nav-bar{
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav-bar a{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #00567F;
            color: white;        
            text-decoration: none;
            padding: 5px  8px;
            border: 0.5px solid black;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.5s;
        }
        .nav-bar a:hover{
            background-color: transparent;
            border: 1px solid black;
            color: black;
        }
        .profile{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            display: flex;
            align-items: center;
            gap: 0.5vw;
            margin-right: 0.5%;
        }
        .profile h3{

        }
        .profile img{
            border: 2px solid rgb(5, 136, 5);
            border-radius: 50%;
            height: 30px;
            width: 30px;
            padding: 1px;
        }
        /*-----les slides ----*/
        .slides{
            border-bottom: 1px solid black;
            width: 100%; 
            display: flex;
            justify-content: center;
        }
        .slides img{
            width: 98%;
            height: 30vh;
            margin: 0.5%;
        }
        /*---la table des domaines---*/
        .domains{
            display: flex;
            justify-content: center;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border-bottom: 1px solid black;
            height: 52vh;
        }
        table{
            margin-top: 1%;
            width: 90%;
            height: 48vh;
        }
        td{
            border:1px solid black;
            border-radius: 5px;
            text-align: center;
            line-height: 10px;
            transform: scale(0.95);
            transition: all 1s ;
        }
        td:hover{
            transform: scale(1);
        }
        /*---section des analiyses ----*/
        .analytiques{
            margin-top: 1%;
            padding: 20px 0px;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
            display: flex;
            justify-content: space-evenly;
            font-family:Arial, Helvetica, sans-serif;
        }
        .analytiques div{
            text-align: center;
        }
        .analytiques p:first-child{
            font-weight: bolder;
        }
        /*---section de contact ----*/
        .contact{
            border: 1px solid black;
            margin-top: 1%;
            height: 40vh;
            width: 100%;
        }
        .contact form{
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .message{
            width: 100%;
        }
        .message textarea{
            margin: 20px;
            width: 95% ;
            height: 85%;
            background-color: transparent;
            border-radius: 5px;
            border: 1px solid black ;
        }
        .infos input{
            width: 30vw;
            text-align: center;
            padding: 10px 0px;
            margin-top:10px ;
            border-radius: 5px;
            background-color: transparent;
            color: white;
            border: 1px solid black;
            
        }
        .infos input:focus{
            background-color: transparent;
        }
        .infos{
            margin: 10px 20px;
            width: 50%;
            text-align: center;
        }
        #submit{
            width: 10vw;
        }
        #submit:hover{
            background-color: #00567F;
        }
    </style>
</head>
<body>
    <header>
            <div class="logo">
                <img src="pics/blue_logo.png"  alt="" srcset="">
            </div>

            <div class="nav-bar">
                <a href="">About us</a>
                <a href="">Home</a>
                <a href="#domains">Domains</a>
                <a href="#contact">Contact</a>
                <a href="#footer">FAQ</a>
            </div>

            <div class="profile">
                <h3>Ziyad.O</h3>
                <img src="pics/487 px largeur.png" alt="">
            </div>

    </header>
    
    <!-----des slides publicitaire dans le tot du site ----->
    <section class="slides">
        <img src="pics/bg.png"  alt="">
    </section>
    <!---- les domaines d'études existe dans le site ------>
    <section class="domains" id="domains">
        <table>
            <tr>
                <td>
                    <h3>IT</h3>
                </td>
                <td>
                    <h3>Economie</h3>
                </td>
                <td>
                    <h3>الثقافة المالية</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Trading</h3>
                </td>
                <td>
                    <h3></h3>
                </td>
                <td>
                    <h3>Title of domain</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Title of domain</h3>
                </td>
                <td>
                    <h3>Title of domain</h3>
                </td>
                <td>
                    <h3>Title of domain</h3>
                </td>
            </tr>
        </table>
    </section>
    <!-----des analyses de sites concerant les users ------>
    <section class="analytiques">
        <div>
            <p>25162</p>
            <p>Inscrit</p>
        </div>
        <div>
            <p>10222</p>
            <p>Actif Now</p>
        </div>
        <div>
            <p>2121</p>
            <p>Graduated</p>
        </div>
        <div>
            <p>20</p>
            <p>Number of Degrees</p>
        </div>
    </section>
    <!---- envoyer nous un email -->
    <section class="contact" id="contact">
        <form action="" method="POST">
            <div class="message">
                <textarea name="" id="" style="text-align: ²center;">
                    Inser your message here !
                </textarea>
            </div>
            <div class="infos">
                <input type="email" name="email" id="email" placeholder="Insert your e-mail !">
                <input type="tel" name="tel" id="tel" placeholder="Insert your phone number">
                <input type="text" name="full-name" id="full-name" placeholder="Insert your Full Name">
                
                <input type="submit" value="Submit" name="submit" id="submit">
            </div>
        </form>
    </section>
    <!------les méthode de paiment des pack supporté par notrs site ------>
    <section class="paiement-methods">

    </section>

</body>
<footer id="footer">
    
</footer>
</html>