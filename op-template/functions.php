<?php

function opTemplate() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'opTemplate');

