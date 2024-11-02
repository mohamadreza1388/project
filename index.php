<?php

$projects = ['travel' => 'سایت مختص سفر و مسافرت', 'mahdis' => 'سایت مزون و خرازی انلاین', 'coffee' => 'سایت فروش قهوه', 'accessory' => 'سایت فروش اکسسوری',];

$project = isset($_GET['project']) ? $_GET['project'] : '';

if (array_key_exists($project, $projects)) {
    $filePath = __DIR__ . "/projects/$project/index.html";

    if (file_exists($filePath)) {
        echo "<base href='/projects/$project/'>";

        include($filePath);
    } else {
        echo "<center><h1>404</h1></center>";
    }
} else {
    ?>
    <!doctype html>
    <html lang="fa">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>projects</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
              rel="stylesheet">
        <style>
            * {
                box-sizing: border-box;
                font-family: "Rubik", sans-serif;
            }

            body {
                direction: rtl;
                margin: 0;
                padding: 0;
            }

            .container {
                margin: 0 auto;
                width: 90%;
                max-width: 1560px;
            }

            header {
                border-radius: 20px;
                background-color: #f6f6f6;
                padding: 20px;
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;

                & a:is(:link,:visited) {
                    color: gray;
                    text-decoration: none;
                }

                & span {
                    color: gray;
                }
            }

            main {
                margin-top: 20px;
                display: grid;
                grid-template-columns: repeat(4, auto);
                gap: 15px;

                & a:is(:link, :visited) {
                    border-radius: 20px;
                    padding: 20px;
                    background-color: #f6f6f6;
                    text-decoration: none;
                    text-align: center;
                    color: black;
                    display: flex;
                    flex-direction: column;
                    gap: 15px;

                    & img {
                        border: 1px solid #dddddd;
                        width: 100%;
                        height: 150px;
                        object-fit: cover;
                        border-radius: 10px;
                    }
                }
            }
        </style>
    </head>
    <body>
    <div class="container">
        <header>
            <a href="https://mohamadrezanz.ir">محمدرضا نصراله زاده</a>
            <span>پروژه ها</span>
        </header>
        <main>
            <?php
            foreach ($projects as $key => $name) {
                echo "<a href='?project=$key'>
                                <img src='./images/$key.png' alt=''>
                                $name
                              </a>";
            }
            ?>
        </main>
    </div>
    </body>
    </html>
    <?php
}
?>
