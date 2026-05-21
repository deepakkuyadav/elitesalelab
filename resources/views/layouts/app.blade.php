<!DOCTYPE html>
<html lang="en" class="dark scroll-smooth">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title','EliteSalesLab — Premium Enterprise IT & Software Solutions')</title>
<meta name="description" content="@yield('desc','EliteSalesLab delivers world-class AI, ERP, mobile, web & cloud solutions for enterprises globally. 500+ projects. 18 countries.')">
<meta name="keywords" content="@yield('kw','AI solutions, ERP software, mobile app development, web development, cloud solutions, enterprise IT India')">
<meta name="robots" content="index,follow">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('title','EliteSalesLab — Premium Enterprise IT & Software Solutions')">
<meta property="og:description" content="@yield('desc','World-class enterprise IT solutions from EliteSalesLab.')">
<meta property="og:site_name" content="EliteSalesLab">
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config={darkMode:'class',theme:{extend:{fontFamily:{display:['Syne','sans-serif'],body:['DM Sans','sans-serif']},colors:{brand:{400:'#6A9FFF',500:'#3B7BFF',600:'#2563EB'},dark:{900:'#06091A',800:'#0B1028',700:'#101530',600:'#141A38'}}}}}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
@stack('styles')
<style>
:root{--bg:#06091A;--bg2:#0B1028;--bg3:#101530;--surf:#141A38;--blue:#3B7BFF;--vio:#8B5CF6;--cyan:#22D3EE;--em:#10B981;--amb:#F59E0B;--pk:#EC4899;--t1:#EEF2FF;--t2:#8896B8;--t3:#4B5982;--acc:#6A9FFF}
*,*::before,*::after{box-sizing:border-box}
body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--t1);-webkit-font-smoothing:antialiased;overflow-x:hidden}
h1,h2,h3,h4,h5{font-family:'Syne',sans-serif}
.grad-text{background:linear-gradient(135deg,#3B7BFF,#8B5CF6);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.grad-bg{background:linear-gradient(135deg,#3B7BFF,#8B5CF6)}
.glass{background:rgba(20,26,56,.72);backdrop-filter:blur(20px) saturate(160%);border:1px solid rgba(255,255,255,.08)}
.btn-p{display:inline-flex;align-items:center;gap:8px;padding:11px 24px;border-radius:12px;font-weight:600;font-size:.9rem;color:#fff;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);transition:all .2s;cursor:pointer;border:none;font-family:inherit;text-decoration:none;white-space:nowrap}
.btn-p:hover{opacity:.88;transform:translateY(-2px)}
.btn-g{display:inline-flex;align-items:center;gap:8px;padding:11px 24px;border-radius:12px;font-weight:500;font-size:.9rem;color:var(--t1);border:1px solid rgba(255,255,255,.15);transition:all .2s;cursor:pointer;background:transparent;font-family:inherit;text-decoration:none;white-space:nowrap}
.btn-g:hover{border-color:rgba(255,255,255,.3);background:rgba(255,255,255,.05);transform:translateY(-2px)}
.sec-badge{display:inline-flex;align-items:center;gap:6px;padding:5px 14px;border-radius:999px;font-size:.72rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;background:rgba(59,123,255,.1);border:1px solid rgba(59,123,255,.25);color:var(--acc)}
.fi{background:rgba(11,16,40,.8);border:1px solid rgba(255,255,255,.1);border-radius:12px;padding:12px 16px;font-size:.88rem;color:var(--t1);font-family:inherit;outline:none;width:100%;transition:border-color .2s,box-shadow .2s}
.fi::placeholder{color:var(--t3)}
.fi:focus{border-color:rgba(59,123,255,.5);box-shadow:0 0 0 3px rgba(59,123,255,.1)}
.fi.er{border-color:rgba(239,68,68,.5);box-shadow:0 0 0 3px rgba(239,68,68,.08)}
.card{background:var(--bg2);border:1px solid rgba(255,255,255,.07);border-radius:20px;transition:all .3s}
.card:hover{transform:translateY(-4px);border-color:rgba(59,123,255,.3)}
.dot-grid{background-image:radial-gradient(circle,rgba(255,255,255,.07) 1px,transparent 1px);background-size:36px 36px}
/* Loader */
#ld{position:fixed;inset:0;z-index:9999;background:var(--bg);display:flex;align-items:center;justify-content:center;transition:opacity .5s,visibility .5s}
#ld.out{opacity:0;visibility:hidden;pointer-events:none}
.ld-sq{width:60px;height:60px;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);border-radius:16px;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;animation:ldPulse 1.4s ease infinite}
@keyframes ldPulse{0%,100%{transform:scale(1);box-shadow:0 0 0 0 rgba(59,123,255,.4)}50%{transform:scale(1.05);box-shadow:0 0 0 14px rgba(59,123,255,0)}}
.ld-bar-w{width:160px;height:3px;background:rgba(255,255,255,.08);border-radius:99px;overflow:hidden;margin:16px auto 0}
.ld-bar{height:100%;background:linear-gradient(90deg,#3B7BFF,#8B5CF6);animation:ldBar 1.7s ease forwards;border-radius:99px}
@keyframes ldBar{0%{width:0}80%{width:80%}100%{width:100%}}
/* Navbar */
.nb{position:fixed;top:0;left:0;right:0;z-index:999;height:68px;background:rgba(6,9,26,.75);backdrop-filter:blur(24px) saturate(160%);border-bottom:1px solid rgba(255,255,255,.06);transition:background .3s,box-shadow .3s}
.nb.sc{background:rgba(6,9,26,.97);box-shadow:0 4px 40px rgba(0,0,0,.45)}
/* Drawer */
.dr{position:fixed;top:68px;right:0;bottom:0;width:270px;z-index:998;background:var(--bg2);border-left:1px solid rgba(255,255,255,.08);transform:translateX(100%);transition:transform .3s cubic-bezier(.4,0,.2,1);padding:16px;overflow-y:auto}
.dr.op{transform:translateX(0)}
/* Hamburger lines */
.hln{display:block;height:2px;background:var(--t1);border-radius:2px;transition:all .3s}
#hbg.op .hln:nth-child(1){transform:rotate(45deg) translate(5px,5px);width:22px}
#hbg.op .hln:nth-child(2){opacity:0;transform:translateX(-8px)}
#hbg.op .hln:nth-child(3){transform:rotate(-45deg) translate(5px,-5px);width:22px}
/* Ticker */
.tktr{display:flex;gap:20px;width:max-content;animation:ticker 26s linear infinite}
.tktr:hover{animation-play-state:paused}
@keyframes ticker{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}
/* Pulse */
.pulse{animation:pulse 2s ease infinite}
@keyframes pulse{0%,100%{box-shadow:0 0 0 0 rgba(59,123,255,.5)}70%{box-shadow:0 0 0 8px rgba(59,123,255,0)}}
/* FAQ */
.fa-ans{max-height:0;overflow:hidden;transition:max-height .38s ease}
.fa-ans.op{max-height:320px}
.fa-chv{transition:transform .3s}
.fa-item.op .fa-chv{transform:rotate(180deg)}
/* AOS */
[data-aos]{opacity:0;transition:opacity .65s,transform .65s}
[data-aos].aos-animate{opacity:1;transform:none}
[data-aos=fade-up]{transform:translateY(26px)}
[data-aos=fade-right]{transform:translateX(-26px)}
[data-aos=fade-left]{transform:translateX(26px)}
[data-aos=zoom-in]{transform:scale(.9)}
/* Scroll top */
#st{opacity:0;visibility:hidden;transition:all .3s}
#st.sh{opacity:1;visibility:visible}
/* Filter */
.fb{padding:7px 18px;border-radius:999px;font-size:.82rem;font-weight:600;cursor:pointer;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);color:var(--t2);transition:all .2s;font-family:inherit}
.fb.on,.fb:hover{background:linear-gradient(135deg,#3B7BFF,#8B5CF6);border-color:transparent;color:#fff}
/* Swiper */
.swiper-pagination-bullet{background:rgba(255,255,255,.3)!important}
.swiper-pagination-bullet-active{background:#3B7BFF!important}
/* Typing */
#typed::after{content:'|';animation:blink 1s step-end infinite}
@keyframes blink{50%{opacity:0}}
/* Dark mode toggle */
.dmt{width:44px;height:24px;background:rgba(255,255,255,.12);border-radius:999px;position:relative;cursor:pointer;transition:background .2s;flex-shrink:0}
.dmt.on{background:rgba(59,123,255,.6)}
.dmt::after{content:'';width:18px;height:18px;background:#fff;border-radius:50%;position:absolute;top:3px;left:3px;transition:left .2s}
.dmt.on::after{left:23px}
/* Section orb */
.orb{position:absolute;border-radius:50%;filter:blur(80px);pointer-events:none}
/* Nav active */
.nv-act{color:var(--acc)!important;background:var(--surf)!important}
/* Form message */
.fm-ok{background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.25);color:#34D399;padding:12px 16px;border-radius:12px;font-size:.85rem;display:flex;align-items:center;gap:8px}
.fm-er{background:rgba(239,68,68,.08);border:1px solid rgba(239,68,68,.2);color:#F87171;padding:12px 16px;border-radius:12px;font-size:.85rem;display:flex;align-items:center;gap:8px}
</style>
</head>
<body>

{{-- Page Loader --}}
<div id="ld">
  <div style="text-align:center">
    <div class="ld-sq"><span style="font-family:Syne,sans-serif;font-weight:800;font-size:1.5rem;color:#fff">E</span></div>
    <div style="font-family:Syne,sans-serif;font-weight:700;font-size:1.1rem;color:var(--t1)">Elite<span style="color:var(--acc)">Sales</span>Lab</div>
    <div class="ld-bar-w"><div class="ld-bar"></div></div>
  </div>
</div>

{{-- Navbar --}}
@include('components.navbar')

{{-- Mobile Drawer --}}
@include('components.drawer')
<div id="ov" class="fixed inset-0 bg-black/50 z-[997] hidden backdrop-blur-sm" onclick="closeDr()"></div>

{{-- Content --}}
<main>@yield('content')</main>

{{-- Footer --}}
@include('components.footer')

{{-- WhatsApp Float --}}
<a href="https://wa.me/{{ env('WHATSAPP_NUMBER','919876543210') }}" target="_blank" rel="noopener"
   class="fixed bottom-7 right-7 z-50 w-14 h-14 rounded-full flex items-center justify-center hover:scale-110 transition-transform"
   style="background:#25D366;box-shadow:0 6px 24px rgba(37,211,102,.4)">
  <svg viewBox="0 0 24 24" fill="white" width="26" height="26"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
</a>

{{-- Scroll Top --}}
<button id="st" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="fixed bottom-24 right-7 z-50 w-11 h-11 rounded-full glass flex items-center justify-center hover:scale-110 transition-all">
  <svg viewBox="0 0 24 24" fill="none" stroke="var(--acc)" stroke-width="2.5" width="16" height="16"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@stack('scripts')
<script>
// Loader
window.addEventListener('load',()=>setTimeout(()=>{const l=document.getElementById('ld');if(l)l.classList.add('out');},1300));
// Navbar scroll + scroll-top
const nb=document.querySelector('.nb'),st=document.getElementById('st');
window.addEventListener('scroll',()=>{nb?.classList.toggle('sc',scrollY>60);st?.classList.toggle('sh',scrollY>300);});
// Drawer
const dr=document.getElementById('dr'),hbg=document.getElementById('hbg'),ov=document.getElementById('ov');
function openDr(){hbg?.classList.add('op');dr?.classList.add('op');ov?.classList.remove('hidden')}
function closeDr(){hbg?.classList.remove('op');dr?.classList.remove('op');ov?.classList.add('hidden')}
hbg?.addEventListener('click',()=>dr?.classList.contains('op')?closeDr():openDr());
// Dark mode
const html=document.documentElement,dmt=document.getElementById('dmt');
const saved=localStorage.getItem('esl-theme');
if(saved==='light'){html.classList.remove('dark');dmt?.classList.remove('on')}
else{html.classList.add('dark');dmt?.classList.add('on')}
dmt?.addEventListener('click',()=>{html.classList.toggle('dark');dmt.classList.toggle('on');localStorage.setItem('esl-theme',html.classList.contains('dark')?'dark':'light');});
// AOS
document.addEventListener('DOMContentLoaded',()=>AOS.init({duration:680,once:true,easing:'ease-out-cubic',offset:55}));
// Stat counters
function runCounters(){document.querySelectorAll('[data-cnt]').forEach(el=>{const t=parseFloat(el.dataset.cnt),sx=el.dataset.sx||'',px=el.dataset.px||'';let c=0;const step=t/55;const iv=setInterval(()=>{c=Math.min(c+step,t);el.textContent=px+(Number.isInteger(t)?Math.floor(c):c.toFixed(1))+sx;if(c>=t)clearInterval(iv);},18);});}
const sc=document.querySelector('.sc-sec');if(sc){const io=new IntersectionObserver(en=>{if(en[0].isIntersecting){runCounters();io.disconnect();}},{threshold:.3});io.observe(sc);}
// Typed
const te=document.getElementById('typed');if(te){const ws=['Drives Revenue','Scales Globally','Solves Problems','Creates Impact'];let wi=0,ci=0,dl=false;function tl(){const w=ws[wi];te.textContent=dl?w.substring(0,ci--):w.substring(0,ci++);if(!dl&&ci===w.length+1){setTimeout(()=>{dl=true;tl();},2000);return;}if(dl&&ci===0){dl=false;wi=(wi+1)%ws.length;}setTimeout(tl,dl?55:85);}setTimeout(tl,1700);}
// FAQ
document.querySelectorAll('.fa-q').forEach(q=>{q.addEventListener('click',()=>{const it=q.parentElement,an=it.querySelector('.fa-ans'),op=it.classList.contains('op');document.querySelectorAll('.fa-item').forEach(i=>{i.classList.remove('op');i.querySelector('.fa-ans').classList.remove('op');});if(!op){it.classList.add('op');an.classList.add('op');}});});
// Portfolio filter
document.querySelectorAll('.fb').forEach(btn=>{btn.addEventListener('click',()=>{document.querySelectorAll('.fb').forEach(b=>b.classList.remove('on'));btn.classList.add('on');const cat=btn.dataset.filter;document.querySelectorAll('[data-cat]').forEach(c=>{c.style.display=(cat==='all'||c.dataset.cat===cat)?'':'none';});});});
// Swiper testimonials
document.addEventListener('DOMContentLoaded',()=>{if(document.querySelector('.ts-sw')){new Swiper('.ts-sw',{loop:true,autoplay:{delay:4500,disableOnInteraction:false},pagination:{el:'.swiper-pagination',clickable:true},breakpoints:{640:{slidesPerView:1},768:{slidesPerView:2,spaceBetween:20},1024:{slidesPerView:3,spaceBetween:24}}});}});
// AJAX helpers
function showMsg(el,type,txt){if(!el)return;el.className=type==='ok'?'fm-ok':'fm-er';el.innerHTML=(type==='ok'?'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="16" height="16"><polyline points="20 6 9 17 4 12"/></svg>':'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>')+txt;el.style.display='flex';}
const tok=()=>document.querySelector('meta[name=csrf-token]')?.content;
// Contact form
const cf=document.getElementById('cf');if(cf){cf.addEventListener('submit',async e=>{e.preventDefault();const btn=cf.querySelector('[type=submit]'),msg=document.getElementById('cf-msg'),orig=btn.innerHTML;btn.disabled=true;btn.textContent='Sending…';try{const r=await fetch(cf.action,{method:'POST',body:new FormData(cf),headers:{'X-CSRF-TOKEN':tok(),'Accept':'application/json'}});const d=await r.json();showMsg(msg,d.success?'ok':'er',d.message||'Error.');if(d.success){cf.reset();btn.textContent='Sent!';btn.style.background='linear-gradient(135deg,#059669,#10B981)';}else{btn.disabled=false;btn.innerHTML=orig;}}catch{showMsg(msg,'er','Something went wrong. Please try again.');btn.disabled=false;btn.innerHTML=orig;}});}
// Newsletter
document.querySelectorAll('.nl-fm').forEach(fm=>{fm.addEventListener('submit',async e=>{e.preventDefault();const btn=fm.querySelector('[type=submit]'),ml=fm.querySelector('.nl-msg');btn.disabled=true;try{const r=await fetch('/newsletter',{method:'POST',body:new FormData(fm),headers:{'X-CSRF-TOKEN':tok(),'Accept':'application/json'}});const d=await r.json();if(ml){ml.textContent=d.message;ml.className='nl-msg text-xs mt-2 '+(d.success?'text-emerald-400':'text-red-400');}if(d.success){fm.reset();btn.textContent='Subscribed!';}else btn.disabled=false;}catch{btn.disabled=false;}});});
// Apply form
const af=document.getElementById('af');if(af){af.addEventListener('submit',async e=>{e.preventDefault();const btn=af.querySelector('[type=submit]'),msg=document.getElementById('af-msg'),orig=btn.textContent;btn.disabled=true;btn.textContent='Submitting…';try{const r=await fetch('/careers/apply',{method:'POST',body:new FormData(af),headers:{'X-CSRF-TOKEN':tok(),'Accept':'application/json'}});const d=await r.json();showMsg(msg,d.success?'ok':'er',d.message);if(d.success){af.reset();btn.textContent='Submitted!';btn.style.background='linear-gradient(135deg,#059669,#10B981)';}else{btn.disabled=false;btn.textContent=orig;}}catch{showMsg(msg,'er','Something went wrong.');btn.disabled=false;btn.textContent=orig;}});document.getElementById('rv')?.addEventListener('change',function(){const lb=document.getElementById('flb');if(lb&&this.files[0])lb.textContent='✓ '+this.files[0].name;});}
</script>
</body>
</html>
