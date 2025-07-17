<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Home extends Component
{
    public $berita = [];
    public $cuaca;

    public function mount()
    {
        $this->fetchBerita();
        $this->getCuaca();
    }

    public function fetchBerita()
    {
        try {
            $response = Http::get('https://api-berita.kemenkeu.go.id/gpr-news/berita?offset=0&limit=5');

            if ($response->successful()) {
                $this->berita = $response->json()['data'] ?? [];
            }
        } catch (\Exception $e) {
            // Bisa logging atau kasih fallback
            $this->berita = [];
        }
    }

    public function getCuaca()
    {
        $apiKey = env('OPENWEATHER_API_KEY');
        $city = 'Tangerang Selatan';
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric',
            'lang' => 'id' // Bahasa Indonesia
        ]);

        if ($response->successful()) {
            $this->cuaca = $response->json();
        } else {
            $this->cuaca = null;
        }
    }

    public function render()
    {
        return view('livewire.home')->layout('layouts.app'); 
    }
}
