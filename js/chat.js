/* ═══════════════════════════════════════════════
   EliteSalesLab AI Chat — Aria v2 (bulletproof)
═══════════════════════════════════════════════ */
;(function() {

var OPEN = false;

/* ── Knowledge & Responses ─────────────────── */
var INTENTS = [
  { id:'greet',    keys:['hello','hi','hey','namaste','hlo','hii','good morning','good evening','start','help'] },
  { id:'services', keys:['service','services','what do you','offer','build','develop','kya karte ho','what can'] },
  { id:'ai',       keys:['ai','ml','machine learning','artificial','llm','neural','chatbot','nlp','automation','predict','deep learning','genai'] },
  { id:'erp',      keys:['erp','enterprise resource','inventory','finance module','hr module','payroll','supply chain','manufacturing','accounting'] },
  { id:'web',      keys:['web','website','saas','portal','ecommerce','e-commerce','laravel','react','nextjs','frontend','backend'] },
  { id:'mobile',   keys:['mobile','app','ios','android','flutter','react native','play store','app store','smartphone'] },
  { id:'cloud',    keys:['cloud','aws','azure','gcp','devops','kubernetes','docker','terraform','ci cd','deployment','server','hosting'] },
  { id:'dt',       keys:['digital transform','legacy','modernise','modernize','old system','process automation','digitise','digitize'] },
  { id:'pricing',  keys:['price','pricing','cost','budget','how much','kitna','charges','rate','fee','package','pakage','money','rupees','inr'] },
  { id:'timeline', keys:['timeline','how long','time','duration','delivery','kab','kitne din','weeks','months','deadline'] },
  { id:'process',  keys:['process','how do you work','working','steps','methodology','approach','procedure'] },
  { id:'nda',      keys:['nda','confidential','secret','ip','intellectual property','secure','privacy'] },
  { id:'support',  keys:['warranty','support','after','maintenance','bug fix','amc','post','guarantee'] },
  { id:'team',     keys:['team','who','expert','engineer','developer','employee','staff','founder','cto','ceo'] },
  { id:'contact',  keys:['contact','reach','call','email','phone','talk','meet','discuss','quote','whatsapp','connect'] },
  { id:'portfolio',keys:['portfolio','project','case study','work','example','client','sample','done','built'] },
  { id:'location', keys:['location','office','where','address','city','mumbai','india','gurugram','dubai'] },
  { id:'careers',  keys:['career','job','hiring','vacancy','opening','join','work with you','recruitment','hr'] },
  { id:'tech',     keys:['technology','tech stack','language','framework','tools','stack','python','php','node'] },
  { id:'thanks',   keys:['thank','thanks','great','good','nice','perfect','awesome','superb','helpful','appreciate'] },
  { id:'bye',      keys:['bye','goodbye','ok bye','take care','see you','later'] },
];

var R = {
  greet:    { t:"Hello! 👋 I'm **Aria**, your AI guide to EliteSalesLab.\n\nI can help you with:\n• Services & pricing\n• Project timelines\n• Technical questions\n• Getting a free quote\n\nWhat can I help you with?", q:['Our Services','Pricing','Get a Quote','Our Work'] },
  services: { t:"We offer **6 enterprise services**:\n\n🤖 **AI & Machine Learning**\n📊 **ERP Solutions**\n🌐 **Web Development**\n📱 **Mobile Apps**\n☁️ **Cloud & DevOps**\n⚡ **Digital Transformation**\n\nWhich interests you?", q:['AI & ML','ERP','Web Dev','Mobile Apps','Cloud','Transform'] },
  ai:       { t:"Our **AI/ML** team has deployed **138 models** in production.\n\n✅ Predictive Sales Intelligence — **47% avg conversion lift**\n✅ NLP & Text Analytics\n✅ Computer Vision — 99.7% accuracy\n✅ LLM & GenAI integration\n✅ Fraud Detection & Anomaly Detection\n✅ MLOps deployment (FastAPI, Docker, AWS)\n\nStack: Python, TensorFlow, PyTorch, LangChain, OpenAI", q:['AI Pricing','View AI Work','Get Quote'] },
  erp:      { t:"We build **custom ERP** systems tailored to your process.\n\n✅ Multi-plant & multi-entity ERP\n✅ Finance, HR, Payroll, Inventory modules\n✅ Real-time dashboards & reports\n✅ Mobile ERP (iOS & Android)\n✅ Integrates with Tally, SAP, Zoho\n\n🏆 **Pinnacle Industries** — INR 500Cr digitised, 4 plants, 8 months\n\nStack: Laravel, React, MySQL, Redis, Docker", q:['ERP Pricing','ERP Case Study','Get Quote'] },
  web:      { t:"We build **enterprise-grade web platforms** for scale.\n\n✅ SaaS platforms & custom CRM\n✅ B2B portals & e-commerce\n✅ Progressive Web Apps\n✅ Performance A+ (Core Web Vitals)\n✅ Security hardened & pen-tested\n\n🏆 **HealthBridge** — 80K+ patients, HIPAA, 4 months\n\nStack: Laravel, Vue, React, Next.js, TypeScript", q:['Web Pricing','View Portfolio','Get Quote'] },
  mobile:   { t:"We build **iOS & Android apps** with native-grade performance.\n\n✅ iOS (Swift), Android (Kotlin)\n✅ React Native & Flutter\n✅ Offline-first architecture\n✅ Real-time features & push notifications\n✅ App Store & Play Store publishing\n\n🏆 **SwiftDeliver** — **4.8 rating**, 200K+ downloads, 50K daily users", q:['Mobile Pricing','View App Work','Get Quote'] },
  cloud:    { t:"We architect and manage **enterprise cloud infra** on AWS/Azure/GCP.\n\n✅ Zero-downtime cloud migrations\n✅ Kubernetes & Docker orchestration\n✅ CI/CD pipelines (GitHub Actions, Jenkins)\n✅ Infrastructure as Code (Terraform)\n✅ 24/7 monitoring (Datadog, Grafana)\n\n🏆 **SecureBank** — 60 servers, 45% cost saving, zero downtime\n**SLA: 99.99% uptime**", q:['Cloud Pricing','Migration Info','Get Quote'] },
  dt:       { t:"We help enterprises **go fully digital** — end to end.\n\n✅ Digital Readiness Assessment\n✅ Legacy system modernisation\n✅ Process automation (RPA + AI)\n✅ Change management & staff training\n✅ Monthly advisory retainer available\n\n🏆 **Pinnacle Industries** — 68% efficiency gain in 10 months", q:['DT Pricing','Start Assessment','Get Quote'] },
  pricing:  { t:"Our pricing is **transparent and fixed-price**.\n\n💰 **Minimum:** INR 5 Lakhs\n📊 **Typical enterprise:** INR 25–80 Lakhs\n🏢 **Large-scale:** INR 1 Crore+\n\n**How it works:**\n→ Free 1-hour technical call\n→ Fixed-price proposal sent within 48hrs\n→ Milestone-based payments\n→ NDA signed before any call\n→ 90-day warranty included\n\nNo retainer upfront. No hidden costs.", q:['Book Free Call','View Our Work','Contact Us'] },
  timeline: { t:"**Delivery timelines by project type:**\n\n⚡ MVP / Module — 8–14 weeks\n📱 Mobile app — 3–5 months\n🌐 Web platform/SaaS — 4–6 months\n📊 ERP system — 6–9 months\n🤖 AI platform — 4–7 months\n\n**98.3% on-time delivery rate** across 500+ projects.\nEvery project gets weekly milestone reports.", q:['Get Estimate','Pricing','Contact Team'] },
  process:  { t:"Our **5-step delivery process**:\n\n1️⃣ **Discovery** — Requirements, NDA, tech planning (Week 1)\n2️⃣ **Design** — UX wireframes & architecture (Week 2–3)\n3️⃣ **Build** — Agile sprints with weekly demos\n4️⃣ **QA & Test** — Automated + manual testing\n5️⃣ **Launch** — Deploy, train, hand over docs\n\n➕ **90-day bug-fix warranty** — free, no questions.\nYou own 100% of the source code.", q:['Start a Project','Pricing','Contact Us'] },
  nda:      { t:"**Confidentiality is priority #1.**\n\n✅ Mutual NDA signed **before any call**\n✅ All team members bound by NDAs\n✅ Your IP belongs to **you always**\n✅ Source code 100% yours on delivery\n✅ No reuse of client code or data ever\n\nWe work with banks, healthcare firms, and defence contractors — confidentiality is non-negotiable.", q:['Request NDA','Book a Call','Contact Us'] },
  support:  { t:"**Post-delivery support included:**\n\n✅ **90-day bug-fix warranty** — free, no questions\n✅ AMC (Annual Maintenance Contract) available\n✅ **2-hour response SLA** on support tickets\n✅ Critical bugs fixed in < 4 hours\n✅ Feature development retainers\n\nMost of our clients have been with us 3+ years. We don't disappear after delivery.", q:['Discuss AMC','Contact Support','Get Quote'] },
  team:     { t:"**120+ expert in-house engineers:**\n\n👨‍💼 **Aditya Sharma** — Founder & CEO (IIT Delhi, 18 yrs)\n👩‍💻 **Priya Nair** — CTO (Ex-Amazon, AI systems)\n🔧 **Rohit Gupta** — VP Engineering (ERP & Cloud)\n🤖 **Sneha Kapoor** — Head AI/ML (PhD IISc, 20+ patents)\n\nAvg experience: **6+ years**. No outsourcing, ever.\nNasscom Top 10 recognised (2023).", q:['View About Page','Contact Team','Careers'] },
  contact:  { t:"**Reach us anytime:**\n\n📧 hello@elitesaleslab.com\n📞 +91 98765 43210\n💬 WhatsApp: +91 98765 43210\n📍 Level 12, Platina Bldg, BKC, Mumbai\n⏰ Mon–Fri 9AM–7PM | Sat 10AM–4PM IST\n\n**Response time: within 4 business hours.**\nFree 1-hour technical assessment available.", q:['Open Contact Form','WhatsApp Now','Book a Call'] },
  portfolio:{ t:"**500+ projects delivered:**\n\n🤖 **NexaForce AI CRM** — 47% conversion lift\n🏭 **ManufactureIQ ERP** — INR 500Cr digitised\n🚚 **SwiftDeliver App** — 200K+ downloads, 4.8 rating\n🏥 **HealthBridge Portal** — 80K patients, HIPAA\n🏦 **CloudVault Banking** — 99.99% uptime\n📊 **RetailPulse Analytics** — 32% waste reduction\n\n18 countries. 97% client satisfaction.", q:['View Full Portfolio','View Case Studies','Start a Project'] },
  location: { t:"**Our offices:**\n\n🇮🇳 **Mumbai HQ** — Level 12, Platina Bldg, BKC, Mumbai 400 051\n🇮🇳 **Gurugram** — DLF Cyber City, Haryana\n🇦🇪 **Dubai** — Business Bay, Dubai, UAE\n🇸🇬 **Singapore** — One Raffles Place\n\nWe work with clients in **18 countries** — time zone never a barrier.", q:['Contact Mumbai Office','WhatsApp Us','Book a Call'] },
  careers:  { t:"**We're hiring!** Open positions:\n\n• Senior Laravel Dev — INR 18–32 LPA\n• AI/ML Engineer — INR 20–40 LPA\n• React Native Dev — INR 14–24 LPA\n• Cloud DevOps — INR 18–30 LPA\n• UI/UX Designer — INR 10–18 LPA\n\n**Perks:** Remote-friendly · INR 50K learning budget · Fast growth · Flat hierarchy", q:['View Jobs','Apply Now','Contact HR'] },
  tech:     { t:"**Our technology stack:**\n\n🤖 AI/ML: Python, TensorFlow, PyTorch, LangChain\n⚙️ Backend: Laravel, Node.js, Django, FastAPI\n🎨 Frontend: React, Vue.js, Next.js, TypeScript\n📱 Mobile: React Native, Flutter, Swift, Kotlin\n☁️ Cloud: AWS, Azure, GCP, Docker, Kubernetes\n🗄️ Database: MySQL, PostgreSQL, MongoDB, Redis\n\nWe choose the right stack — not the trendy one.", q:['Discuss Stack','Our Services','Get Quote'] },
  thanks:   { t:"You're welcome! 😊 Anything else I can help with?\n\nReady to discuss your project?\n\n📞 Book a free 1-hour call\n💬 WhatsApp us for fastest response\n📧 hello@elitesaleslab.com", q:['Book Free Call','WhatsApp Now','Another Question'] },
  bye:      { t:"Thanks for chatting! 👋\n\nReach us anytime:\n📞 +91 98765 43210\n📧 hello@elitesaleslab.com\n\nHope to work together! 🚀", q:['Contact Us','View Services'] },
  fallback:  { t:"I didn't quite catch that. Let me help — what are you looking for?", q:['Services','Pricing','Timeline','Contact Team','Get a Quote'] },
};

var QA = {
  'Our Services':'services', 'Pricing':'pricing', 'Get a Quote':'contact', 'Our Work':'portfolio',
  'AI & ML':'ai', 'ERP':'erp', 'Web Dev':'web', 'Mobile Apps':'mobile', 'Cloud':'cloud', 'Transform':'dt',
  'AI Pricing':'pricing', 'ERP Pricing':'pricing', 'Web Pricing':'pricing', 'Mobile Pricing':'pricing', 'Cloud Pricing':'pricing', 'DT Pricing':'pricing',
  'Book Free Call':'contact', 'Book a Call':'contact', 'Get Estimate':'timeline',
  'Contact Team':'contact', 'Contact Us':'contact', 'Contact Support':'contact', 'Contact HR':'contact', 'Contact Mumbai Office':'location',
  'Request NDA':'nda', 'Discuss AMC':'support', 'Migration Info':'cloud', 'Start Assessment':'dt',
  'View About Page':null, 'View Jobs':null, 'Apply Now':null, 'View Full Portfolio':null, 'View Case Studies':null,
  'Start a Project':'contact', 'Start Similar Project':'contact',
  'ERP Case Study':'portfolio', 'View AI Work':'portfolio', 'View App Work':'portfolio', 'View Our Work':'portfolio',
  'View Portfolio':null, 'See Portfolio':null,
  'Discuss Stack':'tech', 'Our Services ':'services',
  'WhatsApp Now':null, 'WhatsApp Us':null, 'Open Contact Form':null,
  'Another Question':'services',
  'Get Quote':'contact',
};
var QA_LINKS = {
  'View About Page':'about.html','View Jobs':'careers.html','Apply Now':'careers.html',
  'View Full Portfolio':'portfolio.html','View Case Studies':'case-studies.html',
  'View Portfolio':'portfolio.html','See Portfolio':'portfolio.html',
  'WhatsApp Now':'https://wa.me/919876543210','WhatsApp Us':'https://wa.me/919876543210',
  'Open Contact Form':'contact.html',
};

/* ── Detect intent ─────────────────────────── */
function detect(txt) {
  var t = txt.toLowerCase();
  for (var i=0; i<INTENTS.length; i++) {
    var keys = INTENTS[i].keys;
    for (var j=0; j<keys.length; j++) {
      if (t.indexOf(keys[j]) !== -1) return INTENTS[i].id;
    }
  }
  return 'fallback';
}

/* ── Render markdown bold ──────────────────── */
function md(s) {
  return s.replace(/\*\*(.*?)\*\*/g,'<b style="color:#fff">$1</b>').replace(/\n/g,'<br>');
}

/* ── Add message bubble ────────────────────── */
function addMsg(role, text, quick) {
  var box = document.getElementById('eslChatMsgs');
  if (!box) return;

  var wrap = document.createElement('div');
  wrap.style.cssText = 'display:flex;align-items:flex-start;gap:8px;margin-bottom:12px;' + (role==='user'?'justify-content:flex-end':'');

  if (role === 'bot') {
    var av = document.createElement('div');
    av.style.cssText = 'width:30px;height:30px;min-width:30px;border-radius:50%;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.72rem;color:#fff;font-family:Syne,sans-serif';
    av.textContent = 'AI';
    wrap.appendChild(av);
  }

  var bub = document.createElement('div');
  bub.style.cssText = 'max-width:78%;padding:10px 14px;line-height:1.6;font-size:.83rem;color:#EEF2FF;word-break:break-word;' +
    (role==='user'
      ? 'background:linear-gradient(135deg,#3B7BFF,#8B5CF6);border-radius:18px 4px 18px 18px;'
      : 'background:rgba(20,26,56,.95);border:1px solid rgba(255,255,255,.09);border-radius:4px 18px 18px 18px;');
  bub.innerHTML = md(text);
  wrap.appendChild(bub);

  var grp = document.createElement('div');
  grp.appendChild(wrap);

  if (quick && quick.length) {
    var qr = document.createElement('div');
    qr.style.cssText = 'display:flex;flex-wrap:wrap;gap:6px;' + (role==='bot' ? 'padding-left:38px;' : '') + 'margin-top:6px;margin-bottom:4px';
    qr.className = 'esl-qr';
    quick.forEach(function(q) {
      var b = document.createElement('button');
      b.textContent = q;
      b.style.cssText = 'padding:5px 13px;border-radius:999px;font-size:.77rem;font-weight:500;background:rgba(59,123,255,.12);border:1px solid rgba(59,123,255,.35);color:#6A9FFF;cursor:pointer;font-family:"DM Sans",sans-serif;transition:all .15s;white-space:nowrap;outline:none';
      b.onmouseover = function(){ b.style.background='rgba(59,123,255,.28)';b.style.color='#fff'; };
      b.onmouseout  = function(){ b.style.background='rgba(59,123,255,.12)';b.style.color='#6A9FFF'; };
      b.onclick = function() {
        document.querySelectorAll('.esl-qr').forEach(function(r){r.remove();});
        if (QA_LINKS[q]) {
          addMsg('user', q);
          if (q.includes('WhatsApp')) { window.open(QA_LINKS[q],'_blank'); }
          else { window.location.href = QA_LINKS[q]; }
        } else if (QA[q]) {
          addMsg('user', q);
          setTimeout(function(){ reply(QA[q]); }, 200);
        } else {
          sendMsg(q);
        }
      };
      qr.appendChild(b);
    });
    grp.appendChild(qr);
  }

  box.appendChild(grp);
  box.scrollTop = box.scrollHeight;
}

/* ── Typing dots ───────────────────────────── */
function showTyping() {
  var box = document.getElementById('eslChatMsgs');
  if (!box) return;
  var el = document.createElement('div');
  el.id = 'eslTyping';
  el.style.cssText = 'display:flex;align-items:center;gap:8px;margin-bottom:12px';
  el.innerHTML =
    '<div style="width:30px;height:30px;min-width:30px;border-radius:50%;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.72rem;color:#fff;font-family:Syne,sans-serif">AI</div>' +
    '<div style="padding:10px 14px;border-radius:4px 18px 18px 18px;background:rgba(20,26,56,.95);border:1px solid rgba(255,255,255,.09);display:flex;gap:5px;align-items:center">' +
    '<span class="eslDot" style="width:6px;height:6px;border-radius:50%;background:#3B7BFF;display:inline-block"></span>' +
    '<span class="eslDot" style="width:6px;height:6px;border-radius:50%;background:#3B7BFF;display:inline-block;animation-delay:.2s"></span>' +
    '<span class="eslDot" style="width:6px;height:6px;border-radius:50%;background:#3B7BFF;display:inline-block;animation-delay:.4s"></span>' +
    '</div>';
  box.appendChild(el);
  box.scrollTop = box.scrollHeight;
}
function hideTyping() {
  var el = document.getElementById('eslTyping');
  if (el) el.remove();
}

/* ── Reply by intent id ────────────────────── */
function reply(id) {
  var r = R[id] || R.fallback;
  showTyping();
  setTimeout(function() {
    hideTyping();
    addMsg('bot', r.t, r.q || []);
  }, 600 + Math.random()*500);
}

/* ── Send user message ─────────────────────── */
function sendMsg(txt) {
  txt = txt.trim();
  if (!txt) return;
  addMsg('user', txt);
  reply(detect(txt));
}

/* ── Toggle window ─────────────────────────── */
function togChat() {
  OPEN = !OPEN;
  var win = document.getElementById('eslChatWin');
  var btn = document.getElementById('eslChatBtn');
  var badge = document.getElementById('eslBadge');
  if (!win) return;

  if (OPEN) {
    win.style.display = 'flex';
    setTimeout(function(){ win.style.opacity='1'; win.style.transform='translateY(0) scale(1)'; }, 10);
    if (badge) badge.style.display = 'none';
    // Greet on first open
    var box = document.getElementById('eslChatMsgs');
    if (box && box.children.length === 0) {
      setTimeout(function(){ reply('greet'); }, 350);
    }
    setTimeout(function(){
      var inp = document.getElementById('eslInp');
      if (inp) inp.focus();
    }, 400);
    // Change icon to X
    if (btn) btn.querySelector('svg').innerHTML = '<line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>';
  } else {
    win.style.opacity = '0';
    win.style.transform = 'translateY(16px) scale(.96)';
    setTimeout(function(){ win.style.display = 'none'; }, 280);
    // Restore chat icon
    if (btn) btn.querySelector('svg').innerHTML = '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>';
  }
}

/* ── Build DOM ─────────────────────────────── */
function build() {
  // Styles
  var s = document.createElement('style');
  s.textContent =
    '.eslDot{animation:eslBounce 1.2s infinite ease}.eslDot:nth-child(2){animation-delay:.15s}.eslDot:nth-child(3){animation-delay:.3s}' +
    '@keyframes eslBounce{0%,60%,100%{transform:translateY(0)}30%{transform:translateY(-5px)}}' +
    '#eslChatMsgs::-webkit-scrollbar{width:4px}#eslChatMsgs::-webkit-scrollbar-thumb{background:rgba(255,255,255,.1);border-radius:2px}' +
    '#eslInp{border:none;outline:none;background:transparent;color:#EEF2FF;font-family:"DM Sans",sans-serif;font-size:.84rem;width:100%;padding:0}' +
    '#eslInp::placeholder{color:#4B5982}' +
    '#eslChatWin{transition:opacity .28s ease,transform .28s ease}' +
    '#eslChatBtn{transition:transform .2s ease,box-shadow .2s ease}' +
    '@media(max-width:480px){#eslChatWin{left:10px!important;right:10px!important;width:calc(100vw - 20px)!important;bottom:88px!important}}';
  document.head.appendChild(s);

  // Button
  var btn = document.createElement('button');
  btn.id = 'eslChatBtn';
  btn.title = 'Chat with AI Assistant';
  btn.setAttribute('aria-label', 'Open AI Chat');
  btn.style.cssText = 'position:fixed;bottom:28px;left:28px;width:58px;height:58px;border-radius:50%;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);border:none;cursor:pointer;z-index:10000;box-shadow:0 4px 20px rgba(59,123,255,.55);display:flex;align-items:center;justify-content:center;padding:0';
  btn.innerHTML =
    '<svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="24" height="24"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>' +
    '<span id="eslBadge" style="position:absolute;top:-3px;right:-3px;width:18px;height:18px;background:#EC4899;border-radius:50%;font-size:.65rem;font-weight:700;color:#fff;display:flex;align-items:center;justify-content:center;border:2px solid #06091A">1</span>';
  btn.onmouseover = function(){ btn.style.transform='scale(1.1)'; btn.style.boxShadow='0 8px 28px rgba(59,123,255,.7)'; };
  btn.onmouseout  = function(){ btn.style.transform='scale(1)'; btn.style.boxShadow='0 4px 20px rgba(59,123,255,.55)'; };
  btn.onclick = togChat;
  document.body.appendChild(btn);

  // Chat window
  var win = document.createElement('div');
  win.id = 'eslChatWin';
  win.style.cssText = 'position:fixed;bottom:98px;left:28px;width:355px;height:500px;background:#06091A;border:1px solid rgba(255,255,255,.12);border-radius:20px;display:none;flex-direction:column;z-index:9999;box-shadow:0 20px 70px rgba(0,0,0,.75);overflow:hidden;opacity:0;transform:translateY(16px) scale(.96)';
  win.innerHTML =
    // Header
    '<div style="background:linear-gradient(135deg,#3B7BFF 0%,#8B5CF6 100%);padding:14px 18px;display:flex;align-items:center;gap:10px;flex-shrink:0">' +
      '<div style="width:38px;height:38px;min-width:38px;border-radius:50%;background:rgba(255,255,255,.22);display:flex;align-items:center;justify-content:center;font-family:Syne,sans-serif;font-weight:800;color:#fff;font-size:.85rem">AI</div>' +
      '<div style="flex:1;min-width:0">' +
        '<div style="font-family:Syne,sans-serif;font-weight:700;font-size:.92rem;color:#fff">Aria — AI Assistant</div>' +
        '<div style="display:flex;align-items:center;gap:5px;margin-top:1px">' +
          '<span style="width:7px;height:7px;border-radius:50%;background:#27C840;flex-shrink:0"></span>' +
          '<span style="font-size:.7rem;color:rgba(255,255,255,.78)">Online · Typically replies instantly</span>' +
        '</div>' +
      '</div>' +
      '<button onclick="(function(){var w=document.getElementById(\'eslChatWin\');var b=document.getElementById(\'eslChatBtn\');OPEN=false;w.style.opacity=0;w.style.transform=\'translateY(16px) scale(.96)\';setTimeout(function(){w.style.display=\'none\'},280);if(b)b.querySelector(\'svg\').innerHTML=\'<path d=\\\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\\\"/>\'})()" style="width:28px;height:28px;min-width:28px;border-radius:50%;background:rgba(255,255,255,.18);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:1.1rem;color:#fff;line-height:1;font-family:sans-serif">&times;</button>' +
    '</div>' +
    // Messages
    '<div id="eslChatMsgs" style="flex:1;overflow-y:auto;padding:14px 12px;display:flex;flex-direction:column"></div>' +
    // Input bar
    '<div style="padding:10px 12px;border-top:1px solid rgba(255,255,255,.07);background:#0B1028;display:flex;gap:8px;align-items:center;flex-shrink:0">' +
      '<div style="flex:1;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:10px;padding:9px 12px;display:flex;align-items:center">' +
        '<input id="eslInp" type="text" placeholder="Ask anything…" autocomplete="off" onkeydown="if(event.key===\'Enter\'){var v=this.value.trim();if(v){this.value=\'\';sendMsg(v)}}">' +
      '</div>' +
      '<button onclick="var i=document.getElementById(\'eslInp\');var v=i.value.trim();if(v){i.value=\'\';sendMsg(v)}" style="width:38px;height:38px;min-width:38px;border-radius:10px;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center" title="Send">' +
        '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" width="16" height="16"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>' +
      '</button>' +
    '</div>' +
    // Footer
    '<div style="padding:5px 12px 8px;text-align:center;font-size:.67rem;color:#4B5982;background:#0B1028;flex-shrink:0">' +
      'Powered by EliteSalesLab AI · <a href="contact.html" style="color:#6A9FFF;text-decoration:none">Talk to a human →</a>' +
    '</div>';
  document.body.appendChild(win);

  // Expose sendMsg globally for inline handlers
  window.sendMsg = sendMsg;
}

// Boot after DOM ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', build);
} else {
  build();
}

})();
