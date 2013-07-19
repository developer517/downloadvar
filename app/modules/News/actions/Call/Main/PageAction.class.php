<?php

class News_Call_Main_PageAction extends downloadvarNewsBaseAction
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
		$id = $rd->getParameter('id');
		$obj = TiketQuery::create()->filterByAction(1)->orderByIncrease()->paginate($id,20);
		$pages = $obj->getLinks(100);
		foreach ($obj as $object)
		{
			$value[]=$object->toArray();
		}	
		$this->setAttribute('page', $pages);
		$this->setAttribute('tiket', $value);
		return 'Success';
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>