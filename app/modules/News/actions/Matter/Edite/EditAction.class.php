<?php

class News_Matter_Edite_EditAction extends downloadvarNewsBaseAction
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
		$id = $rd->getParameter('id');
		$matter = MatterQuery::create()->findPks($id);
		$user = UserQuery::create()->find();
		$third = ThirdCategoryQuery::create()->find();
		$this->setAttribute('user', $user->toArray());
		$this->setAttribute('third', $third->toArray());
		$this->setAttribute('matter', $matter->toArray());
		return 'Input';
	}
public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$id = $rd->getParameter('id');
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
		$object = MatterQuery::create()->filterById($id)
		->update(
		array(
		'MainSubject' => $main_subject,
		'ShortSubject' => $short_subject,
		'UserId' => $user_id,
		'ThirdCategoryId' => $third,
		'Order' => $order,
		'Publisher' => $pub,
		'LongDesc' => $long_desc,
		'ShortDesc' => $short_desc,
		'EnglishDesc' => $english,
		'HelpDesc' => $help,
		'DownloadLink' => $link,
		'TagDesc' =>$tag_desc,
		'Spicial' => $sp,
		'Need' => $need,
		'TagKeywords' => $tag_key
		)
		);
		return 'Success';
	}
public function isSecure()
	{
		return 'true';
	}
}

?>