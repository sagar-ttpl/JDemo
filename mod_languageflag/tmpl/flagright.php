<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_languageflag
 *
 * @copyright   Copyright (C) 2018 TechJoomla. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

// No direct access
defined('_JEXEC') or die;

if ( !empty($getArticles) )
{
	$wrapper = '<ul>';

	foreach ($getArticles as $article)
	{
		if ( $article->language == '*' )
		{
			$article->language = 'en_gb';
		}

		$article->language = str_replace('-', '_', $article->language);
		echo '<li>' . $article->title . ' <img src="media/mod_languages/images/' . strtolower($article->language) . '.gif" alt="en" /></li>';
	}

	$wrapper = '</ul>';
}
