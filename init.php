<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        init.php
 * Project:     DHL API
 *
 * @author      Al-Fallouji Bashar
 * @version     0.1
 *
 * Initialize API (autloader and configuration file)
 * Simply include this file in order to use the DHL API
 */
define('DHL_API_DIR', __DIR__ . '/');
require_once(DHL_API_DIR . 'vendor/autoload.php');

// Load adequate configuration file based on the APPLICATION_ENVIRONMENT 
if ($applicationEnvironment = getenv('APPLICATION_ENVIRONMENT'))
{
    $configFilename = 'config-' . $applicationEnvironment . '.php';
}
else
{
    $configFilename = 'config.php';
}

//Allow to place the config file anywhere in project
if (! defined('DHL_CONF_API_DIR')) {
    define('DHL_CONF_API_DIR', __DIR__ . '/');
}

$config = require(DHL_CONF_API_DIR . 'conf/' . $configFilename);
