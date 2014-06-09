<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return AppsDAO
	 */
	public static function getAppsDAO(){
		return new AppsMySqlExtDAO();
	}


}
?>