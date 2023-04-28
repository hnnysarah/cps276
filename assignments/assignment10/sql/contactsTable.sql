CREATE TABLE contacts (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    city varchar(50) NOT NULL,
    state varchar(50) NULL,
    phone varchar(12) NOT NULL,
    email varchar(255) NOT NULL,
    dob varchar(20) NOT NULL,
    contacts varchar(255) NOT NULL,
    age varchar(5) NULL,
    PRIMARY KEY(id)
) ENGINE=InnoDB;