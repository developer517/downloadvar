<?php

class Default_SitenewsSuccessView extends downloadvarDefaultBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'news');
		$this->setAttribute('_title', 'اخبار سایت');
	}
}

?>