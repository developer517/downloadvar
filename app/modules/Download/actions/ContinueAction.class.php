<?php

class Download_ContinueAction extends downloadvarDownloadBaseAction
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
		$lastnews = NewsQuery::create()->orderByOrder()->limit(1)->find();
		$this->setAttribute('lastnews', $lastnews->toArray());
		
		/* main content */
		$id = $rd->getParameter('id');
		$c = MatterQuery::create()->findPk($id);
		MatterQuery::create()
		->filterById($id)
		->update(array('ViewCount' => $c->getViewCount() + 1));
		$matter = MatterQuery::create()->filterById($id)->find();
		$this->setAttribute('matter', $matter->toArray());
	
		$categores = OneCategoryQuery::create()
		->useSecondCategoryQuery()
			->useThirdCategoryQuery()
				->useMatterQuery()
					->filterById($id)
				->endUse()
			->endUse()
		->endUse()
		->find();
		$_sec = SecondCategoryQuery::create()
			->useThirdCategoryQuery()
				->useMatterQuery()
					->filterById($id)
				->endUse()
			->endUse()
		->find();
		$_th = ThirdCategoryQuery::create()
			->useMatterQuery()
				->filterById($id)
			->endUse()
		->find();
		$this->setAttribute('_th', $_th->toArray());
		$this->setAttribute('_sec',  $_sec->toArray());
		$this->setAttribute('_cat', $categores->toArray());
		
		
		
		$related = MatterQuery::create()
		->orderByOrder()
			->limit(6)
				->useThirdCategoryQuery()
					->filterById($c->getThirdCategoryId())
				->endUse()
		->find();
		$this->setAttribute('_related', $related->toArray());
		
		$cm = CommentQuery::create()->filterByAction(1)->filterByMatterId($id)->find();
		$this->setAttribute('comment', $cm->toArray());
		
;		return 'Success';
		
	}
}

?>