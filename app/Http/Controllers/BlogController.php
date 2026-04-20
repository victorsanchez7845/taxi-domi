<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Traits\SeoTrait;
use App\Traits\GeneralTrait;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    use SeoTrait, GeneralTrait;
    public $seo = [];

    public function index($locale = null)
    {
        if ($locale && in_array($locale, ['es'])) {
            App::setLocale($locale);
        }

        $this->seoData("blog-index");

        $posts = Post::where('status', true)
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . __('link.home'),
            "name" => ((app()->getLocale() == "es") ? 'Inicio' : 'Home')
        ];
        $breadcrumbs[2] = [
            "name" => 'Blog'
        ];

        return view('blog.index', [
            'seo' => $this->seo,
            'posts' => $posts,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    public function show($param1, $param2 = null)
    {
        $locale = app()->getLocale();
        $slug = $param1;

        if (in_array($param1, ['es'])) {
            $locale = $param1;
            $slug = $param2;
            App::setLocale($locale);
        }

        $post = Post::where('slug', $slug)
            ->where('status', true)
            ->where('published_at', '<=', now())
            ->firstOrFail();

        $this->seoData("blog-post");

        $title = ($locale == 'es') ? $post->title_es : $post->title_en;
        $this->seo['meta']['title'] = GeneralTrait::rep($this->seo['meta']['title'], ['$title' => $title]);

        $this->seo['alternate']['es'] = "/es/blog/" . $post->slug;
        $this->seo['alternate']['en'] = "/blog/" . $post->slug;

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . __('link.home'),
            "name" => (($locale == "es") ? 'Inicio' : 'Home')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url') . (($locale == "es") ? '/es/blog' : '/blog'),
            "name" => 'Blog'
        ];
        $breadcrumbs[3] = [
            "name" => $title
        ];

        return view('blog.show', [
            'seo' => $this->seo,
            'post' => $post,
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
