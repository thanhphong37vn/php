<?php

/**
 * Class that operate on table 'apps'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2014-05-28 11:26
 */
class AppsMySqlDAO implements AppsDAO {

    /**
     * Get Domain object by primry key
     *
     * @param String $id primary key
     * @return AppsMySql
     */
    public function load($id) {
        $sql = 'SELECT * FROM apps WHERE IDApp = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    /**
     * Get all records from table
     */
    public function queryAll() {
        $sql = 'SELECT * FROM apps';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllByAndroidApps() {
//        $sql = "SELECT * FROM apps where IDDevice=0 and IDCategory=0 ORDER BY IDApp DESC";
        $sql = "SELECT * FROM apps where IDDevice=0 and IDCategory=0 ORDER BY IDApp DESC";
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllByAndroidDialpads() {
//        $sql = "SELECT * FROM apps where IDDevice=0 and IDCategory=1 ORDER BY 'Release' DESC";
        $sql = "SELECT * FROM apps where IDDevice=0 and IDCategory=1 ORDER BY IDApp DESC";
//        $sql = 'SELECT * FROM apps where IDDevice=0 and IDCategory=1';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllByIOSApps() {
//        $sql = "SELECT * FROM apps where IDDevice=1 and IDCategory=0 ORDER BY 'Release' DESC";
        $sql = "SELECT * FROM apps where IDDevice=1 and IDCategory=0 ORDER BY IDApp DESC";
//        $sql = 'SELECT * FROM apps where IDDevice=1 and IDCategory=0';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    public function queryAllByIOSDialpads() {
//        $sql = "SELECT * FROM apps where IDDevice=1 and IDCategory=1 ORDER BY 'Release' DESC";
        $sql = "SELECT * FROM apps where IDDevice=1 and IDCategory=1 ORDER BY IDApp DESC";
//        $sql = 'SELECT * FROM apps where IDDevice=1 and IDCategory=1';
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Get all records from table ordered by field
     *
     * @param $orderColumn column name
     */
    public function queryAllOrderBy($orderColumn) {
        $sql = 'SELECT * FROM apps ORDER BY ' . $orderColumn;
        $sqlQuery = new SqlQuery($sql);
        return $this->getList($sqlQuery);
    }

    /**
     * Delete record from table
     * @param app primary key
     */
    public function delete($IDApp) {
        $sql = 'DELETE FROM apps WHERE IDApp = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($IDApp);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Insert record to table
     *
     * @param AppsMySql app
     */
    public function insert($app) {
        $sql = 'INSERT INTO apps (NameApp, LinkDowload, IDDevice, IDCategory, Desc, ReleaseDate) VALUES (?, ?, ?, ?, ?, ?)';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($app->nameApp);
        $sqlQuery->set($app->linkDowload);
        $sqlQuery->setNumber($app->iDDevice);
        $sqlQuery->setNumber($app->iDCategory);
        $sqlQuery->set($app->desc);
        $sqlQuery->set($app->releaseDate);

        $id = $this->executeInsert($sqlQuery);
        $app->iDApp = $id;
        return $id;
    }

    /**
     * Update record in table
     *
     * @param AppsMySql app
     */
    public function update($app) {
        $sql = 'UPDATE apps SET NameApp = ?, LinkDowload = ?, IDDevice = ?, IDCategory = ?, Desc = ?, ReleaseDate = ? WHERE IDApp = ?';
        $sqlQuery = new SqlQuery($sql);

        $sqlQuery->set($app->nameApp);
        $sqlQuery->set($app->linkDowload);
        $sqlQuery->setNumber($app->iDDevice);
        $sqlQuery->setNumber($app->iDCategory);
        $sqlQuery->set($app->desc);
        $sqlQuery->set($app->releaseDate);

        $sqlQuery->setNumber($app->iDApp);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Delete all rows
     */
    public function clean() {
        $sql = 'DELETE FROM apps';
        $sqlQuery = new SqlQuery($sql);
        return $this->executeUpdate($sqlQuery);
    }

    public function queryByNameApp($value) {
        $sql = 'SELECT * FROM apps WHERE NameApp = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByLinkDowload($value) {
        $sql = 'SELECT * FROM apps WHERE LinkDowload = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByIDDevice($value) {
        $sql = 'SELECT * FROM apps WHERE IDDevice = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByIDCategory($value) {
        $sql = 'SELECT * FROM apps WHERE IDCategory = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->getList($sqlQuery);
    }

    public function queryByDesc($value) {
        $sql = 'SELECT * FROM apps WHERE Desc = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function queryByReleaseDate($value) {
        $sql = 'SELECT * FROM apps WHERE ReleaseDate = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->getList($sqlQuery);
    }

    public function deleteByNameApp($value) {
        $sql = 'DELETE FROM apps WHERE NameApp = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByLinkDowload($value) {
        $sql = 'DELETE FROM apps WHERE LinkDowload = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByIDDevice($value) {
        $sql = 'DELETE FROM apps WHERE IDDevice = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByIDCategory($value) {
        $sql = 'DELETE FROM apps WHERE IDCategory = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByDesc($value) {
        $sql = 'DELETE FROM apps WHERE Desc = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    public function deleteByReleaseDate($value) {
        $sql = 'DELETE FROM apps WHERE ReleaseDate = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->set($value);
        return $this->executeUpdate($sqlQuery);
    }

    /**
     * Read row
     *
     * @return AppsMySql
     */
    protected function readRow($row) {
        $app = new App();

        $app->iDApp = $row['IDApp'];
        $app->nameApp = $row['NameApp'];
        $app->linkDowload = $row['LinkDowload'];
        $app->iDDevice = $row['IDDevice'];
        $app->iDCategory = $row['IDCategory'];
        $app->desc = $row['Desc'];
        $app->releaseDate = $row['ReleaseDate'];

        return $app;
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    /**
     * Get row
     *
     * @return AppsMySql
     */
    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    /**
     * Execute sql query
     */
    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    /**
     * Execute sql query
     */
    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    /**
     * Query for one row and one column
     */
    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    /**
     * Insert row to table
     */
    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}

?>