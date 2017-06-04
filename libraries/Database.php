<?php

class Database
{
	public $host=DB_HOST;
	public $user=DB_USER;
	public $password=DB_PASSWORD;
	public $db_name=DB_NAME;

	public $link;
	public $error;

	/*
	*class Consturctor
	*/
	public function __construct()
	{

		//Call Connect function

		$this->connect();

	}

	/*
	*Connector
	*/
	public function connect()
	{
		$this->link=new mysqli($this->host,$this->user,$this->password,$this->db_name);
		//$this->link=new mysqli_connect("localhost","root","","codewithpro");
		if(!$this->link)
		{
			$this->error="Connection Failed".$this->link->connect_error;
			return false;
			
		}
		else
		{
			return true;
		}
	}

	/*
	* Select Query
	*/

	public function select($query)
	{
		$result = $this->link->query($query) or die($this->error.__LINE__);
		if($result->num_rows > 0)
		{
			return $result;
		}
		else
		{
			return false;
		}
	}

	/*
	* Insert Query
	*/

	public function insert($query)
	{
		$insert_row=$this->link->query($query) or die($this->error.__LINE__);
		//validate insert
		if($insert_row)
		{
			header("Location : index.php?msg=".urlencode('Inserted Successfully'));
			exit();
		}
		else
		{
			die('Error : ('. $this->link->error .')' .$this->link->error);
		}
	}

	/*
	* Update Query
	*/

	public function update($query)
	{
		$update_row=$this->link->query($query) or die($this->error.__LINE__);
		//validate insert
		if($update_row)
		{
			header("Location : index.php?msg=".urlencode('Updated Successfully'));
			exit();
		}
		else
		{
			die('Error : ('. $this->link->error .')' .$this->link->error);
		}
	}

	/*
	* Update Query
	*/

	public function delete($query)
	{
		$delete_row=$this->link->query($query) or die($this->error.__LINE__);
		//validate insert
		if($delete_row)
		{
			header("Location : index.php?msg=".urlencode('Deleted Successfully'));
			exit();
		}
		else
		{
			die('Error : ('. $this->link->error .')' .$this->link->error);
		}
	}
}