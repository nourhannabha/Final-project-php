-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`) VALUES
(93302, 'Nourhan Nabha');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `custname` varchar(100) NOT NULL,
  `productname` varchar(1000) NOT NULL,
  `productimage` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `productprice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custid` int(11) NOT NULL,
  `custname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `custid` int(11) NOT NULL,
  `custname` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `productname` varchar(1000) NOT NULL,
  `productimage` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `productprice` varchar(100) NOT NULL,
  `orderaddress` varchar(1000) NOT NULL,
  `ordercity` varchar(1000) NOT NULL,
  `orderregion` varchar(1000) NOT NULL,
  `orderpostalcode` varchar(1000) NOT NULL,
  `ordercountry` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `productname` varchar(1000) NOT NULL,
  `productimage` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `productprice` varchar(100) NOT NULL,
  `categoryname` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `productimage`, `description`, `productprice`, `categoryname`) VALUES
(1, 'FIT ME® Matte + Poreless Foundation face makeup', 'maybellinefoundation.jpg', 'This lightweight foundation mattifies and refines pores and leaves a natural,seamless finish.Ideal for normal to oily skin,\r\nour exclusive matte foundation formula features micro-powders to control shine and blur pores.Pore minimizing foundation.\r\nAll day wear.Non-comedogenic.Dermatologist tested.Allergy tested.', '10$', 'makeup'),
(2, 'THE FALSIES®Lash Lift Washable Mascara', 'maybellinemascara.jpg', 'Dubbed Best Lengthening Mascara of 2020 in the Allure Best of Beauty Awards.\r\nFalsies Lash Lift Mascara is a lifting mascara that delivers dramatic length and\r\nvolume-a lash lift look in a tube!Get an instant lash lift effect from a mascara.\r\nFalsies Lash Lift mascara with fiber delivers dramatic volume and long,lifted lashes,\r\na mascara that looks like false eyelashes!', '12$', 'makeup'),
(3, 'Lusterglass Lipstick', 'maclipstick.jpeg', 'A lightweight, raspberry seed- and organic extra-virgin olive oil-infused lipstick\r\nthat delivers sheer and shiny colour with a long-wearing,lustrous finish.\r\nLusterglass lipstick is currently available in 28 shades.', '22$', 'makeup'),
(4, 'Prep+Prime Fix+Matte', 'macprimer.jpg', 'A lightweight mattifying spray that refreshes skin while instantly controlling the look\r\nof shine and oil.A lightweight mattifying spray that refreshes skin while instantly\r\ncontrolling the look of shine and oil on the surface without disturbing makeup.\r\nThe innovative formula contains powders,silica and other oil-absorbing agents\r\nto help set makeup,rebalance and mattify skin.\r\nFor all skin types.\r\nDermatologist tested.\r\nOphthalmologist tested.\r\nNon-acnegenic', '36$', 'makeup'),
(5, 'Radiant Concealer with Hydrating Serum', 'lorealconcealer.jpg', 'Formulated with Hydrating Serum and Glycerin.Minimizes the appearance\r\nof imperfections and dark circles,brightens skin creating a radiant complexion.\r\nDoes not settle into lines.', '11$', 'makeup'),
(6, 'Flash Cat Eye Waterproof Brush Tip Liquid Eyeliner', 'lorealeyelinear.jpeg', 'Precision brush tip liquid eyeliner and easy-to-use removable wing stencil.Long-lasting,\r\nbrush tip waterproof liquid eyeliner for a smudge-free cat eye look. A removable wing\r\nstencil helps you get perfectly precise wings,every time. Look can be achieved with\r\nor without the cat eyeliner stencil.Available in black and brown.Packaging may vary.\r\nWhat you receive may not be what is reflected on site.\r\nSuitable for all eye-shapes.\r\nDermatologist tested.', '6$', 'makeup'),
(7, 'New Dimension Shape+Sculpt Face Kit', 'esteecontour.jpeg', 'All-in-one contouring duo gives you the power to highlight,define and visibly sculpt\r\nthe look of the face you want-like an expert.', '33$', 'makeup'),
(8, 'All-In-One Brow Kit', 'esteebrow.jpg', 'Compact includes all you need for brows that wow.Create your custom,\r\nall-day color with 2 powder shades.Tweezers,2 mirrors and brush instantly\r\nshape,fill and define brows.Get your best brows now.', '22$', 'makeup'),
(9, 'J\'adore Eau De Parfum by Dior', 'jadoredior.jpg', 'J\'adore is a modern, glamorous fragrance, which has become incredibly popular, and for that reason developed in number of variants of different concentrations.J\'adore is a luminous fragrance. Its opulent, golden scent shimmers on skin like sunbeams. The classic and ambitions of this fragrance reflects in the bottle shaped like Greek amphora. J\'adore presents a new conception of Dior feminity, a scent so new and so in line with Dior style at the same time-sweet but balmy,slightly sharp floral with fresh mandarin in the top; jasmine, plum, orchid and rose in the heart; and amaranth, musk and blackberry in the trail.', '85$', 'perfume'),
(10, 'Hypnotic Poison Eau De Parfum by Dior', 'hypnticpoisondior.jpg', 'Dior\'s Hypnotic Poison has incredible popularity even among younger generations. Its seductive softness attracts attention with a sexy blend of flowers, spices and gourmet aromas, among which are those that tingle your imagination-liquorice, coconut, almonds and vanilla. This is also one of the compositions that made a revolution in the world of perfumery. Hypnotic Poison Eau de Parfum is extremely natural and draws its power and strength from carefully selected raw materials absolutes.', '100$', 'perfume'),
(11, 'Burberry Her Eau De Parfum by Burberry', 'burberryher.jpg', 'Burberry Her is designed to capture the youthful spirit of the city of London,the creative and eclectic metropolis;a spirit that is lively,adventurous and brave.It is made for those women who feel Londoners at heart.Her Eau de Parfum by Burberry is unique because it is a memorable signature,Crushed berry fruit from the top is combined with middle notes of violet and jasmine,based on woods and amber.', '155$', 'perfume'),
(12, 'Body Crystal Baccarat Eau De Parfum by Burberry', 'bodycrystalbaccaretburberry.jpg', 'Body Crystal Baccarat by Burberry is a Chypre Fruity fragrance for women.The composition of Body Crystal Baccarat is a rich and seductive interpretation of the original fragrance.Potent and feminine scent has been enhanced by rose essence and warm tonka beans that intensify the top notes of green absinthe and peach,the heart of iris,rose absolute and sandalwood and the base of cashmere,vanilla and musk.Since Burberry celebrates its 156th anniversary, there are only 156 bottles available.', '3500$', 'perfume'),
(13, 'Prada La Femme Eau De Parfum by Prada', 'pradalafemme.jpg', 'Prada La Femme by Prada is a Amber Floral fragrance for women.It is a classic Prada scent that is shunning from clichés and trends to redefine floral perfumes and femininity.Frangipani flower is interwoven with iris bearing the DNA of the house, enriched with spices, beeswax and tuberose.', '89$', 'perfume'),
(14, 'Prada Amber Eau De Parfum by Prada', 'pradaamber.jpg', 'Prada (Amber) by Prada is a Amber Woody fragrance for women.Prada by Prada is oriental fragrance based on amber the intense accord of which imbues the entire composition. Very modern variant of the classic fragrance. In the composition amber is surrounded by four main essences (essential oils): Indian sandalwood, Indonesian patchouli, French labdanum resin, and Siam benzoin.', '148$', 'perfume'),
(15, 'Gucci Bloom Eau De Parfum by Gucci', 'guccibloom.jpg', 'Gucci Bloom by Gucci is a Floral fragrance for women.Gucci Bloom celebrates the authenticity,vitality and diversity of the women they design for,and those that identify themselves in his vision.True to who they are,these young women experience life and its fruits,blooming into their real selves.Authenticity is woven through qualitative,highly-concentrated natural ingredients.Notes blossom out like a concentration of flowers, the unique expression of the new to the world ingredients, brings a new olfactory experience. Natural Tuberose absolute harvested from India is interlaced with natural Jasmine absolute.', '155$', 'perfume'),
(16, 'Gucci Flora Eau De Parfum by Gucci', 'gucciflora.jpg', 'Gucci Flora Eau de Parfum by Gucci is a Floral fragrance for women.It is characterized by fresh notes of agrums in the opening,combined with beautiful peony.A heart introduces balanced aromas of rose and osmanthus,while a base is created of patchouli and sandalwood.', '160$', 'perfume'),
(17, 'The Ordinary Hyaluronic Acid 2% + B5', 'theordinaryhyaluronic.jpeg', 'A hydration support formula with ultra-pure, vegan hyaluronic acid.The molecular size of HA determines its depth of delivery in the skin. This formulation combines low-,medium- and high-molecular weight HA, as well as a next-generation HA crosspolymer at a combined concentration of 2% for multi-depth hydration in a water-based formula.This system is supported with the addition of Vitamin B5 which also enhances surface hydration.', '16$', 'skincare'),
(18, 'The Ordinary Caffeine Solution 5% + EGCG', 'theordinarycaffeine.jpg', 'This light-textured formula contains an extremely high 5% concentration of caffeine,supplemented with highly-purified Epigallocatechin Gallatyl Glucoside (EGCG).Independent studies have shown that topical use of each of caffeine and EGCG can help reduce looks of puffiness and of dark circles in the eye contour.Additional studies have shown that caffeine can also reduce the appearance of cellulite.', '10$', 'skincare'),
(19, 'La Roche Posay Anthelios Mineral Tinted Sunscreen For Face SPF 50', 'larochesunscreen.jpg', 'This lightweight 100% mineral tinted face sunscreen with titanium dioxide was developed for sensitive skin.The fast-absorbing texture leaves a tinted matte finish on skin for a healthy glow.It is formulated with Cell-Ox Shield® technology: broad spectrum UVA/UVB protection with antioxidants.', '23$', 'skincare'),
(20, 'La Roche Posay Toleriane Double Repair Face Moisturizer', 'larochetoleriane.jpg', 'Toleriane Double Repair Face Moisturizer is formulated with dermatologist-recommended ingredients including ceramide-3,niacinamide, glycerin and La Roche-Posay Prebiotic Thermal Water.Double action helps repair skin\'s natural protective barrier after 1-hour and provide up to 48-hour hydration.Its lightweight cream texture easily absorbs into the skin to provide immediate comfort.Suitable for all skin types,including sensitive.This face moisturizer helps restore healthy-looking skin.', '22$', 'skincare'),
(21, 'Mario Badescu Facial Spray With Aloe Herbs And Rosewater', 'mariofacialspray.jpeg', 'Revitalize skin with dewy radiance.Whether spritzed for a hydrating boost or mid-day pick-me-up,our cult-favorite facial spray helps revive dehydrated skin anytime,anywhere.It\'s a rejuvenating mist infused with herbal and botanical extracts (like Aloe Vera, Gardenia, Rose, Bladderwrack and Thyme) that help soothe and re-energize skin—giving it a healthy,radiant glow.', '7$', 'skincare'),
(22, 'Mario Badescu Enzyme Cleansing Gel', 'mariogel.jpeg', 'Cleanse twice daily with our best-selling face wash.This Papaya and Grapefruit-infused formula removes excess oil and dulling surface impurities to rejuvenate the complexion—leaving skin bright and refreshed.', '14$', 'skincare'),
(23, 'CeraVe Acne Control Gel', 'ceraveacnegel.png', 'CeraVe Acne Control Gel is a hydrating,daily acne treatment with 2% salicylic acid that clears acne and helps prevent new breakouts from forming.It also offers gentle exfoliation with alpha- and beta-hydroxy acids (AHA and BHA) that help improve the appearance of pores along with calming niacinamide and barrier-strengthening ceramides.', '22$', 'skincare'),
(24, 'CeraVe Skin Renewing Retinol Serum', 'ceraveserum.jpg', 'CeraVe Skin Renewing Retinol Serum is a gentle,yet effective,daily retinol serum that provides you with a variety of anti-aging benefits.Ideal for all skin types,the non-comedogenic formula reduces the appearance of fine lines and wrinkles as it improves your skin\'s texture and radiance.', '25$', 'skincare'),
(25, 'Olaplex No.0 Intensive Bond Building Hair Treatment', 'olaplexno0.jpg', 'Our professional-inspired treatment primes your hair for deeper repair, rebuilds hair bonds, strengthens, and protects hair integrity.', '30$', 'haircare'),
(26, 'Briogeo Don\'t Despair,Repair!™Deep Conditioning Mask', 'briogeomask.jpg', 'This mask is clinically proven to boost hair strength,shine,and silkiness and\r\nimprove the long-term health of damaged hair.Formulated with rosehip oil,\r\nB-vitamins,and algae extract,this antioxidant-rich formula restores essential\r\nmoisture and hydration to dry,brittle,colored,or over-processed hair.Formulated with\r\n97% naturally derived ingredients.The Don\'t Despair,Repair! deep conditioning mask\r\nshould be used once per week or every two weeks.In between treatments,\r\nit is recommended to use one of Briogeo\'s shampoo and conditioner set.\r\nSuitable for all hair types.\r\nCruelty-Free', '39$', 'haircare'),
(27, 'Odele Volumizing Shampoo', 'odeleshampoo.jpg', 'Delivers weightless moisture,shine + fullness.Give your hair a boost of volume and take confidence\r\nin knowing that this salon-grade shampoo helps hair look and feel thicker over time.Fortified with amino acids\r\nto promote hair strength from root to tip,this shampoo cleans,nourishes,and moisturizes without weighing hair down.', '12$', 'haircare'),
(28, 'Oribe Gold Lust Repair And Restore Conditioner', 'oribeconditioner.jpg', 'Discover the fountain of youth for soft,shiny,ageless hair.Blending time-\r\nhonored oils and extracts—cypress,argan and maracuja—with our revolutionary\r\nbio-restorative complex,this ultra-hydrating conditioner softens and revitalizes,\r\nsmoothing each cuticle to undo the damage of time (and style).', '22$', 'haircare'),
(29, 'Oribe Gold Lust Repair And Restore Shampoo ', 'oribeshampoo.jpg', 'Reawaken your hair to its glossiest, healthiest prime. This rejuvenating cleanser combines centuries-old healing oils and extracts—cypress and argan—with our revolutionary bio-restorative complex to balance the scalp and reinforce the inner strength of each strand.', '170$', 'haircare');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
