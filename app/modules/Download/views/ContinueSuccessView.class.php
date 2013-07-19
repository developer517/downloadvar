<?php

class Download_ContinueSuccessView extends downloadvarDownloadBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'continue');
		
		foreach ($this->getAttribute('matter') as $mat)
		{
		$this->setAttribute('_title', $mat['MainSubject']);
		$this->setAttribute('desc', $mat['TagDesc']);
		$this->setAttribute('keywords', $mat['TagKeywords']);
		}
		 
	}
}

?>