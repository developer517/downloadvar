<?php

class Download_ContinueErrorView extends downloadvarDownloadBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'continue');
		
		$this->setAttribute('_title', 'Continue');
	}
}

?>