<?php

class News_Site_Create_AddSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.site.admin.index'));
		$this->setAttribute('_title', 'Site.Create.Add');
	}
}

?>