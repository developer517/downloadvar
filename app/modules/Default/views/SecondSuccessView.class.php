<?php

class Default_SecondSuccessView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'matter');
		$cat = $rd->getParameter('sec');
		$category = SecondCategoryQuery::create()->filterByEnglishName($cat)->find();
		foreach ($category as $c)
		{
		$this->setAttribute('_cat_sec', $c->getPersianName());
		$this->setAttribute('_desc', $c->getDescription());
		$this->setAttribute('_keywords', $c->getTag());
		}
		$one = OneCategoryQuery::create()
		->useSecondCategoryQuery()
		->filterByEnglishName($cat)
		->endUse()
		->find();
		foreach ($one as $ones)
		{
		$this->setAttribute('_title', $ones->getPersianName());
		}
	}
}

?>