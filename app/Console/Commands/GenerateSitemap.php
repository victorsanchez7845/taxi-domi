<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Sitemaps are now generated dynamically via routes.';

    public function handle()
    {
        $this->info('Sitemaps are now generated dynamically via routes.');
        $this->info('Visit /sitemap.xml to see the index.');
    }
}