@extends('layouts.app')
@section('title','404 — Page Not Found')
@section('content')
<section class="pt-40 pb-24 text-center">
  <div class="max-w-[600px] mx-auto px-6">
    <div class="grad-text mb-4" style="font-family:Syne,sans-serif;font-weight:800;font-size:7rem;line-height:1;display:block">404</div>
    <h1 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.8rem;margin-bottom:14px">Page Not Found</h1>
    <p style="color:var(--t2);margin-bottom:32px">The page you are looking for does not exist or has been moved.</p>
    <a href="{{ route('home') }}" class="btn-p">Back to Home</a>
  </div>
</section>
@endsection
