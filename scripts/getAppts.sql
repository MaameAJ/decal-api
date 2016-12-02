DELIMITER $$
DROP PROCEDURE IF EXISTS get_appt_by_date$$
CREATE PROCEDURE get_appt_by_date(IN dt datetime)
BEGIN
SELECT * FROM appointment
WHERE dateTime >= DATE(dt) AND dateTime < (DATE(dt) + INTERVAL 1 DAY);
END$$

DELIMITER ;
