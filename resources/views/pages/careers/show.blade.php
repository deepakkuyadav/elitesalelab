@extends('layouts.app')
@section('title',$job['title'].' — Careers at EliteSalesLab')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="mb-6"><a href="{{ route('careers') }}" style="font-size:.875rem;color:var(--acc);display:inline-flex;align-items:center;gap:6px"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><polyline points="15 18 9 12 15 6"/></svg>Back to Careers</a></div>
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-10">
      <div>
        <div class="glass rounded-2xl p-8 mb-6" data-aos="fade-right">
          <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(1.5rem,3vw,2rem);letter-spacing:-.03em;margin-bottom:12px">{{ $job['title'] }}</h1>
          <div class="flex flex-wrap gap-2">
            <span style="font-size:.72rem;padding:4px 12px;border-radius:999px;background:rgba(139,92,246,.1);border:1px solid rgba(139,92,246,.2);color:#A78BFA;font-weight:600">{{ $job['dept'] }}</span>
            <span style="font-size:.72px;padding:4px 12px;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);color:var(--t3)">{{ $job['location'] }}</span>
            <span style="font-size:.72rem;padding:4px 12px;border-radius:999px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);color:var(--t3)">{{ $job['exp'] }}</span>
            @if(isset($job['salary']))<span style="font-size:.72rem;padding:4px 12px;border-radius:999px;background:rgba(16,185,129,.08);border:1px solid rgba(16,185,129,.2);color:#34D399;font-weight:600">{{ $job['salary'] }}</span>@endif
          </div>
        </div>
        @foreach([['Responsibilities',$job['resp']],['Requirements',$job['req']]] as $sec)
        <div class="glass rounded-2xl p-8 mb-6" data-aos="fade-up">
          <h2 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.1rem;margin-bottom:16px">{{ $sec[0] }}</h2>
          @foreach($sec[1] as $item)
          <div class="flex items-start gap-3 mb-3">
            <div class="w-5 h-5 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5" style="background:rgba(59,123,255,.15)"><svg viewBox="0 0 24 24" fill="none" stroke="#3B7BFF" stroke-width="2.5" width="11" height="11"><polyline points="20 6 9 17 4 12"/></svg></div>
            <span style="font-size:.87rem;color:var(--t2)">{{ $item }}</span>
          </div>
          @endforeach
        </div>
        @endforeach
        {{-- Apply form --}}
        <div class="glass rounded-2xl p-8" id="apply-section" data-aos="fade-up">
          <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:1.3rem;margin-bottom:6px">Apply for This Role</h2>
          <p style="color:var(--t2);font-size:.85rem;margin-bottom:24px">We review all applications within 3 business days.</p>
          <form id="af" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="role" value="{{ $job['title'] }}">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
              <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Full Name *</label><input type="text" name="name" class="fi" placeholder="Your name" required></div>
              <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Email *</label><input type="email" name="email" class="fi" placeholder="your@email.com" required></div>
              <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Phone</label><input type="tel" name="phone" class="fi" placeholder="+91 98765 43210"></div>
              <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">LinkedIn</label><input type="url" name="linkedin" class="fi" placeholder="linkedin.com/in/yourname"></div>
            </div>
            <div class="mb-4"><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Portfolio / GitHub</label><input type="url" name="portfolio" class="fi" placeholder="github.com/yourusername"></div>
            <div class="mb-4"><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Why EliteSalesLab? *</label><textarea name="message" class="fi" rows="4" placeholder="Tell us about yourself and why this role excites you…" required style="resize:none"></textarea></div>
            <div class="mb-6">
              <label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Resume (PDF, max 5MB) *</label>
              <div class="rounded-xl p-7 text-center cursor-pointer transition-all" style="background:rgba(11,16,40,.8);border:2px dashed rgba(255,255,255,.1)" onclick="document.getElementById('rv').click()">
                <input type="file" id="rv" name="resume" accept=".pdf" class="hidden" required>
                <svg viewBox="0 0 24 24" fill="none" stroke="#3B7BFF" stroke-width="1.5" width="32" height="32" class="mx-auto mb-2"><polyline points="16 16 12 12 8 16"/><line x1="12" y1="12" x2="12" y2="21"/><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"/></svg>
                <p style="font-size:.84rem;color:var(--t2)"><b style="color:var(--acc)">Click to upload</b> or drag & drop</p>
                <p id="flb" style="font-size:.78rem;color:var(--t3);margin-top:4px">PDF only, max 5MB</p>
              </div>
            </div>
            <div id="af-msg" style="display:none;margin-bottom:16px"></div>
            <button type="submit" class="btn-p w-full justify-center py-3.5">Submit Application</button>
          </form>
        </div>
      </div>
      <div style="display:flex;flex-direction:column;gap:16px" data-aos="fade-left">
        <div class="glass rounded-2xl p-6" style="position:sticky;top:88px">
          <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:1rem;margin-bottom:16px">Job Summary</h3>
          @foreach([['Type',$job['type']],['Location',$job['location']],['Experience',$job['exp']],['Department',$job['dept']],['Compensation',isset($job['salary'])?$job['salary']:'Competitive']] as $item)
          <div class="flex items-center justify-between py-2.5" style="border-bottom:1px solid rgba(255,255,255,.06)">
            <span style="font-size:.78rem;color:var(--t3)">{{ $item[0] }}</span>
            <span style="font-size:.78rem;font-weight:600">{{ $item[1] }}</span>
          </div>
          @endforeach
          <a href="#apply-section" class="btn-p w-full justify-center mt-5 py-3">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
