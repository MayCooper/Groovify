<?php
//creating account class
	class User {

		private $con;
		private $username;

		public function __construct($con, $username) {
			$this->con = $con;
			$this->username = $username;

		}

		public function getUsername() {
			return $this->username;
		}

	}

?>