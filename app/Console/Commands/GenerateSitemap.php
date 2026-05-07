<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap';

    public function handle()
    {
        $sitemap = Sitemap::create();

        // páginas base
        $sitemap->add(Url::create('/')->setPriority(1.0));
        $sitemap->add(Url::create('/blog')->setPriority(0.9));
        $sitemap->add(Url::create('/es/blog')->setPriority(0.9));

        // posts
        Post::where('is_published', true)->get()->each(function ($post) use ($sitemap) {
            $url = $post->language === 'es'
                ? '/es/blog/' . $post->slug
                : '/blog/' . $post->slug;

            $sitemap->add(
                Url::create($url)
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.8)
            );
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generado correctamente');
    }
}