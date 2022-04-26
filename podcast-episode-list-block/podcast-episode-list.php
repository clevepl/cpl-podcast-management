<?php
/**
 * Plugin Name:       Podcast Episode List
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       podcast-episode-list
 *
 * @package           cpl
 */

namespace cpl\podcast_management;

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function cpl_podcast_episode_list_block_init() {
	register_block_type( __DIR__ . '/build',
    	array(
        	'render_callback' => __NAMESPACE__ . '\render_episode_list',
    	)
	);
}
add_action( 'init', __NAMESPACE__ .  '\cpl_podcast_episode_list_block_init' );


function render_episode_list( $block_attributes, $content ) {
	// RECS FROM 10UP https://10up.github.io/Engineering-Best-Practices/php/#namespacing
	$args = array(
		'ignore_sticky_posts'    => 1,
		'nopaging'               => true,
		'no_found_rows'          => true,
		'post_status'            => array( 'publish' ),
		'post_type'              => array( 'podcast_episode' ),
		'posts_per_page'         => 5,
		'update_post_term_cache' => false,
	);

	// The Query
	$episode_list_query = new \WP_Query( $args );

	if ( $episode_list_query->have_posts() ) {
		$teh_html .= '<ul>';
	}
	while ( $episode_list_query->have_posts() ) {
		$episode_list_query->the_post();
		$post_id   = get_the_ID();
		$teh_html .= sprintf(
			'<li><a href="%1$s">%2$s</a>',
			esc_url( get_permalink( $post_id ) ),
			esc_html( get_the_title( $post_id ) ),
			'</li>'
		);
	}
	$teh_html .= '</ul>';
		return $teh_html;

}
