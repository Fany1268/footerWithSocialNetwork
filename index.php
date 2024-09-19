<?php

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Moderní Navigační Lišta a footer</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
              integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- Přidání Font Awesome z CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <style>

            body {
                padding: 0;
                margin: 0;
                font-family: Arial, sans-serif;
            }
            .navbar {
                display: flex;
                justify-content: center;
                background-color: #000;
                padding: 20px 0;
            }
            .navbar ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }
            .navbar li {
                margin: 0 15px;
            }
            .navbar a {
                text-decoration: none;
                color: #c0c0c0;
                font-size: 18px;
                transition: color 0.3s;
            }
            .navbar a:hover {
                color: #fff;
            }
            .navbar .active {
                color: #fff;
                border-bottom: 2px solid #c0c0c0;
                padding-bottom: 5px;
            }



            footer {
                background-color: #000000;
                color: white;
                padding: 10px 0;
                position: fixed;
                bottom: 0;
                width: 100%;
                text-align: center;
            }
            footer a {
                color: white;
                margin: 0 15px;
                text-decoration: none;
                font-size: 20px;
            }
            footer a:hover {
                text-decoration: underline;
            }
            .social-icons {
                margin: 10px 0;
            }
            .social-icons a {
                color: white;
                margin: 0 10px;
            }
            .social-icons a:hover {
                color: #ffcc00;
            }
        </style>
    </head>
    <body>

    <nav class="navbar">
        <ul>
            <li><a href="#" class="active">Domů</a></li>
            <li><a href="#">O nás</a></li>
            <li><a href="#">Kontakt</a></li>
            <li><a href="#">Galerie</a></li>
        </ul>
    </nav>



    <!-- Footer s odkazy na sociální sítě s ikonami -->
    <footer>
        <p>Sledujte nás na sociálních sítích:</p>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    </body>
    </html>


