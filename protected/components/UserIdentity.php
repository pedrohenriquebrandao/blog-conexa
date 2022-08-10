<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id, $_nome;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user=Usuario::model()->find('LOWER(username)=?', array(strtolower($this->username)));

		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(crypt($this->password, 'salt')!==$user->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else {
			$this->_id=$user->usuario_id;
			$this->setState('username', $user->username);
			$this->_nome=$user->nome;
        	$this->setState('nome', $user->nome);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

	public function getId() 
	{
		return $this->_id;
	}

	public function getNome() 
	{
		return $this->_nome;
	}
}