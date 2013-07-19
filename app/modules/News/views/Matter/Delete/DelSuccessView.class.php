<?php

class News_Matter_Delete_DelSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd);
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.matter.admin.index'));
		$this->setAttribute('_title', 'Matter.Delete.Del');
	}
}

?>