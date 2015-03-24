<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	private $_jerarquia;
	public function authenticate()
	{
		$user=Cta::model()->find("LOWER(Nombre)=?",array(strtolower($this->username)));

		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(sha1(md5($this->password))!==$user->Password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->_id=$user->idCTA;
			$this->_jerarquia=$user->Jerarquia;
			$this->setState("Jerarquia", $user->Jerarquia);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
	public function getId()
	{
		return $this->_id;
	}
	public function getJerarquia()
	{
		return $this->_jerarquia;
	}

}