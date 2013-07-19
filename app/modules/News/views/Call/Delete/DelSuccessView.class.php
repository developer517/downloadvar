<?php

class News_Call_Delete_DelSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.call.mian.page'));
		$this->setAttribute('_title', 'Call.Delete.Del');
	}
}

?>