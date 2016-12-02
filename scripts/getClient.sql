DELIMITER $$
DROP PROCEDURE IF EXISTS get_client$$
CREATE PROCEDURE get_client
(
    IN id int
)
BEGIN
SELECT * FROM client WHERE client.id=id;
END$$

DELIMITER ;
