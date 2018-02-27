<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_login
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Helper for mod_login
 *
 * @since  1.5
 */

class ModLanguagFlagHelper
{
	/**
	 * Retrieves the hello message
	 *
	 * @param   array  $params  An object containing the module parameters
	 *
	 * @access public
	 * 
	 * @return array
	 */
	public static function getArticles($params)
	{
		$arrCatId = $params->get('catid');
		$intLimit = $params->get('count');
		$strCatId = implode(',', $arrCatId);

		// Get a db connection.
		$db = JFactory::getDbo();

		// Create a new query object.
		$query = $db->getQuery(true);

		// Select all records from the user profile table where key begins with "custom.".
		// Order it by the ordering field.
		$query->select($db->quoteName(array('title', 'language')))
				->from($db->quoteName('#__content'));

		if (!is_null($strCatId) === 1 )
		{
			$query->where($db->quoteName('catid') . ' IN (' . $strCatId . ')');
		}

		$query->order('ordering DESC')
				->setLimit($intLimit);

		// Reset the query using our newly populated query object.
		$db->setQuery($query);

		// Load the results as a list of stdClass objects (see later for more options on retrieving data).
		return $results = $db->loadObjectList();
	}
}
