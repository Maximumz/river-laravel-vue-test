<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBooking;
use App\Models\Bookings;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BookingsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getBookings()
    {
        // TODO add pagination
        $bookings = Bookings::where('message', '!=', null)->orderBy('id', 'desc')->get();

        return response($bookings);
    }

    public function addBooking(StoreBooking $request)
    {
        // Any failing validation will return errors
        $validated = $request->validated();

        if ($validated) {
            $booking = Bookings::create([
                'name' => $request->get('name'),
                'date' => $request->get('date'),
                'time' => $request->get('time'),
                'message' => $request->get('message'),
            ]);

            return response($booking);
        }
    }
}
