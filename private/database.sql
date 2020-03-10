CREATE TABLE contact_list (
  contactID    INT(100)        NOT NULL AUTO_INCREMENT,
  firstName    VARCHAR(255)   NOT NULL,
  lastName     VARCHAR(255)   NOT NULL,
  phoneNumber  bigint(12)   NOT NULL,
  email        VARCHAR(255)   NOT NULL,
  PRIMARY KEY (contactID)
);


INSERT INTO contact_list VALUES
(1, 'John', 'Doe', 7813334444, 'john@doe.com'),
(2, 'Jane', 'Doe', 7813335576,'jane@doe.com'),
(3, 'John', 'Smith', 7812323356,'john@smith.com'),
(4, 'Jane', 'Smith', 7813339347,'jane@smith.com'),
(5, 'John', 'Doe', 7815568734, 'john@doe.com'),
(6, 'Jane', 'Smith', 7816638734'jane@smith.com');


