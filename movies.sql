-- --------------------------------------------------------

-- Host:                         localhost

-- Server version:               5.7.19 - MySQL Community Server (GPL)

-- Server OS:                    Win64

-- HeidiSQL Version:             9.4.0.5125

-- --------------------------------------------------------

 

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;

/*!40101 SET NAMES utf8 */;

/*!50503 SET NAMES utf8mb4 */;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

<<<<<<< HEAD
 

 

-- Dumping database structure for movies

CREATE DATABASE IF NOT EXISTS `movies` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `movies`;

 

-- Dumping structure for table movies.genre

CREATE TABLE IF NOT EXISTS `genre` (

  `id` int(110) NOT NULL AUTO_INCREMENT,

  `name` varchar(110) NOT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

 

=======
>>>>>>> 862b097ccb2a13480ea936a2c23694f9c471e4c8
-- Dumping data for table movies.genre: ~4 rows (approximately)

/*!40000 ALTER TABLE `genre` DISABLE KEYS */;

INSERT INTO `genre` (`id`, `name`) VALUES

                (1, 'Romance'),

                (2, 'Comedy'),

                (3, 'Horror'),

                (4, 'Thriller');

/*!40000 ALTER TABLE `genre` ENABLE KEYS */;

<<<<<<< HEAD
 

-- Dumping structure for table movies.movies_list

CREATE TABLE IF NOT EXISTS `movies_list` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `name` varchar(110) NOT NULL,

  `genre` varchar(110) NOT NULL,

  `image_name` varchar(110) DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

 

=======
>>>>>>> 862b097ccb2a13480ea936a2c23694f9c471e4c8
-- Dumping data for table movies.movies_list: ~5 rows (approximately)

/*!40000 ALTER TABLE `movies_list` DISABLE KEYS */;

INSERT INTO `movies_list` (`id`, `name`, `genre`, `image_name`) VALUES

                (1, 'Pulp Fiction (1994)', '4', 'https://upload.wikimedia.org/wikipedia/en/3/3b/Pulp_Fiction_%281994%29_poster.jpg'),

                (2, 'Titanic (1997)', '1', 'https://upload.wikimedia.org/wikipedia/en/1/19/Titanic_(Official_Film_Poster).png'),

                (3, 'The Dark Knight (2008)', '4', 'https://upload.wikimedia.org/wikipedia/en/8/8a/Dark_Knight.jpg'),

                (4, ' The Godfather (1972)', '3', 'https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg'),

                (5, 'Pirates of the Caribbean: The Curse of the Black Pearl (2003)', '4', 'https://upload.wikimedia.org/wikipedia/en/8/89/Pirates_of_the_Caribbean_-_The_Curse_of_the_Black_Pearl.png');

/*!40000 ALTER TABLE `movies_list` ENABLE KEYS */;

<<<<<<< HEAD
 

-- Dumping structure for table movies.movie_details

CREATE TABLE IF NOT EXISTS `movie_details` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `movie_id` int(11) NOT NULL,

  `description` longtext,

  `release_date` date DEFAULT NULL,

  `likes` int(110) DEFAULT NULL,

  `duration` time DEFAULT NULL,

  PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

 

=======
>>>>>>> 862b097ccb2a13480ea936a2c23694f9c471e4c8
-- Dumping data for table movies.movie_details: ~5 rows (approximately)

/*!40000 ALTER TABLE `movie_details` DISABLE KEYS */;

INSERT INTO `movie_details` (`id`, `movie_id`, `description`, `release_date`, `likes`, `duration`) VALUES

                (1, 4, 'When the aging head of a famous crime family decides to transfer his position to one of his subalterns, a series of unfortunate events start happening to the family, and a war begins between all the well-known families leading to insolence, deportation, murder and revenge, and ends with the favorable successor being finally chosen.', '1998-05-14', 356484, '02:58:50'),

                (2, 5, 'This swash-buckling tale follows the quest of Captain Jack Sparrow, a savvy pirate, and Will Turner, a resourceful blacksmith, as they search for Elizabeth Swann. Elizabeth, the daughter of the governor and the love of Will\'s life, has been kidnapped by the feared Captain Barbossa. Little do they know, but the fierce and clever Barbossa has been cursed. He, along with his large crew, are under an ancient curse, doomed for eternity to neither live, nor die. That is, unless a blood sacrifice is made.', '2003-06-07', 6548945, '02:32:00'),

                (3, 2, 'Seventeen-year-old Rose hails from an aristocratic family and is set to be married. When she boards the Titanic, she meets Jack Dawson, an artist, and falls in love with him.', '1997-05-08', 68953519, '03:15:41'),

                (4, 1, 'Pulp Fiction is a 1994 American crime film written and directed by Quentin Tarantino, based on a story by Tarantino and Roger Avary,[4] and starring John Travolta, Samuel L. Jackson, Bruce Willis, Ving Rhames, and Uma Thurman. The film tells a few stories of criminal Los Angeles. The film\'s title refers to the pulp magazines and hardboiled crime novels popular during the mid-20th century, known for their graphic violence and punchy dialogue.', '1994-11-14', 8948989, '02:08:05'),

                (5, 3, 'The Dark Knight is a 2008 superhero film directed, produced, and co-written by Christopher Nolan. Featuring the DC Comics character Batman, the film is the second part of Nolan\'s The Dark Knight Trilogy and a sequel to 2005\'s Batman Begins, starring an ensemble cast including Christian Bale, Michael Caine, ', '2008-02-19', 899889, '02:32:25');

/*!40000 ALTER TABLE `movie_details` ENABLE KEYS */;

 

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;

/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;