CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Add a sample user (username: binay, password: binay)
INSERT INTO users (username, password) VALUES ('binay', MD5('password123'));

