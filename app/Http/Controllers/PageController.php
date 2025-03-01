<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function show($slug)
    {
        switch ($slug) {
            case 'o-fundacji':
                return view('about');
            case 'statut-fundacji':
                return view('statut');
            case 'zarzad-fundacji':
                return view('zarzad');
            case 'cele-i-zasady-dzialania':
                return view('cele');

            case 'sprawozdania':
                $posts = Post::where('category', 'sprawozdania')
                    ->orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();
                return view('sprawozdania', compact('posts'));
            case 'praktyki':
                return view('praktyki');
            case 'dzialalnosc-gospodarcza':
                    return view('dzialalnosc');
            
            case 'praktyki-wschodoznawstwo':
                return view('wschodoznawstwo');
            case 'praktyki-dziennikarz':
                return view('dziennikarz');
            case 'praktyki-stosunki-miedzynarodowe':
                return view('miedzynarod');
            case 'praktyki-tlumacz':
                return view('tlumacz');
            case 'praktyki-europeistyka':
                return view('euro');
            case 'praktyki-programista':
                return view('prog');
            case 'praktyki-informatyk':
                return view('informatyk');
            case 'praktyki-marketing-internetowy':
                return view('marketint');
            case 'praktyki-grafik':
                return view('grafik');
            case 'praktyki-seo-copywriter':
                return view('SEOcopy');
            case 'praktyki-copywriter':
                return view('copywrite');
            case 'praktyki-specjalista-ds-social-media':
                return view('socmedia');
            case 'praktyki-marketing-polityczny':
                return view('marketpol');
            case 'praktyki-specjalista-ds-hr':
                return view('hr');
            case 'praktyki-zarzadzanie':
                return view('zarzadzanie');
            case 'praktyki-administracja':
                return view('administracja');
            case 'praktyki-redaktor':
                return view('redaktor');
            case 'praktyki-prawo':
                return view('prawo');
            case 'praktyki-ksiegowosc':
                return view('ksieg');
            
            
            case 'projekty':
                $posts = Post::where('category', 'projekty')
                    ->orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();
                return view('projekty', compact('posts'));
            case 'aktualnosci':
                $posts = Post::where('category', 'aktualności')
                    ->orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();
                return view('aktualnosci', compact('posts'));
            case 'galeria':
                return view('galeria');
            case 'kontakt':
                return view('kontakt');
            case 'opinie':
                return view('opinie');

            case 'posts':
                return view('posts');
            
           

            default:
                abort(404);
        }
    }
}
