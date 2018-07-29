<?php

namespace DesignPattern\DependencyInjection;

class TwitterFeed implements FeedInterface {
	public function getMessages() {
		return [];
	}
}