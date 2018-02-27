<?php
/**
 * Helper class for language flag module
 * 
 * @package     Techjoomla_Learning
 * @subpackage  Modules
 * @author      Sagar Gurnani <sagar_g@techjoomla.com>
 * @copyright   2018 TechJoomla.com
 * @license     GNU/GPL, see LICENSE.php
 * mod_languageflag is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$getArticles = ModLanguagFlagHelper::getArticles($params);

require JModuleHelper::getLayoutPath('mod_languageflag', $params->get('layout', 'default'));
