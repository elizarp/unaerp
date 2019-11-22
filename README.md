# unaerp

Pastas
Slides_PDF - PDF dos slides das aulas
Code - Separados por aula, códigos utilizando em sala

Maior dúvida – enviar via e-mail para ezarpelao@unaerp.br com assunto
“Maior dúvida – DD/MM/YYYY - “ + RA
Até a segunda-feira seguinte à aula


Script criação base / tabela (executar um por vez)

CREATE DATABASE books;

USE books;

CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'p@$$w0rd';

GRANT ALL PRIVILEGES ON * . * TO 'newuser'@'localhost';

CREATE TABLE famous (
    id_famous integer NOT NULL AUTO_INCREMENT, 
    name varchar(40),
    primary key (id_famous)
);

https://imasters.com.br/devsecops/utilizacao-de-checklist-para-validacao-de-requisitos-de-software
