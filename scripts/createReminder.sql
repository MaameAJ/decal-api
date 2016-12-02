DELIMITER $$
DROP PROCEDURE IF EXISTS create_reminder$$
CREATE PROCEDURE create_reminder(
    IN apptId int,
    IN dt datetime
)
BEGIN
INSERT INTO reminder (appt_id, dateTime) 
VALUES (apptId, dt);
SELECT LAST_INSERT_ID();
END$$

DELIMITER ;
