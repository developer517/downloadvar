<?php

class News_User_Create_IndexAction extends downloadvarNewsBaseAction
{
	/**
	 * Returns the default view if the action does not serve the request
	 * method used.
	 *
	 * @return     mixed <ul>
	 *                     <li>A string containing the view name associated
	 *                     with this action; or</li>
	 *                     <li>An array with two indices: the parent module
	 *                     of the view to be executed and the view to be
	 *                     executed.</li>
	 *                   </ul>
	 */
	public function getDefaultViewName()
	{
		return 'Input';
	}
public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$name = $rd->getParameter('name');
		$username = $rd->getParameter('username');
		$pass = $rd->getParameter('password');
		$mobile = $rd->getParameter('mobile');
		$email = $rd->getParameter('email');
		$obj = new User();
		$obj->setName($name);
		$obj->setUsername($username);
		$obj->setPassword($pass);
		$obj->setMobile($mobile);
		$obj->setEmail($email);
		$obj->save();
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>