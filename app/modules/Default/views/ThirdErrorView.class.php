<?php

class Default_ThirdErrorView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'matter');
		
		$this->setAttribute('_title', 'Third');
	}
}

?>