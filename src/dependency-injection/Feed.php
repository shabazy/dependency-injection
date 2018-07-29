<?php

namespace DesignPattern\DependencyInjection;

class Feed {

	private $feed;

	public function __construct(FeedInterface $feed) {
		$this->feed = $feed;
	}

	public function get(){
		return $this->feed->getMessages();
	}
}