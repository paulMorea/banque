DROP DATABASE IF EXISTS banque;

CREATE DATABASE banque CHARACTER SET 'utf8';

USE banque;

CREATE TABLE User(
    id INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    user_mail VARCHAR(40) NOT NULL,
    user_pwd VARCHAR(40) NOT NULL,
    login_creation DATE NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE Account(
    id INT NOT NULL AUTO_INCREMENT,
    account_name VARCHAR(40) NOT NULL,
    account_number VARCHAR(40) NOT NULL,
    account_user_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_user_id) REFERENCES User(id)
);

CREATE TABLE Last_operation(
    id INT NOT NULL AUTO_INCREMENT,
    last_operation_amount VARCHAR(40) NOT NULL,
    last_operation_description TEXT,
    last_operation_account_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (last_operation_account_id) REFERENCES Account(id)
);

INSERT INTO User(firstname, lastname, user_mail, user_pwd, login_creation)
Values  ('Paul', 'MEGALO', 'megalopaul@yahoo.fr', 'monpwd', '2007-05-18'),
        ('Pierre', 'MEGALO', 'megalopierre@yahoo.fr', 'monpwd', '2015-05-18');

INSERT INTO Account(account_name, account_number, account_user_id)
Values  ('LEP', '05100502428', 1),
        ('LVA', '040819131518', 2);

INSERT INTO Last_operation(last_operation_amount, last_operation_description, last_operation_account_id)
Values  ('+50', 'LECLERC', 1),
        ('-20', 'AMAZON', 2);