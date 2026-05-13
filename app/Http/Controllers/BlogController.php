<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
public function index()
{
    $allPosts = Post::where('is_published', true)
        ->where('language', 'en')
        ->latest('published_at')
        ->latest('id')
        ->get();

    $heroPost = $allPosts->get(0);
    $featuredPosts = $allPosts->slice(1, 4)->values();   // posts 2 al 5
    $gridPosts = $allPosts->slice(5)->values();          // del 6 en adelante

    $link = url('/es/blog');

    $seo = [
        'meta' => [
            'title' => 'Blog | Taxi Dominicana',
            'description' => 'Travel tips and transportation information.',
            'keywords' => 'blog, taxi dominicana, airport cab',
        ],
        'nofollow' => false,
        'alternate' => [
            'es' => '/es/blog',
        ],
    ];

    $breadcrumbs = [];
    $breadcrumbs[1] = [
        "URL" => config('app.url'),
        "name" => "Home"
    ];
    $breadcrumbs[2] = [
        "name" => "Blog"
    ];

    return view('blog.index', compact(
        'heroPost',
        'featuredPosts',
        'gridPosts',
        'link',
        'seo',
        'breadcrumbs'
    ));
}

public function indexEs()
{
    $allPosts = Post::where('is_published', true)
        ->where('language', 'es')
        ->latest('published_at')
        ->latest('id')
        ->get();

    $heroPost = $allPosts->get(0);
    $featuredPosts = $allPosts->slice(1, 4)->values();
    $gridPosts = $allPosts->slice(5)->values();

    $link = url('/blog');

    $seo = [
        'meta' => [
            'title' => 'Blog | Taxi Dominicana',
            'description' => 'Consejos de viaje e información de transportación.',
            'keywords' => 'blog, taxi dominicana, airport cab',
        ],
        'nofollow' => false,
        'alternate' => [
            'en' => '/blog',
        ],
    ];

    $breadcrumbs = [];
    $breadcrumbs[1] = [
        "URL" => config('app.url') . '/es',
        "name" => "Inicio"
    ];
    $breadcrumbs[2] = [
        "name" => "Blog"
    ];

    return view('blog.index-es', compact(
        'heroPost',
        'featuredPosts',
        'gridPosts',
        'link',
        'seo',
        'breadcrumbs'
    ));
}

    public function show($slug)
    {
        $post = Post::where('slug', ltrim($slug, '/'))
            ->where('language', 'en')
            ->where('is_published', true)
            ->firstOrFail();

        $translation = null;
        $link = url('/es/blog');

        if ($post->group_id) {
            $translation = Post::where('group_id', $post->group_id)
                ->where('language', 'es')
                ->where('is_published', true)
                ->first();

            if ($translation) {
                $link = route('blog.show.es', ltrim($translation->slug, '/'));
            }
        }

        $seo = [
            'meta' => [
                'title' => $post->meta_title ?: $post->title,
                'description' => $post->meta_description ?: ($post->excerpt ?? ''),
                'keywords' => 'blog, taxi dominicana, airport cab',
            ],
            'nofollow' => false,
            'alternate' => $translation ? [
                'es' => '/es/blog/' . ltrim($translation->slug, '/'),
            ] : [],
        ];

$breadcrumbs = [];
$breadcrumbs[1] = [
    "URL" => config('app.url'),
    "name" => "Home"
];
$breadcrumbs[2] = [
    "URL" => config('app.url') . '/blog',
    "name" => "Blog"
];
$breadcrumbs[3] = [
    "name" => $post->title
];

        $relatedPosts = Post::where('is_published', true)
    ->where('language', 'en')
    ->where('id', '!=', $post->id)
    ->latest()
    ->take(3)
    ->get();

        return view('blog.show', compact('post', 'translation', 'link', 'seo', 'breadcrumbs', 'relatedPosts'));
    }

    public function showEs($slug)
{
    $post = Post::where('slug', ltrim($slug, '/'))
        ->where('language', 'es')
        ->where('is_published', true)
        ->firstOrFail();

    // Traducción (EN)
    $translation = null;
    $link = url('/blog');

    if ($post->group_id) {
        $translation = Post::where('group_id', $post->group_id)
            ->where('language', 'en')
            ->where('is_published', true)
            ->first();

        if ($translation) {
            $link = route('blog.show', ltrim($translation->slug, '/'));
        }
    }

    // 🔥 RELATED POSTS (ES)
    $relatedPosts = Post::where('is_published', true)
        ->where('language', 'es')
        ->where('id', '!=', $post->id)
        ->latest()
        ->take(3)
        ->get();

    // 🔥 BREADCRUMBS (ES)
    $breadcrumbs = [];
    $breadcrumbs[1] = [
        "URL" => config('app.url') . '/es',
        "name" => "Inicio"
    ];
    $breadcrumbs[2] = [
        "URL" => config('app.url') . '/es/blog',
        "name" => "Blog"
    ];
    $breadcrumbs[3] = [
        "name" => $post->title
    ];

    // 🔥 SEO (ES)
    $seo = [
        'meta' => [
            'title' => $post->meta_title ?: $post->title,
            'description' => $post->meta_description ?: ($post->excerpt ?? ''),
            'keywords' => 'blog, taxi dominicana, airport cab',
        ],
        'nofollow' => false,
        'alternate' => $translation ? [
            'en' => '/blog/' . ltrim($translation->slug, '/'),
        ] : [],
    ];

    return view('blog.show-es', compact(
        'post',
        'translation',
        'link',
        'seo',
        'breadcrumbs',
        'relatedPosts'
    ));
}
}