@extends('layouts.app')
@section('title','Careers at EliteSalesLab — Join Our Team')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="sec-badge mb-5">We're Hiring</div>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2rem,4vw,3rem);letter-spacing:-.04em;margin-bottom:14px">Join the <span class="grad-text">EliteSalesLab Team</span></h1>
      <p style="color:var(--t2);font-size:.95rem;max-width:520px;margin:0 auto">Work on enterprise projects that matter. With people who care about craft.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-16">
      @foreach([['Remote-Friendly','Work from anywhere in India. Output over presence, always.','#3B7BFF'],['INR 50K Learning Budget','Annual budget for courses, certs, and conferences.','#10B981'],['Fast Career Growth','Flat hierarchy. Quarterly reviews. Most engineers level up in 18 months.','#8B5CF6']] as $p)
      <div class="p-7 rounded-2xl card" data-aos="fade-up" data-aos-delay="{{ $loop->index*80 }}">
        <div class="w-12 h-12 rounded-xl mb-5" style="background:{{ $p[2] }}1A"></div>
        <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:1rem;margin-bottom:8px">{{ $p[0] }}</h3>
        <p style="color:var(--t3);font-size:.82rem;line-height:1.65">{{ $p[1] }}</p>
      </div>
      @endforeach
    </div>
    <div class="sec-badge mb-6">Open Positions</div>
    <div style="display:flex;flex-direction:column;gap:12px;margin-bottom:48px">
      @foreach($jobs as $job)
      <div class="flex items-center gap-5 p-6 rounded-2xl card" data-aos="fade-up">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0" style="background:rgba(59,123,255,.1)">
          <svg viewBox="0 0 24 24" fill="none" stroke="#3B7BFF" stroke-width="1.8" width="20" height="20"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
        </div>
        <div class="flex-1 min-w-0">
          <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:.95rem;margin-bottom:8px">{{ $job['title'] }}</h3>
          <div class="flex flex-wrap gap-2">
            <span style="font-size:.71rem;padding:3px 11px;border-radius:999px;background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.2);color:#A78BFA;font-weight:500">{{ $job['dept'] }}</span>
            <span style="font-size:.71rem;padding:3px 11px;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);color:var(--t3)">{{ $job['location'] }}</span>
            <span style="font-size:.71rem;padding:3px 11px;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);color:var(--t3)">{{ $job['exp'] }}</span>
            @if(isset($job['salary']))<span style="font-size:.71rem;padding:3px 11px;border-radius:999px;background:rgba(16,185,129,.08);border:1px solid rgba(16,185,129,.2);color:#34D399;font-weight:600">{{ $job['salary'] }}</span>@endif
          </div>
        </div>
        <a href="{{ route('careers.show',$job['slug']) }}" class="btn-p flex-shrink-0 py-2 px-5 text-sm">Apply Now</a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
