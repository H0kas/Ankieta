<?php

    session_start();

    
    if (!isset($_SESSION['done'])) 
    {
        header('Location: index.php');
        exit(); // żeby nie wykonywał się dalej kod
    }
    else
    {
        unset($_SESSION['done']);
    }
?>

    <!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="UTF-8">
        <title>Kwestionariusz żywieniowy - dietetyk Izabela Xyz</title>
		<link rel="shortcut icon" type="image/png" href="img/faviconnn.ico"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
        <style>
            body {
                padding: 0;
                margin: 0;
                height: 100vh;
                background-image: url(img/wood.jpg);
                background-size: cover;
            }

            .dzieki {
                height: 100%;
                display: flex;
                align-items: center;
                align-content: center;
                justify-content: center;

            }

            .container {
                text-align: center;
                font-family: 'Open Sans', sans-serif;
                background: rgba(255, 255, 255, 0.7);
                border-radius: 10px;
                color: #3b5c75;
                padding: 0 40px;
            }

            h2 {
                font-size: 45px;
            }

            @media only screen and (max-width: 575px) {
                h2 {
                    font-size: 25px;
                }
                .container {
                    padding: 0px;
                    margin: 15px;
                }
            }

        </style>
    </head>

    <body>
        <header class="dzieki">
            <div class="container">
                <h2>Dziękuję za wypełnienie kwestionariusza</h2>
            </div>
        </header>
    </body>

    </html>
