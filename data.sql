CREATE TABLE clients (
    id int PRIMARY KEY AUTO_INCREMENT,
    sigle varchar(255) UNIQUE
);


CREATE TABLE invoices (
    id int PRIMARY KEY AUTO_INCREMENT,
    ref VARCHAR(255) NOT NULL UNIQUE,
    date VARCHAR(255) NOT NULL,
    mht INTEGER NOT NULL,
    tva INTEGER NOT NULL,
    aib_maj INTEGER NOT NULL, 
    aib_retained INTEGER NOT NULL,
    file_src VARCHAR(255) NOT NULL UNIQUE,
    clients_invoices int,
    FOREIGN KEY(clients_invoices) REFERENCES clients(id)
);


CREATE TABLE payments (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    amount int NOT NULL, 
    nature VARCHAR(255) NOT NULL,
    ref VARCHAR(255) NOT NULL UNIQUE, 
    date VARCHAR(255) NOT NULL
);


CREATE TABLE slices (
    id int PRIMARY KEY AUTO_INCREMENT,
    payments_slices int NOT NULL,
    invoices_slices int NOT NULL,
    FOREIGN KEY(payments_slices) REFERENCES payments(id),
    FOREIGN KEY(invoices_slices) REFERENCES invoices(id)
);