<?php
function the_excerpt_fine( $more_link_text = null, $strip_teaser = false) {
	$content = get_the_content( $more_link_text, $strip_teaser );
	$content = mb_substr($content , 0 , 150);
	/**
	 * Filter the post content.
	 *
	 * @since 0.71
	 *
	 * @param string $content Content of the current post.
	*/
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	echo $content;
}
?>