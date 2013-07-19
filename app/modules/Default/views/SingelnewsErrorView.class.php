<?php

class Default_SingelnewsErrorView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'news');
		
		$this->setAttribute('_title', 'Singelnews');
	}
}

?>