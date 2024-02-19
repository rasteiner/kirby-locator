<?php

use Kirby\Content\Content;

return [
	'toLocation' => function($field) {
        return new Content($field->yaml(), $field->parent(), true);
	},
];
