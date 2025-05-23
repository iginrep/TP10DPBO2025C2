<?php
require_once 'config/Database.php';

class BookingModel
{
    private $conn;
    private $table = "bookings"; // Corrected table name

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $query = "SELECT 
            bookings.id, 
            users.name AS user_name, 
            users.email, 
            fields.name AS field_name, 
            bookings.booking_date, 
            bookings.hours 
        FROM bookings
        JOIN users ON bookings.user_id = users.id
        JOIN fields ON bookings.field_id = fields.id";
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
        $query = "INSERT INTO " . $this->table . " (user_id, field_id, booking_date, hours) VALUES (:user_id, :field_id, :booking_date, :hours)";
        $stmt = $this->conn->prepare($query);

        // Sanitize and bind parameters
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':field_id', $data['field_id']);
        $stmt->bindParam(':booking_date', $data['booking_date']);
        $stmt->bindParam(':hours', $data['hours']);

        return $stmt->execute();
    }

    public function update($id, $data)
    {
        $query = "UPDATE " . $this->table . " SET 
            user_id = :user_id, 
            field_id = :field_id, 
            booking_date = :booking_date, 
            hours = :hours 
        WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        // Sanitize and bind parameters
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':field_id', $data['field_id']);
        $stmt->bindParam(':booking_date', $data['booking_date']);
        $stmt->bindParam(':hours', $data['hours']);
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
