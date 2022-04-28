<?php

namespace cpl\podcast_management;


function cpl_register_block_patterns() {
	register_block_pattern(
		'cpl-podcast-management/default-layout',
		array(
			'title'       => __( 'Podcast Episode Pattern', 'cpl-podcast-management' ),
			'description' => _x( 'contains several blocks for the podcast template', 'Block pattern description', 'cpl-podcast-management' ),
			'content'     => '<!-- wp:html /-->

		<!-- wp:heading -->
		<h2>Find us on:</h2>
		<!-- /wp:heading -->

		<!-- wp:secondline-themes/podcast-subscribe-button {"secondline_psb_select_type":"icons","secondline_psb_repeat_subscribe":[{"secondline_psb_subscribe_platform":"RSS","secondline_psb_subscribe_url":"https://feed.podbean.com/ohiocenterforthebook/feed.xml","secondline_psb_custom_link_label":"sample"},{"secondline_psb_subscribe_platform":"Apple-Podcasts","secondline_psb_subscribe_url":"https://podcasts.apple.com/us/podcast/page-count/id1618979308","secondline_psb_custom_link_label":"label"},{"secondline_psb_subscribe_platform":"Amazon-Music","secondline_psb_subscribe_url":"https://music.amazon.com/podcasts/3713e537-b78c-4625-a05b-319e8c896262","secondline_psb_custom_link_label":"label"},{"secondline_psb_subscribe_platform":"Google-Podcasts","secondline_psb_subscribe_url":"https://podcasts.google.com/feed/aHR0cHM6Ly9mZWVkLnBvZGJlYW4uY29tL29oaW9jZW50ZXJmb3J0aGVib29rL2ZlZWQueG1s","secondline_psb_custom_link_label":"label"},{"secondline_psb_subscribe_platform":"Spotify","secondline_psb_subscribe_url":"https://open.spotify.com/show/0bFJEHoiQdSotBPgP4Vqt7","secondline_psb_custom_link_label":"label"}]} /-->

		<!-- wp:heading -->
		<h2>Show Notes</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Welcome to Page Count, a new podcast presented by the Ohio Center for the Book at Cleveland Public Library. This podcast celebrates authors, illustrators, librarians, booksellers, literary advocates, and readers in and from the state of Ohio.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>Page Count launches April 26 and will offer a new episode every other Tuesday.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>Guests quoted in this trailer:</p>
		<!-- /wp:paragraph -->

		<!-- wp:list -->
		<ul><li>First person</li><li></li></ul>
		<!-- /wp:list -->

		<!-- wp:paragraph -->
		<p>Example paragraph</p>
		<!-- /wp:paragraph -->

		<!-- wp:pb/accordion-item {"uuid":116603} -->
		<div class="wp-block-pb-accordion-item c-accordion__item js-accordion-item no-js" data-initially-open="false" data-click-to-close="true" data-auto-close="true" data-scroll="false" data-scroll-offset="0"><h2 id="at-116603" class="c-accordion__title js-accordion-controller" role="button">Transcript</h2><div id="ac-116603" class="c-accordion__content"><!-- wp:preformatted -->
		<pre class="wp-block-preformatted">Copy transcript inside of here
				</pre>
		<!-- /wp:preformatted --></div></div>
		<!-- /wp:pb/accordion-item -->

		<!-- wp:paragraph -->
		<p>Please subscribe, spread the word, and tune in April 26 for the launch of Page Count. Get in touch by <a href="mailto:ohiocenterforthebook@cpl.org">emailing us</a> or finding us on <a href="https://twitter.com/cplocfb">Twitter @cplocfb</a> or on <a href="https://www.facebook.com/ohiocenterforthebook">Facebook</a>. Learn more about <a href="https://cpl.org">Cleveland Public Library</a>.</p>
		<!-- /wp:paragraph -->',
		)
	);
}
