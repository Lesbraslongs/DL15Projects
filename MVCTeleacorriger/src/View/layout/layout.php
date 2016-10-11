
<!doctype html>
    <html>
        <head>
            <title>Télé 3000</title>
            <meta charset="utf8"/>
            <link rel="stylesheet" href="./src/public/style/styles.css"/>
            
        </head>
        <body>
            <?php include('./src/View/layout/header/header.php');?>
            <div>
                <?php include('./src/View/layout/menus/menu.php');?>
                <?= $content; ?>
            </div>
            <?php include('./src/View/layout/footer/footer.php');?>
        </body>
    </html>		