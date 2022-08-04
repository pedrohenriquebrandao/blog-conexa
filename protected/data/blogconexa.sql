CREATE TABLE IF NOT EXISTS categorias (
  categoria_id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  assunto varchar(191) NOT NULL,
  PRIMARY KEY (categoria_id)
);

CREATE TABLE IF NOT EXISTS comentarios (
  comentario_id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  data_comentario timestamp DEFAULT CURRENT_TIMESTAMP,
  texto tinytext NOT NULL,
  PRIMARY KEY (comentario_id)
);

CREATE TABLE IF NOT EXISTS posts (
  post_id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  data_post timestamp DEFAULT CURRENT_TIMESTAMP,
  texto mediumtext NOT NULL,
  autor varchar(255) NOT NULL,
  titulo varchar(255) NOT NULL,
  curtidas int(10) NOT NULL,
  categoria_id int(10) UNSIGNED NOT NULL,
  comentario_id int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (post_id),
  FOREIGN KEY (categoria_id) REFERENCES categorias(categoria_id) ON UPDATE RESTRICT ON DELETE CASCADE,
  FOREIGN KEY (comentario_id) REFERENCES comentarios(comentario_id) ON UPDATE RESTRICT ON DELETE CASCADE
);

INSERT INTO categorias (assunto) VALUES ('Integrações');
INSERT INTO categorias (assunto) VALUES ('Serviços');
INSERT INTO categorias (assunto) VALUES ('Financeiro');
INSERT INTO categorias (assunto) VALUES ('Agenda');
INSERT INTO categorias (assunto) VALUES ('Parceiros');
INSERT INTO categorias (assunto) VALUES ('Outros');

