-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-asaf-font.alwaysdata.net
-- Generation Time: Jun 15, 2024 at 03:17 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asaf-font_sae203`
--
CREATE DATABASE IF NOT EXISTS `asaf-font_sae203` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `asaf-font_sae203`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `chapo` longtext NOT NULL,
  `contenu` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)',
  `lien_yt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `auteur_id`, `titre`, `chapo`, `contenu`, `image`, `date_creation`, `lien_yt`) VALUES
(1, 3, 'Pilem', 'Dolores ', 'Grigny la grande borne\r\nUne **** sur l&#039;&eacute;paule \r\n3 cadavres au sol \r\nLe quartier mahbol \r\n\r\nJe suis rapide \r\n', 'https://lemagduchat.ouest-france.fr/images/dossiers/2023-06/mini/chat-cinema-061232-650-400.jpg', '2023-06-14 20:53:00', ''),
(7, 7, 'Titre de l&#039;article', 'Chap&ocirc; de l&#039;article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id diam ultricies, luctus velit porta, vestibulum urna. Donec quis pulvinar lorem, sed pellentesque dui. Sed vitae est felis. Curabitur at porttitor nunc. Nam lacinia quam vel ex volutpat, eget rhoncus mauris condimentum. Maecenas sed magna scelerisque, varius dui non, semper justo. Morbi pharetra, risus sed auctor rhoncus, mauris velit finibus lectus, sit amet tristique tortor nulla vel eros. Aenean finibus risus metus, sit amet tempor risus laoreet non. Pellentesque molestie fringilla quam, vel accumsan enim tempor sed. Ut nec sem sed mauris ullamcorper lobortis. Mauris ac finibus turpis.\r\n\r\nCras luctus aliquam orci sit amet ultricies. Nulla facilisi. Praesent eleifend urna pellentesque, pulvinar nunc ac, ornare elit. Proin pretium quis orci non mattis. Cras placerat metus sed lacus convallis efficitur. Sed aliquam ut nisi nec molestie. Integer tempus sapien ut nisi ultricies, eget sollicitudin eros feugiat. Praesent ut condimentum sapien, sit amet pulvinar eros. Sed tincidunt tristique orci id pulvinar. Nulla orci erat, aliquam condimentum lacinia sed, aliquet at quam. Praesent vestibulum sapien id neque euismod sodales. Quisque sollicitudin felis et lacus vestibulum hendrerit. In nisi nisi, condimentum dapibus suscipit id, vehicula sit amet felis.\r\n\r\nFusce sit amet elit ac quam aliquet rhoncus et sed nisl. Donec ultrices mollis sollicitudin. Phasellus iaculis ex ipsum, tempor aliquam arcu mollis id. Integer ut placerat mauris. Pellentesque eu imperdiet sapien. Proin leo nisl, auctor quis lacus sed, egestas blandit est. Aliquam vulputate, dui ut condimentum laoreet, turpis elit aliquam ex, eget volutpat turpis felis tincidunt diam. Ut quis nisl sit amet mauris placerat eleifend. Proin dignissim lobortis nulla, nec ultrices elit rutrum nec. Mauris ullamcorper maximus massa efficitur molestie. Integer suscipit dignissim pharetra. Vivamus a dolor sodales, suscipit felis eu, feugiat sem.\r\n\r\nNullam in iaculis massa. Nunc ultrices, erat ac luctus semper, urna est aliquet nisl, sit amet fringilla sem sapien eget risus. Sed consectetur, felis nec vestibulum consequat, felis nisl egestas lorem, sed scelerisque urna felis et elit. In rhoncus, lorem in dignissim gravida, metus ante rhoncus arcu, et commodo nibh odio sit amet risus. Mauris varius, tellus ac maximus ultricies, justo tellus luctus lacus, sit amet dignissim arcu metus a ligula. Aliquam vitae mi dui. Cras blandit nunc in tortor gravida, eget mollis lorem varius. Fusce quis auctor erat, nec volutpat nisi. Nunc non elit non diam finibus cursus a eget elit.\r\n\r\nMauris sit amet odio eros. Phasellus dapibus quam ut augue lacinia fermentum. Nulla pretium, nisi vitae lobortis porta, neque erat tempor dui, et venenatis leo nisl vel nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean gravida felis mi, eu auctor justo facilisis vitae. Sed interdum diam orci, non finibus turpis laoreet eget. Duis ultricies dignissim nunc, vestibulum vulputate sapien ultricies eget.', 'https://via.placeholder.com/800x445.png/00eeff?text=consectetur', '2023-05-09 13:32:06', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
(8, 2, 'Oui', 'Rechristianniser toulon', 'OUIIIIIIIIIII', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiTfEk7Nk0PKhLPxh_x6XtE-oLX4Tva1lZRg&amp;s', '2024-05-24 14:35:59', 'https://www.youtube.com/watch?v=6CbDXgGrL8g'),
(9, 8, 'Test n&deg; 56456132456', 'j&#039;en ai marre...', 'Bonjour', 'https://www.sciencesetavenir.fr/assets/img/2019/12/17/cover-r4x3w1200-5df902df7fa0f-ge-ne-rique-simpsons.jpg', '2024-05-24 14:44:20', ''),
(12, 1, 'Renard', 'Un renard, extrait de Wikip&eacute;dia', 'Renard est un terme ambigu qui d&eacute;signe le plus souvent en fran&ccedil;ais les canid&eacute;s du genre Vulpes, le plus commun &eacute;tant le renard roux (Vulpes vulpes). Toutefois, par similitude physique, le terme est aussi employ&eacute; pour d&eacute;signer des canid&eacute;s appartenant &agrave; d&#039;autres genres, comme les genres Atelocynus, Cerdocyon, Dusicyon, Otocyon, Lycalopex et Urocyon. Dans la culture populaire, le renard est un personnage symbolique et litt&eacute;raire qui repr&eacute;sente l&#039;intelligence et surtout la ruse.\r\n\r\nNomenclature et &eacute;tymologie\r\n&Eacute;tymologie\r\nLe substantif masculin1,2,3 renard est une antonomase lexicalis&eacute;e4, r&eacute;sultat de l&#039;emploi, comme nom commun, de Renart, nom propre2 du h&eacute;ros &eacute;ponyme du Roman de Renart1.\r\n\r\nJusqu&#039;&agrave; la fin du xviie si&egrave;cle5, le renard est encore fr&eacute;quemment appel&eacute; un goupilN 1. Le terme actuel de renard, pour d&eacute;signer l&#039;animal, n&#039;est autre que le pr&eacute;nom Renart donn&eacute; au goupil h&eacute;ros du Roman de Renart. Au centre de ce recueil d&#039;histoires imaginaires, Renart le goupil est tr&egrave;s rus&eacute; et les tours qu&#039;il joue aux autres animaux et aux humains ont rendu le personnage tr&egrave;s c&eacute;l&egrave;bre (on disait : &laquo; malin comme Renart &raquo;). De ce fait, son pr&eacute;nom s&#039;est substitu&eacute; &agrave; goupil par &eacute;ponymie. Sur ce point, voir la symbolique du renard et le renard dans la culture.\r\n\r\nRenard a &eacute;t&eacute; graphi&eacute; Renart jusqu&#039;au milieu du xvie si&egrave;cle. Le nom propre est tir&eacute; d&#039;un anthroponyme francique *Raǥinhard, compos&eacute; des &eacute;l&eacute;ments *raǥin (&laquo; conseil &raquo;) (cf. Raimbaud, Rainfroy6), et *hard (&laquo; dur &raquo;, &laquo; fort &raquo;) (cf. le suffixe fran&ccedil;ais -ard). Il a pour &eacute;quivalents les pr&eacute;noms moyen n&eacute;erlandais Reynaerd et vieux haut allemand Reginhart (allemand Reinhart).\r\n\r\nQuant au terme goupil, il est attest&eacute; sous les formes gulpil en 1155, volpil en 1180, golpilz en 1120, gupil en 1121-1134. Il proc&egrave;de du gallo-roman *WULPĪCULU, variante du latin populaire *vŭlpīculus7 ou du bas latin vulpiculus8, dont sont directement issus l&#039;occitan volp&igrave;lh et l&#039;ancien italien volpiglio. La forme masculine vulpiculus est une alt&eacute;ration du latin classique vulpēcula &laquo; petit renard &raquo; (qui a donn&eacute; l&#039;espagnol vulpeja), diminutif de vulpēs &laquo; renard &raquo; en latin classique8, d&#039;o&ugrave; l&#039;italien moderne volpe. Le passage de [v] &agrave; [w] en gallo-roman s&#039;explique par l&#039;influence phon&eacute;tique du francique (peut-&ecirc;tre inspir&eacute;e dans ce cas par le vieux bas francique *wulf &laquo; loup &raquo;), ensuite [w] se durcit r&eacute;guli&egrave;rement en [gʷ], puis se d&eacute;labialise en [g] en fran&ccedil;ais central et &agrave; l&#039;ouest, mais pas dans les dialectes d&#039;o&iuml;l septentrionaux (ex. : bas-lorrain, champenois, picard, ancien normand septentrional woupil).\r\n\r\nLe latin vulpēs est issu de l&#039;indo-europ&eacute;en commun *(H)ulp-i-, qui est continu&eacute; par l&#039;avestique urupi &laquo; martre &raquo; et le lituanien vilpi&scaron;ỹs &laquo; chat sauvage &raquo;, ainsi que par des formes d&eacute;riv&eacute;es comme le persan rub&acirc;h (روباه) &laquo; renard &raquo; et le sanskrit lopāś&aacute; &laquo; chacal &raquo;9.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrUHJC4f-EcXRDsmajI-nIL5-n9ERk_hbSsUkB06b2_NZxOmu9', '2024-05-29 10:55:28', 'https://youtu.be/ES9kFax89MA?si=hO8rXQJIJxMjPbf9');

-- --------------------------------------------------------

--
-- Table structure for table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `lien_twitter` varchar(255) NOT NULL,
  `lien_avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`, `lien_twitter`, `lien_avatar`) VALUES
(1, 'Petit', 'G&eacute;nie', 'https://x.com/dembouz', 'https://source.boomplaymusic.com/group10/M00/10/03/db0d80f8fb914fa6ab076a23dd7f487e_464_464.webp'),
(2, 'Dembele', 'Ousmane', 'https://x.com/dembouz', 'https://s.yimg.com/ny/api/res/1.2/r4nucB7eTGRBYfSDpgdsTA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTEyNDI7aD03NTM7Y2Y9d2VicA--/https://media.zenfs.com/fr/rmc_sport_articles_552/53ea1d9b74c45b7559f9dc6f4d6916c3'),
(3, 'Thomas', 'Martin', 'https://twitter.com/universitecergy', 'https://www.cyu.fr/uas/cy/LOGO_FOOTER/CY-Cergy-Paris-Universite-Marianne.png'),
(5, 'Martin', 'Pauline', '', 'https://us-tuna-sounds-images.voicemod.net/ba2d0d3c-4831-441c-84a1-d9353084194c-1697245609860.png'),
(7, 'Bateland Cambre', 'Simon', 'https://x.com/asseofficiel', 'https://www.footballdatabase.eu/images/photos/players/2020-2021/a_476/476787.jpg'),
(8, 'Hunter', 'Gargouille', 'https://twitter.com/ELDENRING', 'https://w7.pngwing.com/pngs/245/201/png-transparent-dark-souls-iii-gargoyle-demon-s-souls-dark-souls.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp() COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nom`, `prenom`, `email`, `contenu`, `type`, `date_creation`) VALUES
(1, 'Martin', 'Thomas', 'm.thomas43@yopmail.com', 'Je suis intéressé par la formation.', 'etudiant', '2022-04-13 08:28:01'),
(2, 'Despoux', 'Helena', 'h.despoux@foo.fr', 'Je suis intéressé par la formation.', 'etudiant', '2022-04-13 08:28:01'),
(14, 'ueuzinruizur', 'eiaeuai', 'b.catelandwambre@gmail.com', 'JE SUIS COMME TOUT LE MONDE ', 'autre', '2024-05-13 13:36:05'),
(15, 'Test 05 24 1', 'Test', 'baptiste.catelandwambre@gmail', 'Test', 'etudiant', '2024-05-24 10:22:28'),
(16, 'narrow', 'jimmy', 'jimmynarrow@gmail.com', 'Je suis Jimmy, jimmy narrow, personne ne peut m&#039;atteindre parmi les mortels', 'pas_precise', '2024-05-24 11:00:16'),
(17, 'Jean', 'Jean', 'jean@jean.fr', 'Jean', 'pas_precise', '2024-05-24 11:25:23'),
(18, 'Cateland Wambre', 'Baptiste', 'baptiste.catelandwambre@gmail.com', 'Hello', 'etudiant', '2024-06-15 12:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E6660BB6FE6` (`auteur_id`);

--
-- Indexes for table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E6660BB6FE6` FOREIGN KEY (`auteur_id`) REFERENCES `auteur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
