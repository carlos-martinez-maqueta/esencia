-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2024 a las 18:44:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_esencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `banner`, `title`, `description`) VALUES
(1, 'image_6642e5d61ef332.35315651.png', 'ABOUT US', 'aaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'esencia@example.com', '2024-05-10 00:37:41', '2024-05-12 21:56:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_banners_space`
--

CREATE TABLE `tbl_banners_space` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `space_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_banners_space`
--

INSERT INTO `tbl_banners_space` (`id`, `imagen`, `space_id`) VALUES
(3, 'image_665367a643b396.78507434.png', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `correlative` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `space_id` int(11) DEFAULT NULL,
  `duration_days` varchar(50) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `reference_qr_scan` varchar(255) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `correlative`, `user_id`, `space_id`, `duration_days`, `date_start`, `date_end`, `creation_date`, `qr`, `reference_qr_scan`, `state`) VALUES
(1, 'CORRELATIVO', 12, 1, '2', '2024-05-27', '2024-05-28', '2024-05-26 12:58:23', 'qr', 'reference_qr', 'approved'),
(2, 'CORRELATIVO', 12, 1, '2', '2024-05-28', '2024-05-29', '2024-05-26 17:31:15', 'qr', 'reference_qr', 'approved'),
(3, 'CORRELATIVO', 12, 1, '2', '2024-07-17', '2024-07-18', '2024-05-26 17:34:48', 'qr', 'reference_qr', 'approved');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `name`, `lastname`, `email`, `country`, `phone`, `password`, `creation_date`) VALUES
(12, 'Javier', 'Paredes Velasquez', 'velasquezparedesjavier@gmail.com', 'Peru', '+51974597161', ':25ISQJ-UN_(', '2024-05-25 22:31:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_equipment`
--

CREATE TABLE `tbl_equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `charge` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `www` varchar(300) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`id`, `name`, `charge`, `image`, `linkedin`, `www`, `instagram`) VALUES
(5, 'Javier', 'Sistemas', 'image_664845acad5356.58813728.png', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `short_text_about` longtext DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `banner`, `short_text_about`, `location`, `phone`, `email`) VALUES
(1, 'image_66411cdbc51e08.01900601.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.', 'Villas Escencia Tulum', '+51940108903', 'example@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_labels`
--

CREATE TABLE `tbl_labels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icons` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_labels`
--

INSERT INTO `tbl_labels` (`id`, `name`, `icons`) VALUES
(2, 'Wifi', '<i class=\'bx bx-wifi\'></i>'),
(3, 'Terrace', '<i class=\'bx bx-buildings\' ></i>'),
(4, 'aergaer', 'gaerg'),
(5, 'Pera', '<i class=\'bx bxs-pear\'></i>'),
(6, 'grtgt', 'rgrtg'),
(7, 'aaa', 'aaa'),
(8, 'htyhdty', 'htyhyth');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_labels_spaces`
--

CREATE TABLE `tbl_labels_spaces` (
  `id` int(11) NOT NULL,
  `space_id` int(11) DEFAULT NULL,
  `labels_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_labels_spaces`
--

INSERT INTO `tbl_labels_spaces` (`id`, `space_id`, `labels_id`) VALUES
(13, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pays`
--

CREATE TABLE `tbl_pays` (
  `id` int(11) NOT NULL,
  `correlative` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_pays`
--

INSERT INTO `tbl_pays` (`id`, `correlative`, `user_id`, `creation_date`, `total`) VALUES
(1, 'correlative', 12, '2024-05-26 14:07:08', '250'),
(2, 'correlative', 12, '2024-06-12 17:48:56', '300');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_plan`
--

CREATE TABLE `tbl_plan` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `duration_days` varchar(50) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_plan`
--

INSERT INTO `tbl_plan` (`id`, `nombre`, `description`, `duration_days`, `precio`) VALUES
(1, 'Plan 1', 'plan description', '1', '150');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `banner`, `title`, `description`, `state`) VALUES
(1, 'image_664258df23ab66.98678955.png', 'FIND THE SPACE PERFECT FOR YOUR EVENTS AND PRODUCTIONS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_social_networks`
--

CREATE TABLE `tbl_social_networks` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `spotify` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_social_networks`
--

INSERT INTO `tbl_social_networks` (`id`, `facebook`, `instagram`, `whatsapp`, `spotify`, `linkedin`, `tiktok`) VALUES
(1, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_space`
--

CREATE TABLE `tbl_space` (
  `id` int(11) NOT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `maximum_people` varchar(255) DEFAULT NULL,
  `coordinate` longtext DEFAULT NULL,
  `body` longtext DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_space`
--

INSERT INTO `tbl_space` (`id`, `main_image`, `name`, `location`, `maximum_people`, `coordinate`, `body`, `price`, `state`) VALUES
(4, 'image_6647ef22455636.36177274.png', 'Nature House', 'Villa Escencia Tulum', '12', 'https://maps.app.goo.gl/pVWiFFgLYZnoBuNGA', 'Villas Esencia Tulum is located in Tulum, Quintana Roo, near Bus Terminal. It offers accommodation with free WiFi, free private parking and access to the indoor pool. The villa offers a terrace, garden views, a seating area, a flat-screen TV, a fully equipped kitchen with a refrigerator and a microwave, and a private bathroom with a shower and free toiletries. A toaster and coffee maker are also provided. There is also a garden ideal for relaxing. Tulum Archaeological Zone is 6.1 km from the accommodation, and Tulum National Park is 5.3 km away. The nearest airport (Tulum International Airport) is 38 km from the accommodation, which offers a paid shuttle service to and from the airport.', '150.00', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_space_campus`
--

CREATE TABLE `tbl_space_campus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `capacity` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_space_campus`
--

INSERT INTO `tbl_space_campus` (`id`, `name`, `description`, `capacity`, `state`) VALUES
(1, 'Nature House', 'Site Description', '12', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_timeline`
--

CREATE TABLE `tbl_timeline` (
  `id` int(11) NOT NULL,
  `year` varchar(50) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_banners_space`
--
ALTER TABLE `tbl_banners_space`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_labels`
--
ALTER TABLE `tbl_labels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_labels_spaces`
--
ALTER TABLE `tbl_labels_spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_labels_label` (`labels_id`),
  ADD KEY `fk_labels_space` (`space_id`);

--
-- Indices de la tabla `tbl_pays`
--
ALTER TABLE `tbl_pays`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_plan`
--
ALTER TABLE `tbl_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_social_networks`
--
ALTER TABLE `tbl_social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_space`
--
ALTER TABLE `tbl_space`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_space_campus`
--
ALTER TABLE `tbl_space_campus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_banners_space`
--
ALTER TABLE `tbl_banners_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbl_equipment`
--
ALTER TABLE `tbl_equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_labels`
--
ALTER TABLE `tbl_labels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_labels_spaces`
--
ALTER TABLE `tbl_labels_spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tbl_pays`
--
ALTER TABLE `tbl_pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_plan`
--
ALTER TABLE `tbl_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_social_networks`
--
ALTER TABLE `tbl_social_networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_space`
--
ALTER TABLE `tbl_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_space_campus`
--
ALTER TABLE `tbl_space_campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_labels_spaces`
--
ALTER TABLE `tbl_labels_spaces`
  ADD CONSTRAINT `fk_labels_label` FOREIGN KEY (`labels_id`) REFERENCES `tbl_labels` (`id`),
  ADD CONSTRAINT `fk_labels_space` FOREIGN KEY (`space_id`) REFERENCES `tbl_space` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
