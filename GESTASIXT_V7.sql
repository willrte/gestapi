-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 29 avr. 2019 à 14:59
-- Version du serveur :  10.1.38-MariaDB-0ubuntu0.18.04.1
-- Version de PHP :  7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GESTASIXT_V7`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`usersio`@`%` PROCEDURE `getAgencyCount` ()  NO SQL
SELECT COUNT(id) AS nbAgency FROM agency$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getAllAgency` ()  NO SQL
SELECT * FROM agency$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getAllRent` ()  NO SQL
SELECT * FROM rent$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getAllUsers` ()  NO SQL
select * from user$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getAllVehicles` ()  NO SQL
SELECT vehicle.id, vehicle.model, vehicle.nbPlaces, vehicle.kilometers, vehicle.registration, vehicle.capacity, vehicle.idAgency, vehicleColor.libelle as 'color', vehicleCategory.libelle as 'category', vehicleBrand.libelle as 'brand' FROM vehicle, vehicleColor, vehicleBrand, vehicleCategory WHERE vehicle.idColor = vehicleColor.id AND vehicle.idBrand = vehicleBrand.id AND vehicle.idCategory = vehicleCategory.id
ORDER BY vehicle.id$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getOneUser` (IN `i_idUser` INT(11) UNSIGNED)  NO SQL
SELECT * FROM user WHERE id = @i_idUser$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getRentCount` ()  NO SQL
SELECT COUNT(id) as nbRents FROM rent$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getUserCount` ()  NO SQL
SELECT COUNT(id) AS nbUsers FROM user$$

CREATE DEFINER=`usersio`@`%` PROCEDURE `getVehicleCount` ()  NO SQL
SELECT COUNT(id) AS nbVehicles FROM vehicle$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `agency`
--

CREATE TABLE `agency` (
  `id` int(10) NOT NULL,
  `adrRoad` varchar(250) NOT NULL,
  `adrCity` varchar(250) NOT NULL,
  `adrPC` int(5) NOT NULL,
  `longitude` float DEFAULT NULL,
  `latitude` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agency`
--

INSERT INTO `agency` (`id`, `adrRoad`, `adrCity`, `adrPC`, `longitude`, `latitude`) VALUES
(1, '9961 Accumsan St.', 'Enschede', 23202, -89.9358, 30.8041),
(2, 'P.O. Box 888, 8601 Libero Avenue', 'Reana del Rojale', 45251, 6.72277, 2.27537),
(3, '695-4654 Odio Street', 'StrŽe', 39333, -70.7129, -8.39715),
(4, '462-5432 Venenatis St.', 'Fontanellato', 54677, -13.1861, -14.9343),
(5, '944-2305 Nec Ave', 'Grand-Manil', 76950, -98.9751, 8.01565),
(6, 'P.O. Box 793, 661 Nulla. Rd.', 'Alva', 16754, -135.519, -34.4821),
(7, 'P.O. Box 291, 8323 Et St.', 'Orilla', 80981, -59.5231, 4.50917),
(8, '8486 Lectus. St.', 'Pumanque', 47012, -103.815, 24.1037),
(9, '840-4213 Phasellus Road', 'Ribnitz-Damgarten', 82241, -29.0454, -9.14503),
(10, '1170 Risus Av.', 'Sorgà', 59966, 125.584, -23.7429),
(11, 'Ap #583-4738 Accumsan Road', 'Sint-Denijs-Westrem', 66703, -100.56, 51.5048),
(12, '1781 Donec Ave', 'Vitry-sur-Seine', 47011, -160.315, -23.5051),
(13, '8865 Nonummy Rd.', 'Munich', 17406, 73.3945, -2.44902),
(14, 'P.O. Box 709, 2806 Facilisis Av.', 'Moffat', 59082, 48.0005, 30.3444),
(15, 'Ap #635-169 Elit, Street', 'Fayetteville', 87614, 141.872, 50.2677),
(16, '146-9831 Integer St.', 'Pudahuel', 18061, -2.63995, -38.4392),
(17, '1288 Maecenas Ave', 'Märsta', 40552, -99.636, -72.7218),
(18, '488-1056 Ipsum Rd.', 'Bailivre', 1058, -37.8864, -32.4179),
(19, '696-4534 Lacinia Road', 'Bon Accord', 2139, -15.9882, 74.2509),
(20, 'P.O. Box 977, 4538 Nec Rd.', 'Port Harcourt', 1796, 139.812, -82.8332),
(21, 'Ap #378-8362 Sem St.', 'Villeneuve-d\'Ascq', 98784, 108.446, -60.055),
(22, 'Ap #572-2759 Sagittis Rd.', 'Vezirköprü', 17776, -142.02, -51.3855),
(23, '7871 Eleifend. Avenue', 'Mejillones', 96312, -58.208, 63.673),
(24, '881-7317 Nisl. Street', 'Naihati', 75306, 68.7294, -17.313),
(25, '886-9325 Ante Av.', 'Blind River', 73177, -145.183, -87.5094),
(26, '230-8001 Semper Road', 'Malartic', 21210, -6.22191, -8.46005),
(27, '420-2311 Adipiscing Avenue', 'Granada', 53366, 129.033, 14.4714),
(28, 'P.O. Box 329, 2019 Sollicitudin Road', 'l\'Ecluse', 8864, 46.97, -69.5794),
(29, '5874 Lacus. Rd.', 'Wilmont', 15212, 31.2121, -15.5055),
(30, 'Ap #363-7361 Ultrices. Road', 'Montjovet', 81873, 108.502, -81.8372),
(31, '881 Imperdiet Street', 'Richmond', 24096, 149.084, -46.1851),
(32, '8109 Augue. St.', 'Brussegem', 20161, -136.333, -68.8144),
(33, 'P.O. Box 678, 2590 Euismod Rd.', 'Tiel', 2221, -107.211, -18.9013),
(34, '5670 Gravida Ave', 'Providencia', 95652, 18.2012, 45.7914),
(35, '613-1566 Dui, Avenue', 'Purén', 18926, 126.368, 46.5848),
(36, 'P.O. Box 471, 1672 Convallis Street', 'Erembodegem', 48526, -133.254, -78.6395),
(37, '263-8190 Quis, St.', 'Wageningen', 14727, -18.9027, 24.3586),
(38, 'Ap #756-9232 Vel Avenue', 'Dignano', 76309, 57.6811, 2.3364),
(39, '195 Non, Rd.', 'Sundrie', 32950, 102.467, -81.4037),
(40, '8989 Lectus. Road', 'Kingston', 83533, -159.476, -58.5492),
(41, '7418 Arcu. Road', 'Purranque', 10831, -22.0333, -79.6907),
(42, '3269 Eu Rd.', 'Miraj', 66745, -173.485, -48.6936),
(43, '420-1726 Pellentesque Ave', 'Stonewall', 61674, 40.7808, -33.2015),
(44, '8408 Sodales St.', 'Ghislarengo', 20835, 127.524, 9.56308),
(45, 'P.O. Box 521, 9656 Eget Ave', 'Bergen Mons', 93658, -131.232, 48.6272),
(46, 'Ap #615-8884 Non, Rd.', 'Arnesano', 28839, -71.2071, -71.2745),
(47, '2049 Dolor St.', 'Verdun', 81454, 171.495, 48.8269),
(48, '754-2777 Pretium St.', 'Dampremy', 11548, 168.713, -60.3386),
(49, 'P.O. Box 428, 577 Vitae, St.', 'Ways', 25600, 34.7963, -40.9457),
(50, 'P.O. Box 382, 9815 Feugiat. St.', 'Hafizabad', 52139, 44.3951, -29.5188),
(51, '120-5201 Ante. Avenue', 'Wasseiges', 40069, 168.508, 18.872),
(52, '803-5464 Libero. Rd.', 'Swan Hills', 20423, -137.87, -79.0736),
(53, 'P.O. Box 317, 4906 Ut St.', 'Açailândia', 34431, -140.882, -3.98155),
(54, '625-3647 Scelerisque, Ave', 'Seattle', 51561, -39.8738, -48.6653),
(55, 'P.O. Box 588, 995 Dapibus St.', 'Grand Rapids', 91851, 179.769, -46.7673),
(56, '512-6888 Sem Ave', 'Eberswalde-Finow', 562, -40.0737, -19.8973),
(57, 'P.O. Box 706, 587 Sem St.', 'La Higuera', 3590, 25.6425, -17.866),
(58, 'Ap #933-7976 Tortor St.', 'Stamford', 2688, -49.0717, 84.9317),
(59, 'P.O. Box 735, 6226 Euismod Ave', 'Pointe-au-Pic', 81394, 28.2864, -78.6524),
(60, 'Ap #211-2633 Elit. Road', 'Castelvecchio di Rocca Barbena', 15404, -71.1686, -69.7593),
(61, 'P.O. Box 668, 7522 Odio Rd.', 'Grand Rapids', 99461, -111.365, 10.3479),
(62, 'Ap #276-9585 Elementum, Rd.', 'Nakusp', 6688, 20.0933, 47.6005),
(63, 'P.O. Box 697, 1338 Cras Rd.', 'South Perth', 53170, -31.6382, -12.9791),
(64, '447-7367 Fusce Avenue', 'Villers-la-Tour', 79801, -42.7197, 60.5673),
(65, '523-1469 A Rd.', 'Sargodha', 83745, 48.1058, 58.907),
(66, 'Ap #320-7715 Massa. Street', 'Silifke', 48356, -4.35403, -39.9983),
(67, '9526 Enim. Ave', 'Sant\'Omero', 62525, -66.6618, -31.186),
(68, '333-9628 Mattis. Av.', 'Overland Park', 92160, 137.987, -18.2749),
(69, 'Ap #548-8511 Sed Rd.', 'Bastia Umbra', 98648, -96.6846, -37.402),
(70, 'P.O. Box 278, 5627 Cras Av.', 'Saint-Urbain', 29134, -139.552, -22.3556),
(71, 'P.O. Box 739, 770 Egestas Street', 'Elversele', 49545, 179.613, 25.2771),
(72, 'P.O. Box 341, 1256 Natoque St.', 'Rodez', 29923, 45.0763, -50.6002),
(73, 'Ap #812-681 Mi. Rd.', 'Bettiah', 58982, 43.4689, -14.4122),
(74, '3976 Nunc Road', 'Laino Castello', 95870, -12.4735, 66.2884),
(75, 'Ap #753-5206 Aliquet Ave', 'Mendonk', 16215, 156.595, -46.0472),
(76, 'P.O. Box 504, 609 Mauris Ave', 'Vejalpur', 55484, 173.357, 50.3031),
(77, '1427 Quis, Rd.', 'Oklahoma City', 61965, -0.66397, -40.7836),
(78, '6823 Phasellus St.', 'Driekapellen', 90039, 98.3465, 42.6777),
(79, 'Ap #806-1326 Erat Rd.', 'Kirkintilloch', 54440, -91.3182, 74.8957),
(80, '5273 Adipiscing St.', 'Sooke', 83138, 51.1719, -10.5628),
(81, 'Ap #770-8765 Eget St.', 'Mostazal', 35076, -12.4161, 13.5332),
(82, 'P.O. Box 851, 5707 Turpis. St.', 'Götzis', 3218, -35.3793, -78.4653),
(83, '1613 A Rd.', 'Sint-Lambrechts-Woluwe', 71304, 67.2588, 41.8508),
(84, 'Ap #206-7994 Odio, St.', 'Tuscaloosa', 99487, -44.0508, 89.9062),
(85, '365-1828 Donec Street', 'Maipú', 67669, -161.229, 56.5428),
(86, '5917 Eget St.', 'Burhanpur', 48071, -21.3819, 57.7133),
(87, 'P.O. Box 220, 3737 Ultricies St.', 'Bozeman', 35862, 157.611, -79.9509),
(88, 'Ap #422-2366 Leo. St.', 'Lembeek', 93444, 93.3599, -19.3872),
(89, '445-5047 Lacinia St.', 'Mülheim', 83881, 89.3167, -78.6815),
(90, 'Ap #935-9989 In Av.', 'Guadalupe', 6448, -122.28, -58.8039),
(91, 'Ap #487-5956 Sed Rd.', 'Los Angeles', 72878, 94.8115, -17.7499),
(92, '5980 Nulla Avenue', 'Osnabrück', 64547, 63.8595, 60.2138),
(93, '7284 Amet Av.', 'Maltignano', 5117, 46.2008, -42.1572),
(94, 'Ap #726-1245 Auctor. Rd.', 'Rohtak', 30937, -8.11966, -6.07748),
(95, 'P.O. Box 659, 4713 Mi Street', 'Noisy-le-Grand', 27599, 158.306, 11.7549),
(96, 'P.O. Box 739, 7018 Ultricies Av.', 'Sorgà', 44707, -109.167, -33.5801),
(97, '906-9951 Eros St.', 'Gujrat', 46208, 67.9821, 47.7278),
(98, 'P.O. Box 638, 4982 Neque Ave', 'Wepion', 32739, -89.4289, -83.1465),
(99, 'Ap #990-245 Consectetuer Ave', 'Gretna', 19695, 146.803, 72.822),
(100, 'Ap #475-3242 Enim. St.', 'Kontich', 6730, -32.3371, 77.493);

-- --------------------------------------------------------

--
-- Structure de la table `rent`
--

CREATE TABLE `rent` (
  `id` int(10) NOT NULL,
  `idVehicle` int(10) NOT NULL,
  `idUser` int(10) NOT NULL,
  `idStartAgency` int(10) NOT NULL,
  `idEndAgency` int(10) DEFAULT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `cost` double NOT NULL,
  `kilometers` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rent`
--

INSERT INTO `rent` (`id`, `idVehicle`, `idUser`, `idStartAgency`, `idEndAgency`, `dateStart`, `dateEnd`, `cost`, `kilometers`) VALUES
(1, 23, 7, 12, 27, '2019-04-02', '2019-04-10', 465, 321),
(2, 23, 7, 12, 27, '2019-04-02', '2019-04-10', 465, 321),
(3, 23, 7, 12, 27, '2019-04-02', '2019-04-10', 465, 321),
(4, 79, 3, 98, 9, '2018-12-18', '2019-02-11', 378, 598),
(5, 10, 3, 55, 98, '2019-01-17', '2019-02-27', 488, 461),
(6, 65, 4, 38, 82, '2019-01-09', '2019-03-10', 102, 372),
(7, 86, 3, 41, 100, '2018-12-26', '2019-03-21', 87, 130),
(8, 39, 5, 76, 24, '2019-01-14', '2019-03-21', 301, 19),
(9, 46, 5, 47, 32, '2019-01-03', '2019-03-13', 246, 10),
(10, 7, 5, 9, 62, '2019-01-22', '2019-02-10', 253, 382),
(11, 79, 5, 99, 64, '2018-12-22', '2019-03-22', 420, 17),
(12, 93, 1, 20, 45, '2018-12-19', '2019-02-21', 363, 287),
(13, 12, 2, 30, 25, '2018-12-12', '2019-02-12', 197, 293),
(14, 87, 1, 18, 49, '2018-12-24', '2019-02-13', 74, 66),
(15, 67, 5, 73, 100, '2018-12-14', '2019-03-24', 147, 269),
(16, 50, 1, 25, 38, '2019-01-21', '2019-03-16', 65, 400),
(17, 84, 3, 54, 73, '2018-12-27', '2019-02-25', 424, 530),
(18, 43, 4, 36, 48, '2018-12-02', '2019-02-20', 217, 101),
(19, 35, 1, 47, 90, '2019-01-05', '2019-02-16', 208, 395),
(20, 92, 5, 68, 16, '2018-12-26', '2019-02-15', 110, 173),
(21, 86, 3, 95, 69, '2019-01-11', '2019-02-28', 145, 313),
(22, 19, 3, 12, 15, '2018-12-21', '2019-03-21', 305, 372),
(23, 67, 5, 29, 44, '2018-12-24', '2019-02-21', 74, 423),
(24, 4, 5, 5, 11, '2018-12-05', '2019-02-11', 102, 180),
(25, 18, 1, 48, 72, '2018-12-25', '2019-03-01', 115, 398),
(26, 19, 2, 73, 67, '2019-01-23', '2019-03-17', 79, 299),
(27, 47, 1, 44, 35, '2018-12-05', '2019-03-25', 390, 91),
(28, 17, 4, 10, 88, '2018-12-10', '2019-02-05', 381, 235),
(29, 62, 3, 51, 81, '2018-12-03', '2019-02-11', 57, 560),
(30, 17, 4, 53, 88, '2018-12-06', '2019-03-05', 101, 155),
(31, 2, 5, 77, 59, '2018-12-11', '2019-03-16', 202, 463),
(32, 97, 2, 39, 96, '2018-12-23', '2019-02-28', 377, 22),
(33, 40, 1, 63, 50, '2018-12-19', '2019-03-30', 308, 209),
(34, 49, 3, 65, 88, '2018-12-19', '2019-03-22', 333, 278),
(35, 60, 3, 55, 29, '2018-12-02', '2019-03-12', 422, 490),
(36, 36, 3, 36, 13, '2019-01-04', '2019-03-30', 193, 599),
(37, 11, 5, 6, 80, '2019-01-18', '2019-03-23', 497, 42),
(38, 59, 4, 69, 65, '2019-01-05', '2019-03-12', 144, 165),
(39, 93, 5, 50, 100, '2019-01-24', '2019-03-24', 124, 302),
(40, 93, 4, 57, 73, '2019-01-05', '2019-02-02', 180, 318),
(41, 3, 1, 40, 93, '2018-12-26', '2019-02-20', 146, 516),
(42, 93, 5, 54, 43, '2019-01-29', '2019-02-23', 420, 342),
(43, 31, 3, 46, 81, '2018-12-06', '2019-02-26', 255, 355),
(44, 9, 3, 76, 11, '2018-12-21', '2019-02-14', 226, 484),
(45, 61, 4, 56, 2, '2018-12-14', '2019-03-16', 277, 60),
(46, 51, 1, 50, 30, '2019-01-28', '2019-02-18', 234, 302),
(47, 52, 5, 19, 9, '2019-01-06', '2019-02-11', 202, 217),
(48, 47, 1, 49, 8, '2018-12-08', '2019-03-01', 371, 512),
(49, 39, 2, 95, 51, '2019-01-06', '2019-03-27', 72, 243),
(50, 43, 1, 24, 6, '2018-12-31', '2019-03-22', 312, 180),
(55, 33, 3, 41, 34, '2018-12-21', '2019-02-23', 278, 225),
(56, 4, 3, 90, 44, '2019-01-10', '2019-02-02', 296, 161),
(57, 2, 5, 27, 42, '2019-03-14', '2019-03-13', 254, 165),
(58, 23, 4, 6, 7, '2018-12-21', '2018-12-24', 255, 165),
(59, 10, 7, 58, 59, '2019-01-19', '2019-01-24', 4549, 322);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `idType` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `adrRoad` varchar(250) NOT NULL,
  `adrCity` varchar(250) NOT NULL,
  `adrPC` int(5) NOT NULL,
  `numTel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `idType`, `name`, `firstname`, `email`, `password`, `adrRoad`, `adrCity`, `adrPC`, `numTel`) VALUES
(1, 1, 'Dieu', 'Jean', 'jean.dieu@gestasixt.com', 'jeandieu', '13 rue le la requëte sql', 'phpville', 13400, '0625483295'),
(2, 1, 'Iencli', 'Jean', 'jean.iencli@gestasixt.com', 'jeaniencli', '4 rue du chemin avec des petits cailloux', 'rocheville', 45060, '0635353535'),
(3, 2, 'Medhi', 'Benchrif', 'medhi.benchrif@gmail.com', 'pwmedhibenchrif', '45 rue du panier de yoplait', 'yaourt-ville', 87000, '0654659887'),
(4, 2, 'Robert', 'Alexandra', 'alexandra.robert@gmail.com', 'pwalexandrarobert', '12 rue du gravier', 'rocherCity', 65000, '0645122378'),
(5, 2, 'Mozzalo', 'Roxanne', 'roxanne.mozzalo@gmail.com', 'pwroxannemozzalo', '65 Rue des fruits', 'pomme-sur-rhone', 11250, '0754653298'),
(7, 2, 'Bess', 'Camil', 'camil.bess@jtm.love', 'pwcamilbess', '10 ter rue de la robe', 'belleville sous le rocher', 84000, '0785452632'),
(8, 2, 'DRAPPIER', 'Quentin', 'drappierq@gmail.com', 'azerty', '5, La poiraudière', 'SaintFlaiveDesLoups', 85150, '0781727521'),
(9, 2, 'gouyonnal', 'theal', 'gouyonnaise@paulchaunu.fr', 'uuruhf', 'rue des gens', 'VilleSainte', 87542, '0754213265'),
(10, 2, 'miquel', 'adrien', 'adrien.miquel@gobelin.com', 'pwmiquel', '4 rue d\'aubigny', 'Aubigny', 85400, '0516457889');

-- --------------------------------------------------------

--
-- Structure de la table `userType`
--

CREATE TABLE `userType` (
  `id` int(10) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userType`
--

INSERT INTO `userType` (`id`, `libelle`) VALUES
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Structure de la table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(10) NOT NULL,
  `idBrand` int(10) NOT NULL,
  `model` varchar(250) DEFAULT NULL,
  `idCategory` int(10) NOT NULL,
  `idColor` int(10) DEFAULT NULL,
  `idAgency` int(10) NOT NULL,
  `nbPlaces` int(2) NOT NULL,
  `kilometers` double NOT NULL,
  `registration` varchar(10) NOT NULL,
  `capacity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicle`
--

INSERT INTO `vehicle` (`id`, `idBrand`, `model`, `idCategory`, `idColor`, `idAgency`, `nbPlaces`, `kilometers`, `registration`, `capacity`) VALUES
(1, 1, '508', 6, 10, 11, 4, 13646, 'IS 224 GU', 2617),
(2, 6, '25', 4, 1, 16, 7, 110487, 'AA 431 CJ', 2724),
(3, 10, 'Rav4', 5, 10, 3, 3, 73595, 'ND 631 AH', 7923),
(4, 5, 'model 3', 1, 3, 23, 5, 18402, 'XO 971 YM', 3658),
(6, 1, 'Mirage', 6, 5, 3, 6, 148786, 'YR 009 UR', 7202),
(7, 4, 'Mirage', 8, 2, 7, 6, 82929, 'DV 755 QW', 5243),
(9, 4, 'Mirage', 4, 2, 19, 6, 85068, 'UW 757 JH', 2818),
(10, 14, 'Mirage', 2, 6, 8, 5, 91796, 'SS 777 BQ', 1028),
(11, 9, 'Mirage', 7, 2, 5, 4, 119986, 'YY 561 XF', 8121),
(12, 14, 'Mirage', 8, 2, 11, 4, 41789, 'ZY 953 ZV', 3055),
(13, 3, 'Mirage', 2, 3, 8, 3, 32168, 'WV 130 LF', 2380),
(14, 15, 'Mirage', 8, 4, 4, 2, 94896, 'RU 336 CG', 8856),
(15, 12, 'Mirage', 8, 7, 20, 2, 55476, 'HY 080 JE', 8734),
(16, 11, 'Mirage', 8, 10, 7, 3, 98911, 'RA 209 YI', 3007),
(17, 1, 'Mirage', 7, 2, 6, 6, 33555, 'TM 625 PF', 201),
(18, 15, 'Mirage', 8, 1, 5, 4, 70828, 'JH 539 VA', 3883),
(19, 1, 'Mirage', 8, 7, 15, 4, 130423, 'TH 137 ZI', 7542),
(20, 7, 'Mirage', 7, 6, 20, 5, 116509, 'DZ 032 FB', 7218),
(21, 12, 'Mirage', 4, 8, 7, 3, 50798, 'MN 863 XF', 6326),
(22, 8, 'Mirage', 8, 8, 16, 2, 121652, 'IW 966 IB', 1294),
(23, 15, 'Mirage', 2, 6, 25, 5, 128961, 'VO 262 UL', 5848),
(24, 9, 'Mirage', 4, 10, 3, 6, 61175, 'SA 753 VR', 6461),
(25, 4, 'Mirage', 3, 8, 12, 7, 35631, 'AH 146 HP', 4727),
(26, 5, 'Mirage', 5, 10, 6, 4, 49568, 'HA 781 ER', 1263),
(27, 12, 'Mirage', 5, 10, 1, 7, 56006, 'PI 986 ZF', 2084),
(28, 15, 'Mirage', 6, 2, 10, 3, 120637, 'RC 161 LJ', 2257),
(29, 14, 'Mirage', 1, 7, 21, 2, 95966, 'VO 717 WG', 7905),
(30, 10, 'Mirage', 6, 6, 4, 2, 77487, 'XF 322 QH', 4126),
(31, 10, 'Mirage', 7, 2, 5, 4, 105660, 'QW 982 DS', 6157),
(32, 13, 'Mirage', 1, 7, 15, 5, 89464, 'ZD 613 BY', 8558),
(33, 13, 'Mirage', 7, 3, 16, 7, 30333, 'DA 446 ZH', 7294),
(34, 5, 'Mirage', 6, 2, 8, 2, 56881, 'XA 776 AH', 2525),
(35, 5, 'Mirage', 1, 2, 20, 2, 123809, 'ET 191 PV', 1716),
(36, 4, 'Mirage', 6, 8, 8, 3, 101135, 'IV 004 JX', 5017),
(37, 15, 'Mirage', 2, 2, 24, 3, 34780, 'KN 440 YM', 4114),
(38, 4, 'Mirage', 5, 9, 15, 5, 13823, 'IL 606 ZX', 2660),
(39, 3, 'Mirage', 1, 8, 12, 3, 38816, 'TA 634 GU', 4216),
(40, 8, 'Mirage', 5, 10, 23, 6, 14316, 'DJ 374 PC', 2519),
(41, 9, 'Mirage', 5, 7, 5, 3, 106101, 'YV 860 YB', 1280),
(42, 1, 'Mirage', 4, 7, 10, 5, 68931, 'AL 218 LP', 922),
(43, 10, 'Mirage', 1, 3, 3, 7, 28403, 'ZZ 937 PN', 4245),
(44, 5, 'Mirage', 6, 6, 13, 2, 54700, 'OI 857 LS', 6620),
(45, 14, 'Mirage', 8, 10, 8, 3, 123458, 'BY 271 BE', 8454),
(46, 11, 'Mirage', 8, 8, 14, 6, 105778, 'MZ 117 NT', 7403),
(47, 11, 'Mirage', 8, 3, 19, 7, 78001, 'GN 103 NC', 924),
(48, 14, 'Mirage', 1, 5, 12, 2, 72253, 'WQ 599 VP', 4158),
(49, 5, 'Mirage', 4, 7, 17, 7, 147983, 'GD 011 BC', 5066),
(50, 14, 'Mirage', 4, 9, 8, 7, 135315, 'YI 865 OS', 1704),
(51, 3, 'Mirage', 5, 7, 6, 4, 14098, 'VZ 343 QF', 3078),
(52, 3, 'Mirage', 3, 5, 4, 7, 71023, 'NH 963 HZ', 7793),
(53, 2, 'Mirage', 3, 5, 24, 5, 79647, 'GA 341 MC', 7824),
(54, 8, 'Mirage', 5, 6, 3, 4, 78738, 'KY 266 WV', 3582),
(55, 9, 'Mirage', 7, 3, 4, 7, 27590, 'EF 301 DC', 5245),
(56, 4, 'Mirage', 1, 5, 4, 2, 46141, 'XN 943 YL', 7006),
(57, 8, 'Mirage', 4, 9, 22, 4, 51469, 'UA 262 IX', 1513),
(58, 14, 'Mirage', 7, 6, 1, 3, 10134, 'HM 433 YY', 1167),
(59, 9, 'Mirage', 8, 6, 22, 5, 40366, 'ZH 006 OR', 8358),
(60, 1, 'Mirage', 3, 10, 6, 4, 44695, 'DF 508 DJ', 6340),
(61, 7, 'Mirage', 5, 10, 19, 6, 106380, 'QY 358 AR', 6005),
(62, 5, 'Mirage', 8, 2, 20, 3, 132778, 'DD 496 SB', 8553),
(63, 8, 'Mirage', 7, 10, 25, 7, 76225, 'UB 281 DX', 6190),
(64, 2, 'Mirage', 4, 7, 2, 3, 19059, 'YR 795 KB', 9720),
(65, 4, 'Mirage', 5, 6, 5, 2, 26950, 'CB 239 TF', 1463),
(66, 7, 'Mirage', 2, 4, 8, 4, 62645, 'BI 047 UA', 7889),
(67, 7, 'Mirage', 8, 2, 16, 3, 98261, 'ML 566 FG', 8991),
(68, 9, 'Mirage', 4, 8, 4, 7, 63074, 'ZQ 756 TW', 4597),
(69, 9, 'Mirage', 7, 9, 7, 2, 105192, 'CV 506 TL', 5296),
(70, 7, 'Mirage', 3, 4, 5, 5, 137941, 'SJ 668 VC', 4868),
(71, 2, 'Mirage', 7, 4, 19, 2, 104183, 'JF 367 AR', 7829),
(72, 9, 'Mirage', 6, 6, 12, 2, 122021, 'IQ 482 BV', 4473),
(73, 13, 'Mirage', 4, 6, 4, 3, 132617, 'GJ 793 SI', 2553),
(74, 3, 'Mirage', 8, 10, 16, 5, 82622, 'VL 916 TR', 6249),
(75, 7, 'Mirage', 2, 9, 24, 7, 144135, 'BB 659 JP', 8761),
(76, 4, 'Mirage', 1, 1, 18, 6, 129166, 'XW 302 XT', 1675),
(77, 2, 'Mirage', 7, 6, 6, 2, 128495, 'OD 876 FG', 7554),
(78, 15, 'Mirage', 1, 5, 2, 4, 41346, 'HI 052 KC', 9445),
(79, 11, 'Mirage', 3, 10, 17, 7, 107263, 'WJ 599 WY', 8273),
(80, 5, 'Mirage', 6, 5, 11, 7, 87323, 'AN 855 VR', 7861),
(81, 6, 'Mirage', 3, 8, 24, 3, 68390, 'AT 599 WT', 8896),
(82, 12, 'Mirage', 3, 4, 10, 2, 31533, 'NS 132 HS', 3579),
(83, 7, 'Mirage', 2, 8, 6, 6, 127817, 'ZS 995 CZ', 2013),
(84, 8, 'Mirage', 3, 3, 17, 6, 128536, 'LV 329 AU', 5763),
(85, 10, 'Mirage', 7, 2, 18, 6, 100224, 'DV 142 WK', 3340),
(86, 6, 'Mirage', 1, 7, 17, 3, 54772, 'KQ 782 CV', 1263),
(87, 13, 'Mirage', 7, 1, 13, 3, 124074, 'CD 581 JD', 1642),
(88, 8, 'Mirage', 2, 7, 4, 4, 54162, 'TY 471 CW', 9174),
(89, 3, 'Mirage', 5, 2, 19, 2, 11116, 'ZJ 776 YT', 5889),
(90, 7, 'Mirage', 8, 10, 25, 7, 51323, 'AA 291 GW', 8140),
(91, 7, 'Mirage', 2, 5, 8, 2, 133470, 'GO 127 OG', 7810),
(92, 4, 'Mirage', 4, 7, 15, 6, 11670, 'VT 499 MB', 1819),
(93, 14, 'Mirage', 8, 5, 9, 4, 39466, 'LA 698 OQ', 6191),
(94, 10, 'Mirage', 4, 9, 13, 5, 46116, 'TZ 170 AL', 3048),
(95, 3, 'Mirage', 6, 8, 16, 6, 118111, 'YM 933 QK', 2207),
(96, 12, 'Mirage', 1, 4, 16, 5, 126742, 'BX 165 VX', 2448),
(97, 10, 'Mirage', 2, 3, 9, 6, 145671, 'MD 881 QX', 5499),
(98, 13, 'Mirage', 7, 10, 8, 2, 63861, 'GH 952 AZ', 5414),
(99, 5, 'Mirage', 7, 7, 15, 7, 107193, 'IT 442 CZ', 4472),
(100, 12, 'Mirage', 6, 1, 3, 7, 131657, 'DU 934 FG', 8233),
(101, 1, 'laguna', 4, 2, 5, 8, 600000, 'JA444AJ', 40),
(102, 6, 'ouitoutafait', 5, 4, 46, 4, 120000, 'JU462KL', 45),
(103, 5, 'Mustang', 6, 8, 8, 4, 65000, 'ML457JG', 400),
(104, 2, '308 Phase 2', 4, 1, 5, 5, 16000, 'ML 752 KJ', 500);

-- --------------------------------------------------------

--
-- Structure de la table `vehicleBrand`
--

CREATE TABLE `vehicleBrand` (
  `id` int(10) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicleBrand`
--

INSERT INTO `vehicleBrand` (`id`, `libelle`) VALUES
(1, 'Renaud'),
(2, 'Peugeot'),
(3, 'Toyota'),
(4, 'Ferrari'),
(5, 'Ford'),
(6, 'Kia'),
(7, 'Dodge'),
(8, 'Audi'),
(9, 'Citroën'),
(10, 'Cadillac'),
(11, 'Volvo'),
(12, 'Mitsubishi'),
(13, 'BWM'),
(14, 'Nissan'),
(15, 'Land Rover');

-- --------------------------------------------------------

--
-- Structure de la table `vehicleCategory`
--

CREATE TABLE `vehicleCategory` (
  `id` int(10) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicleCategory`
--

INSERT INTO `vehicleCategory` (`id`, `libelle`) VALUES
(1, 'Citadine'),
(2, 'Utilitaire'),
(3, 'Semi-remorque'),
(4, 'Berline'),
(5, 'Monospace'),
(6, 'Sportive'),
(7, 'Compacte'),
(8, 'Décapotable');

-- --------------------------------------------------------

--
-- Structure de la table `vehicleColor`
--

CREATE TABLE `vehicleColor` (
  `id` int(10) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicleColor`
--

INSERT INTO `vehicleColor` (`id`, `libelle`) VALUES
(1, 'Noir'),
(2, 'Blanc'),
(3, 'Métalisé'),
(4, 'Gris'),
(5, 'Rouge'),
(6, 'Bleu Roi'),
(7, 'Bleu ciel'),
(8, 'Orange'),
(9, 'Vert'),
(10, 'Gris Mat');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVehicle` (`idVehicle`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idStartAgency` (`idStartAgency`),
  ADD KEY `idEndAgency` (`idEndAgency`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idType` (`idType`);

--
-- Index pour la table `userType`
--
ALTER TABLE `userType`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`),
  ADD KEY `idColor` (`idColor`),
  ADD KEY `idAgency` (`idAgency`),
  ADD KEY `idBrand` (`idBrand`);

--
-- Index pour la table `vehicleBrand`
--
ALTER TABLE `vehicleBrand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicleCategory`
--
ALTER TABLE `vehicleCategory`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicleColor`
--
ALTER TABLE `vehicleColor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT pour la table `vehicleBrand`
--
ALTER TABLE `vehicleBrand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `vehicleCategory`
--
ALTER TABLE `vehicleCategory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `vehicleColor`
--
ALTER TABLE `vehicleColor`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `fk_endAgency` FOREIGN KEY (`idEndAgency`) REFERENCES `agency` (`id`),
  ADD CONSTRAINT `fk_startAgency` FOREIGN KEY (`idStartAgency`) REFERENCES `agency` (`id`),
  ADD CONSTRAINT `fk_userRent` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_vehicleRent` FOREIGN KEY (`idVehicle`) REFERENCES `vehicle` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_userType` FOREIGN KEY (`idType`) REFERENCES `userType` (`id`);

--
-- Contraintes pour la table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `fk_vehicleAgency` FOREIGN KEY (`idAgency`) REFERENCES `agency` (`id`),
  ADD CONSTRAINT `fk_vehicleBrand` FOREIGN KEY (`idBrand`) REFERENCES `vehicleBrand` (`id`),
  ADD CONSTRAINT `fk_vehicleCategory` FOREIGN KEY (`idCategory`) REFERENCES `vehicleCategory` (`id`),
  ADD CONSTRAINT `fk_vehicleColor` FOREIGN KEY (`idColor`) REFERENCES `vehicleColor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
