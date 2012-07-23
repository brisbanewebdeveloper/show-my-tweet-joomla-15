<?php
/**
 * @component   Show My Tweet
 * @copyright   Copyright (C) 2010 Hiro Nozu
 * @license     GNU/GPL
 * @website     http://showmytweet.forjoomla.net/
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

require 'twitter.lib.php';

Class showMyTweetHelper {

    private $username;
    private $password;

    function __construct($aOptions) {
        $this->username = $aOptions['username'];
        $this->password = $aOptions['password'];
    }
    function &getInstance($aOptions) {
        static $instance = null;
        if (is_null($instance)) $instance = new showMyTweetHelper($aOptions);
        return $instance;
    }
    function getUserTimeline($aOptions) {

        jimport('joomla.cache.cache');

        $conf = &JFactory::getConfig();

        $options_cache = array(
            'defaultgroup' => 'showmytweet',
            'cachebase'    => $conf->getValue('config.cache_path'),
            'lifetime'     => $aOptions['cache_time'] * 60, // minutes to seconds
            'language'     => $conf->getValue('config.language'),
            'storage'      => 'file',
        );

        $cache = &JCache::getInstance('callback', $options_cache);
        // if ($aOptions['cache'] == false) $cache->clean();
        $cache->setCaching($aOptions['cache']);

        $twitter = new Twitter($this->username, $this->password);

        $data = new SimpleXMLElement($cache->get(array($twitter, 'getUserTimeline'), array()));

        return $data->status;
    }
}
