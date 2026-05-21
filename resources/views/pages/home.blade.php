@extends('layouts.app')
@section('title','EliteSalesLab — Enterprise AI, ERP & Software Solutions')
@section('desc','EliteSalesLab delivers world-class AI, ERP, mobile & web solutions for enterprises. 500+ projects. 18 countries. 15 years of excellence.')

@section('content')

{{-- HERO --}}
<section class="relative flex items-center min-h-screen pt-[90px] pb-20 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none">
    <div class="orb" style="width:600px;height:600px;background:radial-gradient(circle,rgba(59,123,255,.22),transparent);top:-200px;left:-200px;opacity:.9"></div>
    <div class="orb" style="width:500px;height:500px;background:radial-gradient(circle,rgba(139,92,246,.18),transparent);top:60px;right:-160px"></div>
    <div class="orb" style="width:280px;height:280px;background:radial-gradient(circle,rgba(34,211,238,.14),transparent);bottom:-80px;left:35%"></div>
    <div class="absolute inset-0 dot-grid"></div>
  </div>
  <div class="max-w-[1240px] mx-auto px-6 w-full relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div>
        <div class="sec-badge mb-6" data-aos="fade-down">
          <span class="pulse w-2 h-2 rounded-full flex-shrink-0" style="background:#3B7BFF;display:inline-block"></span>
          Trusted by 120+ companies in 18 countries
        </div>
        <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2.4rem,5.5vw,3.5rem);letter-spacing:-.04em;line-height:1.07;margin-bottom:22px" data-aos="fade-up" data-aos-delay="80">
          We Build Software That<br>
          <span class="grad-text" id="typed" style="-webkit-text-fill-color:transparent">Drives Revenue</span>
        </h1>
        <p style="color:var(--t2);font-size:.97rem;line-height:1.8;max-width:480px;margin-bottom:30px" data-aos="fade-up" data-aos-delay="140">
          Enterprise AI, ERP systems, mobile apps, and custom software — engineered for scale, built for growth. <strong style="color:var(--t1)">Zero compromises on quality.</strong>
        </p>
        <div class="flex flex-wrap gap-3 mb-8" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('contact') }}" class="btn-p">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><polygon points="5 3 19 12 5 21 5 3"/></svg>
            Start Your Project
          </a>
          <a href="{{ route('portfolio') }}" class="btn-g">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
            View Our Work
          </a>
        </div>
        <div class="flex flex-wrap gap-5" data-aos="fade-up" data-aos-delay="260">
          @foreach(['Fixed-price delivery','90-day warranty','NDA on day one','2hr response SLA'] as $t)
          <div class="flex items-center gap-1.5" style="font-size:.76rem;color:var(--t3)">
            <svg viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.5" width="13" height="13"><polyline points="20 6 9 17 4 12"/></svg>{{ $t }}
          </div>
          @endforeach
        </div>
      </div>
      {{-- Dashboard mock --}}
      <div class="hidden lg:block" data-aos="fade-left" data-aos-delay="160">
        <div class="rounded-2xl overflow-hidden" style="background:var(--bg2);border:1px solid rgba(255,255,255,.1);box-shadow:0 24px 80px rgba(0,0,0,.6)">
          <div class="flex items-center gap-2 px-5 py-3.5" style="background:var(--surf);border-bottom:1px solid rgba(255,255,255,.06)">
            <span class="w-2.5 h-2.5 rounded-full" style="background:#FF5F57"></span><span class="w-2.5 h-2.5 rounded-full" style="background:#FFBD2E"></span><span class="w-2.5 h-2.5 rounded-full" style="background:#27C840"></span>
            <span class="mx-auto text-xs" style="color:var(--t3);font-family:Syne,sans-serif;font-weight:600">EliteSalesLab — Live Dashboard</span>
          </div>
          <div class="p-5">
            <div class="grid grid-cols-3 gap-3 mb-4">
              @foreach([['47','Active Projects','#3B7BFF'],['98.3%','On-Time','#10B981'],['4.97','Rating','#8B5CF6']] as $s)
              <div class="rounded-xl p-3 flex items-center gap-2.5" style="background:var(--bg3)">
                <div class="w-8 h-8 rounded-lg flex-shrink-0" style="background:{{ $s[2] }}20"></div>
                <div><strong style="display:block;font-family:Syne,sans-serif;font-weight:700;font-size:1rem;line-height:1">{{ $s[0] }}</strong><small style="font-size:.65rem;color:var(--t3)">{{ $s[1] }}</small></div>
              </div>
              @endforeach
            </div>
            <div class="rounded-xl p-3.5 mb-3" style="background:var(--bg3)">
              <div class="text-[.67rem] uppercase tracking-wider font-semibold mb-2.5" style="color:var(--t3)">Delivery 2025</div>
              <div class="flex items-end gap-1.5 h-14">
                @foreach([['Jan',65,'#3B7BFF'],['Feb',72,'#3B7BFF'],['Mar',58,'#8B5CF6'],['Apr',85,'#3B7BFF'],['May',93,'#22D3EE'],['Jun',79,'#3B7BFF']] as $b)
                <div class="flex-1 flex flex-col items-center gap-1 h-full">
                  <div class="w-full rounded-t" style="height:{{ $b[1] }}%;background:{{ $b[2] }}"></div>
                  <span style="font-size:.58rem;color:var(--t3)">{{ $b[0] }}</span>
                </div>
                @endforeach
              </div>
            </div>
            @foreach([['FinNova AI Platform',87,'#3B7BFF','#8B5CF6'],['RetailMax ERP',100,'#10B981','#22D3EE'],['HealthCore Portal',63,'#8B5CF6','#EC4899']] as $p)
            <div class="flex items-center gap-3 mb-2">
              <span class="w-1.5 h-1.5 rounded-full flex-shrink-0" style="background:{{ $p[2] }}"></span>
              <span class="flex-1 truncate" style="font-size:.72rem;color:var(--t2)">{{ $p[0] }}</span>
              <div class="w-20 h-1.5 rounded-full" style="background:rgba(255,255,255,.08)">
                <div class="h-full rounded-full" style="width:{{ $p[1] }}%;background:linear-gradient(90deg,{{ $p[2] }},{{ $p[3] }})"></div>
              </div>
              <span style="font-size:.67rem;color:var(--t3);width:32px;text-align:right">{{ $p[1]==100?'Done':$p[1].'%' }}</span>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CLIENT TICKER --}}
<div style="padding:18px 0;border-top:1px solid rgba(255,255,255,.06);border-bottom:1px solid rgba(255,255,255,.06);overflow:hidden">
  <p class="text-center mb-4" style="font-size:.7rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--t3)">Trusted by teams at</p>
  <div style="overflow:hidden">
    <div class="tktr">
      @foreach(array_merge($clients,$clients) as $c)
      <div class="flex items-center gap-2 px-4 py-1.5 rounded-full flex-shrink-0" style="background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.07)">
        <svg viewBox="0 0 24 24" fill="none" stroke="var(--t3)" stroke-width="2" width="11" height="11"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
        <span style="font-size:.75rem;color:var(--t2);font-weight:500;white-space:nowrap">{{ $c }}</span>
      </div>
      @endforeach
    </div>
  </div>
</div>

{{-- STATS --}}
<section class="py-20 sc-sec" style="background:var(--bg2)">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="text-center mb-12" data-aos="fade-up">
      <div class="sec-badge mb-3">Our Impact</div>
      <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.8rem,3.5vw,2.4rem);letter-spacing:-.03em">Numbers That <span class="grad-text">Speak for Themselves</span></h2>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
      @foreach([['500','+','Projects Delivered'],['120','+','Team Members'],['18','','Countries Served'],['97','%','Client Satisfaction']] as $i => $s)
      <div class="text-center p-8 rounded-2xl card" data-aos="zoom-in" data-aos-delay="{{ $i*80 }}">
        <div class="grad-text mb-2" style="font-family:Syne,sans-serif;font-weight:800;font-size:2.8rem;line-height:1;display:inline-block" data-cnt="{{ $s[0] }}" data-sx="{{ $s[1] }}">{{ $s[0] }}{{ $s[1] }}</div>
        <div style="font-size:.8rem;color:var(--t3);font-weight:500">{{ $s[2] }}</div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- SERVICES --}}
<section class="py-24">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="sec-badge mb-4">What We Build</div>
      <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.8rem,3.5vw,2.4rem);letter-spacing:-.03em;margin-bottom:12px">Services Built for <span class="grad-text">Enterprise Scale</span></h2>
      <p style="color:var(--t2);font-size:.9rem;max-width:520px;margin:0 auto">Every solution custom-built by domain specialists — not handed to generalists.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach($services as $i => $svc)
      <a href="{{ route($svc['slug']) }}" class="card p-7 block group relative overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $i*70 }}">
        <div class="absolute top-0 left-0 right-0 h-[2px] rounded-t-2xl origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300" style="background:{{ $svc['color'] }}"></div>
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-5 flex-shrink-0" style="background:{{ $svc['color'] }}1A">
          <svg viewBox="0 0 24 24" fill="none" stroke="{{ $svc['color'] }}" stroke-width="1.8" width="22" height="22">
            @if($i==0)<path d="M12 2a4 4 0 1 1 0 8 4 4 0 0 1 0-8zM4.93 4.93a10 10 0 1 0 14.14 0M12 12v10"/>
            @elseif($i==1)<path d="M4 6h16M4 10h16M4 14h16M4 18h4"/>
            @elseif($i==2)<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
            @elseif($i==3)<rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/>
            @elseif($i==4)<path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/>
            @else<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
            @endif
          </svg>
        </div>
        <div class="absolute top-5 right-5 w-7 h-7 rounded-lg flex items-center justify-center opacity-30 group-hover:opacity-100 transition-opacity" style="background:rgba(255,255,255,.06)">
          <svg viewBox="0 0 24 24" fill="none" stroke="{{ $svc['color'] }}" stroke-width="2" width="12" height="12"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
        </div>
        <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:1rem;margin-bottom:8px">{{ $svc['title'] }}</h3>
        <p style="color:var(--t3);font-size:.8rem;line-height:1.65">{{ $svc['desc'] }}</p>
      </a>
      @endforeach
    </div>
    <div class="text-center mt-10" data-aos="fade-up"><a href="{{ route('services') }}" class="btn-g">View All Services →</a></div>
  </div>
</section>

{{-- AI SHOWCASE --}}
<section class="py-24" style="background:var(--bg2)">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      <div data-aos="fade-right">
        <div class="sec-badge mb-5">AI-First Approach</div>
        <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.8rem,3.5vw,2.3rem);letter-spacing:-.03em;margin-bottom:16px">Intelligent Automation That <span class="grad-text">Compounds Growth</span></h2>
        <p style="color:var(--t2);font-size:.9rem;line-height:1.75;margin-bottom:24px">Our AI division has deployed 138 ML models in production — from NLP pipelines that read contracts to computer vision systems that inspect manufacturing defects at 99.7% accuracy.</p>
        @foreach(['Predictive Sales Intelligence — close 47% more deals','Intelligent Document Processing — 90% faster than manual','Real-time Anomaly Detection — catch fraud before damage','LLM-powered Support — reduce tickets by 65%'] as $f)
        <div class="flex items-start gap-3 mb-3">
          <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5" style="background:rgba(59,123,255,.15)">
            <svg viewBox="0 0 24 24" fill="none" stroke="#3B7BFF" stroke-width="2.5" width="11" height="11"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <span style="font-size:.87rem;color:var(--t2)">{{ $f }}</span>
        </div>
        @endforeach
        <div class="mt-8"><a href="{{ route('services.ai') }}" class="btn-p">Explore AI Solutions</a></div>
      </div>
      <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
        @foreach([['138','AI Models in Production','#3B7BFF'],['99.7%','Defect Detection Accuracy','#10B981'],['65%','Avg Ticket Reduction','#8B5CF6'],['24/7','AI Always Working','#22D3EE']] as $ai)
        <div class="p-6 rounded-2xl card">
          <div class="w-10 h-10 rounded-xl mb-3 flex-shrink-0" style="background:{{ $ai[2] }}20"></div>
          <div class="grad-text mb-1" style="font-family:Syne,sans-serif;font-weight:800;font-size:2rem;line-height:1;display:inline-block">{{ $ai[0] }}</div>
          <div style="font-size:.78rem;color:var(--t3)">{{ $ai[1] }}</div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

{{-- TESTIMONIALS --}}
<section class="py-24">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="sec-badge mb-4">Client Stories</div>
      <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.8rem,3.5vw,2.4rem);letter-spacing:-.03em">What Our Clients <span class="grad-text">Say</span></h2>
    </div>
    <div class="swiper ts-sw" data-aos="fade-up">
      <div class="swiper-wrapper pb-12">
        @foreach($testimonials as $t)
        <div class="swiper-slide">
          <div class="p-7 rounded-2xl h-full relative overflow-hidden" style="background:var(--bg2);border:1px solid rgba(255,255,255,.07)">
            <div class="absolute top-3 right-5" style="font-size:7rem;line-height:1;color:rgba(59,123,255,.05);font-family:Georgia,serif;pointer-events:none">"</div>
            <div class="flex gap-1 mb-4">
              @for($i=0;$i<$t['rating'];$i++)<svg viewBox="0 0 24 24" fill="#FBBF24" width="13" height="13"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>@endfor
            </div>
            <p style="color:var(--t2);font-size:.87rem;line-height:1.75;margin-bottom:22px;font-style:italic;position:relative;z-index:1">"{{ $t['text'] }}"</p>
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0" style="background:linear-gradient({{ $t['grad'] }});font-family:Syne,sans-serif;font-weight:700;font-size:.85rem;color:#fff">{{ $t['init'] }}</div>
              <div>
                <div style="font-weight:600;font-size:.88rem">{{ $t['name'] }}</div>
                <div style="font-size:.74rem;color:var(--t3)">{{ $t['role'] }}</div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

{{-- TECH STACK --}}
<section class="py-20" style="background:var(--bg2)">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="text-center mb-10" data-aos="fade-up">
      <div class="sec-badge mb-4">Tech Stack</div>
      <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.6rem,3vw,2.2rem);letter-spacing:-.03em">Modern Stack. <span class="grad-text">Battle-Tested.</span></h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
      @foreach($technologies as $cat => $techs)
      <div class="p-6 rounded-2xl card" data-aos="fade-up" data-aos-delay="{{ $loop->index*60 }}">
        <h4 style="font-family:Syne,sans-serif;font-weight:700;font-size:.78rem;text-transform:uppercase;letter-spacing:.08em;color:var(--acc);margin-bottom:14px">{{ $cat }}</h4>
        <div class="flex flex-wrap gap-2">
          @foreach($techs as $tech)
          <span style="font-size:.76rem;padding:5px 12px;border-radius:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);color:var(--t2);font-weight:500">{{ $tech }}</span>
          @endforeach
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- FAQ --}}
<section class="py-24">
  <div class="max-w-[800px] mx-auto px-6">
    <div class="text-center mb-12" data-aos="fade-up">
      <div class="sec-badge mb-4">FAQ</div>
      <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.8rem,3.5vw,2.4rem);letter-spacing:-.03em">Common <span class="grad-text">Questions</span></h2>
    </div>
    @foreach($faqs as $i => $faq)
    <div class="fa-item mb-3 rounded-2xl overflow-hidden {{ $loop->first?'op':'' }}" style="border:1px solid rgba(255,255,255,.07);background:var(--bg2)" data-aos="fade-up" data-aos-delay="{{ $i*55 }}">
      <button class="fa-q w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
        <span style="font-weight:600;font-size:.92rem">{{ $faq['q'] }}</span>
        <svg class="fa-chv flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="var(--acc)" stroke-width="2" width="16" height="16"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div class="fa-ans {{ $loop->first?'op':'' }}">
        <p style="padding:0 24px 20px;color:var(--t2);font-size:.87rem;line-height:1.75">{{ $faq['a'] }}</p>
      </div>
    </div>
    @endforeach
  </div>
</section>

{{-- CTA --}}
<section class="pb-24">
  <div class="max-w-[1240px] mx-auto px-6">
    <div class="rounded-3xl p-14 flex flex-col lg:flex-row items-center justify-between gap-10 relative overflow-hidden" style="background:linear-gradient(135deg,rgba(59,123,255,.18),rgba(139,92,246,.2));border:1px solid rgba(59,123,255,.22)" data-aos="zoom-in">
      <div class="absolute" style="right:-80px;top:-80px;width:280px;height:280px;background:radial-gradient(circle,rgba(139,92,246,.15),transparent);border-radius:50%;filter:blur(50px)"></div>
      <div class="text-center lg:text-left relative z-10">
        <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.6rem,3.5vw,2.1rem);letter-spacing:-.03em;margin-bottom:10px">Ready to Build Something <span class="grad-text">Exceptional?</span></h2>
        <p style="color:var(--t2);font-size:.9rem">Free technical assessment. Honest advice. Real engineers. No sales pitch.</p>
      </div>
      <div class="flex gap-3 flex-shrink-0 relative z-10">
        <a href="{{ route('contact') }}"   class="btn-p">Talk to an Engineer</a>
        <a href="{{ route('portfolio') }}" class="btn-g">View Portfolio</a>
      </div>
    </div>
  </div>
</section>

@endsection
