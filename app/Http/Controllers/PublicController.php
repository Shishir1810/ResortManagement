<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Resort;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class PublicController extends Controller
{


    public function home()
    {

        $resorts = Resort::latest()->paginate(12);
        return view('public.home', compact('resorts'));
    }

    public function booking($id)
    {
        $resorts = Resort::findorFail($id);


        return view('public.booking', compact('resorts'));
    }


    public function store(Request $request, Booking $booking)
    {
        $books = Booking::all();
        foreach ($books as  $book) {
            if (($book->start_date == $request->start_date || $book->end_date == $request->end_date) && $book->resort_name == $request->resort_name) {
                return redirect()->back()->with('message', ' its not available for the desired dates. ');
            } else {
                $booked = $request->validate([
                    'customer_name' => 'required',
                    'address' => 'nullable',
                    'phone' => 'required',
                    'email' => 'required',
                    'resort_name' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required'
                ]);
            }
        }





        $booking->create($booked);
        

        return redirect()->route('home')->with('message', 'Booking Request Created Successfully');
    }
}
