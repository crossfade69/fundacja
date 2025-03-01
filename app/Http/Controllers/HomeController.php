<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'image' => asset('https://fundacjaglosmlodych.org/images/19.png'),
                'title' => 'Wśród celów statutowych Fundacji znajdują się:',
                'items' => [
                    'Działania i inicjatywy wspierające rozwój innowacyjności.',
                    'Popieranie i realizacja wszelkich inicjatyw kulturalnych, edukacyjnych i społecznych.',
                ],
            ],
            [
                'image' => asset('https://fundacjaglosmlodych.org/images/20.png'),
                'title' => 'Promocja',
                'items' => [
                    'Zachęcanie do rozwoju, pogłębiania swojej wiedzy i podnoszenia swoich kwalifikacji.',
                    'Popularyzacja polskiej kultury i sztuki za granicą.',
                ],
            ],
            [
                'image' => asset('https://fundacjaglosmlodych.org/images/21.png'),
                'title' => 'Wsparcie',
                'items' => [
                    'Integrowanie środowisk twórczych.',
                    'Wspieranie projektów proekologicznych oraz propagowanie idei ochrony środowiska.',
                    'Wspieranie transferu polskich osiągnięć naukowych do praktyki gospodarczej.',
                ],
            ],
            [
                'image' => asset('https://fundacjaglosmlodych.org/images/22.png'),
                'title' => 'Rozwój',
                'items' => [
                    'Działalność wspomagająca rozwój gospodarczy, w tym rozwój przedsiębiorczości.',
                    'Działania na rzecz realizacji projektów badawczo-rozwojowych.',
                    'Działalność wspomagająca rozwój wspólnot i społeczności lokalnych.',
                ],
            ],
            [
                'image' => asset('https://fundacjaglosmlodych.org/images/23.png'),
                'title' => 'Pomoc',
                'items' => [
                    'Pomoc edukacyjna dla dzieci niewidomych, słabowidzących i niepełnosprawnych.',
                ],
            ],
        ];

    
        $aktualnosci = Post::where('category', 'aktualnosci')
        ->orderBy('created_at', 'desc')
        ->take(3)->get();

        $projekty = Post::where('category', 'projekty')
            ->orderBy('created_at', 'desc')
            ->take(3)->get();

        return view('home', compact('slides', 'aktualnosci', 'projekty'));
    }

    
}
