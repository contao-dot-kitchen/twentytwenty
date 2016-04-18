<?php

/**
 * Content elements
 **/
array_insert($GLOBALS['TL_CTE']['media'], count($GLOBALS['TL_CTE']['media']), array
(
	'twentytwenty'  => 'ContentTwentyTwenty'
));

/**
 * Copyright information
 */
$GLOBALS['TL_HEAD']['PIXELSPREADDE'] = '<!--
    This Contao OpenSource CMS uses modules from pixelSpread.de
    Copyright (c)2012 - ' . date("Y") . ' by Sascha Brandhoff :: Extensions of pixelSpread.de are copyright of their respective owners
    Visit our website at http://www.pixelSpread.de for more information
//-->';