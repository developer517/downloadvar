<?php

class News_Call_Ellow_YesErrorView extends downloadvarNewsBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'admin');
		
		$this->setAttribute('_title', 'Call.Ellow.Yes');
	}
}

?>