<?php

class News_Call_Ellow_YesSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.call.admin.create'));
		$this->setAttribute('_title', 'Call.Ellow.Yes');
	}
}

?>