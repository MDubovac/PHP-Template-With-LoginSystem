/*
* This file holds all of the queries we use
* Might use them later ...
*/

-- Create Users Table:
CREATE TABLE users(
	user_id INT(11) AUTO_INCREMENT NOT NULL,
	user_name VARCHAR(255) NOT NULL,
	user_username VARCHAR(255) NOT NULL,
	user_email VARCHAR(255) NOT NULL,
	user_password VARCHAR(255) NOT NULL,
	PRIMARY KEY(user_id)
);

-- Insert into users table:
INSERT INTO users (user_name, user_username, user_email, user_password)
VALUES ("Mladen", "MDubovac", "mladen@gmail.com", "mladen123");

