<?php
	/**
	 * PHP Autoloader Class
	 *
	 * @author   Malik Umer Farooq <lablnet01@gmail.com>
	 * @author-profile https://www.facebook.com/malikumerfarooq01/
	 * @license MIT 
	 * @link    https://github.com/Lablnet/PHP-Auto-loader-CLass
	 *
	 */
class Autoloader

{

	//Default extension for files
	private static $extension = '.php';

	//for setting path
	private static $path = '/';


	 /**
     * Load the files
     *
     * @param $path => folder 
     *
     * @return boolean | mix-data
    */
	public static function Load($path){

		if(isset($path) && !empty($path)){

			Autoloader::$path = $path.'/';

			spl_autoload_register(

				function($file){

					$file = str_replace("\\", DIRECTORY_SEPARATOR, $file);

					require_once Autoloader::$path.$file.Autoloader::$extension;

				}
			);

		}else{

			return false;

		}

	}
}