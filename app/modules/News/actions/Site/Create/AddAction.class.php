<?php

class News_Site_Create_AddAction extends downloadvarNewsBaseAction
{
	/**
	 * Returns the default view if the action does not serve the request
	 * method used.
	 *
	 * @return     mixed <ul>
	 *                     <li>A string containing the view name associated
	 *                     with this action; or</li>
	 *                     <li>An array with two indices: the parent module
	 *                     of the view to be executed and the view to be
	 *                     executed.</li>
	 *                   </ul>
	 */
	public function getDefaultViewName()
	{
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$shamsi = new jDateTime();
		
		$news = NewsQuery::create()->find();
		$counter = 1000 - count($news);
		$subject = $rd->getParameter('subject');
		$desc = $rd->getParameter('desc');
		$obj = new News();
		$obj->setSubject($subject);
		$obj->setDesc($desc);
		$obj->setOrder($counter);
		$obj->setDate($shamsi->date('d M Y',time()));
		$obj->save();
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>