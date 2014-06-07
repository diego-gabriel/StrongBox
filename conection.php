<?php
class Database{
	private static $instance;
	private $connection;

	private function __construct(){
		if ($this->connection == null){
			$this->connection = mysqli_connect("localhost", "root", "", "strongbox");
		}
	}

	public static function getInstance(){
		if (self::$instance == null){
			self::$instance = new Database();
		}
		return self::$instance;
	}

	public function existUser($username){
		$query = "SELECT `account` FROM USER WHERE `account` = '$username'";
		$result = mysqli_query($this->connection, $query);
		return mysqli_num_rows($result) > 0;
	}

	public function createUser($username, $password){
		$query = "INSERT INTO USER (account, password) VALUES ('$username', '$password')";
		mysqli_query($this->connection, $query);
	}

	public function goodPassword($username, $password){
		$query = "SELECT `account` FROM USER WHERE `account` = '$username' AND `password` = '$password'";
		$result = mysqli_query($this->connection, $query);
		return mysqli_num_rows($result) > 0;
	}

	public function createBox($user, $pass, $title, $url, $account){
		$query = "INSERT INTO BOX (username, password, title, url, account) 
					 VALUES ('$user', '$pass', '$title', '$url', '$account')";
		mysqli_query($this->connection, $query);
		return mysqli_insert_id($this->connection);
	}

	public function setBoxProperty($id, $property, $value){
		$query = "UPDATE BOX SET $property = '$value' WHERE id = '$id'";
		mysqli_query($this->connection, $query);
	}

	public function allBox($username){
		$query = "SELECT `id`, `title` FROM `BOX` WHERE `account` = '$username'";
		$result = mysqli_query($this->connection, $query);
		$boxes = array();
		while ($box = mysqli_fetch_assoc($result)){
			$boxes[] = $box;
		}
		return $boxes;
	}

	public function isUserBoxes($username, $id){
		$query = "SELECT `id` FROM `BOX` WHERE `id` = '$id' AND `account` = '$username'";
		$result = mysqli_query($this->connection, $query);
		return mysqli_num_rows($result) > 0;
	}

	public function getFields($id){
		$query = "SELECT `title`, `url`, `password`, `username` FROM `BOX` WHERE `id` = '$id'";
		$result = mysqli_query($this->connection, $query);
		return mysqli_fetch_assoc($result);
	}

	public function createExtra($id, $title, $value){
		$query = "INSERT INTO EXTRA (box_id, title, value) VALUES ('$id', '$title', '$value')";
		echo $query;
		mysqli_query($this->connection, $query);
	}
}
?>