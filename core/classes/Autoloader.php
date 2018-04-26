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
	private $extension = '.php';

	//for setting path
	private static $path = '/';


	 /**
     * Load the files
     *
     * @param $path => folder 
     *
     * @return boolean | mix-data
    */
	public function Load($path){

		if(isset($path) && !empty($path)){

			Autoloader::$path = $path.'/';

			$files = Autoloader::ScanFile();

			foreach ($files as $file) {

				if(is_file(Autoloader::$path.$file)){

					require_once Autoloader::$path.$file; 

				}else{

					return false;
				}

			}


		}else{

			return false;

		}

	}

	 /**
     * Scan the directory
	 *
     * @return boolean | mix-data
    */
	public static function ScanFile(){

		if(!empty(Autoloader::$path)){

		$disk_scan = array_diff(scandir(Autoloader::$path,1),array('..','.'));
		
		return $disk_scan;


		}else{

			return false;

		}

	}
}