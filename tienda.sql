-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2020 a las 17:12:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosformulario`
--

CREATE TABLE `datosformulario` (
  `Nombre` varchar(255) NOT NULL,
  `Apellidos` varchar(255) NOT NULL,
  `Dirección` text NOT NULL,
  `Email` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosformulario`
--

INSERT INTO `datosformulario` (`Nombre`, `Apellidos`, `Dirección`, `Email`) VALUES
('Enrique', 'Ferrer Agius', 'Carrer Moli del Comte 41', 'panyu1512@uoc.edu'),
('Enrique', 'Ferrer Agius', 'Carrer Moli del Comte 41', 'panyu1512@uoc.edu'),
('Magdalena', 'Borràs Mateu', 'Carrer del Pàmpol 4', 'magdalena@gmail.com'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('kike', 'Mateu', 'Carrer del Pàmpol 4', 'ga2ciamateum@gmail.com'),
('Pepe', 'Perez Mateu', 'Calle Salut 22', 'ejemplo@uoc.edu'),
('', '', '', ''),
('sdsd', 'sdsd', 'sdsd', 'sds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lactanciamaterna`
--

CREATE TABLE `lactanciamaterna` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lactanciamaterna`
--

INSERT INTO `lactanciamaterna` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Clases preparación para la lactancia', '20.00', 'Amamantar no es solamente un acto instintivo, también requiere aprendizaje, información y sobre todo observación previa. Muchas mujeres no han cogido a un bebé en brazos hasta tener el suyo y tampoco han visto amamantar.', 'https://i.pinimg.com/564x/4e/68/7d/4e687d4a61cded1b78bf83ded1bef4ca.jpg'),
(2, 'Lactancia materna como anticonceptivo natural', '10.00', 'Son numerosos los métodos anticonceptivos compatibles con la lactancia materna. De hecho, la lactancia en sí funciona como método natural de control de la natalidad durante algún tiempo y mientras se den determinadas circunstancias.', 'https://blog.amiasistencia.com/wp-content/uploads/2020/08/Beneficios_leche-materna.jpg'),
(3, 'Mitos y realidades', '5.00', 'Es importante eliminar los numerosos mitos y falsas creencias, transmitidos culturalmente que promueven actitudes negativas hacia la lactancia materna y suponen barreras para su inicio y mantenimiento.', 'https://i.ytimg.com/vi/ugVYgWh6lqc/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexualidad`
--

CREATE TABLE `sexualidad` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sexualidad`
--

INSERT INTO `sexualidad` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Conoce tus genitales', '8.50', 'Una sexualidad sana implica la valoración positiva y aceptación del propio cuerpo, lo que contribuye a mejorar nuestra autoestima así como las relaciones interpersonales. Para ello son necesarios unos conocimientos básicos de la anatomía genital. ', 'https://i.pinimg.com/564x/65/f7/8d/65f78db2f4b84e84f867166adf8ce27a.jpg'),
(2, 'Comunicación en el sexo', '7.50', 'La comunicación es uno de los caminos que nos ayuda a construir relaciones saludables con las personas de nuestro entorno. Entre ellas, nuestras parejas, con las que es importante que exista esta comunicación y que se produzca de forma manera adecuada para mantener un vínculo sano y fomentar la confianza. Te proporcionamos información sobre la comunicación sexual en pareja.', 'https://img.huffingtonpost.com/asset/5c8a6fc12000009e046f27c4.jpeg?ops=scalefit_630_noupscale'),
(3, 'Elige tu mejor método anticonceptivo', '13.25', 'Los métodos anticonceptivos son necesarios cuando mantenemos relaciones sexuales y y no queremos tener riesgo de que haya embarazo y, en algunos casos, como medio de protección frente a diferentes enfermedades de transmisión sexual. Existen diferentes métodos anticonceptivos que podemos utilizar dependiendo de cuáles sean nuestras necesidades o el momento de la vida en el que nos encontramos. ', 'https://images.clarin.com/2020/08/14/el-preservativo-es-el-unico___wPHE5ulRQ_720x0__1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelopelvico`
--

CREATE TABLE `suelopelvico` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suelopelvico`
--

INSERT INTO `suelopelvico` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Ejercicios Kegel', '15.00', 'Los ejercicios de Kegel te ayudan a prevenir y tratar la incontinencia urinaria provocada por la pérdida de tono en el suelo pélvico tras el embarazo. Te explicamos en qué consisten y cómo realizarlos correctamente.', 'https://i.pinimg.com/564x/ad/d6/3e/add63e3230be0f0732139d0d3e6dfde6.jpg'),
(2, 'Episiotomia y fisioterapia del suelo pélvico', '12.00', 'La episiotomía es una de las intervenciones quirúrgicas más frecuentes en los países occidentales, pero no siempre es necesaria y afecta en gran medida a la integridad del suelo pélvico. Te explicamos cuándo y cómo debe realizarse. ', 'https://hospitalveugenia.com/wp-content/uploads/2020/09/Ejercicios-embarazadas-fisioterapia-obstetrica-sevilla-1280x720.jpg'),
(3, 'Bolas chinas', '12.00', 'Se trata de un tipo de terapia que se utiliza para la recuperación del suelo pélvico. Son muy adecuadas para cualquier momento de la vida de la mujer, pero, especialmente, te explicamos porque son muy importantes durante el embarazo y el posparto.', 'https://www.dhresource.com/f2/albu/g7/M01/7A/63/rBVaSVutBVyARSOwAADk2-YeaGQ375.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Email` varchar(200) NOT NULL,
  `Contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Email`, `Contraseña`) VALUES
('ejemplo1@uoc.edu', '123qwe'),
('ejemplo@uoc.edu', 'ejemplo123'),
('enraigro@hotmail.es', '12345'),
('kike20ferrer@gmail.com', '123'),
('panyu1512@uoc.edu', 'uoc123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lactanciamaterna`
--
ALTER TABLE `lactanciamaterna`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `sexualidad`
--
ALTER TABLE `sexualidad`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `suelopelvico`
--
ALTER TABLE `suelopelvico`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lactanciamaterna`
--
ALTER TABLE `lactanciamaterna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sexualidad`
--
ALTER TABLE `sexualidad`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `suelopelvico`
--
ALTER TABLE `suelopelvico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
