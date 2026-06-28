@extends('layouts.app')

@section('content')

<div class="max-w-3xl mx-auto bg-white dark:bg-gray-800 rounded-xl shadow p-8">

    @if(session('success'))
        <div class="mb-4 bg-green-100 text-green-700 p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div id="invoice-area">
        <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white">
            Invoice Booking
        </h2>

    <div class="mb-4 p-4 rounded-lg
            bg-blue-100 text-blue-800
            dark:bg-blue-900/30 dark:text-blue-100">

    <p class="font-semibold mb-2">
        📧 Informasi Booking
    </p>

    <p>
        Invoice ini bersifat sementara dan akan diverifikasi oleh admin.
        Silakan cek email yang digunakan saat booking, termasuk folder
        <strong>Spam</strong> atau <strong>Promosi</strong>.
    </p>

    <ul class="list-disc list-inside mt-3 space-y-1">
        <li>✅ Booking yang diterima akan dikirimkan invoice resmi melalui email.</li>
        <li>❌ Booking yang dibatalkan akan dikirimkan pemberitahuan pembatalan melalui email.</li>
        <li>📞 Jika dalam 1×24 jam belum menerima email, silakan hubungi pihak Hans Padel.</li>
    </ul>
</div>
        <div class="space-y-3 text-gray-700 dark:text-gray-200">
            <p><strong>Kode Booking:</strong> {{ $booking->booking_code }}</p>
            <p><strong>Nama:</strong> {{ $booking->customer_name }}</p>
            <p><strong>No HP:</strong> {{ $booking->customer_phone }}</p>
            <p><strong>Email:</strong> {{ $booking->customer_email ?? '-' }}</p>
            <p><strong>Lapangan:</strong> {{ $booking->court->name }}</p>
            <p><strong>Tanggal:</strong> {{ $booking->booking_date }}</p>
            <p><strong>Jam:</strong> {{ $booking->start_time }} - {{ $booking->end_time }}</p>
            <p><strong>Total:</strong> Rp {{ number_format($booking->total_price) }}</p>
            <p><strong>Status:</strong> {{ strtoupper($booking->status) }}</p>
            <p><strong>Metode Bayar:</strong> {{ $booking->payment_type ?? '-' }}</p>
            <p><strong>Dibayar Pada:</strong> {{ $booking->paid_at ?? '-' }}</p>
        </div>
    </div>

    <div class="mt-8 flex gap-3">
        <button
            onclick="window.print()"
            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700"
        >
            Download / Print Invoice
        </button>

        <a
            href="/"
            class="bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white px-6 py-2 rounded"
        >
            Kembali Home
        </a>
    </div>

</div>

@endsection