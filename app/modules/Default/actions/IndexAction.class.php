<?php

class Default_IndexAction extends downloadvarDefaultBaseAction
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
		$value=array();
		$last = MatterQuery::create()->filterByPublisher(1)->orderByOrder()->limit(6)->find();
		$this->setAttribute('last', $last->toArray());
		
		$lastnews = NewsQuery::create()->orderByOrder()->limit(1)->find();
		$this->setAttribute('lastnews', $lastnews->toArray());
		
		/* main content */
		$matter = MatterQuery::create()->orderByOrder()->paginate(1,14);
		$page = $matter->getLinks(100);
		$this->setAttribute('page', $page);
		foreach ($matter as $mat)
		{
			$value[] = $mat->toArray();
		}
		$this->setAttribute('matter', $value);
		return 'Success';
		
	}
}

?>