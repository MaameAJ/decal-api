DELIMITER $$
DROP PROCEDURE IF EXISTS get_rmdr$$
CREATE PROCEDURE get_rmdr(IN apptId int)
BEGIN
SELECT * FROM reminder WHERE appt_id = apptId;
END$$

DELIMITER ;
