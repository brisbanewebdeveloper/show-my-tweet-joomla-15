<?php
/**
 * @component   Show My Tweet
 * @copyright   Copyright (C) 2010 Hiro Nozu
 * @license     GNU/GPL
 * @website     http://showmytweet.forjoomla.net/
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

// Require the base controller
require_once (JPATH_COMPONENT.DS.'controller.php');

// Create the controller
$controller = new showmytweetController();

// Perform the Request task
$controller->execute(JRequest::getVar('task', null, 'default', 'cmd'));
$controller->redirect();
