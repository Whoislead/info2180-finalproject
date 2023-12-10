CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    password VARCHAR(255),
    email VARCHAR(255),
    role VARCHAR(255),
    created_at DATETIME
);

CREATE TABLE contacts (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    email VARCHAR(255),
    telephone VARCHAR(15),
    company VARCHAR(255),
    type VARCHAR(255),
    assigned_to INTEGER,
    created_by INTEGER,
    created_at DATETIME,
    updated_at DATETIME
);

CREATE TABLE notes (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    contact_id INTEGER,
    comment TEXT,
    created_by INTEGER,
    created_at DATETIME
);

INSERT INTO users (firstname, lastname, password, email, role, created_at)
VALUES ('Admin', 'User', '$2y$10$yourHashedPasswordHere', 'admin@project2.com', 'Admin', NOW());