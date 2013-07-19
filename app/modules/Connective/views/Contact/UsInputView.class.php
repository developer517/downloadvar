<?php

class Connective_Contact_UsInputView extends downloadvarConnectiveBaseView
{
	public function executeHtml(AgaviRequestDataHolder $rd)
	{
		$this->setupHtml($rd,'connect');
		
		$this->setAttribute('_title', 'تماس با ما');
	}
}

?>