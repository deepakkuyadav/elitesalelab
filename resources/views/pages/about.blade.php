@extends('layouts.app')
@section('title','About EliteSalesLab — 15 Years of Enterprise Excellence')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div><div class="orb" style="width:500px;height:500px;background:radial-gradient(circle,rgba(59,123,255,.18),transparent);top:-150px;right:-100px"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="text-center mb-20" data-aos="fade-up">
      <div class="sec-badge mb-5">About Us</div>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2.2rem,5vw,3.2rem);letter-spacing:-.04em;margin-bottom:18px">15 Years of <span class="grad-text">Engineering Excellence</span></h1>
      <p style="color:var(--t2);font-size:.95rem;max-width:580px;margin:0 auto;line-height:1.8">Founded in 2009 by IIT engineers, EliteSalesLab has grown from a 5-person startup to a 120-member technology powerhouse delivering enterprise solutions in 18 countries.</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-24 sc-sec">
      @foreach([['500+','Projects Delivered','#3B7BFF'],['120+','Expert Engineers','#8B5CF6'],['18','Countries Served','#22D3EE'],['97%','Satisfaction','#10B981']] as $s)
      <div class="text-center p-8 rounded-2xl card" data-aos="zoom-in" data-aos-delay="{{ $loop->index*80 }}">
        <div class="mb-2" style="font-family:Syne,sans-serif;font-weight:800;font-size:2.6rem;line-height:1;background:linear-gradient(135deg,{{ $s[2] }},#8B5CF6);-webkit-background-clip:text;-webkit-text-fill-color:transparent">{{ $s[0] }}</div>
        <div style="font-size:.8rem;color:var(--t3)">{{ $s[1] }}</div>
      </div>
      @endforeach
    </div>
    <div class="text-center mb-12" data-aos="fade-up"><div class="sec-badge mb-4">Leadership</div><h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.6rem,3vw,2.2rem);letter-spacing:-.03em">The Team Behind <span class="grad-text">the Excellence</span></h2></div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-16">
      @php $grs=['linear-gradient(135deg,#3B7BFF,#22D3EE)','linear-gradient(135deg,#8B5CF6,#EC4899)','linear-gradient(135deg,#10B981,#22D3EE)','linear-gradient(135deg,#F59E0B,#EC4899)']; @endphp
      @foreach($team as $i=>$m)
      <div class="p-6 rounded-2xl text-center card" data-aos="fade-up" data-aos-delay="{{ $loop->index*80 }}">
        <div class="w-16 h-16 rounded-2xl mx-auto mb-4 flex items-center justify-center" style="background:{{ $grs[$i] }}"><span style="font-family:Syne,sans-serif;font-weight:800;font-size:1.2rem;color:#fff">{{ substr($m['name'],0,1) }}</span></div>
        <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:.95rem;margin-bottom:4px">{{ $m['name'] }}</h3>
        <p style="font-size:.75rem;color:var(--acc);margin-bottom:10px">{{ $m['role'] }}</p>
        <p style="font-size:.78rem;color:var(--t3);line-height:1.65">{{ $m['bio'] }}</p>
      </div>
      @endforeach
    </div>
    <div class="text-center mb-10" data-aos="fade-up"><div class="sec-badge mb-4">Our Journey</div><h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.6rem,3vw,2.1rem);letter-spacing:-.03em">From Startup to <span class="grad-text">Industry Leader</span></h2></div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-16">
      @foreach($milestones as $m)
      <div class="flex items-start gap-4 p-6 rounded-2xl card" data-aos="fade-up">
        <div class="w-14 h-14 rounded-xl flex items-center justify-center flex-shrink-0" style="background:linear-gradient(135deg,#3B7BFF,#8B5CF6)"><span style="font-family:Syne,sans-serif;font-weight:800;font-size:.75rem;color:#fff">{{ $m['year'] }}</span></div>
        <div><h4 style="font-family:Syne,sans-serif;font-weight:700;font-size:.92rem;margin-bottom:4px">{{ $m['title'] }}</h4><p style="font-size:.8rem;color:var(--t3)">{{ $m['desc'] }}</p></div>
      </div>
      @endforeach
    </div>
    <div class="rounded-3xl p-12 flex flex-col md:flex-row items-center justify-between gap-8" style="background:linear-gradient(135deg,rgba(59,123,255,.18),rgba(139,92,246,.2));border:1px solid rgba(59,123,255,.22)" data-aos="zoom-in">
      <div><h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:1.8rem;margin-bottom:8px">Ready to Work With Us?</h2><p style="color:var(--t2);font-size:.9rem">No commitment. Just an honest technical conversation.</p></div>
      <div class="flex gap-3"><a href="{{ route('contact') }}" class="btn-p">Start a Conversation</a><a href="{{ route('portfolio') }}" class="btn-g">See Our Work</a></div>
    </div>
  </div>
</section>
@endsection
