<?php

/* $Id: config.sample.inc.php 9472 2006-09-29 21:12:52Z  $ */
// vim: expandtab sw=4 ts=4 sts=4:

/**
 * phpMyAdmin sample configuration, you can use it as base for 
 * manual configuration. For easier setup you can use scripts/setup.php
 *
 * All directives are explained in Documentation.html and on phpMyAdmin 
 * wiki <http://wiki.cihar.com>.
 */

/* 
 * This is needed for cookie based authentication to encrypt password in 
 * cookie
 */
$cfg['blowfish_secret'] = '21fgdh4ds32g1a8'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/* 
 * Servers configuration
 */
$i = 0;

/* 
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysqli if your server has it */
$cfg['Servers'][$i]['extension'] = 'mysql';
/* User for advanced features */
$cfg['Servers'][$i]['controluser'] = '';
$cfg['Servers'][$i]['controlpass'] = '';
/* Advanced phpMyAdmin features */
$cfg['Servers'][$i]['pmadb'] = '';
$cfg['Servers'][$i]['bookmarktable'] = '';
$cfg['Servers'][$i]['relation'] = '';
$cfg['Servers'][$i]['table_info'] = '';
$cfg['Servers'][$i]['table_coords'] = '';
$cfg['Servers'][$i]['pdf_pages'] = '';
$cfg['Servers'][$i]['column_info'] = '';
$cfg['Servers'][$i]['history'] = '';

/* 
 * End of servers configuration
 */

/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

?>
