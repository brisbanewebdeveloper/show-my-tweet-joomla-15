<?php

header('Content-type: text/css');

if (!isset($_GET['w'])) $_GET['w'] = '600';

?>
.mod-showmytweet-container {
    font-family: Arial, Helvetica, sans-serif;
    color: #444;
    width: <?php echo $_GET['w']; ?>px;
    /* margin: 0 auto; */
}
    .mod-showmytweet-container .status {
        margin: 1em 0;
        padding-bottom: 1em;
        border-bottom: solid 1px #DEDEDE;
        width: 100%;
        overflow: hidden;
    }
        .mod-showmytweet-container .image {
            float: left;
            display: none;
        }
        .mod-showmytweet-container .status-0 .image {
            display: block;
            margin: 0 14px;
            width: 10%;
        }
            .mod-showmytweet-container .image img {
                border: 1px solid #dedede;
                width: 50px;
                height: 50px;
            }
        .mod-showmytweet-container .tweet {
            float: left;
            width: 95%;
        }
        .mod-showmytweet-container .status-0 .tweet {
            width: 85%;
        }
            .mod-showmytweet-container p {
                line-height: 1.3em;
                font-size: 12px;
                margin-bottom: 4px;
                text-align: left;
            }
            .mod-showmytweet-container .status-0 p {
                font-size: 24px;
            }
            .mod-showmytweet-container a {
                /* color: #f00; */
            }
            .mod-showmytweet-container a.screen-name,
            .mod-showmytweet-container span {
                display: none;
            }
            .mod-showmytweet-container .status-0 a.screen-name,
            .mod-showmytweet-container .status-0 span {
                display: inline;
            }
            .mod-showmytweet-container .status-0 .posted_at,
            .mod-showmytweet-container .posted_at {
                font-size: 11px;
                color: #777;
            }
