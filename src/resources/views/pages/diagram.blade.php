@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6">
    Rencana Perancangan Sistem
</h2>

<div class="bg-white p-6 rounded shadow mb-6">
    <h3 class="text-xl font-bold mb-4">
        ERD Sistem Penyewaan Lapangan Padel
    </h3>

    <img
            src="{{ asset('images/erd.jpg') }}"
            alt="ERD"
            class="w-[460px] mx-auto rounded-lg shadow-lg"
        >
    </div>
</div>

<div class="bg-white p-6 rounded shadow">
    <h3 class="text-xl font-bold mb-4">
        Flowchart Proses Booking
    </h3>

    <img
            src="{{ asset('images/flowchart.jpg') }}"
            alt="Flowchart"
            class="w-[300px] mx-auto rounded-lg shadow-lg"
        >
    </div>
</div>

@endsection