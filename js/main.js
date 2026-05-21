// ═══════════════════════════════════════════════
//  EliteSalesLab — main.js (pure vanilla JS)
// ═══════════════════════════════════════════════

// ── Page Loader ──────────────────────────────────
window.addEventListener('load', () => {
  setTimeout(() => {
    const ld = document.getElementById('pg-ld');
    if (ld) ld.classList.add('hide');
  }, 1200);
});

// ── Navbar scroll ────────────────────────────────
const nb = document.getElementById('nb');
window.addEventListener('scroll', () => {
  if (nb) nb.classList.toggle('sc', window.scrollY > 60);
  const btn = document.getElementById('st-btn');
  if (btn) btn.classList.toggle('sh', window.scrollY > 300);
});

// ── Drawer ───────────────────────────────────────
function togDr() {
  const dr = document.getElementById('dr');
  const ov = document.getElementById('dr-ov');
  const hbg = document.getElementById('hbg');
  if (!dr) return;
  dr.classList.toggle('op');
  ov.classList.toggle('sh');
  hbg.classList.toggle('op');
  document.body.style.overflow = dr.classList.contains('op') ? 'hidden' : '';
}

// ── FAQ Accordion ────────────────────────────────
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

// ── Newsletter ───────────────────────────────────
function subNl() {
  const inp = document.getElementById('nl-em');
  const ok  = document.getElementById('nl-ok');
  if (!inp || !inp.value.includes('@')) {
    if (inp) inp.classList.add('er');
    setTimeout(() => inp && inp.classList.remove('er'), 1800);
    return;
  }
  if (ok) { ok.style.display = 'flex'; }
  const fm = inp.closest('.nl-fm');
  if (fm) fm.style.display = 'none';
  inp.value = '';
}

// ── Typed text (hero only) ────────────────────────
const WORDS = ['Drives Revenue','Scales Globally','Solves Problems','Creates Impact'];
let wi = 0, ci = 0, del = false;
function typeTick() {
  const el = document.getElementById('typed');
  if (!el) return;
  const w = WORDS[wi];
  if (!del) {
    ci++;
    el.textContent = w.substring(0, ci);
    if (ci === w.length) { del = true; setTimeout(typeTick, 2200); return; }
    setTimeout(typeTick, 85);
  } else {
    ci--;
    el.textContent = w.substring(0, ci);
    if (ci === 0) {
      del = false; wi = (wi + 1) % WORDS.length;
      setTimeout(typeTick, 320);
    } else { setTimeout(typeTick, 55); }
  }
}
if (document.getElementById('typed')) setTimeout(typeTick, 800);

// ── Counter animation ────────────────────────────
function animCounters() {
  document.querySelectorAll('[data-count]').forEach(el => {
    const target = +el.dataset.count;
    const suffix = el.dataset.suffix || '';
    let cur = 0;
    const step = target / 60;
    const iv = setInterval(() => {
      cur = Math.min(cur + step, target);
      el.textContent = Math.floor(cur) + suffix;
      if (cur >= target) { el.textContent = target + suffix; clearInterval(iv); }
    }, 18);
  });
}

// ── Intersection Observer (AOS + counters) ────────
const aosObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('aos-animate');
      aosObs.unobserve(e.target);
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

const statsObs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) { animCounters(); statsObs.unobserve(e.target); }
  });
}, { threshold: 0.3 });

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('[data-aos]').forEach(el => aosObs.observe(el));
  const sg = document.getElementById('stats-g');
  if (sg) statsObs.observe(sg);
});

// ── Portfolio filter ─────────────────────────────
function ptFilter(btn, cat) {
  document.querySelectorAll('.pt-fb').forEach(b => b.classList.remove('on'));
  btn.classList.add('on');
  document.querySelectorAll('.pt-c').forEach(c => {
    const show = cat === 'all' || c.dataset.cat === cat;
    c.style.display = show ? '' : 'none';
    if (show) {
      c.style.animation = 'none';
      c.offsetHeight; // reflow
      c.style.animation = 'fadeInUp .4s ease forwards';
    }
  });
}

// ── Apply modal (careers) ────────────────────────
function openApply(role) {
  const mo = document.getElementById('mo-apply');
  const roleEl = document.getElementById('mo-role');
  const roleInp = document.getElementById('apply-role');
  if (mo) mo.classList.add('op');
  if (roleEl) roleEl.textContent = role;
  if (roleInp) roleInp.value = role;
  document.body.style.overflow = 'hidden';
}
function closeMo() {
  document.querySelectorAll('.mo').forEach(m => m.classList.remove('op'));
  document.body.style.overflow = '';
  document.querySelectorAll('.fm-ok,.fm-er').forEach(el => el.style.display = 'none');
  const fm = document.getElementById('apply-fm');
  if (fm) fm.style.display = '';
}
function subApply(e) {
  e.preventDefault();
  const btn = document.getElementById('apply-btn');
  if (btn) { btn.textContent = 'Sending…'; btn.disabled = true; }
  setTimeout(() => {
    const ok = document.getElementById('apply-ok');
    const fm = document.getElementById('apply-fm');
    if (ok) ok.style.display = 'flex';
    if (fm) fm.style.display = 'none';
  }, 1400);
}

// ── Contact form ─────────────────────────────────
function subContact(e) {
  e.preventDefault();
  const btn = document.getElementById('ct-btn');
  if (btn) { btn.textContent = 'Sending…'; btn.disabled = true; }
  setTimeout(() => {
    const ok = document.getElementById('ct-ok');
    const fm = document.getElementById('ct-fm');
    if (ok) ok.style.display = 'flex';
    if (fm) fm.style.display = 'none';
  }, 1400);
}

// ── Smooth internal links ─────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const id = a.getAttribute('href').slice(1);
    const el = document.getElementById(id);
    if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
  });
});

// ── Keyboard ESC closes drawer / modal ───────────
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') {
    closeMo();
    const dr = document.getElementById('dr');
    if (dr && dr.classList.contains('op')) togDr();
  }
});

// CSS animation keyframe (inject for ptFilter)
const style = document.createElement('style');
style.textContent = '@keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}';
document.head.appendChild(style);
