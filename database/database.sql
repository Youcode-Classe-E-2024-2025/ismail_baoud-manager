create database gestion_des_rendezVous;

use gestion_des_rendezVous;

CREATE TABLE admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    admin_password VARCHAR(25) NOT NULL,
    admin_age INT NOT NULL,
    admin_address VARCHAR(255) NOT NULL,
    admin_phone VARCHAR(10) NOT NULL
);

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    user_password VARCHAR(25) NOT NULL,
    user_age INT NOT NULL,
    user_address VARCHAR(255) NOT NULL,
    user_phone VARCHAR(10) NOT NULL,
    status VARCHAR(50) NOT NULL DEFAULT 'REFUSE'
);

CREATE TABLE medecin (
    med_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    med_password VARCHAR(25) NOT NULL,
    med_age INT NOT NULL,
    med_address VARCHAR(255) NOT NULL,
    med_phone VARCHAR(10) NOT NULL
);

CREATE TABLE Appointment (
    app_id INT AUTO_INCREMENT PRIMARY KEY,
    visit_date datetime NOT NULL,
    med_id INT,
    user_id INT,
    FOREIGN KEY (med_id) REFERENCES medecin(med_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE feedbacks (
    msg_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    message_text VARCHAR(1200) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

ALTER TABLE users ALTER status SET DEFAULT 'en attend';

select * from users;

UPDATE users SET status = 'ACCEPT' WHERE user_id=10;

ALTER TABLE medecin
ADD status varchar(25);

ALTER TABLE appointment
DROP COLUMN phone;