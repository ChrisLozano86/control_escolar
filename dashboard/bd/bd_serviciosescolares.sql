-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-04-2022 a las 16:22:02
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_serviciosescolares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `alumnopk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomAlumno` varchar(50) NOT NULL,
  `apePaterno` varchar(50) NOT NULL,
  `apeMaterno` varchar(50) NOT NULL,
  `claveCecyte` varchar(15) NOT NULL,
  `ficha` varchar(20) NOT NULL,
  `numControl` varchar(20) DEFAULT NULL,
  `estatus` tinyint(2) NOT NULL,
  `repetidor` char(2) NOT NULL,
  `especialidad` tinyint(1) NOT NULL,
  `claveEspe` varchar(20) NOT NULL,
  `semestre` tinyint(1) DEFAULT NULL,
  `grupo` tinyint(1) DEFAULT NULL,
  `turno` tinyint(1) DEFAULT NULL,
  `ingreso` varchar(4) DEFAULT NULL,
  `egreso` varchar(4) DEFAULT NULL,
  `extracurricular` tinyint(2) DEFAULT NULL,
  `propedeutica1` tinyint(2) DEFAULT NULL,
  `propedeutica2` tinyint(2) DEFAULT NULL,
  `beca` varchar(100) DEFAULT NULL,
  `beca2` varchar(100) DEFAULT NULL,
  `beca3` varchar(100) DEFAULT NULL,
  `nomSecundaria` varchar(200) NOT NULL,
  `claveSecundaria` varchar(30) DEFAULT NULL,
  `promeSecundaria` varchar(3) DEFAULT NULL,
  `estadoSecundaria` tinyint(2) NOT NULL,
  `surems` varchar(20) NOT NULL,
  `fechaBaja` varchar(10) DEFAULT NULL,
  `causaBaja` tinyint(2) DEFAULT NULL,
  `curp` varchar(18) NOT NULL,
  `telAlumno` varchar(10) NOT NULL,
  `fechaNac` date NOT NULL,
  `sexo` char(1) NOT NULL COMMENT 'M=Masculino, F=Femenino',
  `lugarNac` tinyint(2) NOT NULL,
  `ts` tinyint(1) NOT NULL,
  `cuestSalud` varchar(100) DEFAULT NULL,
  `emailInsti` varchar(150) DEFAULT NULL,
  `emailPerso` varchar(150) NOT NULL,
  `nomTutor` varchar(200) NOT NULL,
  `telTutor` varchar(18) NOT NULL,
  `calle` varchar(80) NOT NULL,
  `numExt` varchar(7) NOT NULL,
  `numInt` varchar(7) NOT NULL,
  `colonia` varchar(80) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `poblacion` varchar(80) NOT NULL,
  `municipio` varchar(80) NOT NULL,
  `estadoDom` tinyint(2) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `docCurp` varchar(100) DEFAULT NULL,
  `docActNac` varchar(100) DEFAULT NULL,
  `docCertSec` varchar(100) DEFAULT NULL,
  `docSurems` varchar(100) DEFAULT NULL,
  `docCertCecy` varchar(100) DEFAULT NULL,
  `periodofk` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`alumnopk`),
  UNIQUE KEY `ficha` (`ficha`),
  KEY `estatus` (`estatus`),
  KEY `especialidad` (`especialidad`),
  KEY `semestre` (`semestre`),
  KEY `grupo` (`grupo`),
  KEY `extracurricular` (`extracurricular`),
  KEY `propedeutica1` (`propedeutica1`),
  KEY `propedeutica2` (`propedeutica2`),
  KEY `lugarNac` (`lugarNac`),
  KEY `periodofk` (`periodofk`),
  KEY `ts` (`ts`),
  KEY `causaBaja` (`causaBaja`),
  KEY `estadoDom` (`estadoDom`),
  KEY `estadoSecundaria` (`estadoSecundaria`),
  KEY `alumnos_ibfk_16` (`turno`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`alumnopk`, `nomAlumno`, `apePaterno`, `apeMaterno`, `claveCecyte`, `ficha`, `numControl`, `estatus`, `repetidor`, `especialidad`, `claveEspe`, `semestre`, `grupo`, `turno`, `ingreso`, `egreso`, `extracurricular`, `propedeutica1`, `propedeutica2`, `beca`, `beca2`, `beca3`, `nomSecundaria`, `claveSecundaria`, `promeSecundaria`, `estadoSecundaria`, `surems`, `fechaBaja`, `causaBaja`, `curp`, `telAlumno`, `fechaNac`, `sexo`, `lugarNac`, `ts`, `cuestSalud`, `emailInsti`, `emailPerso`, `nomTutor`, `telTutor`, `calle`, `numExt`, `numInt`, `colonia`, `cp`, `poblacion`, `municipio`, `estadoDom`, `imagen`, `docCurp`, `docActNac`, `docCertSec`, `docSurems`, `docCertCecy`, `periodofk`) VALUES
(1, 'Sandro', 'Carranza', 'Morales', 'Z1ETC0001L', '1111111111', '11111111111111', 7, 'No', 2, '2', 11, 7, 1, '2020', '2023', 1, 1, 3, 'Miguel Hidalgo', NULL, NULL, 'Telesecundaria 216', 'tele216', '9.0', 1, '11111111', '', 1, 'CAHJ000918MGTRRCA2', '1234567890', '2018-01-17', 'M', 20, 4, NULL, 'juan@gmail.com', 'juan@cecyte.com', 'Lourdes', '0987654321', 'Allende', '5', '2', 'Centro', '38200', 'Comonfort', 'Comonfort', 2, 'documentos/imagenes/IMG_11111111111111.png', 'documentos/curps/CURP_CAHJ000918MGTRRCA2.pdf', 'documentos/actas/Acta_CAHJ000918MGTRRCA2.pdf', 'documentos/certificados/Certificado_20211209181817.pdf', 'documentos/surems/SUREMS_11111111.pdf', NULL, 12),
(6, 'Melchor', 'Luna', 'Corral', 'Z1ETC0001L', '5555555555', '55555555555555', 10, 'No', 1, '1', 5, 1, 1, '2021', '2029', 1, 1, 1, '', NULL, NULL, 'telesecundaria', 'sssaa', '', 4, '55555555', '', 1, 'HEMJ651222MGTRRS06', '4121216801', '1984-11-30', 'M', 13, 1, NULL, 'jaquiazul2000@gmail.com', 'jaquiazul2000@gmail.com', 'Pablo', '4121216801', 'Arista', '1', '22', 'Centro', '38200', 'COMONFORT', 'Celaya', 2, 'documentos/imagenes/IMG_55555555555555.png', 'documentos/curps/CURP_HEMJ651222MGTRRS06.pdf', 'documentos/actas/Acta_HEMJ651222MGTRRS06.pdf', 'documentos/certificados/Certificado_20211213161242.pdf', '', NULL, 10),
(11, 'Carly', 'Moreno', 'SaldÃ­var', 'Z1ETC0001L', '1000000002', '10000000000002', 7, 'Si', 1, '1', 3, 2, 3, '2016', '2016', 1, 1, 1, '', NULL, NULL, 'telesecundaria', '', '', 24, '10000002', '', 1, 'HEMJ651222MGTRRS11', '4121216801', '1997-06-05', 'F', 4, 4, NULL, 'jaquiazul2000@gmail.com', 'jaquiazul2000@gmail.com', 'MarÃ­a Luz', '4121216801', 'Arista', '33', '', 'Irrigacion', '45000', 'Celaya', 'Celaya', 12, 'documentos/imagenes/IMG_10000000000002.jpg', '', 'documentos/actas/Acta_HEMJ651222MGTRRS11.pdf', '', '', NULL, 14),
(12, 'Josefina', 'JuÃ¡rez', 'Alvarado', 'Z1ETC0001L', '1000000003', '10000000000003', 6, 'No', 4, '4', 10, 2, 3, '2013', '2016', 1, 1, 1, '', '', '', 'Secundaria', 'Secun2', '', 12, '10000003', '', 1, 'HEMJ651222MGTRRS11', '4121216801', '1996-07-09', 'F', 6, 5, '', 'jaquiazul2000@gmail.com', 'jaquiazul2000@gmail.com', 'Pablo', '4121216801', 'Ocampo', '33', '', 'Centro', '38200', 'Comonfort', 'Comonfort', 12, 'documentos/imagenes/IMG_10000000000003.png', '', '', '', '', '', 14),
(13, 'Elizabeth', 'Moreno', 'SÃ¡nchez', 'Z1ETC0001L', '1000000004', '10000000000004', 5, 'Si', 3, '3', 3, 2, 2, '2021', '2024', 1, 1, 1, '', NULL, NULL, 'Telesecundaria 216', '', '', 7, '10000004', '', 1, 'HEMJ651222MGTRRS12', '4121216801', '1991-05-26', 'F', 16, 6, NULL, 'jaquiazul2000@gmail.com', 'jaquiazul2000@gmail.com', 'Lourdes Santillana', '4121216801', 'Allende', '30', '', 'Zona Centro', '38200', 'Comonfort', 'Comonfort', 12, 'documentos/imagenes/IMG_10000000000004.jpg', '', '', '', '', NULL, 14),
(14, 'Pancracio', 'Nieves', 'Olalde', 'Z1ETC0001L', '1000000005', '10000000000005', 12, 'No', 2, '2', 11, 5, 2, '2018', '2026', 3, 1, 1, '', '', '', 'Telesecundaria 216', '', '', 12, '10000005', '', 1, 'HEMJ651222MGTRRS13', '4121292653', '2003-08-07', 'M', 5, 4, '', 'pancracio@cecyte.com', 'pancracio@gmail.com', 'VerÃ³nica', '7894522266', 'Arista', '44', '', 'Centro', '38200', 'Comonfort', 'Comonfort', 12, 'documentos/imagenes/IMG_10000000000005.jpg', 'documentos/curps/CURP_HEMJ651222MGTRRS13.pdf', '', '', '', 'documentos/certificados_cecy/CERTIFICADO_CECY10000000000005.pdf', 12),
(15, 'Filomena', 'GarcÃ­a', 'Venado', 'Z1ETC0001L', '1000000006', '10000000000006', 8, 'No', 5, '5', 6, 2, 3, '2013', '2017', 1, 1, 1, '', '', '', 'Secundaria', '', '8', 4, '10000006', '', 1, 'HEMJ651222MGTRRS14', '2345678912', '2006-08-05', 'F', 5, 1, '', '', 'filomena@gmail.com', 'Benito', '9876543212', 'Buenavista', '60 A', '', 'Insurgentes', '34100', 'Celaya', 'Celaya', 12, 'documentos/imagenes/IMG_10000000000006.png', '', '', '', '', '', 14),
(16, 'Silvia', 'Pacheco', 'Mar', 'Z1ETC0001L', '1000000007', '10000000000007', 7, 'Si', 4, '4', 4, 7, 2, '2013', '2016', 1, 1, 1, '', '', '', 'Secundaria', '', '', 22, '10000007', '', 1, 'HEMJ651222MGTRRS15', '4126789000', '2006-03-04', 'F', 10, 5, '', 'silvia@cecyte.com', 'silvia@gmail.com', 'Mario', '7890987654', 'Mariano Matamoros', '99', '', 'Granados', '56788', 'CalderÃ³n', 'San Miguel de Allende', 12, 'documentos/imagenes/IMG_10000000000007.png', '', '', '', '', '', 14),
(17, 'Mariana', 'Tortilla', 'MaÃ­z', 'Z1ETC0001L', '1000000008', '10000000000008', 7, 'No', 3, '3', 5, 8, 3, '2013', '2016', 4, 1, 1, '', '', '', 'Mariano Abasolo', '', '', 7, '10000008', '', 1, 'HEMJ651222MGTRRS16', '4121216801', '2006-05-27', 'F', 15, 6, '', 'mariana@cecyte.mx', 'mariana@gmail.com', 'Ernesto', '2309876543', 'Azteca', '44', '', 'Remedios', '38200', 'COMONFORT', 'Comonfort', 12, 'documentos/imagenes/IMG_10000000000008.png', '', '', '', '', '', 14),
(18, 'Paulette', 'Misterio', 'Avellana', 'Z1ETC0001L', '1000000009', '10000000000009', 7, 'Si', 5, '5', 9, 2, 3, '2013', '2016', 1, 1, 1, '', '', '', 'Secundaria 12', '', '', 19, '10000009', '', 1, 'HEMJ651222MGTRRS17', '7893456789', '2009-08-03', 'F', 28, 3, '', 'pau@cecyte.com', 'pau@gmail.com', 'Constantino', '8901237651', 'IrrigaciÃ³n', '45', '', 'Centro', '23099', 'San Juan', 'Celaya', 12, 'documentos/imagenes/IMG_10000000000009.png', '', '', '', '', '', 14),
(19, 'Gilberta', 'Nova', 'NÃºÃ±ez', 'Z1ETC0001L', '1000000010', '10000000000010', 7, 'No', 3, '3', 4, 8, 3, '2013', '2016', 1, 1, 1, '', '', '', 'Telesecundaria 216', '', '', 12, '10000010', '', 1, 'HEMJ651222MGTRRS18', '8907654322', '1994-05-04', 'F', 13, 2, '', 'U1903054Q0008@sabes.edu.mx', 'gilberta@gmail.com', 'Gilberto', '9064322345', 'Arista', '11', '', 'Centro', '38200', 'COMONFORT', 'Comonfort', 16, 'documentos/imagenes/IMG_10000000000010.jpg', '', '', '', '', '', 14),
(20, 'Irlanda', 'Valenzuela', 'Camacho', 'Z1ETC0001L', '1000000011', '10000000000011', 7, 'No', 1, '1', 6, 2, 3, '2013', '2016', 1, 1, 1, '', '', '', 'Mariano Abasolo', '', '', 19, '10000011', '', 1, 'HEMJ651222MGTRRS19', '4567890988', '2001-03-03', 'F', 12, 1, '', 'U1903054Q0008@sabes.edu.mx', 'irlanda@gmail.com', 'Honorina', '3127899977', 'Allende', '1', '', 'Irrigacion', '38200', 'Celaya', 'Celaya', 12, 'documentos/imagenes/IMG_10000000000011.jpg', '', '', '', '', '', 14),
(21, 'Esmeralda', 'Pimentel', 'LujÃ¡n', 'Z1ETC0001L', '1000000012', '10000000000012', 7, 'Si', 1, '1', 3, 2, 3, '2013', '2016', 1, 1, 1, 'Beca 1# ', 'Beca 2', 'Beca 3', 'Secundaria', '', '', 17, '10000012', '', 1, 'HEMJ651222MGTRRS20', '4567891222', '2002-04-04', 'F', 27, 5, 'Diabetes', 'U1903054Q0008@sabes.edu.mx', 'esme@gmail.com', 'Yulissa', '7890985433', 'Ocampo', '11', '', 'Centro', '38200', 'COMONFORT', 'Comonfort', 12, 'documentos/imagenes/IMG_10000000000012.png', '', '', '', '', 'documentos/certificados_cecy/CERTIFICADO_CECY10000000000012.pdf', 14),
(22, 'Rosa', 'Coyote', 'Aguilar', 'Z1ETC0001L', '1000000013', '10000000000013', 7, 'No', 3, '3', 6, 8, 3, '2013', '2016', 3, 1, 1, '', '', '', 'Benito JuÃ¡rez', '', '', 31, '10000013', '', 1, 'HEMJ651222MGTRRS21', '2345678901', '1989-08-03', 'F', 17, 3, '', '', 'rosa@gmail.com', 'Nubia', '5670987655', 'Venancio', '23', '', 'Santos', '56899', 'Comonfort', 'Comonfort', 12, 'documentos/imagenes/IMG_10000000000013.png', '', '', '', '', '', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `causasbaja`
--

DROP TABLE IF EXISTS `causasbaja`;
CREATE TABLE IF NOT EXISTS `causasbaja` (
  `causaBaja` tinyint(2) NOT NULL AUTO_INCREMENT,
  `razon` varchar(150) NOT NULL,
  PRIMARY KEY (`causaBaja`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `causasbaja`
--

INSERT INTO `causasbaja` (`causaBaja`, `razon`) VALUES
(1, 'Causa Baja'),
(2, 'AcadÃ©mica'),
(3, 'EconÃ³mica'),
(4, 'Social');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `especialidad` tinyint(1) NOT NULL AUTO_INCREMENT,
  `nomEspe` varchar(100) NOT NULL,
  `claveEspe` varchar(50) NOT NULL,
  PRIMARY KEY (`especialidad`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`especialidad`, `nomEspe`, `claveEspe`) VALUES
(1, 'Electricidad', 'ELECTR'),
(2, 'Soporte y Mantenimiento de Equipo de CÃ³mputo', 'SMEQ'),
(3, 'Alimentos', 'ALIM'),
(4, 'ElectromecÃ¡nica', 'ELECT'),
(5, 'ProgramaciÃ³n', 'PROG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

DROP TABLE IF EXISTS `estatus`;
CREATE TABLE IF NOT EXISTS `estatus` (
  `estatus` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nomEstatus` varchar(30) NOT NULL,
  PRIMARY KEY (`estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`estatus`, `nomEstatus`) VALUES
(1, 'Aspirante'),
(2, 'Aspirante con ficha'),
(3, 'Aspirante (presentÃ³)'),
(4, 'Aspirante (no presentÃ³)'),
(5, 'Aspirante aceptado'),
(6, 'Aspirante no aceptado'),
(7, 'Activo'),
(8, 'Recursa'),
(9, 'Baja temporal'),
(10, 'Baja definitiva'),
(11, 'Egresado'),
(12, 'Egresado titulado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `extracurriculares`
--

DROP TABLE IF EXISTS `extracurriculares`;
CREATE TABLE IF NOT EXISTS `extracurriculares` (
  `extracurricular` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nomExtra` varchar(100) NOT NULL,
  PRIMARY KEY (`extracurricular`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `extracurriculares`
--

INSERT INTO `extracurriculares` (`extracurricular`, `nomExtra`) VALUES
(1, 'Extracurricular'),
(2, 'Danza'),
(3, 'Deportes'),
(4, 'MÃºsica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `grupo` tinyint(1) NOT NULL AUTO_INCREMENT,
  `letra` varchar(5) NOT NULL,
  PRIMARY KEY (`grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`grupo`, `letra`) VALUES
(1, 'Grupo'),
(2, 'A'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'E'),
(7, 'F'),
(8, 'G'),
(9, 'H'),
(10, 'I');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

DROP TABLE IF EXISTS `lugares`;
CREATE TABLE IF NOT EXISTS `lugares` (
  `lugarNac` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nomLugar` varchar(100) NOT NULL,
  PRIMARY KEY (`lugarNac`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`lugarNac`, `nomLugar`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Chiapas'),
(6, 'Chihuahua'),
(7, 'Ciudad de Mexico'),
(8, 'Coahuila'),
(9, 'Colima'),
(10, 'Durango'),
(11, 'Estado de Mexico'),
(12, 'Guanajuato'),
(13, 'Guerrero'),
(14, 'Hidalgo'),
(15, 'Jalisco'),
(16, 'MichoacÃ¡n'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo LeÃ³n'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'QuerÃ©taro'),
(23, 'Quintana Roo'),
(24, 'San Luis PotosÃ­'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz'),
(31, 'YucatÃ¡n'),
(32, 'Zacatecas'),
(33, 'Lugar en el extranjero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodosescolares`
--

DROP TABLE IF EXISTS `periodosescolares`;
CREATE TABLE IF NOT EXISTS `periodosescolares` (
  `periodopk` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mesInicio` varchar(30) NOT NULL,
  `mesFinal` varchar(30) NOT NULL,
  `anioInicio` varchar(4) NOT NULL,
  `anioFinal` varchar(4) NOT NULL,
  PRIMARY KEY (`periodopk`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `periodosescolares`
--

INSERT INTO `periodosescolares` (`periodopk`, `mesInicio`, `mesFinal`, `anioInicio`, `anioFinal`) VALUES
(1, 'PerÃ­odo Escolar', '', '', ''),
(10, 'Octubre', 'Noviembre', '2024', '2025'),
(11, 'Noviembre', 'Marzo', '2026', '2027'),
(12, 'Julio', 'Noviembre', '2020', '2023'),
(13, 'Febrero', 'Julio', '2022', '2022'),
(14, 'Agosto', 'Enero', '2022', '2023'),
(15, 'Julio', 'Noviembre', '1997', '1997'),
(16, 'Abril', 'Octubre', '2004', '2004'),
(17, 'Agosto', 'Enero', '2021', '2022'),
(18, 'Agosto', 'Enero', '2006', '2005'),
(19, 'Julio', 'Diciembre', '2004', '2004'),
(20, 'Diciembre', 'Enero', '2018', '2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propedeuticas`
--

DROP TABLE IF EXISTS `propedeuticas`;
CREATE TABLE IF NOT EXISTS `propedeuticas` (
  `propedeutica` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nomPrope` varchar(100) NOT NULL,
  PRIMARY KEY (`propedeutica`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propedeuticas`
--

INSERT INTO `propedeuticas` (`propedeutica`, `nomPrope`) VALUES
(1, 'PropedeÃºtica'),
(2, 'Dibujo TÃ©cnico'),
(3, 'MatemÃ¡ticas Aplicadas'),
(4, 'Temas de BiologÃ­a'),
(5, 'Temas de FÃ­sica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestres`
--

DROP TABLE IF EXISTS `semestres`;
CREATE TABLE IF NOT EXISTS `semestres` (
  `semestre` tinyint(1) NOT NULL AUTO_INCREMENT,
  `nomSemestre` varchar(20) NOT NULL,
  PRIMARY KEY (`semestre`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `semestres`
--

INSERT INTO `semestres` (`semestre`, `nomSemestre`) VALUES
(1, 'Semestre'),
(2, 'Primero'),
(3, 'Segundo'),
(4, 'Tercero'),
(5, 'Cuarto'),
(6, 'Quinto'),
(7, 'Sexto'),
(8, 'SÃ©ptimo'),
(9, 'Octavo'),
(10, 'Noveno'),
(11, 'DÃ©cimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipossang`
--

DROP TABLE IF EXISTS `tipossang`;
CREATE TABLE IF NOT EXISTS `tipossang` (
  `ts` tinyint(1) NOT NULL AUTO_INCREMENT,
  `nom` varchar(5) NOT NULL,
  PRIMARY KEY (`ts`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipossang`
--

INSERT INTO `tipossang` (`ts`, `nom`) VALUES
(1, 'O-'),
(2, 'O+'),
(3, 'B-'),
(4, 'B+'),
(5, 'A-'),
(6, 'A+'),
(7, 'AB-'),
(8, 'AB+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE IF NOT EXISTS `turnos` (
  `turno` tinyint(1) NOT NULL AUTO_INCREMENT,
  `nomTurno` varchar(15) NOT NULL,
  PRIMARY KEY (`turno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`turno`, `nomTurno`) VALUES
(1, 'No especificado'),
(2, 'Matutino'),
(3, 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuariopk` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `estatus` tinyint(1) NOT NULL COMMENT '1=Activo; 2=Inactivo',
  `privilegios` tinyint(1) NOT NULL COMMENT '1=Superadministrador; 2=Administrador; 3=Administrativo;',
  PRIMARY KEY (`usuariopk`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuariopk`, `nombre`, `email`, `password`, `estatus`, `privilegios`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', 1, 1),
(2, 'Fidel Ambriz', 'fidelambriz@gmail.com', '12345', 2, 3),
(5, 'Carlos RodrÃ­guez', 'charly@gmail.com', '12345', 1, 2),
(6, 'Carlos Acevedo', 'carlos@gmail.com', '12345', 1, 3),
(7, 'Ma de JesÃºs HernÃ¡ndez', 'majesus@gmail.com', '12345', 2, 1),
(8, 'JesÃºs Corona', 'corona@gmail.com', '12345', 1, 2),
(9, 'administrativo', 'administrativo@gmail.com', '12345', 1, 3),
(10, 'Super Administrador', 'superadmin@gmail.com', '12345', 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`semestre`) REFERENCES `semestres` (`semestre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_10` FOREIGN KEY (`especialidad`) REFERENCES `especialidades` (`especialidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_11` FOREIGN KEY (`grupo`) REFERENCES `grupos` (`grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_12` FOREIGN KEY (`ts`) REFERENCES `tipossang` (`ts`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_13` FOREIGN KEY (`causaBaja`) REFERENCES `causasbaja` (`causaBaja`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_14` FOREIGN KEY (`estadoSecundaria`) REFERENCES `lugares` (`lugarNac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_15` FOREIGN KEY (`estadoDom`) REFERENCES `lugares` (`lugarNac`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_16` FOREIGN KEY (`turno`) REFERENCES `turnos` (`turno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`periodofk`) REFERENCES `periodosescolares` (`periodopk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`estatus`) REFERENCES `estatus` (`estatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_6` FOREIGN KEY (`extracurricular`) REFERENCES `extracurriculares` (`extracurricular`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_7` FOREIGN KEY (`propedeutica1`) REFERENCES `propedeuticas` (`propedeutica`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_8` FOREIGN KEY (`propedeutica2`) REFERENCES `propedeuticas` (`propedeutica`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_9` FOREIGN KEY (`lugarNac`) REFERENCES `lugares` (`lugarNac`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
