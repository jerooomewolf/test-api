<?php

namespace App\Http\Controllers;

use App\Article;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function storeArticle(Request $request)
    {
        return $this->blogService->storeArticle($request->all());
    }

    public function getArticles()
    {
        return Article::with('comments')->get();
    }

    public function storeComment(Request $request)
    {
        return $this->blogService->storeComment($request->all());
    }
}
