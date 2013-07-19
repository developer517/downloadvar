<?php

class News_Matter_Admin_IndexAction extends downloadvarNewsBaseAction
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
		$matter = MatterQuery::create()->filterByPublisher(1)->orderByOrder()->paginate(1,20);
		foreach ($matter as $n) 
		{
			$value[] = $n->toArray();
		}
		$page = $matter->getLinks(100);
		$this->setAttribute('p', $page);
		$this->setAttribute('matter', $value);
		return 'Success';
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>