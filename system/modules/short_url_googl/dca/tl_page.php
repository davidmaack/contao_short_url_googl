<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Improvements for Contao Open Source CMS
 * Copyright (C) 2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 * 
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Unglaub 2012, MEN AT WORK 2012
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    short_url_googl
 * @license    LGPL
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] .= ';{surl_googl_legend},surl_googl_apikey';

/**
 * Fields
 */

$GLOBALS['TL_DCA']['tl_page']['fields']['surl_googl_apikey'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_page']['surl_googl_apikey'],
	'inputType'		=> 'text',
    	'exclude'		=> true
);

?>