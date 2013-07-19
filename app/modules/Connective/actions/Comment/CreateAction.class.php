<?php

class Connective_Comment_CreateAction extends downloadvarConnectiveBaseAction
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
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		
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
		
		$cm = CommentQuery::create()->filterByMatterId($id)->find();
		$this->setAttribute('comment', $cm->toArray());
		
		$shamsi = new jDateTime();
		$name= $rd->getParameter('name');
		$email  = $rd->getParameter('email');
		$desc = $rd->getParameter('desc');
		$web = $rd->getParameter('website');
		$id = $rd->getParameter('id');
		$tiket = new Comment();
		$tiket->setMatterId($id);
		$tiket->setName($name);
		$tiket->setDesc($desc);
		$tiket->setEmail($email);
		$tiket->setWebsite($web);
		$tiket->setAction(0);
		$tiket->setDate($shamsi->date('d M Y',time()));
		$tiket->save();
		return 'Success';
	}
}

?>