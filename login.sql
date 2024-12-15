-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(50) NOT NULL,
  `cover_photo` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `author_name` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `summary` varchar(5000) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `cover_photo`, `name`, `author_name`, `genre`, `summary`, `price`) VALUES
(1, 'Never_Let_Me_Go.jpg', 'Never Let Me Go', 'Kazuo Ishiguro', 'Fiction', 'Never Let Me Go by Kazuo Ishiguro follows clones raised to donate their organs.\n                    Narrated by Kathy, the story explores her relationships with fellow students\n                    Tommy and Ruth, and their gradual understanding of their purpose.\n                    The novel delves into themes of memory, identity, and the meaning of life and love.', '650'),
(2, 'TheCovenantofWater.jpg', 'The Covenant of Water', 'Abraham Verghese', 'Fiction', 'The story unfolds over generations of a South Indian family bound by a mysterious affliction, where members tragically drown. Anchored by Big Ammachi, the steadfast matriarch, the narrative weaves through love, loss, medical advancements, and spiritual introspection. Themes include the tension between faith and science, societal structures, and familial legacy. The novel paints an intricate portrait of resilience amidst profound challenges, reflecting the deep connections between history, identity, and destiny​.\r\n', '400'),
(3, 'TheAlchemist.jpg', 'The Alchemist', 'Paulo Coelho', 'Fiction', 'The Alchemist by Paulo Coelho follows Santiago, a shepherd who dreams of finding treasure near the Egyptian pyramids. Guided by omens, a wise alchemist, and his heart, Santiago\'s journey explores themes of personal legend, transformation, and the pursuit of dreams. Ultimately, he discovers the treasure lies within himself.', '700'),
(4, 'AnimalFarm.jpg', 'Animal Farm', 'George Orwell', 'Fiction', 'Animal Farm by George Orwell is an allegorical novella where farm animals overthrow their human owner to establish self-rule. Initially pursuing equality, the pigs gradually seize power, mirroring the corruption and tyranny of the humans they replaced. The story critiques authoritarianism and explores the betrayal of revolutionary ideals.', '450'),
(5, 'OnePieceVol1.jpg', 'One Piece Volume 1', 'Eiichiro Oda', 'Comics', 'One Piece by Eiichiro Oda follows Monkey D. Luffy, a boy who gains the ability to stretch like rubber after eating a mystical Devil Fruit. He dreams of becoming the Pirate King by finding the legendary treasure, the \"One Piece.\" Luffy and his Straw Hat Pirates travel across the Grand Line, encountering epic battles, forging deep friendships, and uncovering mysteries of the world. The series emphasizes themes of freedom, dreams, and camaraderie, coupled with rich world-building and imaginative storytelling.', '1200'),
(6, 'OnePieceVol2.jpg', 'One Piece Volume 2', 'Eiichiro oda', 'Comics', 'One Piece by Eiichiro Oda follows Monkey D. Luffy, a boy who gains the ability to stretch like rubber after eating a mystical Devil Fruit. He dreams of becoming the Pirate King by finding the legendary treasure, the \"One Piece.\" Luffy and his Straw Hat Pirates travel across the Grand Line, encountering epic battles, forging deep friendships, and uncovering mysteries of the world. The series emphasizes themes of freedom, dreams, and camaraderie, coupled with rich world-building and imaginative storytelling', '1200'),
(7, 'DragonBallVol1.jpg', 'Dragon Ball Volume 1', 'Akira Toriyama', 'Comics', 'Dragon Ball by Akira Toriyama follows Goku, a young martial artist with extraordinary strength, on his quest to find seven Dragon Balls that grant any wish. Alongside friends like Bulma and Krillin, Goku battles powerful foes, including Piccolo, Saiyans, and Frieza, culminating in his transformation into the legendary Super Saiyan​.\r\n', '1200'),
(8, 'DragonBallVol2.jpg', 'Dragon Ball Volume 2', 'Akira Toriyama', 'Comics', 'Dragon Ball by Akira Toriyama follows Goku, a young martial artist with extraordinary strength, on his quest to find seven Dragon Balls that grant any wish. Alongside friends like Bulma and Krillin, Goku battles powerful foes, including Piccolo, Saiyans, and Frieza, culminating in his transformation into the legendary Super Saiyan​\r\n.', '1200'),
(9, 'The Great Gatsby.jpg', 'The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 'The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway\'s interactions with Jay Gatsby, the mysterious millionaire with an obsession to reunite with his former lover, Daisy Buchanan.', '650'),
(10, 'Pride and Prejudice.jpg', 'Pride and Prejudice', 'Jane Austen', 'Fiction', 'Pride and Prejudice is the second novel by English author Jane Austen, published in 1813. A novel of manners, it follows the character development of Elizabeth Bennet, the protagonist of the book, who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness.', '700'),
(11, 'one piece volume 103.jpg', 'One Piece Volume 103', 'Eiichiro Oda', 'Comics', 'One Piece by Eiichiro Oda follows Monkey D. Luffy, a boy who gains the ability to stretch like rubber after eating a mystical Devil Fruit. He dreams of becoming the Pirate King by finding the legendary treasure, the \"One Piece.\" Luffy and his Straw Hat Pirates travel across the Grand Line, encountering epic battles, forging deep friendships, and uncovering mysteries of the world. The series emphasizes themes of freedom, dreams, and camaraderie, coupled with rich world-building and imaginative storytelling.', '1200'),
(12, 'goodnight punpun vol 1.jpg', 'Goodnight Punpun Volume 1', 'Inio Asano', 'Comics', 'Punpun and the members of his family are normal humans, but are depicted to the reader in the form of crudely drawn birds. The manga explores themes such as depression, love, trauma, social isolation, death, and family.', '1200'),
(13, 'Murder on the Orient Express.jpg', 'Murder on the Orient Express', 'Agatha Christie', 'Detective', 'In Murder on the Orient Express, detective Hercule Poirot investigates the murder of Samuel Ratchett aboard a luxury train stranded by snow. Each passenger is a suspect, and Poirot discovers they share a connection to a past crime. Ingeniously, all collaborated in the murder, seeking justice for a tragic injustice.', '450'),
(14, 'A Study in Scarlet.jpg', 'A Study in Scarlet', 'Sir Arthur Conan Doyle', 'Detective', 'In A Study in Scarlet, Dr. Watson meets Sherlock Holmes, a brilliant detective, and they investigate the murder of Enoch Drebber. Clues lead to Jefferson Hope, seeking revenge for a past betrayal involving love and tragedy in Utah. The story alternates between London and the American West, revealing Hope’s motives.', '450'),
(15, 'The Bone Collector.jpg', 'The Bone Collector', 'Jeffery Deaver', 'Detective', 'Two colleagues, T.J. (Tammie Jean) Colfax and John Ulbrecht, catch a cab at a New York City airport. After a brief ride through New York, they find themselves in an abandoned warehouse district. The cab\'s doors are locked and the driver ignores their pleas to let them out.', '500'),
(16, 'goodnight punpun vol 7.jpg', 'Goodnight Punpun Volume 7', 'Inio Asano', 'Comics', 'Punpun and the members of his family are normal humans, but are depicted to the reader in the form of crudely drawn birds. The manga explores themes such as depression, love, trauma, social isolation, death, and family.', '1200'),
(17, 'Whose Body.jpg', 'Whose Body?', 'Dorothy L. Sayers', 'Detective', 'Whose Body? is a 1923 mystery novel by Dorothy L. Sayers first published in the UK by T. Fisher Unwin and in the US by Boni & Liveright. It was her debut novel, and the book in which she introduced the character of Lord Peter Wimsey. Clouds of Witness would be the next novel in which the character reappears.', '600'),
(18, 'Six of Crows.jpg', 'Six of Crows', 'Leigh Bardugo', 'Fantasy', 'The story follows a thieving crew and is primarily set in the city of Ketterdam, which is loosely inspired by Dutch Republic–era Amsterdam.', '650'),
(19, 'Circe.jpg', 'Circe', 'Madeline Miller', 'Fantasy', 'Circe is a 2018 mythic fantasy novel by American writer Madeline Miller. Set during the Greek Heroic Age, it is an adaptation of various Greek myths, most notably the Odyssey, as told from the perspective of the witch Circe.', '650'),
(20, 'Harry Potter and the Philosopher\'s Stone.jpg', 'Harry Potter and the Philosopher\'s Stone', 'J. K. Rowling', 'Fantasy', ' It is the first novel in the Harry Potter series and was Rowling\'s debut novel. It follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school. With the help of his friends, Ron Weasley and Hermione Granger, he faces an attempted comeback by the dark wizard Lord Voldemort, who killed Harry\'s parents but failed to kill Harry when he was just 15 months old.', '700'),
(21, 'harry potter and the chamber of secrets.jpg', 'harry potter and the chamber of secrets', 'J. K. Rowling', 'Fantasy', 'The story follows Harry\'s second year at Hogwarts School of Witchcraft and Wizardry, where the Heir of Salazar Slytherin opens the Chamber of Secrets, unleashing a monster that petrifies the school\'s students.', '700'),
(22, 'The Fault in Our Stars.jpg', 'The Fault in Our Stars', 'John Green', 'Romance', 'The Fault in Our Stars by John Green is a young adult fiction novel that narrates the story of a 16-year-old girl who is diagnosed with cancer. She joins a support group where she meets Augustus, and there is a rollercoaster of emotions throughout this novel as the relationship between Hazel and Augustus develops.', '500'),
(23, 'Xoxo.jpg', 'XOXO', 'Axie Oh', 'Romance', 'After meeting a boy in Los Angeles, Jenny finds her life changed when she studies abroad in South Korea and realizes he’s a K-pop idol. ', '500'),
(24, 'November9.jpg', 'November 9', 'Collen Hoover', 'Romance', 'The story is about two young adults who meet on November 9, the day Fallon decides to move to New York from L.A..', '500'),
(25, 'Fifty Shades Darker.jpg', 'Fifty Shades Darker', 'E. L. James', 'Romance', 'Daunted by the singular tastes and dark secrets of the beautiful, tormented young entrepreneur Christian Grey, Anastasia Steele has broken off their relationship to start a new career with a Seattle publishing house.\r\n\r\nBut desire for Christian still dominates her every waking thought, and when he proposes a new arrangement, Anastasia cannot resist. They rekindle their searing sensual affair, and Anastasia learns more about the harrowing past of her damaged, driven and demanding Fifty Shades.', '600'),
(26, 'The Silent Patient.jpg', 'The Silent Patient', 'Alex Michaelides', 'Thriller', 'The Silent Patient is a 2019 psychological thriller novel written by British–Cypriot author Alex Michaelides. The successful debut novel was published by Celadon Books, a division of Macmillan Publishers, on 5 February 2019. The audiobook version, released on the same date, is read by Louise Brealey and Jack Hawkins.', '650'),
(27, 'Gone Girl.jpg', 'Gone Girl', 'Gillian Flynn', 'Thriller', 'Gone Girl is a crime thriller novel by American writer Gillian Flynn, published by Crown Publishing Group in June 5, 2012. The book became popular, making the New York Times Best Seller list. The sense of suspense in the novel comes from whether Nick Dunne is responsible for the disappearance of his wife Amy.', '450'),
(28, 'The Da Vinci Code.jpg', 'The Da Vinci Code', 'Dan Brown', 'Thriller', 'The Da Vinci Code is a 2003 mystery thriller novel by Dan Brown. It is Brown\'s second novel to include the character Robert Langdon: the first was his 2000 novel Angels & Demons.', '500'),
(29, 'Angels and Demons.jpg', 'Angels and Demons', 'Dan Brown', 'Thriller', 'Angels & Demons is a 2000 bestselling mystery-thriller novel written by American author Dan Brown and published by Pocket Books and then by Corgi Books. The novel introduces the character Robert Langdon, who recurs as the protagonist of Brown\'s subsequent novels. ', '500');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `user_id` int(100) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `book_id`, `user_id`, `book_image`, `book_name`, `price`) VALUES
(23, '6', 0, 'OnePieceVol2.jpg', 'One Piece Volume 2', '1200'),
(26, '6', 6, 'OnePieceVol2.jpg', 'One Piece Volume 2', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(20) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `genre_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre`, `genre_image`) VALUES
(1, 'Fiction', 'fiction.jpg'),
(2, 'Detective', 'detective.jpg'),
(3, 'Fantasy', 'fantasy.jpg'),
(4, 'Romance', 'romance.jpg'),
(5, 'Thriller', 'thriller.jpg'),
(6, 'Comics', 'comics.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `user_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `firstName`, `lastName`, `email`, `password`, `Gender`, `PhoneNumber`, `Address`, `user_image`) VALUES
(1, 'Alve', 'Alam', 'alvealamccac@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Male', '01779703580', 'Gazipur, Dhaka, Bangladesh', 'alve.jpg'),
(2, 'ABb', 'Cdd', 'alvealamac1@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '', '', '', ''),
(3, 'Alvee', 'Alam', 'alvealamac22@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', '', '', ''),
(4, 'Test', 'Practice', 'alvealam2212@gmail.com', '01cfcd4f6b8770febfb40cb906715822', '', '', '', ''),
(5, 'Amit112', 'Chowdhuri', 'mramitac7@gmail.com', '05d396fc63aeefbdb2ee349d527734ac', 'Male', '01928814365', 'Dhaka Bangladesh', 'alve.jpg'),
(6, 'Jaheen', 'Khan', 'jaheen027@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', '', '', ''),
(7, 'Kala', 'Nashid', 'sobkala@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
