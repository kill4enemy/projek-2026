@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10 px-6">

    <h1 class="text-4xl font-bold mb-4">
        {{ $report->title }}
    </h1>

    <p class="text-gray-600 mb-10">
        {{ $report->short_description }}
    </p>

    <div class="mb-10">
        <h2 class="text-2xl font-semibold mb-3">
            Analisis Masalah
        </h2>

        <p class="text-gray-700 whitespace-pre-line">
            {{ $report->problem_analysis }}
        </p>
    </div>

    <div class="mb-10">
        <h2 class="text-2xl font-semibold mb-3">
            Kebutuhan Sistem & Fitur Utama
        </h2>

        <p class="text-gray-700 whitespace-pre-line">
            {{ $report->system_requirements }}
        </p>
    </div>

    <div class="mb-10">
        <h2 class="text-2xl font-semibold mb-3">
            Arsitektur Sistem
        </h2>

        <p class="text-gray-700 whitespace-pre-line">
            {{ $report->architecture }}
        </p>
    </div>

    <div class="mb-10">
        <h2 class="text-2xl font-semibold mb-3">
            Tech Stack
        </h2>

        <p class="text-gray-700 whitespace-pre-line">
            {{ $report->tech_stack }}
        </p>
    </div>

    <div class="mb-10">
        <h2 class="text-2xl font-semibold mb-3">
            Status Progress
        </h2>

        <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded">
            {{ str_replace('_', ' ', ucfirst($report->progress_status)) }}
        </span>
    </div>

    <div class="mb-10">
        <h2 class="text-2xl font-semibold mb-3">
            ERD & Flowchart Sistem
        </h2>

        <p class="text-gray-700 mb-4">
            Rencana perancangan sistem berupa ERD dan Flowchart dapat dilihat pada halaman diagram.
        </p>

        <a
            href="/diagram"
            class="inline-block px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"
        >
            Lihat ERD & Flowchart
        </a>
    </div>

</div>
@endsection