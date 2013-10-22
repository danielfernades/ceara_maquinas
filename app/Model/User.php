<?php  
	/**
	* 
	*/
	class User extends AppModel{
		public function beforeSave($opt=array()) {
			if (isset($this->data[$this->alias]['password']) && !empty($this->data[$this->alias]['password'])) {
				$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
			}
			return true;
		}

		public function verifies() {
			if (!isset($this->data[$this->alias]['cpassword'])) {
				return false;
			}
			return ($this->data[$this->alias]['password'] === $this->data[$this->alias]['cpassword']);
		}

	}
?>