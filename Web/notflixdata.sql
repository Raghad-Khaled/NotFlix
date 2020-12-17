-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 09:58 AM
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
  `CHARACTER_PLAYED_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `BIRTH_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `actor_prize_movie`
--

CREATE TABLE `actor_prize_movie` (
  `ACTOR_ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `actor_prize_series`
--

CREATE TABLE `actor_prize_series` (
  `ACTOR_ID` int(11) NOT NULL,
  `SERIES_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL
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
  `GENDER` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `LNAME` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `director_prize_movie`
--

CREATE TABLE `director_prize_movie` (
  `DIRECTOR_ID` int(11) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `director_prize_series`
--

CREATE TABLE `director_prize_series` (
  `DIRECTOR_ID` int(11) NOT NULL,
  `SERIES_ID` int(11) NOT NULL,
  `PRIZE_ID` int(11) NOT NULL
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
  `DEATH_DATE` date DEFAULT NULL,
  `STORY` varchar(1000) DEFAULT NULL,
  `STORY_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `funded_movie`
--

CREATE TABLE `funded_movie` (
  `MOVIE_ID` int(11) NOT NULL,
  `PRODUCTION_COMPANY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `genre_relation_movie`
--

CREATE TABLE `genre_relation_movie` (
  `MOVIE_ID` int(11) NOT NULL,
  `GENRE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `YEAR` date DEFAULT NULL,
  `DURATION_MIN` int(11) DEFAULT NULL,
  `DESCRIPTION_OF_MOVIE` varchar(1000) DEFAULT NULL,
  `LANGUAGE_MOBIE` varchar(50) DEFAULT NULL,
  `REVENUE` int(11) DEFAULT NULL,
  `BUDGET` int(11) DEFAULT NULL,
  `HOME_PAGE_LINK` varchar(1000) DEFAULT NULL,
  `POSTER` blob DEFAULT NULL,
  `ADMIN_INSETED_MOVIE` varchar(100) DEFAULT NULL,
  `IMDB_RATE` int(11) DEFAULT NULL,
  `IMDB_RATE_COUNT` int(11) DEFAULT NULL,
  `DIRECTOR_ID` int(11) DEFAULT NULL,
  `PRIZE_WON_ID` int(11) DEFAULT NULL,
  `STORY_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prize`
--

CREATE TABLE `prize` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(1000) DEFAULT NULL,
  `TYPE_OF_PRTIZE` varchar(1000) DEFAULT NULL,
  `YEAR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `production_company`
--

CREATE TABLE `production_company` (
  `ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(100) DEFAULT NULL,
  `YEAR_FOUNDED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rate_movie`
--

CREATE TABLE `rate_movie` (
  `USER_NAME_WHO_RATED` varchar(100) NOT NULL,
  `MOVIE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rate_series`
--

CREATE TABLE `rate_series` (
  `USER_NAME_WHO_RATED` varchar(100) NOT NULL,
  `SERIES_ID` int(11) NOT NULL
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
  `NAME_MOVIE` varchar(100) NOT NULL,
  `YEAR` date DEFAULT NULL,
  `DURATION_MIN` int(11) DEFAULT NULL,
  `DESCRIPTION_OF_MOVIE` varchar(1000) DEFAULT NULL,
  `LANGUAGE_MOBIE` varchar(50) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `STORY_ID` int(11) NOT NULL,
  `STORY_NAME` varchar(500) DEFAULT NULL,
  `AUTHOR_NAME` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `acted_movie`
--
ALTER TABLE `acted_movie`
  ADD UNIQUE KEY `MOVIE_ID` (`MOVIE_ID`,`ACTOR_ID`),
  ADD KEY `ACTOR_ID` (`ACTOR_ID`),
  ADD KEY `CHARACTER_PLAYED_ID` (`CHARACTER_PLAYED_ID`);

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
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `STORY_ID` (`STORY_ID`);

--
-- Indexes for table `funded_movie`
--
ALTER TABLE `funded_movie`
  ADD UNIQUE KEY `MOVIE_ID` (`MOVIE_ID`,`PRODUCTION_COMPANY_ID`),
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
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `GENRE_TYPE` (`GENRE_TYPE`);

--
-- Indexes for table `genre_relation_movie`
--
ALTER TABLE `genre_relation_movie`
  ADD UNIQUE KEY `MOVIE_ID` (`MOVIE_ID`,`GENRE_ID`),
  ADD KEY `GENRE_ID` (`GENRE_ID`);

--
-- Indexes for table `genre_relation_series`
--
ALTER TABLE `genre_relation_series`
  ADD UNIQUE KEY `SERIES_ID` (`SERIES_ID`,`GENRE_ID`),
  ADD KEY `GENRE_ID` (`GENRE_ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `PRIZE_WON_ID` (`PRIZE_WON_ID`),
  ADD KEY `ADMIN_INSETED_MOVIE` (`ADMIN_INSETED_MOVIE`),
  ADD KEY `DIRECTOR_ID` (`DIRECTOR_ID`),
  ADD KEY `STORY_ID` (`STORY_ID`);

--
-- Indexes for table `prize`
--
ALTER TABLE `prize`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `production_company`
--
ALTER TABLE `production_company`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `rate_movie`
--
ALTER TABLE `rate_movie`
  ADD UNIQUE KEY `USER_NAME_WHO_RATED` (`USER_NAME_WHO_RATED`,`MOVIE_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`);

--
-- Indexes for table `rate_series`
--
ALTER TABLE `rate_series`
  ADD UNIQUE KEY `USER_NAME_WHO_RATED` (`USER_NAME_WHO_RATED`,`SERIES_ID`),
  ADD KEY `SERIES_ID` (`SERIES_ID`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD UNIQUE KEY `SERIES_ID` (`SERIES_ID`,`SEASON_NUMBER`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `PRIZE_WON_ID` (`PRIZE_WON_ID`),
  ADD KEY `ADMIN_INSETED_SERIES` (`ADMIN_INSETED_SERIES`),
  ADD KEY `DIRECTOR_ID` (`DIRECTOR_ID`),
  ADD KEY `STORY_ID` (`STORY_ID`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD UNIQUE KEY `STORY_ID` (`STORY_ID`);

--
-- Indexes for table `user_of_notflix`
--
ALTER TABLE `user_of_notflix`
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acted_movie`
--
ALTER TABLE `acted_movie`
  ADD CONSTRAINT `acted_movie_ibfk_1` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie` (`ID`),
  ADD CONSTRAINT `acted_movie_ibfk_2` FOREIGN KEY (`ACTOR_ID`) REFERENCES `actor` (`ID`),
  ADD CONSTRAINT `acted_movie_ibfk_3` FOREIGN KEY (`CHARACTER_PLAYED_ID`) REFERENCES `fantasy_character` (`ID`);

--
-- Constraints for table `acted_series`
--
ALTER TABLE `acted_series`
  ADD CONSTRAINT `acted_series_ibfk_1` FOREIGN KEY (`SERIES_ID`) REFERENCES `series` (`ID`),
  ADD CONSTRAINT `acted_series_ibfk_2` FOREIGN KEY (`ACTOR_ID`) REFERENCES `actor` (`ID`),
  ADD CONSTRAINT `acted_series_ibfk_3` FOREIGN KEY (`CHARACTER_PLAYED_ID`) REFERENCES `fantasy_character` (`ID`);

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
  ADD CONSTRAINT `series_ibfk_3` FOREIGN KEY (`DIRECTOR_ID`) REFERENCES `director` (`ID`),
  ADD CONSTRAINT `series_ibfk_4` FOREIGN KEY (`STORY_ID`) REFERENCES `story` (`STORY_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
