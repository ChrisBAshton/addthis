<?php

/**
 * Add your custom post types here.
 * @todo - there should be a way of generating this automatically through the WordPress API. See https://codex.wordpress.org/Function_Reference/get_post_types
 */
$globalCustomPosts = array(
    array(
        'fieldName'    => 'competition_entry',
        'displayName'  => 'Competition entries',
        'explanation'  => 'VoiceCouncil only.',
    ),
    array(
        'fieldName'    => 'app_review',
        'displayName'  => 'App reviews',
        'explanation'  => 'VoiceCouncil only.',
    )
);