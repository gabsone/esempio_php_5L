CREATE TABLE utenti(
                       id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
                       nome VARCHAR(256) NOT NULL,
                       cognome VARCHAR(256) NOT NULL,
                       email VARCHAR(256) NOT NULL,
                       passwd VARCHAR(256) NOT NULL,
                       abilitato BOOLEAN default true,
                       data_ultimo_accesso DATETIME
);

ALTER TABLE utenti RENAME TO users;
ALTER TABLE users ADD CONSTRAINT constr_email UNIQUE(email);

-- inserisco dati di test
INSERT INTO users(nome, cognome, email, passwd, abilitato) VALUES
("Gabriele", "Ciliberti","gc@email.it",MD5("pippo"), true),
("Andrea", "Vischi","av@email.it",MD5("pluto"), true),
("Adele", "Volpe","adv@email.it",MD5("paperino"), true);

