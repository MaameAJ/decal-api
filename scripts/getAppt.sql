DELIMITER $$
DROP PROCEDURE IF EXISTS get_appt$$
CREATE PROCEDURE get_appt(IN id int)
BEGIN
SELECT * FROM appointment WHERE appointment.id = id;
END$$

DELIMITER ;
