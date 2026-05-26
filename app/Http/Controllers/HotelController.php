<?php

namespace App\Http\Controllers;

use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::where('is_published', true)
            ->where('language', 'en')
            ->latest('id')
            ->paginate(16);

        $link = url('/es/hoteles');

        $seo = [
            'meta' => [
                'title' => 'Hotels in Dominican Republic | Taxi Dominicana',
                'description' => 'Discover the best hotels in Punta Cana, Santo Domingo, and across the Dominican Republic with Taxi Dominicana.',
                'keywords' => 'hotels dominican republic, punta cana hotels, santo domingo hotels',
            ],
            'nofollow' => false,
            'alternate' => [
                'es' => '/es/hoteles',
            ],
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url'),
            "name" => "Home"
        ];
        $breadcrumbs[2] = [
            "name" => "Hotels"
        ];

        return view('hotel.index', compact('hotels', 'link', 'seo', 'breadcrumbs'));
    }

    public function indexEs()
    {
        $hotels = Hotel::where('is_published', true)
            ->where('language', 'es')
            ->latest('id')
            ->paginate(16);

        $link = url('/hotels');

        $seo = [
            'meta' => [
                'title' => 'Hoteles en República Dominicana | Taxi Dominicana',
                'description' => 'Descubre los mejores hoteles en Punta Cana, Santo Domingo y toda República Dominicana con Taxi Dominicana.',
                'keywords' => 'hoteles republica dominicana, hoteles punta cana, hoteles santo domingo',
            ],
            'nofollow' => false,
            'alternate' => [
                'en' => '/hotels',
            ],
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . '/es',
            "name" => "Inicio"
        ];
        $breadcrumbs[2] = [
            "name" => "Hoteles"
        ];

        return view('hotel.index-es', compact('hotels', 'link', 'seo', 'breadcrumbs'));
    }

    public function show($slug)
    {
        $hotel = Hotel::where('slug', ltrim($slug, '/'))
            ->where('language', 'en')
            ->where('is_published', true)
            ->firstOrFail();

        $translation = null;
        $link = url('/es/hoteles');

        if ($hotel->group_id) {
            $translation = Hotel::where('group_id', $hotel->group_id)
                ->where('language', 'es')
                ->where('is_published', true)
                ->first();

            if ($translation) {
                $link = route('hotel.show.es', ltrim($translation->slug, '/'));
            }
        }

        $seo = [
            'meta' => [
                'title' => $hotel->meta_title ?: $hotel->title . ' | Taxi Dominicana',
                'description' => $hotel->meta_description ?: ($hotel->excerpt ?? ''),
                'keywords' => collect([
                    $hotel->title,
                    $hotel->tag,
                    'hotel',
                    'dominican republic',
                    'punta cana',
                ])->filter()->implode(', '),
            ],
            'nofollow' => false,
            'alternate' => $translation ? [
                'es' => '/es/hoteles/' . ltrim($translation->slug, '/'),
            ] : [],
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url'),
            "name" => "Home"
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url') . 'hotels',
            "name" => "Hotels"
        ];
        $breadcrumbs[3] = [
            "name" => $hotel->title
        ];

        $relatedHotels = Hotel::where('is_published', true)
            ->where('language', 'en')
            ->where('id', '!=', $hotel->id)
            ->latest()
            ->take(3)
            ->get();

        return view('hotel.show', compact(
            'hotel',
            'translation',
            'link',
            'seo',
            'breadcrumbs',
            'relatedHotels'
        ));
    }

    public function showEs($slug)
    {
        $hotel = Hotel::where('slug', ltrim($slug, '/'))
            ->where('language', 'es')
            ->where('is_published', true)
            ->firstOrFail();

        $translation = null;
        $link = url('/hotels');

        if ($hotel->group_id) {
            $translation = Hotel::where('group_id', $hotel->group_id)
                ->where('language', 'en')
                ->where('is_published', true)
                ->first();

            if ($translation) {
                $link = route('hotel.show', ltrim($translation->slug, '/'));
            }
        }

        $seo = [
            'meta' => [
                'title' => $hotel->meta_title ?: $hotel->title . ' | Taxi Dominicana',
                'description' => $hotel->meta_description ?: ($hotel->excerpt ?? ''),
                'keywords' => collect([
                    $hotel->title,
                    $hotel->tag,
                    'hotel',
                    'republica dominicana',
                    'punta cana',
                ])->filter()->implode(', '),
            ],
            'nofollow' => false,
            'alternate' => $translation ? [
                'en' => '/hotels/' . ltrim($translation->slug, '/'),
            ] : [],
        ];

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url') . 'es',
            "name" => "Inicio"
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url') . 'es/hoteles',
            "name" => "Hoteles"
        ];
        $breadcrumbs[3] = [
            "name" => $hotel->title
        ];

        $relatedHotels = Hotel::where('is_published', true)
            ->where('language', 'es')
            ->where('id', '!=', $hotel->id)
            ->latest()
            ->take(3)
            ->get();

        return view('hotel.show-es', compact(
            'hotel',
            'translation',
            'link',
            'seo',
            'breadcrumbs',
            'relatedHotels'
        ));
    }
}