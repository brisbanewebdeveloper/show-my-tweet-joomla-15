<?php
/**
 * @component   Show My Tweet
 * @copyright   Copyright (C) 2010 Hiro Nozu
 * @license     GNU/GPL
 * @website     http://showmytweet.forjoomla.net/
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

require JPATH_SITE.DS.'components'.DS.'com_showmytweet'.DS.'helper'.DS.'helper.php';

$document = &JFactory::getDocument();
$document->addStyleSheet('modules/mod_showmytweet/showmytweet.css.php?w='.$params->get('width', '600'));

$helper = &showMyTweetHelper::getInstance(array(
    'username' => $params->get('username'),
    'password' => $params->get('password'),
));
$aStatus = $helper->getUserTimeline(array(
    'cache'      => ($params->get('cache', '1') == '1'),
    'cache_time' => $params->get('cache_time'),
));

$max = (int) $params->get('max', 99) - 1;
if ($max < 1) $max = 99;

require_once(JModuleHelper::getLayoutPath('mod_showmytweet'));
