<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $comics = Comic::all();

        return view('comics/index', compact('links', 'footerLinks', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

        return view('comics/create', compact('links', 'footerLinks'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();

        $newComic = new Comic();

        $newComic->title = $formData['title'];
        $newComic->description = $formData['description'];
        $newComic->thumb = $formData['thumb'];
        $newComic->price = $formData['price'];
        $newComic->series = $formData['series'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->type = $formData['type'];
        $newComic->artists = $formData['artists'];
        $newComic->writers = $formData['writers'];


        $newComic->save();


        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

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

        return view('comics/show', compact('comic', 'links','footerLinks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
