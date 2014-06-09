<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2014-05-28 11:28
 */
interface AppsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Apps 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param app primary key
 	 */
	public function delete($IDApp);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Apps app
 	 */
	public function insert($app);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Apps app
 	 */
	public function update($app);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByNameApp($value);

	public function queryByLinkDowload($value);

	public function queryByIDDevice($value);

	public function queryByIDCategory($value);

	public function queryByDesc($value);

	public function queryByReleaseDate($value);


	public function deleteByNameApp($value);

	public function deleteByLinkDowload($value);

	public function deleteByIDDevice($value);

	public function deleteByIDCategory($value);

	public function deleteByDesc($value);

	public function deleteByReleaseDate($value);


}
?>