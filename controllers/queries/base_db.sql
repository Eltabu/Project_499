--
-- Database: `customer`
--

--
-- Procedures
--

CREATE PROCEDURE `sp_add_location` (IN `name` VARCHAR(255), IN `city` VARCHAR(255), IN `prov` VARCHAR(255), IN `addr` VARCHAR(255), IN `phone` VARCHAR(255), IN `lat` FLOAT, IN `lon` FLOAT, IN `post` VARCHAR(255))  NO SQL
INSERT INTO `location`(`city`, `province`, `postal`,`address`, `phone`, `longitude`, `latitude`, `name`) 
VALUES (city,prov,post,addr,phone,lat,lon,name);



CREATE PROCEDURE `sp_add_reservation` (IN `user` INT(11), IN `resid` VARCHAR(255), IN `picloc` INT(11), IN `ptime` TIME(2), IN `pdate` DATE, IN `droploc` INT(11), IN `dtime` TIME(2), IN `ddate` DATE, IN `vehicle` INT(11))  NO SQL
INSERT INTO `reservation`(`userid`, `resid`, `vehid`, `pick_loc`, `picktime`,`pickdate`, `drop_loc`, `dropdate`, `droptime`) 
VALUES (user, resid, vehicle, picloc, ptime, pdate, droploc, ddate, dtime);


CREATE PROCEDURE `sp_add_vehicle` (IN `class` INT(11), IN `model` VARCHAR(255), IN `year` INT(11), IN `mileage` INT(11), IN `seats` INT(11), IN `location` INT(11), IN `image` VARCHAR(255), IN `make` VARCHAR(255))  NO SQL
INSERT INTO `vehicle`(`class`, `model`,`make`,`year`, `mileage`, `seats`, `location`,`image`) 
VALUES (class,model,make,year,mileage,seats,location,image);


CREATE PROCEDURE `sp_cancel_reservation` (IN `user_id` INT(11), IN `resid` VARCHAR(255))  NO SQL
DELETE FROM reservation WHERE userid = user_id AND resid = resid;


CREATE PROCEDURE `sp_checkout` (IN `user` INT(11), IN `type` INT(11), IN `cardnum` INT(11), IN `total` DOUBLE)  NO SQL
INSERT INTO transaction (`cardnum`,`card_id`,`total`,`user_id`) 
VALUES(cardnum, type, total, user);


CREATE PROCEDURE `sp_get_classes` ()  NO SQL
SELECT * FROM veh_class;


CREATE PROCEDURE `sp_get_locations` ()  NO SQL
SELECT * FROM location;


CREATE PROCEDURE `sp_get_reservations` (IN `user` INT(11))  NO SQL
SELECT reservation.resid, vehicle.year, vehicle.make, vehicle.model, location.name AS pickup, reservation.pickdate,reservation.picktime, location.name AS dropoff, reservation.dropdate, reservation.droptime FROM reservation
JOIN location ON location.location_id = reservation.pick_loc AND location.location_id = reservation.drop_loc
JOIN vehicle ON vehicle.vid = reservation.vehid;

CREATE PROCEDURE `sp_get_vehicles` (IN `class` INT(11))  NO SQL
SELECT * FROM vehicle WHERE class = class;

CREATE PROCEDURE `sp_login` (IN `user` VARCHAR(255), IN `pass` VARCHAR(255))  NO SQL
SELECT  * FROM user WHERE username = user AND password = pass;

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Table structure for table `cardtype`
--

CREATE TABLE `cardtype` (
  `card_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardtype`
--

INSERT INTO `cardtype` (`card_id`, `company`) VALUES
(1, 'Mastercard'),
(2, 'VISA'),
(3, 'American Express');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `name` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `city`, `province`, `address`, `phone`, `longitude`, `latitude`, `name`, `postal`) VALUES
(1, 'Windsor', 'Ontario', '456 Sunset Ave', '5199990001', 45, 45, 'Windsor - Sunset', ''),
(3, 'Windsor', 'Ontario', '890 Howard Avenue', '5199090909', 56, 45, 'Windsor - Howard', 'n7h 6h7');

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

CREATE TABLE `make` (
  `make_id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`make_id`, `company`) VALUES
(1, 'Chevrolet'),
(2, 'Ford'),
(3, 'Honda'),
(4, 'Toyota'),
(5, 'Dodge');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `model_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`model_id`, `make_id`, `model_name`) VALUES
(1, 3, 'Civic'),
(2, 2, 'Focus'),
(4, 1, 'Silverado');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `resid` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `vehid` int(11) NOT NULL,
  `pick_loc` varchar(255) NOT NULL,
  `pickdate` varchar(255) NOT NULL,
  `picktime` varchar(255) NOT NULL,
  `drop_loc` int(11) NOT NULL,
  `dropdate` varchar(255) NOT NULL,
  `droptime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`resid`, `userid`, `vehid`, `pick_loc`, `pickdate`, `picktime`, `drop_loc`, `dropdate`, `droptime`) VALUES
('b9p6uGH', 1, 2, '1', '2017-11-15', '14:50:00.00', 3, '2017-11-15', '15:35:00.00'),
('TjP7CJq', 1, 2, '1', '2017-11-15', '14:50:00.00', 3, '2017-11-15', '15:35:00.00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cardnum` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trans_id`, `user_id`, `cardnum`, `total`, `card_id`) VALUES
(1, 1, '2147483647', 19.99, 2),
(2, 1, '2147483647', 19.99, 3),
(3, 1, '2147483647', 19.99, 3),
(4, 1, '2147483647', 19.99, 1),
(5, 1, '2147483647', 19.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `city`, `province`, `type`) VALUES
(1, 'fecteauc', 'uwindsor', 'Cooper\r\n', 'Fecteau', 'Windsor', 'Ontario', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `mileage` varchar(255) DEFAULT NULL,
  `location` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `class`, `year`, `make`, `model`, `seats`, `mileage`, `location`, `image`) VALUES
(2, 1, 2017, 'Ford', 'Focus', 4, '57000', 1, 'focus2017.png'),
(4, 2, 2016, 'Chevrolet', 'Silverado', 4, '91000', 1, '2016silverado.jpg'),
(5, 1, 2015, 'Toyota', 'Corolla', 5, '79000', 2, 'corolla2015.png');

-- --------------------------------------------------------

--
-- Table structure for table `veh_class`
--

CREATE TABLE `veh_class` (
  `classid` int(11) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veh_class`
--

INSERT INTO `veh_class` (`classid`, `class`) VALUES
(1, 'Four Door Sedan'),
(2, 'Pickup Truck'),
(3, 'SUV'),
(4, 'Van');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardtype`
--
ALTER TABLE `cardtype`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `make`
--
ALTER TABLE `make`
  ADD PRIMARY KEY (`make_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`resid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `veh_class`
--
ALTER TABLE `veh_class`
  ADD PRIMARY KEY (`classid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cardtype`
--
ALTER TABLE `cardtype`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `make`
--
ALTER TABLE `make`
  MODIFY `make_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `veh_class`
--
ALTER TABLE `veh_class`
  MODIFY `classid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
