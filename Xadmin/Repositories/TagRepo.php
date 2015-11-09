<?php 

namespace Xadmin\Repositories;
use Xadmin\Models\Tag;
use Xadmin\Models\PostTag;

class TagRepo {
	public function __construct(){

	}

	// Get total posts of a category.
	public function getTotalCategoryPosts( $tagId ){
		return $this->catPosts( $tagId )->count();
	}

	// Get all posts of a category.
	public function getCategoryPosts(){
		return $this->catPosts( $tagId )->get();
	}

	// Return all parent categories
	public function parentCategories(){
		$parentCategories = Tag::where('parent_id', 0)->where('type', 'category')->get();
		foreach ($parentCategories as $category) {
			$subCategories = $this->subCategories( $category->id );
			$category->subCategories = $subCategories; // insert sub categories.
		}

		return $parentCategories;
	}

	// Collect all children categories of a specific parent
	public function subCategories( $tagId ){
		return Tag::where('parent_id', $tagId)->where('type', 'category')->get();
	}

	/*--- PRIVATE METHODS ---*/

	// Return post builder of a specific category
	private function catPosts( $tagId ){
		return PostTag::where('type', 'category')->where('tag_id', $tagId);
	}
}