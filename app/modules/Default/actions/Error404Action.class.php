<?php

class Default_Error404Action extends downloadvarDefaultBaseAction
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
		$max_dl =array();
		$max_view=array();
		$rand=array();
		$maxdl = MatterQuery::create()->create()->orderByDownloadCount()->paginate(1,10);
		foreach ($maxdl as $max)
		{
			$max_dl[] = $max->toArray();
		}
		$this->setAttribute('max_dl', $max_dl);

		$maxview = MatterQuery::create()->orderByViewCount()->limit(10)->find();
		foreach ($maxview as $max)
		{
			$max_view[] = $max->toArray();
		}
		$this->setAttribute('max_view', $max_view);

		$random = MatterQuery::create()->filterByPublisher(1)->orderByTagKeywords()->orderByViewCount()->orderByDate()->limit(6)->find();
		foreach ($random as $r)
		{
			$rand[] = $r->toArray();
		}
		$this->setAttribute('random', $rand);
		$need_software  = MatterQuery::create()->filterByNeed(1)->orderByOrder()->find();
		$this->setAttribute('need_software', $need_software->toArray());
		
		$cat = OneCategoryQuery::create()->find();
		$this->setAttribute('cat', $cat->toArray());
		
		$last = MatterQuery::create()->filterByPublisher(1)->orderByOrder()->limit(6)->find();
		$this->setAttribute('last', $last->toArray());
		
		$lastnews = NewsQuery::create()->orderByOrder()->limit(1)->find();
		$this->setAttribute('lastnews', $lastnews->toArray());
		
		$news_site = NewsQuery::create()->find();
		$this->setAttribute('news_site', $news_site->toArray());
		
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