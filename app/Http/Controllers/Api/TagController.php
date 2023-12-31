<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tag;
use App\Http\Resources\TagResource;


class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::with('recipes')->get());
    }

    public function show(Tag $tag)
    {
        return new TagResource($tag->load('recipes'));
    }
}
