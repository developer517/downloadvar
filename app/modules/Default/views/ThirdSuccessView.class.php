<?php

class Default_ThirdSuccessView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'matter');
		$cat = $rd->getParameter('th');
		$category = ThirdCategoryQuery::create()->filterByEnglishName($cat)->find();
		foreach ($category as $c)
		{
		$this->setAttribute('_cat_th', $c->getPersianName());
		$this->setAttribute('_desc', $c->getDescription());
		$this->setAttribute('_keywords', $c->getTag());
		}
		$sec  = SecondCategoryQuery::create()
		->useThirdCategoryQuery()
		->filterByEnglishName($cat)
		->endUse()
		->find();
		foreach ($sec as $se)
		{
			$this->setAttribute('_cat_sec', $se->getPersianName());
		}
		$one = OneCategoryQuery::create()
		->useSecondCategoryQuery()
		->useThirdCategoryQuery()
		->filterByEnglishName($cat)
		->endUse()
		->endUse()
		->find();
		foreach ($one as $on)
		{
		$this->setAttribute('_title', $on->getPersianName());
		}
	}
}

?>