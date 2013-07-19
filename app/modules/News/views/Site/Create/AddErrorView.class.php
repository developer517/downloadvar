<?php

class News_Site_Create_AddErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.site.create.add'));
		$this->setAttribute('_title', 'Site.Create.Add');
	}
}

?>