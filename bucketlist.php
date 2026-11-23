<?php
$title = "Min Bucketlist";
$currentPage = "bucketlist";
require_once 'config.php';
require_once 'includes/header.php';
?>
<h1>Lägg till något i min bucketlist</h1>
<div class="ingress">
    Här händer det grejer..
</div>

<section class="add-bucketlist">
    <h2>Lägg till något på din bucketlist</h2>

    <?php
    $bucketlist = new Bucketlist();

    // Kolla om formuläret är postat och hämtar värden
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];

        if ($bucketlist->add($name, $description, (int)$priority)) {
            echo '<p class="message">Tillagd i bucketlistan!</p>';
        } else {
            echo '<p class="message">Hoppsan! Något gick fel.</p>';
        }
    }
    ?>

    <form method="post" action="bucketlist.php">
        <label for="name">Vad vill du göra?</label>
        <input type="text" id="name" name="name"
            placeholder="Ex. Resa till Japan eller lära mig stå på händer..." required>

        <label for="description">Berätta lite mer!</label>
        <textarea id="description" name="description"
            placeholder="Vad har du tänkt dig? Varför vill du göra det?"></textarea>

        <label for="priority">Hur viktigt är det för dig att förverkliga den här drömmen?</label>
        <select id="priority" name="priority" required>
            <option value="">Välj hur viktigt det är</option>
            <option value="1">Låg - Det vore kul någon gång</option>
            <option value="2">Medel - Jag vill verkligen få det gjort</option>
            <option value="3">Hög - Det här står högt på önskelistan</option>
        </select>

        <button type="submit" name="submit">Lägg till på min bucketlist</button>
    </form>
</section>

<?php require_once 'includes/footer.php'; ?>