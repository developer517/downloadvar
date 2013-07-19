<?php

class News_Matter_Create_AddAction extends downloadvarNewsBaseAction
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
	public function executeRead(AgaviRequestDataHolder $rd)
	{
		$user = UserQuery::create()->find();
		$third = ThirdCategoryQuery::create()->find();
		$this->setAttribute('user', $user->toArray());
		$this->setAttribute('third', $third->toArray());
		return 'Input';
	}
	public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$shamsi = new jDateTime();
		$main_subject = $rd->getParameter('main_subject');
		$short_subject = $rd->getParameter('short_subject');
		$user_id = $rd->getParameter('user_id');
		$third = $rd->getParameter('third_category');
		$order = $rd->getParameter('order');
		$pub = $rd->getParameter('publisher');
		$long_desc = $rd->getParameter('long_desc');
		$short_desc = $rd->getParameter('short_desc');
		$english = $rd->getParameter('english_desc');
		$help = $rd->getParameter('help_desc');
		$link = $rd->getParameter('download_link');
		$tag_desc = $rd->getParameter('tag_desc');
		$tag_key = $rd->getParameter('tag_keywords');
		$need = $rd->getParameter('need');
		$sp = $rd->getParameter('spicial');
		$obj = new Matter();
		$obj->setMainSubject($main_subject);
		$obj->setShortSubject($short_subject);
		$obj->setUserId($user_id);
		$obj->setThirdCategoryId($third);
		$obj->setOrder($order);
		$obj->setPublisher($pub);
		$obj->setLongDesc($long_desc);
		$obj->setShortDesc($short_desc);
		$obj->setEnglishDesc($english);
		$obj->setHelpDesc($help);
		$obj->setDownloadLink($link);
		$obj->setTagDesc($tag_desc);
		$obj->setTagKeywords($tag_key);
		$obj->setDownloadCount(1);
		$obj->setViewCount(1);
		$obj->setSpicial($sp);
		$obj->setNeed($need);
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