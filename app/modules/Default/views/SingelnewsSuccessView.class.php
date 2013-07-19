<?php

class Default_SingelnewsSuccessView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'news');
		$this->setAttribute('_title', 'اخبار سایت');	
	}
}

?>