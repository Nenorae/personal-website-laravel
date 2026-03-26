<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Navbar extends Component
{
    /**
     * Daftar link navigasi.
     * Didefinisikan di sini agar terpusat dan mudah dikelola.
     */
    public array $navLinks = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Inisialisasi link navigasi di constructor
        $this->navLinks = [
            ['name' => 'Home', 'route' => '/'],
            ['name' => 'About', 'route' => '/about'],
            ['name' => 'Project', 'route' => '/project'],
            ['name' => 'Contact', 'route' => '/contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.navbar');
    }
}
