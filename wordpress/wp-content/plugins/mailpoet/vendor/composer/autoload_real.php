<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInit7a5ac91165f0e302e77623aed412d142
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInit7a5ac91165f0e302e77623aed412d142', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInit7a5ac91165f0e302e77623aed412d142', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInit7a5ac91165f0e302e77623aed412d142::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInit7a5ac91165f0e302e77623aed412d142::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequire7a5ac91165f0e302e77623aed412d142($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequire7a5ac91165f0e302e77623aed412d142($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}
