<?php

class News_Call_Admin_CreateAction extends downloadvarNewsBaseAction
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
		$tiket = TiketQuery::create()->filterByAction(0)->find();
		$this->setAttribute('tiket', $tiket->toArray());
		
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>