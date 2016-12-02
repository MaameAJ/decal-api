DELIMITER $$
DROP PROCEDURE IF EXISTS create_appt$$
CREATE PROCEDURE create_appt(
    IN userId int,
    IN clientId int,
    IN dt datetime
)
BEGIN
INSERT INTO appointment (user_id, client_id, dateTime) 
VALUES (userId, clientId, dt);
SELECT LAST_INSERT_ID();
END$$

DELIMITER ;
