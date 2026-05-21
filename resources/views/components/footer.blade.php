<footer style="background:#040715;border-top:1px solid rgba(255,255,255,.06);padding:56px 0 28px">
  <div class="max-w-[1240px] mx-auto px-6">
    {{-- Newsletter banner --}}
    <div class="rounded-2xl p-10 mb-14 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden" style="background:linear-gradient(135deg,rgba(59,123,255,.15),rgba(139,92,246,.18));border:1px solid rgba(59,123,255,.2)">
      <div>
        <h3 style="font-family:Syne,sans-serif;font-weight:800;font-size:1.5rem;margin-bottom:6px">Stay Ahead of the <span class="grad-text">Tech Curve</span></h3>
        <p style="color:var(--t2);font-size:.88rem">Monthly insights on AI, ERP, and enterprise software. No spam.</p>
      </div>
      <form class="nl-fm flex gap-3 w-full md:w-auto" style="max-width:420px">
        @csrf
        <input type="email" name="email" class="fi flex-1" placeholder="your@email.com" required style="min-width:200px">
        <button type="submit" class="btn-p flex-shrink-0">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          Subscribe
        </button>
        <p class="nl-msg text-xs mt-1"></p>
      </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
      {{-- Brand --}}
      <div>
        <div class="flex items-center gap-2.5 mb-4">
          <div class="w-8 h-8 rounded-[9px] flex items-center justify-center flex-shrink-0" style="background:linear-gradient(135deg,#3B7BFF,#8B5CF6)">
            <span style="font-family:Syne,sans-serif;font-weight:800;font-size:.85rem;color:#fff">E</span>
          </div>
          <span style="font-family:Syne,sans-serif;font-weight:700;font-size:1.05rem">Elite<span style="color:var(--acc)">Sales</span>Lab</span>
        </div>
        <p style="font-size:.82rem;color:var(--t3);line-height:1.75;margin-bottom:18px;max-width:230px">Premium IT & Software Solutions. AI, ERP, mobile, and web development for enterprises globally since 2009.</p>
        <div class="flex gap-2">
          @foreach(['LinkedIn','Twitter','GitHub','Instagram'] as $s)
          <a href="#" class="w-9 h-9 rounded-lg flex items-center justify-center transition-all hover:scale-110" style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08)" aria-label="{{ $s }}">
            <span style="font-size:.6rem;font-weight:700;color:var(--t2)">{{ substr($s,0,2) }}</span>
          </a>
          @endforeach
        </div>
      </div>

      {{-- Services --}}
      <div>
        <h4 style="font-family:Syne,sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.08em;color:var(--t2);margin-bottom:16px">Services</h4>
        @foreach([['AI & ML Solutions','services.ai'],['ERP Development','services.erp'],['Web Development','services.web'],['Mobile Apps','services.mobile'],['Cloud & DevOps','services.cloud'],['Digital Transformation','services']] as $l)
        <a href="{{ route($l[1]) }}" style="display:block;font-size:.82rem;color:var(--t3);margin-bottom:9px;transition:color .15s" onmouseover="this.style.color='var(--acc)'" onmouseout="this.style.color='var(--t3)'">{{ $l[0] }}</a>
        @endforeach
      </div>

      {{-- Company --}}
      <div>
        <h4 style="font-family:Syne,sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.08em;color:var(--t2);margin-bottom:16px">Company</h4>
        @foreach([['About Us','about'],['Portfolio','portfolio'],['Case Studies','case-studies'],['Blog','blog'],['Careers','careers'],['Contact Us','contact']] as $l)
        <a href="{{ route($l[1]) }}" style="display:block;font-size:.82rem;color:var(--t3);margin-bottom:9px;transition:color .15s" onmouseover="this.style.color='var(--acc)'" onmouseout="this.style.color='var(--t3)'">{{ $l[0] }}</a>
        @endforeach
      </div>

      {{-- Contact --}}
      <div>
        <h4 style="font-family:Syne,sans-serif;font-weight:700;font-size:.75rem;text-transform:uppercase;letter-spacing:.08em;color:var(--t2);margin-bottom:16px">Contact</h4>
        @foreach(['Level 12, Platina Building, BKC Mumbai 400 051','hello@elitesaleslab.com','sales@elitesaleslab.com','+91 98765 43210','Mon–Fri: 9AM–7PM IST'] as $c)
        <p style="font-size:.82rem;color:var(--t3);margin-bottom:8px;line-height:1.65">{{ $c }}</p>
        @endforeach
        <div class="mt-4">
          <a href="{{ route('privacy') }}" style="display:block;font-size:.8rem;color:var(--t3);margin-bottom:6px" onmouseover="this.style.color='var(--acc)'" onmouseout="this.style.color='var(--t3)'">Privacy Policy</a>
          <a href="{{ route('terms') }}" style="display:block;font-size:.8rem;color:var(--t3)" onmouseover="this.style.color='var(--acc)'" onmouseout="this.style.color='var(--t3)'">Terms & Conditions</a>
        </div>
      </div>
    </div>

    {{-- Bottom --}}
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4" style="border-top:1px solid rgba(255,255,255,.06);padding-top:22px">
      <p style="font-size:.78rem;color:var(--t3)">© {{ date('Y') }} EliteSalesLab. All rights reserved.</p>
      <div class="flex items-center gap-5">
        <a href="{{ route('sitemap') }}" style="font-size:.75rem;color:var(--t3)">Sitemap</a>
        <a href="{{ route('privacy') }}" style="font-size:.75rem;color:var(--t3)">Privacy</a>
        <a href="{{ route('terms') }}"   style="font-size:.75rem;color:var(--t3)">Terms</a>
      </div>
    </div>
  </div>
</footer>
