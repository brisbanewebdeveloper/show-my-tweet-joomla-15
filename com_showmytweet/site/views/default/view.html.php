<?php
/**
 * @component   Show My Tweet
 * @copyright   Copyright (C) 2010 Hiro Nozu
 * @license     GNU/GPL
 * @website     http://showmytweet.forjoomla.net/
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');

require JPATH_COMPONENT.DS.'helper'.DS.'helper.php';

class showmytweetViewDefault extends Jview
{
	function display($tpl = null)
	{
		global $mainframe;


		// Get the page/component configuration

		$menus = &JSite::getMenu();
		$menu  = $menus->getActive();

		$comParams  = &$mainframe->getParams();
        $menuParams = new JParameter($menu->params);

		// because the application sets a default page title, we need to get it
		// right from the menu item itself
        $pageTitle = $comParams->get('page_title', JText::_('Twitter Timeline'));
        if (is_object($menu)) $pageTitle = $menuParams->get('page_title', $pageTitle);
        $comParams->set('page_title', $pageTitle);

		$document = &JFactory::getDocument();
		$document->setTitle($comParams->get('page_title'));
		$document->addStyleSheet('components/com_showmytweet/assets/css/showmytweet.css.php?w='.$menuParams->get('width', '600'));

        // JHTML::_('behavior.mootools');
        $this->menuParams = $menuParams;
        $this->title      = $pageTitle;

        $helper = &showMyTweetHelper::getInstance(array(
            'username' => $comParams->get('username'),
            'password' => $comParams->get('password'),
        ));
        $this->aStatus = $helper->getUserTimeline(array(
            'cache'      => ($comParams->get('cache', '1') == '1'),
            'cache_time' => $comParams->get('cache_time'),
        ));

        $this->max = (int) $menuParams->get('max', 99) - 1;
        if ($this->max < 1) $this->max = 99;

        parent::display($tpl);
	}
}
