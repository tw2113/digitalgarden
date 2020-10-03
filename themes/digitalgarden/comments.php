<?php

wp_list_comments(
	[ 'callback' => 'digitalgarden\webmention_callback' ]
);