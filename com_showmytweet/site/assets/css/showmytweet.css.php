<?php

header('Content-type: text/css');

if (!isset($_GET['w'])) $_GET['w'] = '600';

?>
#showmytweet-container {
    font-family: Arial, Helvetica, sans-serif;
    color: #444;
    width: <?php echo $_GET['w']; ?>px;
    /* margin: 0 auto; */
}
    #showmytweet-container .status {
        margin: 1em 0;
        padding-bottom: 1em;
        border-bottom: solid 1px #DEDEDE;
        width: 100%;
        overflow: hidden;
    }
        #showmytweet-container .image {
            float: left;
            display: none;
        }
        #showmytweet-container .status-0 .image {
            display: block;
            margin: 0 14px;
            width: 10%;
        }
            #showmytweet-container .image img {
                border: 1px solid #dedede;
                width: 50px;
                height: 50px;
            }
        #showmytweet-container .tweet {
            float: left;
            width: 95%;
        }
        #showmytweet-container .status-0 .tweet {
            width: 85%;
        }
            #showmytweet-container p {
                line-height: 1.3em;
                font-size: 12px;
                margin-bottom: 4px;
                text-align: left;
            }
            #showmytweet-container .status-0 p {
                font-size: 24px;
            }
            #showmytweet-container a {
                /* color: #f00; */
            }
            #showmytweet-container a.screen-name,
            #showmytweet-container span {
                display: none;
            }
            #showmytweet-container .status-0 a.screen-name,
            #showmytweet-container .status-0 span {
                display: inline;
            }
            #showmytweet-container .status-0 .posted_at,
            #showmytweet-container .posted_at {
                font-size: 11px;
                color: #777;
            }
