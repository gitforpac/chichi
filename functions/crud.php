<?php

require 'dbconnect.php';

/****

 get - GET ALL DATA FROM TABLE SPECIFIED FROM QUERY AND RETURN IN OBJECT FORMAT

***/
function get($sql)
{
	$data = array();
	global $dbcon;

	if($results = $dbcon->query($sql)) {
		if($results->num_rows) {
			while($row=$results->fetch_object()){
				$data[] = $row;
			}
		}


	// return data fetched from database
	return $data;

	}
	
}

/****

 getall - GET ALL DATA FROM TABLE AND RETURN IN OBJECT FORMAT

***/

function getall($select,$table)
{
	$data = array();
	$sql = "SELECT " . $select . " FROM " . $table;
	global $dbcon;

	if($results = $dbcon->query($sql)) {
		if($results->num_rows) {
			while($row=$results->fetch_object()){
				$data[] = $row;
			}
		}


	// return data fetched from database
	return $data;

	}
}

/****

getwhere - GET DATA WHERE CLAUSE AND RETURN IN OBJECT FORMAT

***/

function getwhere($select,$table,$where)
{
	global $dbcon;
	$data = array();
	$sql = "SELECT " . $select . " FROM " . $table . " WHERE " . $where;

	if($results = $dbcon->query($sql)) {
		if($results->num_rows) {
			while($row=$results->fetch_object()){
				$data[] = $row;
			}
		}


	// return data fetched from database
	return $data;

	}
}

/****

 insert = INSERT DATA TO TABLE

***/

function insert($table, $data) 
{
	global $dbcon;

	$fields = array_keys($data);

	$sql = "INSERT INTO ".$table."

	(`".implode('`,`', $fields)."`)

	VALUES('".implode("','", $data)."')";

	// returns boolean true or false
	return $dbcon->query($sql);
	
}

/****

	update = UPDATE DATA IN TABLE

*****/

function update($table_name, $form_data, $where_clause='') 
{
	global $dbcon;

    $whereSQL = '';

    if(!empty($where_clause)) {


        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE'){


            $whereSQL = " WHERE ".$where_clause;

        } else {

            $whereSQL = " ".trim($where_clause);
        }
    }


    $sql = "UPDATE ".$table_name." SET ";


    $sets = array();

    foreach($form_data as $column => $value) {

         $sets[] = "`".$column."` = '".$value."'";
    }

    $sql .= implode(', ', $sets);


    $sql .= $whereSQL;

    // returns boolean true or false
    return $dbcon->mysqli->query($sql);

}

?>