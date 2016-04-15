<?php
/**
 * Author: Peter Dragicevic [peter-91@hotmail.de]
 * Authors-Website: http://petschko.org/
 * Date: 15.04.2016
 * Time: 11:55
 * Update: -
 * Version: 0.0.1
 *
 * Notes: -
 */

// Define Constance
define('INCLUDE_DIR', BASE_DIR . DS . 'includes');
define('CLASS_DIR', INCLUDE_DIR . DS . 'classes');
define('CONTROLLER_DIR', INCLUDE_DIR . DS . 'controller');

// Include Base-Files
require_once(INCLUDE_DIR . DS . 'Config.php');
require_once(INCLUDE_DIR . DS . 'mbFunctions.php');
require_once(INCLUDE_DIR . DS . 'utf8.php');

// Include Classes
require_once(INCLUDE_DIR . DS . 'DB.php');
require_once(INCLUDE_DIR . DS . 'SQLError.php');

require_once(CLASS_DIR . DS . 'Cookie.php');
require_once(CLASS_DIR . DS . 'Email.php');

// Define Database Connection(s)
define('MAIN_DB', 'dbConnection');
new DB(
	MAIN_DB,
	Config::dbType . ':host=' . Config::dbHost . ';port=' . Config::dbPort . ';dbname=' . Config::dbWebsiteDb . ';Charset=' . Config::dbCharset,
	Config::dbUser,
	Config::dbPassword
);