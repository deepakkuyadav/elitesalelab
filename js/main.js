/* ═══════════════════════════════════════════════════════════
   EliteSalesLab — main.js  (fully dynamic v3.0)
   Pure Vanilla JS · No dependencies · All features
═══════════════════════════════════════════════════════════ */

// ── Page Loader ──────────────────────────────────────────────
window.addEventListener('load', () => {
  setTimeout(() => {
    const ld = document.getElementById('pg-ld');
    if (ld) { ld.classList.add('hide'); document.body.style.overflow = ''; }
  }, 1100);
});

// ── Scroll Progress Bar ──────────────────────────────────────
const progressBar = document.createElement('div');
progressBar.id = 'scroll-prog';
progressBar.style.cssText = 'position:fixed;top:0;left:0;height:3px;background:linear-gradient(90deg,#3B7BFF,#8B5CF6,#22D3EE);z-index:10000;width:0%;transition:width .1s;border-radius:0 2px 2px 0';
document.body.prepend(progressBar);

window.addEventListener('scroll', () => {
  const pct = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
  progressBar.style.width = Math.min(pct, 100) + '%';

  // Navbar scroll
  const nb = document.getElementById('nb');
  if (nb) nb.classList.toggle('sc', window.scrollY > 60);

  // Scroll-to-top
  const st = document.getElementById('st-btn');
  if (st) st.classList.toggle('sh', window.scrollY > 300);

  // AOS trigger
  triggerAOS();
});

// ── AOS (Animate on Scroll) ──────────────────────────────────
function triggerAOS() {
  document.querySelectorAll('[data-aos]:not(.aos-animate)').forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight - 60) {
      const delay = el.dataset.aosDelay || 0;
      setTimeout(() => el.classList.add('aos-animate'), parseInt(delay));
    }
  });
}
document.addEventListener('DOMContentLoaded', () => {
  setTimeout(triggerAOS, 120);
});

// ── Counter Animation ─────────────────────────────────────────
let countersRun = false;
function runCounters() {
  if (countersRun) return;
  const els = document.querySelectorAll('[data-count]');
  if (!els.length) return;
  const rect = els[0].closest('#stats-g, section');
  if (!rect) return;
  const r = rect.getBoundingClientRect();
  if (r.top < window.innerHeight - 80) {
    countersRun = true;
    els.forEach(el => {
      const target = +el.dataset.count;
      const suffix = el.dataset.suffix || '';
      let cur = 0;
      const step = target / 70;
      const iv = setInterval(() => {
        cur = Math.min(cur + step, target);
        el.textContent = Math.floor(cur) + suffix;
        if (cur >= target) { el.textContent = target + suffix; clearInterval(iv); }
      }, 16);
    });
  }
}
window.addEventListener('scroll', runCounters);
document.addEventListener('DOMContentLoaded', runCounters);

// ── Drawer ────────────────────────────────────────────────────
function togDr() {
  const dr = document.getElementById('dr');
  const ov = document.getElementById('dr-ov');
  const hb = document.getElementById('hbg');
  if (!dr) return;
  const open = dr.classList.toggle('op');
  ov.classList.toggle('sh', open);
  hb.classList.toggle('op', open);
  document.body.style.overflow = open ? 'hidden' : '';
}

// ── FAQ ───────────────────────────────────────────────────────
function togFaq(el) {
  const isOpen = el.classList.contains('op');
  document.querySelectorAll('.faq-i').forEach(i => {
    i.classList.remove('op');
    const a = i.querySelector('.faq-a');
    if (a) a.classList.remove('op');
  });
  if (!isOpen) {
    el.classList.add('op');
    const a = el.querySelector('.faq-a');
    if (a) a.classList.add('op');
  }
}

// ── Newsletter ────────────────────────────────────────────────
function subNl() {
  const inp = document.getElementById('nl-em');
  const ok  = document.getElementById('nl-ok');
  if (!inp) return;
  if (!inp.value.includes('@') || !inp.value.includes('.')) {
    inp.classList.add('er');
    inp.placeholder = 'Please enter a valid email';
    setTimeout(() => { inp.classList.remove('er'); inp.placeholder = 'your@email.com'; }, 2000);
    return;
  }
  if (ok) ok.style.display = 'flex';
  if (inp.closest('.nl-fm')) inp.closest('.nl-fm').style.opacity = '0';
  inp.value = '';
}

// ── Typed Text ────────────────────────────────────────────────
const WORDS = ['Drives Revenue','Scales Globally','Solves Problems','Creates Impact','Transforms Businesses'];
let wi = 0, ci = 0, deleting = false;

function typeTick() {
  const el = document.getElementById('typed');
  if (!el) return;
  const w = WORDS[wi];
  if (!deleting) {
    ci++;
    el.textContent = w.substring(0, ci);
    if (ci === w.length) { deleting = true; setTimeout(typeTick, 2400); return; }
    setTimeout(typeTick, 78);
  } else {
    ci--;
    el.textContent = w.substring(0, ci);
    if (ci === 0) { deleting = false; wi = (wi + 1) % WORDS.length; setTimeout(typeTick, 340); }
    else { setTimeout(typeTick, 48); }
  }
}
if (document.getElementById('typed')) setTimeout(typeTick, 900);

// ── Hero Particle Canvas ─────────────────────────────────────
function initParticles() {
  const hero = document.querySelector('.hero');
  if (!hero) return;
  const canvas = document.createElement('canvas');
  canvas.style.cssText = 'position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;opacity:.45';
  hero.appendChild(canvas);
  const ctx = canvas.getContext('2d');

  let W, H, pts;
  function resize() {
    W = canvas.width  = hero.offsetWidth;
    H = canvas.height = hero.offsetHeight;
    pts = Array.from({length: 55}, () => ({
      x: Math.random() * W, y: Math.random() * H,
      vx: (Math.random() - .5) * .5, vy: (Math.random() - .5) * .5,
      r: Math.random() * 2 + 1,
      c: ['#3B7BFF','#8B5CF6','#22D3EE'][Math.floor(Math.random() * 3)]
    }));
  }
  window.addEventListener('resize', resize);
  resize();

  function draw() {
    ctx.clearRect(0, 0, W, H);
    pts.forEach(p => {
      p.x += p.vx; p.y += p.vy;
      if (p.x < 0 || p.x > W) p.vx *= -1;
      if (p.y < 0 || p.y > H) p.vy *= -1;
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = p.c;
      ctx.globalAlpha = .7;
      ctx.fill();
    });
    // Draw connections
    ctx.globalAlpha = .08;
    for (let i = 0; i < pts.length; i++) {
      for (let j = i + 1; j < pts.length; j++) {
        const dx = pts[i].x - pts[j].x, dy = pts[i].y - pts[j].y;
        const dist = Math.sqrt(dx*dx + dy*dy);
        if (dist < 120) {
          ctx.beginPath();
          ctx.moveTo(pts[i].x, pts[i].y);
          ctx.lineTo(pts[j].x, pts[j].y);
          ctx.strokeStyle = '#3B7BFF';
          ctx.lineWidth = 1;
          ctx.stroke();
        }
      }
    }
    ctx.globalAlpha = 1;
    requestAnimationFrame(draw);
  }
  draw();
}
document.addEventListener('DOMContentLoaded', initParticles);

// ── Testimonials Auto Slider ──────────────────────────────────
function initTestiSlider() {
  const grid = document.querySelector('.ts-g');
  if (!grid) return;
  const cards = Array.from(grid.querySelectorAll('.ts-c'));
  if (cards.length < 4) return;

  let current = 0;
  const visible = window.innerWidth < 768 ? 1 : window.innerWidth < 1024 ? 2 : 3;

  function update() {
    cards.forEach((c, i) => {
      const show = i >= current && i < current + visible;
      c.style.transition = 'opacity .5s, transform .5s';
      c.style.opacity    = show ? '1' : '0';
      c.style.transform  = show ? 'scale(1)' : 'scale(.97)';
      c.style.display    = show ? '' : 'none';
    });
    // Update dots
    document.querySelectorAll('.ts-dot').forEach((d, i) => {
      d.style.background  = i === current ? '#3B7BFF' : 'rgba(255,255,255,.2)';
      d.style.width       = i === current ? '24px' : '8px';
    });
  }

  // Create dots
  const dotsWrap = document.createElement('div');
  dotsWrap.style.cssText = 'display:flex;justify-content:center;gap:8px;margin-top:28px';
  const maxDots = cards.length - visible + 1;
  for (let i = 0; i < maxDots; i++) {
    const d = document.createElement('button');
    d.className = 'ts-dot';
    d.style.cssText = `height:8px;border-radius:99px;border:none;cursor:pointer;background:rgba(255,255,255,.2);transition:all .3s;width:${i===0?24:8}px`;
    d.onclick = () => { current = i; update(); };
    dotsWrap.appendChild(d);
  }
  grid.parentNode.insertBefore(dotsWrap, grid.nextSibling);

  // Auto play
  const iv = setInterval(() => {
    current = (current + 1) % maxDots;
    update();
  }, 4000);

  update();
  // Pause on hover
  grid.addEventListener('mouseenter', () => clearInterval(iv));
}
document.addEventListener('DOMContentLoaded', initTestiSlider);

// ── Portfolio Filter (smooth) ─────────────────────────────────
function ptFilter(btn, cat) {
  document.querySelectorAll('.pt-fb').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  const grid = document.getElementById('pt-g');
  if (!grid) return;
  const cards = grid.querySelectorAll('.pt-c');
  let delay = 0;
  cards.forEach(c => {
    const show = cat === 'all' || c.dataset.cat === cat;
    c.style.transition = `opacity .35s ${delay}s, transform .35s ${delay}s`;
    if (show) {
      c.style.display   = '';
      setTimeout(() => { c.style.opacity = '1'; c.style.transform = 'translateY(0)'; }, 20);
    } else {
      c.style.opacity   = '0';
      c.style.transform = 'translateY(12px)';
      setTimeout(() => { c.style.display = 'none'; }, 380);
    }
    if (show) delay += 0.06;
  });
}

// ── Card Tilt Effect ─────────────────────────────────────────
function initTilt() {
  document.querySelectorAll('.sv-c, .card, .ai-card, .stat-c').forEach(card => {
    card.addEventListener('mousemove', e => {
      const r  = card.getBoundingClientRect();
      const x  = e.clientX - r.left - r.width / 2;
      const y  = e.clientY - r.top - r.height / 2;
      const tx = (x / r.width) * 8;
      const ty = (y / r.height) * -8;
      card.style.transform = `translateY(-5px) rotateX(${ty}deg) rotateY(${tx}deg)`;
      card.style.transition = 'transform .1s';
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform  = '';
      card.style.transition = 'transform .4s';
    });
  });
}
document.addEventListener('DOMContentLoaded', initTilt);

// Page transitions disabled (conflicts resolved)

// ── Careers Apply Modal ───────────────────────────────────────
function openApply(role) {
  const mo  = document.getElementById('mo-apply');
  const rl  = document.getElementById('mo-role');
  const inp = document.getElementById('apply-role');
  if (mo)  mo.classList.add('op');
  if (rl)  rl.textContent = role;
  if (inp) inp.value = role;
  document.body.style.overflow = 'hidden';
}
function closeMo() {
  document.querySelectorAll('.mo').forEach(m => m.classList.remove('op'));
  document.body.style.overflow = '';
  document.querySelectorAll('.fm-ok,.fm-er').forEach(e => e.style.display = 'none');
  const fm = document.getElementById('apply-fm');
  if (fm) fm.style.display = '';
  const btn = document.getElementById('apply-btn');
  if (btn) { btn.textContent = 'Submit Application'; btn.disabled = false; }
}
function subApply(e) {
  e.preventDefault();
  const btn = document.getElementById('apply-btn');
  if (btn) { btn.innerHTML = '<span style="display:inline-flex;gap:8px;align-items:center"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-.48-2.49"/></svg> Sending…</span>'; btn.disabled = true; }
  setTimeout(() => {
    const ok = document.getElementById('apply-ok');
    const fm = document.getElementById('apply-fm');
    if (ok) ok.style.display = 'flex';
    if (fm) fm.style.display = 'none';
  }, 1500);
}

// ── Contact Form with Validation ─────────────────────────────
function subContact(e) {
  e.preventDefault();
  const form = e.target;
  let valid = true;

  // Validate required fields
  form.querySelectorAll('[required]').forEach(inp => {
    if (!inp.value.trim()) {
      inp.classList.add('er');
      valid = false;
      inp.addEventListener('input', () => inp.classList.remove('er'), { once: true });
    }
  });
  // Email check
  const email = form.querySelector('[type="email"]');
  if (email && (!email.value.includes('@') || !email.value.includes('.'))) {
    email.classList.add('er'); valid = false;
  }
  if (!valid) {
    // Shake the button
    const btn = document.getElementById('ct-btn');
    if (btn) { btn.style.animation = 'shake .4s ease'; setTimeout(() => btn.style.animation = '', 400); }
    return;
  }

  const btn = document.getElementById('ct-btn');
  if (btn) {
    btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="15" height="15"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-.48-2.49"/></svg> Sending…';
    btn.disabled = true;
  }
  setTimeout(() => {
    const ok = document.getElementById('ct-ok');
    const fm = document.getElementById('ct-fm');
    if (ok) ok.style.display = 'flex';
    if (fm) { fm.style.opacity = '0'; fm.style.pointerEvents = 'none'; }
    if (btn) { btn.disabled = false; }
  }, 1500);
}

// ── File Upload ───────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
  const fileInp = document.getElementById('resume-file');
  const fileNm  = document.getElementById('file-nm');
  if (fileInp && fileNm) {
    fileInp.addEventListener('change', () => {
      if (fileInp.files[0]) {
        fileNm.textContent = '✓ ' + fileInp.files[0].name;
        fileNm.style.display = 'block';
        fileNm.style.color   = '#34D399';
      }
    });
  }

  // Drag and drop
  const drop = document.querySelector('.fi-drop');
  if (drop) {
    drop.addEventListener('dragover', e => { e.preventDefault(); drop.style.borderColor = 'rgba(59,123,255,.6)'; });
    drop.addEventListener('dragleave', () => { drop.style.borderColor = ''; });
    drop.addEventListener('drop', e => {
      e.preventDefault();
      drop.style.borderColor = '';
      const file = e.dataTransfer.files[0];
      if (file && fileInp && fileNm) {
        fileInp.files = e.dataTransfer.files;
        fileNm.textContent = '✓ ' + file.name;
        fileNm.style.display = 'block';
        fileNm.style.color   = '#34D399';
      }
    });
  }
});

// ── Keyboard shortcuts ────────────────────────────────────────
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') {
    closeMo();
    const dr = document.getElementById('dr');
    if (dr && dr.classList.contains('op')) togDr();
  }
});

// ── Smooth anchor scroll ──────────────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const id = a.getAttribute('href').slice(1);
    const el = document.getElementById(id);
    if (el) {
      e.preventDefault();
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

// ── Inject keyframes ──────────────────────────────────────────
const sty = document.createElement('style');
sty.textContent = `
  @keyframes fadeInUp { from{opacity:0;transform:translateY(24px)} to{opacity:1;transform:none} }
  @keyframes shake { 0%,100%{transform:translateX(0)} 25%{transform:translateX(-6px)} 75%{transform:translateX(6px)} }
  @keyframes spinIn { from{opacity:0;transform:rotate(-10deg) scale(.9)} to{opacity:1;transform:none} }
  .card, .sv-c { transform-style: preserve-3d; will-change: transform; }
`;
document.head.appendChild(sty);

// ── Mobile: close drawer on link click ───────────────────────
document.querySelectorAll('.dr-lk, .dr a').forEach(a => {
  a.addEventListener('click', () => {
    const dr = document.getElementById('dr');
    if (dr && dr.classList.contains('op')) togDr();
  });
});

// ── Number ticker on stats (if not already done) ─────────────
const statsObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { runCounters(); statsObs.disconnect(); } });
}, { threshold: .3 });
const sg = document.getElementById('stats-g') || document.querySelector('.stats-g');
if (sg) statsObs.observe(sg);

// ── Blog card image placeholder colors ───────────────────────
document.querySelectorAll('.bl-img').forEach((img, i) => {
  const colors = ['rgba(59,123,255,.12)','rgba(139,92,246,.12)','rgba(34,211,238,.12)','rgba(16,185,129,.12)','rgba(245,158,11,.12)','rgba(236,72,153,.12)'];
  img.style.background = `linear-gradient(135deg,var(--bg3),${colors[i % colors.length]})`;
});

// ── Job card hover ────────────────────────────────────────────
document.querySelectorAll('.job-c').forEach(c => {
  c.style.cursor = 'pointer';
});

console.log('%cEliteSalesLab %cv3.0 loaded', 'color:#3B7BFF;font-weight:800;font-size:14px','color:#8B5CF6;font-size:12px');
