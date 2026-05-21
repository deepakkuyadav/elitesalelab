@extends('layouts.app')
@section('title','Services — EliteSalesLab Enterprise IT Solutions')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="sec-badge mb-4">What We Build</div>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2rem,4vw,3rem);letter-spacing:-.04em;margin-bottom:14px">Services Built for <span class="grad-text">Enterprise Scale</span></h1>
      <p style="color:var(--t2);font-size:.95rem;max-width:520px;margin:0 auto">Every solution custom-built by specialists with deep domain expertise in your industry.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach([['AI & Machine Learning','services.ai','#3B7BFF','Predictive analytics, NLP, ML pipelines, and intelligent automation for enterprises.'],['ERP Solutions','services.erp','#8B5CF6','Custom ERP connecting inventory, finance, HR, and operations across your organisation.'],['Web Development','services.web','#22D3EE','Scalable SaaS platforms, enterprise portals, and high-traffic web applications.'],['Mobile Development','services.mobile','#10B981','iOS, Android, and cross-platform apps with native performance and consumer-grade UX.'],['Cloud & DevOps','services.cloud','#F59E0B','AWS, Azure, GCP architecture, migration, CI/CD pipelines, and managed infrastructure.'],['Digital Transformation','services','#EC4899','End-to-end digitisation strategy for traditional enterprises moving to modern stacks.']] as $s)
      <a href="{{ route($s[1]) }}" class="card p-7 block group relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index*70 }}">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5" style="background:{{ $s[2] }}1A">
          <div class="w-5 h-5 rounded-full" style="background:{{ $s[2] }}"></div>
        </div>
        <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:1rem;margin-bottom:8px">{{ $s[0] }}</h3>
        <p style="color:var(--t3);font-size:.8rem;line-height:1.65;margin-bottom:14px">{{ $s[3] }}</p>
        <span style="font-size:.8rem;color:{{ $s[2] }};font-weight:600">Learn more →</span>
      </a>
      @endforeach
    </div>
  </div>
</section>
@endsection
