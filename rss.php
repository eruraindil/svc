<?php

class rss {
	
	public $name;
	public $url;
	public $items;
	
	function __construct($url) {
		$this->url = $url;
		$rawFeed = fetch_rss($url);
		
		$this->name = $rawFeed->channel['title'];
		$this->items = $rawFeed->items;
	}
	
	
}

?>
