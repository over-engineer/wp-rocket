<?php

return [
	'shouldDoNothingWhenRucssDisabled' => [
		'config' => [
			'remove_unused_css' => false,
			'url' => 'http://example.org/category/test/',
			'wp_error' => false,
			'term_id' => 1,
		],
	],
	'shouldDoNothingWhenWPError' => [
		'config' => [
			'remove_unused_css' => true,
			'url' => 'http://example.org/category/test/',
			'wp_error' => true,
			'term_id' => 1,
		],
	],
	'shouldDelete' => [
		'config' => [
			'remove_unused_css' => true,
			'url' => 'http://example.org/category/test/',
			'wp_error' => false,
			'term_id' => 1,
		],
	],
];
