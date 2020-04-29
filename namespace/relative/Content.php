<?php

namespace Foo;

use KosingKweekend\Blog\Post as Post;

class Content
{
	private $create;
	private $update;
	private $delete;

	public function __construct()
	{
		$this->create = new Post\Create();
		$this->update = new Post\Update();
		$this->delete = new Post\Delete();
	}
}

?>