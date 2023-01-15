-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 09:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `comments` varchar(400) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `post_id`, `created_at`) VALUES
(58, 'nice unniversity', 59, '2023-01-05 11:48:41'),
(62, 'nice park in rwanda', 70, '2023-01-05 22:00:54'),
(66, 'i am planning for making a visit there soon', 70, '2023-01-06 10:11:05'),
(72, 'congz for man city', 83, '2023-01-06 14:39:27'),
(73, 'we are happy for our coach....congraturations to him', 83, '2023-01-06 15:24:44'),
(74, 'congz for man utd ', 82, '2023-01-06 16:26:11'),
(75, '😎😎😎😎😎😎😎😎😎😎😎😎😎😎', 82, '2023-01-06 16:27:10'),
(76, 'i\'m really appreciating', 82, '2023-01-06 22:20:25'),
(77, 'i love this artist so much', 100, '2023-01-06 22:44:45'),
(78, 'rip for the legend', 103, '2023-01-07 09:04:23'),
(79, '😥😥😥😥😥', 103, '2023-01-07 09:04:44'),
(83, 'it\'s our pleasure to study there\r\n', 101, '2023-01-07 18:10:22'),
(84, 'we must fight for good health', 106, '2023-01-08 16:48:18'),
(85, 'we must fight against this diseases', 125, '2023-01-08 16:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(54) NOT NULL,
  `body` longtext NOT NULL,
  `category` varchar(50) NOT NULL,
  `image` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(70) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `category`, `image`, `user_id`, `user_name`, `created_at`) VALUES
(81, 'Vialli remembered as a \'legend\' with a \'gorgeous soul\'', '        Gianluca Vialli has been remembered as a \"legend\" with \"adorable swashbuckling ways\" and a \"gorgeous soul\" after he died at the age of 58.\r\n\r\nFormer Italy, Cremonese, Sampdoria, Juventus and Chelsea striker Vialli passed away this morning.\r\n\r\nHe was first diagnosed with pancreatic cancer in 2017 and was re-diagnosed with the disease in 2021, having been given the all-clear three years ago.\r\n\r\nVialli had a hugely successful playing career before winning more honours as Chelsea boss, then taking over at Watford before he joined great friend Roberto Mancini\'s staff to play a part in Italy\'s European Championship triumph in 2021.\r\n\r\nTributes poured in for Vialli after his death was announced.\r\n\r\nSerie A club Sampdoria, for whom Vialli scored 141 goals, said: \"We will remember you as a boy and a relentless centre forward, because heroes are all young and beautiful and you, since that summer of 1984, have been our hero. \r\n\r\n\"Strong and beautiful, with that 9 printed on the back and the Italian flag sewn on the heart. Strongest leader of Sampdoria, paired up front with your twin Bobby Gol [Mancini]. In three words: one of us.\r\n\r\n\"It was a perception that remained after having bid farewell to Genoa and the South in tears. That\'s right: while raising trophies around Europe with different colours, tracksuits and clothes, Gianluca Vialli was a Sampdorian and the Sampdorians were with Gianluca Vialli.\"', 'sport', '63b82cb0d5b081.24652864.jpg', 22, 'edwin', '2023-01-07 19:39:36'),
(82, 'In Focus: Luke a Shaw thing for much-improved United', '        Luke Shaw has shown both his versatility and maturity for Manchester United since the club season returned. \r\n\r\nThe England left-back demonstrated his ability in central defence, before switching back to his favoured role with great effect in the midweek victory against Bournemouth. \r\n\r\nThis followed Shaw’s assured performances for the national team at the World Cup, where he was an ever-present for Gareth Southgate’s side. \r\n\r\nWith Shaw now a trusted senior player for both club and country, we take a look back at a career that has not always gone to plan.\r\n\r\nPositional shift\r\nWhen United returned to action with a Carabao Cup tie against Burnley, manager Erik ten Hag faced something of a crisis at centre-back. \r\n\r\nWith Lautaro Martinez and Raphael Varane having only just played in the World Cup final and Harry Maguire unwell, Ten Hag was short on numbers. \r\n\r\nShaw volunteered to fill the role, but the Dutch coach decided to start with him on the bench and play Casemiro in central defence. \r\n\r\nIn the first Premier League match back against Nottingham Forest, Shaw was selected to play as a left-sided centre-back alongside Varane and helped to keep a clean sheet in a 3-0 win. \r\n\r\nHe then fulfilled the same role in the 1-0 away victory at Wolves. Ten Hag explained his decision to start with Shaw in the latter game, when he had both Victor Lindelof and Maguire on the bench.\r\n\r\nTen Hag, 52, said: \"You look at the game plan, the way we had to approach Wolves, and I thought it was the best match with Rapha and Luke.\r\n\r\n\"Especially we knew the speed of Wolves from the right side and we could cover that because we wanted to attack over the left side with our offensive game from Tyrell Malacia.\"', 'sport', '63b82ced8c18c2.11237082.jpg', 22, 'edwin', '2023-01-07 19:39:42'),
(83, 'Pep jokes he is a \'genius\' after taking journalist\'s a', '        Pep Guardiola joked he is a \"genius\" and took advice from a journalist for the pivotal substitutions that helped Manchester City to a 1-0 win at Chelsea.\r\n\r\nJack Grealish teed up fellow sub Riyad Mahrez just three minutes after entering the fray in the second half at Stamford Bridge on Thursday.\r\n\r\nGuardiola had earlier shaken things up at the break with Rico Lewis and Manuel Akanji replacing Kyle Walker and Joao Cancelo after a lacklustre first-half showing from his side.\r\n\r\nAsked about the inspired changes, Guardiola quipped: \"I\'m a genius! \r\n\r\n\"In the last press conference it was [journalist] Jamie Jackson, and he said \'why did I make a substitution on 81 minutes against Everton?\' And I took notes and I thought about him at half-time and I changed it at half-time.\"\r\n\r\nExpanding on his thought process, Guardiola explained: \"The first half was sloppy. We didn\'t create much, our pressing was so poor we were not well organised and in the second half especially with Manuel and Rico we were better.\r\n\r\n\"All managers try to make subs to improve the team. Sometimes the team are losing, but you are playing well. So why should I change when I have the feeling they are doing well? Why should I do it? \r\n\r\n\"Today, after 20 minutes, because you have to give the game a little bit of time, I realise I don\'t like what I\'m seeing. Why do you have to wait? \r\n\r\n\"Everyone saw it, from the first minute of the second half it was a completely different Manchester City.\"', 'sport', '63b82d32c92575.29779353.jpg', 22, 'edwin', '2023-01-07 19:39:49'),
(99, 'visit rwanda... country of one hundred mille collines', '        Known as the land of a thousand hills, Rwanda’s stunning scenery and warm, friendly people offer unique experiences in one of the most remarkable countries in the world. It is blessed with extraordinary biodiversity, with incredible wildlife living throughout its volcanoes, montane rainforest and sweeping plains.\r\nTravellers come from far and wide to catch a glimpse of the magnificent gorillas, yet there is so much more to see and experience.\r\nWarm and friendly, Rwandans are also respectful, thoughtful and committed to the idea of progress, starting at the grass roots and running all the way to the top.\r\nFrom the ancient kingdom to the modern day, creativity is something to be celebrated, whether through traditional dance, unique architecture or works of art. Rwanda is ranked as the second easiest place to do business in Africa by the World Bank and has been awarded for its leadership in tourism and economic competitiveness by the World Travel and Tourism Council (WTTC) and the World Economic Forum respectively.', 'politics', '63b8a33fc40b62.10302094.jpg', 22, 'edwin', '2023-01-07 19:39:55'),
(100, 'la fouine..the french artist from algeria', '        La Fouine, de son vrai nom Laouni Mouhid1, né le 25 décembre 1981 à Trappes, dans les Yvelines2, est un rappeur et chanteur franco-marocain3,4. Il quitte l\'école à 14 ans pour se consacrer à la musique. Bien plus tard, La Fouine crée la Banlieue Sale, son propre label. Il crée ensuite sa propre marque de vêtements streetwear nommée Street Swagg5. La Fouine est élu meilleur artiste français au MTV Europe Music Awards en 2011, et meilleur artiste masculin au Trace Urban Music Awards en 20136. La Fouine met de nombreux artistes en avant grâce à ses séries de mixtapes Planète Trappes (2004-2006) et Capitale du Crime (2008-2018). Avec deux millions d\'abonnés sur YouTube, 7 millions d\'abonnés sur Facebook et 4 millions sur Twitter, il est le rappeur français le plus suivi sur les réseaux sociaux en 20157. Le rappeur se décrit lui-même comme ayant deux personnages, le premier, qui est Laouni qui fait de la chanson française, de la variété, du pop-rap ainsi que du rap conscient. Deuxièmement, il y a le personnage La Fouine qui est plutôt d\'un genre hip-hop, hardcore, gangsta rap et rap français8. Dans un album de 2011 intitulé La Fouine vs Laouni les deux personnages sont réunis. Connu comme « le rappeur à la barbichette », il finit par la couper en juin 2016.\r\n\r\nLa Fouine compte plus d\'un million d\'albums vendus9. Sans argent, en 2002, grâce à l\'aide de LIM, un ancien de ses amis, il prend part à sa mixtape sur l\'extrait Freestyle de Violence Urbaines ainsi que sur un extrait d\'Alibi Montana intitulé C\'est pour les mecs d\'en bas, ce qui lui aura permis de se retrouver sur plusieurs compilations dont 109 Rap & R&B où il aura fait 3 apparitions en 2003 avec 3 titres suivis du maxi Boum Boum Boum10 en 2004 avec Mala11. Le 26 octobre 2004, il publie sa première mixtape intitulée Planète Trappes. L\'année qui suit, il sort son premier album intitulé Bourré au son. Il sort son deuxième album Aller-Retour en 2007 et est certifié double-disque d\'or. De plus en plus connu, Laouni enchaîne les albums avec les mixtapes chaque année. Il sort Mes repères en 2009 puis La Fouine vs Laouni en 2011 et est certifié deux fois disque de platine12,13. En 2013, le rappeur publie son nouveau livre et son nouvel album, tous les deux intitulés Drôle de parcours. L\'album fut acheté plus de 200 000 fois14. La Fouine, connu pour ses mixtapes Capitale du Crime, sort 4 compilations de la mixtape en 2008, 2010, 2011 et 2014 dont les 3 derniers qui ont tous étés certifiés disque d\'or15. En 2014 en collaboration avec Sindy, Sultan et Fababy, il sort le projet pop intitulé Team BS certifié disque d\'or en quelques semaines seulement16. En 2016, il sort l\'album Nouveau Monde dont environ 10 000 exemplaires sont vendus en un mois17. Il travaille au projet Capitale du crime Censuré en 201718. En mai 2017, à l\'occasion du Festival Mawazine au Maroc, La Fouine bat son plus grand record d\'affluence public de sa carrière, atteignant les 150 000 personnes présentes dans son concert19.\r\n\r\nUne autobiographie intitulée Drôle de parcours, consacrée à la vie du rappeur, est sortie dans les librairies le 13 novembre 201320.', 'entertainments', '63b8a40a34f8e8.87550909.jpg', 22, 'edwin', '2023-01-07 19:40:03'),
(101, 'unniversity of rwanda-kigali', '        University of Rwanda is a public collegiate, multi campus university based in Kigali, Rwanda. Formed in 2013 through the merger of previously independent education institutions, the University of Rwanda is the largest education institution in Rwanda.[2][3][4][5] The University of Rwanda is ranked number one in the country by Higher Education Council,[6] an organ established by the Government of Rwanda.\r\n\r\nToday the University of Rwanda is composed of 6 independent and self-governing colleges operating in 8 campus.[7] The University hosts a number of centers including four African Centre of Excellence established by World Bank.[7][8] During the 2011 academic year, the university had 24,084 students, of whom 8% are enrolled in postgraduates studies.\r\nInitial work to establish the institution was undertaken by Professor Paul Davenport, a member of Paul Kagame\'s Presidential Advisory Council, who now acts as chair of the university\'s board of governors.[11] The University of Rwanda was established in September 2013 by a law that repealed the laws establishing the National University of Rwanda and the country\'s other public higher education institutes, creating the UR in their place.[1]\r\n\r\nLaw number 71/2013 transferred the contracts, activities, assets, liabilities and denominations of seven institutions to the UR:[2]\r\n\r\nthe National University of Rwanda (UNR)\r\nthe Kigali Institute of Science and Technology (KIST)\r\nthe Kigali Institute of Education (KIE; Ishuri Rikuru Nderabarezi rya Kigali/Institut Supérieur Pédagogique de Kigali)\r\nthe Higher Institute of Agriculture and Animal Husbandry (Institut Supérieur d’Agriculture et d’Elevage, ISAE/Ishuri Rikuru ry’Ubuhinzi n’Ubworozi)\r\nthe School of Finance and Banking (SFB, Ishuri Rikuru ritanga inyigisho mu byerekeye Imari n’Amabanki/École des Finances et des Banques)\r\nthe Higher Institute of Umutara Polytechnic (UP; Ishuri rikuru \"Umutara Polytechnic\"/Institut Supérieur d’Umutara Polytechnique)\r\nthe Kigali Health Institute (KHI; Ishuri Rikuru ry’Ubuzima ry’ i Kigali/Institut Supérieur de Santé de Kigali)', 'education', '63b8a7afe23432.20227153.jpg', 22, 'edwin', '2023-01-07 19:40:13'),
(102, 'fc barcelona available news trending in this week....', '        Barcelona will face one of their biggest tests of the 2022/23 season this weekend when they lock horns with Atletico Madrid at the Civitas Metropolitano.\r\n\r\nHaving stumbled in their last league match against Espanyol, the Catalans have left the door open for Real Madrid to move to the top of the La Liga table and must correct course when they face Atleti on Sunday.\r\n\r\nHowever, their task is made much more difficult by the absence of superstar Robert Lewandowski. The 34-year-old has been the Catalan giants’ ace goalscorer this season and is leading the charts for most goals in the Spanish top flight.\r\n\r\nBut, Lewandowski will be unable to take the field against Atletico Madrid as his three-match ban was upheld by the Court of Arbitration of Sport (CAS). It has given a major headache to Xavi about who he will deploy as the striker this weekend.\r\n\r\nAnd, according to today’s cover page of SPORT, the Barcelona manager has already decided on who will be replacing Lewandowski as the No. 9 when the team face Atletico Madrid this weekend.\r\n\r\nXavi, as per the report, has decided to back young Ansu Fati to take over the responsibility ahead of Memphis Depay and Ferran Torres.\r\n\r\nThe latter duo had started for the Blaugrana in their recent Copa del Rey clash against CF Intercity but failed to make any sort of impact on the night.\r\n\r\nFati, meanwhile, came off the bench and scored the winning goal for Barcelona in extra time, helping them secure a 4-3 victory and progress into the Round of 16.\r\n\r\nWhile the 20-year-old had struggled to do much of note against Espanyol, the manager seems to be convinced that Fati could make a difference for the team when they play Atletico Madrid at the Metropolitano.', 'sport', '63b8a8e9680b83.07194132.jpg', 22, 'edwin', '2023-01-07 19:40:31'),
(103, 'Italy legend Vialli passes away after brave cancer bat', '        Gianluca Vialli has passed away after losing his brave battle with cancer. \r\n\r\nThe former Sampdoria, Juventus and Chelsea star, 58, stepped back from his role with Italy last month to focus on beating the disease. \r\n\r\nHe was first diagnosed with pancreatic cancer in 2017 but revealed in April 2020 that he had received the all-clear after successfully undergoing treatment. \r\n\r\nVialli went on to play an important role as team co-ordinator in Italy\'s Euro 2020 triumph alongside boss Roberto Mancini, his close friend and old Sampdoria team-mate. \r\n\r\nBut the ex-striker, who netted 16 goals in 59 caps and represented the Azzurri at two World Cups, confirmed in December 2021 that the cancer had returned. \r\n\r\nAnd with his condition worsening towards the end of last year, his mother Maria Teresa and brother Nino reportedly rushed to London to be with him in hospital.\r\n\r\nAs the sad news emerged this morning, Chelsea tweeted: \"You\'ll be missed by so many. A legend to us and to all of football. Rest in peace, Gianluca Vialli.\"', 'sport', '63b9354e312052.57721657.jpg', 22, 'edwin', '2023-01-07 19:40:26'),
(106, 'What Are the Health Benefits of Strawberries?', 'One of the most popular and well-known berries is the strawberry. Not only is this fruit a very popular artificial flavor in many candies and drinks, but it’s also commonly used as an accompaniment to desserts — and the fresh, real fruits make for a healthy snack or dessert by themselves.\r\n\r\nLuckily, these berries are as healthy as they are bright and delicious. If you’re thinking about incorporating more strawberries into your diet, learning about their ample health benefits will convince you to start snacking.\r\ncardiovascular diseases and Alzheimer’s disease. Some flavonoids that strawberries are rich in include:\r\nAnthocyanins: These antioxidants, which give strawberries their red color, have anticancer properties because they neutralize cancer-causing free radicals. They’re also anti-inflammatory and have been shown to alleviate symptoms in arthritis patients.\r\nQuercetin: This phenolic compound inhibits infection, promotes mental and physical performance and has anticancer properties. It also provides cardiovascular benefits.\r\nKaempferol: This polyphenol antioxidant has been shown to have many beneficial effects against cardiovascular diseases, cancer, liver injury, obesity and diabetes.\r\nCatechin: This natural phenol is an antioxidant that protects against infection, cancer, obesity, diabetes and cardiovascular diseases. It also promotes a healthy liver and healthy nervous system function.', 'health', '63b9666b15d7f8.74121368.jpg', 22, 'edwin', '2023-01-07 19:40:19'),
(122, 'Rwanda education Board (Education news)...', 'Uyu munsi, tariki ya 2 Ugushyingo 2022, Nyakubahwa Minisitiri w’Intebe yifatanyjie n’abarimu baturutse mu Turere twose tugize Igihugu aho abasaga 7,000 bari bateraniye muri BK ARENA mu birori byo kwizihiza Umunsi Mpuzamahanga w’umwarimu. Uyu munsi wari ufite insanganyamatsiko igira iti: Umwarimu: Ishingiro ry’impinduka nziza mu Burezi.\r\n\r\nNyakubahwa Minisitiri w’Intebe yatangiye ashimangira agaciro k’abarimu ndetse agaragaza ko abarimu bakwiye kubahwa kubera umusanzu wabo batanga wo kurerera u Rwanda; yagize ati: Abarimu mwubahwe! Kuko ibyo dukora byose bifite uwabitwigishije. Nyakubahwa Minisitiri w’Intebe yakomeje ashimira abarimu ku musanzu batanga mu burezi bw’ u Rwanda ndetse abizeza ko guverinoma y’ u Rwanda izakomeza kubaba hafi. Yagize ati: ‘Guverinoma y’ u Rwanda ishyigikiye ibyo mukora.”\r\n\r\nNyakubahwa Minisitiri w’Intebe kandi yabwiye aba barezi ko bafite inshingano zikomeye zo kwigisha kandi bakarera, “Umwarimu ntabwo yigisha gusa ahubwo atanga n’uburere.”\r\n\r\nNyakubahwa Minisitiri w’Intebe yavuze ko abarimu kandi bagomba kuba intangarugero muri byose; “Umwarimu ni bandebereho muri sosiyete.” Nyakubahwa Minisitiri w’Intebe, Dr. Ngirente Edouard yasabye ababyeyi gufatanya n’abarimu mu kurerera u Rwanda rw’ejo; “Ababyeyi bafite inshingano zo gufatanya n’abarimu mu burezi bw’abana bacu.”\r\n\r\nMu ijambo rye, Nyakubahwa Minisitiri w’Intebe yavuze kandi Leta izakomeza gushaka no gushyira mu myanya abarimu bashoboye kandi babikunda.\r\n\r\nMu rwego rwo gukomeza gushyigikira amashuri nderabarezi yo ategura abarimu b’ejo hazaza, Nyakubahwa Minisitiri w’Intebe, Dr. Edouard Ngirente  yavuze ko amashuri nderabarezi azakomeza kwakira abana babahanga mu rwego rwo gukirango hategurwe abarimu b’ejo hazaza bashoboye.\r\n\r\nMu Ijambo ry’Ikaze Minisitiri w’Uburezi, Dr. Valentine Uwamariya yashimye ubwitange bw’abarezi bo shingiro ry’impinduka nziza mu burezi; Umunyamabanga wa Leta ushinzwe amashuri abanza n’Ayisumbuye, Gaspard Twagirayezu nawe yagaragaje ishusho rusange y’uburezi mu Rwanda ndetse yerekana uruhare abarimu bagira mu burezi.', 'education', '63b9ce8b349167.36792472.jpg', 27, 'kwisanga', '2023-01-07 19:56:59'),
(125, 'COVID - 19', 'Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.\r\nMost people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment. However, some will become seriously ill and require medical attention.\r\nHOW IT SPREADS\r\nThe virus can spread from an infected person’s mouth or nose in small liquid particles when they cough, sneeze, speak, sing or breathe. These particles range from larger respiratory droplets to smaller aerosols.\r\nYou can be infected by breathing in the virus if you are near someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth. The virus spreads more easily indoors and in crowded settings.', 'health', '63baf4a804d2f8.99834864.jpg', 31, 'david', '2023-01-08 16:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(151) NOT NULL,
  `email` varchar(151) NOT NULL,
  `password` varchar(151) NOT NULL,
  `profile` varchar(191) NOT NULL,
  `use_type` varchar(19) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile`, `use_type`, `created_at`) VALUES
(31, 'david', 'david@gmail.com', '$2y$10$FhiH/R5Bz5yl4iGwTmTcTez9WIZuvs4Pr946N8iApYASzM7kUyFEK', '63bab0238a6939.59288841.jpg', 'admin', '2023-01-08 15:54:29'),
(32, 'kwibuka', 'okwibuka@gmail.com', '$2y$10$yRwcX4oZ1SadBwTtruoicePDKkjdZU.YbMhBzQgCYLYmEljS.YTeu', '63bac4ff47e613.10422795.jpg', 'super_admin', '2023-01-08 13:28:31'),
(33, 'tresor', 'tresor@gmail.com', '$2y$10$fnF4KPSc4Y0M//Yeln6EZOt.mxyjBTiBBLWZ1JGZbwiBxrkFzWgZO', '63bac51cbcea17.44498641.jpg', 'admin', '2023-01-08 13:29:00'),
(34, 'olivier', 'okwibuka11@gmail.com', '$2y$10$CVAnP.9PnHWhJau2m8Yp..oyjbAKwkZ9P2e0Y2fWjEsbnpg535tvG', '63bb1599373d31.34137720.jpg', 'admin', '2023-01-15 08:08:07'),
(35, 'kagabo', 'kagabo@gmail.com', '$2y$10$Rn1R6G0933HabyonfYeHOewDijMMvy4Dh4/VTlCiSIlRhH9M/UGrC', '63c3b686a46024.35876572.png', 'admin', '2023-01-15 08:17:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
