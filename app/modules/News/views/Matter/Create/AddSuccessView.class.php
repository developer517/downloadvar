<?php

class News_Matter_Create_AddSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.matter.admin.index'));
		$this->setAttribute('_title', 'Matter.Create.Add');
	}
}

?>