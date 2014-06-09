<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AppsDAO.class.php');
	require_once('class/dto/App.class.php');
	require_once('class/mysql/AppsMySqlDAO.class.php');
	require_once('class/mysql/ext/AppsMySqlExtDAO.class.php');

?>