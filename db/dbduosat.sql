-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2016 a las 18:01:54
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbduosat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atributos`
--

CREATE TABLE IF NOT EXISTS `atributos` (
`codigo_atributo` int(10) unsigned NOT NULL,
  `nombre_atributo` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `atributos`
--

INSERT INTO `atributos` (`codigo_atributo`, `nombre_atributo`, `estado`) VALUES
(1, 'Tuners', 1),
(2, 'Demodulador', 1),
(3, 'Decodificação de Vídeo', 1),
(4, 'Decodificação de áudio', 1),
(5, 'Áudio / Video / Data / Entrada/Saída ', 1),
(6, 'Fonte de Energia', 1),
(7, 'Especificações físicas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_chico`
--

CREATE TABLE IF NOT EXISTS `banner_chico` (
`codigo` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_banner` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banner_chico`
--

INSERT INTO `banner_chico` (`codigo`, `nombre`, `url_banner`) VALUES
(14, 'banner1', 'admin/img/productos/1460559290.png'),
(15, 'banner2', 'admin/img/productos/1460557549.png'),
(16, 'banner3', 'admin/img/productos/1460557562.png'),
(17, 'banner4', 'admin/img/productos/1460557585.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campos`
--

CREATE TABLE IF NOT EXISTS `campos` (
`codigo_campo` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `campos`
--

INSERT INTO `campos` (`codigo_campo`, `nombre`, `estado`) VALUES
(1, 'Processador', 1),
(2, 'Memória Ram', 1),
(3, 'Display', 1),
(4, 'Compatibilidade', 1),
(5, 'Cabo AV', 1),
(6, 'Entrada RJ45', 1),
(7, 'Entrada Serial', 1),
(8, 'Saída HDMI', 1),
(9, 'Saída S/PDIF ótica', 1),
(10, 'Porta USB', 1),
(11, 'Time shift/PVR', 1),
(12, 'Resolução', 1),
(13, 'EPG', 1),
(14, 'Sintonizador Duplo', 1),
(15, 'Alta definição 1080p', 1),
(16, 'Youtube', 1),
(17, 'Acesso FTP', 1),
(18, 'Cabo HDMI', 1),
(19, 'Suporte USB wi-fi', 1),
(20, 'Suporte 3D', 1),
(21, 'Suporte formato MKV', 1),
(22, 'Suporte DivX', 1),
(23, 'Smart Apps', 1),
(24, 'Aplicativo para celular', 1),
(25, 'IPTV', 1),
(26, 'Suporte formato ISO', 1),
(27, 'Wi-fi Interno', 1),
(28, 'Jogos 32 bits', 1),
(29, 'DLNA', 1),
(30, 'Suporte Adap. 3G USB', 1),
(32, 'Suporte Adap. 3G USB', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`codigo_categoria` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `url_icon` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`codigo_categoria`, `nombre`, `descripcion`, `url_icon`, `estado`) VALUES
(1, 'Receptores a Satelital', 'Receptores a Satelital', 'admin/img/icon/1459518087.png', 1),
(2, 'Receptores a Cabo', 'Receptores a Cabo', 'admin/img/icon/1459518123.png', 1),
(3, 'Media Players', 'Receptores a Cabo', 'admin/img/icon/1459518160.png', 1),
(5, 'Dongle', 'Dongle', 'admin/img/icon/1459534121.png', 1),
(6, 'Nuevo', 'nuevo', 'admin/img/icon/1459790879.png', 2),
(7, 'Grande', 'adsd', 'admin/img/icon/1459791194.png', 0),
(8, 'Grande', 'adsd', 'admin/img/icon/1459791279.png', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
`codigo_imagen` int(10) unsigned NOT NULL,
  `codigo_producto` int(10) unsigned DEFAULT NULL,
  `url_imagenes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`codigo_imagen`, `codigo_producto`, `url_imagenes`) VALUES
(1, 1, 'admin/img/productos/1460476315.png'),
(2, 2, 'admin/img/productos/1459520775.png'),
(3, 3, 'admin/img/productos/1459521684.png'),
(4, 4, 'admin/img/productos/1459522020.png'),
(5, 5, 'admin/img/productos/1460148566.png'),
(6, 6, 'admin/img/productos/1460148886.png'),
(7, 7, 'admin/img/productos/1460149083.png'),
(8, 8, 'admin/img/productos/1460481169.png'),
(9, 9, 'admin/img/productos/1460481185.png'),
(10, 13, 'admin/img/productos/1460482112.png'),
(11, 15, 'admin/img/vacio.jpg'),
(12, 16, 'admin/img/vacio.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_banner`
--

CREATE TABLE IF NOT EXISTS `imagenes_banner` (
`codigo_imagen` int(10) unsigned NOT NULL,
  `nombre_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_banner` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes_banner`
--

INSERT INTO `imagenes_banner` (`codigo_imagen`, `nombre_banner`, `url_banner`) VALUES
(1, 'Banner1', 'admin/img/img_banner/1459518317.png'),
(5, 'Banner3', 'admin/img/img_banner/1459790461.png'),
(7, 'Banner07', 'admin/img/img_banner/1459963360.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_23_174149_categorias', 1),
('2016_03_23_174204_sub_categorias', 1),
('2016_03_28_133007_atributos', 1),
('2016_03_28_134117_imagenes', 1),
('2016_03_28_134446_productos', 1),
('2016_03_28_140314_imagenes_banner', 1),
('2016_03_28_152015_imagenes_ref', 1),
('2016_03_30_023201_producto_atributo', 1),
('2016_04_01_182518_new_estado_categorias', 2),
('2016_04_06_132740_campos', 3),
('2016_04_06_133331_producto_campos', 3),
('2016_04_12_191324_banner_chico', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`codigo_producto` int(10) unsigned NOT NULL,
  `nombre_producto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `codigo_categoria` int(10) unsigned DEFAULT NULL,
  `codigo_atributo` int(10) unsigned DEFAULT NULL,
  `codigo_imagen` int(10) unsigned DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo_producto`, `nombre_producto`, `descripcion`, `codigo_categoria`, `codigo_atributo`, `codigo_imagen`, `estado`) VALUES
(1, 'Trend HD maxx', 'Chipset: 600MHz/570 MHz Dual Core\r\nMemória Flash: 16MB\r\nMemória RAM: 256MB DDR3', 2, NULL, NULL, 1),
(2, 'Trend HD max', 'Chipset: 600MHz/570 MHz Dual Core\r\nMemória Flash: 16MB\r\nMemória RAM: 256MB DDR3', 2, NULL, NULL, 0),
(3, 'xadasd', 'sadasdasdasdasd', NULL, NULL, NULL, 0),
(4, 'Trend-HD', 'Trend-HD', 2, NULL, NULL, 0),
(5, 'TROY HD', '', 1, NULL, NULL, 1),
(6, 'TROY HD', 'Chipset: ALI M3606 396MhZ\r\nMemória Flash: 8MB\r\nMemória RAM: 256mb', 1, NULL, NULL, 1),
(7, 'TROY HD', 'Chipset: ALI M3606 396MhZ\r\nMemória Flash: 8MB\r\nMemória RAM: 256mb', 1, NULL, NULL, 1),
(8, 'teste1', 'tes1', 5, NULL, NULL, 2),
(9, 'teste1', 'tes1', 5, NULL, NULL, 2),
(10, 'teste1', 'tes3', 5, NULL, NULL, 2),
(11, 'teste1', 'tes3', 5, NULL, NULL, 2),
(12, '', '', 1, NULL, NULL, 2),
(13, 'tituo2', 'tes', 1, NULL, NULL, 2),
(14, '', '', 1, NULL, NULL, 2),
(15, 'teste', 'teds', 1, NULL, NULL, 2),
(16, '', '', 1, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_atributo`
--

CREATE TABLE IF NOT EXISTS `producto_atributo` (
`codigo` int(10) unsigned NOT NULL,
  `codigo_atributo` int(10) unsigned DEFAULT NULL,
  `codigo_producto` int(10) unsigned DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto_atributo`
--

INSERT INTO `producto_atributo` (`codigo`, `codigo_atributo`, `codigo_producto`, `descripcion`) VALUES
(1, 1, 1, 'Número de Tuners:  2\r\nConectores de entrada e saída : F-Type, IEC 169-24, Fêmea\r\nFreqüência de entrada: 950MHZ ~ 2150MHZ\r\nNível de entrada de sinal:  -65dBm ~ -25dBm\r\nConectores:  75 Ω ¸ desbalanceado\r\nImpedância de entrada :  -Vertical: +13.5V (+14.5V em alta voltagem)\r\n                                              -Horizontal: +18V (+18.5V em alta voltagem)\r\n                                              -Corrente  Maxima:  500mA (Proteção  para curtos)\r\nTom de 22KHz : -Freqüência  22KHz-+4KHZ\r\n                             -Amplitude 0.6+-0.2Vpp\r\nControle de DiSEqC : Versões 1.0 & 1.1 compatível\r\nSeleção de Canal : sintetizador de freqüência PLL'),
(2, 2, 1, 'Tipo:  DVB-S, DVB-S2\r\nModulação:  QPSK, 8PSK\r\nFreqüência de entrada (SR) : 1~45MS/s, capacidade para SCPC e MCPC \r\nModo de FEC:\r\n-DVB-S:     Auto, 1/2, 2/3, 3/4, 5/6, 7/8\r\n-DVB-S2: - QPSK: Auto, 1/2, 3/5, 2/3, 4/5, 5/6, 8/9, 9/10\r\n                 - 8PSK: Auto, 3/5, 2/3, 3/4, 5/6, 8/9, 9/10'),
(3, 3, 1, 'Fluxo de transporte: MPEG-2 ISO/IEC 13818-2 MPEG-4 Part 2\r\nNível de perfil: MPEG-2 MP@ML, MPEG-2 MP@HL, MPEG-4 AVC/H.264 HP@L4.1\r\nTaxa de entrada:  15mbit/s Max\r\nFormato de Vídeo:  4:3, 16:9, Letter Box\r\nResolução de Vídeo 1080p, 1080i, 720p, 576p, 576i, 480p, 480i'),
(4, 4, 1, 'Decodificação de audio:  MPEG/MusiCam Layer I & II, AC3 Downmix\r\nModo de audio:  Mono / Dual / Joint Stereo / Stereo\r\nBitrates de audio: 32Kbits/s – 384Kbits/s\r\nFreqüência de amostragem:  32, 44.1, 48KHz'),
(5, 1, 2, 'sdfdfdsf'),
(6, 1, 3, 'asdasdasdasd'),
(7, 1, 4, 'Trend-HD'),
(8, 1, 5, 'Número de Tuners:  2\r\nConectores de entrada e saída : F-Type, IEC 169-24, Fêmea\r\nFreqüência de entrada: 950MHZ ~ 2150MHZ\r\nNível de entrada de sinal:  -65dBm ~ -25dBm\r\nConectores:  75 Ω ¸ desbalanceado\r\nImpedância de entrada :  -Vertical: +13.5V (+14.5V em alta voltagem)\r\n                                              -Horizontal: +18V (+18.5V em alta voltagem)\r\n                                              -Corrente  Maxima:  500mA (Proteção  para curtos)\r\nTom de 22KHz : -Freqüência  22KHz-+4KHZ\r\n                             -Amplitude 0.6+-0.2Vpp\r\nControle de DiSEqC : Versões 1.0 & 1.1 compatível\r\nSeleção de Canal : sintetizador de freqüência PLL'),
(9, 2, 5, 'Tipo:  DVB-S, DVB-S2\r\nModulação:  QPSK, 8PSK\r\nFreqüência de entrada (SR) : 1~45MS/s, capacidade para SCPC e MCPC \r\nModo de FEC:\r\n-DVB-S:     Auto, 1/2, 2/3, 3/4, 5/6, 7/8\r\n-DVB-S2: - QPSK: Auto, 1/2, 3/5, 2/3, 4/5, 5/6, 8/9, 9/10\r\n                 - 8PSK: Auto, 3/5, 2/3, 3/4, 5/6, 8/9, 9/10'),
(10, 3, 5, 'Fluxo de transporte: MPEG-2 ISO/IEC 13818-2 MPEG-4 Part 2\r\nNível de perfil: MPEG-2 MP@ML, MPEG-2 MP@HL MPEG-4 AVC/H.264 HP@L4.1\r\nTaxa de entrada:  15mbit/s Max\r\nFormato de Vídeo:  4:3, 16:9, Letter Box\r\nResolução de Vídeo 1080p, 1080i, 720p, 576p, 576i, 480p, 480i'),
(11, 4, 5, 'Decodificação de audio:  MPEG/MusiCam Layer I & II, AC3 Downmix\r\nModo de audio:  Mono / Dual / Joint Stereo / Stereo\r\nBitrates’ de audio: 32Kbits/s – 384Kbits/s\r\nFreqüência de amostragem:  32, 44.1, 48KHz'),
(12, 5, 5, 'AUDIO/VIDEO (CVBS, AUDIO L/R):  1x Phone Jack \r\nRS-232C: 1x Phone Jack\r\nHDMI: Saida digital de audio e video\r\nUSB (2.0 HOST) : 2 x\r\nEthernet:  1 x RJ45  port'),
(13, 6, 5, 'Tipo:  Adaptador Externo\r\nConsumo de Energia: DC 12V, 2A, 50/60Hz\r\nProteção:  Fusível interno separado\r\nA entrada deve ser protegido contra a '),
(14, 7, 5, 'Tamanho: 160 X 45 X 145 (mm, W X H X D)\r\nPeso (somente aparelho): 0.9 Kg.\r\nTemperatura de operação: 0℃ ~ 45℃\r\nTemperatura de armazenamento: -10℃ ~ 70℃'),
(15, 1, 6, 'Número de Tuners:  2\r\nConectores de entrada e saída : F-Type, IEC 169-24, Fêmea\r\nFreqüência de entrada: 950MHZ ~ 2150MHZ\r\nNível de entrada de sinal:  -65dBm ~ -25dBm\r\nConectores:  75 Ω ¸ desbalanceado\r\nImpedância de entrada :  -Vertical: +13.5V (+14.5V em alta voltagem)\r\n                                              -Horizontal: +18V (+18.5V em alta voltagem)\r\n                                              -Corrente  Maxima:  500mA (Proteção  para curtos)\r\nTom de 22KHz : -Freqüência  22KHz-+4KHZ\r\n                             -Amplitude 0.6+-0.2Vpp\r\nControle de DiSEqC : Versões 1.0 & 1.1 compatível\r\nSeleção de Canal : sintetizador de freqüência PLL'),
(16, 2, 6, 'Tipo:  DVB-S, DVB-S2\r\nModulação:  QPSK, 8PSK\r\nFreqüência de entrada (SR) : 1~45MS/s, capacidade para SCPC e MCPC \r\nModo de FEC:\r\n-DVB-S:     Auto, 1/2, 2/3, 3/4, 5/6, 7/8\r\n-DVB-S2: - QPSK: Auto, 1/2, 3/5, 2/3, 4/5, 5/6, 8/9, 9/10\r\n                 - 8PSK: Auto, 3/5, 2/3, 3/4, 5/6, 8/9, 9/10'),
(17, 3, 6, 'Fluxo de transporte: MPEG-2 ISO/IEC 13818-2 MPEG-4 Part 2\r\nNível de perfil: MPEG-2 MP@ML, MPEG-2 MP@HL MPEG-4 AVC/H.264 HP@L4.1\r\nTaxa de entrada:  15mbit/s Max\r\nFormato de Vídeo:  4:3, 16:9, Letter Box\r\nResolução de Vídeo 1080p, 1080i, 720p, 576p, 576i, 480p, 480i'),
(18, 4, 6, 'Decodificação de audio:  MPEG/MusiCam Layer I & II, AC3 Downmix\r\nModo de audio:  Mono / Dual / Joint Stereo / Stereo\r\nBitrates’ de audio: 32Kbits/s – 384Kbits/s\r\nFreqüência de amostragem:  32, 44.1, 48KHz'),
(19, 5, 6, 'AUDIO/VIDEO (CVBS, AUDIO L/R):  1x Phone Jack \r\nRS-232C: 1x Phone Jack\r\nHDMI: Saida digital de audio e video\r\nUSB (2.0 HOST) : 2 x\r\nEthernet:  1 x RJ45  port'),
(20, 6, 6, 'Tipo:  Adaptador Externo\r\nConsumo de Energia: DC 12V, 2A, 50/60Hz\r\nProteção:  Fusível interno separado\r\nA entrada deve ser protegido contra a luz'),
(21, 7, 6, 'Tamanho: 160 X 45 X 145 (mm, W X H X D)\r\nPeso (somente aparelho): 0.9 Kg.\r\nTemperatura de operação: 0℃ ~ 45℃\r\nTemperatura de armazenamento: -10℃ ~ 70℃'),
(22, 1, 7, 'Número de Tuners:  2\r\nConectores de entrada e saída : F-Type, IEC 169-24, Fêmea\r\nFreqüência de entrada: 950MHZ ~ 2150MHZ\r\nNível de entrada de sinal:  -65dBm ~ -25dBm\r\nConectores:  75 Ω ¸ desbalanceado\r\nImpedância de entrada :  -Vertical: +13.5V (+14.5V em alta voltagem)\r\n                                              -Horizontal: +18V (+18.5V em alta voltagem)\r\n                                              -Corrente  Maxima:  500mA (Proteção  para curtos)\r\nTom de 22KHz : -Freqüência  22KHz-+4KHZ\r\n                             -Amplitude 0.6+-0.2Vpp\r\nControle de DiSEqC : Versões 1.0 & 1.1 compatível\r\nSeleção de Canal : sintetizador de freqüência PLL'),
(23, 2, 7, 'Tipo:  DVB-S, DVB-S2\r\nModulação:  QPSK, 8PSK\r\nFreqüência de entrada (SR) : 1~45MS/s, capacidade para SCPC e MCPC \r\nModo de FEC:\r\n-DVB-S:     Auto, 1/2, 2/3, 3/4, 5/6, 7/8\r\n-DVB-S2: - QPSK: Auto, 1/2, 3/5, 2/3, 4/5, 5/6, 8/9, 9/10\r\n                 - 8PSK: Auto, 3/5, 2/3, 3/4, 5/6, 8/9, 9/10'),
(24, 3, 7, 'Fluxo de transporte: MPEG-2 ISO/IEC 13818-2 MPEG-4 Part 2\r\nNível de perfil: MPEG-2 MP@ML, MPEG-2 MP@HL MPEG-4 AVC/H.264 HP@L4.1\r\nTaxa de entrada:  15mbit/s Max\r\nFormato de Vídeo:  4:3, 16:9, Letter Box\r\nResolução de Vídeo 1080p, 1080i, 720p, 576p, 576i, 480p, 480i'),
(25, 4, 7, 'Decodificação de audio:  MPEG/MusiCam Layer I & II, AC3 Downmix\r\nModo de audio:  Mono / Dual / Joint Stereo / Stereo\r\nBitrates’ de audio: 32Kbits/s – 384Kbits/s\r\nFreqüência de amostragem:  32, 44.1, 48KHz'),
(26, 5, 7, 'AUDIO/VIDEO (CVBS, AUDIO L/R):  1x Phone Jack \r\nRS-232C: 1x Phone Jack\r\nHDMI: Saida digital de audio e video\r\nUSB (2.0 HOST) : 2 x\r\nEthernet:  1 x RJ45  port'),
(27, 6, 7, 'Tipo:  Adaptador Externo\r\nConsumo de Energia: DC 12V, 2A, 50/60Hz\r\nProteção:  Fusível interno separado\r\nA entrada deve ser protegido contra a luz'),
(28, 7, 7, 'Tamanho: 160 X 45 X 145 (mm, W X H X D)\r\nPeso (somente aparelho): 0.9 Kg.\r\nTemperatura de operação: 0℃ ~ 45℃\r\nTemperatura de armazenamento: -10℃ ~ 70℃'),
(29, 6, 13, 'Tipo:  Adaptador Externo\r\nConsumo de Energia: DC 12V, 2A, 50/60Hz\r\nProteção:  Fusível interno separado\r\nA entrada deve ser protegido contra a luz.'),
(30, 1, 15, 'ererererer'),
(31, 2, 16, 'asasdasdas'),
(32, 3, 16, '<zcxc<xc<zxc<zxc<zxcx'),
(33, 2, 1, '789797987qwe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_campos`
--

CREATE TABLE IF NOT EXISTS `producto_campos` (
`codigo_prod_campo` int(10) unsigned NOT NULL,
  `codigo_campo` int(10) unsigned DEFAULT NULL,
  `codigo_producto` int(10) unsigned DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `cheked` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto_campos`
--

INSERT INTO `producto_campos` (`codigo_prod_campo`, `codigo_campo`, `codigo_producto`, `descripcion`, `cheked`) VALUES
(5, 1, 1, 'Risc M3606 396MHz', 1),
(6, 2, 1, ' 256MB', 1),
(7, 3, 1, '7 Segment VFD', 1),
(8, 4, 1, ' Praticamente qualquer TV', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categorias`
--

CREATE TABLE IF NOT EXISTS `sub_categorias` (
`codigo_sub_categorias` int(10) unsigned NOT NULL,
  `nombre_sub_categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `codigo_categoria` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atributos`
--
ALTER TABLE `atributos`
 ADD PRIMARY KEY (`codigo_atributo`);

--
-- Indices de la tabla `banner_chico`
--
ALTER TABLE `banner_chico`
 ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `campos`
--
ALTER TABLE `campos`
 ADD PRIMARY KEY (`codigo_campo`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`codigo_categoria`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
 ADD PRIMARY KEY (`codigo_imagen`), ADD KEY `productos_imagenes_fk` (`codigo_producto`);

--
-- Indices de la tabla `imagenes_banner`
--
ALTER TABLE `imagenes_banner`
 ADD PRIMARY KEY (`codigo_imagen`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`codigo_producto`), ADD KEY `productos_codigo_categoria_foreign` (`codigo_categoria`), ADD KEY `productos_codigo_atributo_foreign` (`codigo_atributo`), ADD KEY `productos_codigo_imagen_foreign` (`codigo_imagen`);

--
-- Indices de la tabla `producto_atributo`
--
ALTER TABLE `producto_atributo`
 ADD PRIMARY KEY (`codigo`), ADD KEY `producto_atributo_codigo_atributo_foreign` (`codigo_atributo`), ADD KEY `producto_atributo_codigo_producto_foreign` (`codigo_producto`);

--
-- Indices de la tabla `producto_campos`
--
ALTER TABLE `producto_campos`
 ADD PRIMARY KEY (`codigo_prod_campo`), ADD KEY `producto_campos_codigo_campo_foreign` (`codigo_campo`), ADD KEY `producto_campos_codigo_producto_foreign` (`codigo_producto`);

--
-- Indices de la tabla `sub_categorias`
--
ALTER TABLE `sub_categorias`
 ADD PRIMARY KEY (`codigo_sub_categorias`), ADD KEY `sub_categorias_codigo_categoria_foreign` (`codigo_categoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atributos`
--
ALTER TABLE `atributos`
MODIFY `codigo_atributo` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `banner_chico`
--
ALTER TABLE `banner_chico`
MODIFY `codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `campos`
--
ALTER TABLE `campos`
MODIFY `codigo_campo` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `codigo_categoria` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
MODIFY `codigo_imagen` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `imagenes_banner`
--
ALTER TABLE `imagenes_banner`
MODIFY `codigo_imagen` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `codigo_producto` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `producto_atributo`
--
ALTER TABLE `producto_atributo`
MODIFY `codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `producto_campos`
--
ALTER TABLE `producto_campos`
MODIFY `codigo_prod_campo` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `sub_categorias`
--
ALTER TABLE `sub_categorias`
MODIFY `codigo_sub_categorias` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
ADD CONSTRAINT `productos_imagenes_fk` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
ADD CONSTRAINT `productos_codigo_atributo_foreign` FOREIGN KEY (`codigo_atributo`) REFERENCES `atributos` (`codigo_atributo`),
ADD CONSTRAINT `productos_codigo_categoria_foreign` FOREIGN KEY (`codigo_categoria`) REFERENCES `categorias` (`codigo_categoria`),
ADD CONSTRAINT `productos_codigo_imagen_foreign` FOREIGN KEY (`codigo_imagen`) REFERENCES `imagenes` (`codigo_imagen`);

--
-- Filtros para la tabla `producto_atributo`
--
ALTER TABLE `producto_atributo`
ADD CONSTRAINT `producto_atributo_codigo_atributo_foreign` FOREIGN KEY (`codigo_atributo`) REFERENCES `atributos` (`codigo_atributo`),
ADD CONSTRAINT `producto_atributo_codigo_producto_foreign` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_producto`);

--
-- Filtros para la tabla `producto_campos`
--
ALTER TABLE `producto_campos`
ADD CONSTRAINT `producto_campos_codigo_campo_foreign` FOREIGN KEY (`codigo_campo`) REFERENCES `campos` (`codigo_campo`),
ADD CONSTRAINT `producto_campos_codigo_producto_foreign` FOREIGN KEY (`codigo_producto`) REFERENCES `productos` (`codigo_producto`);

--
-- Filtros para la tabla `sub_categorias`
--
ALTER TABLE `sub_categorias`
ADD CONSTRAINT `sub_categorias_codigo_categoria_foreign` FOREIGN KEY (`codigo_categoria`) REFERENCES `categorias` (`codigo_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
