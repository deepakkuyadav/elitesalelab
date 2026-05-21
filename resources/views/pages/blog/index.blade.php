@extends('layouts.app')
@section('title','Blog — EliteSalesLab Insights on AI, ERP & Enterprise Tech')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="sec-badge mb-4">Insights</div>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2rem,4vw,3rem);letter-spacing:-.04em;margin-bottom:14px">Expert <span class="grad-text">Tech Perspectives</span></h1>
      <p style="color:var(--t2);font-size:.95rem;max-width:480px;margin:0 auto">Deep dives into AI, ERP, mobile, cloud, and enterprise strategy by our senior engineers.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach($posts as $post)
      <a href="{{ route('blog.show',$post['slug']) }}" class="card block overflow-hidden group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 70 }}">
        <div class="h-44 flex items-center justify-center" style="background:linear-gradient(135deg,var(--bg3),rgba(59,123,255,.1))">
          <div class="w-16 h-16 rounded-2xl flex items-center justify-center" style="background:rgba(59,123,255,.15)">
            <svg viewBox="0 0 24 24" fill="none" stroke="#3B7BFF" stroke-width="1.5" width="28" height="28"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
        </div>
        <div class="p-6">
          <div class="flex items-center justify-between mb-3">
            <span style="font-size:.7rem;font-weight:700;padding:3px 10px;border-radius:999px;background:rgba(59,123,255,.1);color:var(--acc)">{{ $post['cat'] }}</span>
            <span style="font-size:.72rem;color:var(--t3)">{{ $post['read'] }} min read</span>
          </div>
          <h2 style="font-family:Syne,sans-serif;font-weight:700;font-size:.95rem;margin-bottom:8px;line-height:1.4" class="group-hover:text-[var(--acc)] transition-colors">{{ $post['title'] }}</h2>
          <p style="font-size:.8rem;color:var(--t3);line-height:1.6;margin-bottom:14px">{{ $post['excerpt'] }}</p>
          <div class="flex items-center justify-between" style="border-top:1px solid rgba(255,255,255,.06);padding-top:12px">
            <span style="font-size:.75rem;color:var(--t3)">{{ $post['author'] }}</span>
            <span style="font-size:.75rem;color:var(--t3)">{{ $post['date'] }}</span>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>
@endsection
