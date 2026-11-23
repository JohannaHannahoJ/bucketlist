<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucketlist | <?= $title ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <a href="#main-content" class="skip-link">Hoppa till innehåll</a>

    <div class="container">
        <header>
            <nav aria-label="Huvudmeny">
                <ul class="topnav">
                    <li><a href="index.php"
                            class="<?= $currentPage === 'index' ? 'active' : '' ?>"
                            <?= $currentPage === 'index' ? 'aria-current="page"' : '' ?>>Hem</a></li>
                    <li><a href="bucketlist.php" class="<?= $currentPage === 'bucketlist' ? 'active' : '' ?>"
                            <?= $currentPage === 'bucketlist' ? 'aria-current="page"' : '' ?>>Min Bucketlist</a></li>
                    <li><a href="ai.php" class="<?= $currentPage === 'ai' ? 'active' : '' ?>"
                            <?= $currentPage === 'ai' ? 'aria-current="page"' : '' ?>>AI</a></li>
                </ul>
            </nav>
        </header>

        <main id="main-content">