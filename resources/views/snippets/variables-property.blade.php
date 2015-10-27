<?php 
$title = _postTitle( $post );
$address = _postMeta( $post->id, 'address' );
$area = _postMeta($post->id, 'area');
$garage = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Garage']);
$beds = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Beds']);
$baths = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Baths']);
$price = _money( _postMeta( $post->id, 'price' ) );
$url = _postPermaLink( $post );
$excerpt = _postExcerpt( $post, 250 ).'...';
$content = _postContent( $post );
$featureImage = _postFeatureImage( $post );
$featureImageSource = _postFeatureImageSource( $post );
?>
