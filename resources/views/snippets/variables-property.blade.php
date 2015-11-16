<?php
$propertyStatusKey = _postMeta($post->id, 'property_status' );

$title = _postTitle( $post );
$propertyType = isset( _propertyStatuses()[ $propertyStatusKey ] ) ? _propertyStatuses()[ $propertyStatusKey ]  : "";
$address = _postMeta( $post->id, 'address' );
$area = _postMeta($post->id, 'area');
$country = _postMeta($post->id, 'country');
$garage = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Garage']);
$beds = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Beds']);
$baths = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Baths']);
$price = _money( _postMeta( $post->id, 'price' ) );
$url = _postPermaLink( $post );
$categoryName = 'Village Village Village';
$excerpt = _postExcerpt( $post, 250 ).'...';
$content = _postContent( $post );
$featureImage = _postFeatureImage( $post );
$featureImageSource = _postFeatureImageSource( $post );
$postCategories = _postCategories( $post );
?>
