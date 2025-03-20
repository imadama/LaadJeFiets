@extends('layouts.app')
@section('content')

<div class="hero min-h-screen bg-center bg-base-100">
  <div class="hero-content text-center text-neutral-content">
    <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold text-base-content">Welkom!</h1>
        <p class="mb-5 text-base-content">Welkom bij laadjefiets.nl</p>
        <div class="flex flex-col">
        <div class="stats shadow-lg mb-5 p-4 bg-base-200 rounded-lg">
            <div class="stat">
                <div class="stat-title text-lg text-base-content font-semibold">Total Page Views</div>
                <div class="stat-value text-3xl text-base-content font-bold">89,400</div>
                <div class="stat-desc text-sm text-base-content">21% more than last month</div>
            </div>
        </div>
        <button class="btn btn-primary shadow-lg shadow-primary/50">Start</button>
        </div>
    </div>
  </div>
</div>
@endsection