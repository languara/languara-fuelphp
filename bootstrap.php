<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

Autoloader::add_core_namespace('Languara');
Autoloader::add_classes(array(
	'Languara\\Wrapper\\' => __DIR__.'/Wrapper/Languara.php',
));