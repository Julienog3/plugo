<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title><?php if (isset($data['title'])) echo $data['title'] . ' - ' ?>Plugo</title>
</head>
<body>
    <?php include 'pages/_navbar.php'; ?>

    <main class="container">
        <?php require $templatePath ?>
    </main>


    <?php include 'pages/_footer.php'; ?>
</body>
</html>