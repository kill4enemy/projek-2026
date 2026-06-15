@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">
    Booking Lapangan
</h2>

<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">

<form action="{{ route('booking.store') }}" method="POST">
    @csrf

@if (session('error'))
    <div class="mb-4 p-4 rounded bg-red-100 text-red-700">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="mb-4 bg-green-100 text-green-700 p-3 rounded">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label class="block mb-2 text-gray-900 dark:text-white">Nama Pemesan</label>
    <input
        type="text"
        name="customer_name"
        value="{{ old('customer_name') }}"
        class="w-full border border-gray-300 dark:border-gray-600 p-3 rounded bg-white text-gray-900 dark:bg-gray-700 dark:text-white"
        required
    >
</div>

<div class="mb-4">
    <label class="block mb-2 text-gray-900 dark:text-white">Nomor HP</label>
    <input
        type="text"
        name="customer_phone"
        value="{{ old('customer_phone') }}"
        class="w-full border border-gray-300 dark:border-gray-600 p-3 rounded bg-white text-gray-900 dark:bg-gray-700 dark:text-white"
        required
    >
</div>

<div class="mb-4">
    <label class="block mb-2 text-gray-900 dark:text-white">Email</label>
    <input
        type="email"
        name="customer_email"
        value="{{ old('customer_email') }}"
        class="w-full border border-gray-300 dark:border-gray-600 p-3 rounded bg-white text-gray-900 dark:bg-gray-700 dark:text-white"
    >
</div>

<div class="mb-4">
<label class="block mb-2 text-gray-900 dark:text-white">Pilih Lapangan</label>

<select name="court_id" class="w-full border border-gray-300 dark:border-gray-600 p-3 rounded bg-white text-gray-900 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

@foreach($courts as $court)

<option
    value="{{ $court->id }}"
    @selected(old('court_id') == $court->id)
>
{{ $court->name }}
</option>

@endforeach

</select>
</div>


<div class="mb-4">
<label class="block mb-2 text-gray-900 dark:text-white">Tanggal</label>

<input
    type="date"
    name="booking_date"
    value="{{ old('booking_date') }}"
    class="w-full border border-gray-300 dark:border-gray-600 p-3 rounded bg-white text-gray-900 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
    required
>
</div>


<div class="mb-4">
    <label class="block mb-2 text-gray-900 dark:text-white">
        Jam Reservasi
    </label>

    <input
        type="time"
        name="start_time"
        value="{{ old('start_time') }}"
        class="w-full border border-gray-300 dark:border-gray-600 p-3 rounded bg-white text-gray-900 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        required
    >
</div>

<div class="mb-4">
    <label class="block mb-2 text-gray-900 dark:text-white">
        Durasi Permainan
    </label>

    <select
        name="duration"
        class="w-full border border-gray-300 dark:border-gray-600 p-3 rounded bg-white text-gray-900 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
        required
    >
        <option value="1" @selected(old('duration') == 1)>1 Jam</option>
        <option value="2" @selected(old('duration') == 2)>2 Jam</option>
        <option value="3" @selected(old('duration') == 3)>3 Jam</option>
    </select>
</div>


<button class="bg-blue-600 text-white px-6 py-2 rounded">
Booking
</button>

</form>

</div>

@endsection