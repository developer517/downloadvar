<?php

class News_User_Edit_IndexErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
		$this->setupHtml($rd,'admin');
		$url = $this->getContext()->getRouting();
		$this->getResponse()->setRedirect($url->gen('news.user.edit.index',array('id' => $id)));
		
		$this->setAttribute('_title', 'User.Edit.Index');
	}
}

?>