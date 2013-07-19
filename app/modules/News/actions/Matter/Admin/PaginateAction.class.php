<?php

class News_Matter_Admin_PaginateAction extends downloadvarNewsBaseAction
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
		$arr = array();
		$id = $rd->getParameter('id');
		$matter = MatterQuery::create()->filterByPublisher(1)->orderByOrder()->paginate($id,20);
		$page = $matter->getLinks();
		foreach ($matter as $v)
		{
			$arr[]=$v->toArray();
		}
		$this->setAttribute('p', $page);
		$this->setAttribute('matter', $arr);
		return 'Success';
		
	}
public function isSecure()
	{
		return 'true';
	}
}

?>