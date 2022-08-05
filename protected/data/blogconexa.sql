CREATE TABLE IF NOT EXISTS categorias (
  categoria_id int(10) UNSIGNED AUTO_INCREMENT,
  assunto varchar(191) NOT NULL,
  PRIMARY KEY (categoria_id)
);

CREATE TABLE IF NOT EXISTS posts (
  post_id int(10) UNSIGNED AUTO_INCREMENT,
  data_post timestamp DEFAULT CURRENT_TIMESTAMP,
  texto text NOT NULL,
  autor varchar(255) NOT NULL,
  titulo varchar(255) NOT NULL,
  categoria_id int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (post_id),
  FOREIGN KEY (categoria_id) REFERENCES categorias(categoria_id) ON UPDATE RESTRICT ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS comentarios (
  comentario_id int(10) UNSIGNED AUTO_INCREMENT,
  data_comentario timestamp DEFAULT CURRENT_TIMESTAMP,
  texto varchar(255) NOT NULL,
  post_id int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (comentario_id),
  FOREIGN KEY (post_id) REFERENCES posts(post_id) ON UPDATE RESTRICT ON DELETE CASCADE
);

INSERT INTO categorias (assunto) VALUES ('Integrações');
INSERT INTO categorias (assunto) VALUES ('Serviços');
INSERT INTO categorias (assunto) VALUES ('Financeiro');
INSERT INTO categorias (assunto) VALUES ('Agenda');
INSERT INTO categorias (assunto) VALUES ('Parceiros');
INSERT INTO categorias (assunto) VALUES ('Outros');

