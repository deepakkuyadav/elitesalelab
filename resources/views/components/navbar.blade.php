<nav class="nb">
  <div class="max-w-[1240px] mx-auto px-6 h-full flex items-center gap-5">
    {{-- Logo --}}
    <a href="{{ route('home') }}" class="flex items-center gap-2.5 flex-shrink-0">
      <div class="w-9 h-9 rounded-[10px] flex items-center justify-center overflow-hidden relative flex-shrink-0" style="background:linear-gradient(135deg,#3B7BFF,#8B5CF6)">
        <span style="font-family:Syne,sans-serif;font-weight:800;font-size:.9rem;color:#fff;position:relative;z-index:1">E</span>
        <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(255,255,255,.2),transparent)"></div>
      </div>
      <span style="font-family:Syne,sans-serif;font-weight:700;font-size:1.1rem;letter-spacing:-.02em;white-space:nowrap">Elite<span style="color:var(--acc)">Sales</span>Lab</span>
    </a>

    {{-- Desktop links --}}
    <div class="hidden lg:flex items-center gap-0.5 flex-1 justify-center">
      <a href="{{ route('home') }}"        class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs('home') ? 'nv-act' : 'text-[var(--t2)] hover:text-[var(--t1)] hover:bg-[var(--surf)]' }}">Home</a>

      {{-- Services dropdown --}}
      <div class="relative group">
        <button class="flex items-center gap-1 px-3.5 py-2 rounded-lg text-sm font-medium transition-all {{ request()->is('services*') ? 'nv-act' : 'text-[var(--t2)] hover:text-[var(--t1)] hover:bg-[var(--surf)]' }}">
          Services
          <svg class="w-3 h-3 transition-transform group-hover:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="absolute top-full left-1/2 mt-3 w-[620px] glass rounded-2xl p-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50" style="transform:translateX(-50%)">
          <div class="grid grid-cols-3 gap-2">
            @foreach([['AI & Machine Learning','services.ai','#3B7BFF'],['ERP Solutions','services.erp','#8B5CF6'],['Web Development','services.web','#22D3EE'],['Mobile Development','services.mobile','#10B981'],['Cloud Solutions','services.cloud','#F59E0B'],['Digital Transformation','services','#EC4899']] as $s)
            <a href="{{ route($s[1]) }}" class="flex items-center gap-3 p-3 rounded-xl hover:bg-[var(--bg3)] transition-colors text-sm font-medium text-[var(--t2)] hover:text-[var(--t1)]">
              <span class="w-2 h-2 rounded-full flex-shrink-0" style="background:{{ $s[2] }}"></span>{{ $s[0] }}
            </a>
            @endforeach
          </div>
          <div class="mt-3 pt-3" style="border-top:1px solid rgba(255,255,255,.06)">
            <a href="{{ route('services') }}" style="font-size:.75rem;color:var(--acc);font-weight:600">View all services →</a>
          </div>
        </div>
      </div>

      @foreach([['Portfolio','portfolio'],['Case Studies','case-studies'],['Blog','blog'],['About','about'],['Careers','careers']] as $ln)
      <a href="{{ route($ln[1]) }}" class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all {{ request()->routeIs($ln[1].'*') ? 'nv-act' : 'text-[var(--t2)] hover:text-[var(--t1)] hover:bg-[var(--surf)]' }}">{{ $ln[0] }}</a>
      @endforeach
    </div>

    {{-- Right actions --}}
    <div class="flex items-center gap-3 flex-shrink-0">
      {{-- Dark mode --}}
      <div id="dmt" class="dmt hidden sm:block" title="Toggle dark/light mode"></div>
      <a href="{{ route('contact') }}" class="hidden md:flex btn-p py-2 px-5 text-sm">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        Get a Quote
      </a>
      {{-- Hamburger --}}
      <button id="hbg" class="flex flex-col gap-[5px] p-1.5 lg:hidden" style="cursor:pointer" aria-label="Menu">
        <span class="hln" style="width:22px"></span>
        <span class="hln" style="width:16px"></span>
        <span class="hln" style="width:20px"></span>
      </button>
    </div>
  </div>
</nav>
