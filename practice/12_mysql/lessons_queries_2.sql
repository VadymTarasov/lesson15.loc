SELECT s.id, s.name, s.surname, g.name group_name
    FROM students as s
    INNER JOIN group_name g ON s.group_id = g.id;