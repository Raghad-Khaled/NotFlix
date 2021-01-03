-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 05:53 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
  `ACTOR_ID` int(11) NOT NULL,
  `CHARACTER_PLAYED_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acted_movie`
--

INSERT INTO `acted_movie` (`MOVIE_ID`, `ACTOR_ID`, `CHARACTER_PLAYED_ID`) VALUES
(33, 1, 0),
(34, 1, 0),
(35, 1, 0),
(36, 1, 0),
(37, 1, 0),
(38, 1, 0),
(39, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acted_series`
--

CREATE TABLE `acted_series` (
  `SERIES_ID` int(11) NOT NULL,
  `ACTOR_ID` int(11) NOT NULL,
  `CHARACTER_PLAYED_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'emma', ' stone', 'F', '1988-11-06', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Emma_Stone_at_the_39th_Mill_Valley_Film_Festival_%28cropped%29.jpg'),
(3, 'Raghad', 'Khaled', 'F', '1988-08-29', 'Link');

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

--
-- Dumping data for table `actor_prize_movie`
--

INSERT INTO `actor_prize_movie` (`ACTOR_ID`, `MOVIE_ID`, `PRIZE_ID`, `YEAR`) VALUES
(0, 0, 0, 1988),
(1, 33, 0, 2020),
(1, 33, 4, 2020),
(3, 17, 5, 1988),
(3, 31, 4, 1994);

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

--
-- Dumping data for table `actor_prize_series`
--

INSERT INTO `actor_prize_series` (`ACTOR_ID`, `SERIES_ID`, `PRIZE_ID`, `YEAR`) VALUES
(3, 0, 0, 1988),
(3, 1, 0, 1988),
(3, 1, 4, 1988);

-- --------------------------------------------------------

--
-- Table structure for table `add_to_fav_movie`
--

CREATE TABLE `add_to_fav_movie` (
  `USER_NAME_OF_USER` varchar(100) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_to_fav_movie`
--

INSERT INTO `add_to_fav_movie` (`USER_NAME_OF_USER`, `MOVIE_ID`) VALUES
('Raghodaaaa', 31),
('Raghodaaaa', 33),
('RoRo123', 2);

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
  `GENDER` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_website`
--

INSERT INTO `admin_website` (`ADMIN_NAME`, `PASSWORD_OF_ADMIN`, `EMAIL`, `AGE`, `GENDER`) VALUES
('Raghad', '1234', 'raghoda1234692000@gmail.com', 20, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `PICTURE` blob NOT NULL,
  `ADMIN_ADDED` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Damien', 'Chazelle', '1985-01-19', 'M', 'https://www.gstatic.com/tv/thumb/persons/586751/586751_v9_bb.jpg'),
(2, 'ert', 'wert', '1988-08-29', 'F', 'Link');

-- --------------------------------------------------------

--
-- Table structure for table `director_prize_movie`
--

CREATE TABLE `director_prize_movie` (
  `DIRECTOR_ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL,
  `YEAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_prize_movie`
--

INSERT INTO `director_prize_movie` (`DIRECTOR_ID`, `MOVIE_ID`, `PRIZE_ID`, `YEAR`) VALUES
(2, 21, 6, 1988);

-- --------------------------------------------------------

--
-- Table structure for table `director_prize_series`
--

CREATE TABLE `director_prize_series` (
  `DIRECTOR_ID` int(11) NOT NULL,
  `SERIES_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL,
  `YEAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `director_prize_series`
--

INSERT INTO `director_prize_series` (`DIRECTOR_ID`, `SERIES_ID`, `PRIZE_ID`, `YEAR`) VALUES
(1, 1, 7, 1988);

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

--
-- Dumping data for table `fantasy_character`
--

INSERT INTO `fantasy_character` (`ID`, `FNAME`, `LNAME`, `GENDER`, `BIRTH_DATE`, `STORY`, `STORY_ID`, `IMAGE`) VALUES
(1, 'Taha', 'hussin', 'F', '0000-00-00', 'plaplapla', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU4QA7_VnwyZ4mtKus_tLjwqEZzLPtQ4dedQ&usqp=CAU');

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
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `funded_series`
--

CREATE TABLE `funded_series` (
  `SERIES_ID` int(11) NOT NULL,
  `PRODUCTION_COMPANY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Adventure'),
(2, 'Action'),
(3, '7ellllo'),
(4, 'to7faaa');

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
(0, 1),
(0, 2),
(0, 3),
(0, 4),
(0, 5),
(33, 1),
(33, 2),
(34, 1),
(35, 0),
(36, 0),
(37, 0),
(37, 2),
(38, 3),
(38, 4),
(38, 5),
(39, 3),
(39, 4);

-- --------------------------------------------------------

--
-- Table structure for table `genre_relation_series`
--

CREATE TABLE `genre_relation_series` (
  `SERIES_ID` int(11) NOT NULL,
  `GENRE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(11) NOT NULL,
  `NAME_MOVIE` varchar(100) NOT NULL,
  `YEAR` int(11) DEFAULT NULL,
  `DURATION_MIN` int(11) DEFAULT NULL,
  `DESCRIPTION_OF_MOVIE` varchar(1000) DEFAULT NULL,
  `LANGUAGE_MOBIE` varchar(50) DEFAULT NULL,
  `REVENUE` int(11) DEFAULT NULL,
  `BUDGET` int(11) DEFAULT NULL,
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
(1, 'Pirates of the Caribbean: Dead Mans Chest', 2006, 151, 'Jack is back!', 'English', 1065659812, 200000000, 'http://disney.go.com/disneypictures/pirates/', NULL, NULL, 7, 5246, NULL, NULL, NULL),
(2, 'King Kong', 0, 187, 'The eighth wonder of the world.', 'English', 550000000, 207000000, 'nan', NULL, NULL, 7, 2337, NULL, NULL, NULL),
(3, 'Pirates of the Caribbean: At Worlds End', 2007, 169, 'At the end of the world, the adventure begins.', 'English', 961000000, 300000000, 'http://disney.go.com/disneypictures/pirates/', NULL, NULL, 7, 4500, NULL, NULL, NULL),
(4, 'Spider-Man 3', 2007, 139, 'The battle within.', 'English', 890871626, 258000000, 'http://www.sonypictures.com/movies/spider-man3/', NULL, NULL, 6, 3576, NULL, NULL, NULL),
(5, 'Titanic', 0, 194, 'Nothing on Earth could come between them.', 'English', 1845034188, 200000000, 'http://www.titanicmovie.com', NULL, NULL, 8, 7562, NULL, NULL, NULL),
(6, 'Harry Potter and the Half-Blood Prince', 2009, 153, 'Dark Secrets Revealed', 'English', 933959197, 250000000, 'http://harrypotter.warnerbros.com/harrypotterandthehalf-bloodprince/dvd/index.html', NULL, NULL, 7, 5293, NULL, NULL, NULL),
(7, 'Superman Returns', 2006, 154, 'nan', 'English', 391081192, 270000000, 'http://www.superman.com', NULL, NULL, 5, 1400, NULL, NULL, NULL),
(8, 'Pirates of the Caribbean: On Stranger Tides', 2011, 136, 'Live Forever Or Die Trying.', 'English', 1045713802, 380000000, 'http://disney.go.com/pirates/index-on-stranger-tides.html#/video/', NULL, NULL, 6, 4948, NULL, NULL, NULL),
(9, 'The Amazing Spider-Man', 2012, 136, 'The untold story begins.', 'English', 752215857, 215000000, 'http://www.theamazingspiderman.com', NULL, NULL, 7, 6586, NULL, NULL, NULL),
(10, 'The Golden Compass', 0, 113, 'There are worlds beyond our own - the compass will show the way.', 'English', 372234864, 180000000, 'http://www.goldencompassmovie.com/index_german.html', NULL, NULL, 6, 1303, NULL, NULL, NULL),
(11, 'The Chronicles of Narnia: Prince Caspian', 2008, 150, 'Hope has a new face.', 'English', 419651413, 225000000, 'nan', NULL, NULL, 6, 1630, NULL, NULL, NULL),
(12, 'Quantum of Solace', 2008, 106, 'For love, for hate, for justice, for revenge.', 'English', 586090727, 200000000, 'http://www.mgm.com/view/movie/234/Quantum-of-Solace/', NULL, NULL, 6, 2965, NULL, NULL, NULL),
(13, 'Avatar', 2009, 162, 'Enter the World of Pandora.', 'English', 2147483647, 237000000, 'http://www.avatarmovie.com/', NULL, NULL, 7, 11800, NULL, NULL, NULL),
(14, 'Robin Hood', 2010, 140, 'Rise and rise again, until lambs become lions.', 'English', 310669540, 200000000, 'http://www.robinhoodthemovie.com/', NULL, NULL, 6, 1398, NULL, NULL, NULL),
(15, 'The Avengers', 2012, 143, 'Some assembly required.', 'English', 1519557910, 220000000, 'http://marvel.com/avengers_movie/', NULL, NULL, 7, 11776, NULL, NULL, NULL),
(16, 'Skyfall', 0, 143, 'Think on your sins.', 'English', 1108561013, 200000000, 'http://www.skyfall-movie.com', NULL, NULL, 7, 7604, NULL, NULL, NULL),
(17, 'Tangled', 2010, 100, 'Theyre taking adventure to new lengths.', 'English', 591794936, 260000000, 'http://disney.go.com/disneypictures/tangled/', NULL, NULL, 7, 3330, NULL, NULL, NULL),
(18, 'Men in Black 3', 2012, 106, 'They are back... in time.', 'English', 624026776, 225000000, 'http://www.sonypictures.com/movies/meninblack3/', NULL, NULL, 6, 4160, NULL, NULL, NULL),
(19, 'Battleship', 0, 131, 'The Battle for Earth Begins at Sea', 'English', 303025485, 209000000, 'nan', NULL, NULL, 6, 2114, NULL, NULL, NULL),
(20, 'The Dark Knight Rises', 2012, 165, 'The Legend Ends', 'English', 1084939099, 250000000, 'http://www.thedarkknightrises.com/', NULL, NULL, 8, 9106, NULL, NULL, NULL),
(21, 'Man of Steel', 2013, 143, 'You will believe that a man can fly.', 'English', 662845518, 225000000, 'http://www.manofsteel.com/', NULL, NULL, 7, 6359, NULL, NULL, NULL),
(22, 'John Carter', 2012, 132, 'Lost in our world, found in another.', 'English', 284139100, 260000000, 'http://movies.disney.com/john-carter', NULL, NULL, 6, 2124, NULL, NULL, NULL),
(23, 'The Hobbit: The Desolation of Smaug', 2013, 161, 'Beyond darkness... beyond desolation... lies the greatest danger of all.', 'English', 958400000, 250000000, 'http://www.thehobbit.com/', NULL, NULL, 8, 4524, NULL, NULL, NULL),
(24, 'The Lone Ranger', 2013, 149, 'Never Take Off the Mask', 'English', 89289910, 255000000, 'http://disney.go.com/the-lone-ranger/', NULL, NULL, 6, 2311, NULL, NULL, NULL),
(25, 'Avengers: Age of Ultron', 2015, 141, 'A New Age Has Come.', 'English', 1405403694, 280000000, 'http://marvel.com/movies/movie/193/avengers_age_of_ultron', NULL, NULL, 7, 6767, NULL, NULL, NULL),
(26, 'The Hobbit: The Battle of the Five Armies', 2014, 144, 'Witness the defining chapter of the Middle-Earth saga', 'English', 956019788, 250000000, 'http://www.thehobbit.com/', NULL, NULL, 7, 4760, NULL, NULL, NULL),
(27, 'Jurassic World', 0, 124, 'The park is open.', 'English', 1513528810, 150000000, 'http://www.jurassicworld.com/', NULL, NULL, 7, 8662, NULL, NULL, NULL),
(28, 'Spectre', 2015, 148, 'A Plan No One Escapes', 'English', 880674609, 245000000, 'http://www.sonypictures.com/movies/spectre/', NULL, NULL, 6, 4466, NULL, NULL, NULL),
(29, 'Batman v Superman: Dawn of Justice', 2016, 151, 'Justice or revenge', 'English', 873260194, 250000000, 'http://www.batmanvsupermandawnofjustice.com/', NULL, NULL, 6, 7004, NULL, NULL, NULL),
(30, 'Captain America: Civil War', 0, 147, 'Divided We Fall', 'English', 1153304495, 250000000, 'http://marvel.com/captainamericapremiere', NULL, NULL, 7, 7241, NULL, NULL, NULL),
(31, 'LA lA LAND', 2016, 2, 'Sebastian (Ryan Gosling) and Mia (Emma Stone) are drawn together by their common desire to do what they love. But as success mounts they are faced with decisions that begin to fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart.', 'English', 2147483647, 1000000000, 'https://www.youtube.com/watch?v=0pdqf4P9MB8', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRhFtgdSYQ89vUMjMJal2D8H39qBCkh9ptCEoZEsafOzkeQPTu2', 'Raghad', 8, 200000, 1, 1, 1),
(32, 'LA lA LAND', 2016, 2, 'Sebastian (Ryan Gosling) and Mia (Emma Stone) are drawn together by their common desire to do what they love. But as success mounts they are faced with decisions that begin to fray the fragile fabric of their love affair, and the dreams they worked so hard to maintain in each other threaten to rip them apart.', 'English', 2147483647, 1000000000, 'https://www.youtube.com/watch?v=0pdqf4P9MB8', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRhFtgdSYQ89vUMjMJal2D8H39qBCkh9ptCEoZEsafOzkeQPTu2', 'Raghad', 8, 200000, 1, 1, 1),
(33, '3 idiot', 2013, 2, 'fee description henaaaaaaa', 'English', 3000000, 100000000, 'https://www.youtube.com/watch?v=0pdqf4P9MB8', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRhFtgdSYQ89vUMjMJal2D8H39qBCkh9ptCEoZEsafOzkeQPTu2', 'Raghad', 9, 10000000, 1, 1, 1),
(34, 'Purple Dress', 2020, 120, 'blabla', 'Arabic', 100000000, 2147483647, 'https://www.youtube.com/watch?v=0pdqf4P9MB8', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRhFtgdSYQ89vUMjMJal2D8H39qBCkh9ptCEoZEsafOzkeQPTu2', 'Raghad', 2, 300, 2, 1, 1),
(35, 'baby dress ', 2020, 120, 'pla pla plo', 'Arabic', 2147483647, 100000000, 'https://www.youtube.com/watch?v=0pdqf4P9MB8', 'Link', 'Raghad', 9, 200, 2, 1, 1),
(36, 'first step in Data Science', 2020, 120, 'bla bla', 'Arabic', 10000, 10000, '2', 'Link', 'Raghad', 8, 7, 2, 1, 1);

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
(1, 'Oscar', 'Best movie'),
(3, 'Dress', 'yellow'),
(4, 'oscar', 'Best Actor'),
(5, 'Oscar', 'The Best'),
(6, 'Best', 'Director'),
(7, 'Oscar', 'Director'),
(8, 'Oscar', 'BestFilm');

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
(1, 'Ingenious Film Partners', 1999);

-- --------------------------------------------------------

--
-- Table structure for table `rate_movie`
--

CREATE TABLE `rate_movie` (
  `USER_NAME_WHO_RATED` varchar(100) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `RATE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate_movie`
--

INSERT INTO `rate_movie` (`USER_NAME_WHO_RATED`, `MOVIE_ID`, `RATE`) VALUES
('Raghodaaaa', 33, 5);

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
  `POSTER` blob DEFAULT NULL,
  `SEASON_LINK` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `ID` int(11) NOT NULL,
  `NAME_SERIES` varchar(100) NOT NULL,
  `YEAR` date DEFAULT NULL,
  `DURATION_MIN` int(11) DEFAULT NULL,
  `DESCRIPTION` varchar(1000) DEFAULT NULL,
  `LANGUAGE` varchar(50) DEFAULT NULL,
  `REVENUE` int(11) DEFAULT NULL,
  `BUDGET` int(11) DEFAULT NULL,
  `HOME_PAGE_LINK` varchar(1000) DEFAULT NULL,
  `POSTER` blob DEFAULT NULL,
  `ADMIN_INSETED_SERIES` varchar(100) DEFAULT NULL,
  `IMDB_RATE` int(11) DEFAULT NULL,
  `IMDB_RATE_COUNT` int(11) DEFAULT NULL,
  `NUMBER_OF_EPISODES_IN_SEASON` int(11) DEFAULT NULL,
  `DIRECTOR_ID` int(11) NOT NULL,
  `PRIZE_WON_ID` int(11) DEFAULT NULL,
  `STORY_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`ID`, `NAME_SERIES`, `YEAR`, `DURATION_MIN`, `DESCRIPTION`, `LANGUAGE`, `REVENUE`, `BUDGET`, `HOME_PAGE_LINK`, `POSTER`, `ADMIN_INSETED_SERIES`, `IMDB_RATE`, `IMDB_RATE_COUNT`, `NUMBER_OF_EPISODES_IN_SEASON`, `DIRECTOR_ID`, `PRIZE_WON_ID`, `STORY_ID`) VALUES
(1, 'Friends', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `STORY_ID` int(11) NOT NULL,
  `STORY_NAME` varchar(500) DEFAULT NULL,
  `AUTHOR_NAME` varchar(500) DEFAULT NULL,
  `POSTER` varchar(1000) DEFAULT NULL,
  `Overview` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`STORY_ID`, `STORY_NAME`, `AUTHOR_NAME`, `POSTER`, `Overview`) VALUES
(1, 'The Days', 'Taha Huseen', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTTrV1_Qb7Jg_PYLamxiZnsSodHcsW38SOmdtP6nFHSvnAtUqpL', 'The Days is a novelized autobiography in three volumes by the Egyptian professor Taha Hussein, published between 1926 and 1967. It deals with his childhood in a small village, then his studies in Egypt and France. It is one of the most popular works of modern Arabic literature.');

-- --------------------------------------------------------

--
-- Table structure for table `user_of_notflix`
--

CREATE TABLE `user_of_notflix` (
  `USER_NAME` varchar(100) NOT NULL,
  `PASSWORD_OF_USER` varchar(100) NOT NULL,
  `EMAIL` varchar(500) NOT NULL,
  `AGE` int(11) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_of_notflix`
--

INSERT INTO `user_of_notflix` (`USER_NAME`, `PASSWORD_OF_USER`, `EMAIL`, `AGE`, `GENDER`) VALUES
('raghadkhaled', '1234', 'RoRo@gmail.com', 20, 'F'),
('Raghad_Khaled', '234', 'Raghad@gmail.com', 20, 'F'),
('raghad_khaled1', '1234', 'raghad200059@gmail.com', 20, 'F'),
('RoRo123', '123', 'RoRo123', 20, 'F'),
('Raghodaaa', '12345', 'raghaoda1234692000@gm', 20, 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acted_movie`
--
ALTER TABLE `acted_movie`
  ADD PRIMARY KEY (`MOVIE_ID`,`ACTOR_ID`),
  ADD UNIQUE KEY `MOVIE_ID_2` (`MOVIE_ID`,`ACTOR_ID`,`CHARACTER_PLAYED_ID`),
  ADD UNIQUE KEY `MOVIE_ID_3` (`MOVIE_ID`);

--
-- Indexes for table `acted_series`
--
ALTER TABLE `acted_series`
  ADD UNIQUE KEY `SERIES_ID` (`SERIES_ID`,`ACTOR_ID`),
  ADD KEY `ACTOR_ID` (`ACTOR_ID`),
  ADD KEY `CHARACTER_PLAYED_ID` (`CHARACTER_PLAYED_ID`);

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `actor_prize_movie`
--
ALTER TABLE `actor_prize_movie`
  ADD UNIQUE KEY `ACTOR_ID` (`ACTOR_ID`,`MOVIE_ID`,`PRIZE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`);

--
-- Indexes for table `actor_prize_series`
--
ALTER TABLE `actor_prize_series`
  ADD UNIQUE KEY `ACTOR_ID` (`ACTOR_ID`,`SERIES_ID`,`PRIZE_ID`),
  ADD KEY `SERIES_ID` (`SERIES_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`);

--
-- Indexes for table `add_to_fav_movie`
--
ALTER TABLE `add_to_fav_movie`
  ADD UNIQUE KEY `USER_NAME_OF_USER` (`USER_NAME_OF_USER`,`MOVIE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`);

--
-- Indexes for table `add_to_fav_series`
--
ALTER TABLE `add_to_fav_series`
  ADD UNIQUE KEY `USER_NAME_OF_USER` (`USER_NAME_OF_USER`,`SERIES_ID`),
  ADD KEY `SERIES_ID` (`SERIES_ID`);

--
-- Indexes for table `admin_website`
--
ALTER TABLE `admin_website`
  ADD UNIQUE KEY `ADMIN_NAME` (`ADMIN_NAME`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD UNIQUE KEY `PICTURE` (`PICTURE`) USING HASH,
  ADD KEY `ADMIN_ADDED` (`ADMIN_ADDED`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `director_prize_movie`
--
ALTER TABLE `director_prize_movie`
  ADD UNIQUE KEY `DIRECTOR_ID` (`DIRECTOR_ID`,`MOVIE_ID`,`PRIZE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`);

--
-- Indexes for table `director_prize_series`
--
ALTER TABLE `director_prize_series`
  ADD UNIQUE KEY `DIRECTOR_ID` (`DIRECTOR_ID`,`SERIES_ID`,`PRIZE_ID`),
  ADD KEY `SERIES_ID` (`SERIES_ID`),
  ADD KEY `PRIZE_ID` (`PRIZE_ID`);

--
-- Indexes for table `fantasy_character`
--
ALTER TABLE `fantasy_character`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
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
  ADD UNIQUE KEY `SERIES_ID` (`SERIES_ID`,`PRODUCTION_COMPANY_ID`),
  ADD KEY `PRODUCTION_COMPANY_ID` (`PRODUCTION_COMPANY_ID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `genre_relation_movie`
--
ALTER TABLE `genre_relation_movie`
  ADD PRIMARY KEY (`MOVIE_ID`,`GENRE_ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`STORY_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fantasy_character`
--
ALTER TABLE `fantasy_character`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `prize`
--
ALTER TABLE `prize`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `STORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
