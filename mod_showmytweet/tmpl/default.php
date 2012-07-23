<?php
/**
 * @component   Show My Tweet
 * @copyright   Copyright (C) 2010 Hiro Nozu
 * @license     GNU/GPL
 * @website     http://showmytweet.forjoomla.net/
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

?>
<div class="mod-showmytweet-container">

<?php

if (!is_null($aStatus)) {

    $index = 0;

    foreach ($aStatus as $status) {

        if ($max < $index) break;

        echo '<div class="status status-'.$index.'">';

        foreach($status->user as $user) {

            $profileLink = '<a target="_blank" class="screen-name" href="http://www.twitter.com/'.$user->screen_name.'">';

            echo '<div class="image">'.$profileLink.'<img src="'.$user->profile_image_url.'"></a></div>';

            echo '<div class="tweet">';
            echo '<p>';
            echo $profileLink.$user->name.'</a><span>: </span>';
            break; // Just in case
        }
        $text = preg_replace(
            array(
                '/(https?:\/\/[^\s]+)/',
                '/@([^\s]+)/',
                '/#([^\s]+)/',
            ),
            array(
                '<a target="_blank" href="$1">$1</a>',
                '<a target="_blank" href="http://www.twitter.com/$1">@$1</a>',
                '<a target="_blank" href="http://twitter.com/search?q=%23$1">#$1</a>',
            ),
            $status->text
        );
        echo $text;
        echo '</p>';

        date_default_timezone_set('UTC'); // Just in case
        $created_at = JHTML::_('date', $status->created_at, '%Y-%m-%d %H:%M:%S');
        // $created_at = JHTML::_('date', gmdate('Y/m/d H:i:s', strtotime($status->created_at)), '%Y-%m-%d %H:%M:%S');
        // var_dump(strtotime('Sat Jun 12 16:03:06 +0000 2010'));
        // var_dump(strtotime('Sat Jun 12 16:03:06 +0000 2010'));
        // var_dump(gmdate('Y/m/d H:i:s', 1276358586));
        // var_dump(date('Y/m/d H:i:s', 1276358586));
        // var_dump(strftime('%Y/%m/%d %H:%M:%S', 1276358586));
        // var_dump(strftime('%Y/%m/%d %H:%M:%S', strtotime('Sat Jun 12 16:03:06 +0000 2010')));
        // $created_at = $status->created_at;
        echo '<p class="posted_at"><strong>Posted at:</strong> '.$created_at.'</p>';

        echo '</div>';

        echo '</div>';

        $index++;
    }
}
?>
</div>
