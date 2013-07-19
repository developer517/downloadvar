<?php

class News_Comment_Answer_AddErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.comment.answer.add',array('id' => $rd->getParameter('id'))));
		$this->setAttribute('_title', 'Comment.Answer.Add');
	}
}

?>