<?php

namespace App\Services;

use App\Comment;
use App\Article;
use Illuminate\Support\Facades\Auth;

class BlogService
{
    public function storeArticle(Array $request)
    {
        return Article::forceCreate([
            'user_id' => Auth::id(),
            'subject' => $request['subject'],
            'content' => $request['content'],
        ]);
    }

    public function storeComment(Array $request)
    {
        return Comment::forceCreate([
            'article_id' => $request['article_id'],
            'name' => $request['name'],
            'comment' => $request['comment'],
        ]);
    }
}