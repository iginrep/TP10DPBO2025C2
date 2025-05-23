CREATE DATABASE IF NOT EXISTS mini_soccer;
USE mini_soccer;

-- Table: users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

-- Table: fields
CREATE TABLE IF NOT EXISTS fields (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price_per_hour DECIMAL(10, 2) NOT NULL
);

-- Table: bookings
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    field_id INT NOT NULL,
    booking_date DATE NOT NULL,
    hours INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (field_id) REFERENCES fields(id) ON DELETE CASCADE
);

-- Input data ke tabel users
INSERT INTO users (name, email) VALUES
('Andi', 'andi@email.com'),
('Budi', 'budi@email.com'),
('Citra', 'citra@email.com');

-- Input data ke tabel fields
INSERT INTO fields (name, price_per_hour) VALUES
('Lapangan A', 150000),
('Lapangan B', 200000);

-- Input data ke tabel bookings
INSERT INTO bookings (user_id, field_id, booking_date, hours) VALUES
(1, 1, '2024-06-10', 2),
(2, 2, '2024-06-11', 3),
(3, 1, '2024-06-12', 1);