<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucketlist | <?= $title ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">
        <header>
            <nav>
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

        <main>