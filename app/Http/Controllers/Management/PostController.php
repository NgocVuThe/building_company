<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Repositories\ManagementRepository\PostInterface;

class PostController extends Controller
{
    protected $posts;

    public function __construct(PostInterface $posts)
    {
        $this->posts = $posts;
    }

    public function index()
    {
        $posts = $this->posts->getAll();
        return view('management.post_page.post', compact('posts'));        
    }

    public function edit(Request $request)
    {
        $post_id = $request->route('post_id');
        $posts = $this->posts->getById($post_id);
        return view('management.post_page.edit', compact('posts', 'post_id'));
    }
}
