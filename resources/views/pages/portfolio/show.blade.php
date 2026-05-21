@extends('layouts.app')
@section('title',$project['title'].' — EliteSalesLab Portfolio')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1100px] mx-auto px-6 relative z-10">
    <div class="mb-6"><a href="{{ route('portfolio') }}" style="font-size:.875rem;color:var(--acc);display:inline-flex;align-items:center;gap:6px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><polyline points="15 18 9 12 15 6"/></svg>Back to Portfolio</a></div>
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_300px] gap-10">
      <div>
        <div class="glass rounded-2xl p-8 mb-6" data-aos="fade-right">
          <div class="h-48 rounded-xl flex items-center justify-center mb-6" style="background:linear-gradient(135deg,var(--bg3),{{ $project['color'] }}22)">
            <div class="w-20 h-20 rounded-2xl flex items-center justify-center" style="background:{{ $project['color'] }}22"><div class="w-8 h-8 rounded-full" style="background:{{ $project['color'] }}"></div></div>
          </div>
          <span style="font-size:.7rem;font-weight:700;padding:3px 10px;border-radius:999px;background:{{ $project['color'] }}18;color:{{ $project['color'] }};text-transform:uppercase">{{ $project['cat'] }}</span>
          <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.5rem,3vw,2rem);letter-spacing:-.03em;margin:12px 0 8px">{{ $project['title'] }}</h1>
          <p style="color:var(--t2);font-size:.9rem;line-height:1.75">{{ $project['desc'] }}</p>
        </div>
        <div class="glass rounded-2xl p-8 mb-6" data-aos="fade-up">
          <h2 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:16px">Key Outcomes</h2>
          @foreach($project['results'] as $r)
          <div class="flex items-center gap-3 mb-4 p-4 rounded-xl" style="background:var(--bg3)">
            <svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="16" height="16"><polyline points="20 6 9 17 4 12"/></svg>
            <span style="font-size:.9rem;color:var(--t1);font-weight:500">{{ $r }}</span>
          </div>
          @endforeach
        </div>
        <div class="glass rounded-2xl p-8" data-aos="fade-up">
          <h2 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:16px">Technologies Used</h2>
          <div class="flex flex-wrap gap-2">
            @foreach($project['tech'] as $t)
            <span style="font-size:.8rem;padding:6px 14px;border-radius:9px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);color:var(--t2);font-weight:500">{{ $t }}</span>
            @endforeach
          </div>
        </div>
      </div>
      <div data-aos="fade-left">
        <div class="glass rounded-2xl p-6 sticky" style="top:88px">
          <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:1rem;margin-bottom:16px">Project Details</h3>
          @foreach([['Client',$project['client']],['Category',$project['cat']],['Duration',$project['duration']]] as $d)
          <div class="flex items-center justify-between py-3" style="border-bottom:1px solid rgba(255,255,255,.06)">
            <span style="font-size:.8rem;color:var(--t3)">{{ $d[0] }}</span>
            <span style="font-size:.8rem;font-weight:600;text-transform:capitalize">{{ $d[1] }}</span>
          </div>
          @endforeach
          <a href="{{ route('contact') }}" class="btn-p w-full justify-center mt-6 py-3">Start a Similar Project</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
