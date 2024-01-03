-- Active: 1701030521725@@127.0.0.1@3306@immo
CREATE DATABASE IF NOT EXISTS IMMO;

USE IMMO;

-- Set the default character set and collation
ALTER DATABASE IMMO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Role table
CREATE TABLE
    IF NOT EXISTS Role (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- User table
CREATE TABLE
    IF NOT EXISTS User (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        phone VARCHAR(20),
        image VARCHAR(255),
        status TINYINT(1) NOT NULL,
        role_id INT,
        FOREIGN KEY (role_id) REFERENCES Role(id)
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Message table
CREATE TABLE
    IF NOT EXISTS Message (
        id INT AUTO_INCREMENT PRIMARY KEY,
        content TEXT NOT NULL,
        datePublication DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        sender_id INT NOT NULL,
        receiver_id INT NOT NULL,
        FOREIGN KEY (sender_id) REFERENCES User(id) ON DELETE CASCADE,
        FOREIGN KEY (receiver_id) REFERENCES User(id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- RealEstate table
CREATE TABLE property (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    city VARCHAR(100),
    price DECIMAL(10, 2),
    area INT,
    beds INT,
    baths INT,
    garage BOOLEAN,
    localization VARCHAR(255),
    image1 VARCHAR(255),
    image2 VARCHAR(255),
    image3 VARCHAR(255),
    image4 VARCHAR(255),
    image5 VARCHAR(255),
    type_id INT,
    FOREIGN KEY (type_id) REFERENCES Type(id),
);

-- Type table
CREATE TABLE
    IF NOT EXISTS Type (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Location table
CREATE TABLE
    IF NOT EXISTS Location (
        id INT AUTO_INCREMENT PRIMARY KEY,
        city VARCHAR(255) NOT NULL,
        address TEXT
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Transaction table
CREATE TABLE
    IF NOT EXISTS Transaction (
        id INT AUTO_INCREMENT PRIMARY KEY,
        amount DOUBLE NOT NULL,
        dateTransaction DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        real_estate_id INT NOT NULL,
        user_id INT NOT NULL,
        FOREIGN KEY (real_estate_id) REFERENCES RealEstate(id) ON DELETE CASCADE,
        FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- Comment table
CREATE TABLE
    IF NOT EXISTS Comment (
        id INT AUTO_INCREMENT PRIMARY KEY,
        content TEXT NOT NULL,
        image VARCHAR(255),
        datePublication DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        user_id INT NOT NULL,
        real_estate_id INT NOT NULL,
        FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE,
        FOREIGN KEY (real_estate_id) REFERENCES RealEstate(id) ON DELETE CASCADE
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

------------

CREATE TABLE IF NOT EXISTS City (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;


-- Remove the city column
ALTER TABLE Location
DROP COLUMN city;

-- Add the city_id column
ALTER TABLE Location
ADD COLUMN city_id INT;

-- Add the new foreign key constraint
ALTER TABLE Location
ADD CONSTRAINT FK_Location_City
FOREIGN KEY (city_id) REFERENCES City(id)
ON DELETE CASCADE;

-- Add a column for location_id to the User table
ALTER TABLE User
ADD COLUMN location_id INT;

-- Add a foreign key constraint for the location_id column
ALTER TABLE User
ADD CONSTRAINT FK_User_Location
FOREIGN KEY (location_id) REFERENCES Location(id)
ON DELETE SET NULL;

-- Add a column for city_id to the User table
ALTER TABLE User
ADD COLUMN city_id INT;

-- Add a foreign key constraint for the city_id column
ALTER TABLE User
ADD CONSTRAINT FK_User_City
FOREIGN KEY (city_id) REFERENCES City(id)
ON DELETE SET NULL;



    -- Insert data into Role table
INSERT INTO Role (name) VALUES
    ('Admin'),
    ('User');

-- Insert data into Type table
INSERT INTO Type (name) VALUES
    ('Condo'),
    ('Land'),
    ('Industrial');

-- Insert data into Location table
INSERT INTO Location (city, address) VALUES
    ('City4', 'Address4'),
    ('City5', 'Address5'),
    ('City6', 'Address6');

-- Insert data into User table
INSERT INTO User (username, email, password, phone, image, status, role_id) VALUES
    ('ModeratorUser', 'moderator@example.com', 'moderatorpassword', '987654321', 'moderator.jpg', 1, 1),
    ('GuestUser', 'guest@example.com', 'guestpassword', '123456789', 'guest.jpg', 1, 2);

-- Insert data into RealEstate table
INSERT INTO RealEstate (title, description, surface, price, status, type_id, location_id) VALUES
    ('Condo 1', 'Description for Condo 1', 90.0, 350000, 1, 1, 4),
    ('Land 1', 'Description for Land 1', 500.0, 120000, 1, 3, 5);

-- Insert data into Transaction table
INSERT INTO Transaction (amount, real_estate_id, user_id) VALUES
    (200000, 1, 3),
    (100000, 2, 4);

-- Insert data into Comment table
INSERT INTO Comment (content, image, user_id, real_estate_id) VALUES
    ('Nice house!', 'comment1.jpg', 2, 1),
    ('Great apartment!', 'comment2.jpg', 2, 2);

INSERT INTO Message (content, datePublication, sender_id, receiver_id) VALUES
    ('Hello, how are you?', '2022-01-01 12:00:00', 1, 2),
    ('I am fine, thank you!', '2022-01-02 14:30:00', 2, 1),
    ('Interested in the house?', '2022-01-03 10:45:00', 2, 1);