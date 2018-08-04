<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name' => 'Lacaito-The May',
                'address' => ' Vatican City - Prati, Rome',
                'price' => 25,
                'overView' => 'Subway Access',
                'detail' => 'Featuring a terrace, Prati Flat provides accommodations in Rome with free WiFi and city views. The property is 700 yards from Castel Sant\'Angelo and 0.6 miles from Piazza del Popolo.',
                'images' => 'https://r-ec.bstatic.com/xdata/images/hotel/square200/108132530.jpg?k=0e4c3ba93c81bd9ab042303e31429bf1f9cdf2e3952d93f76a43bcbe4d67ab49&o='
            ],
            [
                'name' => 'Pantheon Luxury Apartments Opens in new window',
                'address' => 'Pantheon, Rome',
                'price' => 30,
                'overView' => 'Free WiFi is offered',
                'detail' => 'Located in Rome, Pantheon Luxury Apartments features accommodations 100 yards from Pantheon. Free WiFi is offered. The air-conditioned units have a fully equipped kitchen with an oven and a microwave....',
                'images' => 'https://r-ec.bstatic.com/xdata/images/hotel/square200/107430627.jpg?k=ed817d360b8b1d9243e955b4ed1a0d4a226d4109f97cffab3cead7b2dee6deaa&o='
            ],
            [
                'name' => 'Monti Apartments - My Extra Home',
                'address' => 'Rione Monti, Rome',
                'price' => 20,
                'overView' => 'Subway Access',
                'detail' => 'Located 656 feet from Via Nazionale, Monti Apartments - My Extra Home offers self-catering accommodations with free WiFi and a balcony. Roma Termini Train Station is 0.6 mi away.',
                'images' => 'https://q-ec.bstatic.com/xdata/images/hotel/square200/126504307.jpg?k=03dc2471917cfcbbfd9646c7a9c28fe8c5351409c60c75f4e5fef9d5fd5fd404&o='
            ],
            [
                'name' => 'Relais Rasella 47 Opens in new window',
                'address' => ' Trevi, Rome',
                'price' => 25,
                'overView' => 'Subway Access',
                'detail' => 'Located within a 3-minute walk of Piazza Barberini and a 3-minute walk of Quirinale Palace in Rome, Relais Rasella 47 provides accommodations with a kitchen. Free WiFi is featured.',
                'images' => 'https://r-ec.bstatic.com/xdata/images/hotel/square200/103973403.jpg?k=fa593229b45bf47d86ab99626d4b4812150c400951d8dc1438fc208a9f0e6534&o='
            ], [
                'name' => ' Amazing Piazza Venezia Suites Opens in new window  ',
                'address' => 'Pantheon, Rome',
                'price' => 25,
                'overView' => '150 m from center',
                'detail' => 'Featuring free WiFi, Amazing Piazza Venezia Suites is located in the center of Rome. Piazza Venezia is 213 feet from the property, while Piazza di Spagna is a 15-minute walk away.',
                'images' => 'https://r-ec.bstatic.com/xdata/images/hotel/square200/111938929.jpg?k=dd528f4a918316878a84ddf30b75eff9b5388a5ecdd3ac2bb3dc26dc301b61bc&o='
            ],
            [
                'name' => ' Colosseo Gardens - My Extra Home',
                'address' => ' Rione Monti, Rome',
                'price' => 20,
                'overView' => '250 m from center',
                'detail' => 'Just 2 minutes’ walk from Rome’s Coliseum, Colosseo Gardens offers luxury apartments with free Wi-Fi and flat-screen TV. Lively Via Cavour and its metro stop are 10 minutes’ walk away.',
                'images' => 'https://q-ec.bstatic.com/xdata/images/hotel/square200/58468020.jpg?k=52fe2fae9d0804925b4cb54328f91b47e29f16aacad9051f2dd6c01cf5d50691&o='
            ], [
                'name' => 'Residenza Manzoni',
                'address' => 'Rione Monti, Rome',
                'price' => 25,
                'overView' => '2km from center',
                'detail' => ' Central Station, Rome ',
                'images' => 'Located in Rome, 700 yards from Domus Aurea and half a mile from Porta Maggiore, Residenza Manzoni offers air conditioning. Complimentary WiFi is provided. The apartment features a TV.'
            ],
            [
                'name' => 'Eve Penthouse Colosseo Opens in new window',
                'address' => ' Central Station, Rome',
                'price' => 25,
                'overView' => 'Subway Access',
                'detail' => 'Featuring views of the Coliseum, 328 feet away, Eve Penthouse Colosseo offers stylish accommodations in Rome. Free WiFi is offered throughout the property.',
                'images' => 'https://q-ec.bstatic.com/xdata/images/hotel/square200/93218154.jpg?k=af1922e44e30415d3f6724e956cc5a52a6199e3cbc0f0902bdba9dd156053ade&o='
            ], [
                'name' => 'Fortune Temple',
                'address' => ' Pantheon, Rome',
                'price' => 40,
                'overView' => 'Subway Access',
                'detail' => 'Fortune Temple is located in Rome, 300 yards from Great Synagogue of Rome, 300 yards from Torre Argentina, and 300 yards from Palazzo Venezia.',
                'images' => 'https://r-ec.bstatic.com/xdata/images/hotel/square200/107226886.jpg?k=2009df7dc542be4ddecfbbb0924246038e00bcc8326d057b36c7e869126a7723&o='
            ],
            [
                'name' => 'Le Cupoline Opens in new window',
                'address' => 'Vatican City - Prati, Rome',
                'price' => 45,
                'overView' => '2km from center',
                'detail' => 'Set on the 4th floor of a renovated historic building in central Rome, Le Cupoline is just a few steps form the Vatican Museums and 1148 feet from Ottaviano Metro Station. Free Wi-Fi is available.',
                'images' => 'https://r-ec.bstatic.com/xdata/images/hotel/square200/20186248.jpg?k=6c5989e6dc41d7141ab55ccbdd67d9ced2a01555b9a9fbf96da9b23d385b19bd&o='
            ], [
                'name' => 'Luxury River by Sleep in Italy Opens in new window',
                'address' => ' Villa Borghese Parioli, Rome ',
                'price' => 25,
                'overView' => '2.7 km from center',
                'detail' => 'Luxury River by Sleep in Italy is located in the Villa Borghese Parioli district of Rome, 0.6 miles from Piazza del Popolo, 0.7 miles from Villa Borghese and 0.8 miles from Via Margutta.',
                'images' => 'https://r-ec.bstatic.com/xdata/images/hotel/square200/119196433.jpg?k=0ffb20f130d0d6613cbdac251b038f1edcf06f41110ff8d7b31c11d867a639fa&o='
            ],
            [
                'name'=>'Urban Chic- Covent Garden',
                'address'=>'London',
                'price'=>'45',
                'overview' => 'Urban Chic- Covent Garden is an accommodation set in London, 80 m from Royal Opera House and 200 m from Theatre Royal Drury Lane. Free WiFi is available in this apartment, located 300 m from Lyceum Theatre and a 4-minute walk from Ambassadors Theatre.',
                'description' => 'This 2-bedroom apartment comes with a seating area, a flat-screen TV and a kitchen with a dishwasher. The apartment also features a bathroom. Arts Theatre is 400 m from the apartment, while Savoy Theatre is a 5-minute walk away. The nearest airport is London City Airport, 12 km from Urban Chic- Covent Garden. Westminster Borough is a great choice for travellers interested in shopping, parks and history.',
                'images'=>'https://r-ec.bstatic.com/images/hotel/max1024x768/109/109511633.jpg'
            ],
            [
                'name'=>'Charming home',
                'address'=>'London',
                'price'=>'35',
                'overview' => 'Charming home in the heart of Marylebone is set in the Westminster Borough district of London, 900 m from Lord\'s Cricket Ground and 1.2 km from Regents Park. The apartment is a 20-minute walk from London Zoo.',
                'description' => 'The apartment is equipped with 2 bedrooms, a TV and a fully equipped kitchen that provides guests with an oven and a microwave. Hyde Park is 1.7 km from Charming home in the heart of Marylebone. The nearest airport is London City Airport, 15 km from the accommodation. Westminster Borough is a great choice for travellers interested in shopping, parks and history.',
                'images'=>'https://q-ec.bstatic.com/images/hotel/max1024x768/119/119294099.jpg'
            ],
            [
                'name'=>'Ecclestone Square Mews',
                'address'=>'Westminster Borough',
                'price'=>'50',
                'overview' => 'Situated in London in the Greater London region, Ecclestone Square Mews is a 5-star property featuring free WiFi. The property is 1.1 km from Buckingham Palace.',
                'description' => 'The apartment has a TV, 3 bedrooms and a living room. The accommodation is fitted with a kitchen. Popular points of interest near the apartment include Westminster Abbey, St James\'s Park and Houses of Parliament. London City Airport is 13 km from the property. Westminster Borough is a great choice for travellers interested in shopping, parks and history.',
                'images'=>'https://r-ec.bstatic.com/images/hotel/max1024x768/135/135771080.jpg'
            ],
            [
                'name'=>'Herbert Crescent ',
                'address'=>'Chelsea, London',
                'price'=>'55',
                'overview' => 'Herbert Crescent enjoys a location in London, just a 3-minute walk from Harrods and 800 m from The Serpentine. The accommodation features free WiFi.',
                'description' => 'This 1-bedroom apartment comes with a seating area, a flat-screen TV and a kitchen with a dishwasher. Hyde Park is 1.1 km from the apartment, while Royal Albert Hall is 1.2 km away. The nearest airport is London City Airport, 15 km from Herbert Crescent.Kensington and Chelsea is a great choice for travellers interested in architecture, monuments and entertainment.',
                'images'=>'https://q-ec.bstatic.com/images/hotel/max1024x768/106/106900594.jpg'
            ],
            [
                'name'=>'St Annes Court',
                'address'=>'Camdon',
                'price'=>'35',
                'overview' => 'Located within 200 m of Old Compton Street and 300 m of Prince Edward Theatre in London, St Anne\'s Court features accommodation with seating area and flat-screen TV. Free WiFi is offered throughout the property.',
                'description' => 'The units have a fully equipped kitchen with dining area, a dishwasher and an oven. There is a private bathroom with shower and free toiletries in each unit, along with a hair dryer. Queens Theatre is 300 m from the apartment, while Shaftesbury Avenue is 300 m from the property. London City Airport is 13 km away.  Westminster Borough is a great choice for travellers interested in shopping, parks and history.',
                'images'=>'https://r-ec.bstatic.com/images/hotel/max1024x768/105/105716216.jpg'
            ],
            [
                'name'=>'Notting Hill Apartment',
                'address'=>'Kensington',
                'price'=>'20',
                'overview' => 'Featuring free WiFi throughout the property, 300 metres from Portobello Road Market.',
                'description' => 'There is a dining area and a kitchen. A flat-screen TV with satellite channels is available. Royal Albert Hall is 2.7 km from LG, while Hyde Park is 2.9 km away. The nearest airport is London Heathrow Airport, 18 km from LG.  Kensington and Chelsea is a great choice for travellers interested in architecture, monuments and entertainment.',
                'images'=>'https://r-ec.bstatic.com/images/hotel/max1024x768/115/115192128.jpg'
            ],
            [
                'name'=>'Luxe Apartments Kensington',
                'address'=>'Chelsea',
                'price'=>'30',
                'overview' => 'Situated in London, Luxe Apartments Kensington features accommodation with access to a garden. Free WiFi is available.',
                'description' => 'The accommodation comes with a flat-screen TV and a private bathroom with shower while the kitchen has a dishwasher. An oven and microwave are also offered, as well as a coffee machine. The apartment offers a terrace. Olympia Exhibition Centre is a 12-minute walk from Luxe Apartments Kensington, while Royal Albert Hall is 1.4 km away. The nearest airport is London City Airport, 17 km from the property. Kensington and Chelsea is a great choice for travellers interested in architecture, monuments and entertainment.',
                'images'=>'https://q-ec.bstatic.com/images/hotel/max1024x768/113/113655299.jpg'
            ],
            [
                'name'=>'The Battersea Apartments',
                'address'=>'Wandsworth',
                'price'=>'30',
                'overview' => 'The Battersea Apartments enjoys a location in London, just 200 m from Battersea and 2.4 km from O2 Academy Brixton. Guests staying at this apartment have access to free WiFi.',
                'description' => 'The apartment features a satellite TV and a living room. The kitchen is equipped with a dishwasher and an oven. The nearest airport is London City Airport, 14 km from the apartment. ',
                'images'=>'https://q-ec.bstatic.com/images/hotel/max1024x768/148/148248657.jpg'
            ],
            [
                'name'=>'Covent Garden Apartments',
                'address'=>'Camden',
                'price'=>'35',
                'overview' => 'Located in London, within 200 m of Royal Opera House and 300 m of Theatre Royal Drury Lane, Covent Garden Apartments provides accommodation with a flat-screen TV and a kitchen. Free WiFi is available.',
                'description' => 'All units are fitted with a dishwasher, oven, a coffee machine, a microwave and kettle. Some units include a dining area and/or a terrace. Ambassadors Theatre is a 4-minute walk from the apartment, while Arts Theatre is 400 m away. The nearest airport is London City Airport, 12 km from the property. Camden is a great choice for travellers interested in theatre, shopping and sightseeing.',
                'images'=>'https://r-ec.bstatic.com/images/hotel/max1024x768/117/117899295.jpg'
            ],
            [
                'name'=>'Heart of Camden',
                'address'=>'Camden',
                'price'=>'35',
                'overview' => 'Complete with a terrace, Heart of Camden is set in London, a 5-minute walk from Camden Market and 1.1 km from King\'s Cross Theatre. Guests may enjoy free WiFi.',
                'description' => 'The apartment has 2 bedrooms, a kitchen with an oven and a microwave, and a bathroom with a shower and free toiletries. A flat-screen TV is provided. London Zoo is a 15-minute walk from the apartment, while Regents Park is 1.6 km away. The nearest airport is London City Airport, 14 km from the property.  Camden is a great choice for travellers interested in theatre, shopping and sightseeing.',
                'images'=>'https://q-ec.bstatic.com/images/hotel/max1024x768/114/114304319.jpg'
            ]
        ]);
    }
}
