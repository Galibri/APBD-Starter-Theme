<?php
//social sharing script
function apbd_social_sharing_buttons($content) {
	global $post;
	if(is_singular() || is_home()){
	
		// Get current page URL 
		$apbdURL = urlencode(get_permalink());
 
		// Get current page title
		$apbdTitle = str_replace( ' ', '%20', get_the_title());
		
		// Get Post Thumbnail for pinterest
		$apbdThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
 
		// Construct sharing URL without using any script
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$apbdTitle.'&amp;url='.$apbdURL.'&amp;via=apbd';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$apbdURL;
		$googleURL = 'https://plus.google.com/share?url='.$apbdURL;
		$bufferURL = 'https://bufferapp.com/add?url='.$apbdURL.'&amp;text='.$apbdTitle;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$apbdURL.'&amp;title='.$apbdTitle;
		$whatsappURL = 'whatsapp://send?text='.$apbdTitle . ' ' . $apbdURL;
		
		// Based on popular demand added Pinterest too
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$apbdURL.'&amp;media='.$apbdThumbnail[0].'&amp;description='.$apbdTitle;
 
		// Add sharing button at the end of page/page content
        $apbdsoc = '';
		$apbdsoc .= '<div class="apbd-social">';
		$apbdsoc .= '<a class="apbd-link apbd-twitter" href="'. $twitterURL .'" target="_blank">Twitter</a>';
		$apbdsoc .= '<a class="apbd-link apbd-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
		$apbdsoc .= '<a class="apbd-link apbd-whatsapp" href="'.$whatsappURL.'" target="_blank">WhatsApp</a>';
		$apbdsoc .= '<a class="apbd-link apbd-googleplus" href="'.$googleURL.'" target="_blank">Google+</a>';
		$apbdsoc .= '<a class="apbd-link apbd-buffer" href="'.$bufferURL.'" target="_blank">Buffer</a>';
		$apbdsoc .= '<a class="apbd-link apbd-linkedin" href="'.$linkedInURL.'" target="_blank">LinkedIn</a>';
		$apbdsoc .= '<a class="apbd-link apbd-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank">Pin It</a>';
		$apbdsoc .= '</div>';
		
		return $apbdsoc.$content;
	}else{
		// if not a post/page then don't include sharing button
		return $apbdsoc.$content;
	}
};
add_shortcode( 'apbd_social_share', 'apbd_social_sharing_buttons');