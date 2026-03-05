<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;

class PortfolioController extends Controller
{
    /**
     * Pass the full portfolio config to every view.
     */
    private function portfolioData(): array
    {
        return Config::get('portfolio', []);
    }

    public function biodata()
    {
        return view('pages.biodata', ['data' => $this->portfolioData()]);
    }

    public function education()
    {
        return view('pages.education', ['data' => $this->portfolioData()]);
    }

    public function projects()
    {
        return view('pages.projects', ['data' => $this->portfolioData()]);
    }
}
