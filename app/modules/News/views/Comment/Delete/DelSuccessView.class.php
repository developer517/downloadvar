<?php

class News_Comment_Delete_DelSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.comment.admin.index'));
		$this->setAttribute('_title', 'Comment.Delete.Del');
	}
}

?>