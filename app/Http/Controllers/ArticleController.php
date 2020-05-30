<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Http\Resources\Article as ArticleResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): AnonymousResourceCollection
    {
        // Get articles
        $articles = Article::paginate(15);

        // Return collection of articles as a resource
        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return ArticleResource|null
     */
    public function store(Request $request)
    {
        $article = $request->isMethod('put') ? Article::findOrFail($request->article_id) : new Article;

        $article->id = $request->input('article_id');
        $article->title = $request->input('title');
        $article->body = $request->input('body');

        if ($article->save()) {
            return new ArticleResource($article);
        }

        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return ArticleResource
     */
    public function show($id): ArticleResource
    {
        // Get article
        $article = Article::findOrFail($id);

        // Return single article as a resource
        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return ArticleResource|null
     */
    public function destroy($id)
    {
        // Get article
        $article = Article::findOrFail($id);

        if ($article->delete()) {
            return new ArticleResource($article);
        }

        return null;
    }
}
