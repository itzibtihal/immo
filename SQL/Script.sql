CREATE DATABASE IF NOT EXISTS IMMO;
USE IMMO;

-- Set the default character set and collation
ALTER DATABASE IMMO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- Role table
CREATE TABLE IF NOT EXISTS Role (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    name VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- User table
CREATE TABLE IF NOT EXISTS User (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    username VARCHAR(255) NOT NULL,
                                    email VARCHAR(255) NOT NULL UNIQUE,
                                    password VARCHAR(255) NOT NULL,
                                    phone VARCHAR(20),
                                    image VARCHAR(255),
                                    status TINYINT(1) NOT NULL,
                                    role_id INT,
                                    FOREIGN KEY (role_id) REFERENCES Role(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Message table
CREATE TABLE IF NOT EXISTS Message (
                                       id INT AUTO_INCREMENT PRIMARY KEY,
                                       content TEXT NOT NULL,
                                       datePublication DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                       sender_id INT NOT NULL,
                                       receiver_id INT NOT NULL,
                                       FOREIGN KEY (sender_id) REFERENCES User(id) ON DELETE CASCADE,
                                       FOREIGN KEY (receiver_id) REFERENCES User(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- RealEstate table
CREATE TABLE IF NOT EXISTS RealEstate (
                                          id INT AUTO_INCREMENT PRIMARY KEY,
                                          title VARCHAR(255) NOT NULL,
                                          description TEXT NOT NULL,
                                          surface DOUBLE NOT NULL,
                                          price DOUBLE NOT NULL,
                                          status TINYINT(1) NOT NULL,
                                          type_id INT NOT NULL,
                                          location_id INT NOT NULL,
                                          FOREIGN KEY (type_id) REFERENCES Type(id),
                                          FOREIGN KEY (location_id) REFERENCES Location(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Type table
CREATE TABLE IF NOT EXISTS Type (
                                    id INT AUTO_INCREMENT PRIMARY KEY,
                                    name VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Location table
CREATE TABLE IF NOT EXISTS Location (
                                        id INT AUTO_INCREMENT PRIMARY KEY,
                                        city VARCHAR(255) NOT NULL,
                                        address TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Transaction table
CREATE TABLE IF NOT EXISTS Transaction (
                                           id INT AUTO_INCREMENT PRIMARY KEY,
                                           amount DOUBLE NOT NULL,
                                           dateTransaction DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                           real_estate_id INT NOT NULL,
                                           user_id INT NOT NULL,
                                           FOREIGN KEY (real_estate_id) REFERENCES RealEstate(id) ON DELETE CASCADE,
                                           FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Comment table
CREATE TABLE IF NOT EXISTS Comment (
                                       id INT AUTO_INCREMENT PRIMARY KEY,
                                       content TEXT NOT NULL,
                                       image VARCHAR(255),
                                       datePublication DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                                       user_id INT NOT NULL,
                                       real_estate_id INT NOT NULL,
                                       FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE,
                                       FOREIGN KEY (real_estate_id) REFERENCES RealEstate(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
