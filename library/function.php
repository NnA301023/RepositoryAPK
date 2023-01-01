<?php
require "connection.php";
$error = "";

/**
 * Read data
 *
 * Read all record in table
 *
 * @param string $query sql query
 * @return array all record
 * @throws Exception basic exception if command failed
 **/
function read_data(string $query){
    global $conn;
    global $error;
    try {
        // baca data
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        // bungkus data
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        // kembalikan isi data
        return $rows;
    } catch (\Exception $e) {
        $error = "Read data error : $e";
    }
}

/**
 * Count data
 *
 * Count data of record in table
 *
 * @param string $param Parameter data to be counted
 * @return int
 * @throws conditon
 **/
function count_data($table,$param = false)
{
    global $conn;
    global $error;
    try {
        if($param){
            $stmt = $conn->prepare("SELECT COUNT(*) AS num FROM $table WHERE $param");
            $stmt->execute();
            return $stmt->get_result()->fetch_assoc()['num'];
        }
        $stmt = $conn->prepare("SELECT COUNT(*) AS num FROM $table");
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc()['num'];
    } catch (\Exception $e) {
        $error = "Count data error : $e";
    }
}

/**
 * Add data
 *
 * Add a record to table
 *
 * @param string $table table name
 * @param string $values values to be insert
 * @return int number of affected_rows if command success
 * @throws Exception basic exception if command failed
 **/
function add_data(string $table,string $values)
{
    global $conn;
    global $error;
    try {
        $stmt = $conn->prepare("INSERT INTO $table VALUES($values)");
        $stmt->execute();
        $stmt->close();
        // $conn->query("INSERT INTO $table VALUES($values)");
        return $conn->affected_rows;
    } catch (\Exception $e) {
        $error = "Add data error : $e";
    }
    
}
/**
 * edit data
 *
 * edit a record in a table
 *
 * @param string $table table name
 * @param string $param parameter of changed values
 * @param string $condition the condion of query
 * @return int number of affected_rows if command success
 * @throws Exception basic exception if command failed
 **/
function update_data(string $table,string $param,string $condition)
{
    global $conn;
    global $error;
    try {
        $stmt = $conn->prepare("UPDATE $table SET $param WHERE $condition");
        $stmt->execute();
        // $conn->query("UPDATE $table SET $param WHERE $condition");
        return $conn->affected_rows;        
    } catch (\Exception $e) {
        $error = "Update data error : $e";
    }
}

/**
 * delete data
 *
 * delete a record by their condition
 *
 * @param string $table table name
 * @param string $condition the condion of query
 * @return int number of affected_rows if command success
 * @throws Exception basic exception if command failed
 **/
function delete_data(string $table,string $condition)
{
    global $conn;
    global $error;
    try {
        $conn->query("DELETE FROM $table WHERE $condition");
        return $conn->affected_rows;
    } catch (\Exception $e) {
        $error = "Delete error : $e";
    }
}

?>