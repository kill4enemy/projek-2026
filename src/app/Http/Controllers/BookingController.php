<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Court;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'court_id' => ['required', 'exists:courts,id'],
            'booking_date' => ['required', 'date'],
            'start_time' => ['required'],
            'duration' => ['required', 'integer', 'min:1', 'max:3'],
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_phone' => ['required', 'string', 'max:20'],
            'customer_email' => ['nullable', 'email', 'max:255'],
        ]);
            $court = Court::findOrFail($request->court_id);

            $startTime = Carbon::parse($request->start_time);
            $endTime = $startTime->copy()->addHours((int) $request->duration);

            $dayOfWeek = Carbon::parse($request->booking_date)->dayOfWeek;

            // Logic Jam Operational
            $isWeekend = in_array($dayOfWeek, [
                Carbon::SATURDAY,
                Carbon::SUNDAY,
            ]);

            $openTime = $isWeekend ? '07:00:00' : '08:00:00';
            $closeTime = $isWeekend ? '23:00:00' : '22:00:00';

            if (
                $startTime->format('H:i:s') < $openTime ||
                $endTime->format('H:i:s') > $closeTime
            ) {
                return back()
                    ->withInput()
                    ->with('error', 'Jam reservasi berada di luar jam operasional.');
            }
            
            $isBooked = Booking::where('court_id', $request->court_id)
                ->where('booking_date', $request->booking_date)
                ->where('status', 'confirmed')
                ->where(function ($query) use ($startTime, $endTime) {
                    $query->where('start_time', '<', $endTime->format('H:i:s'))
                        ->where('end_time', '>', $startTime->format('H:i:s'));
                })
                ->exists();
        
            if ($isBooked) {
                return back()
                    ->withInput()
                    ->with('error', 'Waktu di jam tersebut sudah terisi. Silakan pilih jadwal lain.');
            }
                $booking = Booking::create([
                    'user_id' => 1,
                    'customer_name' => $request->customer_name,
                    'customer_phone' => $request->customer_phone,
                    'customer_email' => $request->customer_email,
                    'court_id' => $request->court_id,
                    'booking_date' => $request->booking_date,
                    'start_time' => $startTime->format('H:i:s'),
                    'end_time' => $endTime->format('H:i:s'),
                    'total_price' => $court->price_per_hour * (int) $request->duration,
                    'status' => 'pending_payment',
                ]);

                return redirect()->route('payment.show', $booking);
    }

}
