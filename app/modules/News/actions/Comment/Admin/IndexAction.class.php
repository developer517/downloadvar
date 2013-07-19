<?php

class News_Comment_Admin_IndexAction extends downloadvarNewsBaseAction
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
		$cm = CommentQuery::create()->filterByAction(0)->find();
		$this->setAttribute('comment', $cm->toArray());
		foreach ($cm as $c)
		{
			$mat = MatterQuery::create()->useCommentQuery()->filterByMatterId($c->getMatterId())->endUse()->find();
			$this->setAttribute('matter', $mat->toArray());
		}
		return 'Success';
	}
	public function isSecure()
	{
		return 'true';
	}
}

?>