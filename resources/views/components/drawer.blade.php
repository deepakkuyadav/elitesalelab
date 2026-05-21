<div id="dr" class="dr">
  @foreach([['Home','home'],['About','about'],['Portfolio','portfolio'],['Case Studies','case-studies'],['Blog','blog'],['Careers','careers'],['Contact','contact']] as $ln)
  <a href="{{ route($ln[1]) }}" onclick="closeDr()" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-medium transition-all {{ request()->routeIs($ln[1].'*')?'text-[var(--acc)] bg-[var(--surf)]':'text-[var(--t2)] hover:text-[var(--t1)] hover:bg-[var(--surf)]' }}">{{ $ln[0] }}</a>
  @endforeach
  <div class="my-3" style="border-top:1px solid rgba(255,255,255,.07)"></div>
  <p class="px-4 mb-2 text-[.7rem] font-bold uppercase tracking-wider text-[var(--t3)]">Services</p>
  @foreach([['AI Solutions','services.ai'],['ERP Solutions','services.erp'],['Web Development','services.web'],['Mobile Development','services.mobile'],['Cloud Solutions','services.cloud']] as $s)
  <a href="{{ route($s[1]) }}" onclick="closeDr()" class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm text-[var(--t2)] hover:text-[var(--t1)] hover:bg-[var(--surf)] transition-all">{{ $s[0] }}</a>
  @endforeach
  <div class="mt-4">
    <a href="{{ route('contact') }}" onclick="closeDr()" class="btn-p w-full justify-center py-3">Get a Free Quote</a>
  </div>
</div>
