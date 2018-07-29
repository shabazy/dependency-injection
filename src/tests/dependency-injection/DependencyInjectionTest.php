<?php

namespace DesignPatternTest\DependencyInjection;

use DesignPattern\DependencyInjection\Feed;
use DesignPattern\DependencyInjection\TwitterFeed;
use DesignPattern\DependencyInjection\FacebookFeed;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase {

	public function testFacebookSeed() {
		$feed = (new Feed(new FacebookFeed()));
		$data = $feed->get();
		$this->assertNotEmpty($data);
		$this->assertInternalType('array', $data);
		$this->assertEquals('likes', $data[0]);
	}

	public function testTwitterSeed() {
		$feed = (new Feed(new TwitterFeed()));
		$data = $feed->get();
		$this->assertInternalType('array', $data);
		$this->assertEmpty($data);
	}
}