-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2021 a las 20:41:09
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `manual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos`
--

CREATE TABLE `anexos` (
  `id_anexo` int(11) NOT NULL,
  `titulo` varchar(60) DEFAULT NULL,
  `btn` varchar(60) DEFAULT NULL,
  `descripcion` varchar(600) DEFAULT NULL,
  `img` varchar(70) DEFAULT NULL,
  `id_modal` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `insert_` datetime DEFAULT NULL,
  `update_` datetime DEFAULT NULL,
  `user_update` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anexos`
--

INSERT INTO `anexos` (`id_anexo`, `titulo`, `btn`, `descripcion`, `img`, `id_modal`, `id_tipo`, `insert_`, `update_`, `user_update`) VALUES
(12, 'Boton', 'Controller', 'btn', 'img12Controller.jpg', 7, 1, NULL, NULL, 1),
(14, 'Boton', 'Validate', 'btn', 'img14Validate.jpg', 9, 1, NULL, NULL, 1),
(15, 'Boton', 'Validate-Es', 'btn', 'img15Validate-Es.jpg', 9, 1, NULL, NULL, 1),
(16, 'Boton', 'Show', 'btn', 'img16Show.jpg', 30, 1, NULL, NULL, 1),
(17, 'Boton', 'View-show', 'btn', 'img17View-show.jpg', 30, 1, NULL, NULL, 1),
(18, 'Boton', 'Web', 'btn', 'img18Web.jpg', 32, 1, NULL, NULL, 1),
(19, 'Boton', 'Web-2', 'btn', 'img19Web-2.jpg', 32, 1, NULL, NULL, 1),
(20, 'Boton', 'Cache', 'btn', 'img20Cache.jpg', 32, 1, NULL, NULL, 1),
(21, 'Boton', 'View', 'btn', 'img21View.jpg', 32, 1, NULL, NULL, 1),
(22, 'Boton', 'Plantilla', 'btn', 'img22Plantilla.jpg', 32, 1, NULL, NULL, 1),
(23, 'Boton', 'Vista', 'btn', 'img23Vista.jpg', 33, 1, NULL, NULL, 1),
(24, 'Boton', 'Ctr-Paginate', 'btn', 'img24Ctr-Paginate.jpg', 33, 1, NULL, NULL, 1),
(25, 'Boton', 'Comando-create', 'btn', 'img25Comando-create.jpg', 34, 1, NULL, NULL, 1),
(27, 'Boton', 'Comando-save', 'btn', 'img27Comando-save.jpg', 34, 1, NULL, NULL, 1),
(28, 'Boton', 'Controller', 'btn', 'img28Controller.jpg', 35, 1, NULL, NULL, 1),
(34, 'Boton', 'Id', 'btn', 'img34Id.jpg', 42, 1, NULL, NULL, 1),
(35, 'Boton', 'User', 'btn', 'img35User.jpg', 42, 1, NULL, NULL, 1),
(36, 'Boton', 'Code-inicial', 'btn', 'img36Code-inicial.jpg', 44, 1, NULL, NULL, 1),
(37, 'Boton', 'But', 'btn', 'img37But.jpg', 44, 1, NULL, NULL, 1),
(40, 'Boton', 'gh', 'btn', NULL, 47, 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items`
--

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `id_manual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `items`
--

INSERT INTO `items` (`id_item`, `titulo`, `id_manual`) VALUES
(1, 'Instalacion', 1),
(2, 'MVC', 1),
(3, 'ORM', 1),
(14, 'Prueba', 1),
(15, 'Prueba de item', 2),
(20, '', 9),
(21, 'Sintaxis', 9),
(22, 'Code', 9),
(23, '', 10),
(24, 'Sintaxis', 10),
(25, 'Code', 10),
(26, '', 11),
(27, 'Code', 11),
(28, 'View', 11),
(29, 'Tem3', 1),
(30, '', 1),
(31, 'Code', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguajes`
--

CREATE TABLE `lenguajes` (
  `id_lenguaje` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguajes`
--

INSERT INTO `lenguajes` (`id_lenguaje`, `nom`) VALUES
(1, 'php'),
(2, 'Java script');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manuales`
--

CREATE TABLE `manuales` (
  `id_manual` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `requir` varchar(600) DEFAULT NULL,
  `descrip` varchar(6000) DEFAULT NULL,
  `url_doc` varchar(100) DEFAULT NULL,
  `id_lenguaje` int(11) NOT NULL,
  `insert_` datetime DEFAULT NULL,
  `update_` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `manuales`
--

INSERT INTO `manuales` (`id_manual`, `nombre`, `requir`, `descrip`, `url_doc`, `id_lenguaje`, `insert_`, `update_`, `id_user`) VALUES
(1, 'Laravel 8', 'php 7.4, composer, node.js.', NULL, 'https://laravel.com/docs/8.x/readme', 1, '2021-05-23 12:37:14', '2021-05-23 12:37:14', 2),
(2, 'View', NULL, NULL, NULL, 2, '2021-05-23 12:37:14', '2021-05-23 12:37:14', 2),
(4, 'Angular', 'Node, npm y CLI Angular 8', '', 'https://angular.io/docs', 2, '2021-06-07 11:04:44', '2021-06-07 11:04:44', 2),
(9, 'jquery', '', '', '', 2, '2021-06-07 12:31:57', '2021-06-07 12:31:57', 2),
(10, 'Reach', '', '', '', 2, '2021-06-07 12:45:51', '2021-06-07 12:45:51', 2),
(11, 'Reach', '', '', '', 2, '2021-06-07 13:28:08', '2021-06-07 13:28:08', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modals`
--

CREATE TABLE `modals` (
  `id_modal` int(11) NOT NULL,
  `titulo_modal` varchar(50) NOT NULL,
  `titulo_btn` varchar(50) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `descripcion` varchar(6000) DEFAULT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modals`
--

INSERT INTO `modals` (`id_modal`, `titulo_modal`, `titulo_btn`, `url`, `descripcion`, `id_item`) VALUES
(1, '', 'Composer', 'https://getcomposer.org/', ' ', 1),
(4, '', 'node-js', 'https://nodejs.org/es/', '', 1),
(7, 'Controller', 'Ctr', NULL, ' <h4>Comando</h4><p>php artisan make:controller LandingController</p><p>o</p><p>php artisan make:controller LandingController -r</p> <h4>Ruta</h4><p>app-&gt;Http-&gt;Contrellers</p><p>Una vez creado el controller, se debe colocar la ruta en web</p><p>use AppHttpControllersHomeController</p><p>Los controller por lo general tienen los metodos</p><p>create</p><p>store</p><p>confirm</p><p>destroy</p><p>edit</p><p>update</p><p>show</p>', 2),
(9, 'Validate', 'validate', NULL, '', 2),
(10, 'Prueba 1', 'Modelo', NULL, '', 2),
(19, 'Comandos de instalación', 'Comandos', '', '', 1),
(28, 'Create', 'Create', '', ' <p><br></p><h4>Comando</h4><p>php artisan make:controller LandingController</p><p>o</p><p>php artisan make:controller LandingController -r</p> <p><br></p><h4>Ruta</h4><p>app-&gt;Http-&gt;Contrellers</p><p>Una vez creado el controller, se debe colocar la ruta en web</p><p>use AppHttpControllersHomeController</p><p>Los controller por lo general tienen los metodos</p><p>create</p><p>store</p><p>confirm</p><p>destroy</p><p>edit</p><p>update</p><p>show</p>', 2),
(30, 'Show', 'Show', '', '', 2),
(31, 'Index', 'Index', '', '', 2),
(32, 'View', 'View', '', '', 2),
(33, 'Paginado', 'Pag', '', '', 2),
(34, 'Consola', 'Consola', '', '', 3),
(35, 'Sedders', 'Sedders', '', '(', 3),
(36, 'Factory Insert masivo', 'Factory', '', ' ', 3),
(42, 'Llamar-obj', 'Dom', '', ' <h4>Sintaxis</h4><div>- LLamar por id</div><div>$(#)</div>', 21),
(43, 'Sd', 'dd', '', '', 22),
(44, 'Bases', 'Bases', '', ' <h4>El html cambia en este framework</h4><div>- Maneja componentes</div>', 24),
(45, 'Ntf', 'ff', '', '', 25),
(46, 'Db', 'DB', '', '', 27),
(47, 'DBf', 'DBf', '', '', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` varchar(4) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `descripcion` varchar(600) DEFAULT NULL,
  `insert_` datetime NOT NULL,
  `update_` datetime NOT NULL,
  `permisos` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nom`, `descripcion`, `insert_`, `update_`, `permisos`) VALUES
('D', 'Desarrollador', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `nombre`, `descripcion`) VALUES
(1, 'derecho', NULL),
(2, 'izquierdo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom1` varchar(30) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `nom2` varchar(30) DEFAULT NULL,
  `ape1` varchar(30) NOT NULL,
  `ape2` varchar(30) DEFAULT NULL,
  `clave` varchar(30) NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `insert_` datetime NOT NULL,
  `update_` datetime NOT NULL,
  `status` varchar(5) NOT NULL,
  `id_rol` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nom1`, `correo`, `nom2`, `ape1`, `ape2`, `clave`, `foto`, `insert_`, `update_`, `status`, `id_rol`) VALUES
(2, 'Javier', 'jav-rn@hotmial.com', NULL, 'R', NULL, '1', 'foto', '2021-05-23 12:37:14', '2021-05-23 12:37:14', 'A', 'D');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id_anexo`),
  ADD KEY `item_tipo_anexo` (`id_tipo`),
  ADD KEY `item_tipo_modal` (`id_modal`);

--
-- Indices de la tabla `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `FK_manual_item` (`id_manual`);

--
-- Indices de la tabla `lenguajes`
--
ALTER TABLE `lenguajes`
  ADD PRIMARY KEY (`id_lenguaje`);

--
-- Indices de la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD PRIMARY KEY (`id_manual`),
  ADD KEY `FK_user_manual` (`id_user`),
  ADD KEY `FK_lenguaje_manual` (`id_lenguaje`);

--
-- Indices de la tabla `modals`
--
ALTER TABLE `modals`
  ADD PRIMARY KEY (`id_modal`),
  ADD KEY `item_modal` (`id_item`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_rol_user` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id_anexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `lenguajes`
--
ALTER TABLE `lenguajes`
  MODIFY `id_lenguaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `manuales`
--
ALTER TABLE `manuales`
  MODIFY `id_manual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `modals`
--
ALTER TABLE `modals`
  MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anexos`
--
ALTER TABLE `anexos`
  ADD CONSTRAINT `item_tipo_anexo` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_tipo_modal` FOREIGN KEY (`id_modal`) REFERENCES `modals` (`id_modal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `FK_manual_item` FOREIGN KEY (`id_manual`) REFERENCES `manuales` (`id_manual`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD CONSTRAINT `FK_lenguaje_manual` FOREIGN KEY (`id_lenguaje`) REFERENCES `lenguajes` (`id_lenguaje`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_user_manual` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `modals`
--
ALTER TABLE `modals`
  ADD CONSTRAINT `item_modal` FOREIGN KEY (`id_item`) REFERENCES `items` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_rol_user` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
