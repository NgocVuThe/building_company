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
}
