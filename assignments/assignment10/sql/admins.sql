CREATE TABLE admins (
 id int NOT NULL AUTO_INCREMENT,
 name varchar(255) NULL,
 email varchar(255) NULL,
 password varchar(255) NOT NULL,
 status varchar(50) NULL,
 PRIMARY KEY(id)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 
INSERT INTO admins VALUES (1, "Sarah Jiamjan", "sjiamjan@admin.com", "$2y$10$tB9Z.1xlHe6.C523UQ6bbu3Hdq3YLc0kGC4uKhg1EHWOCcPSqx9em", "admin");
 INSERT INTO admins VALUES (2, "Sarah Jiamjan", "sjiamjan@staff.com", "$2y$10$tB9Z.1xlHe6.C523UQ6bbu3Hdq3YLc0kGC4uKhg1EHWOCcPSqx9em", "staff");