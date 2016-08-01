-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 09:15 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbonhood`
--

-- --------------------------------------------------------

--
-- Table structure for table `scenter`
--

CREATE TABLE `scenter` (
  `id` int(11) NOT NULL,
  `center_name` varchar(300) NOT NULL,
  `center_add` varchar(300) NOT NULL,
  `pincode` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `gps` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scenter`
--

INSERT INTO `scenter` (`id`, `center_name`, `center_add`, `pincode`, `phone_number`, `brand`, `gps`) VALUES
(1, 'Audi North Atlanta', '11505 Alpharetta Hwy, Roswell, GA 30076', 300076, 888483509, 'Audi', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.3879650711638!2d-84.32662088513288!3d34.05956762479213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f574f0eee9adb1%3A0xbea9ccec782d01cf!2s11505+Alpharetta+Hwy%2C+Roswell%2C+GA+30076!5e0!3m2!1sen!2s!4v1462383665710" width="200" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(2, 'audi mumbai west', '167, CST Road, Kalina, Santacruz East, Mumbai, Maharashtra 400098', 400098, 989696966, 'audi', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120665.96930046196!2d72.79693914275913!3d19.07202187939271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c8facba9d059%3A0x325980c49e561fa5!2s167%2C+CST+Road%2C+Kalina%2C+Santacruz+East%2C+Mumbai%2C+Maharashtra+400098%2C+India!3m2!1d19.0720351!2d72.8669796!5e0!3m2!1sen!2s!4v1462903169968" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(3, 'audi mumbai south', '34, Das Compound, Nesbit Road, Next to Mazgaon Court, Mazgaon, Mumbai, Maharashtra 400010', 400010, 889889889, 'audi', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120740.38596702594!2d72.76659554109568!3d18.969553339689536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7cf046b7b9599%3A0xd092686fb85a233b!2s34%2C+Das+Compound%2C+Nesbit+Road%2C+Next+to+Mazgaon+Court%2C+Mazgaon%2C+Mumbai%2C+Maharashtra+400010%2C+India!3m2!1d18.9695665!2d72.836636!5e0!3m2!1sen!2s!4v1462903526551" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(4, 'Audi Navi Mumbai Workshop', 'C-3B, MIDC TTC, Industrial Area Pawane Village, Near Asian Paints, Turbhe, Navi Mumbai, Maharashtra 400705, India', 400705, 48777777, 'Audi', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120657.11108534649!2d72.95066964295715!3d19.08418397224723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c122b25c51bd%3A0xfae2f4baa7e0f6c4!2sC-3B%2C+MIDC+TTC%2C+Industrial+Area+Pawane+Village%2C+Near+Asian+Paints%2C+Turbhe%2C+Navi+Mumbai%2C+Maharashtra+400705%2C+India!3m2!1d19.0841972!2d73.0207101!5e0!3m2!1sen!2s!4v1462903787271" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(5, 'Mercedes Benz Service Centre', 'Shivram Seth Amritwar Marg, Lower Parel West, Lower Parel, Mumbai, Maharashtra 400013, India', 400013, 95940062, 'Mercedes', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120716.97701672842!2d72.75250024161895!3d19.001843820670242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7ce922e866373%3A0x49906025672f354c!2smercedes+service+centre+mumbai!3m2!1d19.001856999999998!2d72.82254069999999!5e0!3m2!1sen!2s!4v1462903975489" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(6, 'BMW Infiniti Service Centre', '81, Gandhi Nagar, Worli, Mumbai, Maharashtra 400018, India', 400018, 63426354, 'bmw', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120721.62191001917!2d72.7499823415151!3d18.995440824440315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7ce8eee47e3f5%3A0x13ff454ab8add03c!2s81%2C+Gandhi+Nagar%2C+Worli%2C+Mumbai%2C+Maharashtra+400018%2C+India!3m2!1d18.995454!2d72.82002279999999!5e0!3m2!1sen!2s!4v1462904093004" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(7, 'Infinity Cars - BMW showroom', 'Thane Belapur Rd, Shiravane Gaon, Nerul, Navi Mumbai, Maharashtra 400706, India', 400706, 67145100, 'bmw', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120680.58876918361!2d72.94957554243234!3d19.051933391200325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c3df9cd73473%3A0xe01b2a670248acd0!2sThane+Belapur+Rd%2C+Shiravane+Gaon%2C+Nerul%2C+Navi+Mumbai%2C+Maharashtra+400706%2C+India!3m2!1d19.0519466!2d73.019616!5e0!3m2!1sen!2s!4v1462904191136" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(8, 'Modi Hyundai', 'Jogani Industrial Estate, VJ Patil Marg, Sion, Mumbai, Maharashtra 400022, India', 400022, 64547777, 'hyundai', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120677.37228192376!2d72.80684444250424!3d19.0563548886009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c8bf34e62949%3A0x3bb10046bfd92c33!2sJogani+Industrial+Estate%2C+VJ+Patil+Marg%2C+Sion%2C+Mumbai%2C+Maharashtra+400022%2C+India!3m2!1d19.0563681!2d72.8768849!5e0!3m2!1sen!2s!4v1462904332512" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(9, 'Shreenath Hyundai - Services Center', 'C/o. Venus Steel Product (India) S.V. Road,Next to Petrol Pump, Oshiwara, Jogeshwari West, Mumbai, Maharashtra 400102, India', 400102, 66707777, 'hyundai', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120610.4067983536!2d72.77425954400114!3d19.148184734684822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b63689cbcc1b%3A0x2156e833393d6b34!2sC%2Fo.+Venus+Steel+Product+(India)+S.V.+Road%2CNext+to+Petrol+Pump%2C+Oshiwara%2C+Jogeshwari+West%2C+Mumbai%2C+Maharashtra+400102%2C+India!3m2!1d19.148198!2d72.84429999999999!5e0!3m2!1sen!2s!4v1462905131331" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(10, 'Shreeram Hyundai Service Center', 'Plot No. 22, E,F,G,H, Cts No. 431, A/1, Kandivali Co-Op. Ind. Estate, Charkop, Kandivali West, Mumbai, Maharashtra 400067, India', 400067, 30110111, 'hyundai', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120567.3410072519!2d72.75554994496378!3d19.207017600213863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b6b78a5a217f%3A0xb10bf1e8a39279ea!2sPlot+No.+22%2C+E%2CF%2CG%2CH%2C+Cts+No.+431%2C+A%2F1%2C+Kandivali+Co-Op.+Ind.+Estate%2C+Charkop%2C+Kandivali+West%2C+Mumbai%2C+Maharashtra+400067%2C+India!3m2!1d19.2070309!2d72.8255904!5e0!3m2!1sen!2s!4v1462905223525" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(11, 'maruti service centre', 'Lal Bahadur Shastri Marg, Ghatkopar West, Mumbai, Maharashtra 400086, India', 400086, 82918400, 'maruti', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120648.81168131916!2d72.84469994314267!3d19.095572065558656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c7ce91b0ab77%3A0xe259c8a9dcf37606!2sLal+Bahadur+Shastri+Marg%2C+Ghatkopar+West%2C+Mumbai%2C+Maharashtra+400086%2C+India!3m2!1d19.0955853!2d72.9147404!5e0!3m2!1sen!2s!4v1462905320334" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(12, 'Excell Autovista Maruti Suzuki Service Center', 'Resham Singh Compound, CST Road, Kalina Santacruz (East), Mumbai, Maharashtra 400098, India', 400098, 67743888, 'maruti', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120663.80574112326!2d72.79889644280749!3d19.07499307764685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c8f1f8b11be7%3A0xb409b0679b313f2e!2sResham+Singh+Compound%2C+CST+Road%2C+Kalina+Santacruz+(East)%2C+Mumbai%2C+Maharashtra+400098%2C+India!3m2!1d19.0750063!2d72.8689369!5e0!3m2!1sen!2s!4v1462905402742" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(13, 'Sai Service Station', 'Shakti Insulated Wire Compound, Borivali East, Mumbai, Maharashtra 400066, India', 400066, 43030161, 'maruti', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120557.59333899205!2d72.79143414518167!3d19.220309992433435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b72d225425a5%3A0xe6b798998ca349d4!2sShakti+Insulated+Wire+Compound%2C+Borivali+East%2C+Mumbai%2C+Maharashtra+400066%2C+India!3m2!1d19.2203233!2d72.8614746!5e0!3m2!1sen!2s!4v1462905482128" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(14, 'Millennium Toyota Service Center', 'plot n0 23, Shah industrial estate, off veera desai road,, near link road, Ambiwali Andheri West, Mumbai, Maharashtra 400053, India', 400053, 67139000, 'toyota', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120620.88910537826!2d72.76547954376682!3d19.133838343099043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b6243cb43ce3%3A0x910b5c3093cec866!2splot+n0+23%2C+Shah+industrial+estate%2C+off+veera+desai+road%2C%2C+near+link+road%2C+Ambiwali+Andheri+West%2C+Mumbai%2C+Maharashtra+400053%2C+India!3m2!1d19.1338516!2d72.83552!5e0!3m2!1sen!2s!4v1462905683043" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(15, 'Shinrai Toyota', ' CR2 Mall, Barrister Rajni Patel Marg, Near Inox, Nariman Point, Mumbai, Maharashtra 400021, India', 400021, 66701500, 'toyota', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120771.41161509293!2d72.75270244040209!3d18.926674564971233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7d1e931f4f8b1%3A0x8b1183c1bca54c6d!2sCR2+Mall%2C+Barrister+Rajni+Patel+Marg%2C+Near+Inox%2C+Nariman+Point%2C+Mumbai%2C+Maharashtra+400021%2C+India!3m2!1d18.9266877!2d72.8227429!5e0!3m2!1sen!2s!4v1462905769556" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(16, 'Wasan Toyota', 'C/170, TTC Industrial Estate, Village - Pawane Turbhe, Navi Mumbai, Maharashtra 400703, India', 400703, 66539999, 'toyota', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120655.4658091606!2d72.95237004299392!3d19.086442070920818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c1163e9b7d97%3A0xe2b0d30b8fe3dd57!2sC%2F170%2C+TTC+Industrial+Estate%2C+Village+-+Pawane+Turbhe%2C+Navi+Mumbai%2C+Maharashtra+400703%2C+India!3m2!1d19.0864553!2d73.02241049999999!5e0!3m2!1sen!2s!4v1462905842375" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(17, 'Bentley Service Center', 'Noori Baug, Andheri Kurla Road, Mumbai, Maharashtra 400059, India', 400059, 66710907, 'bentley', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120638.15527598093!2d72.80579204338086!3d19.110184756979255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c8157a8cd7bf%3A0x6baa460dfaa44c6e!2sbentley+service+centre+mumbai!3m2!1d19.110198!2d72.8758325!5e0!3m2!1sen!2s!4v1462905941612" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(18, 'Jaguar Land Rover Service Station', 'Lower Parel, Mumbai, Maharashtra 400018, India', 400018, 0, 'jaguar', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120720.90122702654!2d72.74994414153122!3d18.99643442385525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7ce8e59004833%3A0x6156066ec4c5e9ab!2sjaguar+service+center+mumbai!3m2!1d18.9964476!2d72.8199846!5e0!3m2!1sen!2s!4v1462906160082" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(19, 'Bhavna Ford', 'Santacruz East, Mumbai, Maharashtra 400098, India', 400098, 99304611, 'ford', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120663.75061388957!2d72.79896684280872!3d19.07506877760238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c8f1865efddd%3A0x497d7bea0f7ce7a7!2sSantacruz+East%2C+Mumbai%2C+Maharashtra+400098%2C+India!3m2!1d19.075082!2d72.86900729999999!5e0!3m2!1sen!2s!4v1462906275427" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(20, 'Wasan Ford', 'Plot No 4, Laxmi Narayan Building, Sion Tronbay Road, Swastik Park, VN Purav Marg, Chembur, Mumbai, Maharashtra 400071, India', 400071, 99202200, 'ford', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120678.81129687192!2d72.82072614247208!3d19.054376889763734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b95b2ef08239%3A0x6487b4e7e8d5067b!2sPlot+No+4%2C+Laxmi+Narayan+Building%2C+Sion+Tronbay+Road%2C+Swastik+Park%2C+VN+Purav+Marg%2C+Chembur%2C+Mumbai%2C+Maharashtra+400071%2C+India!3m2!1d19.0543901!2d72.89076659999999!5e0!3m2!1sen!2s!4v1462906366908" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(21, 'AVK Ford', ' C/o Indian Cork Mills Premises Ground Floor, Saki Vihar Road Powai Mumbai, Mumbai, Maharashtra 400071, India', 400071, 66848888, 'ford', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120630.81439570125!2d72.82061854354497!3d19.12024475107482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c80f7ad67b33%3A0x25a25dfa74069294!2sC%2Fo+Indian+Cork+Mills+Premises+Ground+Floor%2C+Saki+Vihar+Road+Powai+Mumbai%2C+Mumbai%2C+Maharashtra+400071%2C+India!3m2!1d19.120258!2d72.890659!5e0!3m2!1sen!2s!4v1462906456382" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(22, 'R S MOTORS - Fiat Service Center', 'Krishna Compound, Near Hindustan Naka, M.G Road, Next To Kaustubh Hotel, Kandivali West, Mumbai, Maharashtra 400067, India', 400067, 28678246, 'fiat', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120567.3173286732!2d72.7605750449643!3d19.207049900194953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b6c87f63e1f9%3A0xe8bdba8fa2903192!2sfiat+service+center+mumbai!3m2!1d19.2070632!2d72.8306155!5e0!3m2!1sen!2s!4v1462906547771" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(23, 'Ritu Nissan Service Ccentre', 'JB Metal Industry Compound, Shaki Vihar Complex Road, Opp Savoy Hotel,Chandivali, Andheri East, Mumbai, Maharashtra 400072, India', 400072, 61944444, 'nissan', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120640.2459434997!2d72.81906914333413!3d19.10731875866166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c872e90d69c1%3A0xca79e24a32cfdcbb!2sJB+Metal+Industry+Compound%2C+Shaki+Vihar+Complex+Road%2C+Opp+Savoy+Hotel%2CChandivali%2C+Andheri+East%2C+Mumbai%2C+Maharashtra+400072%2C+India!3m2!1d19.107332!2d72.8891096!5e0!3m2!1sen!2s!4v1462906658889" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(24, 'ETCO NISSAN - Navi Mumbai', 'Kamdhenu Bulding, Ground Floor, Near Jui Nagar Railway Station,, Jui Nagar (E), Soin Panvel Highway,, Navi Mumbai, Maharashtra 400706, India', 400706, 65338800, 'nissan', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120680.37971753169!2d72.94930054243702!3d19.052220791031345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c3df86f337e9%3A0x3b0294d55f39cf07!2sKamdhenu+Bulding%2C+Ground+Floor%2C+Near+Jui+Nagar+Railway+Station%2C%2C+Jui+Nagar+(E)%2C+Soin+Panvel+Highway%2C%2C+Navi+Mumbai%2C+Maharashtra+400706%2C+India!3m2!1d19.052234!2d73.019341!5e0!3m2!1sen!2s!4v1462906760491" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(25, 'Ritu Nissan Andheri', ' Ritu Nissan, Sri Krishna Towers, Ground Floor Opposite, New Link Rd, Laxmi Industrial Estate, Suresh Nagar, Andheri West, Mumbai, Maharashtra 400053, India', 400053, 61444444, 'nissan', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120619.72232696568!2d72.7622685437929!3d19.135435742161988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b6230ac83769%3A0x8b0544d7639696ea!2sRitu+Nissan%2C+Sri+Krishna+Towers%2C+Ground+Floor+Opposite%2C+New+Link+Rd%2C+Laxmi+Industrial+Estate%2C+Suresh+Nagar%2C+Andheri+West%2C+Mumbai%2C+Maharashtra+400053%2C+India!3m2!1d19.135448999999998!2d72.832309!5e0!3m2!1sen!2s!4v1462906851954" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(26, 'Automark Motors Pvt. Ltd.', '15, Champion Seal Compound, Parsi Panchayat Road, Andheri East, Mumbai, Maharashtra 400069, India', 400069, 42726000, 'volkswagen', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120626.9568275811!2d72.78226204363116!3d19.125529147973943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c82b28e4d54d%3A0x8df75eefc3dfbb0e!2s15%2C+Champion+Seal+Compound%2C+Parsi+Panchayat+Road%2C+Andheri+East%2C+Mumbai%2C+Maharashtra+400069%2C+India!3m2!1d19.1255424!2d72.8523025!5e0!3m2!1sen!2s!4v1462907005098" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(27, 'Volkswagen Downtown Service Centre', '6, Rafi Ahmed Kidwai Marg, Gandhi Nagar, Sewri, Mumbai, Maharashtra 400031, India', 400031, 24193999, 'volkswagen', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120715.52883368332!2d72.78393904165131!3d19.003839719495193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7cf1d188f6ded%3A0x2e8ef8295f262a8e!2s6%2C+Rafi+Ahmed+Kidwai+Marg%2C+Gandhi+Nagar%2C+Sewri%2C+Mumbai%2C+Maharashtra+400031%2C+India!3m2!1d19.0038529!2d72.8539795!5e0!3m2!1sen!2s!4v1462907143020" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(28, 'VW Service Center Cotten Green Mumbai', 'Comed Rambhau Dev Ji Patil Rd, Gandhi Nagar, Sewri, Mumbai, Maharashtra 400015, India', 400015, 66544444, 'volkswagen', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120728.72053884137!2d72.78084214135642!3d18.985651330205627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7ce54b06be3b5%3A0x3722239c5b64857b!2sComed+Rambhau+Dev+Ji+Patil+Rd%2C+Gandhi+Nagar%2C+Sewri%2C+Mumbai%2C+Maharashtra+400015%2C+India!3m2!1d18.9856645!2d72.85088259999999!5e0!3m2!1sen!2s!4v1462907327482" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>'),
(29, 'Autobahn Enterprises', 'Unit No. 4, DE Mall, Off Veera Desai Road, Opp to Janaki Centre, Andheri West, Mumbai, Maharashtra 400053, India', 400053, 67528800, 'skoda', '<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d120622.519691671!2d72.76520734373037!3d19.131605744408777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7b625da031e09%3A0x2db3079f7dcb1b81!2sskoda+autobahn+mumbai!3m2!1d19.131619!2d72.83524779999999!5e0!3m2!1sen!2s!4v1462907607831" width="300" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `username`, `email`, `password`) VALUES
(1, 'asdf', 'asdf@gmail.com', 'asdf'),
(2, 'hahaha', 'abc@gmail.com', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scenter`
--
ALTER TABLE `scenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scenter`
--
ALTER TABLE `scenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
