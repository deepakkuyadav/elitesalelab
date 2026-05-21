@extends('layouts.app')
@section('title','Contact EliteSalesLab — Get a Free Quote')
@section('desc','Contact EliteSalesLab to discuss your project, get a free quote, or book a technical consultation.')
@section('content')
<section class="pt-32 pb-20 relative overflow-hidden">
  <div class="absolute inset-0 pointer-events-none"><div class="orb" style="width:500px;height:500px;background:radial-gradient(circle,rgba(59,123,255,.18),transparent);top:-150px;left:-100px"></div><div class="absolute inset-0 dot-grid"></div></div>
  <div class="max-w-[1240px] mx-auto px-6 relative z-10">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="sec-badge mb-4">Get in Touch</div>
      <h1 style="font-family:Syne,sans-serif;font-weight:800;font-size:clamp(2rem,4vw,3rem);letter-spacing:-.04em;margin-bottom:14px">Let's Build Something <span class="grad-text">Together</span></h1>
      <p style="color:var(--t2);font-size:.95rem;max-width:480px;margin:0 auto">Most enquiries get a response within 4 business hours. NDA available before any call.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-[1.4fr_1fr] gap-10">
      <div class="glass rounded-2xl p-8 md:p-10" data-aos="fade-right">
        <h2 style="font-family:Syne,sans-serif;font-weight:800;font-size:1.4rem;margin-bottom:6px">Send Us a Message</h2>
        <p style="color:var(--t2);font-size:.85rem;margin-bottom:28px">Our team responds within one business day.</p>
        <form id="cf" action="{{ route('contact.store') }}" method="POST">
          @csrf
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Full Name *</label><input type="text" name="name" class="fi" placeholder="Rahul Sharma" required></div>
            <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Email *</label><input type="email" name="email" class="fi" placeholder="rahul@company.com" required></div>
            <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Phone</label><input type="tel" name="phone" class="fi" placeholder="+91 98765 43210"></div>
            <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Company</label><input type="text" name="company" class="fi" placeholder="Your Company Ltd."></div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Service</label>
              <select name="service" class="fi" style="cursor:pointer"><option value="">— Select —</option>@foreach(['AI & Machine Learning','ERP Solutions','Mobile App Development','Web Development','Cloud & DevOps','Digital Transformation','Other'] as $s)<option>{{ $s }}</option>@endforeach</select>
            </div>
            <div><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Budget Range</label>
              <select name="budget" class="fi" style="cursor:pointer"><option value="">— Select —</option>@foreach(['Under INR 5 Lakhs','INR 5-20 Lakhs','INR 20-50 Lakhs','INR 50 Lakhs - 1 Crore','1 Crore+','Not decided'] as $b)<option>{{ $b }}</option>@endforeach</select>
            </div>
          </div>
          <div class="mb-6"><label class="block text-xs font-semibold mb-2 uppercase tracking-wider" style="color:var(--t2)">Project Description *</label><textarea name="message" class="fi" rows="5" placeholder="Describe what you're building, your timeline, and any specific requirements…" required style="resize:none"></textarea></div>
          <div id="cf-msg" style="display:none;margin-bottom:16px"></div>
          <button type="submit" class="btn-p w-full justify-center py-3.5">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="15" height="15"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
            <span>Send Message</span>
          </button>
        </form>
      </div>
      <div style="display:flex;flex-direction:column;gap:16px" data-aos="fade-left">
        <div class="glass rounded-2xl p-7">
          <h3 style="font-family:Syne,sans-serif;font-weight:700;font-size:1.05rem;margin-bottom:20px">Contact Information</h3>
          @foreach([['#3B7BFF','Level 12, Platina Building, BKC, Mumbai 400 051'],['#8B5CF6','+91 98765 43210 | +91 22 4455 6677'],['#22D3EE','hello@elitesaleslab.com'],['#10B981','Mon–Fri: 9AM–7PM IST | Sat: 10AM–4PM IST']] as $ci)
          <div class="flex items-start gap-4 mb-4 pb-4" style="border-bottom:1px solid rgba(255,255,255,.06)">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background:{{ $ci[0] }}18">
              <div class="w-3 h-3 rounded-full" style="background:{{ $ci[0] }}"></div>
            </div>
            <p style="font-size:.84rem;color:var(--t2);line-height:1.65;margin-top:8px">{{ $ci[1] }}</p>
          </div>
          @endforeach
        </div>
        <div class="glass rounded-2xl p-7">
          <a href="{{ route('careers') }}" class="btn-p w-full justify-center mb-3 py-3">Book a Consultation</a>
          <a href="https://wa.me/919876543210" target="_blank" class="btn-g w-full justify-center py-3">Chat on WhatsApp</a>
        </div>
        <div class="glass rounded-2xl overflow-hidden flex items-center justify-center flex-col gap-3" style="height:180px">
          <svg viewBox="0 0 24 24" fill="none" stroke="#3B7BFF" stroke-width="1.5" width="38" height="38"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <p style="font-size:.78rem;color:var(--t3)">Level 12, Platina Building, BKC, Mumbai</p>
          <a href="https://maps.google.com" target="_blank" style="font-size:.75rem;color:var(--acc)">Open in Google Maps →</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
