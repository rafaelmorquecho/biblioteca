-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2017 a las 14:32:40
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `Codigo` int(3) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Autor` varchar(30) NOT NULL,
  `Año` int(4) NOT NULL,
  `Numero_de_Ejemplares` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`Codigo`, `Titulo`, `Autor`, `Año`, `Numero_de_Ejemplares`) VALUES
(1, 'Poema de Gilgamesh', 'Anónimo', 0, 25),
(2, 'Libro de Job (de la Biblia)', 'Anónimo', 0, 25),
(3, 'Las mil y una noches', 'Anónimo', 700, 25),
(4, 'Saga de Njál', 'Anónimo', 0, 25),
(5, 'Todo se desmorona', 'Chinua Achebe', 1958, 25),
(6, 'Cuentos infantiles', 'Hans Christian Andersen', 1835, 25),
(7, 'Divina Comedia', 'Dante Alighieri', 1265, 25),
(8, 'Orgullo y prejuicio', 'Jane Austen', 1813, 25),
(9, 'Papá Goriot', 'Honoré de Balzac', 1835, 25),
(10, 'Decamerón', 'Giovanni Boccaccio', 1349, 25),
(11, 'Ficciones', 'Jorge Luis Borges', 1944, 25),
(12, 'Cumbres Borrascosas', 'Emily Brontë', 1847, 25),
(13, 'El extranjero', 'Albert Camus Nobel prize medal', 1942, 25),
(14, 'Poemas', 'Paul Celan', 1952, 25),
(15, 'Viaje al fin de la noche', 'Louis-Ferdinand Céline', 1932, 25),
(16, 'Don Quijote de la Mancha', 'Miguel de Cervantes', 1605, 25),
(17, 'Los cuentos de Canterbury', 'Geoffrey Chaucer', 0, 25),
(18, 'Relatos cortos', 'Antón Chéjov', 1886, 25),
(19, 'Nostromo', 'Joseph Conrad', 1904, 25),
(20, 'Grandes Esperanzas', 'Charles Dickens', 1861, 25),
(21, 'Jacques el fatalista', 'Denis Diderot', 1796, 25),
(22, 'Berlin Alexanderplatz', 'Alfred Döblin', 1929, 25),
(23, 'Crimen y castigo', 'Fiódor Dostoievski', 1866, 25),
(24, 'El idiota', 'Fiódor Dostoievski', 1869, 25),
(25, 'Los endemoniados', 'Fiódor Dostoievski', 1872, 25),
(26, 'Los hermanos Karamazov', 'Fiódor Dostoievski', 1880, 25),
(27, 'Middlemarch', 'George Eliot', 1871, 25),
(28, 'El hombre invisible', 'Ralph Ellison', 1952, 25),
(29, 'Medea', 'Eurípides', 431, 25),
(30, '¡Absalom Absalom!', 'William Faulkner Nobel prize m', 1936, 25),
(31, 'El ruido y la furia', 'William Faulkner Nobel prize m', 1929, 25),
(32, 'Madame Bovary', 'Gustave Flaubert', 1857, 25),
(33, 'La educación sentimental', 'Gustave Flaubert', 1869, 25),
(34, 'Romancero gitano', 'Federico García Lorca', 1928, 25),
(35, 'Cien años de soledad', 'Gabriel García Márquez Nobel p', 1967, 25),
(36, 'El amor en los tiempos del cólera', 'Gabriel García Márquez Nobel p', 1985, 25),
(37, 'Fausto', 'Johann Wolfgang von Goethe', 1832, 25),
(38, 'Almas muertas', 'Nikolai Gogol', 1842, 25),
(39, 'El tambor de hojalata', 'Günter Grass Nobel prize medal', 1959, 25),
(40, 'Gran Sertón: Veredas', 'João Guimarães Rosa', 1956, 25),
(41, 'Hambre', 'Knut Hamsun Nobel prize medal ', 1890, 25),
(42, 'El viejo y el mar', 'Ernest Hemingway Nobel prize m', 1952, 25),
(43, 'Ilíada', 'Homero', 850, 25),
(44, 'Odisea', 'Homero', 0, 25),
(45, 'Casa de muñecas', 'Henrik Ibsen', 1879, 25),
(46, 'Ulises', 'James Joyce', 1922, 25),
(47, 'Relatos cortos', 'Franz Kafka', 1924, 25),
(48, 'El proceso', 'Franz Kafka', 1925, 25),
(49, 'El castillo', 'Franz Kafka', 1926, 25),
(50, 'Shakuntala', 'Kālidāsa', 0, 25),
(51, 'El sonido de la montaña', 'Yasunari Kawabata Nobel prize ', 1954, 25),
(52, 'Zorba el griego', 'Nikos Kazantzakis', 1946, 25),
(53, 'Hijos y amantes', 'D. H. Lawrence', 1913, 25),
(54, 'Gente independiente', 'Halldór Laxness Nobel prize me', 1934, 25),
(55, 'Poemas', 'Giacomo Leopardi', 1818, 25),
(56, 'El cuaderno dorado', 'Doris Lessing Nobel prize meda', 1962, 25),
(57, 'Pippi Calzaslargas', 'Astrid Lindgren', 1945, 25),
(58, 'Diario de un loco', 'Lu Xun', 1918, 25),
(59, 'Hijos de nuestro barrio', 'Naguib Mahfuz Nobel prize meda', 1959, 25),
(60, 'Los Buddenbrook', 'Thomas Mann Nobel prize medal ', 1901, 25),
(61, 'La montaña mágica', 'Thomas Mann Nobel prize medal ', 1924, 25),
(62, 'Moby-Dick', 'Herman Melville', 1851, 25),
(63, 'Ensayos', 'Michel de Montaigne', 1595, 25),
(64, 'La historia', 'Elsa Morante', 1974, 25),
(65, 'Beloved', 'Toni Morrison Nobel prize meda', 1987, 25),
(66, 'Genji Monogatari', 'Murasaki Shikibu', 0, 25),
(67, 'El hombre sin atributos', 'Robert Musil', 1930, 25),
(68, 'Lolita', 'Vladimir Nabokov', 1955, 25),
(69, '1984', 'George Orwell', 1949, 25),
(70, 'Las metamorfosis', 'Ovidio', 0, 25),
(71, 'Libro del desasosiego', 'Fernando Pessoa', 1928, 25),
(72, 'Cuentos', 'Edgar Allan Poe', 0, 25),
(73, 'En busca del tiempo perdido', 'Marcel Proust', 1913, 25),
(74, 'Gargantúa y Pantagruel', 'François Rabelais', 1532, 25),
(75, 'Pedro Páramo', 'Juan Rulfo', 1955, 25),
(76, 'Masnavi', 'Rumi', 1258, 25),
(77, 'Hijos de la medianoche', 'Salman Rushdie', 1981, 25),
(78, 'Bostan', 'Saadi', 1257, 25),
(79, 'Tiempo de migrar al norte', 'Tayeb Salih', 1966, 25),
(80, 'Ensayo sobre la ceguera', 'José Saramago Nobel prize meda', 1995, 25),
(81, 'Hamlet', 'William Shakespeare', 1603, 25),
(82, 'El rey Lear', 'William Shakespeare', 1608, 25),
(83, 'Otelo', 'William Shakespeare', 1609, 25),
(84, 'Edipo rey', 'Sófocles', 430, 25),
(85, 'Rojo y negro', 'Stendhal', 1830, 25),
(86, 'Vida y opiniones del caballero Tristram Shandy', 'Laurence Sterne', 1760, 25),
(87, 'La conciencia de Zeno', 'Italo Svevo', 1923, 25),
(88, 'Los viajes de Gulliver', 'Jonathan Swift', 1726, 25),
(89, 'Guerra y paz', 'Lev Tolstói', 1865, 25),
(90, 'Ana Karenina', 'Lev Tolstói', 1877, 25),
(91, 'La muerte de Iván Ilich', 'Lev Tolstói', 1886, 25),
(92, 'Las aventuras de Huckleberry Finn', 'Mark Twain', 1884, 25),
(93, 'Ramayana', 'Valmiki', 0, 25),
(94, 'Eneida', 'Virgilio', 29, 25),
(95, 'Mahabhárata', 'Viasa', 0, 25),
(96, 'Hojas de hierba', 'Walt Whitman', 1855, 25),
(97, 'La señora Dalloway', 'Virginia Woolf', 1925, 25),
(98, 'Al faro', 'Virginia Woolf', 1927, 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `Codigo_de_Libro` int(3) NOT NULL,
  `Codigo_de_Socio` int(3) NOT NULL,
  `Fecha_de_Inicio` date NOT NULL,
  `Fecha_Fin_Prestamo` date NOT NULL,
  `Fecha_de_Devolucion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `Codigo` int(3) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`Codigo`, `Nombre`, `Domicilio`, `Telefono`, `Correo`) VALUES
(1, 'Ramón', 'Paseo Avidez 119, 2º', 967467989, 'ferrer35@correo.net'),
(2, 'Juan', 'Paseo  Omnisciente 60, 1', 960361540, 'gras88@mail.com'),
(3, 'José Antonio', 'Avenida Concepción 201 bis, 3º 5ª', 918215042, 'joscastro@correo.es'),
(4, 'María Carmen', 'Plaza Cóncavo 180, 3º', 981895332, 'm.perez@correo.es'),
(5, 'María José', 'Plaza Vivienda 101, 2º 3ª', 957538207, 'leal67@mail.com'),
(6, 'David', 'Calle Delgadez Difícil 139, 1º', 933405139, 'dpicon@email.es'),
(7, 'David', 'Avenida Renacimiento 83, 6º 6ª', 910041176, 'davidbejarano@email.com'),
(8, 'Pilar', 'Avenida Ave 154, 4º', 971805031, 'pilar.arribas@mail.net'),
(9, 'María', 'Paseo Hidrólisis Interesante 186, 2', 942839940, 'mmartinez94@mail.es'),
(10, 'Ramón', 'Paseo  Excursión Gentil 187, 4', 950898797, 'ram.lozano@mail.com'),
(11, 'Carmen', 'Paseo Adherente Ácido 63, 1', 958745465, 'c.laguna@mail.com'),
(12, 'Antonio', 'Avenida Comprensión Sabia 80, 5', 986368594, 'antoniogabaldon@mail.com'),
(13, 'Julia', 'Plaza Dihíbrido Fuerte 14, 5º 6ª', 987356516, 'juliamulero28@correo.net'),
(14, 'Francisco Javier', 'Avenida Triptongo Alto 41, 5', 919013508, 'fgarcia51@mail.es'),
(15, 'María Isabel', 'Avenida Aflicción Resplandeciente 247, 1º', 956619876, 'sanchez74@mail.com'),
(16, 'José', 'Avenida Conversión Cómica 201, 1º', 941009283, 'jpeñalver@mail.es'),
(17, 'Enrique', 'Plaza de la Necesidad Cruel 175, 1', 951695088, 'ecarrasco@email.net'),
(18, 'Antonio', 'Avenida del Graffiti 260, 3º', 916884092, 'ruiz40@email.com'),
(19, 'Ramona', 'Calle  Irregular 216, 3', 976200216, 'ramonabarrero@mail.com'),
(20, 'Cristina', 'Plaza la Longitud 180, 6º', 986197499, 'c.jimenez@email.es'),
(21, 'Alberto', 'Plaza Probabilidad Pequeña 123, 5º', 934266641, 'albertogarcia65@mail.es'),
(22, 'Enrique', 'Avenida Recibimiento Sensato 281, 6º 4ª', 960108222, 'martin78@correo.com'),
(23, 'Beatriz', 'Paseo de  Convivencia 162, 6', 943768416, 'beatrizbenito@correo.com'),
(24, 'David', 'Calle Agresividad 216, 6º', 964843441, 'davidsaez@correo.com'),
(25, 'Ana', 'Paseo Único 256, 6º 2ª', 934554076, 'anajimenez80@mail.es'),
(26, 'María Carmen', 'Paseo del Vestíbulo 231, 2º', 939844515, 'mariramirez@mail.net'),
(27, 'Manuel', 'Avenida Ribosoma Artístico 166, 1º 1ª', 931897326, 'manborras@email.net'),
(28, 'Sebastián', 'Avenida  Estratega 263, 4º', 912602334, 'sfraile@email.com'),
(29, 'Cristina', 'Calle de lo Trascendental Mentiroso 24, 4', 918032738, 'cri.garcia@mail.es'),
(30, 'Mariano', 'Calle Jabalina Ansiosa 233, 1', 977812114, 'motero@correo.com'),
(31, 'Francisca', 'Calle de la Oposición 19, 6º', 968020119, 'franciscareyes@correo.com'),
(32, 'Francisco', 'Paseo de la Expresión 141, 1', 943217610, 'fraalvarez@email.com'),
(33, 'Juana', 'Calle Programario Santo 128, 2º 5ª', 935169911, 'jualopez@mail.net'),
(34, 'María Luisa', 'Calle el Endoplasmático 77, 6º', 968197599, 'marmolina89@correo.es'),
(35, 'Araceli', 'Calle de  Fabricación Bonita 113, 1', 968442874, 'agarcia@email.com'),
(36, 'María', 'Plaza de la Persistencia 229, 3º', 932241867, 'mpastor@email.com'),
(37, 'Manuel', 'Calle Intencionalidad 217, 3º', 914407103, 'mrosales@email.com'),
(38, 'Josefa', 'Avenida  Evaluación Generosa 299, 1º', 922085549, 'joschaves@email.es'),
(39, 'Alberto', 'Plaza  Vertebrado 259, 4º', 976704344, 'aperez100@mail.net'),
(40, 'María', 'Plaza Tubérculo 211, 1', 955877433, 'maria.alvarez@correo.es'),
(41, 'Carmen', 'Avenida de  Biblia 158, 3', 931295000, 'fuentes10@correo.com'),
(42, 'María Pilar', 'Avenida  Jurídico 223, 6º 4ª', 948791053, 'mariprat@correo.net'),
(43, 'María', 'Plaza  Verboides 215, 3', 957332360, 'marsosa@correo.es'),
(44, 'Ainara', 'Paseo Hipótesis Inquebrantable 156, 3', 932818947, 'ainaraallende@mail.es'),
(45, 'Dolores', 'Paseo Microorganismo 84, 5º', 922589729, 'soriano26@correo.com'),
(46, 'Mercedes', 'Plaza Maquinaria 155, 1º', 915736943, 'mgarcia@email.net'),
(47, 'Juan', 'Plaza  Comunicativo Negro 78, 2', 956168076, 'jayuso27@correo.net'),
(48, 'Carmen', 'Plaza Nacionalismo 276, 1º', 949632601, 'car.seoane@correo.es'),
(49, 'Yolanda', 'Paseo del Astringente Dulce 110, 4º', 968103745, 'yol.martinez@mail.net'),
(50, 'Francisca', 'Plaza Acrobacia Inquebrantable 231 bis, 6º 3ª', 938497547, 'rodriguez14@email.com'),
(51, 'Isabel', 'Avenida Autarquía Audaz 82, 4', 922707710, 'isaserrano16@correo.es'),
(52, 'Enrique', 'Plaza Lúteo 299, 4º', 967430593, 'enriqueruiz@correo.net'),
(53, 'Josefa', 'Avenida Adversario 294, 3º 1ª', 912853031, 'jdelgado@correo.com'),
(54, 'Iván', 'Paseo Adherencia Marrón 148, 6º 6ª', 959047599, 'hidalgo72@correo.net'),
(55, 'Pilar', 'Calle Diezmo 152, 4', 945240726, 'p.mateo@mail.net'),
(56, 'María Begoña', 'Avenida Decisión 61, 5º', 924047447, 'mmuñoz48@mail.es'),
(57, 'Santiago', 'Calle Atribución Pequeña 135, 1º 5ª', 979457856, 's.molero@mail.com'),
(58, 'José', 'Plaza del Perezoso Inteligente 152, 6º 5ª', 945707365, 'carrillo32@mail.com'),
(59, 'Miguel', 'Plaza Adjudicación Veloz 35, 3º 6ª', 956885058, 'sanchez86@mail.es'),
(60, 'Paula', 'Paseo la Abreviatura 191, 6º', 961699975, 'martin73@email.es'),
(61, 'María Carmen', 'Paseo Advertencia 33, 3º', 914453998, 'mariacarmensanchez@correo.com'),
(62, 'Jaime', 'Plaza de lo Relativo Inteligente 159, 4º 1ª', 965401510, 'jaimegoñi@correo.es'),
(63, 'Rubén', 'Paseo Bizcocho 21, 2º 4ª', 958389887, 'rgarcia@email.com'),
(64, 'Antonio', 'Plaza Aforo 239, 1', 915154385, 'antonioperez@email.net'),
(65, 'Víctor', 'Calle  Retículo Audaz 299, 2º 6ª', 959264017, 'tejero61@correo.es'),
(66, 'María Dolores', 'Calle Coherencia 195, 6º', 918813592, 'm.garcia@email.es'),
(67, 'María Dolores', 'Calle la Tragicomedia Verde 209, 2º', 957994467, 'marsaez@mail.net'),
(68, 'Cristina', 'Calle de la Transferencia 219, 2º', 958911502, 'cano79@email.com'),
(69, 'Juan', 'Calle Oposición Cómica 74, 2º 5ª', 924609232, 'juan.rodriguez@email.es'),
(70, 'José', 'Calle la Suciedad Luminosa 65, 1º', 920736763, 'jheredia38@email.es'),
(71, 'María Josefa', 'Paseo lo Macrométrico 290, 3º 5ª', 910760979, 'mgonzalez@mail.com'),
(72, 'Ana María', 'Calle Habitación 174, 1º 6ª', 969850798, 'anvazquez14@email.net'),
(73, 'María Pilar', 'Paseo Subvención Resplandeciente 191, 1º 4ª', 968168915, 'marmendizabal53@email.es'),
(74, 'Antonio', 'Paseo Macrométrico 160, 3º 2ª', 915213354, 'antahmed@mail.net'),
(75, 'Laura', 'Paseo Tradición Nueva 183, 3º', 968854674, 'radu70@correo.net'),
(76, 'Javier', 'Paseo Irreversible Grande 178, 5º 3ª', 967151957, 'javtorres@correo.com'),
(77, 'Dolores', 'Plaza la Bibliografía Roja 156, 1º', 928989828, 'doloressillero@email.com'),
(78, 'Patricia', 'Avenida Virus Prolijo 22, 6º 1ª', 928105119, 'pat.ferrer@correo.net'),
(79, 'Antonio', 'Avenida  Provincia Caliente 22, 3º', 956823359, 'agaray75@mail.es'),
(80, 'Carmen', 'Paseo del Aseverativo Azul 251, 4º', 918633857, 'c.ferreras@mail.com'),
(81, 'Antonio', 'Calle Frontera 196, 1', 958698853, 'antesteve@email.com'),
(82, 'Eduardo', 'Calle  Crecimiento Honesto 185, 1º', 932672723, 'edupina@mail.com'),
(83, 'María Dolores', 'Plaza Concesión 63, 5º 2ª', 965402385, 'marmolina@mail.net'),
(84, 'José Antonio', 'Calle Fotólisis Abierta 77, 2', 976960999, 'josgonzalez@mail.es'),
(85, 'Francisco Javier', 'Avenida Desastroso 142, 2º 5ª', 950966612, 'fmedina54@email.es'),
(86, 'María Dolores', 'Calle de la Insercción Venenosa 45, 6º', 935558343, 'garrido7@correo.com'),
(87, 'José Manuel', 'Avenida de  Graffiti Nuevo 72, 6º 5ª', 968589624, 'gomez22@email.es'),
(88, 'Jaume', 'Calle de  Persistencia 178, 1', 922002795, 'jpoveda14@email.es'),
(89, 'Manuel', 'Calle de  Barbarismo 77, 6º 6ª', 925370497, 'manuellopez45@mail.com'),
(90, 'María José', 'Paseo Conversación Inteligente 258, 5', 986677903, 'mariglesias@correo.com'),
(91, 'Rosa María', 'Calle Invisible 169, 4º', 918391707, 'rosamariamaestro@correo.com'),
(92, 'Luis', 'Paseo del Cívico Deportivo 58, 2', 916102182, 'lui.ramon@correo.es'),
(93, 'Sergi', 'Avenida Cóncavo Bonito 73, 6', 935521490, 'sergigarcia@correo.es'),
(94, 'Luis', 'Paseo Hectárea 147, 4º', 986941392, 'lbonilla69@email.es'),
(95, 'María', 'Plaza de la Limnología 116, 4º', 938685017, 'mariagarcia@correo.es'),
(96, 'Alba', 'Plaza Estrella Estudiosa 170, 4º 4ª', 954748079, 'castillo10@correo.com'),
(97, 'Francisca', 'Paseo Oficial 258, 4º', 937892929, 'fra.rosas@email.es'),
(98, 'Francisco', 'Avenida Vocativo Gordo 105, 2', 948384699, 'franciscoligero18@correo.es'),
(99, 'Pedro', 'Plaza de  Pacífico 191, 5', 913748487, 'ped.rodriguez@email.com'),
(100, 'Mónica', 'Calle Irregular 266, 4', 955344913, 'criado45@mail.net');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`Codigo_de_Libro`,`Codigo_de_Socio`,`Fecha_de_Inicio`);

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
