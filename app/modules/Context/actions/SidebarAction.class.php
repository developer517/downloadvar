<?php

class Context_SidebarAction extends downloadvarContextBaseAction
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
		$value=array();
		$max_dl =array();
		$max_view=array();
		$rand=array();
		
		
		
		$maxdl = MatterQuery::create()->create()->orderByDownloadCount()->paginate(1,14);
		foreach ($maxdl as $max)
		{
			$max_dl[] = $max->toArray();
		}
		$this->setAttribute('max_dl', $max_dl);

		$maxview = MatterQuery::create()->orderByViewCount()->find();
		for($i = 1 ; $i <= count($maxview) ; $i++)
		$maxview = MatterQuery::create()->limit(14)->orderByViewCount()->paginate($i ,14);
		foreach ($maxview as $max)
		{
			$max_view[] = $max->toArray();
		}
		$this->setAttribute('max_view', $max_view);
		$need_software  = MatterQuery::create()->filterByNeed(1)->orderByOrder()->find();
		$this->setAttribute('need_software', $need_software->toArray());
		
		$cat = OneCategoryQuery::create()->find();
		$this->setAttribute('cat', $cat->toArray());
			
		$news_site = NewsQuery::create()->find();
		$this->setAttribute('news_site', $news_site->toArray());
		return 'Success';
	}
}

?>