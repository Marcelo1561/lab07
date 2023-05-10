CREATE DATABASE	autor

USE autor

CREATE TABLE autor(autor_id INT PRIMARY KEY AUTO_INCREMENT, 
nombres VARCHAR(20),
ape_paterno VARCHAR(20),
ape_materno VARCHAR(20));

INSERT INTO autor (nombres, ape_paterno,ape_materno)

VALUES ('Marcelo Alonso', 'Yauyo', 'Llamo');

select * FROM autor

CREATE TABLE libro(libro_id INT PRIMARY KEY AUTO_INCREMENT,
año VARCHAR(10),
autor int, FOREIGN KEY (autor) REFERENCES AUTOR(autor_id),
titulo VARCHAR(50),
URLubi VARCHAR(250),
especialidad VARCHAR(20),
editorial VARCHAR(20));

INSERT INTO libro (año, autor, titulo, URLubi, especialidad, editorial)

VALUES ('1951', 8, 'Paco Yunque','https://biblioteca.org.ar/libros/158038.pdf','Escritor','Editorial del cardo');

select * FROM libro 


