<?php
namespace Languara\Controller;

class Languara extends Controller
{
	public function action_push()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_pull()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
