<?php

class News_Site_Edite_EditSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.site.admin.index'));
		$this->setAttribute('_title', 'Site.Edite.Edit');
	}
}

?>