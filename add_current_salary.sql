-- Add current_salary column to clients table

ALTER TABLE clients
ADD COLUMN current_salary varchar(50) DEFAULT NULL;
