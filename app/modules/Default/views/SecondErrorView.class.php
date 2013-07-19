<?php

class Default_SecondErrorView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'matter');
		
		$this->setAttribute('_title', 'Second');
	}
}

?>