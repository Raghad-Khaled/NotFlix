-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 11:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notflixdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `acted_movie`
--

CREATE TABLE `acted_movie` (
  `MOVIE_ID` int(11) NOT NULL,
  `ACTOR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acted_movie`
--

INSERT INTO `acted_movie` (`MOVIE_ID`, `ACTOR_ID`) VALUES
(1, 7),
(1, 8),
(1, 9),
(2, 10),
(2, 11),
(2, 20),
(9, 19),
(9, 20),
(10, 22),
(10, 23),
(11, 28),
(11, 29),
(11, 66),
(12, 31),
(12, 32),
(13, 34),
(13, 35),
(14, 37),
(14, 38),
(15, 40),
(15, 41),
(16, 10),
(16, 43),
(17, 39),
(17, 45),
(18, 47),
(18, 48),
(19, 53),
(19, 54),
(20, 7),
(20, 26),
(21, 10),
(21, 56),
(22, 61),
(22, 62),
(23, 20),
(23, 38),
(24, 65),
(24, 66),
(25, 16),
(25, 17),
(25, 18);

-- --------------------------------------------------------

--
-- Table structure for table `acted_series`
--

CREATE TABLE `acted_series` (
  `SERIES_ID` int(11) NOT NULL,
  `ACTOR_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acted_series`
--

INSERT INTO `acted_series` (`SERIES_ID`, `ACTOR_ID`) VALUES
(1, 301),
(2, 302),
(3, 303),
(4, 304),
(5, 305),
(6, 306),
(7, 307),
(8, 308),
(9, 309),
(10, 310),
(11, 311),
(12, 312),
(13, 313),
(14, 314),
(15, 315),
(16, 316),
(17, 317),
(18, 318),
(19, 319),
(20, 320);

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `LNAME` varchar(100) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `BIRTH_DATE` date DEFAULT NULL,
  `IMAGE` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`ID`, `FNAME`, `LNAME`, `GENDER`, `BIRTH_DATE`, `IMAGE`) VALUES
(7, ' Christian', 'Bale', 'M', '1974-01-30', 'https://m.media-amazon.com/images/M/MV5BMTkxMzk4MjQ4MF5BMl5BanBnXkFtZTcwMzExODQxOA@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(8, ' Heath', 'Ledger', 'M', '1979-04-04', 'https://m.media-amazon.com/images/M/MV5BMTI2NTY0NzA4MF5BMl5BanBnXkFtZTYwMjE1MDE0._V1_UX214_CR0,0,214,317_AL_.jpg'),
(9, '  Maggie', 'Gyllenhaal', 'F', '1977-11-16', 'https://m.media-amazon.com/images/M/MV5BMTM1MjY3NzA4NF5BMl5BanBnXkFtZTcwNzE4MjMyMw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(10, '  Leonardo', 'DiCaprio', 'M', '1974-11-11', 'https://m.media-amazon.com/images/M/MV5BMjI0MTg3MzI0M15BMl5BanBnXkFtZTcwMzQyODU2Mw@@._V1_UY317_CR10,0,214,317_AL_.jpg'),
(11, 'Joseph', 'Gordon-Levitt', 'M', '1981-02-17', 'https://m.media-amazon.com/images/M/MV5BMTY3NTk0NDI3Ml5BMl5BanBnXkFtZTgwNDA3NjY0MjE@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(12, ' Lukas', 'Haas', 'M', '1976-04-06', 'https://m.media-amazon.com/images/M/MV5BMTQ3MjU1MDMxM15BMl5BanBnXkFtZTgwODk5ODE4MDE@._V1_UY317_CR10,0,214,317_AL_.jpg'),
(13, ' Song', 'Kang-Ho', 'M', '1967-01-17', 'https://m.media-amazon.com/images/M/MV5BYjYyYzcyZTAtY2I4Yy00NGE2LThiNzYtYmVjNGIyNWU2YjVkXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(14, ' Lee', 'Sun-kyun', 'M', '1975-03-02', 'https://m.media-amazon.com/images/M/MV5BZWNhYTI0OTctODExYi00MDAyLWI3ZmEtNGYwMmJiMjhhOGU4XkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(15, '  Cho', 'Yeo-jeong', 'F', '1981-02-10', 'https://m.media-amazon.com/images/M/MV5BYzI3YWY1MjQtZDhmMC00MWFlLTk3NWYtMzU3MDYxNTcxZmUwXkEyXkFqcGdeQXVyNTI5NjIyMw@@._V1_UY317_CR20,0,214,317_AL_.jpg'),
(16, 'Joaquin', 'Phoenix', 'M', '1974-10-28', 'https://m.media-amazon.com/images/M/MV5BZGMyY2Q4NTEtMWVkZS00NzcwLTkzNmQtYzBlMWZhZGNhMDhkXkEyXkFqcGdeQXVyNjk1MjYyNTA@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(17, 'Robert', 'De Niro', 'M', '1943-08-17', 'https://m.media-amazon.com/images/M/MV5BMjAwNDU3MzcyOV5BMl5BanBnXkFtZTcwMjc0MTIxMw@@._V1_UY317_CR13,0,214,317_AL_.jpg'),
(18, 'Zazie', 'Beetz', 'F', '1991-05-25', 'https://m.media-amazon.com/images/M/MV5BMGEwYjU2NDgtZTQwZi00MmI3LWIwNjQtYmRmM2M3MThkMzM4XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(19, 'Charlize', 'Theron', 'F', '1975-08-09', 'https://m.media-amazon.com/images/M/MV5BMTk5Mzc4ODU0Ml5BMl5BanBnXkFtZTcwNjU1NTI0Mw@@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(20, ' Tom', 'Hardy', 'M', '1977-09-15', 'https://m.media-amazon.com/images/M/MV5BMTQ3ODEyNjA4Nl5BMl5BanBnXkFtZTgwMTE4ODMyMjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(21, ' Nicholas', 'Hoult', 'M', '1989-12-07', 'https://m.media-amazon.com/images/M/MV5BMTUxMTYxNzMzNF5BMl5BanBnXkFtZTcwMTU0NTcxOQ@@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(22, ' Elisabeth', 'Moss', 'F', '1987-07-24', 'https://m.media-amazon.com/images/M/MV5BNTMwMDg1MDkyNV5BMl5BanBnXkFtZTcwNzEwMzg1Nw@@._V1_UY317_CR131,0,214,317_AL_.jpg'),
(23, ' Oliver', 'Jackson-Cohen', 'M', '1986-10-24', 'https://m.media-amazon.com/images/M/MV5BMTg3OTI0NDA2MF5BMl5BanBnXkFtZTcwNDAyMDYzNw@@._V1_UY317_CR5,0,214,317_AL_.jpg'),
(24, ' Harriet', 'Dyer ', 'F', '1991-10-24', 'https://m.media-amazon.com/images/M/MV5BZjhlZTFiZDAtMWVlMi00MzYxLWI1ZjItOThiNzkyMjZlYTEwXkEyXkFqcGdeQXVyMTExNDQ2MTI@._V1_UY317_CR105,0,214,317_AL_.jpg'),
(25, ' Dafne', 'Keen', 'F', '2005-01-04', 'https://m.media-amazon.com/images/M/MV5BNjQyMzk2MDA5N15BMl5BanBnXkFtZTgwNDAyMzUxNDM@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(26, ' Hugh', 'Jackman', 'M', '1968-10-12', 'https://m.media-amazon.com/images/M/MV5BNDExMzIzNjk3Nl5BMl5BanBnXkFtZTcwOTE4NDU5OA@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(27, ' Patrick', 'Stewart ', 'M', '1940-07-13', 'https://m.media-amazon.com/images/M/MV5BMTc0MzU5ODQ5OF5BMl5BanBnXkFtZTYwODIwODk1._V1_UY317_CR4,0,214,317_AL_.jpg'),
(28, 'Ryan', 'Gosling', 'M', '1980-11-12', 'https://m.media-amazon.com/images/M/MV5BMTQzMjkwNTQ2OF5BMl5BanBnXkFtZTgwNTQ4MTQ4MTE@._V1_UY317_CR18,0,214,317_AL_.jpg'),
(29, 'Dave', 'Bautista', 'M', '1969-01-18', 'https://m.media-amazon.com/images/M/MV5BNTZkYzU0ZGUtZTk1MC00MzJjLWFmMzItY2M0ODY1ZmI2OGQ0XkEyXkFqcGdeQXVyMjI0MjgwNjc@._V1_UY317_CR175,0,214,317_AL_.jpg'),
(30, 'Robin', 'Wright', 'F', '1966-04-08', 'https://m.media-amazon.com/images/M/MV5BMTU0NTc4MzEyOV5BMl5BanBnXkFtZTcwODY0ODkzMQ@@._V1_UY317_CR4,0,214,317_AL_.jpg'),
(31, 'Amy', 'Adams', 'F', '1974-08-20', 'https://m.media-amazon.com/images/M/MV5BMTg2NTk2MTgxMV5BMl5BanBnXkFtZTgwNjcxMjAzMTI@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(32, 'Jeremy', 'Renner', 'M', '1971-01-07', 'https://m.media-amazon.com/images/M/MV5BOTk2NDc2ODgzMF5BMl5BanBnXkFtZTcwMTMzOTQ4Nw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(33, 'Forest', 'Whitaker', 'M', '1961-07-15', 'https://m.media-amazon.com/images/M/MV5BMTQzMDI3NTg2OV5BMl5BanBnXkFtZTcwNTgwMzg5Mg@@._V1_UY317_CR13,0,214,317_AL_.jpg'),
(34, 'Ben', 'Affleck', 'M', '1972-08-15', 'https://m.media-amazon.com/images/M/MV5BMTI4MzIxMTk0Nl5BMl5BanBnXkFtZTcwOTU5NjA0Mg@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(35, 'Rosamund', 'Pike', 'F', '1979-06-27', 'https://m.media-amazon.com/images/M/MV5BNDQ5MDIyMjg3NV5BMl5BanBnXkFtZTgwOTU2NTE0NDM@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(36, ' Neil', 'Patrick', 'M', '1973-06-15', 'https://m.media-amazon.com/images/M/MV5BMTUxNjQ4MjU5Ml5BMl5BanBnXkFtZTcwMTY5NzAzNw@@._V1_UY317_CR14,0,214,317_AL_.jpg'),
(37, 'James', 'McAvoy', 'M', '1979-04-21', 'https://m.media-amazon.com/images/M/MV5BMTQzNzIxOTYzMl5BMl5BanBnXkFtZTcwNjYxNTk1Nw@@._V1_UY317_CR14,0,214,317_AL_.jpg'),
(38, 'Michael', 'Fassbender', 'M', '1977-04-02', 'https://m.media-amazon.com/images/M/MV5BMTk0NjM2MTE5M15BMl5BanBnXkFtZTcwODIxMzcyNw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(39, 'Jennifer', 'Lawrence', 'F', '1990-08-15', 'https://m.media-amazon.com/images/M/MV5BOTU3NDE5MDQ4MV5BMl5BanBnXkFtZTgwMzE5ODQ3MDI@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(40, 'Chris', 'Evans', 'M', '1981-06-13', 'https://m.media-amazon.com/images/M/MV5BMTU2NTg1OTQzMF5BMl5BanBnXkFtZTcwNjIyMjkyMg@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(41, 'Hayley', 'Atwell', 'F', '1982-04-05', 'https://m.media-amazon.com/images/M/MV5BZmRhZWVjZWMtMzUwZi00OTI3LThiMzAtY2VmMjU5YjQ0YjVjXkEyXkFqcGdeQXVyODMzMTM1MDc@._V1_UY317_CR16,0,214,317_AL_.jpg'),
(42, 'Sebastian', 'Stan', 'M', '1982-08-13', 'https://m.media-amazon.com/images/M/MV5BNTk2OGU4NzktODhhOC00Nzc2LWIyNzYtOWViMjljZGFiNTMxXkEyXkFqcGdeQXVyMTE1NTQwOTk@._V1_UY317_CR15,0,214,317_AL_.jpg'),
(43, 'Mark', 'Ruffalo', 'M', '1976-11-22', 'https://m.media-amazon.com/images/M/MV5BNWIzZTI1ODUtZTUzMC00NTdiLWFlOTYtZTg4MGZkYmU4YzNlXkEyXkFqcGdeQXVyNTExOTk5Nzg@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(44, 'Michelle', 'Williams', 'F', '1980-09-09', 'https://m.media-amazon.com/images/M/MV5BMjExNjY5NDY0MV5BMl5BanBnXkFtZTgwNjQ1Mjg1MTI@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(45, 'Josh', 'Hutcherson', 'M', '1992-10-12', 'https://m.media-amazon.com/images/M/MV5BMTI4OTk0MjQ1OV5BMl5BanBnXkFtZTcwNTE3NjM3Mw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(46, 'Liam', 'Hemsworth', 'M', '1990-01-13', 'https://m.media-amazon.com/images/M/MV5BMTQ5ODI0MDc4M15BMl5BanBnXkFtZTgwNTM5MDk3MTE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(47, 'Ansel', 'Elgort', 'M', '1993-03-14', 'https://m.media-amazon.com/images/M/MV5BZTk1NWNmMTEtODdiMS00YzQ1LTg4MDQtMDczMzU5OGM3ZGFhXkEyXkFqcGdeQXVyODIzMDE1OTg@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(48, 'Jon', 'Bernthal', 'M', '1976-09-20', 'https://m.media-amazon.com/images/M/MV5BMTcwNzA5MDg0OV5BMl5BanBnXkFtZTcwMTU2NjE0Nw@@._V1_UY317_CR9,0,214,317_AL_.jpg'),
(49, 'Jon', 'Hamm', 'M', '1971-03-10', 'https://m.media-amazon.com/images/M/MV5BNzg0MzA4MTY5M15BMl5BanBnXkFtZTcwODg2MTIwOQ@@._V1_UY317_CR2,0,214,317_AL_.jpg'),
(50, 'Sandra', 'Bullock', 'F', '1964-07-26', 'https://m.media-amazon.com/images/M/MV5BMTI5NDY5NjU3NF5BMl5BanBnXkFtZTcwMzQ0MTMyMw@@._V1_UY317_CR1,0,214,317_AL_.jpg'),
(51, 'George', 'Clooney', 'M', '1961-05-06', 'https://m.media-amazon.com/images/M/MV5BMjEyMTEyOTQ0MV5BMl5BanBnXkFtZTcwNzU3NTMzNw@@._V1_UY317_CR9,0,214,317_AL_.jpg'),
(52, ' Ed', 'Harris', 'M', '1950-11-28', 'https://m.media-amazon.com/images/M/MV5BMjE4NDM4ODc2OV5BMl5BanBnXkFtZTcwNzA5NjQ5MQ@@._V1_UY317_CR7,0,214,317_AL_.jpg'),
(53, ' Benedict', 'Cumberbatch', 'M', '1976-07-19', 'https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_UY317_CR2,0,214,317_AL_.jpg'),
(54, ' Keira', 'Knightley', 'F', '1985-03-26', 'https://m.media-amazon.com/images/M/MV5BMTYwNDM0NDA3M15BMl5BanBnXkFtZTcwNTkzMjQ3OA@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(55, ' Scarlett ', 'Johansson', 'F', '1984-11-22', 'https://m.media-amazon.com/images/M/MV5BMTM3OTUwMDYwNl5BMl5BanBnXkFtZTcwNTUyNzc3Nw@@._V1_UY317_CR23,0,214,317_AL_.jpg'),
(56, 'Matt', 'Damon', 'M', '1970-10-08', 'https://m.media-amazon.com/images/M/MV5BMTM0NzYzNDgxMl5BMl5BanBnXkFtZTcwMDg2MTMyMw@@._V1_UY317_CR11,0,214,317_AL_.jpg'),
(57, 'Jack', 'Nicholson', 'M', '1937-04-22', 'https://m.media-amazon.com/images/M/MV5BMTQ3OTY0ODk0M15BMl5BanBnXkFtZTYwNzE4Njc4._V1_UY317_CR7,0,214,317_AL_.jpg'),
(58, 'Anya', 'Taylor-Joy', 'F', '1996-04-16', 'https://m.media-amazon.com/images/M/MV5BYWUxMzhlM2QtNDM5MS00OThlLTlhZDEtMDhlNTliZDIzZGQ1XkEyXkFqcGdeQXVyNzcyNzc0NzE@._V1_UY317_CR19,0,214,317_AL_.jpg'),
(59, 'Haley', 'Lu Richardson', 'F', '1995-03-07', 'https://m.media-amazon.com/images/M/MV5BOTU0MjFiMmYtZjA4MC00MTA1LWI2NDctZDY1MDg4MGE3ZjAxXkEyXkFqcGdeQXVyMjg2MzUwNjc@._V1_UY317_CR131,0,214,317_AL_.jpg'),
(60, 'Cole', 'Sprouse', 'M', '1992-08-04', 'https://m.media-amazon.com/images/M/MV5BZGY4ZmI1YWMtOWY1Mi00YmYzLTliYzItZTMzOWNiZmUxMDgzXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(61, ' Finn', 'Wolfhard', 'M', '2002-12-23', 'https://m.media-amazon.com/images/M/MV5BYjM2NmFiNGYtODQ1OC00ZTE5LTg4ZWYtYjFmODk4YmUyZDMzXkEyXkFqcGdeQXVyNjQ3NDAwOTA@._V1_UY317_CR20,0,214,317_AL_.jpg'),
(62, ' Jaeden', 'Martell', 'M', '2003-01-04', 'https://m.media-amazon.com/images/M/MV5BYmNkZjgwZmYtNzNjOC00ZGUxLTgzMmQtYWU0NDQyNmE4NWM5XkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(63, ' Sophia', 'Lillis', 'F', '2002-02-13', 'https://m.media-amazon.com/images/M/MV5BYWZjYjA0MWItNmExYS00M2JmLTlhZjAtNjIyYWUzOGJlZDNlXkEyXkFqcGdeQXVyMTA1ODAyOTI1._V1_UY317_CR12,0,214,317_AL_.jpg'),
(64, 'Riz', 'Ahmed', 'M', '1982-01-12', 'https://m.media-amazon.com/images/M/MV5BMTcxMTQ4MzY2Nl5BMl5BanBnXkFtZTgwMzAxOTY3MjI@._V1_UY317_CR13,0,214,317_AL_.jpg'),
(65, ' Daniel', 'Craig', 'M', '1968-03-02', 'https://m.media-amazon.com/images/M/MV5BMjEzMjk4NDU4MF5BMl5BanBnXkFtZTcwMDMyNjQzMg@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(66, ' Ana', 'de Armas', 'F', '1988-04-30', 'https://m.media-amazon.com/images/M/MV5BMzQzMTQyZjItNjdiNC00NGQzLTk3ODAtZGJhOGJlNzExMTU0XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(67, '  Jake', 'Gyllenhaal', 'M', '1980-12-19', 'https://m.media-amazon.com/images/M/MV5BNjA0MTU2NDY3MF5BMl5BanBnXkFtZTgwNDU4ODkzMzE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(68, 'Viola', 'Davis', 'F', '1965-08-11', 'https://m.media-amazon.com/images/M/MV5BNzUxNjM4ODI1OV5BMl5BanBnXkFtZTgwNTEwNDE2OTE@._V1_UY317_CR22,0,214,317_AL_.jpg'),
(69, 'Keanu', 'Reeves', 'M', '1964-09-02', 'https://m.media-amazon.com/images/M/MV5BNjUxNDcwMTg4Ml5BMl5BanBnXkFtZTcwMjU4NDYyOA@@._V1_UY317_CR15,0,214,317_AL_.jpg'),
(70, ' Michael', 'Nyqvist', 'M', '1960-11-08', 'https://m.media-amazon.com/images/M/MV5BMTg1MDM4MTg1NV5BMl5BanBnXkFtZTcwMTExOTcwNw@@._V1_UY317_CR9,0,214,317_AL_.jpg'),
(71, '  Alfie', 'Allen', 'M', '1986-09-12', 'https://m.media-amazon.com/images/M/MV5BMjAyMTI1OGYtNWQxMC00ZWJmLTgyOGMtN2RmNDUwZTQ2NTM3XkEyXkFqcGdeQXVyNjk1MjYyNTA@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(72, '  Alicia', 'Vikander', 'F', '1988-10-03', 'https://m.media-amazon.com/images/M/MV5BZmMxYzk1OWEtMjE0MC00NTRlLTgwNTEtMGQ1YjA1Yzg1Nzc3XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(73, '  Domhnall', 'Gleeson', 'M', '1983-05-12', 'https://m.media-amazon.com/images/M/MV5BMjA5MjI0MzY2MF5BMl5BanBnXkFtZTcwMzM3ODM3OA@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(74, '  Woody', 'Harrelson', 'M', '1961-07-23', 'https://m.media-amazon.com/images/M/MV5BMTU3NDc2ODc4MF5BMl5BanBnXkFtZTcwODk2MzAyMg@@._V1_UY317_CR1,0,214,317_AL_.jpg'),
(75, ' Jesse', 'Eisenberg', 'M', '1983-10-05', 'https://m.media-amazon.com/images/M/MV5BNTE3MzQzODE3OV5BMl5BanBnXkFtZTcwMDE0ODY1NA@@._V1_UY317_CR5,0,214,317_AL_.jpg'),
(76, 'Daniel', 'Radcliffe', 'M', '1989-07-23', 'https://m.media-amazon.com/images/M/MV5BZmE0NzNiNzQtYTVlYS00MjljLWE4MTgtYzYxNjU2NjZkM2M4XkEyXkFqcGdeQXVyNjY5NDgzNjQ@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(77, ' Lizzy', 'Caplan', 'F', '1982-06-30', 'https://m.media-amazon.com/images/M/MV5BMjA1MDgxNDU0Nl5BMl5BanBnXkFtZTgwNjk4NTgwMTE@._V1_UY317_CR19,0,214,317_AL_.jpg'),
(78, 'Hugo', 'Weaving', 'M', '1960-04-04', 'https://m.media-amazon.com/images/M/MV5BMjAxMzAyNDQyMF5BMl5BanBnXkFtZTcwOTM4ODcxMw@@._V1_UY317_CR4,0,214,317_AL_.jpg'),
(79, 'Natalie', 'Portman', 'F', '1981-06-09', 'https://m.media-amazon.com/images/M/MV5BMTQ3ODE3Mjg1NV5BMl5BanBnXkFtZTcwNzA4ODcxNA@@._V1_UY317_CR11,0,214,317_AL_.jpg'),
(80, 'Rupert', 'Graves', 'M', '1963-06-30', 'https://m.media-amazon.com/images/M/MV5BMDliNGMyY2YtNDM1Yi00YzlhLTlkM2ItZTY4ODNiM2JkMjBhXkEyXkFqcGdeQXVyNzE3NzU1OQ@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(81, ' Mila', 'Kunis', 'F', '1983-08-14', 'https://m.media-amazon.com/images/M/MV5BODQyNTQyNzY4MV5BMl5BanBnXkFtZTcwODg5MDA3MQ@@._V1_UY317_CR25,0,214,317_AL_.jpg'),
(82, ' Vincent', 'Cassel', 'M', '1966-11-23', 'https://m.media-amazon.com/images/M/MV5BMTc1NDUzMzM5MV5BMl5BanBnXkFtZTcwNzY1OTYyOQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(83, ' Martin', 'Balsam', 'M', '1919-11-04', 'https://m.media-amazon.com/images/M/MV5BMTQwOTE4MjMxM15BMl5BanBnXkFtZTcwMDc5MDg5Nw@@._V1_UY317_CR17,0,214,317_AL_.jpg'),
(84, ' Henry', 'Fonda', 'M', '1905-05-16', 'https://m.media-amazon.com/images/M/MV5BOTEwNjQ2ODQ4Nl5BMl5BanBnXkFtZTYwMzEwMTM2._V1_UY317_CR20,0,214,317_AL_.jpg'),
(85, '  Lee', 'J. Cobb', 'M', '1911-12-08', 'https://m.media-amazon.com/images/M/MV5BNDc3MTM0MDQyMF5BMl5BanBnXkFtZTYwMTczMTg2._V1_UX214_CR0,0,214,317_AL_.jpg'),
(86, '   Rosa', 'Salazar', 'F', '1985-07-16', 'https://m.media-amazon.com/images/M/MV5BM2FkNDAwMDItMWQwNy00YzE5LWJiM2EtZmNhZTZjZDk1YmJlXkEyXkFqcGdeQXVyMjQwMTcxMzA@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(87, 'Christoph', 'Waltz', 'M', '1956-10-04', 'https://m.media-amazon.com/images/M/MV5BMTM4MDk3OTYxOF5BMl5BanBnXkFtZTcwMDk5OTUwOQ@@._V1_UY317_CR9,0,214,317_AL_.jpg'),
(88, 'Jennifer', 'Connelly', 'F', '1970-12-12', 'https://m.media-amazon.com/images/M/MV5BOTczNTgzODYyMF5BMl5BanBnXkFtZTcwNjk4ODk4Mw@@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(89, 'Guy', 'Pearce', 'M', '1967-10-05', 'https://m.media-amazon.com/images/M/MV5BMTgyNzc2NzY3Nl5BMl5BanBnXkFtZTgwNTMzMzAwMjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(90, ' Carrie-Anne', 'Moss', 'F', '1967-08-21', 'https://m.media-amazon.com/images/M/MV5BMTYxMjgwNzEwOF5BMl5BanBnXkFtZTcwNTQ0NzI5Ng@@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(91, ' Joe', 'Pantoliano', 'M', '1951-09-12', 'https://m.media-amazon.com/images/M/MV5BMTA5NjgwODU4NDZeQTJeQWpwZ15BbWU3MDE0NzUwNDQ@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(92, '  Brie', 'Larson', 'F', '1989-10-01', 'https://m.media-amazon.com/images/M/MV5BMjExODkxODU3NF5BMl5BanBnXkFtZTgwNTM0MTk3NjE@._V1_UY317_CR7,0,214,317_AL_.jpg'),
(93, '  Jacob', 'Tremblay', 'M', '2006-10-05', 'https://m.media-amazon.com/images/M/MV5BOWJiOTg5YzQtOWIzNy00NTdkLWEzNmEtYWFkZmY1NTc2OTk5XkEyXkFqcGdeQXVyMzM0MDI2MTE@._V1_UY317_CR5,0,214,317_AL_.jpg'),
(94, '  Saoirse', 'Ronan', 'F', '1994-04-12', 'https://m.media-amazon.com/images/M/MV5BMjExNTM5NDE4NV5BMl5BanBnXkFtZTcwNzczMzEzOQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(95, '   Emma', 'Watson', 'F', '1990-04-15', 'https://m.media-amazon.com/images/M/MV5BMTQ3ODE2NTMxMV5BMl5BanBnXkFtZTgwOTIzOTQzMjE@._V1_UY317_CR21,0,214,317_AL_.jpg'),
(96, 'Florence', 'Pugh', 'F', '1996-01-03', 'https://m.media-amazon.com/images/M/MV5BNTk4YWEwOGEtMDBhZS00OTc0LThjZGQtMjU4YjZhM2Q1YjdlXkEyXkFqcGdeQXVyNTQ1OTQ0OTA@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(97, 'Timothée', 'Chalamet', 'M', '1995-12-27', 'https://m.media-amazon.com/images/M/MV5BOWU1Nzg0M2ItYjEzMi00ODliLThkODAtNGEyYzRkZTBmMmEzXkEyXkFqcGdeQXVyNDk2Mzk2NDg@._V1_UY317_CR13,0,214,317_AL_.jpg'),
(98, ' Winona', 'Ryder', 'F', '1971-10-29', 'https://m.media-amazon.com/images/M/MV5BMTQ3NzM3MTc2NF5BMl5BanBnXkFtZTcwODMxNjA0NA@@._V1_UY317_CR9,0,214,317_AL_.jpg'),
(99, 'Patrick', 'Wilson', 'M', '1973-07-03', 'https://m.media-amazon.com/images/M/MV5BMTkzNzcxNzcxMF5BMl5BanBnXkFtZTgwOTM1ODUzMTE@._V1_UY317_CR1,0,214,317_AL_.jpg'),
(100, 'Vera', 'Farmiga', 'F', '1973-08-06', 'https://m.media-amazon.com/images/M/MV5BMjIwNTU3NDUyMl5BMl5BanBnXkFtZTgwODEwODg5NDE@._V1_UY317_CR131,0,214,317_AL_.jpg'),
(101, 'Robert', 'Downey Jr.', 'M', '1965-04-04', 'https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(102, 'Rachel', 'McAdams', 'F', '1978-11-17', 'https://m.media-amazon.com/images/M/MV5BMTY5ODcxMDU4NV5BMl5BanBnXkFtZTcwMjAzNjQyNQ@@._V1_UY317_CR2,0,214,317_AL_.jpg'),
(103, 'Jude', 'Law', 'M', '1972-12-29', 'https://m.media-amazon.com/images/M/MV5BMTMwOTg5NTQ3NV5BMl5BanBnXkFtZTcwNzM3MDAzNQ@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(104, 'Jodie', 'Foster', 'F', '1962-11-19', 'https://m.media-amazon.com/images/M/MV5BMTM3MjgyOTQwNF5BMl5BanBnXkFtZTcwMDczMzEwNA@@._V1_UY317_CR1,0,214,317_AL_.jpg'),
(105, ' Anthony', 'Hopkins', 'M', '1937-12-31', 'https://m.media-amazon.com/images/M/MV5BMTg5ODk1NTc5Ml5BMl5BanBnXkFtZTYwMjAwOTI4._V1_UY317_CR6,0,214,317_AL_.jpg'),
(106, ' Bruce', 'Willis', 'M', '1955-03-19', 'https://m.media-amazon.com/images/M/MV5BMjA0MjMzMTE5OF5BMl5BanBnXkFtZTcwMzQ2ODE3Mw@@._V1_UY317_CR27,0,214,317_AL_.jpg'),
(107, '  Haley', 'Joel Osment', 'M', '1988-04-10', 'https://m.media-amazon.com/images/M/MV5BZjY0MjRhNjEtNGVlYi00YzZhLWFhNDEtMjlhNjBiNzM3Y2RkXkEyXkFqcGdeQXVyMjQxMDQzMjA@._V1_UY317_CR104,0,214,317_AL_.jpg'),
(108, '  Samuel', 'L. Jackson', 'M', '1948-12-21', 'https://m.media-amazon.com/images/M/MV5BMTQ1NTQwMTYxNl5BMl5BanBnXkFtZTYwMjA1MzY1._V1_UX214_CR0,0,214,317_AL_.jpg'),
(109, '  Morgan', 'Freeman', 'M', '1937-06-01', 'https://m.media-amazon.com/images/M/MV5BMTc0MDMyMzI2OF5BMl5BanBnXkFtZTcwMzM2OTk1MQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(110, '   Anne', 'Hathaway', 'F', '1982-11-12', 'https://m.media-amazon.com/images/M/MV5BMTRhNzQ3NGMtZmQ1Mi00ZTViLTk3OTgtOTk0YzE2YTgwMmFjXkEyXkFqcGdeQXVyNzg5MzIyOA@@._V1_UY317_CR20,0,214,317_AL_.jpg'),
(111, 'Meryl', 'Streep', 'F', '1949-04-29', 'https://m.media-amazon.com/images/M/MV5BMTU4Mjk5MDExOF5BMl5BanBnXkFtZTcwOTU1MTMyMw@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(112, ' Julia', 'Roberts', 'F', '1967-10-28', 'https://m.media-amazon.com/images/M/MV5BMTQzNjU3MDczN15BMl5BanBnXkFtZTYwNzY2Njc4._V1_UX214_CR0,0,214,317_AL_.jpg'),
(113, ' Laura', 'Dern', 'F', '1967-02-10', 'https://m.media-amazon.com/images/M/MV5BMjI3NzY0MDQxMF5BMl5BanBnXkFtZTcwNzMwMzcyNw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(114, ' Dylan', 'Minnette', 'M', '1996-12-29', 'https://m.media-amazon.com/images/M/MV5BNTk0ZmNkMWEtNzI0Yy00ZTAzLThiNWMtZWMwMDkzZmJjZmU3XkEyXkFqcGdeQXVyNTYxNDQ4NQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(115, '  Stephen', 'Lang', 'M', '1952-07-11', 'https://m.media-amazon.com/images/M/MV5BMjE4NzYwNTc5Nl5BMl5BanBnXkFtZTcwMzQzOTUyNw@@._V1_UY317_CR9,0,214,317_AL_.jpg'),
(116, '  Jane', 'Levy', 'F', '1989-12-29', 'https://m.media-amazon.com/images/M/MV5BM2FlOGZlMTMtMmY2ZS00MTgwLWI2ZjktYjRlNGQ4OTY3MmZjXkEyXkFqcGdeQXVyMjM2MTM1ODA@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(117, '  Karim', 'Abdel Aziz', 'M', '1975-08-17', 'https://m.media-amazon.com/images/M/MV5BMTc5MjEyNTQ4OF5BMl5BanBnXkFtZTgwNzM1MTUzMjE@._V1_UY317_CR104,0,214,317_AL_.jpg'),
(118, 'Khaled', 'El-Sawi', 'M', '1963-11-25', 'https://m.media-amazon.com/images/M/MV5BMjIyNjUwODgxNl5BMl5BanBnXkFtZTgwNTYxODgzMjE@._V1_UY317_CR145,0,214,317_AL_.jpg'),
(119, ' Nelly', 'Karim', 'F', '1974-12-18', 'https://m.media-amazon.com/images/M/MV5BNjc5MzA2OTAwMF5BMl5BanBnXkFtZTgwMjA2ODA5OTE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(120, '  Alan', 'Rickman', 'M', '1946-02-21', 'https://m.media-amazon.com/images/M/MV5BMTUwNTc4MTg4Ml5BMl5BanBnXkFtZTcwNDY2MjkxOA@@._V1_UY317_CR10,0,214,317_AL_.jpg'),
(121, '   Bonnie', 'Bedelia', 'F', '1948-03-25', 'https://m.media-amazon.com/images/M/MV5BNzEyOTA4MTM5OV5BMl5BanBnXkFtZTcwNTQ4NTQzMQ@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(122, 'Jim', 'Carrey', 'M', '1962-01-17', 'https://m.media-amazon.com/images/M/MV5BMTQwMjAwNzI0M15BMl5BanBnXkFtZTcwOTY1MTMyOQ@@._V1_UY317_CR22,0,214,317_AL_.jpg'),
(123, 'Kate', 'Winslet', 'F', '1975-10-05', 'https://m.media-amazon.com/images/M/MV5BODgzMzM2NTE0Ml5BMl5BanBnXkFtZTcwMTcyMTkyOQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(124, 'Tim', 'Robbins', 'M', '1958-10-16', 'https://m.media-amazon.com/images/M/MV5BMTI1OTYxNzAxOF5BMl5BanBnXkFtZTYwNTE5ODI4._V1_UY317_CR16,0,214,317_AL_.jpg'),
(125, ' Bob', 'Gunton', 'M', '1945-11-15', 'https://m.media-amazon.com/images/M/MV5BMjUyZDQ0NjktZmM5ZS00NzcxLTliMWYtNWUxNDcyMmExZjU0XkEyXkFqcGdeQXVyMTE1MjA4NzM@._V1_UY317_CR18,0,214,317_AL_.jpg'),
(126, ' Rupert', 'Grint', 'M', '1988-08-24', 'https://m.media-amazon.com/images/M/MV5BMjI3MDA3NjA1N15BMl5BanBnXkFtZTcwMDcyMDYzNw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(127, ' Harry', 'Melling', 'M', '1989-03-13', 'https://m.media-amazon.com/images/M/MV5BMTg0ODk0NzkyMl5BMl5BanBnXkFtZTgwNjY2Mjc3NTE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(128, 'Emilia', 'Clarke', 'F', '1986-10-28', 'https://m.media-amazon.com/images/M/MV5BNjg3OTg4MDczMl5BMl5BanBnXkFtZTgwODc0NzUwNjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(129, 'Sam', 'Claflin', 'M', '1986-06-27', 'https://m.media-amazon.com/images/M/MV5BMjI3MDQxNDUwOF5BMl5BanBnXkFtZTgwNjY4NjI3NjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(130, ' Lily', 'Collins', 'F', '1989-03-28', 'https://m.media-amazon.com/images/M/MV5BZGYxMmQyNjEtZmI0Yi00OWUwLThiNDItYmViZTYyYmQ3YjdkXkEyXkFqcGdeQXVyMTIzOTM5Mjc0._V1_UX214_CR0,0,214,317_AL_.jpg'),
(131, 'Chris', 'Pratt', 'M', '1979-06-21', 'https://m.media-amazon.com/images/M/MV5BNzg3MTgwOTgzMV5BMl5BanBnXkFtZTgwODIxMTUwMjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(132, 'Zoe', 'Saldana', 'F', '1978-06-19', 'https://m.media-amazon.com/images/M/MV5BMTM2MjIwOTc0Nl5BMl5BanBnXkFtZTcwNzQ5ODM1Mw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(133, 'Ryan', 'Reynolds', 'M', '1976-10-13', 'https://m.media-amazon.com/images/M/MV5BOTI3ODk1MTMyNV5BMl5BanBnXkFtZTcwNDEyNTE2Mg@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(134, ' Morena', 'Baccarin', 'F', '1979-06-02', 'https://m.media-amazon.com/images/M/MV5BNmU5Yjk4OTItMjMzZS00MTYzLWI1ZDktYWM4YWM2NTM2YzMzXkEyXkFqcGdeQXVyMzY2OTA2MzM@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(135, ' T.J. ', 'Miller', 'M', '1981-06-04', 'https://m.media-amazon.com/images/M/MV5BMjIwMzI0NTEwMF5BMl5BanBnXkFtZTcwMjk4MDkxNA@@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(136, ' Tom', 'Holland', 'M', '1996-06-01', 'https://m.media-amazon.com/images/M/MV5BNTAzMzA3NjQwOF5BMl5BanBnXkFtZTgwMDUzODQ5MTI@._V1_UY317_CR23,0,214,317_AL_.jpg'),
(137, ' Michael', 'Keaton', 'M', '1951-09-05', 'https://m.media-amazon.com/images/M/MV5BZmNiZmMzN2MtOTNkMy00YjA1LTg4NzktMWI4Njg1NzI3ODAyXkEyXkFqcGdeQXVyNzg5MzIyOA@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(138, ' Tom', 'Hanks', 'M', '1956-07-09', 'https://m.media-amazon.com/images/M/MV5BMTQ2MjMwNDA3Nl5BMl5BanBnXkFtZTcwMTA2NDY3NQ@@._V1_UY317_CR2,0,214,317_AL_.jpg'),
(139, ' Will', 'Smith', 'M', '1968-09-25', 'https://m.media-amazon.com/images/M/MV5BNTczMzk1MjU1MV5BMl5BanBnXkFtZTcwNDk2MzAyMg@@._V1_UY317_CR2,0,214,317_AL_.jpg'),
(140, ' Brad', 'Pitt', 'M', '1963-12-18', 'https://m.media-amazon.com/images/M/MV5BMjA1MjE2MTQ2MV5BMl5BanBnXkFtZTcwMjE5MDY0Nw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(141, ' Jennifer', 'Aniston', 'F', '1969-02-11', 'https://m.media-amazon.com/images/M/MV5BNjk1MjIxNjUxNF5BMl5BanBnXkFtZTcwODk2NzM4Mg@@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(142, 'Angelina', 'Jolie', 'F', '1975-06-04', 'https://m.media-amazon.com/images/M/MV5BODg3MzYwMjE4N15BMl5BanBnXkFtZTcwMjU5NzAzNw@@._V1_UY317_CR22,0,214,317_AL_.jpg'),
(143, ' Paul', 'Rudd', 'M', '1969-06-04', 'https://m.media-amazon.com/images/M/MV5BMTY4NTEwNDg1MV5BMl5BanBnXkFtZTgwODMwMDA0ODE@._V1_UY317_CR20,0,214,317_AL_.jpg'),
(144, ' Michael', 'Douglas', 'M', '1944-09-25', 'https://m.media-amazon.com/images/M/MV5BMTQ3NzMzOTQ3MF5BMl5BanBnXkFtZTcwOTE0MzY1Mw@@._V1_UY317_CR13,0,214,317_AL_.jpg'),
(145, ' Matthew', 'McConaughey', 'M', '1969-11-04', 'https://m.media-amazon.com/images/M/MV5BMTg0MDc3ODUwOV5BMl5BanBnXkFtZTcwMTk2NjY4Nw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(146, '  Jessica', 'Chastain', 'F', '1977-03-24', 'https://m.media-amazon.com/images/M/MV5BMTU1MDM5NjczOF5BMl5BanBnXkFtZTcwOTY2MDE4OA@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(147, '  Emma', 'Stone', 'F', '1988-11-06', 'https://m.media-amazon.com/images/M/MV5BMjI4NjM1NDkyN15BMl5BanBnXkFtZTgwODgyNTY1MjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(148, '   Bradley', 'Cooper', 'M', '1975-01-05', 'https://m.media-amazon.com/images/M/MV5BMjM0OTIyMzY1M15BMl5BanBnXkFtZTgwMTg0OTE0NzE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(149, '   Chris', 'Hemsworth', 'M', '1983-08-11', 'https://m.media-amazon.com/images/M/MV5BOTU2MTI0NTIyNV5BMl5BanBnXkFtZTcwMTA4Nzc3OA@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(150, 'Gwyneth', 'Paltrow', 'F', '1972-09-27', 'https://m.media-amazon.com/images/M/MV5BNzIxOTQ1NTU1OV5BMl5BanBnXkFtZTcwMTQ4MDY0Nw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(151, 'Tim', 'Roth', 'M', '1961-05-14', 'https://m.media-amazon.com/images/M/MV5BMjA5NTA3MDQyOV5BMl5BanBnXkFtZTcwODM4NDE3Mw@@._V1_UY317_CR16,0,214,317_AL_.jpg'),
(152, 'Uma', 'Thurman', 'F', '1970-04-19', 'https://m.media-amazon.com/images/M/MV5BMjMxNzk1MTQyMl5BMl5BanBnXkFtZTgwMDIzMDEyMTE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(153, 'John', 'Travolta', 'M', '1954-02-18', 'https://m.media-amazon.com/images/M/MV5BMTUwNjQ0ODkxN15BMl5BanBnXkFtZTcwMDc5NjQwNw@@._V1_UY317_CR11,0,214,317_AL_.jpg'),
(154, ' Edward', 'Norton', 'M', '1969-08-18', 'https://m.media-amazon.com/images/M/MV5BMTYwNjQ5MTI1NF5BMl5BanBnXkFtZTcwMzU5MTI2Mw@@._V1_UY317_CR16,0,214,317_AL_.jpg'),
(200, 'bryan', 'cranston', 'm', NULL, 'm'),
(301, 'bryan', 'cranston', 'm', NULL, 'm'),
(302, 'lena', 'heady', 'f', NULL, 'f'),
(303, 'wendell', 'pierce', 'm', NULL, 'm'),
(304, 'spencer', 'grammer', 'f', NULL, 'f'),
(305, 'bradely', 'baker', 'm', NULL, 'm'),
(306, 'michael', 'imperiolo', 'm', NULL, 'm'),
(307, 'rupert', 'graves', 'm', NULL, 'm'),
(308, 'muriel', 'hofman', 'f', NULL, 'f'),
(309, 'taylor', 'ktich', 'm', NULL, 'm'),
(310, 'ryo', 'naito', 'm', NULL, 'm'),
(311, 'gina ', 'tores', 'f', NULL, 'f'),
(312, 'maartin', 'freemaan', 'm', NULL, 'm'),
(313, 'john', 'krasinki', 'm', NULL, 'm'),
(314, 'lisa', 'kudriw', 'f', NULL, 'f'),
(315, 'giancarlo', 'esposito', 'm', NULL, 'm'),
(316, 'lisaa', 'vicari', 'f', NULL, 'f'),
(317, 'katio', 'ishikawa', 'm', NULL, 'm'),
(318, 'boyd', 'holbrook', 'm', NULL, 'm'),
(319, 'yui', 'ishikawaa', 'f', NULL, 'f'),
(320, 'helwern', 'mccrooy', 'f', NULL, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `actor_prize_movie`
--

CREATE TABLE `actor_prize_movie` (
  `ACTOR_ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL,
  `YEAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `actor_prize_series`
--

CREATE TABLE `actor_prize_series` (
  `ACTOR_ID` int(11) NOT NULL,
  `SERIES_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL,
  `YEAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_to_fav_movie`
--

CREATE TABLE `add_to_fav_movie` (
  `USER_NAME_OF_USER` varchar(100) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_to_fav_series`
--

CREATE TABLE `add_to_fav_series` (
  `USER_NAME_OF_USER` varchar(100) NOT NULL,
  `SERIES_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_website`
--

CREATE TABLE `admin_website` (
  `ADMIN_NAME` varchar(100) NOT NULL,
  `PASSWORD_OF_ADMIN` varchar(100) NOT NULL,
  `EMAIL` varchar(500) NOT NULL,
  `AGE` int(11) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_website`
--

INSERT INTO `admin_website` (`ADMIN_NAME`, `PASSWORD_OF_ADMIN`, `EMAIL`, `AGE`, `GENDER`, `image`) VALUES
('Donya Esawi', '$2y$10$2KMXqrLD7wao0obC34VvkO9q0tj.7KzNVCWxcSRdzBe3n6ROcK62i', 'donya.esawi@gmail.com', 19, 'F', 'Developer.gif'),
('Mohamed_elHadidy', '$2y$10$0NH8eX4DOpGlp4KjXCp/3utRTqsW7dgxNocK.yACE68UIjyHs2Pdm', 'MohamedHadidy@gmail.com', 20, 'M', NULL),
('Nada El-sayed', '$2y$10$H8hzptum4Pnn1XcwD0NBIuI7xaJrnqK4ExZtAdnfyHpNckSvVoi3S', 'noooda@gmail.com', 20, 'F', NULL),
('Raghad Khaled', '$2y$10$MFfeKI/4lJJ4FhiWTNJjYeNWoZkGbd/HI8WtCQIp1unoW6zFMyYeC', 'raghoooda@gmail.com', 20, 'F', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `PICTURE` varchar(100) NOT NULL,
  `ADMIN_ADDED` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`PICTURE`, `ADMIN_ADDED`, `ID`) VALUES
('kfc-fck.png', 'Donya Esawi', 1),
('8de0d92ae7aee765f432588e27644a94.jpg', 'Donya Esawi', 2),
('04bf595d902f0bb82aeed588c1e1e677.jpg', 'Donya Esawi', 3),
('4469c769cb0d648dedccabe24d6fab8e.jpg', 'Donya Esawi', 4),
('329990e7a9fe7cb6fd3bf9d616f1b0dc.jpg', 'Donya Esawi', 5),
('d0446e13032701.5627006a6f4a4.jpg', 'Donya Esawi', 6),
('psychology-in-advertising.png', 'Donya Esawi', 7),
('w1000-778770l5lgAAlT.png', 'Donya Esawi', 8),
('vitamins1.jpeg', 'Donya Esawi', 9),
('vintage_style_car_advertising_poster_vector_545657.jpg', 'Donya Esawi', 10),
('unnamed.jpg', 'Donya Esawi', 11),
('Smooth-the-Fruit-Ad-Poster-Download.jpg', 'Donya Esawi', 12),
('quality_milk_advertising_poster_splashes_style_vector_570451.jpg', 'Donya Esawi', 13),
('b97e812b2694fe4cfe932d1044546611.jpg', 'Donya Esawi', 14),
('1952-pasta.jpg', 'Donya Esawi', 15),
('054b31d67a1d18afcd912c040cb4910a.jpg', 'Donya Esawi', 16),
('advertjH.jpg', 'Donya Esawi', 17),
('5646.jpg', 'Donya Esawi', 18),
('aa6f07d3abd02e88a54ea6e6699d095a.jpg', 'Donya Esawi', 19),
('add.jpg', 'Donya Esawi', 20),
('Gourmet-advertisement-banner-material-vector.jpg', 'Donya Esawi', 21);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `LNAME` varchar(100) DEFAULT NULL,
  `BIRTH_DATE` date DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `IMAGE` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`ID`, `FNAME`, `LNAME`, `BIRTH_DATE`, `GENDER`, `IMAGE`) VALUES
(3, 'Christopher', 'Nolan', '1970-07-30', 'M', 'https://m.media-amazon.com/images/M/MV5BNjE3NDQyOTYyMV5BMl5BanBnXkFtZTcwODcyODU2Mw@@._V1_UY317_CR7,0,214,317_AL_.jpg'),
(4, 'Quentin', 'Tarantino', '1963-03-27', 'M', 'https://m.media-amazon.com/images/M/MV5BMTgyMjI3ODA3Nl5BMl5BanBnXkFtZTcwNzY2MDYxOQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(5, 'Bong', 'Joon Ho', '1969-09-14', 'M', 'https://m.media-amazon.com/images/M/MV5BOGVmYzZkODgtNTQ3OS00MzgxLTllOGUtZTFjNDc4MmE1ZDcwXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UY317_CR108,0,214,317_AL_.jpg'),
(6, ' Todd', 'Phillips', '1970-12-20', 'M', 'https://m.media-amazon.com/images/M/MV5BNGY5MWRjM2MtNDkzNC00MDcwLWE2ZjYtOWNlZmM3MWIyNGZmXkEyXkFqcGdeQXVyMTAxMjM5NTA4._V1_UY317_CR131,0,214,317_AL_.jpg'),
(7, '  George', 'Miller', '1945-03-03', 'M', 'https://m.media-amazon.com/images/M/MV5BMTQ5NTYwMjcyMF5BMl5BanBnXkFtZTYwMDQ0MjQz._V1_UY317_CR11,0,214,317_AL_.jpg'),
(8, 'Leigh', 'Whannell', '1977-01-17', 'M', 'https://m.media-amazon.com/images/M/MV5BMTkyMzA3OTI0Ml5BMl5BanBnXkFtZTcwNDUzMTEzMQ@@._V1_UY317_CR25,0,214,317_AL_.jpg'),
(9, 'James', 'Mangold', '1963-12-16', 'M', 'https://m.media-amazon.com/images/M/MV5BMTg5MjY0ODg1MF5BMl5BanBnXkFtZTYwMjUzMjc0._V1_UX214_CR0,0,214,317_AL_.jpg'),
(10, 'Denis', 'Villeneuve', '1967-10-03', 'M', 'https://m.media-amazon.com/images/M/MV5BMzU2MDk5MDI2MF5BMl5BanBnXkFtZTcwNDkwMjMzNA@@._V1_UY317_CR0,0,214,317_AL_.jpg'),
(11, 'David', 'Fincher', '1962-08-28', 'M', 'https://m.media-amazon.com/images/M/MV5BMTc1NDkwMTQ2MF5BMl5BanBnXkFtZTcwMzY0ODkyMg@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(12, ' Simon', 'Kinberg', '1973-08-02', 'M', 'https://m.media-amazon.com/images/M/MV5BMTA4OTIzMzE4NzleQTJeQWpwZ15BbWU4MDYyMzkzNDUz._V1_UX214_CR0,0,214,317_AL_.jpg'),
(13, '  Joe', 'Johnston', '1950-05-13', 'M', 'https://m.media-amazon.com/images/M/MV5BNzcxNDQwNzgxNV5BMl5BanBnXkFtZTYwNTQ1MTA0._V1_UX214_CR0,0,214,317_AL_.jpg'),
(14, ' Martin', 'Scorsese', '1942-11-17', 'M', 'https://m.media-amazon.com/images/M/MV5BMTcyNDA4Nzk3N15BMl5BanBnXkFtZTcwNDYzMjMxMw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(15, '  Gary', ' Ross', '1956-11-03', 'M', 'https://m.media-amazon.com/images/M/MV5BMTI3NjcxMTA2Nl5BMl5BanBnXkFtZTcwMjkwNDYyMQ@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(16, ' Edgar', 'Wright', '1974-04-18', 'M', 'https://m.media-amazon.com/images/M/MV5BMTMxMjgyMjQ4NF5BMl5BanBnXkFtZTcwMTU0ODk2Mw@@._V1_UY317_CR6,0,214,317_AL_.jpg'),
(17, '  Alfonso', 'Cuarón', '1961-11-28', 'M', 'https://m.media-amazon.com/images/M/MV5BMjA0ODY4OTk4Nl5BMl5BanBnXkFtZTcwNTkxMzYyMg@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(18, '   Morten', 'Tyldum', '1967-05-19', 'M', 'https://m.media-amazon.com/images/M/MV5BMTgyNDM1ODkzMV5BMl5BanBnXkFtZTcwNTMxMjg0Nw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(19, ' M. Night', 'Shyamalan', '1970-08-06', 'M', 'https://m.media-amazon.com/images/M/MV5BMTczMTA5OTMxMl5BMl5BanBnXkFtZTcwMDA4NDg1Mw@@._V1_UY317_CR131,0,214,317_AL_.jpg'),
(20, 'Andy', 'Muschietti', '1973-08-26', 'M', 'https://m.media-amazon.com/images/M/MV5BMTkwMDE0NTc0NF5BMl5BanBnXkFtZTcwNTcyMTM5OA@@._V1_UY317_CR1,0,214,317_AL_.jpg'),
(21, 'Ruben', 'Fleischer', '1974-10-31', 'M', 'https://m.media-amazon.com/images/M/MV5BMTc0NDU5MDc1NF5BMl5BanBnXkFtZTcwMDY0MTM5OA@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(22, 'Rian', 'Johnson', '1973-12-17', 'M', 'https://m.media-amazon.com/images/M/MV5BMjA3MTQwNjYyM15BMl5BanBnXkFtZTcwNTI5ODUwNQ@@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(23, 'Darren', 'Aronofsky', '1969-02-12', 'M', 'https://m.media-amazon.com/images/M/MV5BMTI1NTQ0NjU3MF5BMl5BanBnXkFtZTcwOTQ0MTUyMg@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(24, 'Chad', 'Stahelski', '1968-09-20', 'M', 'https://m.media-amazon.com/images/M/MV5BNjgwNzc0NTc2Nl5BMl5BanBnXkFtZTgwMjM0NzEzMDI@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(26, 'Stephen', 'Chbosky', '1970-01-25', 'M', 'https://m.media-amazon.com/images/M/MV5BMTYzODIyMTM0OF5BMl5BanBnXkFtZTcwMjI1MDgwOA@@._V1_UY317_CR17,0,214,317_AL_.jpg'),
(27, 'James', 'Cameron', '1954-08-16', 'M', 'https://m.media-amazon.com/images/M/MV5BMjI0MjMzOTg2MF5BMl5BanBnXkFtZTcwMTM3NjQxMw@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(28, 'Spike', 'Jonze', '1969-10-22', 'M', 'https://m.media-amazon.com/images/M/MV5BMjE3MDkyNTMzNl5BMl5BanBnXkFtZTcwOTAxOTAyMw@@._V1_UY317_CR22,0,214,317_AL_.jpg'),
(29, ' James', 'Wan', '1977-02-26', 'M', 'https://m.media-amazon.com/images/M/MV5BMTY5NzExMTQ5N15BMl5BanBnXkFtZTcwNjY1NDQzOQ@@._V1_UY317_CR58,0,214,317_AL_.jpg'),
(30, ' Lenny', 'Abrahamson', '1966-11-30', 'M', 'https://m.media-amazon.com/images/M/MV5BMTExMDQyMTQzNjleQTJeQWpwZ15BbWU4MDg0NTk5ODAx._V1_UY317_CR15,0,214,317_AL_.jpg'),
(31, ' Robert', 'Rodriguez', '1968-06-20', 'M', 'https://m.media-amazon.com/images/M/MV5BMTc0NDg4ODAwNF5BMl5BanBnXkFtZTgwMTIxNTA0MjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(32, ' Susanne', 'Bier', '1960-04-15', 'F', 'https://m.media-amazon.com/images/M/MV5BMjQ2NTQyODg1NV5BMl5BanBnXkFtZTcwOTYzMjkzNA@@._V1_UY317_CR15,0,214,317_AL_.jpg'),
(33, 'Greta', 'Gerwig', '1983-08-04', 'F', 'https://m.media-amazon.com/images/M/MV5BNDE5MTIxMTMzMV5BMl5BanBnXkFtZTcwMjMxMDYxOQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(34, ' Sidney', 'Lumet', '1924-06-25', 'M', 'https://m.media-amazon.com/images/M/MV5BMTY4Mzk5Mzk4Ml5BMl5BanBnXkFtZTYwMTE2NDg0._V1_UY317_CR2,0,214,317_AL_.jpg'),
(35, 'James', 'McTeigue', '1967-12-29', 'M', 'https://m.media-amazon.com/images/M/MV5BMTUxNTQwNDQ1MV5BMl5BanBnXkFtZTcwOTI2MDUwNg@@._V1_UY317_CR19,0,214,317_AL_.jpg'),
(36, 'Louis', 'Leterrier', '1973-06-17', 'M', 'https://m.media-amazon.com/images/M/MV5BMjExMDU1MjIxN15BMl5BanBnXkFtZTgwODgxNDAxMTE@._V1_UY317_CR0,0,214,317_AL_.jpg'),
(37, 'Alex', 'Garland', '1970-05-26', 'M', 'https://m.media-amazon.com/images/M/MV5BMTU1ODcxMzA2NF5BMl5BanBnXkFtZTgwNjc2NDk3NTM@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(38, 'Jonathan', 'Demme', '1944-02-22', 'M', 'https://m.media-amazon.com/images/M/MV5BMTY1NzY0OTQ0OF5BMl5BanBnXkFtZTcwNDY1Njk5Mg@@._V1_UY317_CR3,0,214,317_AL_.jpg'),
(39, 'Guy', 'Ritchie', '1969-09-10', 'M', 'https://m.media-amazon.com/images/M/MV5BMTM2NDkxMTcxMl5BMl5BanBnXkFtZTcwNTMyNjI5MQ@@._V1_UY317_CR8,0,214,317_AL_.jpg'),
(40, 'Christian', 'Ditter', '1977-09-10', 'M', 'https://m.media-amazon.com/images/M/MV5BZGRlNzQ1ZTUtZGVhMi00YmRiLWFjODUtZTdjNTljODRiNDI0XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(41, 'Frank ', 'Darabont', '1959-12-08', 'M', 'https://m.media-amazon.com/images/M/MV5BNjk0MTkxNzQwOF5BMl5BanBnXkFtZTcwODM5OTMwNA@@._V1_UY317_CR20,0,214,317_AL_.jpg'),
(42, 'Jon', 'Watts', '1981-06-28', 'M', 'https://m.media-amazon.com/images/M/MV5BNzg2NjA5ODAyMV5BMl5BanBnXkFtZTgwODAzMjkxNDE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(43, 'Tim', 'Miller', '1964-10-10', 'M', 'https://m.media-amazon.com/images/M/MV5BMTk4NjMyNzY3MV5BMl5BanBnXkFtZTgwNDY0Nzg0ODE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(44, 'James', 'Gunn', '1966-08-05', 'M', 'https://m.media-amazon.com/images/M/MV5BMTYxMDgzMjA5OV5BMl5BanBnXkFtZTcwMzMwMTUxNw@@._V1_UY317_CR11,0,214,317_AL_.jpg'),
(45, 'Thea', 'Sharrock', '1976-08-05', 'F', 'https://m.media-amazon.com/images/M/MV5BNjUyNmI3NzktMDU3MS00M2FlLTlmM2EtMWU0MGQyMzA5YzllXkEyXkFqcGdeQXVyNjc1MTk2NzM@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(46, 'Chris', 'Columbus', '1958-09-10', 'M', 'https://m.media-amazon.com/images/M/MV5BMTY2MTYzNzUyNl5BMl5BanBnXkFtZTYwMDI0NzA0._V1_UY317_CR2,0,214,317_AL_.jpg'),
(47, 'Michel', 'Gondry', '1963-05-08', 'M', 'https://m.media-amazon.com/images/M/MV5BMjEwNDg3MDA1MF5BMl5BanBnXkFtZTcwMDAxMzc1MQ@@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(48, 'John', 'McTiernan', '1951-01-08', 'M', 'https://m.media-amazon.com/images/M/MV5BMjE4MTIwODY2Ml5BMl5BanBnXkFtZTYwMTk5MDQ3._V1_UY317_CR130,0,214,317_AL_.jpg'),
(49, 'Marwan', 'Hamed', '1977-01-08', 'M', 'https://m.media-amazon.com/images/M/MV5BMTcyMzk1MjA2NF5BMl5BanBnXkFtZTgwMzAzMjU5MDE@._V1_UY317_CR51,0,214,317_AL_.jpg'),
(50, 'Fede', ' Alvarez', '1978-02-09', 'M', 'https://m.media-amazon.com/images/M/MV5BOWUwYmVkMmEtZGJkMS00NWE1LWEwYzktN2NlOGM3OWZiM2RkXkEyXkFqcGdeQXVyMjc5NDMyMw@@._V1_UY317_CR11,0,214,317_AL_.jpg'),
(51, 'Doug', 'Liman', '1965-07-24', 'M', 'https://m.media-amazon.com/images/M/MV5BODk4MjIwNjU5OF5BMl5BanBnXkFtZTcwODU4Njk1Mw@@._V1_UY317_CR9,0,214,317_AL_.jpg'),
(52, 'Damien', 'Chazelle', '1985-01-19', 'M', 'https://m.media-amazon.com/images/M/MV5BMjE2MzcyODA3MV5BMl5BanBnXkFtZTgwNTA3NTU2MjE@._V1_UY317_CR5,0,214,317_AL_.jpg'),
(53, ' Taika', 'Waititi', '1975-08-16', 'M', 'https://m.media-amazon.com/images/M/MV5BMzk4MDIzNjcwNV5BMl5BanBnXkFtZTgwMTIyMjgwNDI@._V1_UY317_CR20,0,214,317_AL_.jpg'),
(54, 'Jon', 'Favreau', '1966-10-19', 'M', 'https://m.media-amazon.com/images/M/MV5BNjcwNzg4MjktNDNlMC00M2U1LWJmMjgtZTVkMmI4MDI2MTVmXkEyXkFqcGdeQXVyMjI4MDI0NTM@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(55, 'Peyton', ' Reed', '1964-07-03', 'M', 'https://m.media-amazon.com/images/M/MV5BMTkwNTk3MzY2NV5BMl5BanBnXkFtZTgwNjc2MjM0NjE@._V1_UX214_CR0,0,214,317_AL_.jpg'),
(56, 'Joe', 'Russo', '1971-07-08', 'M', 'https://m.media-amazon.com/images/M/MV5BMTc2NzY1NTY5OF5BMl5BanBnXkFtZTgwNjY3ODczNjM@._V1_UY317_CR2,0,214,317_AL_.jpg'),
(57, 'David', 'O. Russell', '1958-08-20', 'M', 'https://m.media-amazon.com/images/M/MV5BMjMyMzg4NjA0Nl5BMl5BanBnXkFtZTgwNTI5NjQ5NjE@._V1_UY317_CR8,0,214,317_AL_.jpg'),
(58, 'John', 'Lasseter', '1957-01-12', 'M', 'https://m.media-amazon.com/images/M/MV5BMTQ5NTczNjE5MV5BMl5BanBnXkFtZTcwMTA1MTQ3Mg@@._V1_UY317_CR16,0,214,317_AL_.jpg'),
(59, ' Jean-Marc', 'Vallée', '1963-03-09', 'M', 'https://m.media-amazon.com/images/M/MV5BMTczNDUyMTg1OV5BMl5BanBnXkFtZTgwODAzOTIxMDE@._V1_UY317_CR12,0,214,317_AL_.jpg'),
(61, 'Vince', 'Gilligan', NULL, 'm', 'm'),
(62, 'David ', 'Benioff', NULL, 'm', 'm'),
(63, 'clark', 'johnson', NULL, 'm', 'm'),
(64, 'steven', 'sandoval', NULL, 'm', 'm'),
(65, 'james', 'cameron', NULL, 'm', 'm'),
(66, 'henry', 'bronchtein', NULL, 'm', 'm'),
(67, 'jeremy', 'lovering', NULL, 'm', 'm'),
(68, 'Yasuhiro ', 'Irie', NULL, 'm', 'm'),
(69, 'cari', 'joji', NULL, 'm', 'm'),
(70, 'hideo', 'nakata', NULL, 'm', 'm'),
(71, 'joss', 'whedon', NULL, 'm', 'm'),
(72, 'michael', 'uppendi', NULL, 'm', 'm'),
(73, 'greg', 'danels', NULL, 'm', 'm'),
(74, 'james', 'burrows', NULL, 'm', 'm'),
(75, 'adam', 'pally', NULL, 'm', 'm'),
(76, 'baran', 'odar', NULL, 'm', 'm'),
(77, 'shingo', 'natsume', NULL, 'm', 'm'),
(78, 'jose', 'palida', NULL, 'm', 'm'),
(79, 'hioyuki', 'tanaka', NULL, 'm', 'm'),
(80, 'David ', 'caffery', '1996-07-05', 'M', 'https://assets.mubicdn.net/images/cast_member/50193/image-w240.jpg?1580368272');

-- --------------------------------------------------------

--
-- Table structure for table `director_prize_movie`
--

CREATE TABLE `director_prize_movie` (
  `DIRECTOR_ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `director_prize_series`
--

CREATE TABLE `director_prize_series` (
  `DIRECTOR_ID` int(11) NOT NULL,
  `SERIES_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL,
  `YEAR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fantasy_character`
--

CREATE TABLE `fantasy_character` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `LNAME` varchar(100) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `BIRTH_DATE` date DEFAULT NULL,
  `STORY` varchar(1000) DEFAULT NULL,
  `STORY_ID` int(11) DEFAULT NULL,
  `IMAGE` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `funded_movie`
--

CREATE TABLE `funded_movie` (
  `MOVIE_ID` int(11) NOT NULL,
  `PRODUCTION_COMPANY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funded_movie`
--

INSERT INTO `funded_movie` (`MOVIE_ID`, `PRODUCTION_COMPANY_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 3),
(2, 4),
(9, 2),
(9, 5),
(9, 7),
(10, 8),
(10, 9),
(11, 11),
(11, 13),
(11, 33),
(12, 28),
(13, 15),
(14, 15),
(14, 17),
(15, 17),
(15, 18),
(16, 19),
(16, 20),
(16, 21),
(17, 22),
(17, 23),
(17, 24),
(18, 10),
(19, 28),
(20, 2),
(20, 4),
(21, 2),
(21, 32),
(22, 30),
(22, 31),
(22, 32),
(23, 17),
(23, 18),
(23, 33),
(24, 10),
(25, 1),
(25, 2);

-- --------------------------------------------------------

--
-- Table structure for table `funded_series`
--

CREATE TABLE `funded_series` (
  `SERIES_ID` int(11) NOT NULL,
  `PRODUCTION_COMPANY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funded_series`
--

INSERT INTO `funded_series` (`SERIES_ID`, `PRODUCTION_COMPANY_ID`) VALUES
(1, 50),
(2, 53),
(3, 53),
(3, 54),
(4, 55),
(5, 56),
(6, 53),
(7, 52),
(8, 50),
(9, 53),
(10, 61),
(11, 62),
(12, 50),
(13, 63),
(14, 63),
(15, 64),
(16, 50),
(17, 65),
(18, 50),
(19, 66),
(20, 50),
(20, 51),
(20, 52);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID` int(11) NOT NULL,
  `GENRE_TYPE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`ID`, `GENRE_TYPE`) VALUES
(1, 'Action'),
(2, 'Drama'),
(3, 'Crime'),
(4, 'Adventure'),
(5, 'Sci-Fi'),
(6, 'Animation'),
(7, 'Biography'),
(8, 'Comedy'),
(9, 'Horror'),
(10, 'Music'),
(11, 'Mystery'),
(12, 'Romance'),
(13, 'Thriller'),
(14, 'War'),
(15, '');

-- --------------------------------------------------------

--
-- Table structure for table `genre_relation_movie`
--

CREATE TABLE `genre_relation_movie` (
  `MOVIE_ID` int(11) NOT NULL,
  `GENRE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre_relation_movie`
--

INSERT INTO `genre_relation_movie` (`MOVIE_ID`, `GENRE_ID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 4),
(2, 5),
(9, 1),
(9, 4),
(9, 5),
(10, 2),
(10, 9),
(10, 11),
(11, 1),
(11, 2),
(11, 11),
(12, 2),
(12, 5),
(13, 2),
(13, 11),
(13, 13),
(14, 1),
(14, 4),
(14, 5),
(15, 1),
(15, 4),
(15, 5),
(16, 11),
(16, 13),
(17, 1),
(17, 4),
(17, 5),
(18, 1),
(18, 2),
(18, 3),
(19, 2),
(19, 7),
(19, 13),
(20, 2),
(20, 5),
(20, 11),
(21, 2),
(21, 3),
(21, 13),
(22, 9),
(23, 1),
(23, 4),
(23, 5),
(24, 2),
(24, 3),
(24, 8),
(25, 2),
(25, 13);

-- --------------------------------------------------------

--
-- Table structure for table `genre_relation_series`
--

CREATE TABLE `genre_relation_series` (
  `SERIES_ID` int(11) NOT NULL,
  `GENRE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre_relation_series`
--

INSERT INTO `genre_relation_series` (`SERIES_ID`, `GENRE_ID`) VALUES
(1, 2),
(1, 13),
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(11) NOT NULL,
  `NAME_MOVIE` varchar(100) NOT NULL,
  `YEAR` int(11) DEFAULT NULL,
  `DURATION_MIN` int(11) DEFAULT NULL,
  `DESCRIPTION_OF_MOVIE` mediumtext DEFAULT NULL,
  `LANGUAGE_MOBIE` varchar(50) DEFAULT NULL,
  `REVENUE` int(20) DEFAULT NULL,
  `BUDGET` int(20) DEFAULT NULL,
  `HOME_PAGE_LINK` varchar(1000) DEFAULT NULL,
  `POSTER` varchar(1000) DEFAULT NULL,
  `ADMIN_INSETED_MOVIE` varchar(100) DEFAULT NULL,
  `IMDB_RATE` int(11) DEFAULT NULL,
  `IMDB_RATE_COUNT` int(11) DEFAULT NULL,
  `DIRECTOR_ID` int(11) DEFAULT NULL,
  `PRIZE_WON_ID` int(11) DEFAULT NULL,
  `STORY_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `NAME_MOVIE`, `YEAR`, `DURATION_MIN`, `DESCRIPTION_OF_MOVIE`, `LANGUAGE_MOBIE`, `REVENUE`, `BUDGET`, `HOME_PAGE_LINK`, `POSTER`, `ADMIN_INSETED_MOVIE`, `IMDB_RATE`, `IMDB_RATE_COUNT`, `DIRECTOR_ID`, `PRIZE_WON_ID`, `STORY_ID`) VALUES
(1, 'The Dark Knight', 2008, 152, 'Set within a year after the events of Batman Begins (2005), Batman, Lieutenant James Gordon, and new District Attorney Harvey Dent successfully begin to round up the criminals that plague Gotham City, until a mysterious and sadistic criminal mastermind known only as \"The Joker\" appears in Gotham, creating a new wave of chaos. Batman\'s struggle against The Joker becomes deeply personal, forcing him to \"confront everything he believes\" and improve his technology to stop him. A love triangle develops between Bruce Wayne, Dent, and Rachel Dawes. Written by Leon Lombardi', 'English', 1005973645, 185000000, 'https://www.imdb.com/title/tt0468569/', 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'Donya Esawi', 9, 2293453, 3, 2, 3),
(2, 'Inception', 2010, 158, 'Dom Cobb is a skilled thief, the absolute best in the dangerous art of extraction, stealing valuable secrets from deep within the subconscious during the dream state, when the mind is at its most vulnerable. Cobb\'s rare ability has made him a coveted player in this treacherous new world of corporate espionage, but it has also made him an international fugitive and cost him everything he has ever loved. Now Cobb is being offered a chance at redemption. One last job could give him his life back but only if he can accomplish the impossible, inception. Instead of the perfect heist, Cobb and his team of specialists have to pull off the reverse: their task is not to steal an idea, but to plant one. If they succeed, it could be the perfect crime. But no amount of careful planning or expertise can prepare the team for the dangerous enemy that seems to predict their every move. An enemy that only Cobb could have seen coming. Written by Warner Bros.', 'English', 836836967, 160000000, 'https://www.imdb.com/title/tt1375666/?ref_=nv_sr_srsg_0', 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg', 'Donya Esawi', 9, 2057430, 3, NULL, 2),
(5, 'Parasite', 2019, 132, 'The Kims - mother and father Chung-sook and Ki-taek, and their young adult offspring, son Ki-woo and daughter Ki-jung - are a poor family living in a shabby and cramped half basement apartment in a busy lower working class commercial district of Seoul. Without even knowing it, they, especially Mr. and Mrs. Kim, literally smell of poverty. Often as a collective, they perpetrate minor scams to get by, and even when they have jobs, they do the minimum work required. Ki-woo is the one who has dreams of getting out of poverty by one day going to university. Despite not having that university education, Ki-woo is chosen by his university student friend Min, who is leaving to go to school, to take over his tutoring job to Park Da-hye, who Min plans to date once he returns to Seoul and she herself is in university. The Parks are a wealthy family who for four years have lived in their modernistic house designed by and the former residence of famed architect Namgoong. While Mr. and Mrs. Park ... Written by Huggo', 'Korean', 258818737, 11400000, 'https://www.imdb.com/title/tt6751668/?ref_=fn_al_tt_1', 'https://mymodernmet.com/wp/wp-content/uploads/2020/02/parasite-film-tribute-1.jpg', 'Donya Esawi', 9, 538998, 5, 1, 4),
(9, 'Mad Max: Fury Road', 2015, 135, 'An apocalyptic story set in the furthest reaches of our planet, in a stark desert landscape where humanity is broken, and almost everyone is crazed fighting for the necessities of life. Within this world exist two rebels on the run who just might be able to restore order. There\'s Max, a man of action and a man of few words, who seeks peace of mind following the loss of his wife and child in the aftermath of the chaos. And Furiosa, a woman of action and a woman who believes her path to survival may be achieved if she can make it across the desert back to her childhood homeland', 'English', 375389666, 150000000, 'https://www.imdb.com/title/tt1392190/', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTNk4XtkrYxOuUWi_Q4GYos6Siswi3IAzKD4mUUXlCUNXIj6CSl', 'Donya Esawi', 8, 877850, 7, NULL, 7),
(10, 'The Invisible Man', 2020, 124, 'The film follows Cecilia, who receives the news of her abusive ex-boyfriend\'s suicide. She begins to re-build her life for the better. However, her sense of reality is put into question when she begins to suspect her deceased lover is not actually dead. Written by Max', 'English', 143151000, 7000000, 'https://www.imdb.com/title/tt1051906/', 'https://www.scifinow.co.uk/wp-content/uploads/2019/11/invisible_man_xlg.jpg', 'Donya Esawi', 7, 161231, 8, NULL, 8),
(11, 'Blade Runner 2049', 2017, 164, 'Thirty years after the events of Blade Runner (1982), a new Blade Runner, L.A.P.D. Officer \"K\" (Ryan Gosling), unearths a long-buried secret that has the potential to plunge what\'s left of society into chaos. K\'s discovery leads him on a quest to find Rick Deckard (Harrison Ford), a former L.A.P.D. Blade Runner, who has been missing for thirty years.', 'English', 259240525, 150000000, 'https://www.imdb.com/title/tt1856101/', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRPy3V6DD-NB3mNaObNlXqdE80zou2yK4Zk4xkq98vmKDI-6i3B', 'Donya Esawi', 8, 458277, 10, NULL, 9),
(12, 'Arrival', 2016, 116, 'Linguistics professor Louise Banks leads an elite team of investigators when gigantic spaceships touchdown in 12 locations around the world. As nations teeter on the verge of global war, Banks and her crew must race against time to find a way to communicate with the extraterrestrial visitors. Hoping to unravel the mystery, she takes a chance that could threaten her life and quite possibly all of mankind.', 'English', 47000000, 47000000, 'https://www.imdb.com/title/tt2543164/?ref_=fn_al_tt_1', 'https://images-na.ssl-images-amazon.com/images/I/81fvNfPZBsL._RI_.jpg', 'Donya Esawi', 8, 591007, 10, NULL, NULL),
(13, 'Gone Girl', 2014, 149, 'Linguistics professor Louise Banks leads an elite team of investigators when gigantic spaceships touchdown in 12 locations around the world. As nations teeter on the verge of global war, Banks and her crew must race against time to find a way to communicate with the extraterrestrial visitors. Hoping to unravel the mystery, she takes a chance that could threaten her life and quite possibly all of mankind.', 'English', 369330363, 61000000, 'https://www.imdb.com/title/tt2267998/?ref_=nv_sr_srsg_0', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ14WrqnG_i2DUCsgsqKIme4ya5XaiEaIoQfsxeOkhDsx6e5ESe', 'Donya Esawi', 8, 855431, 11, NULL, 13),
(14, 'X-Men: Days of Future Past', 2014, 132, 'In the future, the mutants and the humans who help them are slaughtered by powerful robots named Sentinels. Professor Xavier, Wolverine, Magneto, Storm, Kitty Pryde, and her friends meet at a monastery in China and Xavier explains that the invincible Sentinels were created using the DNA of Mystique that was captured in 1973 when she tried to assassinate their creator Dr. Bolivar Trask. Xavier tells that their only chance is return to 1973 using Pryde\'s ability to join Charles Xavier and Erik Lehnsherr to convince Mystique to give up her intention. However, only Wolverine can withstand the damages of the time travel. Will he succeed in stopping Mystique and the Sentinel Program, and save the mutants and their human friends from annihilation?', 'English', 746045700, 200000000, 'https://www.imdb.com/title/tt1877832/?ref_=tt_sims_tt', 'https://vincentmgaine.files.wordpress.com/2014/06/x-men-days-of-future-past-cast-poster-570x829.jpg', 'Donya Esawi', 8, 658380, 12, NULL, 14),
(15, 'Captain America: The First Avenger', 2011, 124, 'It is 1942, America has entered World War II, and sickly but determined Steve Rogers is frustrated at being rejected yet again for military service. Everything changes when Dr. Erskine recruits him for the secret Project Rebirth. Proving his extraordinary courage, wits and conscience, Rogers undergoes the experiment and his weak body is suddenly enhanced into the maximum human potential. When Dr. Erskine is then immediately assassinated by an agent of Nazi Germany\'s secret HYDRA research department (headed by Johann Schmidt, a.k.a. the Red Skull), Rogers is left as a unique man who is initially misused as a propaganda mascot; however, when his comrades need him, Rogers goes on a successful adventure that truly makes him Captain America, and his war against Schmidt begins.', 'English', 370569774, 140000000, 'https://www.imdb.com/title/tt0458339/?ref_=nv_sr_srsg_3', 'https://images2.vudu.com/poster2/195891-338', 'Donya Esawi', 7, 737356, 13, NULL, 15),
(16, 'Shutter Island', 2010, 138, 'In 1954, up-and-coming U.S. marshal Teddy Daniels is assigned to investigate the disappearance of a patient from Boston\'s Shutter Island Ashecliffe Hospital. He\'s been pushing for an assignment on the island for personal reasons, but before long he thinks he\'s been brought there as part of a twisted plot by hospital doctors whose radical treatments range from unethical to illegal to downright sinister. Teddy\'s shrewd investigating skills soon provide a promising lead, but the hospital refuses him access to records he suspects would break the case wide open. As a hurricane cuts off communication with the mainland, more dangerous criminals \"escape\" in the confusion, and the puzzling, improbable clues multiply, Teddy begins to doubt everything - his memory, his partner, even his own sanity.', 'English', 294804195, 80000000, 'https://www.imdb.com/title/tt1130884/?ref_=nv_sr_srsg_0', 'https://i.pinimg.com/originals/9d/d5/97/9dd597d3ce3bb1a4bc9539a061834539.png', 'Donya Esawi', 8, 1123840, 14, NULL, 16),
(17, 'The Hunger Games', 2012, 142, 'In a dystopian future, the totalitarian nation of Panem is divided into 12 districts and the Capitol. Each year two young representatives from each district are selected by lottery to participate in The Hunger Games. Part entertainment, part brutal retribution for a past rebellion, the televised games are broadcast throughout Panem. The 24 participants are forced to eliminate their competitors while the citizens of Panem are required to watch. When 16-year-old Katniss\' young sister, Prim, is selected as District 12\'s female representative, Katniss volunteers to take her place. She and her male counterpart, Peeta, are pitted against bigger, stronger representatives, some of whom have trained for this their whole lives.', 'English', 408010692, 78000000, 'https://www.imdb.com/title/tt1392170/?ref_=nv_sr_srsg_0', 'https://m.media-amazon.com/images/M/MV5BMjA4NDg3NzYxMF5BMl5BanBnXkFtZTcwNTgyNzkyNw@@._V1_.jpg', 'Donya Esawi', 7, 842424, 15, NULL, 17),
(18, 'Baby Driver', 2017, 0, 'Baby is a young and partially hearing impaired getaway driver who can make any wild move while in motion with the right track playing. It\'s a critical talent he needs to survive his indentured servitude to the crime boss, Doc, who values his role in his meticulously planned robberies. However, just when Baby thinks he is finally free and clear to have his own life with his new girlfriend, Debora, Doc coerces him back for another job. Now saddled with a crew of thugs too violently unstable to keep to Doc\'s plans, Baby finds himself and everything he cares for in terrible danger. To survive and escape the coming maelstrom, it will take all of Baby\'s skill, wits and daring, but even on the best track, can he make it when life is forcing him to face the music?', 'English', 226945087, 34000000, 'https://www.imdb.com/title/tt3890160/?ref_=fn_al_tt_1', 'https://m.media-amazon.com/images/M/MV5BMjM3MjQ1MzkxNl5BMl5BanBnXkFtZTgwODk1ODgyMjI@._V1_.jpg', 'Donya Esawi', 8, 436326, 16, NULL, 18),
(19, 'The Imitation Game', 2014, 114, 'Based on the real life story of legendary cryptanalyst Alan Turing, the film portrays the nail-biting race against time by Turing and his brilliant team of code-breakers at Britain\'s top-secret Government Code and Cypher School at Bletchley Park, during the darkest days of World War II.', 'English', 233555708, 14000000, 'https://www.imdb.com/title/tt2084970/?ref_=fn_al_tt_1', 'https://m.media-amazon.com/images/M/MV5BOTgwMzFiMWYtZDhlNS00ODNkLWJiODAtZDVhNzgyNzJhYjQ4L2ltYWdlXkEyXkFqcGdeQXVyNzEzOTYxNTQ@._V1_.jpg', 'Donya Esawi', 8, 632803, 18, NULL, 19),
(20, 'The Prestige', 2006, 130, 'In the end of the nineteenth century, in London, Robert Angier, his beloved wife Julia McCullough, and Alfred Borden are friends and assistants of a magician. When Julia accidentally dies during a performance, Robert blames Alfred for her death, and they become enemies. Both become famous and rival magicians, sabotaging the performance of the other on the stage. When Alfred performs a successful trick, Robert becomes obsessed trying to disclose the secret of his competitor with tragic consequences.', 'English', 109676311, 40000000, 'https://www.imdb.com/title/tt0482571/?ref_=nv_sr_srsg_0', 'https://miro.medium.com/max/720/1*ljuh0xsXv8cENJBNupvQ5A.png', 'Donya Esawi', 9, 1184805, 3, NULL, 20),
(21, 'The Departed', 2006, 0, 'In this crime-action tour de force, the South Boston state police force is waging war on Irish-American organized crime. Young undercover cop Billy Costigan is assigned to infiltrate the mob syndicate run by gangland chief Frank Costello. While Billy quickly gains Costello\'s confidence, Colin Sullivan, a hardened young criminal who has infiltrated the state police as an informer for the syndicate is rising to a position of power in the Special Investigation Unit. Each man becomes deeply consumed by their double lives, gathering information about the plans and counter-plans of the operations they have penetrated. But when it becomes clear to both the mob and the police that there is a mole in their midst, Billy and Colin are suddenly in danger of being caught and exposed to the enemy - and each must race to uncover the identity of the other man in time to save themselves. But is either willing to turn on their friends and comrades they\'ve made during their long stints undercover?', 'English', 291465373, 90000000, 'https://www.imdb.com/title/tt0407887/?ref_=nv_sr_srsg_0', 'https://tvguide1.cbsistatic.com/feed/1/655/thumbs/12310655_1200x1600.jpg', 'Donya Esawi', 9, 1184527, 14, NULL, NULL),
(22, 'It', 2017, 135, 'In the Town of Derry, the local kids are disappearing one by one. In a place known as \'The Barrens\', a group of seven kids are united by their horrifying and strange encounters with an evil clown and their determination to kill It.', 'English', 701796444, 35000000, 'https://www.imdb.com/title/tt1396484/?ref_=nv_sr_srsg_3', 'https://assets1.ignimgs.com/2017/03/28/unnamed-1490727740859.jpg', 'Donya Esawi', 7, 457000, 20, NULL, 21),
(23, 'Venom', 2018, 112, 'After a faulty interview with the Life Foundation ruins his career, former reporter Eddie Brock\'s life is in pieces. Six months later, he comes across the Life Foundation again, and he comes into contact with an alien symbiote and becomes Venom, a parasitic antihero.', 'English', 856085151, 100000000, 'https://www.imdb.com/title/tt1270797/?ref_=nv_sr_srsg_3', 'https://morningpicker.com/wp-content/uploads/2019/07/DP_4275065_TC_1400x2100_DP_4275066_VENOM_2000x3000_EST_1.jpg', 'Donya Esawi', 7, 358000, 56, NULL, 22),
(24, 'Knives Out', 2019, 130, 'When renowned crime novelist Harlan Thrombey (Christopher Plummer) is found dead at his estate just after his 85th birthday, the inquisitive and debonair Detective Benoit Blanc (Daniel Craig) is mysteriously enlisted to investigate. From Harlan\'s disfunctional family to his devoted staff, Blanc sifts through a web of red herrings and self-serving lies to uncover the truth behind Harlan\'s untimely death.', 'English', 311398301, 40000000, 'https://www.imdb.com/title/tt8946378/?ref_=nv_sr_srsg_0', 'https://i.pinimg.com/originals/09/74/f6/0974f6a431d81464f0549ebd0d549608.jpg', 'Donya Esawi', 8, 443126, 22, NULL, NULL),
(25, 'Joker', 2019, 122, 'Arthur Fleck works as a clown and is an aspiring stand-up comic. He has mental health issues, part of which involves uncontrollable laughter. Times are tough and, due to his issues and occupation, Arthur has an even worse time than most. Over time these issues bear down on him, shaping his actions, making him ultimately take on the persona he is more known as...Joker.', 'English', 1074251311, 55000000, 'https://www.imdb.com/title/tt7286456/?ref_=fn_al_tt_1', 'https://www.vintagemovieposters.co.uk/wp-content/uploads/2019/09/IMG_2911.jpeg', 'Donya Esawi', 9, 927004, 6, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE `prize` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(1000) DEFAULT NULL,
  `TYPE_OF_PRTIZE` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prize`
--

INSERT INTO `prize` (`ID`, `TITLE`, `TYPE_OF_PRTIZE`) VALUES
(1, 'Oscar', 'Best Movie'),
(2, 'AFI Awards, USA', 'Movie of the Year'),
(3, 'Empire Award', 'Best Movie'),
(4, 'Academy Award', 'Best Visual Effects'),
(5, 'MTV Movie Award', 'Most Frightened Performance'),
(6, 'Academy Award', 'Best Cinematography'),
(7, 'Academy Award', 'Best Sound Editing'),
(8, 'Golden Globes', 'Best Movie'),
(9, 'Oscar', 'Best Actor'),
(10, 'Golden Globes', 'Best Actor'),
(11, 'Golden Globes', 'Best Director'),
(12, 'Oscar', 'Best Performance'),
(13, 'Oscar', 'Best Assistant Director'),
(14, 'Golden Globes', 'Best Assistant Director'),
(15, 'Golden Globes', 'Best Director, Dramatic Picture'),
(16, 'Golden Globes', 'Best Dance Direction'),
(17, 'Oscar', 'Best Director, Dramatic Picture'),
(18, 'Oscar', 'Best Dance Direction'),
(19, 'Oscar', 'Best Production Design'),
(20, 'Golden Globes', 'Best Actress'),
(21, 'Oscar', 'Best Actress');

-- --------------------------------------------------------

--
-- Table structure for table `production_company`
--

CREATE TABLE `production_company` (
  `ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(100) DEFAULT NULL,
  `YEAR_FOUNDED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production_company`
--

INSERT INTO `production_company` (`ID`, `COMPANY_NAME`, `YEAR_FOUNDED`) VALUES
(1, 'DC Comics', 1934),
(2, 'Warner Bros', 1923),
(3, 'Legendary Entertainment', 2000),
(4, 'Syncopy Inc.', 2001),
(5, 'Village Roadshow Pictures', 1986),
(6, 'CJ Entertainment', 2000),
(7, 'Kennedy Miller Mitchell', 1978),
(8, 'Blumhouse Productions', 2000),
(9, 'Universal Pictures', 1912),
(10, 'MRC', 2006),
(11, 'Alcon Entertainment', 1997),
(12, 'Columbia Pictures', 1924),
(13, 'Scott Free Productions', 1980),
(14, 'Thunderbird Entertainment', 2003),
(15, '20th Century Studios', 1935),
(16, 'Regency Enterprises', 1982),
(17, 'Marvel Entertainment', 1998),
(18, 'Marvel Studios', 1993),
(19, 'Appian Way Productions', 2004),
(20, 'Paramount Pictures', 1912),
(21, 'Sikelia Productions', 1989),
(22, 'Lionsgate', 1997),
(23, 'Lionsgate Films', 1962),
(24, 'Color Force', 2007),
(25, 'TriStar Pictures', 1983),
(26, 'Working Title Films', 1983),
(27, 'Big Talk Productions', 1994),
(28, 'FilmNation Entertainment', 2008),
(29, 'Blinding Edge Pictures', 1998),
(30, 'New Line Cinema', 1967),
(31, 'RatPac-Dune Entertainment', 2006),
(32, 'Vertigo Entertainment', 2001),
(33, 'Sony Pictures', 1991),
(34, 'Searchlight Pictures', 1994),
(35, 'Protozoa Pictures', 1997),
(36, 'Summit Entertainment', 1991),
(37, 'Thunder Road Pictures', 2000),
(50, 'Netflix', 1997),
(51, 'BBC Two', 1964),
(52, 'BBC One', 1936),
(53, 'HBO', 2013),
(54, 'BBC Four', 2002),
(55, 'Justin Roiland\'s Solo Vanity Card', 2007),
(56, 'Nickelodeon Animation Studio', 2005),
(58, 'BBC Cymru Wales', 1964),
(59, 'Hartswood Films', 2009),
(60, 'Aniplex', 1995),
(61, 'Nippon Television Network System', 1972),
(62, 'Fox Broadcasting Company', 1986),
(63, 'NBC', 1926),
(64, 'Disney+', 2019),
(65, 'Madhouse', 1972),
(66, 'MAPPA', 2011);

-- --------------------------------------------------------

--
-- Table structure for table `rate_movie`
--

CREATE TABLE `rate_movie` (
  `USER_NAME_WHO_RATED` varchar(100) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `RATE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rate_series`
--

CREATE TABLE `rate_series` (
  `USER_NAME_WHO_RATED` varchar(100) NOT NULL,
  `SERIES_ID` int(11) NOT NULL,
  `RATE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `SERIES_ID` int(11) NOT NULL,
  `SEASON_NUMBER` int(11) NOT NULL,
  `POSTER` varchar(1000) DEFAULT NULL,
  `SEASON_LINK` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `ID` int(11) NOT NULL,
  `NAME_SERIES` varchar(100) NOT NULL,
  `YEAR` int(11) DEFAULT NULL,
  `DURATION_MIN` int(11) DEFAULT NULL,
  `DESCRIPTION` varchar(1000) DEFAULT NULL,
  `LANGUAGE` varchar(50) DEFAULT NULL,
  `REVENUE` int(11) DEFAULT NULL,
  `BUDGET` int(11) DEFAULT NULL,
  `HOME_PAGE_LINK` varchar(1000) DEFAULT NULL,
  `POSTER` varchar(1000) DEFAULT NULL,
  `ADMIN_INSETED_SERIES` varchar(100) DEFAULT NULL,
  `IMDB_RATE` int(11) DEFAULT NULL,
  `IMDB_RATE_COUNT` int(11) DEFAULT NULL,
  `NUMBER_OF_EPISODES_IN_SEASON` int(11) DEFAULT NULL,
  `DIRECTOR_ID` int(11) NOT NULL,
  `PRIZE_WON_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`ID`, `NAME_SERIES`, `YEAR`, `DURATION_MIN`, `DESCRIPTION`, `LANGUAGE`, `REVENUE`, `BUDGET`, `HOME_PAGE_LINK`, `POSTER`, `ADMIN_INSETED_SERIES`, `IMDB_RATE`, `IMDB_RATE_COUNT`, `NUMBER_OF_EPISODES_IN_SEASON`, `DIRECTOR_ID`, `PRIZE_WON_ID`) VALUES
(1, 'breaking bad', 2008, 45, 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family', 'english', 900000000, 10000000, 'https://www.imdb.com/title/tt0903747/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BMjhiMzgxZTctNDc1Ni00OTIxLTlhMTYtZTA3ZWFkODRkNmE2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY98_CR1,0,67,98_AL_.jpg', 'Donya Esawi', 9, 243423432, 12, 61, NULL),
(2, 'game of thrones', 2010, 57, 'fight fot the throne', 'english', 2123123, 98889897, 'https://www.imdb.com/title/tt0944947/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_UY98_CR2,0,67,98_AL_.jpg', 'Donya Esawi', 9, 42342345, 12, 62, NULL),
(3, 'the wire', 1990, 57, 'drug dealers are mean', 'english', 1232312, 789897897, 'https://www.imdb.com/title/tt0306414/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BZmY5ZDMxODEtNWIwOS00NjdkLTkyMjktNWRjMDhmYjJjN2RmXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 9, 64647657, 10, 63, NULL),
(4, 'rick and morty', 2015, 23, 'realy dark comdey for a cartoon', 'english', 235445, 2147483647, 'https://www.imdb.com/title/tt2861424/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BZjRjOTFkOTktZWUzMi00YzMyLThkMmYtMjEwNmQyNzliYTNmXkEyXkFqcGdeQXVyNzQ1ODk3MTQ@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 9, 57574563, 10, 64, NULL),
(5, 'avatar', 2008, 23, 'watch the avatar bends air', 'english', 31242342, 2147483647, 'https://www.imdb.com/title/tt0417299/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BODc5YTBhMTItMjhkNi00ZTIxLWI0YjAtNTZmOTY0YjRlZGQ0XkEyXkFqcGdeQXVyODUwNjEzMzg@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 9, 2147483647, 6, 65, NULL),
(6, 'sorpanos', 2000, 40, 'the wise man goes with bad mental health', 'english', 12312, 78978978, 'https://www.imdb.com/title/tt0141842/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BZGJjYzhjYTYtMDBjYy00OWU1LTg5OTYtNmYwOTZmZjE3ZDdhXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_UY98_CR1,0,67,98_AL_.jpg', 'Donya Esawi', 9, 756756746, 7, 66, NULL),
(7, 'sherlock', 2010, 40, 'the smartest detective', 'english', 2147483647, 9789789, 'https://www.imdb.com/title/tt1475582/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BMWY3NTljMjEtYzRiMi00NWM2LTkzNjItZTVmZjE0MTdjMjJhL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNTQ4NTc5OTU@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 9, 3524525, 4, 67, NULL),
(8, 'alchemist', 2005, 20, 'anime brothers searching for a stone', 'english', 123123123, 789789789, 'https://www.imdb.com/title/tt1355642/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BZmEzN2YzOTItMDI5MS00MGU4LWI1NWQtOTg5ZThhNGQwYTEzXkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UY98_CR1,0,67,98_AL_.jpg', 'Donya Esawi', 9, 467578, 12, 68, NULL),
(9, 'true detective', 2006, 40, 'a thriller detective series', 'english', 2147483647, 789789789, 'https://www.imdb.com/title/tt2356777/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BMTUwMGM2ZmYtZGEyZC00OWQyLWI2Y2QtMTdjYzMxZGJmNjhjXkEyXkFqcGdeQXVyNjU2ODM5MjU@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 9, 58574563, 6, 69, NULL),
(10, 'death note', 2012, 22, 'you can control death of other people if you have the note', 'english', 3123123, 78978978, 'https://www.imdb.com/title/tt0877057/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BODkzMjhjYTQtYmQyOS00NmZlLTg3Y2UtYjkzN2JkNmRjY2FhXkEyXkFqcGdeQXVyNTM4MDQ5MDc@._V1_UY98_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 9, 63534536, 4, 70, NULL),
(11, 'firefly', 2000, 21, 'the future is now', 'english', 123123123, 978978978, 'https://www.imdb.com/title/tt0303461/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BOTcwNzkwMDItZmM1OC00MmQ2LTgxYjgtOTNiNDgxZDAxMjk0XkEyXkFqcGdeQXVyNDQ0MTYzMDA@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 47567585, 12, 71, NULL),
(12, 'fargo', 1990, 50, 'a murder in dakota', 'english', 123123, 2147483647, 'https://www.imdb.com/title/tt2802850/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BN2NiMGE5M2UtNWNlNC00N2Y4LTkwOWUtMDlkMzEwNTcyOTcyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_UY98_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 675463564, 20, 72, NULL),
(13, 'the office', 2015, 25, 'an office but having funny workers', 'english', 123123, 2147483647, 'https://www.imdb.com/title/tt0386676/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BMDNkOTE4NDQtMTNmYi00MWE0LWE4ZTktYTc0NzhhNWIzNzJiXkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 254536575, 20, 73, NULL),
(14, 'friends', 1990, 20, 'watch friends and how the end up marrying', 'english', 23445432, 2147483647, 'https://www.imdb.com/title/tt0108778/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BNDVkYjU0MzctMWRmZi00NTkxLTgwZWEtOWVhYjZlYjllYmU4XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 8567465, 12, 74, NULL),
(15, 'mandalorian', 1995, 20, 'the hunter of the galaxies', 'english', 53453, 789789789, 'https://www.imdb.com/title/tt8111088/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BZDhlMzY0ZGItZTcyNS00ZTAxLWIyMmYtZGQ2ODg5OWZiYmJkXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 2543678, 13, 75, NULL),
(16, 'dark', 2018, 60, 'each episode with a new story', 'english', 535, 879789789, 'https://www.imdb.com/title/tt5753856/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BOTk2NzUyOTctZDdlMS00MDJlLTgzNTEtNzQzYjFhNjA0YjBjXkEyXkFqcGdeQXVyMjg1NDcxNDE@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 5653, 11, 76, NULL),
(17, 'one punch man', 2017, 20, 'he can kill in one punch', 'english', 345345, 789789789, 'https://www.imdb.com/title/tt4508902/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BMTNmZDE2NDEtNTg3MS00OTE1LThlZGUtOGZkZTg0NTUyNGVmXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 53635635, 44, 77, NULL),
(18, 'narcos', 2011, 40, 'the drug lord of the americas', 'english', 3454, 87879979, 'https://www.imdb.com/title/tt2707408/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BNmFjODU3YzgtMGUwNC00ZGI3LWFkZjQtMjkxZDc3NmQ1MzcyXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 653654, 33, 78, NULL),
(19, 'attack on titan', 2013, 20, 'titans control over the world and eat human', 'english', 34534, 78978978, 'https://www.imdb.com/title/tt2560140/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BMTY5ODk1NzUyMl5BMl5BanBnXkFtZTgwMjUyNzEyMTE@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 2147483647, 12, 79, NULL),
(20, 'peaky', 2014, 40, 'gangsters after world war one were really strong', 'english', 45345, 2147483647, 'https://www.imdb.com/title/tt2442560/?ref_=adv_li_tt', 'https://m.media-amazon.com/images/M/MV5BMTkzNjEzMDEzMF5BMl5BanBnXkFtZTgwMDI0MjE4MjE@._V1_UX67_CR0,0,67,98_AL_.jpg', 'Donya Esawi', 8, 2147483647, 8, 80, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `STORY_ID` int(11) NOT NULL,
  `STORY_NAME` varchar(500) DEFAULT NULL,
  `AUTHOR_NAME` varchar(500) DEFAULT NULL,
  `POSTER` varchar(1000) DEFAULT NULL,
  `Overview` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`STORY_ID`, `STORY_NAME`, `AUTHOR_NAME`, `POSTER`, `Overview`) VALUES
(2, 'Inception', 'Christopher Nolan', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781608870158/inception-9781608870158_lg.jpg', 'Inception, writer-director Christopher Nolan’s seventh feature film, joins the epic scope of The Dark Knight with the narrative sophistication of Memento. The story of a group of thieves who specialize in invading the mind through one’s dreams, Inception explores the Nolan’s signature psychological themes of memory, paranoia, and self-doubt as the protagonist, Dom Cobb, is pitted against a hostile subconscious spurred on by personal demons and regrets from the past. In a conversational preface, Nolan discusses with brother and frequent collaborator, Jonah, the genesis of the idea for the film and the decade-long process it took to write it. Detailing the results of Nolan’s efforts, Inception: The Shooting Script includes key storyboard sequences, full-color concept art, and an appendix on the workings of the mysterious Pasiv Device that Cobb and his fellow extractors use to initiate the dream-share. An exclusive exploration of a highly original concept, Inception: The Shooting Script i'),
(3, 'The Dark Knight', 'Dennis O\'Neil', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1347798234l/3152869.jpg', 'Allied with both the police department and the district attorney\'s office, the vigilante known as Batman continues to bring justice and hope to Gotham City.\r\nBut one man dares to mock Batman\'s mission. A man with a twisted sense of humor. A man whose grotesque smile is reflected on the calling card he leaves at the scene of his crimes: The Joker. '),
(4, 'Parasite: A Graphic Novel in Storyboards', ' Bong Joon Ho', 'https://images-na.ssl-images-amazon.com/images/I/51bg9ormHQL._SX407_BO1,204,203,200_.jpg', 'As part of his unique creative process, Director Bong Joon Ho storyboarded each shot of PARASITE prior to the filming of every scene. Accompanied by the film\'s dialogue, the storyboards he drew capture the story in its entirety and inspired the composition of the film\'s every frame and scene. Director Bong has also written a foreword and provided early concept drawings and photos from the set, which take the reader even deeper into the vision that gave rise to this stunning cinematic achievement. Director Bong\'s illustrations share the illuminating power of his writing and directing. The result is a gorgeous, riveting read and a fresh look at the vertiginous delights and surprises of Bong Joon Ho\'s deeply affecting, genre-defying story.'),
(5, 'Batman: The Killing Joke', 'Alan Moore', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZBG5-GCjKVcS4YCUBuAtG_URrkLjyqJTzUKstsHfoB11sgYrj', 'The plot revolves around a largely psychological battle between Batman and his longtime foe the Joker, who has escaped from Arkham Asylum. Batman paid a visit to Arkham Asylum, and specifically to the Joker/\'s cell. He then tells the Clown Prince of Crime that he/\'s been thinking of their battles, more specifically how they/\'re most likely going to end: One of them is most likely going to kill the other, whether it be Joker killing Batman, or Batman killing Joker, that most likely it may happen either sooner or later, and wonders if Joker himself is aware of that. However, he then realizes the man in the cell is not actually the Joker, and demands to know where he is. The Joker intends to drive Gotham City Police Commissioner James Gordon insane to prove that the most upstanding citizen is capable of going mad after having /\"one bad day/\". As part of his plan, the Joker managed to scam the owner of a run-down amusement park into giving him control, also poisoning him in the process whe'),
(7, 'Mad Max: Fury Road', ' George Miller', 'https://images-na.ssl-images-amazon.com/images/I/61Pw5RKt-7L._SX323_BO1,204,203,200_.jpg', 'In the brutal and lawless Wasteland, witness the rise of the veteran hero turned tyrannical warlord known as Immortan Joe, along with the story of one of his War Boys, the indomitable Nux. Then follow the journey of Furiosa, Joe’s most feared Imperator, and experience the cycle of violence and tragedy as the Road Warrior Max Rockatansky fights to rebuild his Interceptor-the vehicle that ensures his freedom!\r\n\r\nFinally, exclusive to this collection, comes the tale of the mighty War Rig and the lives it claimed throughout its wild road battles'),
(8, 'The Invisible Man', 'H.G. Wells', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388639080l/17184.jpg', 'The Invisible Man is a science fiction novel by H. G. Wells. Originally serialized in Pearson\'s Weekly in 1897, it was published as a novel the same year. The Invisible Man of the title is Griffin, a scientist who has devoted himself to research into optics and invents a way to change a body\'s refractive index to that of air so that it neither absorbs nor reflects light and thus becomes invisible. He successfully carries out this procedure on himself, but fails in his attempt to reverse it. An enthusiast of random and irresponsible violence, Griffin has become an iconic character in horror fiction.[1]While its predecessors, The Time Machine and The Island of Doctor Moreau, were written using first-person narrators, Wells adopts a third-person objective point of view in The Invisible Man. Plot summaryA mysterious man, Griffin, arrives at the local inn of the English village of Iping, West Sussex, during a snowstorm. The stranger wears a long-sleeved, thick coat and gloves; his face is h'),
(9, 'Blade Runner 2049: The Storyboards', 'Sam Hudecki', 'https://images-na.ssl-images-amazon.com/images/I/51qk-pA3x3L._SY451_BO1,204,203,200_.jpg', 'In 1982, film audiences experienced a bold new depiction of the future with the ground-breaking Blade Runner, which was fundamental in establishing the still-vibrant Cyberpunk movement. With the critically acclaimed Blade Runner 2049, director Denis Villeneuve further explored that unique \"future noir\" world, this time following a young blade runner whose discovery of a long-buried secret leads him to track down former blade runner Rick Deckard--the protagonist of the first film--who\'s been missing for some thirty years.'),
(11, 'Fight Club', 'Chuck Palahniuk', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1558216416l/36236124._SY475_.jpg', 'In the world of Fight Club, healthy young people go to meetings of cancer support groups because only there can they find human warmth and compassion. It\\\'s a world where young men gather in the basements of bars to fight strangers \"just as long as they have to.\" And it\\\'s a world where \"nobody cared if he lived or died, and the feeling was fucking mutual.\" Messianic nihilist Tyler Durden is the inventor of Fight Club. Soon thousands of young men across the country are reporting to their work cubes with flattened noses, blackened eyes, and shattered teeth, looking forward to their next bare-knuckle maiming. The oracular, increasingly mysterious Durden then begins to harness the despair, alienation, and violence he sees so clearly into complete anarchy. Every generation frightens and unnerves its parents, and Palahniuk\\\'s first novel is gen X\\\'s most articulate assault yet on baby-boomer sensibilities. This is a dark and disturbing book that dials directly into youthful angst and will likely horrify the parents of teens and twentysomethings. It\\\'s also a powerful, and possibly brilliant, first novel. Thomas Gaughan --This text refers to the hardcover edition.'),
(12, 'Pulp Fiction: The Complete Story of Quentin Tarantino\'s Masterpiece', 'Jason Bailey', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1375144001l/17318250.jpg', 'When Pulp Fiction was released in theaters in 1994, it was immediately hailed as a masterpiece. The New York Times called it a “triumphant, cleverly disorienting journey,” and thirty-one-year-old Quentin Tarantino, with just three feature films to his name, became a sensation: the next great American director. Nearly twenty years later, those who proclaimed Pulp Fiction an instant classic have been proven irrefutably right. In Pulp Fiction: The Complete Story of Quentin Tarantino’s Masterpiece, film expert Jason Bailey explores why Pulp Fiction is such a brilliant and influential film. He discusses how the movie was revolutionary in its use of dialogue (“You can get a steak here, daddy-o,” “Correct-amundo”), time structure, and cinematography—and how it completely transformed the industry and artistry of independent cinema. He examines Tarantino’s influences, illuminates the film’s pop culture references, and describes its phenomenal legacy. Unforgettable characters like Jules Winnfield (Samuel L. Jackson), Vincent Vega (John Travolta), Butch Coolidge (Bruce Willis), and Mia Wallace (Uma Thurman) are scrutinized from all-new angles, and memorable scenes—Christopher Walken’s gold watch monologue, Vince’s explanation of French cuisine—are analyzed and celebrated. Much like the contents of Marcellus Wallace’s briefcase, Pulp Fiction is mysterious and spectacular. This book explains why. Illustrated throughout with original art inspired by the film, with sidebars and special features on everything from casting close calls to deleted scenes, this is the most comprehensive, in-depth book on Pulp Fiction ever published.'),
(13, 'Gone Girl', 'Gillian Flynn', 'https://images-na.ssl-images-amazon.com/images/I/41cSJI7PfHL._SX302_BO1,204,203,200_.jpg', 'On a warm summer morning in North Carthage, Missouri, it is Nick and Amy Dunne’s fifth wedding anniversary. Presents are being wrapped and reservations are being made when Nick’s clever and beautiful wife disappears. Husband-of-the-Year Nick isn’t doing himself any favors with cringe-worthy daydreams about the slope and shape of his wife’s head, but passages from Amy\'s diary reveal the alpha-girl perfectionist could have put anyone dangerously on edge. Under mounting pressure from the police and the media—as well as Amy’s fiercely doting parents—the town golden boy parades an endless series of lies, deceits, and inappropriate behavior. Nick is oddly evasive, and he’s definitely bitter, but is he really a killer?'),
(14, 'Marvel: The X-Men: An Origin Story', '---', 'https://i0.wp.com/books.disney.com/content/uploads/2014/04/X-Men-An-Origin-Story-audio.jpg?resize=327%2C444&ssl=1', 'Professor Charles Xavier has always been different.  Charles is a mutant, and possesses miraculous powers of mind control.  But Charles has a dream for humans and mutants to live together in peace.  And so he has formed the X-Men, an extraordinary band of men and women including Cyclops, Wolverine, and Storm, to rid the world of violence against man or mutant.'),
(15, 'Captain America: An Origin Story', 'Marvel Book Group', 'https://images-na.ssl-images-amazon.com/images/I/51QJdryM+uL._SX368_BO1,204,203,200_.jpg', 'After being chosen to take part in Operation: Rebirth, Steve Rogers was transformed from frail and sickly into a powerful Super-Soldier. Now, with his trusty shield at his side, Steve Rodgers fights for liberty and justice for all as Captain America, the First Avenger!\r\n'),
(16, 'Shutter Island', 'Dennis Lehane', 'https://upload.wikimedia.org/wikipedia/en/a/a2/Shutter_Island_book_cover.jpg', 'The year is 1954. U.S. Marshal Teddy Daniels and his new partner, Chuck Aule, have come to Shutter Island, home of Ashecliffe Hospital for the Criminally Insane, to investigate the disappearance of a patient. Multiple murderess Rachel Solando is loose somewhere on this remote and barren island, despite having been kept in a locked cell under constant surveillance. As a killer hurricane relentlessly bears down on them, a strange case takes on even darker, more sinister shades—with hints of radical experimentation, horrifying surgeries, and lethal countermoves made in the cause of a covert shadow war. No one is going to escape Shutter Island unscathed, because nothing at Ashecliffe Hospital is what it seems. But then neither is Teddy Daniels.'),
(17, 'The Hunger Games', 'Suzanne Collins', 'https://images-na.ssl-images-amazon.com/images/I/41V56ye3PrL._SX328_BO1,204,203,200_.jpg', 'Winning means fame and fortune. Losing means certain death. The Hunger Games have begun. . . .\r\n\r\nIn the ruins of a place once known as North America lies the nation of Panem, a shining Capitol surrounded by twelve outlying districts. The Capitol is harsh and cruel and keeps the districts in line by forcing them all to send one boy and one girl between the ages of twelve and eighteen to participate in the annual Hunger Games, a fight to the death on live TV.\r\nSixteen-year-old Katniss Everdeen regards it as a death sentence when she steps forward to take her sister\'s place in the Games. But Katniss has been close to dead before-and survival, for her, is second nature. Without really meaning to, she becomes a contender. But if she is to win, she will have to start making choices that weigh survival against humanity and life against love.'),
(18, 'Baby Driver: A Story About Myself', 'Jan Kerouac', 'https://images-na.ssl-images-amazon.com/images/I/51Y4YFQJ14L._SX292_BO1,204,203,200_.jpg', 'Just as Jack Kerouac captured the beat of the \'50s, his daughter captured the rhythm of the generation that followed. With a graceful, often disturbing detachment and a spellbinding gift for descriptive imagery, Jan Kerouac explores the tortured, freewheeling soul of a woman on her own road. From an adolescence of LSD, detention homes, probation, pregnancy, and a stillbirth in the Mexican tropics at age 15; to the peace movement in Haight-Ashbury and Washington state; to traveling by bus through Central America with a madman for a lover, Baby Driver moves with the force of a tropical storm.'),
(19, 'Alan Turing: The Enigma', 'Andrew Hodges', 'https://images-na.ssl-images-amazon.com/images/I/51mmO8tlp9L._SX321_BO1,204,203,200_.jpg', 'It is only a slight exaggeration to say that the British mathematician Alan Turing (1912-1954) saved the Allies from the Nazis, invented the computer and artificial intelligence, and anticipated gay liberation by decades--all before his suicide at age forty-one. This New York Times–bestselling biography of the founder of computer science, with a new preface by the author that addresses Turing\'s royal pardon in 2013, is the definitive account of an extraordinary mind and life.\r\n\r\n\r\nCapturing both the inner and outer drama of Turing’s life, Andrew Hodges tells how Turing’s revolutionary idea of 1936--the concept of a universal machine--laid the foundation for the modern computer and how Turing brought the idea to practical realization in 1945 with his electronic design. The book also tells how this work was directly related to Turing’s leading role in breaking the German Enigma ciphers during World War II, a scientific triumph that was critical to Allied victory in the Atlantic. At the same time, this is the tragic account of a man who, despite his wartime service, was eventually arrested, stripped of his security clearance, and forced to undergo a humiliating treatment program--all for trying to live honestly in a society that defined homosexuality as a crime.'),
(20, 'The Prestige', 'Christopher Priest', 'https://images-na.ssl-images-amazon.com/images/I/518k8p8CBxL._SX331_BO1,204,203,200_.jpg', 'Inspiration for the movie directed by Christopher Nolan, starring Hugh Jackman and Christian Bale\r\n\r\nIn 1878, two young stage magicians clash in the dark during the course of a fraudulent séance. From this moment on, their lives become webs of deceit and revelation as they vie to outwit and expose one another.\r\n\r\nTheir rivalry will take them to the peaks of their careers, but with terrible consequences. In the course of pursuing each other\'s ruin, they will deploy all the deception their magicians\' craft can command--the highest misdirection and the darkest science.\r\n\r\nBlood will be spilled, but it will not be enough. In the end, their legacy will pass on for generations...to descendants who must, for their sanity\'s sake, untangle the puzzle left to them.'),
(21, 'It', 'Stephen King', 'https://m.media-amazon.com/images/I/41nngxCNKxL.jpg', 'Welcome to Derry, Maine. It’s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real.\r\n\r\nThey were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness. But the promise they made twenty-eight years ago calls them reunite in the same place where, as teenagers, they battled an evil creature that preyed on the city’s children. Now, children are being murdered again and their repressed memories of that terrifying summer return as they prepare to once again battle the monster lurking in Derry’s sewers.\r\n\r\nReaders of Stephen King know that Derry, Maine, is a place with a deep, dark hold on the author. It reappears in many of his books, including Bag of Bones, Hearts in Atlantis, and 11/22/63. But it all starts with It.'),
(22, 'Ultimate Spider-Man: Venom!', 'Marvel Press', 'https://m.media-amazon.com/images/I/61Mrg3lIDlL._SX260_.jpg', 'When the evil scientist Norman Osborne gets a sample of Spider-Man\'s DNA, he uses it to create a supercharged life form: Venom! When Harry Osborn\'s throws a house party for his friends, Venom decides to drop by uninvited. Will Spider-Man and his Super Hero friends take down the monstrous villain? Or will they fall victim to Venom\'s carnage?'),
(23, 'John Wick', 'Greg Pak', 'https://images-na.ssl-images-amazon.com/images/I/81kZFOkcnmL._SY300_.jpg', 'When a young John Wick emerges from prison and embarks upon his first, epic vendetta, he comes up against a strange, powerful community of assassins and must learn how to master the Book of Rules that guides their lethal business. What are the Three Bills? Who is Calamity? And who was John Wick before he became the Baba Yaga? Here for the first time, read the thrilling origin story of John Wick, from \"Planet Hulk\" writer Greg Pak and \"Dark Horse Presents\" artist Giovanni Valletta.'),
(24, 'Ex Machina Book One', 'Brian K. Vaughan', 'https://images-na.ssl-images-amazon.com/images/I/51wCVDZI5DL._SX322_BO1,204,203,200_.jpg', 'Award-winning writer Brian K. Vaughan (PRIDE OF BAGHDAD, Y: THE LAST MAN) uniquely combines big city politics and superheroes in this criticially acclaimed series. Set in our modern-day world, EX MACHINA tells the story of civil engineer Mitchell Hundred, who becomes America\'s first living, breathing super-hero after a strange accident gives him the power to communicate with machines. Eventually Mitchell tires of risking his life merely to maintain the status quo, retires from masked crime fighting and runs for mayor of New York City, winning by a landslide after the events of 9/11.'),
(25, 'V for Vendetta', 'Alan Moore', 'https://images-na.ssl-images-amazon.com/images/I/51aOaDhv0GL._SX333_BO1,204,203,200_.jpg', 'Set in a futurist totalitarian England, a country without freedom or faith, a mysterious man in a white porcelain mask strikes back against the oppressive overlords on behalf of the voiceless. Armed with only knives and his wits, V, as he’s called, aims to bring about change in this horrific new world. His only ally? A young woman named Evey Hammond. And she is in for much more than she ever bargained for…\r\n\r\nA visionary graphic novel that defines sophisticated storytelling, this powerful tale detailing the loss and fight for individuality has become a cultural touchstone and an enduring allegory for current events. Master storytellers Alan Moore and David Lloyd are at the top of their craft in this terrifying portrait of totalitarianism and resistance.'),
(26, 'Twelve Angry Men', 'Reginald Rose', 'https://images-na.ssl-images-amazon.com/images/I/41KDGcvBqLL._SX324_BO1,204,203,200_.jpg', 'A blistering character study and an examination of the American melting pot and the judicial system that keeps it in check, Twelve Angry Men holds at its core a deeply patriotic faith in the U.S. legal system. The play centers on Juror Eight, who is at first the sole holdout in an 11-1 guilty vote. Eight sets his sights not on proving the other jurors wrong but rather on getting them to look at the situation in a clear-eyed way not affected by their personal prejudices or biases. Reginald Rose deliberately and carefully peels away the layers of artifice from the men and allows a fuller picture to form of them—and of America, at its best and worst.\r\n \r\nAfter the critically acclaimed teleplay aired in 1954, this landmark American drama went on to become a cinematic masterpiece in 1957 starring Henry Fonda, for which Rose wrote the adaptation. More recently, Twelve Angry Men had a successful, and award-winning, run on Broadway.\r\n\r\nFor more than seventy years, Penguin has been the leading publisher of classic literature in the English-speaking world. With more than 1,700 titles, Penguin Classics represents a global bookshelf of the best works throughout history and across genres and disciplines. Readers trust the series to provide authoritative texts enhanced by introductions and notes by distinguished scholars and contemporary authors, as well as up-to-date translations by award-winning translators.'),
(27, 'Little Women', 'Louisa May Alcott', 'https://prodimage.images-bn.com/pimages/9781950435098_p0_v2_s550x406.jpg', 'Louisa May Alcott shares the innocence of girlhood in this classic coming of age story about four sisters—Meg, Jo, Beth, and Amy.\r\n \r\nIn picturesque nineteenth-century New England, tomboyish Jo, beautiful Meg, fragile Beth, and romantic Amy are responsible for keeping a home while their father is off to war. At the same time, they must come to terms with their individual personalities—and make the transition from girlhood to womanhood. It can all be quite a challenge. But the March sisters, however different, are nurtured by their wise and beloved Marmee, bound by their love for each other and the feminine strength they share. Readers of all ages have fallen instantly in love with these Little Women. Their story transcends time—making this novel endure as a classic piece of American literature that has captivated generations of readers with their charm, innocence, and wistful insights.'),
(28, 'Bird Box', 'Josh Malerman', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1383949470l/18498558.jpg', 'Something is out there . . .\r\n\r\nSomething terrifying that must not be seen. One glimpse and a person is driven to deadly violence. No one knows what it is or where it came from.\r\n\r\nFive years after it began, a handful of scattered survivors remain, including Malorie and her two young children. Living in an abandoned house near the river, she has dreamed of fleeing to a place where they might be safe. Now, that the boy and girl are four, it is time to go. But the journey ahead will be terrifying: twenty miles downriver in a rowboat—blindfolded—with nothing to rely on but her wits and the children’s trained ears. One wrong choice and they will die. And something is following them. But is it man, animal, or monster?\r\n\r\nEngulfed in darkness, surrounded by sounds both familiar and frightening, Malorie embarks on a harrowing odyssey—a trip that takes her into an unseen world and back into the past, to the companions who once saved her. Under the guidance of the stalwart Tom, a motely group of strangers banded together against the unseen terror, creating order from the chaos. But when supplies ran low, they were forced to venture outside—and confront the ultimate question: in a world gone mad, who can really be trusted?'),
(29, 'Battle Angel Alita', 'Yukito Kishiro', 'https://images-na.ssl-images-amazon.com/images/I/51GhxQAbcKL._SX344_BO1,204,203,200_.jpg', 'In a dump in the lawless settlement of Scrapyard, far beneath the mysterious space city of Zalem, disgraced cyber-doctor Daisuke Ido makes a strange find: the detached head of a cyborg woman who has lost all her memories. He names her Alita and equips her with a powerful new body, the Berserker. While Alita remembers no details of her former life, a moment of desperation reawakens in her nerves the legendary school of martial arts known as Panzer Kunst. In a place where there is no justice but what people make for themselves, Alita decides to become a hunter-killer, tracking down those who prey on the weak.'),
(30, 'Memento', 'Jonathan Nolan', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1335608630l/6884999.jpg', 'A man named Earl has anterograde amnesia. Because of his inability to remember things for more than a few minutes, he uses notes and tattoos to keep track of new information.'),
(31, 'Room', 'Emma Donoghue', 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1472239721l/31685789._SY475_.jpg', 'Told in the inventive, funny, and poignant voice of Jack, Room is a celebration of resilience—and a powerful story of a mother and son whose love lets them survive the impossible.\r\n\r\nTo five-year-old Jack, Room is the entire world. It is where he was born and grew up; it\'s where he lives with his Ma as they learn and read and eat and sleep and play. At night, his Ma shuts him safely in the wardrobe, where he is meant to be asleep when Old Nick visits.\r\n\r\nRoom is home to Jack, but to Ma, it is the prison where Old Nick has held her captive for seven years. Through determination, ingenuity, and fierce motherly love, Ma has created a life for Jack. But she knows it\'s not enough ... not for her or for him. She devises a bold escape plan, one that relies on her young son\'s bravery and a lot of luck. What she does not realize is just how unprepared she is for the plan to actually work.\r\n\r\nTold entirely in the language of the energetic, pragmatic five-year-old Jack, Room is a celebration of resilience and the limitless bond between parent and child, a brilliantly executed novel about what it means to journey from one world to another'),
(32, 'House of Darkness House of Light: The True Story', 'Andrea Perron', 'https://images-na.ssl-images-amazon.com/images/I/41VeS9BhWxL._SX331_BO1,204,203,200_.jpg', 'Roger and Carolyn Perron purchased the home of their dreams and eventual nightmares in December of 1970. The Arnold Estate, located just beyond the village of Harrisville, Rhode Island seemed the idyllic setting in which to raise a family. The couple unwittingly moved their five young daughters into the ancient and mysterious farmhouse. Secrets were kept and then revealed within a space shared by mortal and immortal alike. Time suddenly became irrelevant; fractured by spirits making their presence known then dispersing into the ether. The house is a portal to the past and a passage to the future. This is a sacred story of spiritual enlightenment, told some thirty years hence. The family is now somewhat less reticent to divulge a closely-guarded experience. Their odyssey is chronicled by the eldest sibling and is an unabridged account of a supernatural excursion. Ed and Lorraine Warren investigated this haunting in a futile attempt to intervene on their behalf. They consider the Perron family saga to be one of the most compelling and significant of a famously ghost-storied career as paranormal researchers. During a séance gone horribly wrong, they unleashed an unholy hostess; the spirit called Bathsheba . . . a God-forsaken soul. Perceiving herself to be the mistress of the house, she did not appreciate the competition. Carolyn had long been under siege; overt threats issued in the form of fire . . . a mother\'s greatest fear. It transformed the woman in unimaginable ways. After nearly a decade the family left a once beloved home behind though it will never leave them, as each remains haunted by a memory. This tale is an inspiring testament to the resilience of the human spirit on a pathway of discovery: an eternal journey for the living and the dead.'),
(33, 'Titanic: The Story Of The Unsinkable Ship', 'Hourly History', 'https://m.media-amazon.com/images/I/510PxriNdlL.jpg', '“Time is no more for the fifteen hundred souls who perished with them; but Honour and Glory, by strange ways and unlooked-for events, have come into their own. It was not Time, nor the creatures and things of Time, that received their final crown there; but things that have nothing to do with Time, qualities that, in their power of rising beyond all human limitations, we must needs call divine.”\r\n\r\n\r\n“To say that all the men who died on the Titanic were heroes would be as absurd as to say that all who were saved were cowards. There were heroes among both groups and cowards among both groups, as there must be among any large number of men.”\r\n\r\n\r\n“In such moments all artificial bonds are useless. It is what men are in themselves that determines their conduct; and discipline and conduct like this are proofs, not of the superiority of one race over another, but that in the core of human nature itself there is an abiding sweetness and soundness that fear cannot embitter nor death corrupt.”\r\n\r\n\r\nThe story of the sinking of the Titanic based on first hand accounts collected in the days and weeks following the disaster. The story of the Titanic is now well known, but in the months following the disaster wild speculation was rife. On Thursday 22 May 1912, a mere 37 days after the sinking, respected London publisher Grant Richards, delivered Filson Young\'s book to booksellers around the capital. It was the first attempt to plot the demise of the unsinkable ship from a well-respected writer who had already argued in the light of the Oceana sinking, for proper use of the wireless on board ships. Both Filson and Grant knew victims of the sinking and both worked hard to gather first-hand testimony to use in the book. Much of his telling of the story still stands today and his speculations about the feeling of daily life aboard the doomed ship are used in books and films on the subject.'),
(34, 'Wonder', 'R. J. Palacio', 'https://images-na.ssl-images-amazon.com/images/I/41rBFbAYOeL._SX337_BO1,204,203,200_.jpg', 'Kindness brings us together no matter how far apart we are. Millions of people have read the #1 New York Times bestseller WONDER and fallen in love with Auggie Pullman, an ordinary boy with an extraordinary face. A perfect read for back to school -- no matter what that looks like!\r\n \r\nThe book that inspired the Choose Kind movement, a major motion picture, and the critically acclaimed graphic novel White Bird.\r\n \r\nI won\'t describe what I look like. Whatever you\'re thinking, it\'s probably worse. \r\n \r\nAugust Pullman was born with a facial difference that, up until now, has prevented him from going to a mainstream school. Starting 5th grade at Beecher Prep, he wants nothing more than to be treated as an ordinary kid—but his new classmates can’t get past Auggie’s extraordinary face. WONDER, now a #1 New York Times bestseller and included on the Texas Bluebonnet Award master list, begins from Auggie’s point of view, but soon switches to include his classmates, his sister, her boyfriend, and others. These perspectives converge in a portrait of one community’s struggle with empathy, compassion, and acceptance. \r\n \r\n\"Wonder is the best kids\' book of the year,\" said Emily Bazelon, senior editor at Slate.com and author of Sticks and Stones: Defeating the Culture of Bullying and Rediscovering the Power of Character and Empathy. In a world where bullying among young people is an epidemic, this is a refreshing new narrative full of heart and hope. R.J. Palacio has called her debut novel “a meditation on kindness” —indeed, every reader will come away with a greater appreciation for the simple courage of friendship. Auggie is a hero to root for, a diamond in the rough who proves that you can’t blend in when you were born to stand out.'),
(35, 'Shawshank Redemption', 'Stephen King', 'https://images-na.ssl-images-amazon.com/images/I/31abxc7pHbL._BO1,204,203,200_.jpg', 'In 1948, in Maine, Andy Dufresne, a banker, is tried and convicted for the double murder of his wife and her lover, despite his claims of innocence. He is sent to Shawshank State Penitentiary to serve a double life sentence. There, he meets Red, a prisoner who smuggles items from the outside world. Andy, who had been an amateur geologist before being imprisoned, asks Red to get him a rock hammer for shaping rocks he collects from the exercise yard into small sculptures. He later requests a large poster of Rita Hayworth, that he hangs on the wall above his bed. Over the ensuing years, Andy regularly requests updated posters from Red, of the latest pin-ups, including Marilyn Monroe and Raquel Welch. When asked, Andy tells Red that he likes to imagine he can step through the pictures and be with the actresses.\r\n\r\nFor his first three years in Shawshank, Andy is repeatedly the target of a gang of prison rapists called \"The Sisters\". After a particularly brutal attack led by an inmate named Bogs Diamond, Dufresne is found in his cell beaten very badly, but never will say by whom. The Sisters\' attacks pause for a time but do not stop. One day, Andy and other prisoners are tarring a roof when Andy overhears a senior guard named Byron Hadley complaining about the amount of tax he will have to pay on a sum of money bequeathed to him. Andy tells him a way that he can legally shelter the money from taxation, and even offers to complete all the necessary paperwork for Hadley, in exchange for three beers apiece for the other men on the tarring job. From then on, it becomes known in the prison that Andy has protection from the guards from all threats, including that of the Sisters.\r\n\r\nAndy\'s work assignment is shifted from the laundry to the prison\'s library. The new assignment also allows Andy to spend time doing financial paperwork for the staff. Andy applies to the Maine State Senate for funding to expand the library. For years, he gets no response to his weekly letters until the Senate finally sends him $200, thinking Andy will stop requesting funds. Instead of ceasing his letter writing, he starts writing twice as often. His diligent work results in a major expansion of the library\'s collection, and he also helps a number of prisoners earn equivalency diplomas.'),
(36, 'Sherlock Holmes', 'Arthur Conan Sir Doyle', 'https://images-na.ssl-images-amazon.com/images/I/51IQ2ESJAHL._SX302_BO1,204,203,200_.jpg', 'Since his first appearance in Beeton’s Christmas Annual in 1887, Sir Arthur Conan Doyle’s Sherlock Holmes has been one of the most beloved fictional characters ever created. Now, in two paperback volumes, Bantam presents all fifty-six short stories and four novels featuring Conan Doyle’s classic hero--a truly complete collection of Sherlock Holmes’s adventures in crime!\r\n\r\nVolume I includes the early novel A Study in Scarlet, which introduced the eccentric genius of Sherlock Holmes to the world. This baffling murder mystery, with the cryptic word Rache written in blood, first brought Holmes together with Dr. John Watson. Next, The Sign of Four presents Holmes’s famous “seven percent solution” and the strange puzzle of Mary Morstan in the quintessential locked-room mystery.\r\n\r\nAlso included are Holmes’s feats of extraordinary detection in such famous cases as the chilling “ The Adventure of the Speckled Band,” the baffling riddle of “The Musgrave Ritual,” and the ingeniously plotted “The Five Orange Pips,” tales that bring to life a Victorian England of horse-drawn cabs, fogs, and the famous lodgings at 221B Baker Street, where Sherlock Holmes earned his undisputed reputation as the greatest fictional detective of all time.'),
(37, 'The Silence of the Lambs (Hannibal Lecter)', 'Thomas Harris', 'https://images-na.ssl-images-amazon.com/images/I/51bteLQSJ8L._SX306_BO1,204,203,200_.jpg', 'As part of the search for a serial murderer nicknames \"Buffalo Bill,\" FBI trainee Clarice Starling is given an assignment. She must visit a man confined to a high-security facility for the criminally insane and interview him.\r\n\r\nThat man, Dr. Hannibal Lecter, is a former psychiatrist with unusual tastes and an intense curiosity about the darker corners of the mind. His intimate understanding of the killer and of Clarice herself form the core of Thomas Harris\' The Silence of the Lambs--an unforgettable classic of suspense fiction.'),
(38, 'The Sixth Sense', 'Peter Lerangis', 'https://images-na.ssl-images-amazon.com/images/I/41ZWBF25FEL._SX295_BO1,204,203,200_.jpg', 'This is the novelization of the box office hit \"The Sixth Sense\" about a terrified boy with a huge secret and a tormented child psychologist who needs a shot at redemption. Both are trapped in a world where nothing is what it seems.'),
(39, 'The Blue Elephant (ElFil Alazraq)', 'Ahmed Mourad', 'https://images-na.ssl-images-amazon.com/images/I/51iK52Kz7DL._SX344_BO1,204,203,200_.jpg', 'After years of solitude Dr. Yehia finds himself going back to the mental hospital where he used to work.. after years of drinking.. gambling.. smoking pot and enjoying the hot and seductive warmth of his girlfriend Maya, Yehia finds himself entering the famous Abbasia Mental hospital to resume his work as doctor and to find a surprise waiting for him.. his dear old friend Dr. Sherif whose sister Lubna was the love of Yehia\'s life is waiting for him there not as a doctor.. but as a mental patient who is waiting to be evaluated after he was accused for killing his wife.. With this surprise Yehia faces a rush of memory about his history with Sherif and how close they and all the love he shared with Lubna which Sherif opposed when he found out about it, deciding to terminate his friendship with Yehia just to keep him away from his sister.. and now.. after all this years.. here lies Dr sherif with his destiny laying between the hand of Yehia who has to decide if Sherif was aware of his crime when he committed it or not..'),
(41, 'Harry Potter and the Philosopher\'s Stone', 'J. K. Rowling', 'https://upload.wikimedia.org/wikipedia/en/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg', 'Harry Potter has been living a difficult life, constantly abused by his cold aunt and uncle, Vernon and Petunia Dursley and bullied by their spoiled son Dudley since the death of his parents ten years prior. His life changes on the day of his eleventh birthday when he receives a letter of acceptance into Hogwarts School of Witchcraft and Wizardry, delivered by a half-giant named Rubeus Hagrid after previous letters had been destroyed by Vernon and Petunia. Hagrid details Harry\'s past as the son of James and Lily Potter, who were a wizard and witch respectively, and how they were murdered by the most evil and powerful dark wizard of all time, Lord Voldemort, which resulted in the one-year-old Harry being sent to live with his aunt and uncle. Voldemort was not only unable to kill Harry, but his powers were also destroyed in the attempt, forcing him into exile and sparking Harry\'s immense fame among the magical community.'),
(42, 'Harry Potter and the Chamber of Secrets', 'J. K. Rowling', 'https://upload.wikimedia.org/wikipedia/en/5/5c/Harry_Potter_and_the_Chamber_of_Secrets.jpg', 'On Harry Potter\'s twelfth birthday, the Dursleys—Vernon, Petunia, and Dudley—hold a dinner party. Uninvited, Harry is visited by the house-elf Dobby, who warns him not to return to Hogwarts. Harry refuses, so Dobby uses magic to ruin the dinner, nearly getting Harry expelled from Hogwarts. Vernon then locks Harry in his room in retaliation.\r\n\r\nRon Weasley arrives to rescue him with his brothers Fred and George in their father Arthur\'s enchanted Ford Anglia. They bring Harry to their home, the Burrow. Harry and the other Weasleys—Molly, Percy, and Ginny (who has a crush on Harry)—travel to Diagon Alley. They meet Hermione Granger, Lucius Malfoy, father of Harry’s nemesis Draco, and Gilderoy Lockhart, a conceited autobiographer appointed Defence Against the Dark Arts professor. At King Cross station, Harry and Ron can\'t enter Platform 93⁄4, and miss the Hogwarts Express, so they fly Arthur’s car to the school, crashing into the Whomping Willow on the grounds, and damaging Ron\'s wand.\r\n\r\nThroughout the year, Harry learns that prejudiced wizards discriminate against those of Muggle parentage. He also notices a voice only he can hear, coming from the walls. Eventually, Harry, Ron, and Hermione find the school caretaker Argus Filch\'s petrified cat, Mrs. Norris, and a scrawled warning: \"The Chamber of Secrets has been opened. Enemies of the heir, beware\". The Chamber of Secrets is rumored to have been created by Salazar Slytherin, one of the school’s founders, after a disagreement with fellow founders on admitting Muggle-born students. Supposedly, it houses a monster, which the Heir of Slytherin would be able to control.'),
(43, 'Harry Potter and the Prisoner of Azkaban', 'J. K. Rowling', 'https://upload.wikimedia.org/wikipedia/en/a/a0/Harry_Potter_and_the_Prisoner_of_Azkaban.jpg', 'Harry is back at the Dursleys\' for the summer holidays, where he sees on television that a convict named Sirius Black has escaped from prison. After the Dursley\'s Aunt Marge insults Harry and his parents, Harry accidentally inflates her, then runs away from home, fearing expulsion from school. After encountering a large black dog that seems to be watching him, he is picked up by the Knight Bus, and travels to the Leaky Cauldron, where Cornelius Fudge, the Minister for Magic, asks Harry to stay in Diagon Alley for his own protection. While there, he reunites with his friends Ron Weasley and Hermione Granger.\r\n\r\nBefore leaving for Hogwarts, Harry learns from Arthur Weasley that Sirius Black is a convicted murderer from the wizarding world, and has escaped from the wizard prison Azkaban to kill Harry. On the way to Hogwarts, a Dementor boards the train, causing Harry to relive his parents\' deaths before fainting. The new Defence Against the Dark Arts teacher, Remus Lupin, protects him from the Dementor. They learn Dementors will be patrolling the school in an attempt to catch Black.\r\n\r\nDuring a Quidditch match, Harry faints and falls off his broomstick after Dementors invade the field, and the broom is destroyed by the Whomping Willow. Afterward, Professor Lupin teaches Harry how to defend himself from Dementors using the Patronus charm. During an illegal trip to Hogsmeade, Harry overhears a conversation between Fudge, McGonagall, Flitwick, and Hagrid and learns that Black is his godfather, and had apparently betrayed his family to Voldemort, and afterwards had killed Peter Pettigrew, a family friend, when confronted by him.'),
(44, 'Harry Potter and the Deathly Hallows', 'J. K. Rowling', 'https://upload.wikimedia.org/wikipedia/en/a/a9/Harry_Potter_and_the_Deathly_Hallows.jpg', 'Following Dumbledore\'s death, Voldemort is attempting to take control of the Ministry of Magic. Meanwhile, Harry is about to turn seventeen, and lose the protection from his mother. Members of the Order of the Phoenix relocate the Dursleys, and prepare to move Harry to the Burrow, by flying him there, using Harry\'s friends as decoys. Death Eaters attack them upon departure, and in the ensuing battle, \"Mad-Eye\" Moody and Hedwig are killed and George Weasley severely wounded. Voldemort arrives to kill Harry, but Harry\'s wand fends him off on its own.\r\n\r\nHarry, Ron, and Hermione prepare to hunt down Voldemort\'s four remaining Horcruxes, and inherit bequests from Dumbledore: a Golden Snitch for Harry, a Deluminator for Ron, and \"The Tales of Beedle the Bard\", for Hermione. They are also bequeathed the Sword of Godric Gryffindor, which can destroy Horcruxes, but the Ministry prevents them from receiving it. During Bill Weasley and Fleur Delacour\'s wedding, the Ministry falls to Voldemort, and the wedding is attacked by Death Eaters. Harry, Ron, and Hermione flee to 12 Grimmauld Place, Sirius Black\'s family home.\r\n\r\nThey learn that Sirius\'s late brother Regulus had stolen the Horcrux locket, and hid it in the house, where it was stolen by Mundungus Fletcher. House-elf Kreacher locates Fletcher, who had the locket taken by Dolores Umbridge. The trio infiltrate the Ministry and steal the locket from Umbridge, but Grimmauld Place is compromised in their escape. They are forced to hide in the wilderness, unable to destroy the locket and with no further leads. The locket affects Ron, and he abandons the group. Harry and Hermione discover about Dumbledore\'s past friendship with the dark wizard Gellert Grindelwald. They travel to Godric\'s Hollow, Harry\'s birthplace, where they are attacked by Nagini. They escape, but Harry\'s wand is damaged. One day, a doe Patronus guides Harry to a pond containing Gryffindor\'s sword. When Harry tries to recover the sword, the locket nearly kills him. Ron, guided back by the Deluminator, saves him and destroys the locket.\r\n\r\nIn Dumbledore\'s book, Hermione identifies a symbol they had seen worn by Xenophilius Lovegood, father of Luna Lovegood. They visit him and are told the symbol represents the mythical Deathly Hallows: the Elder Wand, an unbeatable wand; the Resurrection Stone, which can summon the dead; and an infallible Invisibility Cloak. As Xenophilius acts strangely, the trio realize that Luna has been captured, and he has called Death Eaters to catch them, in exchange for her freedom. The three escape, and Harry deduces that Voldemort is hunting the Elder Wand, which had passed to Dumbledore after he defeated Grindelwald. Harry deduces that the third Hallow is his own Invisibility Cloak, and his Snitch contains the Resurrection Stone.'),
(45, 'Harry Potter and the Half-Blood Prince', 'J. K. Rowling', 'https://upload.wikimedia.org/wikipedia/en/b/b5/Harry_Potter_and_the_Half-Blood_Prince_cover.png', 'Severus Snape, a member of the Order of the Phoenix, meets with Narcissa Malfoy, Draco\'s mother, and her sister Bellatrix Lestrange, Lord Voldemort\'s supporter. Narcissa expresses concern that her son might not survive a mission given to him by Voldemort. Snape makes an Unbreakable Vow with Narcissa, swearing to assist Draco.\r\n\r\nDumbledore picks Harry up to escort him to the Burrow, home of Harry\'s best friend Ron Weasley. They detour to the home of Horace Slughorn, former Potions teacher at Hogwarts, and Harry unwittingly helps persuade Slughorn to teach.\r\n\r\nOn the Hogwarts Express, Harry suspects Draco has become a Death Eater. Using his invisibility cloak, Harry eavesdrops on Draco, who brags to his friends about a mission Voldemort has assigned him. Draco catches Harry, petrifying him and breaking his nose. Nymphadora Tonks finds Harry and escorts him to Hogwarts, where Dumbledore announces that Snape will teach Defence Against the Dark Arts, while Slughorn will teach Potions.\r\n\r\nFinding an old textbook that once belonged to \"The Half-Blood Prince\", an individual who wrote numerous spells and tips in the book, Harry excels at the Potions, winning a bottle of Felix Felicis, or \"Liquid Luck\". Hermione, however, distrusts the Prince.\r\n\r\nRon and Hermione grow closer, but after learning from his sister Ginny of Hermione\'s history with Viktor Krum, Ron goes out with Lavender Brown, making Hermione jealous. Harry develops feelings for Ginny, and despite his reluctance to pursue her due to his friendship with Ron, the two later start a relationship with Ron\'s approval after a Gryffindor Quidditch victory. Draco grows unhinged throughout the year, culminating in a duel with Harry. In the duel, Harry uses an unknown spell from the Prince which nearly kills Draco, although Snape saves him.');
INSERT INTO `story` (`STORY_ID`, `STORY_NAME`, `AUTHOR_NAME`, `POSTER`, `Overview`) VALUES
(46, 'Harry Potter and the Order of the Phoenix', 'J. K. Rowling', 'https://upload.wikimedia.org/wikipedia/en/7/70/Harry_Potter_and_the_Order_of_the_Phoenix.jpg', 'During the summer, Harry Potter and his cousin Dudley are attacked by Dementors. Forced to use magic to fend them off, Harry is expelled from Hogwarts, but his expulsion is postponed pending a hearing at the Ministry of Magic. Harry is whisked off to Number 12, Grimmauld Place, the childhood home of Sirius Black, by a group of wizards belonging to the Order of the Phoenix.\r\n\r\nRon Weasley and Hermione Granger explain that the Order is a secret organisation led by Hogwarts headmaster Albus Dumbledore, dedicated to fighting Lord Voldemort and the Death Eaters. Harry, Ron, Hermione, Ginny Weasley and Fred and George Weasley learn that Voldemort is seeking something he lacked prior to his defeat. The Ministry, led by Cornelius Fudge, refuses to accept Voldemort\'s return, and are running a smear campaign against Harry and Dumbledore. At the hearing, Dumbledore defends Harry, who is cleared of all charges.\r\n\r\nAt Hogwarts, Dolores Umbridge, a senior Ministry employee, becomes the new Defence Against the Dark Arts teacher. She refuses to believe in Voldemort\'s return, and clashes with Harry, punishing him by having him magically carve \"I must not tell lies\" into the back of his hand. She also refuses to teach her students how to perform defensive magic, prompting Harry, Ron, and Hermione to form their own Defence group with other students. Umbridge, empowered by the Ministry to interfere in Hogwarts, bans unapproved clubs, forcing the group, now called Dumbledore\'s Army, to meet in secret in the Room of Requirement to practice under Harry\'s instruction.\r\n\r\nOne night, Harry has a vision of Voldemort\'s snake Nagini seriously injuring Arthur Weasley. Harry tells Professor McGonagall and Dumbledore, and Arthur is rescued. Dumbledore arranges for Harry to take Occlumency lessons with Professor Snape, another member of the Order, to protect his mind against invasions by Voldemort. Umbridge is eventually given a tip-off about Dumbledore\'s Army, and to prevent Harry\'s expulsion, Dumbledore takes responsibility for the group, and goes into hiding. Umbridge becomes headmistress, but Dumbledore\'s office seals itself against her.\r\n\r\nHarry\'s Occlumency lessons go poorly. During one, Snape is called away, leaving behind Dumbledore\'s Pensieve. Harry uses the Pensieve, and sees a memory of Snape being bullied by his father, James Potter, and Sirius. Snape catches Harry and ends his lessons in a fit of rage. Harry makes no further effort to protect his mind, and during exams, Harry has a vision of Sirius being tortured by Voldemort in the Department of Mysteries. Harry uses Umbridge\'s fireplace to contact Grimmauld Place, and Kreacher, Sirius\' house elf, claims he is gone.'),
(47, 'Harry Potter and the Goblet of Fire', 'J. K. Rowling', 'https://upload.wikimedia.org/wikipedia/en/b/b6/Harry_Potter_and_the_Goblet_of_Fire_cover.png', 'In a prologue, which Harry sees through a dream, Frank Bryce, Muggle caretaker of an abandoned mansion known as the Riddle House, is murdered by Lord Voldemort after stumbling upon him and Wormtail. Harry is awoken by his scar hurting.\r\n\r\nThe Weasleys invite Harry and Hermione Granger to the Quidditch World Cup, to which they travel using a Portkey. After the match, masked Death Eaters, followers of Voldemort, attack the camp site. The Dark Mark is fired into the sky, causing mass panic. Harry discovers that his wand is missing. It is later found in the possession of Winky, Barty Crouch\'s house elf, having been used to cast the Mark. Although few believe Winky could have done so, Barty Crouch dismisses Winky from his service.\r\n\r\nAt Hogwarts, Professor Dumbledore announces that Alastor \"Mad-Eye\" Moody will be the Defence Against the Dark Arts teacher for the year. Dumbledore also announces that Hogwarts will host a revival of the Triwizard Tournament, in which a champion of Hogwarts will compete against champions from two other European wizarding schools. The champions are chosen by the Goblet of Fire from names dropped into it. As Harry is under the age of majority in the wizarding world, he is disallowed from entering. The Goblet of Fire picks Fleur Delacour from Beauxbatons Academy, Viktor Krum from Durmstrang Institute, and Cedric Diggory from Hogwarts to compete in the tournament. Unexpectedly, it chooses Harry as a fourth champion. Despite anger from Beauxbatons and Durmstrang, Harry is forced to compete.\r\n\r\nHagrid covertly reveals to Harry that the first task in the tournament is to get past a dragon. Harry struggles to think of a way to complete this task, until Moody suggests flying. Hermione helps him perfect a Summoning Charm, which he uses to summon his Firebolt broomstick and fly past the dragon to retrieve a golden egg. The egg is supposed to contain a clue to the next task, but when opened it shrieks loudly. At the Yule Ball, a Triwizard Tournament tradition, Cedric tells Harry to take the egg into the bath in the prefects\' bathroom to work out the clue. Harry follows this tip, and discovers that the task is to recover something from Merpeople at the bottom of the lake in the grounds.\r\n\r\nHarry struggles to find a way to survive underwater for the second task. On the morning of the task, Dobby, who now works at Hogwarts, gives him Gillyweed, having heard of it from Moody. This allows Harry to find Ron at the bottom of the lake. However, he refuses to leave the other champions\' hostages behind, and rescues Fleur\'s sister when Fleur does not arrive. Although Harry finishes last, he is awarded high marks for \'moral fibre\'.'),
(48, 'Me Before You', 'Jojo Moyes ', 'https://m.media-amazon.com/images/I/51yKHH3-P5L.jpg', 'They had nothing in common until love gave them everything to lose . . .\r\n\r\nLouisa Clark is an ordinary girl living an exceedingly ordinary life—steady boyfriend, close family—who has barely been farther afield than their tiny village. She takes a badly needed job working for ex–Master of the Universe Will Traynor, who is wheelchair bound after an accident. Will has always lived a huge life—big deals, extreme sports, worldwide travel—and now he’s pretty sure he cannot live the way he is.\r\n\r\nWill is acerbic, moody, bossy—but Lou refuses to treat him with kid gloves, and soon his happiness means more to her than she expected. When she learns that Will has shocking plans of his own, she sets out to show him that life is still worth living.\r\n\r\nA Love Story for this generation and perfect for fans of John Green’s The Fault in Our Stars, Me Before You brings to life two people who couldn’t have less in common—a heartbreakingly romantic novel that asks, What do you do when making the person you love happy also means breaking your own heart?'),
(49, 'Guardians of the Galaxy', 'Sara Pichelli ', 'https://images-na.ssl-images-amazon.com/images/I/51EvKZnK9kL._SX321_BO1,204,203,200_.jpg', '----'),
(50, 'Deadpool', 'Daniel Way', 'https://images-na.ssl-images-amazon.com/images/I/514NT6bSFZL._SX322_BO1,204,203,200_.jpg', 'Daniel Way\'s hilarious, action-packed run begins here! When the Merc with a Mouth is hired to rub out Wolverine, sparks will fly! But when both men can regenerate any wound in minutes, how can either one expect to finish off his foe? And whoever wins will have to face Wolverine\'s murderous son, Daken! Then: The Skrulls have infiltrated Earth, but nobody warned them about Deadpool! The invaders replicate Deadpool\'s healing factor in a new generation of Super-Skrulls - but why is Deadpool himself leading this brigade against Earth? And when Norman Osborn double-crosses Deadpool, the maniacal merc unleashes a full-on assault against Avengers Tower! Norman must pull out all the stops - and that means deploying his new team of bloodthirsty, black-ops Thunderbolts!'),
(51, 'The Amazing Spider-Man', ' Frank Berrios, Francesco Legramandi  , Andrea Cagol ', 'https://images-na.ssl-images-amazon.com/images/I/61J6GpYAnvL._SX412_BO1,204,203,200_.jpg', '---'),
(52, 'Thor', 'Marvel Comics', 'https://upload.wikimedia.org/wikipedia/en/4/41/Thor-272.jpg', 'Thor\'s father Odin decides his son needed to be taught humility and consequently incarnates Thor (without memories of godhood) on Earth as a mortal, partially disabled human medical student, Donald Blake. After becoming a doctor, Blake witnesses the arrival of an alien scouting party while he is on vacation in Norway. Blake flees from the aliens into a cave. After discovering Thor\'s hammer Mjolnir (disguised as a walking stick) and striking it against a rock, he transforms into the thunder god. Later, in Thor #159, Blake is revealed to have always been Thor, Odin\'s enchantment having caused him to forget his history as The Thunder God and believe himself mortal.\r\n\r\nDefeating the aliens, Thor shares a double life with his alter ego: treating the ill in a private practice with nurse – and eventual love – Jane Foster, and defending humanity from evil. Thor\'s presence on Earth almost immediately attracts the attention of his adoptive brother and enemy Loki. Loki is responsible for the emergence of three of Thor\'s principal foes: the Absorbing Man; the Destroyer, and the Wrecker. On one occasion, Loki\'s tactics were accidentally beneficial – although successful in using an illusion of the Hulk to draw Thor into battle, it results in the formation of the superhero team the Avengers, of which Thor (alongside Ant-Man, the Wasp and Iron Man) is a founding and longstanding member. Thor\'s other early foes include Zarrko, the Tomorrow Man; the Radioactive Man; the Lava Man; the Cobra; Mister Hyde; the Enchantress and the Executioner, and the Grey Gargoyle.\r\n\r\nFalling in love with Jane Foster, Thor disobeys his father and refuses to return to Asgard, an act for which he is punished on several occasions. Thor\'s natural affinity for Earth is eventually revealed to be due to the fact that he was the son of the Elder Goddess Gaea. Although Thor initially regards himself as a \"superhero\" like his teammates in the Avengers, Loki\'s machinations draw Thor into increasingly epic adventures, such as teaming with his father Odin and Asgardian ally Balder against the fire demon Surtur and Skagg the Storm Giant, and defeating an increasingly powerful Absorbing Man and proving his innocence in the \"Trial of the Gods\". This necessitates an extended leave of absence from the Avengers.'),
(53, 'Iron Man', 'Marvel Comics', 'https://upload.wikimedia.org/wikipedia/en/f/f4/Ironman001.jpg', 'TONY HAS COMPANY...AND HIS NAME IS KORVAC! Tony Stark continues to roughly dismantle the fancy, shiny and sophisticated ways of his past…but the world doesn’t seem quite convinced that he’s changed his rich guy tune. As Iron Man, he takes the fight to the streets, looking to sacrifice himself on the altar of super heroism again and again—first with Arcade and Absorbing Man then with medical vigilante Cardiac—all in hope of redemption in the eyes of the public. Only trouble is he might get himself killed in the process, and there are still plenty of people in line with an ax to grind. Old friends like HELLCAT try to help him find peace of mind and speak truth to his stubborn god complex, but lurking on the horizon is a threat Tony—and indeed the entire cosmos—hasn’t seen in years…KORVAC…yet another guy who believes he’s smarter than the rest of the universe.'),
(54, 'ANT-MAN', 'Marvel Comics', 'https://i.annihil.us/u/prod/marvel/i/mg/9/30/54a1970c6edc2/clean.jpg', 'Scott Lang has never exactly been the world\'s best super hero. Heck, most people don\'t even think he\'s been the best ANT-MAN -- and the last guy invented Ultron and joined the Masters of Evil, so that\'s saying something. - But when the SUPERIOR IRON MAN calls with a once-in-a-lifetime opportunity, Scott\'s going to get a chance to turn it all around and be the hero he\'s always dreamed of being. - Sure he\'s been to prison! Sure he\'s been through a messy divorce! Sure he\'s been, um... dead. But this time is different! This time nothing is gonna stop the astonishing ANT-MAN!'),
(55, ' Avengers', 'Jason Aaron', 'https://i.annihil.us/u/prod/marvel/i/mg/f/60/5fda7db707fd0/clean.jpg', 'ENTER THE PHOENIX! The infamous firebird of cosmic destruction and rebirth known as the Phoenix Force has returned to Earth to find a new avatar. So now the Avengers and some of the most powerful heroes and villains in the Marvel Universe are being called into a competition unlike anything they’ve ever seen. A globe-spanning battle that will transform them all and ultimately decide...who will be the all-new Phoenix.'),
(56, 'The Silver Linings Playbook ', 'Matthew Quick', 'https://upload.wikimedia.org/wikipedia/en/3/36/The_Silver_Linings_Playbook_Cover.jpg', 'The book is narrated through the eyes of Pat Peoples, and occasionally Tiffany\'s through letters. A former history teacher who has moved back to his childhood home in Collingswood, New Jersey, after spending time in a Baltimore psychiatric hospital, Pat believes he has been away only a few months, but soon realizes it has been years, and struggles to piece together his lost memories and what has become of his wife, Nikki. He has a hypothesis that life is a film created by God and that its \"silver lining\" will be the end of \"Apart Time\" with Nikki. Pat embarks on a plan of self-improvement in order to win Nikki back. At a dinner with his friend Ronnie and his wife Veronica, Pat is introduced to Tiffany Webster, who has also moved back home after losing her job after her husband\'s death.\r\n\r\nPat trains with Tiffany and performs in a dance competition with her. After the contest, Tiffany agrees to be a go-between and gives Pat a letter supposedly written by Nikki. Pat suggests a meeting with Nikki at the place they got engaged, and despite no reply he slips away from his family on Christmas Day to meet her. Nikki is not there; Tiffany is, and admits she has forged Nikki\'s letters and that she had been trying to help Pat move on and gain closure with his marriage because she, Tiffany, is in love with Pat. Pat is furious that the last two months of correspondence were a lie. In shock Pat runs into an unfamiliar neighborhood and is assaulted. By chance, he encounters Danny, his friend from the Baltimore mental health facility. Danny helps Pat get to a hospital and reunite with his family. Pat still does not recall how or why he was separated from his wife, and only when he watches the wedding video, which his mother had hidden, do the memories eventually return — with the realization that he and Nikki will never be reunited.'),
(57, 'Toy Story Junior Novel ', 'Disnet Press, RH Disney', 'https://m.media-amazon.com/images/I/51abQJn0q0L.jpg', 'The toys are back in town! Woody the cowboy is Andy’s favorite toy. But when Andy gets a space ranger toy named Buzz Lightyear for his birthday, things begin to change. Suddenly, Andy seems to have a new favorite, and Woody is no longer at the top of the list.'),
(58, 'The Science of Interstellar', 'Kip Thorne', 'https://images-na.ssl-images-amazon.com/images/I/41oLlat3X0L._SX385_BO1,204,203,200_.jpg', 'Interstellar, from acclaimed filmmaker Christopher Nolan, takes us on a fantastic voyage far beyond our solar system. Yet in The Science of Interstellar, Kip Thorne, the Nobel prize-winning physicist who assisted Nolan on the scientific aspects of Interstellar, shows us that the movie’s jaw-dropping events and stunning, never-before-attempted visuals are grounded in real science. Thorne shares his experiences working as the science adviser on the film and then moves on to the science itself. In chapters on wormholes, black holes, interstellar travel, and much more, Thorne’s scientific insights―many of them triggered during the actual scripting and shooting of Interstellar―describe the physical laws that govern our universe and the truly astounding phenomena that those laws make possible.');

-- --------------------------------------------------------

--
-- Table structure for table `user_of_notflix`
--

CREATE TABLE `user_of_notflix` (
  `USER_NAME` varchar(100) NOT NULL,
  `PASSWORD_OF_USER` varchar(100) NOT NULL,
  `EMAIL` varchar(500) NOT NULL,
  `AGE` int(11) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acted_movie`
--
ALTER TABLE `acted_movie`
  ADD PRIMARY KEY (`MOVIE_ID`,`ACTOR_ID`),
  ADD KEY `ACTOR_ID` (`ACTOR_ID`);

--
-- Indexes for table `acted_series`
--
ALTER TABLE `acted_series`
  ADD PRIMARY KEY (`SERIES_ID`,`ACTOR_ID`),
  ADD KEY `ACTOR_ID` (`ACTOR_ID`),
  ADD KEY `acted_series_ibfk_1` (`SERIES_ID`);

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `actor_prize_movie`
--
ALTER TABLE `actor_prize_movie`
  ADD PRIMARY KEY (`ACTOR_ID`,`MOVIE_ID`,`PRIZE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`),
  ADD KEY `actor_prize_movie_ibfk_1` (`ACTOR_ID`);

--
-- Indexes for table `actor_prize_series`
--
ALTER TABLE `actor_prize_series`
  ADD PRIMARY KEY (`ACTOR_ID`,`SERIES_ID`,`PRIZE_ID`),
  ADD KEY `SERIES_ID` (`SERIES_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`),
  ADD KEY `actor_prize_series_ibfk_1` (`ACTOR_ID`);

--
-- Indexes for table `add_to_fav_movie`
--
ALTER TABLE `add_to_fav_movie`
  ADD PRIMARY KEY (`USER_NAME_OF_USER`,`MOVIE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `add_to_fav_movie_ibfk_1` (`USER_NAME_OF_USER`);

--
-- Indexes for table `add_to_fav_series`
--
ALTER TABLE `add_to_fav_series`
  ADD PRIMARY KEY (`USER_NAME_OF_USER`,`SERIES_ID`),
  ADD KEY `SERIES_ID` (`SERIES_ID`),
  ADD KEY `add_to_fav_series_ibfk_1` (`USER_NAME_OF_USER`);

--
-- Indexes for table `admin_website`
--
ALTER TABLE `admin_website`
  ADD PRIMARY KEY (`ADMIN_NAME`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ADMIN_ADDED` (`ADMIN_ADDED`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `director_prize_movie`
--
ALTER TABLE `director_prize_movie`
  ADD PRIMARY KEY (`DIRECTOR_ID`,`MOVIE_ID`,`PRIZE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`);

--
-- Indexes for table `director_prize_series`
--
ALTER TABLE `director_prize_series`
  ADD PRIMARY KEY (`DIRECTOR_ID`,`SERIES_ID`,`PRIZE_ID`),
  ADD KEY `SERIES_ID` (`SERIES_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`);

--
-- Indexes for table `fantasy_character`
--
ALTER TABLE `fantasy_character`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `STORY_ID` (`STORY_ID`);

--
-- Indexes for table `funded_movie`
--
ALTER TABLE `funded_movie`
  ADD PRIMARY KEY (`MOVIE_ID`,`PRODUCTION_COMPANY_ID`),
  ADD KEY `PRODUCTION_COMPANY_ID` (`PRODUCTION_COMPANY_ID`);

--
-- Indexes for table `funded_series`
--
ALTER TABLE `funded_series`
  ADD PRIMARY KEY (`SERIES_ID`,`PRODUCTION_COMPANY_ID`),
  ADD KEY `PRODUCTION_COMPANY_ID` (`PRODUCTION_COMPANY_ID`),
  ADD KEY `funded_series_ibfk_1` (`SERIES_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `genre_relation_movie`
--
ALTER TABLE `genre_relation_movie`
  ADD PRIMARY KEY (`MOVIE_ID`,`GENRE_ID`),
  ADD KEY `genre_relation_movie_ibfk_2` (`GENRE_ID`);

--
-- Indexes for table `genre_relation_series`
--
ALTER TABLE `genre_relation_series`
  ADD PRIMARY KEY (`SERIES_ID`,`GENRE_ID`),
  ADD KEY `genre_relation_series_ibfk_1` (`SERIES_ID`),
  ADD KEY `genre_relation_series_ibfk_2` (`GENRE_ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `movie_ibfk_1` (`PRIZE_WON_ID`),
  ADD KEY `movie_ibfk_2` (`ADMIN_INSETED_MOVIE`),
  ADD KEY `movie_ibfk_3` (`DIRECTOR_ID`),
  ADD KEY `movie_ibfk_4` (`STORY_ID`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `production_company`
--
ALTER TABLE `production_company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rate_movie`
--
ALTER TABLE `rate_movie`
  ADD PRIMARY KEY (`USER_NAME_WHO_RATED`,`MOVIE_ID`),
  ADD KEY `rate_movie_ibfk_2` (`MOVIE_ID`);

--
-- Indexes for table `rate_series`
--
ALTER TABLE `rate_series`
  ADD PRIMARY KEY (`USER_NAME_WHO_RATED`,`SERIES_ID`),
  ADD KEY `rate_series_ibfk_2` (`SERIES_ID`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`SERIES_ID`,`SEASON_NUMBER`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `series_ibfk_1` (`PRIZE_WON_ID`),
  ADD KEY `series_ibfk_2` (`ADMIN_INSETED_SERIES`),
  ADD KEY `series_ibfk_3` (`DIRECTOR_ID`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`STORY_ID`);

--
-- Indexes for table `user_of_notflix`
--
ALTER TABLE `user_of_notflix`
  ADD PRIMARY KEY (`USER_NAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `fantasy_character`
--
ALTER TABLE `fantasy_character`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `production_company`
--
ALTER TABLE `production_company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `STORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acted_movie`
--
ALTER TABLE `acted_movie`
  ADD CONSTRAINT `acted_movie_ibfk_1` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `acted_movie_ibfk_2` FOREIGN KEY (`ACTOR_ID`) REFERENCES `actor` (`ID`);

--
-- Constraints for table `acted_series`
--
ALTER TABLE `acted_series`
  ADD CONSTRAINT `acted_series_ibfk_1` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`),
  ADD CONSTRAINT `acted_series_ibfk_2` FOREIGN KEY (`ACTOR_ID`) REFERENCES `actor` (`ID`);

--
-- Constraints for table `actor_prize_movie`
--
ALTER TABLE `actor_prize_movie`
  ADD CONSTRAINT `actor_prize_movie_ibfk_1` FOREIGN KEY (`ACTOR_ID`) REFERENCES `actor` (`ID`),
  ADD CONSTRAINT `actor_prize_movie_ibfk_2` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `actor_prize_movie_ibfk_3` FOREIGN KEY (`PRIZE_ID`) REFERENCES `prize` (`ID`);

--
-- Constraints for table `actor_prize_series`
--
ALTER TABLE `actor_prize_series`
  ADD CONSTRAINT `actor_prize_series_ibfk_1` FOREIGN KEY (`ACTOR_ID`) REFERENCES `actor` (`ID`),
  ADD CONSTRAINT `actor_prize_series_ibfk_2` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`),
  ADD CONSTRAINT `actor_prize_series_ibfk_3` FOREIGN KEY (`PRIZE_ID`) REFERENCES `prize` (`ID`);

--
-- Constraints for table `add_to_fav_movie`
--
ALTER TABLE `add_to_fav_movie`
  ADD CONSTRAINT `add_to_fav_movie_ibfk_1` FOREIGN KEY (`USER_NAME_OF_USER`) REFERENCES `user_of_notflix` (`USER_NAME`),
  ADD CONSTRAINT `add_to_fav_movie_ibfk_2` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`);

--
-- Constraints for table `add_to_fav_series`
--
ALTER TABLE `add_to_fav_series`
  ADD CONSTRAINT `add_to_fav_series_ibfk_1` FOREIGN KEY (`USER_NAME_OF_USER`) REFERENCES `user_of_notflix` (`USER_NAME`),
  ADD CONSTRAINT `add_to_fav_series_ibfk_2` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`);

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`ADMIN_ADDED`) REFERENCES `admin_website` (`ADMIN_NAME`);

--
-- Constraints for table `director_prize_movie`
--
ALTER TABLE `director_prize_movie`
  ADD CONSTRAINT `director_prize_movie_ibfk_1` FOREIGN KEY (`DIRECTOR_ID`) REFERENCES `director` (`ID`),
  ADD CONSTRAINT `director_prize_movie_ibfk_2` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `director_prize_movie_ibfk_3` FOREIGN KEY (`PRIZE_ID`) REFERENCES `prize` (`ID`);

--
-- Constraints for table `director_prize_series`
--
ALTER TABLE `director_prize_series`
  ADD CONSTRAINT `director_prize_series_ibfk_1` FOREIGN KEY (`DIRECTOR_ID`) REFERENCES `director` (`ID`),
  ADD CONSTRAINT `director_prize_series_ibfk_2` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`),
  ADD CONSTRAINT `director_prize_series_ibfk_3` FOREIGN KEY (`PRIZE_ID`) REFERENCES `prize` (`ID`);

--
-- Constraints for table `fantasy_character`
--
ALTER TABLE `fantasy_character`
  ADD CONSTRAINT `fantasy_character_ibfk_1` FOREIGN KEY (`STORY_ID`) REFERENCES `story` (`STORY_ID`);

--
-- Constraints for table `funded_movie`
--
ALTER TABLE `funded_movie`
  ADD CONSTRAINT `funded_movie_ibfk_1` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `funded_movie_ibfk_2` FOREIGN KEY (`PRODUCTION_COMPANY_ID`) REFERENCES `production_company` (`ID`);

--
-- Constraints for table `funded_series`
--
ALTER TABLE `funded_series`
  ADD CONSTRAINT `funded_series_ibfk_1` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`),
  ADD CONSTRAINT `funded_series_ibfk_2` FOREIGN KEY (`PRODUCTION_COMPANY_ID`) REFERENCES `production_company` (`ID`);

--
-- Constraints for table `genre_relation_movie`
--
ALTER TABLE `genre_relation_movie`
  ADD CONSTRAINT `genre_relation_movie_ibfk_1` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `genre_relation_movie_ibfk_2` FOREIGN KEY (`GENRE_ID`) REFERENCES `genre` (`ID`);

--
-- Constraints for table `genre_relation_series`
--
ALTER TABLE `genre_relation_series`
  ADD CONSTRAINT `genre_relation_series_ibfk_1` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`),
  ADD CONSTRAINT `genre_relation_series_ibfk_2` FOREIGN KEY (`GENRE_ID`) REFERENCES `genre` (`ID`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`PRIZE_WON_ID`) REFERENCES `prize` (`ID`),
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`ADMIN_INSETED_MOVIE`) REFERENCES `admin_website` (`ADMIN_NAME`),
  ADD CONSTRAINT `movie_ibfk_3` FOREIGN KEY (`DIRECTOR_ID`) REFERENCES `director` (`ID`),
  ADD CONSTRAINT `movie_ibfk_4` FOREIGN KEY (`STORY_ID`) REFERENCES `story` (`STORY_ID`);

--
-- Constraints for table `rate_movie`
--
ALTER TABLE `rate_movie`
  ADD CONSTRAINT `rate_movie_ibfk_1` FOREIGN KEY (`USER_NAME_WHO_RATED`) REFERENCES `user_of_notflix` (`USER_NAME`),
  ADD CONSTRAINT `rate_movie_ibfk_2` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`);

--
-- Constraints for table `rate_series`
--
ALTER TABLE `rate_series`
  ADD CONSTRAINT `rate_series_ibfk_1` FOREIGN KEY (`USER_NAME_WHO_RATED`) REFERENCES `user_of_notflix` (`USER_NAME`),
  ADD CONSTRAINT `rate_series_ibfk_2` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`);

--
-- Constraints for table `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`);

--
-- Constraints for table `series`
--
ALTER TABLE `series`
  ADD CONSTRAINT `series_ibfk_1` FOREIGN KEY (`PRIZE_WON_ID`) REFERENCES `prize` (`ID`),
  ADD CONSTRAINT `series_ibfk_2` FOREIGN KEY (`ADMIN_INSETED_SERIES`) REFERENCES `admin_website` (`ADMIN_NAME`),
  ADD CONSTRAINT `series_ibfk_3` FOREIGN KEY (`DIRECTOR_ID`) REFERENCES `director` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
