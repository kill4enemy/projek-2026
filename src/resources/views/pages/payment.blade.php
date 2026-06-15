@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow p-6">

    <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">
        Pembayaran Booking
    </h2>

    <p class="mb-2">
        Booking #{{ $booking->id }}
    </p>

    <p class="mb-2">
        Total:
        Rp {{ number_format($booking->total_price) }}
    </p>

    <div class="bg-yellow-100 text-yellow-800 p-4 rounded mb-4">
        Silakan transfer ke:

        <br><br>

        Bank BCA<br>
        1234567890<br>
        a.n. Hans Padel
    </div>

    <form method="POST" action="{{ route('payment.confirm', $booking) }}">
        @csrf

        <button class="bg-blue-600 text-white px-6 py-2 rounded">
            Saya Sudah Bayar
        </button>
    </form>

</div>

@endsection