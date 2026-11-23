<?php
// ansvarar för innehållet i bucketlistan

class Bucketlist
{

    //properties
    private PDO $db;
    private $name;
    private $description;
    private $priority;

    // Constructor
    function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Lägg till en post i bucketlistan
    public function add(string $name, string  $description, int $priority): bool
    {
        if (empty(trim($name))) return false;
        if (!in_array($priority, [1, 2, 3])) return false;

        $sql = "INSERT INTO bucketlist (name, description, priority)
                VALUES (:name, :description, :priority)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name' => $name,
            ':description' => $description,
            ':priority' => $priority
        ]);
    }

    // Hämta alla objekt från databasen. 
    public function getAll(): array
    {
        // sortera i prioriteringsordning och sdatum för tillagt
        $sql = "SELECT * FROM bucketlist ORDER BY priority DESC, created_at DESC";

        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
