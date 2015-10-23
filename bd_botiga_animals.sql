-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2015 a las 00:24:54
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_botiga_animals`
--
CREATE DATABASE IF NOT EXISTS `bd_botiga_animals` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bd_botiga_animals`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anunci`
--

CREATE TABLE IF NOT EXISTS `tbl_anunci` (
  `anu_id` int(11) NOT NULL,
  `anu_contingut` varchar(255) NOT NULL,
  `anu_nom` varchar(50) NOT NULL,
  `anu_data` date NOT NULL,
  `anu_foto` varchar(50) NOT NULL,
  `raca_id` int(11) NOT NULL,
  `mun_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `email_contact` varchar(50) NOT NULL,
  `desactivat` boolean NOT NULL default true,
  `anu_tipus` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_anunci`
--

INSERT INTO `tbl_anunci` (`anu_id`, `anu_contingut`, `anu_nom`, `anu_data`, `anu_foto`, `raca_id`, `mun_id`, `contact_id`, `anu_tipus`) VALUES
(1,'Desaparecido perro de raza beagle en la playa del Prat (zona aeropuerto). Responde al nombre de Tacat.', 'Perdido perro en El Prat', '2015-10-11', 'tacat.jpg', 14, 4, 2, 'Perdut'),
(2,'Desaparecido gato con collar y placa con el nombre de Ratllets.', 'Perdido gato en Barcelona', '2015-10-15', 'comu1.jpg', 17, 1, 6, 'Perdut'),
(3,'Desaparecido canario que responde a nombre de Pachi', 'Perdido pajaro en Barcelona', '2015-10-18', 'canari1.jpg', 20, 1, 6, 'Perdut'),
(4,'Encontrado gato en Castellbisbal con collar', 'Encontrado gato en Castellbisbal', '2015-10-15', 'comu2.jpg', 17, 11, 6, 'Trobat'),
(5,'Desaparecido husky que responde al nombre de Tobi', 'Perdido perro en Sant Joan d''Espí', '2015-10-16', 'husky1.jpg', 11, 3, 6, 'Perdut'),
(6,'Desaparecido pastor aleman que responde al nombre de Bob', 'Perdido Perro en Barcelona', '2015-10-15', 'pa1.jpg', 9, 1, 6, 'Perdut'),
(7,'Desaparecido gato que responde al nombre de Hidraulico', 'Perdido gato en Castelldefels', '2015-10-21', 'comu3.jpg', 17, 8, 6, 'Perdut'),
(8,'Desaparecido boxer de 4 años que responde al nombre de Sam','Perdido perro en Castelldefels','2015-10-15','boxer1.jpg',8,1,1,'Perdut'),
(9,'Desaparecido perro de raza boxer, se llama Piter','Perdido perro en Castelldefels','2015-10-14','boxer2.jpg',8,1,2,'Perdut'),
(10,'Desaparecido perro de raza boxer','Perdido perro en Castelldefels','2015-09-15','boxer3.jpg',8,2,3,'Perdut'),
(11,'Perdido pato que responde a nombre de Donal, si lo encuentra alguien por fabor no cocinar','Perdido pato en Sant Joan d''Espí','2015-10-13','anec1.jpg',26,3,4,'Perdut'),
(12,'He encontrado un pastor aleman, dejo aqui mi numero de telefono','Encontrado perro en El Prat','2015-10-12','pa2.jpg',9,4,5,'Trobat'),
(13,'He perdido a mi perro por Hospitalet, por fabor contacten si lo encuentran, es un pastor aleman','Perdido perro en Hospitalet','2015-10-11','',9,5,6,'Perdut'),
(14,'Desaparecido tejon, responde a nombre de Carlos','Perdido tejon en Martorell','2015-10-16','teixo1.jpg',25,6,1,'Perdut'),
(15,'Encontrado golden retriever en Cornellà, si es sullo pongase en contacto con el numero de telefono de este anuncio','Encontrado perro en Cornellà','2015-10-17','gr1.jpg',10,7,2,'Trobat'),
(16,'Ha aparecido un golden retriever en mi patio, porfabor contacten rapido','Encontrado perro en Castelldefels','2014-10-18','gr2.jpg',10,8,3,'Trobat'),
(17,'Desaparecido husky que responde al nombre de Silver','Perdido perro en Viladecans','2015-10-19','husky2.jpg',11,9,4,'Perdut'),
(18,'Desaparecido perro en Begues, responde al nombre de Sam.','Perdido perro en Begues','2015-10-09','borderc1.jpg',12,10,5,'Perdut'),
(19,'Desaparecido perro en Castellbisbal, tiene miedo de la gente pero si le das comida se deja cojer.','Perdido perro en Castellbisbal','2015-10-08','',13,11,6,'Perdut'),
(20,'Desaparecido beagle en Sant Sadurní, responde al nombre de David.','Perdido perro en Sant Sadurní','2015-10-07','beagle1.jpg',14,12,1,'Perdut'),
(21,'Encontrado gato dentro de casa con un collar sin direccion, se llama Salem.','Encontrado gato en Rubí','2015-10-07','persa1.jpg',15,13,2,'Trobat'),
(22,'Desaparecido siames en Sant Cugat, por fabor llamen rapido al numero de contacto acaba de parir y tiene a los bebes aqui.','Perdido gato en Sant Cugat','2015-10-15','siames1.jpg',16,14,3,'Perdut'),
(23,'He encontrado un gado de raza ¿normal? en mi casa si es de alguien llamen, no lo puedo tener mucho aqui.','Encontrado gato en Sitges','2015-10-14','comu4.jpg',17,15,4,'Trobat'),
(24,'Desaparecido abisani tiene collar se llama Pneumatico.','Perdido gato en Martorell','2015-10-12','abisini1.jpg',18,6,5,'Perdut'),
(25,'Encontrado perro con collar en Castelldefels, se llama Perro.','Encontrado perro en Castelldefels','2015-10-13','',13,8,6,'Trobat'),
(26,'Desaparecido canario en Castelldefels, adjunto foto, si lo encuentra alguien llamen al numero por fabor.','Perdido pajaro en Castelldefels','2015-10-04','canari2.jpg',20,8,1,'Perdut'),
(27,'Desaparecido periquito en Cornellà, es el de la foto, si lo veis llamarme.','Perdido pajaro en Cornellà','2015-10-14','periquito1.jpg',21,7,2,'Perdut'),
(28,'Ha desaparecido mi hurón Pedro, tiene el nombre en un collar, por fabor llamarme si lo veis.','Perdido hurón en Sant Feliu','2015-10-15','fura1.jpg',22,2,3,'Perdut'),
(29,'Ha aparecido un canario que tiene pinta de ser de alguien asi que dejo la foto aqui.','Encontrado pajaro en Sant Joan d''Espí','2015-10-16','',23,3,4,'Trobat'),
(30,'Desaparecido hamster en Sant Joan d''Espi, se parece a una rata','Perdido hamster en Sant Joan d''Espí','2015-10-17','hamseter1.jpg',24,3,5,'Perdut');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacte`
--

CREATE TABLE IF NOT EXISTS `tbl_contacte` (
  `contact_id` int(11) NOT NULL,
  `contact_nom` varchar(25) NOT NULL,
  `contact_telf` varchar(9) NOT NULL,
  `contact_adre` varchar(50) NOT NULL,
  `contact_email` varchar(35) NOT NULL,
  `contact_contrasenya` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_contacte`
--

INSERT INTO `tbl_contacte` (`contact_id`, `contact_nom`, `contact_telf`, `contact_adre`, `contact_email`, `contact_contrasenya`) VALUES
(1, 'Carles Martín', '934534236', '', 'carlesmartin@hotmail.com', 'asdf' ),
(2, 'Antonio Gámez', '667542343', 'Carrer del Mig, 76 3r 1a', 'antoniogamez@hotmail.com', 'asdf'),
(3, 'Carlos Martínez', '654583454', '', 'carlosmartinez@hotmail.com', 'asdf'),
(4, 'Isabel Vázquez', '698722284', '', 'isabelvazquez@hotmail.com', 'asdf'),
(5, 'Pedro Santiesteban', '656989931', 'Avinguda Carrilet, 54 3r', 'pedrosantiesteban@hotmail.com', 'asdf'),
(6, 'Sònia Gómez', '688341009', 'Gran Via de les Corts Catalanes, 12 Esc. A 3r 2a', 'soniagomez@hotmail.com', 'asdf'),
(7, 'Patricia Martín', '932124654', '', 'patriciamartin@hotmail.com', 'asdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipi`
--

CREATE TABLE IF NOT EXISTS `tbl_municipi` (
  `municipi_id` int(11) NOT NULL,
  `municipi_nom` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_municipi`
--

INSERT INTO `tbl_municipi` (`municipi_id`, `municipi_nom`) VALUES
(1, 'Barcelona'),
(2, 'Sant Feliu de Llobregat'),
(3, 'Sant Joan d''Espí'),
(4, 'El Prat de Llobregat'),
(5, 'L''Hospitalet de Llobregat'),
(6, 'Martorell'),
(7, 'Cornellà de Llobregat'),
(8, 'Castelldefels'),
(9, 'Viladecans'),
(10, 'Begues'),
(11, 'Castellbisbal'),
(12, 'Sant Sadurní d''Anoia'),
(13, 'Rubí'),
(14, 'Sant Cugat del Vallès'),
(15, 'Sitges');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_raca`
--

CREATE TABLE IF NOT EXISTS `tbl_raca` (
  `raca_id` int(11) NOT NULL,
  `raca_nom` varchar(25) NOT NULL,
  `tipus_anim_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_raca`
--

INSERT INTO `tbl_raca` (`raca_id`, `raca_nom`, `tipus_anim_id`) VALUES
(1,'No se sabe',1),
(2,'No se sabe',2),
(3,'No se sabe',3),
(4,'No se sabe',4),
(8, 'Bòxer', 1),
(9, 'Pastor alemany', 1),
(10, 'Golden retriever', 1),
(11, 'Husky', 1),
(12, 'Border collie', 1),
(13, 'Creuat', 1),
(14, 'Beagle', 1),
(15, 'Persa', 2),
(16, 'Siamés', 2),
(17, 'Comú', 2),
(18, 'Abisini', 2),
(19, 'Bobtail', 2),
(20, 'Canari', 3),
(21, 'Periquito', 3),
(22, 'Fura', 4),
(23, 'Conill', 4),
(24, 'Hàmster', 4),
(25, 'Teixó', 4),
(26, 'Ànec', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_animal`
--

CREATE TABLE IF NOT EXISTS `tbl_tipus_animal` (
  `tipus_anim_id` int(11) NOT NULL,
  `tipus_anim_nom` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipus_animal`
--

INSERT INTO `tbl_tipus_animal` (`tipus_anim_id`, `tipus_anim_nom`) VALUES
(1, 'Gos'),
(2, 'Gat'),
(3, 'Ocell'),
(4, 'Altres');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD PRIMARY KEY (`anu_id`),
  ADD KEY `FK_ANU_RACA` (`raca_id`),
  ADD KEY `FK_MUN_ANU` (`mun_id`),
  ADD KEY `FK_CONTACT_ANU` (`contact_id`);

--
-- Indices de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indices de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  ADD PRIMARY KEY (`municipi_id`);

--
-- Indices de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD PRIMARY KEY (`raca_id`),
  ADD KEY `FK_RACA_TIPUS_A` (`tipus_anim_id`);

--
-- Indices de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  ADD PRIMARY KEY (`tipus_anim_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  MODIFY `anu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  MODIFY `municipi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  MODIFY `raca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  MODIFY `tipus_anim_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD CONSTRAINT `RELACIO_ANU_CONTACT` FOREIGN KEY (`contact_id`) REFERENCES `tbl_contacte` (`contact_id`),
  ADD CONSTRAINT `RELACIO_ANU_MUN` FOREIGN KEY (`mun_id`) REFERENCES `tbl_municipi` (`municipi_id`),
  ADD CONSTRAINT `RELACIO_ANU_RACA` FOREIGN KEY (`raca_id`) REFERENCES `tbl_raca` (`raca_id`);

--
-- Filtros para la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD CONSTRAINT `tbl_raca_ibfk_1` FOREIGN KEY (`tipus_anim_id`) REFERENCES `tbl_tipus_animal` (`tipus_anim_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
