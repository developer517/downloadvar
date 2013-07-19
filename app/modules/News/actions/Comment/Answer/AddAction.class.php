<?php

class News_Comment_Answer_AddAction extends downloadvarNewsBaseAction
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
		$cm = CommentQuery::create()->findById($id);
		$this->setAttribute('comment', $cm->toArray());
		return 'Input';
	}
public function executeWrite(AgaviWebRequestDataHolder $rd)
	{
		$shamsi = new jDateTime();
		$id = $rd->getParameter('id');
		$desc = $rd->getParameter('desc');
		$obj = new Gap();
		$obj->setDesc($desc);
		$obj->setCommentId($id);
		$obj->setDate($shamsi->date('d M Y',time()));
		$obj->save();
		$object = CommentQuery::create()->filterById($id)
		->update(
		array(
		'Action' => 1
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