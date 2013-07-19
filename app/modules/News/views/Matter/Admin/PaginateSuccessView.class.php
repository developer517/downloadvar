<?php

class News_Matter_Admin_PaginateSuccessView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Matter.Admin.Paginate');
	}
}

?>