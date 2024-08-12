<?php
include_once ("DBConn.php");
include_once ("Customer.php");

class Model
{
    public function getCustomerList()
    {
        global $mysqli;

        $sql = "SELECT * FROM customer";

        $result = $mysqli->query($sql);

        $arr = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $arr[$row['id']] = new Customer($row['id'], $row['fname'], $row['lname'], $row['email']);
        }
        return $arr;

    }

    public function getCustomerByID($id)
    {
        global $mysqli;

        $sql = "SELECT * FROM customer WHERE id = $id";
        $result = $mysqli->query($sql);

        $arr = array();

        if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $arr[$row['id']] = new Customer($row['id'], $row['fname'], $row['lname'], $row['email']);
        }
        return $arr;
    }
    
    public function getCustomerByName($name)  {
        global $mysqli;

        $sql = "SELECT * FROM customer WHERE fname LIKE '%$name%' or lname LIKE '%$name%'";
        $result = $mysqli->query($sql);

        $arr = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $arr[$row['id']] = new Customer($row['id'], $row['fname'], $row['lname'], $row['email']);
        }
        return $arr;
    } 
}
?>