<?php

class Default_CategorySuccessView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'matter');
		$cat = $rd->getParameter('category');
		$category = OneCategoryQuery::create()->filterByEnglishName($cat)->find();
		foreach ($category as $c)
		{
		$this->setAttribute('_title', $c->getPersianName());
		$this->setAttribute('_desc', $c->getDescription());
		$this->setAttribute('_keywords', $c->getTag());
		}
	}
}

?>