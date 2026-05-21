<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;
use App\Models\Post;
use App\Models\Hotel;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate separate sitemaps for Main site, Blog, and Hotels';

    public function handle()
    {
        $this->generateMainSitemap();
        $this->generateBlogSitemap();
        $this->generateHotelsSitemap();
        $this->generateSitemapIndex();

        $this->info('Sitemaps generated successfully.');
    }

    protected function generateMainSitemap()
    {
        $sitemap = Sitemap::create();

        $routes = [
            // English
            '/',
            '/punta-cana-airport-transfers',
            '/santo-domingo-airport-transfers',
            '/transportation-price-punta-cana',
            '/how-to-get-to-punta-cana',
            '/punta-cana-airport-to-bavaro',
            '/punta-cana-airport-to-cap-cana',
            '/punta-cana-airport-to-uvero-alto',
            '/punta-cana-airport-to-bayahibe',
            '/punta-cana-airport-to-la-romana',
            '/destinations',
            '/transfers-to-bavaro',
            '/transfers-to-cap-cana',
            '/transfers-to-uvero-alto',
            '/transfers-to-bayahibe',
            '/contact',
            '/faq',
            '/fleet',
            '/terms-and-conditions',
            '/privacy',

            // Spanish
            '/es',
            '/es/traslados-aeropuerto-punta-cana',
            '/es/traslados-aeropuerto-santo-domingo',
            '/es/precio-traslado-punta-cana',
            '/es/como-llegar-a-punta-cana',
            '/es/aeropuerto-punta-cana-a-bavaro',
            '/es/aeropuerto-punta-cana-a-cap-cana',
            '/es/aeropuerto-punta-cana-a-uvero-alto',
            '/es/aeropuerto-punta-cana-a-bayahibe',
            '/es/aeropuerto-punta-cana-a-la-romana',
            '/es/destinos',
            '/es/traslados-a-bavaro',
            '/es/traslados-a-cap-cana',
            '/es/traslados-a-uvero-alto',
            '/es/traslados-a-bayahibe',
            '/es/contacto',
            '/es/preguntas-frecuentes',
            '/es/flota',
            '/es/terminos-y-condiciones',
            '/es/privacidad',
        ];

        foreach ($routes as $route) {
            $priority = ($route === '/' || $route === '/es') ? 1.0 : 0.8;
            $sitemap->add(Url::create($route)->setPriority($priority));
        }

        $sitemap->writeToFile(public_path('sitemap-main.xml'));
    }

    protected function generateBlogSitemap()
    {
        $sitemap = Sitemap::create();

        // Blog Indexes
        $sitemap->add(Url::create('/blog')->setPriority(0.9));
        $sitemap->add(Url::create('/es/blog')->setPriority(0.9));

        // Blog Posts
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

        $sitemap->writeToFile(public_path('sitemap-blog.xml'));
    }

    protected function generateHotelsSitemap()
    {
        $sitemap = Sitemap::create();

        // Hotel Indexes
        $sitemap->add(Url::create('/hotels')->setPriority(0.9));
        $sitemap->add(Url::create('/es/hoteles')->setPriority(0.9));

        // Individual Hotels
        Hotel::where('is_published', true)->get()->each(function ($hotel) use ($sitemap) {
            $url = $hotel->language === 'es'
                ? '/es/hoteles/' . ltrim($hotel->slug, '/')
                : '/hotels/' . ltrim($hotel->slug, '/');

            $sitemap->add(
                Url::create($url)
                    ->setLastModificationDate($hotel->updated_at)
                    ->setPriority(0.8)
            );
        });

        $sitemap->writeToFile(public_path('sitemap-hotels.xml'));
    }

    protected function generateSitemapIndex()
    {
        SitemapIndex::create()
            ->add('/sitemap-main.xml')
            ->add('/sitemap-blog.xml')
            ->add('/sitemap-hotels.xml')
            ->writeToFile(public_path('sitemap.xml'));
    }
}