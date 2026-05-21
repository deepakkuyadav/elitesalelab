@extends('layouts.app')
@section('title',$post['title'].' — EliteSalesLab Blog')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[900px] mx-auto px-6 relative z-10">
    <div class="mb-6"><a href="{{ route('blog') }}" style="font-size:.875rem;color:var(--acc);display:inline-flex;align-items:center;gap:6px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><polyline points="15 18 9 12 15 6"/></svg>Back to Blog</a></div>
    <div class="glass rounded-2xl p-10 mb-10" data-aos="fade-up">
      <span style="font-size:.72rem;font-weight:700;padding:4px 12px;border-radius:999px;background:rgba(59,123,255,.1);color:var(--acc);display:inline-block;margin-bottom:16px">{{ $post['cat'] }}</span>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.6rem,3.5vw,2.2rem);letter-spacing:-.03em;margin-bottom:16px;line-height:1.3">{{ $post['title'] }}</h1>
      <div class="flex items-center gap-5 mb-8" style="border-bottom:1px solid rgba(255,255,255,.06);padding-bottom:20px">
        <span style="font-size:.82rem;color:var(--t2)">By {{ $post['author'] }}</span>
        <span style="font-size:.82rem;color:var(--t3)">{{ $post['date'] }}</span>
        <span style="font-size:.82rem;color:var(--t3)">{{ $post['read'] }} min read</span>
      </div>
      <div style="color:var(--t2);font-size:.93rem;line-height:1.9">
        <p style="margin-bottom:20px">{{ $post['excerpt'] }}</p>
        <p style="margin-bottom:20px">Enterprise software development is undergoing a fundamental shift. The convergence of AI, cloud infrastructure, and modern development practices is creating opportunities that simply did not exist five years ago. At EliteSalesLab, we have been at the forefront of this transformation, delivering over 500 enterprise-grade solutions across 18 countries.</p>
        <h2 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.3rem;margin:28px 0 14px;color:var(--t1)">The Core Challenge</h2>
        <p style="margin-bottom:20px">Most enterprises face a common dilemma: legacy systems that cannot keep pace with modern business demands, versus the risk and cost of wholesale replacement. The answer, in almost every case we have encountered, lies in strategic modernisation — not rip-and-replace, but intelligent augmentation.</p>
        <h2 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.3rem;margin:28px 0 14px;color:var(--t1)">Our Approach</h2>
        <p>We begin every engagement with a thorough assessment of existing systems, data flows, and business processes. This allows us to identify the highest-impact intervention points — where a targeted AI model, an API integration, or a new microservice can deliver disproportionate returns without disrupting what already works.</p>
      </div>
    </div>
    @if(count($related)>0)
    <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:20px">Related Articles</h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      @foreach($related as $r)
      <a href="{{ route('blog.show',$r['slug']) }}" class="card p-5 block group">
        <span style="font-size:.68rem;font-weight:700;color:var(--acc)">{{ $r['cat'] }}</span>
        <h4 style="font-family:Syne,sans-serif;font-weight:600;font-size:.9rem;margin:8px 0;line-height:1.4" class="group-hover:text-[var(--acc)] transition-colors">{{ $r['title'] }}</h4>
        <span style="font-size:.75rem;color:var(--t3)">{{ $r['date'] }}</span>
      </a>
      @endforeach
    </div>
    @endif
  </div>
</section>
@endsection
