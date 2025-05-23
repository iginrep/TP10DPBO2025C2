<?php
require_once 'config/database.php';

class FieldModel
{
    private $conn;
    private $table = "fields"; // Corrected table name

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $query = "INSERT INTO " . $this->table . " (name, price_per_hour) VALUES (:name, :price_per_hour)";
        $stmt = $this->conn->prepare($query);

        // Sanitize
        $name = htmlspecialchars(strip_tags($data['name']));
        $price_per_hour = htmlspecialchars(strip_tags($data['price_per_hour']));

        // Bind
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price_per_hour', $price_per_hour);

        return $stmt->execute();
    }


    public function update($id, $data)
    {
        $query = "UPDATE " . $this->table . " SET name = :name, price_per_hour = :price_per_hour WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':price_per_hour', $data['price_per_hour']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


    public function delete($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
