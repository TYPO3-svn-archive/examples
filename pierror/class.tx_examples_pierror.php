<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Documentation Team <documentation@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Controller for the backend module
 *
 * @author		Francois Suter (Cobweb) <typo3@cobweb.ch>
 * @package		TYPO3
 * @subpackage	tx_examples
 *
 * $Id: DefaultController.php 67714 2012-11-08 17:40:43Z francois $
 */
class tx_examples_pierror extends \TYPO3\CMS\Frontend\Plugin\AbstractPlugin {
	var $prefixId      = 'tx_examples_pierror';		// Same as class name
	var $scriptRelPath = 'pierror/class.tx_examples_pierror.php';	// Path to this script relative to the extension dir.
	var $extKey        = 'examples';	// The extension key.
	var $pi_checkCHash = true;

	/**
	 * This is the main method of the plugin. It returns the content to display
	 *
	 * @param    string        $content: The plugin content
	 * @param    array        $conf: The plugin configuration
	 * @throws Exception
	 * @return    string        The content that is displayed on the website
	 */
	function main($content, $conf) {
		throw new \Exception('This is a test Exception', 1360332631);
	}
}
?>