-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2021 a las 17:27:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database-2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` text DEFAULT NULL,
  `date_created_category` date DEFAULT NULL,
  `date_updated_category` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`, `date_created_category`, `date_updated_category`) VALUES
(1, 'Consumer Electric', '2021-10-19', '2021-10-20 04:59:00'),
(2, 'Clothing and Apparel', '2021-10-19', '2021-10-20 04:59:00'),
(3, 'Home, Garden and Kitchen', '2021-10-19', '2021-10-20 04:59:00'),
(4, 'Health and Beauty', '2021-10-19', '2021-10-20 04:59:00'),
(5, 'Jewelry and Watches', '2021-10-19', '2021-10-20 04:59:00'),
(6, 'Computer and Technology', '2021-10-19', '2021-10-20 04:59:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `name_client` text DEFAULT NULL,
  `email_client` text DEFAULT NULL,
  `password_client` text DEFAULT NULL,
  `token_client` text DEFAULT NULL,
  `token_exp_client` text DEFAULT NULL,
  `date_created_client` date DEFAULT NULL,
  `date_updated_client` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id_client`, `name_client`, `email_client`, `password_client`, `token_client`, `token_exp_client`, `date_created_client`, `date_updated_client`) VALUES
(1, 'Juan Carlos Arcila Díaz', 'jdelaarcila@correo.com', '', '', '', '2021-10-19', '2021-10-20 04:59:00'),
(2, 'Jorge García', 'jgarcia@correo.com', '', '', '', '2021-10-19', '2021-10-20 04:59:00'),
(3, 'Javier Arturo Vázquez Olivares', 'jdelavazquez@correo.com', '', '', '', '2021-10-19', '2021-10-20 04:59:00'),
(4, 'Rodrigo Martinez Blanco', 'rblanco@correo.com', '', '', '', '2021-10-19', '2021-10-20 04:59:00'),
(5, 'Ángel Arias', 'aarias@correo.com', '', '', '', '2021-10-19', '2021-10-20 04:59:00'),
(6, 'Aldo Olivares', 'aolivares@correo.com', '', '', '', '2021-10-19', '2021-10-20 04:59:00'),
(7, 'Redait Media', 'rmedia@correo.com', '', '', '', '2021-10-19', '2021-10-20 04:59:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` text DEFAULT NULL,
  `id_category_product` int(11) NOT NULL DEFAULT 0,
  `date_created_product` date DEFAULT NULL,
  `date_updated_product` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `id_category_product`, `date_created_product`, `date_updated_product`) VALUES
(1, 'Marshall Kilburn Portable Wireless', 1, '2021-10-19', '2021-10-20 04:59:00'),
(2, 'Xbox One Wireless Controller Black Color', 2, '2021-10-19', '2021-10-20 04:59:00'),
(3, 'Sound Intone I65 Earphone White Version', 3, '2021-10-19', '2021-10-20 04:59:00'),
(4, 'Samsung Gear VR Reality Headset', 4, '2021-10-19', '2021-10-20 04:59:00'),
(5, 'Sound Intone I65 White Version', 5, '2021-10-19', '2021-10-20 04:59:00'),
(6, 'Samsung Gear VR Virtual Reality Headset', 6, '2021-10-19', '2021-10-20 04:59:00'),
(7, 'Samsung UHD TV 24inch', 1, '2021-10-19', '2021-10-20 04:59:00'),
(8, 'EPSON Plaster Printer', 2, '2021-10-19', '2021-10-20 04:59:00'),
(9, 'Marshall Kilburn Portable Wireless 2', 3, '2021-10-19', '2021-10-20 04:59:00'),
(10, 'Xbox One Wireless Controller Black Color 2', 4, '2021-10-19', '2021-10-20 04:59:00'),
(11, 'Sound Intone I65 Earphone White Version 2', 5, '2021-10-19', '2021-10-20 04:59:00'),
(12, 'Herschel Leather Duffle Bag In Brown Color', 6, '2021-10-19', '2021-10-20 04:59:00'),
(13, 'Unero Military Classical Backpack', 1, '2021-10-19', '2021-10-20 04:59:00'),
(14, 'Rayban Rounded Sunglass Brown Color', 2, '2021-10-19', '2021-10-20 04:59:00'),
(15, 'Rayban Rounded Sunglass Brown Color', 3, '2021-10-19', '2021-10-20 04:59:00'),
(16, 'Men’s Sports Runnning Swim Board Shorts', 4, '2021-10-19', '2021-10-20 04:59:00'),
(17, 'Paul’s Smith Sneaker InWhite Color', 5, '2021-10-19', '2021-10-20 04:59:00'),
(18, 'Herschel Leather Duffle Bag In Brown Color 2', 6, '2021-10-19', '2021-10-20 04:59:00'),
(19, 'Unero Military Classical Backpack 2', 1, '2021-10-19', '2021-10-20 04:59:00'),
(20, 'Rayban Rounded Sunglass Brown Color 2', 2, '2021-10-19', '2021-10-20 04:59:00'),
(21, 'Korea Long Sofa Fabric In Blue Navy Color', 3, '2021-10-19', '2021-10-20 04:59:00'),
(22, 'Aroma Rice Cooker', 4, '2021-10-19', '2021-10-20 04:59:00'),
(23, 'Simple Plastice Chair In White Color', 5, '2021-10-19', '2021-10-20 04:59:00'),
(24, 'Korea Fabric Chair In Brown Color', 6, '2021-10-19', '2021-10-20 04:59:00'),
(25, 'Set 14-Piece Knife From KichiKit', 1, '2021-10-19', '2021-10-20 04:59:00'),
(26, 'Magic Bullet NutriBullet Pro 900 Series Blender', 2, '2021-10-19', '2021-10-20 04:59:00'),
(27, 'Korea Long Sofa Fabric In Blue Navy Color 2', 3, '2021-10-19', '2021-10-20 04:59:00'),
(28, 'Aroma Rice Cooker 2', 4, '2021-10-19', '2021-10-20 04:59:00'),
(29, 'Simple Plastice Chair In White Color 2', 5, '2021-10-19', '2021-10-20 04:59:00'),
(30, 'Aveeno Moisturizing Body Shower 450ml', 6, '2021-10-19', '2021-10-20 04:59:00'),
(31, 'NYX Beauty Couton Pallete Makeup 12', 1, '2021-10-19', '2021-10-20 04:59:00'),
(32, 'Baxter Care Hair Kit For Bearded Mens', 2, '2021-10-19', '2021-10-20 04:59:00'),
(33, 'Anna Sui Putty Mask Perfection', 3, '2021-10-19', '2021-10-20 04:59:00'),
(34, 'Set 30 Piece Korea StartSkin Natural Mask', 4, '2021-10-19', '2021-10-20 04:59:00'),
(35, 'Ciate Palemore Lipstick Bold Red Color', 5, '2021-10-19', '2021-10-20 04:59:00'),
(36, 'MVMTH Classical Leather Watch In Black', 6, '2021-10-19', '2021-10-20 04:59:00'),
(37, 'MVMTH Classical Leather Watch In Black 2', 1, '2021-10-19', '2021-10-20 04:59:00'),
(38, 'MVMTH Classical Leather Watch In Black 3', 2, '2021-10-19', '2021-10-20 04:59:00'),
(39, 'MVMTH Classical Leather Watch In Black 4', 3, '2021-10-19', '2021-10-20 04:59:00'),
(40, 'MVMTH Classical Leather Watch In Black 5', 4, '2021-10-19', '2021-10-20 04:59:00'),
(41, 'MVMTH Classical Leather Watch In Black 6', 5, '2021-10-19', '2021-10-20 04:59:00'),
(42, 'Sound I65 Earphone White Version', 6, '2021-10-19', '2021-10-20 04:59:00'),
(43, 'Beat Spill 2.0 Wireless Speaker – White', 1, '2021-10-19', '2021-10-20 04:59:00'),
(44, 'ASUS Chromebook Flip – 10.2 Inch', 2, '2021-10-19', '2021-10-20 04:59:00'),
(45, 'Apple Macbook Retina Display 12', 3, '2021-10-19', '2021-10-20 04:59:00'),
(46, 'Samsung Gear VR Virtual Reality', 4, '2021-10-19', '2021-10-20 04:59:00'),
(47, 'Apple iPhone Retina 6s Plus 64GB', 5, '2021-10-19', '2021-10-20 04:59:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
