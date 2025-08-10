-- Show all courses in the first study period
SELECT * FROM course WHERE term = 1;

-- Show only the name and the code
SELECT name, code FROM course;

-- Order by name
SELECT * FROM course ORDER BY name;

-- Show all courses containing a "a" in the name
SELECT * FROM course WHERE name LIKE '%a%';
