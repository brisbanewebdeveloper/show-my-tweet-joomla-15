<?php
/**
 * @component   Show My Tweet
 * @copyright   Copyright (C) 2010 Hiro Nozu
 * @license     GNU/GPL
 * @website     http://showmytweet.forjoomla.net/
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class showmytweetController extends JController
{
    function __construct()
    {
        parent::__construct();
        // JRequest::setVar('view', 'default');
    }
    function display() {
        parent::display();
    }
}
