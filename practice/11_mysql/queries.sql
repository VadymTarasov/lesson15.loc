SHOW DATABASES;
CREATE DATABASE lessons;
SHOW DATABASES;

USE lessons;
SHOW TABLES;

CREATE TABLE students (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(20) DEFAULT 'John',
    surname varchar(20) NOT NULL,
    num_group varchar(5) NOT NULL,
    birthdate date
);
SHOW TABLES;

INSERT INTO students VALUES (1, 'John', 'Doe', 'PHP22', '2000-01-21');

INSERT INTO students (surname, num_group, birthdate) VALUES ('Doe3', 'PHP22', '2000-02-01');

SELECT * FROM students;

INSERT INTO students VALUES (4, 'Test22', 'Surname2', 'PHP22', '2000-01-21');

INSERT INTO students (surname, num_group, birthdate) VALUES ('Doe25', 'PHP20', '1999-02-01');

SELECT * FROM students WHERE num_group = 'PHP21';

UPDATE students SET surname = 'Salvator';

UPDATE students SET surname = 'Snower' WHERE num_group = 'PHP22' or num_group = 'PHP21';

UPDATE students SET surname = 'Doe' WHERE num_group = 'PHP33';
SELECT * FROM students WHERE num_group = 'PHP33';

select * from lessons.students;

DROP TABLE students;
DROP DATABASE lessons;
CREATE DATABASE lessons;


-- dump (terminal commands)
-- mysqldump -uroot -p lessons > lessons_dump.sql
-- mysql -uroot -p lessons < lessons_dump.sql
