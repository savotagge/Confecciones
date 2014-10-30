-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2014 a las 22:22:50
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `CONFECCIONES`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ARTICULOS`
--

CREATE TABLE IF NOT EXISTS `ARTICULOS` (
  `COD_ARTICULO` int(11) NOT NULL AUTO_INCREMENT,
  `COLOR_ARTICULO` varchar(45) DEFAULT NULL,
  `TALLA_ARTICULO` varchar(45) DEFAULT NULL,
  `CANTIDAD_ARTICULO` varchar(45) DEFAULT NULL,
  `COD_PROVEEDOR` int(11) DEFAULT NULL,
  PRIMARY KEY (`COD_ARTICULO`),
  KEY `COD_PROVEEDOR_idx` (`COD_PROVEEDOR`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ARTICULOS`
--

INSERT INTO `ARTICULOS` (`COD_ARTICULO`, `COLOR_ARTICULO`, `TALLA_ARTICULO`, `CANTIDAD_ARTICULO`, `COD_PROVEEDOR`) VALUES
(1, 'rojo', 's', '100', 1),
(2, 'verde', 'l', '100', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CLIENTES`
--

CREATE TABLE IF NOT EXISTS `CLIENTES` (
  `RUT_CLIENTE` varchar(45) NOT NULL,
  `NOMBRE_CLIENTE` varchar(45) DEFAULT NULL,
  `DIRECCION_CLIENTE` varchar(45) DEFAULT NULL,
  `FECHA_ALTA` date DEFAULT NULL,
  `FONO_CLIENTE` varchar(45) DEFAULT NULL,
  `MAIL_CLIENTE` varchar(45) DEFAULT NULL,
  `FIABILIDAD_CLIENTE` varchar(45) DEFAULT NULL,
  `ACTIVO` int(11) DEFAULT NULL,
  PRIMARY KEY (`RUT_CLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `CLIENTES`
--

INSERT INTO `CLIENTES` (`RUT_CLIENTE`, `NOMBRE_CLIENTE`, `DIRECCION_CLIENTE`, `FECHA_ALTA`, `FONO_CLIENTE`, `MAIL_CLIENTE`, `FIABILIDAD_CLIENTE`, `ACTIVO`) VALUES
('12.345.678-9', 'Valery', 'Villa', '2014-10-25', '09 12345678', 'algo@salgo.com', 'Pendiente', 0),
('16.859.299-K', 'Alejandra', 'V.P. Hurtado', '2014-10-28', '09 79224907', 'ella@gmail.com', 'Pendiente', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DETALLE_PEDIDO`
--

CREATE TABLE IF NOT EXISTS `DETALLE_PEDIDO` (
  `COD_DETALLE_PEDIDO` int(11) NOT NULL AUTO_INCREMENT,
  `COD_PEDIDO` int(11) DEFAULT NULL,
  `COD_ARTICULO` int(11) DEFAULT NULL,
  `CANTIDAD_DETALLE_PEDIDO` varchar(45) DEFAULT NULL,
  `VALOR_UNITARIO` varchar(45) DEFAULT NULL,
  `SUB_TOTAL` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`COD_DETALLE_PEDIDO`),
  KEY `COD_ARTICULO_idx` (`COD_ARTICULO`),
  KEY `COD_PEDIDO_idx` (`COD_PEDIDO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `DETALLE_PEDIDO`
--

INSERT INTO `DETALLE_PEDIDO` (`COD_DETALLE_PEDIDO`, `COD_PEDIDO`, `COD_ARTICULO`, `CANTIDAD_DETALLE_PEDIDO`, `VALOR_UNITARIO`, `SUB_TOTAL`) VALUES
(1, 2, 1, '10', '50', '500'),
(2, 2, 2, '10', '50', '500'),
(3, 3, 2, '3', '10', '30'),
(4, 3, 1, '4', '20', '80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LOG`
--

CREATE TABLE IF NOT EXISTS `LOG` (
  `COD_LOG` int(11) NOT NULL AUTO_INCREMENT,
  `COD_SOLICITUD_VENTA` int(11) DEFAULT NULL,
  `DETALLE_LOG` varchar(200) DEFAULT NULL,
  `FECHA_LOG` date DEFAULT NULL,
  `RESPONSABLE_LOG` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`COD_LOG`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PEDIDOS`
--

CREATE TABLE IF NOT EXISTS `PEDIDOS` (
  `COD_PEDIDO` int(11) NOT NULL AUTO_INCREMENT,
  `RUT_CLIENTE` varchar(45) DEFAULT NULL,
  `FECHA_TOPE` date DEFAULT NULL,
  `FECHA_PEDIDO` date DEFAULT NULL,
  `ESTADO_PEDIDO` varchar(45) DEFAULT NULL,
  `CONDICIONES_PAGO` varchar(45) DEFAULT NULL,
  `COD_DETALLE_PEDIDO` int(11) DEFAULT NULL,
  `VALOR_TOTAL_PEDIDO` int(11) DEFAULT NULL,
  `OBSERVACIONES` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`COD_PEDIDO`),
  KEY `RUT_CLIENTE_idx` (`RUT_CLIENTE`),
  KEY `COD_DETALLE_PEDIDO_idx` (`COD_DETALLE_PEDIDO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `PEDIDOS`
--

INSERT INTO `PEDIDOS` (`COD_PEDIDO`, `RUT_CLIENTE`, `FECHA_TOPE`, `FECHA_PEDIDO`, `ESTADO_PEDIDO`, `CONDICIONES_PAGO`, `COD_DETALLE_PEDIDO`, `VALOR_TOTAL_PEDIDO`, `OBSERVACIONES`) VALUES
(2, '12.345.678-9', '2014-10-01', '2014-10-08', 'Por Facturar', 'efectivo', 1, 1000, 'o'),
(3, '16.859.299-k', '2014-10-13', '2014-10-16', 'Por Facturar', 'efectivo', 2, 200, 'f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROVEEDORES`
--

CREATE TABLE IF NOT EXISTS `PROVEEDORES` (
  `COD_PROVEEDOR` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE_PROVEEDOR` varchar(45) DEFAULT NULL,
  `DIRECCION_PROVEEDOR` varchar(45) DEFAULT NULL,
  `FONO_PROVEEDOR` varchar(45) DEFAULT NULL,
  `CORREO_PROVEEDOR` varchar(45) DEFAULT NULL,
  `PERSONA_CONTACTO` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`COD_PROVEEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SOLICITUDES_VENTAS`
--

CREATE TABLE IF NOT EXISTS `SOLICITUDES_VENTAS` (
  `COD_SOLICITUD_VENTA` int(11) NOT NULL AUTO_INCREMENT,
  `COD_PEDIDO` int(11) DEFAULT NULL,
  `FECHA_GESTION` date DEFAULT NULL,
  `ESTADO_GESTION` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`COD_SOLICITUD_VENTA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
