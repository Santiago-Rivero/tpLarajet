-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2021 a las 22:12:59
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `larajet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  `imagen` blob DEFAULT NULL,
  `fecha_caducidad` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `user_id`, `codigo`, `descripcion`, `cantidad`, `precio`, `imagen`, `fecha_caducidad`, `created_at`, `updated_at`) VALUES
(1, NULL, '545', 'Arroz La Blanca', 150, '150.00', NULL, '03/03/2021', '2021-03-14 18:58:51', '2021-03-14 18:58:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `estado`) VALUES
(5, 'Vehiculos', 1),
(6, 'Inmuebles', 1),
(7, 'Hogar, Muebles y Jardín', 1),
(8, 'Electrodomésticos', 1),
(9, 'Herramientas y Construcción', 1),
(10, 'Juguetes', 1),
(11, 'Bebés', 1),
(12, 'Libros', 1),
(13, 'Belleza y Cuidado Personal', 1),
(14, 'Supermercado', 1),
(15, 'Agro', 1),
(16, 'Servicios', 1),
(17, 'Productos Sustentables', 1),
(18, 'Animales y Mascotas', 1),
(19, 'Antiguedades', 1),
(20, 'Arte, Libreria y Merceria', 1),
(21, 'Camaras, Celulares y Accesorios', 1),
(22, 'Computación', 1),
(23, 'Videojuegos y Consolas', 1),
(24, 'Deporte y Fitness', 1),
(25, 'Decoración', 1),
(26, 'Joyas y Relojes', 1),
(27, 'Instrumentos Musicales', 1),
(28, 'Ropa y Accesorios', 1),
(29, 'Salud y Equipo Médico', 1),
(30, 'Souvenirs, Cotillón y Fiestas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendimientos`
--

CREATE TABLE `emprendimientos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `localidad_id` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `sitio_web` varchar(100) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `nro_telefono` varchar(20) DEFAULT NULL,
  `logo` blob DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `tipoempresa_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latitud` float DEFAULT NULL,
  `longitud` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emprendimientos`
--

INSERT INTO `emprendimientos` (`id`, `nombre`, `descripcion`, `localidad_id`, `direccion`, `sitio_web`, `instagram`, `facebook`, `nro_telefono`, `logo`, `usuario_id`, `tipoempresa_id`, `created_at`, `updated_at`, `latitud`, `longitud`) VALUES
(1, NULL, 'Artesanias', NULL, 'Palmera Imperial', 'www.palmeraimperial.com', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2021-03-15 23:08:03', NULL, NULL),
(2, NULL, 'Artesanía', 1, 'Calle Palmera Imperial', NULL, NULL, NULL, NULL, NULL, 1, 3, '2021-03-15 15:02:21', '2021-03-15 15:02:21', NULL, NULL),
(3, NULL, 'Venta de Artículos de higiene', 3, 'Los Laureles 251', NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-03-15 16:16:06', '2021-03-15 16:16:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidads`
--

CREATE TABLE `localidads` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidads`
--

INSERT INTO `localidads` (`id`, `nombre`) VALUES
(1, 'Alba Posse'),
(2, 'Almafuerte'),
(3, 'Florentino Ameghino'),
(4, 'Apostoles'),
(5, 'Aristobulo Del Valle'),
(6, 'Arroyo Del Medio'),
(7, 'Azara'),
(8, 'Bernardo De Irigoyen'),
(9, 'Bonpland'),
(10, 'Caa-Yari'),
(11, 'Campo Grande'),
(12, 'Campo Ramon'),
(13, 'Campo Viera'),
(14, 'Candelaria'),
(15, 'Capiovi'),
(16, 'Caraguatay'),
(17, 'Cerro Azul'),
(18, 'Cerro Cora'),
(19, 'Colonia Alberdi'),
(20, 'Colonia Aurora'),
(21, 'Colonia Delicia'),
(22, 'Colonia Polana'),
(23, 'Colonia Victoria'),
(24, 'Colonia Wanda'),
(25, 'Concepcion De La Sierra'),
(26, 'Corpus'),
(27, 'Dos Arroyos'),
(28, 'Dos De Mayo'),
(29, 'El Alcazar'),
(30, 'Eldorado'),
(31, 'El Soberbio'),
(32, 'Puerto Esperanza'),
(33, 'Fachinal'),
(34, 'Garuhape'),
(35, 'Garupa'),
(36, 'General Alvear'),
(37, 'San Antonio'),
(38, 'General Urquiza'),
(39, 'Gobernador Lopez'),
(40, 'Gobernador Roca'),
(41, 'Guarani'),
(42, 'Hipolito Yrigoyen'),
(43, 'Puerto Iguazu'),
(44, 'Itacaruare'),
(45, 'Jardin America'),
(46, 'Leandro N. Alem'),
(47, 'Puerto Leoni'),
(48, 'Puerto Libertad'),
(49, 'Loreto'),
(50, 'Los Helechos'),
(51, 'Colonia Martires'),
(52, 'Mojon Grande'),
(53, 'Montecarlo'),
(54, '9 De Julio'),
(55, 'Obera'),
(56, 'Olegario Victor Andrade'),
(57, 'Panambi'),
(58, 'Puerto Piray'),
(59, 'Posadas'),
(60, 'Profundidad'),
(61, 'Puerto Rico'),
(62, 'Ruiz De Montoya'),
(63, 'Santiago De Liniers'),
(64, 'San Ignacio'),
(65, 'San Javier'),
(66, 'San Jose'),
(67, 'San Martin'),
(68, 'San Pedro'),
(69, 'Santa Ana'),
(70, 'Santa Maria'),
(71, 'Santo Pipo'),
(72, 'Tres Capones'),
(73, '25 De Mayo'),
(74, 'San Vicente'),
(75, 'Cte. Andresito Guacurari'),
(76, 'Pozo Azul'),
(77, 'Salto Encantado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_12_023617_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion_producto` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `emprendimiento_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4YMs5g2VJy9Cm8QeqS6CwIjGTRErNHnVIWYcfSxo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 Edg/89.0.774.54', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoieHY5MHlkakFZN0tGRWJya1JIQ0Vna1A5eUtHVmNMZFhoVVhWV21ITyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXByZW5kaW1pZW50b3MvMi9lZGl0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGJHcDlEVllQS00zeGlqY0tabmh0YU9zRWFhS2tqY0o0YW15M2syTmtKSGplV2FYRmJGTnZlIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRiR3A5RFZZUEtNM3hpamNLWm5odGFPc0VhYUtramNKNGFteTNrMk5rSkhqZVdhWEZiRk52ZSI7fQ==', 1615814357),
('afk9xSgwpzOIewGMNYXx4cLBZ2mGCuWouUYPZ3K5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36 Edg/89.0.774.50', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMjJNMTVQNFgxTERmenZ2MU0ycnRTTmhhVERoN210c0t0SnlIQklIUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXByZW5kaW1pZW50b3MvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGJHcDlEVllQS00zeGlqY0tabmh0YU9zRWFhS2tqY0o0YW15M2syTmtKSGplV2FYRmJGTnZlIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRiR3A5RFZZUEtNM3hpamNLWm5odGFPc0VhYUtramNKNGFteTNrMk5rSkhqZVdhWEZiRk52ZSI7fQ==', 1615778308),
('k9DanDTUtkgfGCDv2FDxGyJM2Ieiqaax0hXQS7eN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 Edg/89.0.774.54', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQzJ4eUxDam1jdFZ1akdYdk11Z0Q0cXhPYmlDWG5vMUFWRkxMcmFMYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXByZW5kaW1pZW50b3Mvc3R5bGVzaGVldC5jc3MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkYkdwOURWWVBLTTN4aWpjS1puaHRhT3NFYWFLa2pjSjRhbXkzazJOa0pIamVXYVhGYkZOdmUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGJHcDlEVllQS00zeGlqY0tabmh0YU9zRWFhS2tqY0o0YW15M2syTmtKSGplV2FYRmJGTnZlIjt9', 1615841749),
('o9LxB7qfgVtAFouP9JAaOjXTBTPx6NA5Zsbv1RJx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.90 Safari/537.36 Edg/89.0.774.54', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWE1LY3Z3WmFNendqc2pQMjlsUGlROTI4TTRsczdYcFI1cTNrbnV6SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXByZW5kaW1pZW50b3Mvc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1615830749),
('Y6KDQcoP08eQG465bwLk0zGhDw446IxxAahGIQlv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36 Edg/89.0.774.50', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHloSmJqRFBsQmVqdzg5dU1NMk1VRTFzZ043Qld6SWdsTGFVSVg0YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXByZW5kaW1pZW50b3MvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1615774897),
('YphDvLaXZ8tRehezyj1ieHYLDzaLIyBkYCwMEvSi', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36 Edg/89.0.774.50', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiWW1pUnBIbk03WUE0NXBqTHA2QWhKV1AyVUdENmZiQ3NIdFRMSUdPQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbXByZW5kaW1pZW50b3MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkYkdwOURWWVBLTTN4aWpjS1puaHRhT3NFYWFLa2pjSjRhbXkzazJOa0pIamVXYVhGYkZOdmUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGJHcDlEVllQS00zeGlqY0tabmh0YU9zRWFhS2tqY0o0YW15M2syTmtKSGplV2FYRmJGTnZlIjt9', 1615760292);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoempresas`
--

CREATE TABLE `tipoempresas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoempresas`
--

INSERT INTO `tipoempresas` (`id`, `nombre`, `estado`) VALUES
(1, 'Sede o Tienda Física', NULL),
(2, 'Tienda Virtual o Venta Digital', NULL),
(3, 'Servicio de Delivery', NULL),
(4, 'Marca Personal', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Jorge Raúl Todt', 'jorgetodt2007@hotmail.com', NULL, '$2y$10$bGp9DVYPKM3xijcKZnhtaOsEaaKkjcJ4amy3k2NkJHjeWaXFbFNve', NULL, NULL, NULL, NULL, NULL, '2021-03-14 21:38:09', '2021-03-14 21:38:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emprendimientos`
--
ALTER TABLE `emprendimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `localidads`
--
ALTER TABLE `localidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tipoempresas`
--
ALTER TABLE `tipoempresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `emprendimientos`
--
ALTER TABLE `emprendimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidads`
--
ALTER TABLE `localidads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoempresas`
--
ALTER TABLE `tipoempresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
