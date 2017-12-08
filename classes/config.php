<?php
class Config {
	public static function get($path = null) {
		if($path){
			$config = $GLOBALS['config'];
			$path = explode('/', $path);

			foreach($path as $subfolder) {
				if(isset($config[$subfolder])) {
					$config = $config[$subfolder];
				}
			}

			return $config;
		}
	}
}