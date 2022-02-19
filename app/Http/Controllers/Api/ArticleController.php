<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Article::all();
    }

    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function show(Article $article): Article
    {
        return $article;
    }

    public function update(Request $request, Article $article): \Illuminate\Http\JsonResponse
    {
        $article->update($request->all());
        return response()->json($article, 200);
    }

    public function destroy(Article $article): \Illuminate\Http\JsonResponse
    {
        $article->delete();
        return response()->json(null, 204);
    }
}
