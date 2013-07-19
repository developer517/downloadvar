<?php

class News_Matter_Create_AddErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.matter.create.add'));
		$this->setAttribute('_title', 'Matter.Create.Add');
	}
}

?>