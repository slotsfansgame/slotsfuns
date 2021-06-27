<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f0ee7a153d806e29c48e709512dd5c4
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP_Rocket\\' => 10,
            'WPMedia\\Cloudflare\\' => 19,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP_Rocket\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
        'WPMedia\\Cloudflare\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/Addon/Cloudflare',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Imagify_Partner' => __DIR__ . '/../..' . '/inc/vendors/classes/class-imagify-partner.php',
        'Minify_CSS_UriRewriter' => __DIR__ . '/../..' . '/inc/vendors/classes/class-minify-css-urirewriter.php',
        'WP_Rocket\\Abstract_Render' => __DIR__ . '/../..' . '/inc/classes/class-abstract-render.php',
        'WP_Rocket\\Admin\\Abstract_Options' => __DIR__ . '/../..' . '/inc/classes/admin/class-abstract-options.php',
        'WP_Rocket\\Admin\\Database\\Optimization' => __DIR__ . '/../..' . '/inc/classes/admin/Database/class-optimization.php',
        'WP_Rocket\\Admin\\Database\\Optimization_Process' => __DIR__ . '/../..' . '/inc/classes/admin/Database/class-optimization-process.php',
        'WP_Rocket\\Admin\\Deactivation\\Render' => __DIR__ . '/../..' . '/inc/classes/admin/deactivation/class-render.php',
        'WP_Rocket\\Admin\\Logs' => __DIR__ . '/../..' . '/inc/classes/admin/class-logs.php',
        'WP_Rocket\\Admin\\Options' => __DIR__ . '/../..' . '/inc/classes/admin/class-options.php',
        'WP_Rocket\\Admin\\Options_Data' => __DIR__ . '/../..' . '/inc/classes/admin/class-options-data.php',
        'WP_Rocket\\Buffer\\Abstract_Buffer' => __DIR__ . '/../..' . '/inc/classes/Buffer/class-abstract-buffer.php',
        'WP_Rocket\\Buffer\\Cache' => __DIR__ . '/../..' . '/inc/classes/Buffer/class-cache.php',
        'WP_Rocket\\Buffer\\Config' => __DIR__ . '/../..' . '/inc/classes/Buffer/class-config.php',
        'WP_Rocket\\Buffer\\Optimization' => __DIR__ . '/../..' . '/inc/classes/Buffer/class-optimization.php',
        'WP_Rocket\\Buffer\\Tests' => __DIR__ . '/../..' . '/inc/classes/Buffer/class-tests.php',
        'WP_Rocket\\Busting\\Abstract_Busting' => __DIR__ . '/../..' . '/inc/classes/busting/class-abstract-busting.php',
        'WP_Rocket\\Busting\\Facebook_Pickles' => __DIR__ . '/../..' . '/inc/classes/busting/class-facebook-pickles.php',
        'WP_Rocket\\Busting\\Facebook_SDK' => __DIR__ . '/../..' . '/inc/classes/busting/class-facebook-sdk.php',
        'WP_Rocket\\Cache\\Expired_Cache_Purge' => __DIR__ . '/../..' . '/inc/classes/Cache/class-expired-cache-purge.php',
        'WP_Rocket\\Event_Management\\Event_Manager' => __DIR__ . '/../..' . '/inc/classes/event-management/class-event-manager.php',
        'WP_Rocket\\Event_Management\\Event_Manager_Aware_Subscriber_Interface' => __DIR__ . '/../..' . '/inc/classes/event-management/event-manager-aware-subscriber-interface.php',
        'WP_Rocket\\Event_Management\\Subscriber_Interface' => __DIR__ . '/../..' . '/inc/classes/event-management/subscriber-interface.php',
        'WP_Rocket\\Interfaces\\Render_Interface' => __DIR__ . '/../..' . '/inc/classes/interfaces/class-render-interface.php',
        'WP_Rocket\\Logger\\HTML_Formatter' => __DIR__ . '/../..' . '/inc/classes/logger/class-html-formatter.php',
        'WP_Rocket\\Logger\\Logger' => __DIR__ . '/../..' . '/inc/classes/logger/class-logger.php',
        'WP_Rocket\\Logger\\Stream_Handler' => __DIR__ . '/../..' . '/inc/classes/logger/class-stream-handler.php',
        'WP_Rocket\\ServiceProvider\\Common_Subscribers' => __DIR__ . '/../..' . '/inc/classes/ServiceProvider/class-common-subscribers.php',
        'WP_Rocket\\ServiceProvider\\Database' => __DIR__ . '/../..' . '/inc/classes/ServiceProvider/class-database.php',
        'WP_Rocket\\ServiceProvider\\Options' => __DIR__ . '/../..' . '/inc/classes/ServiceProvider/class-options.php',
        'WP_Rocket\\ServiceProvider\\Updater_Subscribers' => __DIR__ . '/../..' . '/inc/classes/ServiceProvider/class-updater-subscribers.php',
        'WP_Rocket\\Subscriber\\Admin\\Database\\Optimization_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/admin/Database/class-optimization-subscriber.php',
        'WP_Rocket\\Subscriber\\Cache\\Expired_Cache_Purge_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Cache/class-expired-cache-purge-subscriber.php',
        'WP_Rocket\\Subscriber\\Media\\Webp_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Media/class-webp-subscriber.php',
        'WP_Rocket\\Subscriber\\Optimization\\Buffer_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Optimization/class-buffer-subscriber.php',
        'WP_Rocket\\Subscriber\\Optimization\\Dequeue_JQuery_Migrate_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Optimization/class-dequeue-jquery-migrate-subscriber.php',
        'WP_Rocket\\Subscriber\\Plugin\\Information_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Plugin/class-information-subscriber.php',
        'WP_Rocket\\Subscriber\\Plugin\\Updater_Api_Common_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Plugin/class-updater-api-common-subscriber.php',
        'WP_Rocket\\Subscriber\\Plugin\\Updater_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Plugin/class-updater-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Hostings\\Litespeed_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/Hostings/class-litespeed-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Ecommerce\\BigCommerce_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/ecommerce/class-bigcommerce-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\EWWW_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-ewww-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Imagify_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-imagify-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Optimus_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-optimus-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\ShortPixel_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/Images/Webp/class-shortpixel-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Webp_Common' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/Images/Webp/trait-webp-common.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Images\\Webp\\Webp_Interface' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/Images/Webp/webp-interface.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Mobile_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/class-mobile-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\NGG_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/class-ngg-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\Security\\Sucuri_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/security/class-sucuri-subscriber.php',
        'WP_Rocket\\Subscriber\\Third_Party\\Plugins\\SyntaxHighlighter_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/third-party/plugins/class-syntaxhighlighter-subscriber.php',
        'WP_Rocket\\Subscriber\\Tools\\Detect_Missing_Tags_Subscriber' => __DIR__ . '/../..' . '/inc/classes/subscriber/Tools/class-detect-missing-tags-subscriber.php',
        'WP_Rocket\\Traits\\Config_Updater' => __DIR__ . '/../..' . '/inc/classes/traits/trait-config-updater.php',
        'WP_Rocket\\Traits\\Memoize' => __DIR__ . '/../..' . '/inc/classes/traits/trait-memoize.php',
        'WP_Rocket\\Traits\\Updater_Api_Tools' => __DIR__ . '/../..' . '/inc/classes/traits/trait-updater-api-tools.php',
        'WP_Rocket_Mobile_Detect' => __DIR__ . '/../..' . '/inc/classes/dependencies/mobiledetect/mobiledetectlib/Mobile_Detect.php',
        'WP_Rocket_WP_Async_Request' => __DIR__ . '/../..' . '/inc/classes/dependencies/wp-media/background-processing/wp-async-request.php',
        'WP_Rocket_WP_Background_Process' => __DIR__ . '/../..' . '/inc/classes/dependencies/wp-media/background-processing/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f0ee7a153d806e29c48e709512dd5c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f0ee7a153d806e29c48e709512dd5c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8f0ee7a153d806e29c48e709512dd5c4::$classMap;

        }, null, ClassLoader::class);
    }
}
