DELIMITER $$
DROP PROCEDURE IF EXISTS create_client$$
CREATE PROCEDURE create_client(
    IN forename varchar(255),
    IN surname varchar(255),
    IN phoneNum varchar(15)
)
BEGIN
INSERT INTO client (firstName, lastName, phoneNumber) 
VALUES (forename, surname, phoneNum);
SELECT LAST_INSERT_ID();
END$$

DELIMITER ;
