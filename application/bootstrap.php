<?php defined('SYSPATH') or die('No direct script access.');
// -- Environment setup --------------------------------------------------------
// Load the core Kohana class
require SYSPATH . 'classes/kohana/core' . EXT;

if (is_file(APPPATH . 'classes/kohana' . EXT))
{ 
    // Application extends the core
    require APPPATH . 'classes/kohana' . EXT;
} 
else
{ 
    // Load empty core extension
    require SYSPATH . 'classes/kohana' . EXT;
} 
/**
 * Set the default time zone.
 * 
 * @see http://kohanaframework.org/guide/using.configuration
 * @see http://php.net/timezones
 */
// date_default_timezone_set('America/Chicago');
date_default_timezone_set('Asia/Shanghai');

/**
 * Set the default locale.
 * 
 * @see http://kohanaframework.org/guide/using.configuration
 * @see http://php.net/setlocale
 */
// setlocale(LC_ALL, 'en_US.utf-8');
setlocale(LC_ALL, 'zh_CN.utf-8');

/**
 * Enable the Kohana auto-loader.
 * 
 * @see http://kohanaframework.org/guide/using.autoloading
 * @see http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 * 
 * @see http://php.net/spl_autoload_call
 * @see http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');
// -- Configuration and initialization -----------------------------------------
/**
 * Set the default language
 */
// I18n::lang('en-us');
I18n :: lang('zh-cn');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 * 
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
/*
if (isset($_SERVER['KOHANA_ENV']))
{
    Kohana :: $environment = constant('Kohana::' . strtoupper($_SERVER['KOHANA_ENV']));
}*/
$env = substr($_SERVER['SERVER_NAME'], -3);
Kohana :: $environment = ($env === 'dev') ? (Kohana :: DEVELOPMENT) : (Kohana :: PRODUCTION);

/**
 * Initialize Kohana, setting the default options.
 * 
 * The following options are available:
 * 
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana :: init(array(
        'base_url' => '/v2/public/',
        'index_file' => '',
        'caching' => Kohana :: $environment === Kohana :: PRODUCTION,
        'errors' => Kohana :: $environment === Kohana :: DEVELOPMENT,
        'profile' => Kohana :: $environment === Kohana :: DEVELOPMENT,
    ));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana :: $log -> attach(new Log_File(APPPATH . 'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana :: $config -> attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 * 这里需要注意的是模块的加载顺序决定的类重载的优先级，最前面的优先级最高
 */
Kohana :: modules(array(
		'admin' => MODPATH . 'admin',
		'media' => MODPATH . 'media',
		'pagination' => MODPATH . 'pagination', // 启用分页
		'captcha' => MODPATH . 'captcha', // 其他验证码

		'auth' => MODPATH . 'auth', // Basic authentication
        'cache' => MODPATH . 'cache', // Caching with multiple backends
        //'codebench'  => MODPATH.'codebench',  // Benchmarking tool
        'database' => MODPATH . 'database', // Database access
        'image' => MODPATH . 'image', // Image manipulation
        'orm' => MODPATH . 'orm', // Object Relationship Mapping
        //'unittest' => MODPATH . 'unittest', // Unit testing
        'userguide' => MODPATH . 'userguide', // User guide and API documentation
    ));

Cookie :: $salt = 'comasa';

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
Route :: set('list', '<controller>/list/<type>/in(/<location>)', array('type' => '.*', 'location' => '.*'))
	-> defaults(array(
	'controller' => 'coach',
	'action' => 'list',
));
Route :: set('default', '(<controller>(/<action>(/<id>)))', array('id' => '\d+'))
	-> defaults(array(
	'controller' => 'home',
	'action' => 'index',
));