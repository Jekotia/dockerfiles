<?php
class adminLoginClass
{
	var $fldPostvar;
	var $fldUserName;
	var $fldPassword;
	
	function __adminLoginClass()
	{
		$this->fldPostvar	=	array();
		$this->fldUserName	=	"";
		$this->fldPassword	=	"";
	}
	
	//set
	function setPostVar($fldPostvar)
	{
		$this->fldPostvar	=	$fldPostvar;
	}
	function setUserName($fldUserName)
	{
		$this->fldUserName	=	$fldUserName;
	}
	function setPassword($fldPassword)
	{
		$this->fldPassword	=	$fldPassword;
	}
	
	//get
	function getPostVar()
	{
		return $this->fldPostvar;
	}
	function getUserName()
	{
		return $this->fldUserName;
	}
	function getPassword()
	{
		return $this->fldPassword;
	}
}
?>
