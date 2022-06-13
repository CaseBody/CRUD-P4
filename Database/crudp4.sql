-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 03:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudp4`
--

-- --------------------------------------------------------

--
-- Table structure for table `boekingen`
--

CREATE TABLE `boekingen` (
  `id` int(6) NOT NULL,
  `gebruikerid` int(6) NOT NULL,
  `reisid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `submit_ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`submit_ID`, `first_name`, `last_name`, `tel`, `email`, `message`) VALUES
(1, '', '', '', '', ''),
(2, 'e', 'e', 'e', 'e', 'e'),
(3, '', '', '', '', ''),
(4, 'e', 'e', '06', 'e', 'e'),
(5, 'e', 'e', '06', 'e', 'e'),
(6, 'e', 'e', 'e', 'e', 'e'),
(7, 'e', 'e', '1', 'e', 'e'),
(8, 'e', 'e', '1', 'e', 'e'),
(9, 'e', 'e', '1', 'e', 'e'),
(10, 'e', 'e', '1', 'e', 'e'),
(11, 'a', 'a', '2', 'a', 'a'),
(12, 'e', 'e', '1', 'e', 'e'),
(13, 'e', 'e', '1', 'e', 'e'),
(14, 'e', 'e', '1', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(6) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `voornaam`, `achternaam`, `email`, `wachtwoord`, `isAdmin`) VALUES
(1, 'rick', 'rietbergen', 'richard@gmail.com', '$2y$10$OJDdk3qJn846Gc3/Z6iA.e.sRnrgA4kqmjeRVecSr/z4ieI.fsUuO', 0);

-- --------------------------------------------------------

--
-- Table structure for table `opgeslagen_reizen`
--

CREATE TABLE `opgeslagen_reizen` (
  `id` int(6) NOT NULL,
  `gebruikerid` int(6) NOT NULL,
  `reisid` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recensies`
--

CREATE TABLE `recensies` (
  `id` int(6) NOT NULL,
  `gebruikerid` int(6) NOT NULL,
  `reisid` int(6) NOT NULL,
  `beschrijving` varchar(600) NOT NULL,
  `sterren` smallint(1) NOT NULL,
  `isbevestigd` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reis`
--

CREATE TABLE `reis` (
  `id` int(6) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `locatie` varchar(255) NOT NULL,
  `afbeelding` varchar(255) NOT NULL,
  `prijs` decimal(6,2) NOT NULL,
  `beschrijving` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reis`
--

INSERT INTO `reis` (`id`, `naam`, `locatie`, `afbeelding`, `prijs`, `beschrijving`) VALUES
(3, 'TUI Blue Rocador', 'Mallorca, Spain', 'https://media.tuicontent.nl/38a/38aba5cabee95ac78bb320e231b945a0.jpg', '667.00', 'The breathtaking TUI BLUE Rocador is located on one of Mallorca\'s most beautiful bays. In the center of Cala d\'Or you stay in trendy rooms with fresh colors. Every detail has been thought of. Indoors and out, the pools await couples who want to take a dip. Enjoy the culinary surprises in the restaurants. The partly car-free center of Cala d\'Or has many nice shops for shopping or terraces for a real Spanish sangría. Rocador is located directly on the bay of Cala Gran, but the \'Golden Coast\' is do'),
(4, 'BLUESEA CLUB MARTHA\'S\r\n', 'Mallorca, Spanje', 'https://media.tuicontent.nl/511/51147690c8b28bb818c7f559b677f1f6.jpg', '457.00', 'BLUESEA Club Martha\'s in Cala d\'Or has been a favorite with Dutch customers for years. An attractive complex on Mallorca, where the kids have the time of their lives in the kids\' club. Many entertainers speak Dutch, so that\'s easy. Club Martha\'s has comfortable apartments and is a great base for the fine beach and lively center within walking distance. If the kids still want to come along, because they have fun on the complex. You don\'t really have to leave here either… Enjoy the delicious fresh'),
(5, 'AKTI IMPERIAL', 'Rhodos, Greece', 'https://media.tuicontent.nl/789/78912bc3858076cbdf5ef8d74d05da59.jpg', '797.00', 'From a distance you can already see the imposing building on the horizon; Akti Imperial. You may already know the name of the popular Akti hotels on Kos. You will undoubtedly be impressed by the size of this hotel on arrival, but you will soon find your way around perfectly. With 2 large swimming pools and the sea right outside the door, it is water fun for 10 for the whole family. And how about 8 restaurants, so that you can try a different delicacy at any time of the day? Will it be Italian, Greek or Asian tonight? Meanwhile, the entertainment team is eager to start their cabaret show. Shall we have one more cocktail after the show? Naturally! And you don\'t have to pull your wallet, because you stay here on an Ultra All Inclusive basis. That\'s just a carefree holiday.'),
(6, 'ROYAL & IMPERIAL BELVEDERE', 'Kreta, Greece', 'https://media.tuicontent.nl/bea/bea54771d0cf89033a9efce9921d5860.jpg', '707.00', 'From the pool you can already see the lively Hersonissos. At Royal & Imperial Belvedere you experience the best of two hotels in one resort. You will stay together or with the whole family in a somewhat quieter location, just outside the center of Hersonissos. There is plenty to do. From sports and games with the enthusiastic entertainment team to swimming pools and water toys for the children. You stay at Royal & Imperial Belvedere on an All Inclusive basis, so all you have to do is enjoy yourself. The rooms are neatly furnished and especially the family suites are spacious. So extra comfortable if you travel with the whole family. For a slightly greater water experience, the well-known water park Acqua Plus is nearby. And if you want to enjoy an intimate dinner, go to the atmospheric authentic Koutouloufari.'),
(8, 'TALISMAN', 'Sao Miguel, Portugal', 'https://media.tuicontent.nl/C33/C3390606A73E9598E806D712754B7772.jpg', '659.00', 'São Miguel is starting to get ready for a new day and the extensive breakfast of hotel Talisman is already waiting for you. First of all, stop by the roof terrace, you are really not dreaming, you are in the Azores. From this place there is a beautiful view over the city of Ponta Delgada. This charming hotel is located right in the historic center and is surrounded by atmospheric squares and streets. The decor of the hotel is classic. The golden doorknobs, colorful stained glass windows and gleaming chandeliers in the reception area give the feeling of a small theater. The rooms have been renovated and are equipped with all comforts. Talisman is ideal for an atmospheric stay in Ponta Delgada.'),
(9, 'TURQUOISE RESORT', 'Turkish Riviera, Turkey', 'https://media.tuicontent.nl/77D/77D40F4BB7F0508FAEE28C5919BB1A82.jpg', '813.00', 'In de bosrijke, grote tuin van Turquoise Resort in Side kom je heerlijk tot rust. Maar genieten aan het strand of bij het zwembad van Turquoise kan natuurlijk ook. Als je iets meer luxe wilt, kies dan voor een luxe villakamer. Rustig gelegen tussen de pijnbomen met een apart zwembad én eigen ober. Ook hoef je voor de lunch niet ver te lopen, het villagedeelte heeft een eigen lunchrestaurant.'),
(10, 'LONG BEACH RESORT & SPA', 'Turkish Riviera, Turkey', 'https://media.tuicontent.nl/A50/A508138EC1FDA90E6FB252977CEF5F29.jpg', '788.00', 'This resort is fun for everyone, but the kids certainly don\'t want to go home. On a holiday at Long Beach Resort & Spa in Alanya, that is probably what they think when they cross the threshold on arrival. The beach with its large aqua park is a great place for the whole family. And there is even a funfair. Boredom is not an option here. After a day full of activities it is difficult to choose in which of the 4 restaurants you will eat that evening, it is so delicious everywhere! Tip: book a spacious Villa Suite, plunge straight into the pool from the terrace. There is no better way to start another wonderful holiday.'),
(11, 'SPLASHWORLD PEGASOS WORLD', 'Turkish Riviera, Turkey', 'https://media.tuicontent.nl/DB2/DB2C94CE20CBA41E216E3C738A70D40E.jpg', '707.00', 'Splashing water fun for the whole family at SPLASHWORLD Pegasos World in Side, Turkey. SPLASHWORLD means unlimited access to spectacular water parks. Whiz down high-speed slides, float in a tire on the Lazy River and enjoy all the other water attractions of Pegasos World. SPLASHWORLD means swimming fun for young and old. For example, the fanatical front crawlers can fully enjoy themselves in Pegasos World in perhaps the largest swimming pool you will ever see! If mom or dad swims a full circle while the pirate of the family goes down all the slides, the question is who will finish sooner. And that while a figurative tsunami of slides comes over you in Pegasos World. How about the Super Drop?! A half-pipe that you travel in a tire, but the slide is also exactly one tire wide. Don\'t think you don\'t scream when you whiz backwards out of sight. There is also plenty to do for the smaller pirates. There are many small slide parks, one of which is even a real pirate boat. And what lies there '),
(12, 'TRUPIAL INN HOTEL', 'Willemstad, Curaçao', 'https://media.tuicontent.nl/C2C/C2CEAE23F1AB6A37C9FDADC9A4CDCBC5.jpg', '684.00', '“Good dia!” The cheerful hotel manager of the Trupial Inn hotel waves to the Dutch guests who are having a drink on their veranda. The pastel-colored houses are quietly located and yet the cosiness of Willemstad is within reach. You take the free shuttle bus and in no time you are in the middle of Punda or with your feet in the fine sand of Mambo Beach. After a day on the road, there is nothing better than relaxing on a lounge bed by the pool. You don\'t have to leave the house tonight because the Italian restaurant Rosso offers an extensive and very tasty menu. Optionally rent a car during a stay on Curaçao? See HINT! For more information.'),
(14, 'PAPAGAYO BEACH HOTEL', 'Jan Thiel Bay, Curaçao', 'https://media.tuicontent.nl/F9A/F9AA8B69A4B948A70DA8803F4D47EEA5.jpg', '1174.00', 'Right next to the hip Papagayo Beach Club is the unique Papagayo Beach Hotel. The owners have brought in architect Cees den Heijer and combined this with the coolest technical gadgets and luxurious design equipment. Think: remote light to set the mood, walk-in rain shower for a rise-and-shine start to the day… How hip can a hotel be! From a spacious balcony you look out over the tropical garden with the beach of Jan Thiel within easy reach. Grab a beach towel from the hotel and settle down on one of the white lounge beds. Ready for a Blue Curaçao cocktail? Optionally rent a car during your stay on Curaçao? See HINT! For more information.'),
(15, 'SUNSCAPE CURAÇAO RESORT & SPA', 'Mambo Beach, Curaçao', 'https://media.tuicontent.nl/086/086301612448841A52E1A9BD6471AE69.jpg', '1451.00', 'Sunscape Curaçao Resort & Spa is a fully All Inclusive resort on Curaçao. With a private beach in front of the door and 3 swimming pools, there is plenty of cooling. And if you don\'t have the peace of mind to lie on a lounge bed all day, you won\'t be bored for a moment with Unlimited-Fun®. Beach volleyball, a movie on the beach, the kids and teen club, it\'s all included in the price. And with live music and shows, Mambo Beach is a party every night.'),
(16, 'THE IBIZA TWIINS', 'Ibiza, Spain', 'https://media.tuicontent.nl/643/64396DD6ABB08115AC6D5F2799658111.jpg', '1088.00', 'Totally renovated with a hip, new concept: The Ibiza TwIins (formerly Sirenis Tres Carabelas & Goleta). These two hotels have been merged into a new hotel right in the bustling center of Playa d\'en Bossa. The rooms are all furnished according to the latest design trends to make your stay as comfortable as possible. And of course, the eye also wants something. Floating in the large swimming pool you look out over the sea. You see the ferry leaving for Formentera, maybe a nice idea for tomorrow? If you stay in the Solarium room or in the Joy junior suite, you will have access to the special VIP deck with special services, extra swimming pool and where you can relax on Balinese beds. Living the Joy of Ibiza Life!'),
(17, 'GARBI IBIZA & SPA', 'Ibiza, Spain', 'https://media.tuicontent.nl/cae/caeee1a2c91288c644c187bd5b282a5b.jpg', '635.00', 'Bij Garbi Ibiza & Spa, met hippe en witte Ibiza uitstraling, kun je op en top ontspannen. Wat wil je nog meer dan een prachtig hotel aan een uitgerekt zandstrand in Playa d\'en Bossa! Bij het zwembad, aan de chill-out bar, bij het strand of in de spa. Het personeel is vriendelijk en de kamers zijn brandschoon. En met het heerlijke ontbijt wat er geserveerd wordt, start je de dag ontzettend goed. Het hotel is op loopafstand van de fantastische feesten in Ushuaïa en HI! Of ga je liever naar Ibiza stad voor een dag shoppen of voor een gezellig drankje? Met de bus of de boot ben je er al binnen 10 minuten. Wat is er beter dan een onvergetelijke vakantie in Garbi Ibiza op het magische eiland Ibiza.'),
(18, 'SERVATUR WAIKIKI', 'Gran Canaria, Spain', 'https://media.tuicontent.nl/6A0/6A02276B75E10689542E8452FD9C3A4F.jpg', '513.00', 'In hotel Servatur Waikiki on Gran Canaria you sit in your own ivory tower. With all the privileges that come with it. A large swimming pool, Balinese sunbeds and a water playground for little princes and princesses. And in the evening you sit front row at the shows! The airy rooms are spacious and immediately feel comfortable. You don\'t have to cook yourself in this hotel. The food is All Inclusive and fresh every day. Delicious! You don\'t have to think about anything and you can fully enjoy it. From the hotel you can walk to the many shops, bars and restaurants in Playa del Inglés. Day at the beach? It is near. There is plenty to do for the whole family in Servatur Waikiki!'),
(19, 'RIU PALACE ARUBA', 'Palm Beach, Aruba', 'https://media.tuicontent.nl/200/200ac6b7c321f5f217e37ca632ea2e68.jpg', '1688.00', 'Arriving at the RIU Palace Aruba feels like a heartwarming homecoming with the flight still under way. This 5-star hotel offers Ultra All Inclusive as only RIU can. A look through the lobby outside provides a beautiful view. If that great pool is a harbinger of all the luxury, then you\'ve come to the right place! The cheerful bellboy brings all the suitcases to the junior suite and shows how the rain shower works. Just go to the Palm Beach beach in front of the door to take a dip in the crystal clear sea water of Aruba. And immediately order such a refreshing \'Aruba Ariba\' cocktail. Aruba: One Happy Island!'),
(20, 'ALI BABA', 'Hurghada, Egypt', 'https://media.tuicontent.nl/870/8706878DE7E90A2A75F0C75C9FA3FAFA.jpg', '497.00', 'It shouldn\'t get any crazier: skating in Egypt. At Ali Baba in Hurghada city it is possible! There is a real ice rink next to the bowling alley and the air hockey tables. Spin the ice as you think about the rest of the program. You will probably take a dip in the large swimming pool, while the kids rumble down the slides in the new aqua park. At the end of the day, you retire to your family suite. Ideal, two rooms with a connecting door. This way everyone has their privacy.\r\n'),
(21, 'ARABELLA AZUR', 'Hurghada, Egypt', 'https://media.tuicontent.nl/5EB/5EBC310A61379686D7C971F835257FEC.jpg', '601.00', 'At Arabella Azur in Hurghada city, Egypt you can easily arrange a windsurfing session. You bend your knees and lean back slightly. The wind in your hair, the salty water beneath your feet. Diving or quietly snorkeling is of course also possible. There is a beautiful house reef waiting for you here. The hotel itself, with its white arches and domes, resembles an Arab village. Including colorful lamps, fine restaurants, a disco and a real Bedouin-style shisha corner. The water pipe is ready, the smell of the herbal mixture already meets you at Arabella Azur. And when the sun has set, you can stand on your balcony for one last look over Hurghada or the Red Sea. Not wrong, Egypt by night.'),
(22, 'SINDBAD CLUB', 'Hurghada, Egypt', 'https://media.tuicontent.nl/6E9/6E9F06225F2F3CAB7668CCAFA72A9E5A.jpg', '543.00', 'The Yellow Submarine! In addition to the aqua park, this is the main attraction of hotel Sindbad Club. For those who prefer not to go under water themselves, but who do not want to miss the wonderful underwater world of the Red Sea. With so many facilities, there is everything you need for a fun family holiday. How about a diving and water sports center, the tennis courts, a large number of shops.. You already know; this will not be boring for a day. There is also plenty of choice in the buffet restaurant, but dinner in the Italian restaurant is highly recommended. The reservation for tomorrow is already in it.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boekingen`
--
ALTER TABLE `boekingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`submit_ID`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opgeslagen_reizen`
--
ALTER TABLE `opgeslagen_reizen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recensies`
--
ALTER TABLE `recensies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reis`
--
ALTER TABLE `reis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boekingen`
--
ALTER TABLE `boekingen`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `submit_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `opgeslagen_reizen`
--
ALTER TABLE `opgeslagen_reizen`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recensies`
--
ALTER TABLE `recensies`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reis`
--
ALTER TABLE `reis`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
