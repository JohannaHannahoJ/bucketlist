<?php
$title = "Min Bucketlist";
$currentPage = "bucketlist";
require_once 'config.php';

$bucketlist = new Bucketlist();

// Nollställ variabler
$name = '';
$description = '';
$priority = '';

$nameError = '';
$descriptionError = '';
$priorityError = '';

// Kolla om formuläret är postat och hämtar värden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $priority = $_POST['priority'];

    if (empty($name)) {
        $nameError = 'Du måste ange vad du vill göra.';
    }

    if (empty($description)) {
        $descriptionError = 'Du måste skriva en beskrivning.';
    }

    if (empty($priority)) {
        $priorityError = 'Du måste välja en prioritet.';
    }

    if (empty($nameError) && empty($descriptionError) && empty($priorityError)) {
        if ($bucketlist->add($name, $description, (int)$priority)) {
            header('Location: bucketlist.php?added=1#top');
            exit;
        } else {
            echo '<p class="message error">Hoppsan! Något gick fel.</p>';
        }
    }
}

require_once 'includes/header.php';

// Kolla om en bucketlist-post ska tas bort
if (isset($_GET['deleteid'])) {
    $id = intval($_GET['deleteid']);

    if ($bucketlist->deleteItem($id)) {
        echo '<p class="message">Bucketlist-posten har tagits bort!</p>';
    } else {
        echo '<p class="message error">Kunde inte ta bort posten.</p>';
    }
}

$items = $bucketlist->getAll();

if (isset($_GET['added'])) : ?>
    <p class="message">Tillagd i bucketlistan!</p>
<?php endif;

?>

<h1>Saker jag vill</h1>
<div class="ingress">
    Här sparar jag idéer på vad jag vill uppleva, testa och göra. Potentiella drömmar helt enkelt!
</div>

<div class="bucketlist">
    <?php foreach ($items as $item) : ?>

        <article class="bucketlist-card">
            <h2><?= htmlspecialchars($item['name']) ?></h2>
            <p class="date">Tillagd: <?= date('Y-m-d', strtotime($item['created_at'])) ?></p>
            <p><?= htmlspecialchars($item['description']) ?></p>
            <p class="priority">
                <?php
                if ($item['priority'] == 3) {
                    echo '😻 Vill jättegärna göra!';
                } elseif ($item['priority'] == 2) {
                    echo '😸 Skulle vara kul!';
                } else {
                    echo '😺 Någon gång i framtiden';
                }
                ?>
            </p>
            <a class="delete-button" href="bucketlist.php?deleteid=<?= $item['id'] ?>">Ta bort</a>
        </article>

    <?php endforeach; ?>
</div>

<section class="add-bucketlist" id="add-form">
    <h2>Lägg till något på min bucketlist</h2>

    <form method="post" action="bucketlist.php#add-form">
        <label for="name">Vad vill du göra?</label>
        <input type="text" id="name" name="name"
            placeholder="Ex. Resa till Japan eller lära mig stå på händer..."
            value="<?= htmlspecialchars($name) ?>" required>

        <?php if (!empty($nameError)) : ?>
            <p class="message error"><?= $nameError ?></p>
        <?php endif; ?>

        <label for="description">Berätta lite mer!</label>
        <textarea id="description" name="description" required
            placeholder="Vad har du tänkt dig? Varför vill du göra det?"><?= htmlspecialchars($description) ?></textarea>

        <?php if (!empty($descriptionError)) : ?>
            <p class="message error"><?= $descriptionError ?></p>
        <?php endif; ?>

        <label for="priority">Hur viktigt är det för dig att förverkliga den här drömmen?</label>
        <select id="priority" name="priority" required>
            <option value="">Välj hur viktigt det är</option>
            <option value="1">Låg - Det vore kul någon gång</option>
            <option value="2">Medel - Jag vill verkligen få det gjort</option>
            <option value="3">Hög - Det här står högt på önskelistan</option>
        </select>

        <?php if (!empty($priorityError)) : ?>
            <p class="message error"><?= $priorityError ?></p>
        <?php endif; ?>

        <button type="submit" name="submit">Lägg till på min bucketlist</button>
    </form>
</section>

<?php require_once 'includes/footer.php'; ?>