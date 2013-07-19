<?php

class News_User_Edit_IndexAction extends downloadvarNewsBaseAction
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
public function isSecure()
	{
		return 'true';
	}
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$user =  UserQuery::create()->findPks($id);
		$this->setAttribute('user', $user->toArray());
		return 'Input';
	}
		public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$name = $rd->getParameter('name');
		$username = $rd->getParameter('username');
		$pass = $rd->getParameter('password');
		$mobile = $rd->getParameter('mobile');
		$email = $rd->getParameter('email');
		$object = UserQuery::create()->filterById($id)
		->update(
		array(
		'Name' => $name,
		'Username' => $username,
		'Password' => $pass,
		'Mobile' => $mobile,
		'Email' => $email
		)
		);
		return 'Success';
	}
	
}

?>