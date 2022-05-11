<?php 
$sections = [
        [
            'title' => "DC Comics",
            'links' => [
                [
                    'href'=> "#",
                    'text'=> "Characters",
                ],
                [
                    'href'=> "#",
                    'text'=> "Comics",
                ],
                [
                    'href'=> "#",
                    'text'=> "Movies",
                ],
                [
                    'href'=> "#",
                    'text'=> "TV",
                ],
                [
                    'href'=> "#",
                    'text'=> "Games",
                ],
                [
                    'href'=> "#",
                    'text'=> "Videos",
                ],
                [
                    'href'=> "#",
                    'text'=> "News",
                ],
            ]
        ],
        [
            'title' => "Shop",
            'links' => [
                [
                    'href'=> "#",
                    'text'=> "Shop DC",
                ],
                [
                    'href'=> "#",
                    'text'=> "Shop DC Colletibles",
                ],
            ]
        ],
        [
            'title' => "DC",
            'links' => [
                [
                    'href'=> "#",
                    'text'=> "Term of use",
                ],
                [
                    'href'=> "#",
                    'text'=> "Privacy policy (New)",
                ],
                [
                    'href'=> "#",
                    'text'=> "Ad Choices",
                ],
                [
                    'href'=> "#",
                    'text'=> "Advertising",
                ],
                [
                    'href'=> "#",
                    'text'=> "Jobs",
                ],
                [
                    'href'=> "#",
                    'text'=> "Subscriptions",
                ],
                [
                    'href'=> "#",
                    'text'=> "Talent Workshops",
                ],
                [
                    'href'=> "#",
                    'text'=> "CPSC Certifications",
                ],
                [
                    'href'=> "#",
                    'text'=> "Ratings",
                ],
                [
                    'href'=> "#",
                    'text'=> "Shop Help",
                ],
                [
                    'href'=> "#",
                    'text'=> "Contact Us",
                ],
            ]
        ],
        [
          'title' => "Sites",
          'links' => [
            [
                'href'=> "#",
                'text'=> "DC",
            ],
            [
                'href'=> "#",
                'text'=> "MAD Magazine",
            ],
            [
                'href'=> "#",
                'text'=> "DC Kids",
            ],
            [
                'href'=> "#",
                'text'=> "DC Universe",
            ],
            [
                'href'=> "#",
                'text'=> "DC Power Visa",
            ]
          ],
        ],
      ]
?>

<footer>
    <div class="container">
        <div class="row h-100">
            <div class="col-6 d-flex flex-column flex-wrap h-100">
                @foreach ($sections as $item)
                    <section>
                        <h1 class="text-white">{{$item['title']}}</h1>
                        <ul>
                            @foreach ($item['links'] as $link)
                                <ul>
                                    <li><a href="{{$link['href']}}" class="text-secondary">{{$link['text']}}</a></li>
                                </ul>
                            @endforeach
                        </ul>
                    </section>
                @endforeach
            </div>
            <div class="col-6 h-100">
                <img src="{{asset('images/dc-logo-bg.png')}}" alt="logo dc" class="img-fluid h-100" />
            </div>
        </div>
    </div>
</footer>