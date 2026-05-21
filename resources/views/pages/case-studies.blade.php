@extends('layouts.app')
@section('title','Case Studies — EliteSalesLab Enterprise Success Stories')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="sec-badge mb-4">Case Studies</div>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2rem,4vw,3rem);letter-spacing:-.04em;margin-bottom:14px">Proven <span class="grad-text">Business Outcomes</span></h1>
      <p style="color:var(--t2);font-size:.95rem;max-width:520px;margin:0 auto">Real projects. Real results. The numbers speak for themselves.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      @foreach($cases as $cs)
      <div class="card p-8" data-aos="fade-up" data-aos-delay="{{ $loop->index*100 }}">
        <div class="w-12 h-12 rounded-xl mb-5 flex items-center justify-center" style="background:{{ $cs['color'] }}1A">
          <div class="w-5 h-5 rounded-full" style="background:{{ $cs['color'] }}"></div>
        </div>
        <span style="font-size:.7rem;font-weight:700;color:{{ $cs['color'] }}">{{ $cs['service'] }} · {{ $cs['industry'] }}</span>
        <h2 style="font-family:Syne,sans-serif;font-weight:700;font-size:1rem;margin:10px 0 6px;line-height:1.4">{{ $cs['title'] }}</h2>
        <p style="font-size:.8rem;color:var(--t3);margin-bottom:18px">Client: {{ $cs['client'] }}</p>
        <div style="border-top:1px solid rgba(255,255,255,.06);padding-top:16px">
          @foreach($cs['results'] as $r)
          <div class="flex items-center gap-2 mb-2">
            <svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="13" height="13"><polyline points="20 6 9 17 4 12"/></svg>
            <span style="font-size:.8rem;color:var(--t2)">{{ $r }}</span>
          </div>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
    <div class="mt-16 rounded-3xl p-12 flex flex-col md:flex-row items-center justify-between gap-8" style="background:linear-gradient(135deg,rgba(59,123,255,.18),rgba(139,92,246,.2));border:1px solid rgba(59,123,255,.22)" data-aos="zoom-in">
      <div><h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:1.7rem;margin-bottom:8px">Your Success Story Starts Here</h2><p style="color:var(--t2);font-size:.9rem">Let us show you what we can build together.</p></div>
      <a href="{{ route('contact') }}" class="btn-p flex-shrink-0">Start Your Project</a>
    </div>
  </div>
</section>
@endsection
