<?php

class Default_SitenewsErrorView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'news');
		
		$this->setAttribute('_title', 'Sitenews');
	}
}

?>