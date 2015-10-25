<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

class Post extends Job implements SelfHandling
{
    protected $slug;
    
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    public function handle()
    {
        $post = \Xadmin\Models\Post::where('slug', $this->slug)->first();

        if(!$post) return redirect()->route('front.error-404');

        return view('property', compact('post'));
    }
}
