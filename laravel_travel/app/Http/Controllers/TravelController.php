<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TravelBookingMail;

class TravelController extends Controller
{
    private $travels = [
        [
            'id' => 1,
            'destination' => 'Tokyo, Giappone',
            'duration' => '7 Giorni / 6 Notti',
            'price' => 1250,
            'image' => 'https://japanforever.net/wp-content/uploads/2026/05/tokyo_jf-1024x682.webp',
            'description' => 'Un viaggio indimenticabile tra i neon di Shinjuku, i templi storici di Kyoto e la cultura culinaria giapponese.'
        ],
        [
            'id' => 2,
            'destination' => 'Reykjavik, Islanda',
            'duration' => '5 Giorni / 4 Notti',
            'price' => 890,
            'image' => 'https://static.nexilia.it/vologratis/2019/01/reykjavik.jpg',
            'description' => 'Alla scoperta delle cascate mozzafiato, geyser e le magiche luci dell’aurora boreale.'
        ],
        [
            'id' => 3,
            'destination' => 'Santorini, Grecia',
            'duration' => '6 Giorni / 5 Notti',
            'price' => 720,
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkpS6OCKRfjz9lJc6bVl-UTVF9HUsn3Ib41hnzxxymVA&s=10',
            'description' => 'Tramonti leggendari, case bianche affacciate sulla caldera e relax totale nel mar Egeo.'
        ],
    ];

    public function home()
    {
        return view('home', ['featuredTravels' => array_slice($this->travels, 0, 2)]);
    }

    public function index()
    {
        return view('travels.index', ['travels' => $this->travels]);
    }

    public function show($id)
    {
        $travel = collect($this->travels)->firstWhere('id', $id);

        if (!$travel) {
            abort(404, 'Viaggio non trovato');
        }

        return view('travels.show', compact('travel'));
    }

    public function bookingForm($id = null)
    {
        return view('travels.booking', [
            'travels' => $this->travels,
            'selectedId' => $id
        ]);
    }

    public function sendBooking(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'travel_id' => 'required|integer',
        ]);

        $travel = collect($this->travels)->firstWhere('id', $validated['travel_id']);


        Mail::to('admin@travels.test')->send(new TravelBookingMail($validated, $travel));

        return redirect()->route('travels.index')->with('success', 'Prenotazione inviata con successo! Controlla Mailtrap.');
    }
}
