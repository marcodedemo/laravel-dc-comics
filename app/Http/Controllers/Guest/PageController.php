<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{

    

    public function index(){

        $links = [

            'Charaters',
            'Comics',
            'Movies',
            'Tv',
            'Games',
            'Collectibles',
            'Videos',
            'Fans',
            'News',
            'Shop',
        
        ];
        
        $footerLinks = [
        
            [
        
                'title' => "dc comics",
                'links' =>[
                    "Charaters",
                    "Comics",
                    "Movies",
                    "TV",
                    "Games",
                    "Videos",
                    "News"
                ]
            ],
            [
        
                'title'=> "shop",
                'links' => [
                    "Shop DC",
                    "Shop DC Collectibles",
                    
                ]
            
            ],
            [
                'title'=>"DC",
                'links' => [
                    "Terms Of Use",
                    "Privacy policy(New)",
                    "Ad Choises",
                    "Advertising",
                    "Jobs",
                    "Subscriptions",
                    "Talent Workshops",
                    "CPSC Certificates",
                    "Ratings",
                    "Show Help",
                    "Contact Us",
        
        
                ]
            ],
            [
                'title'=>"Sites",
                'links' => [
                    "DC",
                    "MAD Magazine",
                    "DC Kids",
                    "DC Universe",
                    "DC Power Visa",
                ]
            ]
        ];

        $comics = config('comics');

        return view('home', compact('comics', 'links', 'footerLinks'));
    }
}
