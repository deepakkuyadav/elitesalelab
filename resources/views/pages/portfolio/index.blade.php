@extends('layouts.app')
@section('title','Portfolio — EliteSalesLab Enterprise Projects')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="text-center mb-8" data-aos="fade-up">
      <div class="sec-badge mb-4">Our Work</div>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2rem,4vw,3rem);letter-spacing:-.04em;margin-bottom:14px">Projects That <span class="grad-text">Prove Our Quality</span></h1>
      <p style="color:var(--t2);font-size:.95rem;max-width:520px;margin:0 auto">500+ projects delivered. Here are six that show what we are capable of.</p>
    </div>
    <div class="flex flex-wrap gap-2 justify-center mb-10" data-aos="fade-up">
      @foreach([['all','All Projects'],['ai','AI & ML'],['erp','ERP'],['mobile','Mobile'],['web','Web'],['cloud','Cloud']] as $f)
      <button class="fb {{ ($category??'all')===$f[0]?'on':'' }}" data-filter="{{ $f[0] }}">{{ $f[1] }}</button>
      @endforeach
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5" id="pt-grid">
      @foreach($projects as $p)
      <div class="card overflow-hidden" data-cat="{{ $p['cat'] }}" data-aos="fade-up">
        <div class="h-40 flex items-center justify-center" style="background:linear-gradient(135deg,var(--bg3),{{ $p['color'] }}22)">
          <div class="w-14 h-14 rounded-2xl flex items-center justify-center" style="background:{{ $p['color'] }}1A">
            <div class="w-6 h-6 rounded-full" style="background:{{ $p['color'] }}"></div>
          </div>
        </div>
        <div class="p-6">
          <span style="font-size:.68rem;font-weight:700;padding:3px 10px;border-radius:999px;background:{{ $p['color'] }}18;color:{{ $p['color'] }};text-transform:uppercase;letter-spacing:.04em">{{ $p['cat'] }}</span>
          <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:.95rem;margin:10px 0 6px">{{ $p['title'] }}</h3>
          <p style="font-size:.78rem;color:var(--t3);margin-bottom:14px;line-height:1.6">{{ $p['desc'] }}</p>
          <div style="border-top:1px solid rgba(255,255,255,.06);padding-top:12px;display:flex;flex-wrap:wrap;gap:8px">
            @foreach($p['results'] as $r)
            <span class="flex items-center gap-1" style="font-size:.72rem;color:var(--t3)">
              <svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="11" height="11"><polyline points="20 6 9 17 4 12"/></svg>{{ $r }}
            </span>
            @endforeach
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
