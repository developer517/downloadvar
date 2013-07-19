<?php

class News_Menu_Admin_IndexAction extends downloadvarNewsBaseAction
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
		return 'Success';
	}
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$value = array();
		$object = OneCategoryQuery::create()->orderById()->find();
		foreach ($object as $obj)
		{
			$value[] = $obj->toArray();
		}
		$this->setAttribute('one_category', $value);
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>