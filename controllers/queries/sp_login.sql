--
-- Procedures
--
CREATE PROCEDURE `sp_login` (IN `username_in` VARCHAR(255), IN `password_in` VARCHAR(255))
BEGIN 

SELECT type, firstname as fname 
FROM user
WHERE username = username_in AND password = password_in;

END;
COMMIT;