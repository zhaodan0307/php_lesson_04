-- This is a SQL comment
-- Create our Lesson 03 DB (if it doesn't exist)
CREATE DATABASE IF NOT EXISTS comp_1006_lesson_03;
USE comp_1006_lesson_03;

-- Create the countries table
CREATE TABLE IF NOT EXISTS countries (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description VARCHAR(2000) NULL,
    population INT(15) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

desc countries;
