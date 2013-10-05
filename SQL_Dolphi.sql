CREATE DATABASE Dolphi;
USE Dolphi;

CREATE TABLE Users
(
u_id INT,
PRIMARY KEY (u_id)
);

CREATE TABLE Tags
(
t_id INT,
tag VARCHAR(140) NOT NULL,
PRIMARY KEY (t_id)
);

CREATE TABLE Users_Tags
(
u_id INT,
t_id INT,
rating INT(2),
PRIMARY KEY (u_id, t_id),
FOREIGN KEY (t_id) REFERENCES Tags(t_id),
FOREIGN KEY (u_id) REFERENCES Users(u_id)
);

INSERT INTO Users
VALUES (1);

INSERT INTO Tags
VALUES (1,"#hashbook");

INSERT INTO Users_Tags 
VALUES (1,1,10);
