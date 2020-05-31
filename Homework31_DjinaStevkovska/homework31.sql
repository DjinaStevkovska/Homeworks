-- Write a query to select all records in customer table
SELECT * FROM customer;
-- Write a query to select record with id 251
SELECT * FROM customer WHERE customer_id = 251;
-- Write a query to select records with id 251,252,256
SELECT * FROM customer WHERE customer_id = 251 OR customer_id = 252 OR customer_id = 256;
-- Write a query to select customers with ids between 100 and 200
SELECT * FROM customer WHERE customer_id > 100 AND customer_id<200;
-- Write a query to add record for user John Doe with email "john@customer.com"
INSERT INTO customer (first_name, last_name, email, create_date, last_update)  VALUES('John', 'Doe',' john@customer.com', NOW(), NOW());
-- Update created record for John Doe with email "john_doe@sakila.com"
UPDATE customer SET email = 'john_doe@sakila.com' WHERE customer_id = 600;
-- Write a query to delete customer John Doe.
DELETE FROM customer WHERE customer_id = 600;