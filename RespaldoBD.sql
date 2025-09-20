

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `evento` varchar(255) NOT NULL,
  `detalles` text NOT NULL,
  `fecha_hora` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO bitacora VALUES ('1','AnayaR98@gmail.com','Inicio Sesión','El usuario inicio sesión','2025-03-31 20:54:26');
INSERT INTO bitacora VALUES ('2','AnayaR98@gmail.com','Inicio Sesión','El usuario inicio sesión','2025-09-16 00:36:57');
INSERT INTO bitacora VALUES ('3','AnayaR98@gmail.com','Inicio Sesión','El usuario inicio sesión','2025-09-16 00:37:07');
INSERT INTO bitacora VALUES ('4','AnayaR98@gmail.com','Inicio Sesión','El usuario inicio sesión','2025-09-16 00:38:11');
INSERT INTO bitacora VALUES ('5','AnayaR98@gmail.com','Inicio Sesión','El usuario inicio sesión','2025-09-16 00:49:23');
INSERT INTO bitacora VALUES ('6','AnayaR98@gmail.com','Inicio Sesión','El usuario inicio sesión','2025-09-16 09:37:39');
INSERT INTO bitacora VALUES ('7','FelixQ@upta.com','Inicio Sesión','El usuario inicio sesión','2025-09-16 09:41:50');
INSERT INTO bitacora VALUES ('8','FelixQ@upta.com','Cambiar Permisos','Ha modificado los permisos de [Anaya Raizman] a [estudiante]','2025-09-16 09:43:06');


CREATE TABLE `encuesta` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Pregunta` varchar(255) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `Respuesta` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO encuesta VALUES ('1','Que utiliza una unidad de CD para leer el contenido de un disco DVD?','Laser Semiconductor Inflarrojo');
INSERT INTO encuesta VALUES ('2','De que material estan hechos los platos de un HDD?','Aluminio');
INSERT INTO encuesta VALUES ('3','Cual es el elemento principal de la Pasta Termica?','Silicona ');
INSERT INTO encuesta VALUES ('4','Como se llama el cable que conecta la fuente de poder con la placa madre?','Cable SATA');
INSERT INTO encuesta VALUES ('5','En MB/s, de cuanto es la tasa de transferencia de datos de un HDD convencional?','Entre 80 y 60 mb/s');
INSERT INTO encuesta VALUES ('6','De cuanto es la velocidad de lectura de una unidad de CD al leer discos DVD?','1350 KB/s');
INSERT INTO encuesta VALUES ('7','En voltaje, cuanto suele recibir una fuente de poder para su funcionamiento?','120v');
INSERT INTO encuesta VALUES ('8','Cuanto voltaje debe de recibir un HDD para su funcionamiento?','12v');
INSERT INTO encuesta VALUES ('9','Cual es el componente de la placa madre que sirve para conectar las pantallas con el CPU?','Puerto VGA');
INSERT INTO encuesta VALUES ('10','Cual es el nombre de la fuente de poder que se enciende y se apaga mediante se?ales electronicas?','ATX');
INSERT INTO encuesta VALUES ('11','Quien invento el primer Disco Duro?','IBM');
INSERT INTO encuesta VALUES ('12','Como se llama el codigo de Software que localiza y carga el sistema operativo?','BIOS');
INSERT INTO encuesta VALUES ('13','De que esta hecha las vias conectoras de una motherboard?','Cobre');
INSERT INTO encuesta VALUES ('14','En Gb, cuanto es la capacidad maxima de un disco dvd?','17Gb');
INSERT INTO encuesta VALUES ('15','Cuantos pines tiene una fuente de poder ATX?','24');
INSERT INTO encuesta VALUES ('16','Como se llama la capa de almacenamiento de datos de alta velocidad que almacena un subconjunto de datos de modo que las solicitudes futuras de dichos datos se atienden con mayor rapidez?','Cache');
INSERT INTO encuesta VALUES ('17','Nombre alternativo de los puertos de expansion que permite instalar otras tarjetas a la motherboard?','Puertos PCI');
INSERT INTO encuesta VALUES ('18','Cuales son los tipos mas comunes de Disco Duro?','SSD & HDD');
INSERT INTO encuesta VALUES ('19','Cual es el material usual con el que estan hecho los discos CD?','Policarbonato');
INSERT INTO encuesta VALUES ('20','Cual es el nombre de la primera computadora?','ENIAC');


CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `CI` int(11) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `pregunta` varchar(255) NOT NULL,
  `respuesta` varchar(255) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `Puntaje` int(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO usuarios VALUES ('1','Anaya','Raizman','27402422','AnayaR98@gmail.com','$2y$10$7xVObUUBkVn.jKHbDkt8N.OQIn2SUejwFhAi1zFjgnuV2fbWvyivy','El tercer nombre','Raquel','estudiante','8');
INSERT INTO usuarios VALUES ('11','Felix Leonardo','Quintana David','26213519','FelixQ@upta.com','$2y$10$MVuyKwKvGmWbGj1nBtLWUOElKxnOt2.uVeYcQEc0hBEluRAaDsawm','Numero Favorito','47','admin','0');
