<?php

class News_Matter_Publish_PubSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.matter.waiting.index'));
		$this->setAttribute('_title', 'Matter.Publish.Pub');
	}
}

?>