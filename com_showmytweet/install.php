<?php

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

function com_install() {

    $db = &JFactory::getDBO();

    $db->setQuery('SELECT id FROM #__ipnsub LIMIT 1');
    if (is_null($db->loadResult())) {
        $db->setQuery("
            INSERT INTO `#__ipnsub`
            (
              `id`,
              `ipn_id`,
              `name`,
              `ordering`,
              `instructions`,
              `created_on`,
              `published`,
              `currency`
            )
            VALUES
            ('', 1234567, '1 Month Subscription', 0, 'Bla Bla', CURRENT_TIMESTAMP, 0, ''),
            ('', 1234567, '6 Months Subscription', 0, 'Bla Bla', CURRENT_TIMESTAMP, 0, '');
        ");
        $db->query();
    }

    return true;
}

?>
