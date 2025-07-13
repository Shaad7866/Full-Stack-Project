-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2022 at 09:05 AM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u907496550_bH75w`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `images` varchar(250) NOT NULL,
  `catalouge` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `sub_category`, `description`, `images`, `catalouge`) VALUES
(24, 'Kitchen Series', 'none', 'GC Cera Tiles Presenting our favourite kitchen tiles designs. Explore different ranges of sizes, colors, finishes, material and more, to give your kitchen a welcoming look.', 'upload/1371989961.jpg', 'upload/1203519540.pdf'),
(25, 'Elevation Series', 'none', 'we provide a wide range of appealing and attractive colours providing the best aesthetic colour contrast that grace the house elevation', 'upload/1340630479.jpg', 'upload/445976458.pdf'),
(26, 'Bathroom Series', 'none', 'CG Cera tiles offer a supreme range of bathroom tiles. Find your favorite Bathroom tile collection and give a stunning makeover to your bathroom.', 'upload/1364886225.jpg', 'upload/1203519540.pdf'),
(27, 'PGVT Series', 'none', 'Polished Glazed Vitrified Tiles or PGVT tiles are one of the attractive picks at Orientbell Tiles. They promise to give an eye-catching look to any room.', 'upload/334376152.jpg', 'upload/pgvt.pdf'),
(28, 'Double Charge Series', 'none', 'Double charged vitrified tiles offer excellent strength and durability. They are made with the fusion of layers of pigment', 'upload/358486609.jpg', 'upload/1033318545.pdf'),
(29, 'Wooden Cat Series', 'none', 'Looking for Wooden cat tiles online in India? Shop for the best cat tiles from our collection of exclusive, customized & handmade products.', 'upload/829499331.jpg', 'upload/wooden.pdf'),
(30, 'Glossy Series', 'none', 'GC Cera Presenting super glossy tiles have shiny surfaces and have an enamel coating that reflects light.', 'upload/746147364.jpg', 'upload/glossy.pdf'),
(31, 'Porcelain Series', 'none', 'Porcelain tiles are much better than ceramic tiles, because they are more dense and have low porosity.', 'upload/1848957192.jpg', 'upload/1203519540.pdf'),
(32, 'Nano Series', 'none', 'A layer of liquid silica is applied on the vitrified tiles to fill the micro (nano) pores on the tiles surface, thus giving them a smoother feel and look.', 'upload/2030166203.jpg', 'upload/1203519540.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `short_description` varchar(300) NOT NULL,
  `long_description` mediumtext NOT NULL,
  `product_image` varchar(1000) NOT NULL,
  `size` varchar(50) NOT NULL,
  `size_type` varchar(50) NOT NULL,
  `catalog` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `set_featured` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `product_gallery` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `short_description`, `long_description`, `product_image`, `size`, `size_type`, `catalog`, `category`, `subcategory`, `set_featured`, `status`, `product_gallery`) VALUES
(3, 'Stone Kraft', 'At Stone Kraft, we specialize in custom cabinets, countertops, tiling, and flooring, so we have everything you need to upgrade that Kitchen today!', 'GC Cera Tiles\' exquisite range of kitchen ceramic wall tiles are a connoisseurs dream. Each kitchen wall tile is made using ultra-modern technology which enables us to produce futuristic designs that are not only beautiful but also strong and durable. Our frequent quality checks ensure that every kitchen wall tile that reaches our customers is of exceptional quality. The designer kitchen tiles are sure to leave everyone mesmerized with their unique motifs and splendid colour schemes. Our range of kitchen wall tiles vary from the old classics to ultra-modern enabling us to cater to the personalized needs of our customers.', 'upload/920384806.jpg', '300x450', 'mm', '', 'Kitchen Series', 'none', 0, 1, ''),
(4, 'Impressions', 'Check out the latest kitchen tiles & kitchen wall tiles design for your ... We offer an attractive range of tiles in India.', 'GC Cera Tiles\' exquisite range of kitchen ceramic wall tiles are a connoisseurs dream. Each kitchen wall tile is made using ultra-modern technology which enables us to produce futuristic designs that are not only beautiful but also strong and durable. Our frequent quality checks ensure that every kitchen wall tile that reaches our customers is of exceptional quality. The designer kitchen tiles are sure to leave everyone mesmerized with their unique motifs and splendid colour schemes. Our range of kitchen wall tiles vary from the old classics to ultra-modern enabling us to cater to the personalized needs of our customers.', 'upload/206527337.jpg', '300x600', 'mm', '', 'Kitchen Series', 'none', 0, 1, ''),
(5, 'Impressions', 'Explore stunning range of Bathroom wall tiles in 30x60 cm', 'Long - GC Cera Tiles presents a supreme range of bathroom wall tiles. The all-new assortment of bathroom tiles is an epitome of creativity and advanced technology. Give your bathroom a makeover with our exclusive and classy range of wall tiles. We have categories ranging from ceramic tiles, glazed vitrified tiles & polished vitrified tiles, which comprises a huge variety of bathroom tiling. Wall tiles of these ranges are available in voluminous colours, patterns, sizes to give your space an astonishing look. This eclectic collection comes in glossy as well as matt finish.', 'upload/293029291.jpg', '300x600', 'mm', '', 'Bathroom Series', 'none', 0, 1, ''),
(6, 'Impressions', 'Explore stunning range of Bathroom wall tiles in 30x60 cm', 'Long - GC Cera Tiles presents a supreme range of bathroom wall tiles. The all-new assortment of bathroom tiles is an epitome of creativity and advanced technology. Give your bathroom a makeover with our exclusive and classy range of wall tiles. We have categories ranging from ceramic tiles, glazed vitrified tiles & polished vitrified tiles, which comprises a huge variety of bathroom tiling. Wall tiles of these ranges are available in voluminous colours, patterns, sizes to give your space an astonishing look. This eclectic collection comes in glossy as well as matt finish.', 'upload/1988486614.jpg', '300x600', 'mm', '', 'Bathroom Series', 'none', 0, 1, ''),
(7, 'Impressions', 'A very stylish and quick way to break the visual monotony of your bedroom is to upgrade the room walls using wall tiles.', 'A very stylish and quick way to break the visual monotony of your bedroom is to upgrade the room walls using wall tiles. It will not only make your room look trendy but robust also. GC Cera Tiles makes some super stylish wall tiles for the bedrooms that involve unparalleled artistry and innovative technology. These tiles are crafted to perfection and can be used in many ways.', 'upload/1414865770.jpg', '300x600', 'mm', '', 'Elevation Series', 'none', 0, 1, ''),
(8, 'Digital', 'A very stylish and quick way to break the visual monotony of your bedroom is to upgrade the room walls using wall tiles.', 'A very stylish and quick way to break the visual monotony of your bedroom is to upgrade the room walls using wall tiles. It will not only make your room look trendy but robust also. GC Cera Tiles makes some super stylish wall tiles for the bedrooms that involve unparalleled artistry and innovative technology. These tiles are crafted to perfection and can be used in many ways.', 'upload/628942411.jpg', '300x600', 'mm', '', 'Elevation Series', 'none', 0, 1, ''),
(9, 'PGVT Paradise', 'Living Room Tiles,   Bedroom Tiles,   Hospital Tiles,   High Traffic Tiles,   Bar/Restaurant,   Commercial/Office', 'Material: Vitrified,   Glazed Vitrified Tiles,   Polished Glazed Vitrified Tiles.\nFinish: Glossy Finish.\nType: Floor Tiles. \nDesign: Marble.\nSuitable - Living Room Tiles,   Bedroom Tiles,   Hospital Tiles,   High Traffic Tiles,   Bar/Restaurant,   Commercial/Office', 'upload/523475540.jpg', '600x600', 'mm', '', 'PGVT Series', 'none', 0, 1, ''),
(10, 'Satvario Brillo', 'Living Room Tiles,   Bedroom Tiles,   Hospital Tiles,   High Traffic Tiles,   Bar/Restaurant,   Commercial/Office', 'Material: Vitrified,   Glazed Vitrified Tiles,   Polished Glazed Vitrified Tiles.\r\nFinish: Glossy Finish.\r\nType: Floor Tiles.\r\nDesign: Marble.\r\nSuitable - Living Room Tiles,   Bedroom Tiles,   Hospital Tiles,   High Traffic Tiles,   Bar/Restaurant,   Commercial/Office', 'upload/190024365.jpg', '600x600', 'mm', '', 'PGVT Series', 'none', 0, 1, ''),
(11, 'Cresent Bianco', 'Double charge tiles are made of two layers of vitrified material, infused together to make a thick and durable tile that is 3 to 4 mm thicker than regular tiles.', 'Double charge tiles are made of two layers of vitrified material, infused together to make a thick and durable tile that is 3 to 4 mm thicker than regular tiles. The robust tiles can be used indoors as well as outdoors, in residential as well as commercial settings. The tiles are available in five sizes, with 600x1200mm and 600x600mm being the most popular sizes.  The tiles are available in two natural stone designs – marble and granite – and in a sparkling glossy finish. Canto White, River White, Crescent Bianco, Canto Almond and Canto Red are some of the most opted-for tiles in the double charge range of tiles. The tiles can be purchased at a store near you or online on the Orientbell Tiles website. When on the website, do try the visualise tool, Trialook, to see how the tiles will look post-installation before you make a choice.', 'upload/2008344329.jpg', '600x1200', 'mm', '', 'Double Charge Series', 'none', 0, 1, ''),
(12, 'Merlin Bianco', 'Double charge tiles are made of two layers of vitrified material, infused together to make a thick and durable tile that is 3 to 4 mm thicker than regular tiles.', 'Double charge tiles are made of two layers of vitrified material, infused together to make a thick and durable tile that is 3 to 4 mm thicker than regular tiles. The robust tiles can be used indoors as well as outdoors, in residential as well as commercial settings. The tiles are available in five sizes, with 600x1200mm and 600x600mm being the most popular sizes.  The tiles are available in two natural stone designs – marble and granite – and in a sparkling glossy finish. Canto White, River White, Crescent Bianco, Canto Almond and Canto Red are some of the most opted-for tiles in the double charge range of tiles. The tiles can be purchased at a store near you or online on the Orientbell Tiles website. When on the website, do try the visualise tool, Trialook, to see how the tiles will look post-installation before you make a choice.', 'upload/1547446849.jpg', '600x1200', 'mm', '', 'Double Charge Series', 'none', 0, 1, ''),
(13, 'Glossy Finish', 'Glossy looks are associated with richness and royalty, and can easily attract anyone. So when it comes to glossy floor tiles, no one can keep their eyes away from their stunning shine and texture.', 'Glossy looks are associated with richness and royalty, and can easily attract anyone. So when it comes to glossy floor tiles, no one can keep their eyes away from their stunning shine and texture. This range of Orientbell’s tiles brings style and beauty to any room with their shimmering and eye-catching glossy finishing. Glossy tiles particularly look good on the walls as these are the first places that you see after entering any space. These tiles price ranges around Rs 67 per sq. feet or Rs 722 per sq. metre. Moreover, they are mainly available in sizes of 200mm x 300mm, 300x600 mm, 600x600 mm and 600x1200 mm tiles. Furthermore, these tiles can be used in commercial as well as residential areas. Glossy tiles add style and make any space look plush.', 'upload/719084462.jpg', '600x600', 'mm', '', 'Glossy Series', 'none', 0, 1, ''),
(14, 'Daine Beige', 'Glossy looks are associated with richness and royalty, and can easily attract anyone. So when it comes to glossy floor tiles, no one can keep their eyes away from their stunning shine and texture', 'Glossy looks are associated with richness and royalty, and can easily attract anyone. So when it comes to glossy floor tiles, no one can keep their eyes away from their stunning shine and texture. This range of Orientbell’s tiles brings style and beauty to any room with their shimmering and eye-catching glossy finishing. Glossy tiles particularly look good on the walls as these are the first places that you see after entering any space. These tiles price ranges around Rs 67 per sq. feet or Rs 722 per sq. metre. Moreover, they are mainly available in sizes of 200mm x 300mm, 300x600 mm, 600x600 mm and 600x1200 mm tiles. Furthermore, these tiles can be used in commercial as well as residential areas. Glossy tiles add style and make any space look plush.', 'upload/441291229.jpg', '600x1200', 'mm', '', 'Glossy Series', 'none', 0, 1, ''),
(15, 'FT Burma Teak Light', 'GC Cera porcelain tiles are one of a kind as they can make your space look dazzling while being the most durable and long-lasting of all tiles.', 'Porcelain tiles are one of a kind as they can make your space look dazzling while being the most durable and long-lasting of all tiles. The porcelain tile price is economical and suits all kinds of pockets. They are priced at around Rs 70 per sq. feet. The porcelain floor tile design is varied and available in various patterns and styles, in both glazed and unglazed varieties. GC Cera latest Valencica tile collection has a range of porcelain tiles. These tiles are mainly available in 400x400mm and 600x600mm sizes and are ideal options for any space. Blenda Ivory, Marco Beige DK, Sabbia Brown and Teak Natural are some of the popular porcelain tiles available at GC Cera Tiles.', 'upload/1855168669.jpg', '600x600', 'mm', '', 'Porcelain Series', 'none', 0, 1, ''),
(16, 'DGVT Venezia Oak Wood', 'Wooden tiles price ranges from Rs 39 per sq. feet to Rs 126 per sq. feet. DGVT Rio Wood, DGVT Poplar Beige, BDW Alder Brown, BDW Koa Plank Brown and ODG Natural Wood LT are some of the most popular options in GC Cera wooden tile category. ', 'Wooden tiles price ranges from Rs 39 per sq. feet to Rs 126 per sq. feet. DGVT Rio Wood, DGVT Poplar Beige, BDW Alder Brown, BDW Koa Plank Brown and ODG Natural Wood LT are some of the most popular options in GC Cera wooden tile category. The size of 300x450 mm, 600x600 mm and 145x600 mm are some of the most popular tile sizes available in wooden tiles. The last ones are for wooden planks that are very popularly used in modern and trendy house decor.', 'upload/1788182167.jpg', '600x600', 'mm', '', 'Wooden Cat Series', 'none', 0, 1, ''),
(17, 'Nano Ivory', 'The range of nano tiles at GC Cera Tiles is cutting-edge, as they are manufactured using nanotechnology. The nano flooring tiles have a unique surface that is treated with light nanoparticles with high pressure, along with consistent polishing.', 'The range of nano tiles at GC Cera Tiles is cutting-edge, as they are manufactured using nanotechnology. The nano flooring tiles have a unique surface that is treated with light nanoparticles with high pressure, along with consistent polishing. The price range of nano tiles is Rs 55 per sq. feet to Rs 59 per sq. feet. These tiles are available in 600x600mm size and can be used on the floors of a bedroom, living room, office, dining room, restaurant and showroom. Nano Ivory, Nano Orbit, Nano Homer Beige and Nano 003 are some of the popular nano vitrified tiles available at Orientbell Tiles. You can visualize these tiles at your place using GC Cera Tiles Quick Look and TriaLook tile visualizer tools available at its official website. Visit the nearest store for the best prices.', 'upload/139510480.jpg', '600x600', 'mm', '', 'Nano Series', 'none', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `size` varchar(100) NOT NULL,
  `dimension` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `size`, `dimension`) VALUES
(2, '300x600', 'mm'),
(3, '300x450', 'mm'),
(4, '600x1200', 'mm'),
(5, '250x375', 'mm'),
(6, '300x1200', 'mm'),
(7, '200x1200', 'mm'),
(8, '600x600', 'mm'),
(9, '400x400', 'mm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `username`, `phone`, `email`, `password`, `reg_date`) VALUES
(1, 'Gcceratiles123', '', 0, '', 'Gccera@123', '2022-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
