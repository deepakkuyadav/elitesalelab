/* ═══════════════════════════════════════════════════════
   EliteSalesLab — AI Chat Widget "Aria"  (clean v3)
═══════════════════════════════════════════════════════ */
(function () {
  'use strict';

  /* ── intent keywords ─────────────────────────────── */
  var INTENTS = [
    { id: 'greet',    k: ['hello','hi','hey','namaste','hlo','hii','good morning','good evening','help','start'] },
    { id: 'services', k: ['service','services','what do you','offer','build','develop','kya karte'] },
    { id: 'ai',       k: ['ai','ml','machine learning','artificial intelligence','llm','neural','nlp','chatbot','automation','predict','genai'] },
    { id: 'erp',      k: ['erp','enterprise resource','inventory','finance module','hr module','payroll','supply chain','manufacturing'] },
    { id: 'web',      k: ['web','website','saas','portal','ecommerce','e-commerce','laravel','react','nextjs','frontend','backend'] },
    { id: 'mobile',   k: ['mobile','app','ios','android','flutter','react native','play store','app store'] },
    { id: 'cloud',    k: ['cloud','aws','azure','gcp','devops','kubernetes','docker','terraform','ci cd','server','hosting'] },
    { id: 'dt',       k: ['digital transform','legacy','modernise','modernize','old system','process automation','digitise'] },
    { id: 'pricing',  k: ['price','pricing','cost','budget','how much','kitna','charges','rate','fee','package','money','inr','rupees'] },
    { id: 'timeline', k: ['timeline','how long','time','duration','delivery','kab','kitne din','weeks','months','deadline'] },
    { id: 'process',  k: ['process','how do you work','working','steps','methodology','approach'] },
    { id: 'nda',      k: ['nda','confidential','secret','ip','intellectual property','secure','privacy'] },
    { id: 'support',  k: ['warranty','support','after','maintenance','bug fix','amc','post delivery','guarantee'] },
    { id: 'team',     k: ['team','who','expert','engineer','developer','employee','staff','founder','cto','ceo'] },
    { id: 'contact',  k: ['contact','reach','call','email','phone','talk','meet','discuss','quote','whatsapp','connect'] },
    { id: 'portfolio',k: ['portfolio','project','case study','work','example','client','sample','built'] },
    { id: 'location', k: ['location','office','where','address','city','mumbai','india','gurugram','dubai'] },
    { id: 'careers',  k: ['career','job','hiring','vacancy','opening','join','work with you','recruitment'] },
    { id: 'tech',     k: ['technology','tech stack','language','framework','tools','stack','python','php','node'] },
    { id: 'thanks',   k: ['thank','thanks','great','good','nice','perfect','awesome','superb','helpful'] },
    { id: 'bye',      k: ['bye','goodbye','ok bye','take care','see you','later'] },
  ];

  /* ── responses ───────────────────────────────────── */
  var R = {
    greet:    { t: "Hi there! \uD83D\uDC4B I'm Aria, EliteSalesLab's AI assistant.\n\nI can help you with:\n\u2022 Our services & pricing\n\u2022 Project timelines\n\u2022 Technical questions\n\u2022 Getting a free quote\n\nWhat can I help you with?", q: ['Our Services','Pricing','Get a Quote','Our Work'] },
    services: { t: "We offer 6 enterprise services:\n\n\u2022 AI & Machine Learning\n\u2022 ERP Solutions\n\u2022 Web Development\n\u2022 Mobile Apps\n\u2022 Cloud & DevOps\n\u2022 Digital Transformation\n\nWhich interests you?", q: ['AI & ML','ERP','Web Dev','Mobile','Cloud','Transform'] },
    ai:       { t: "Our AI/ML team has deployed 138 models in production.\n\n\u2713 Predictive Sales — avg 47% conversion lift\n\u2713 NLP & Text Analytics\n\u2713 Computer Vision — 99.7% accuracy\n\u2713 LLM & GenAI integration\n\u2713 Fraud Detection & Anomaly Detection\n\u2713 MLOps deployment\n\nStack: Python, TensorFlow, PyTorch, LangChain", q: ['Pricing','View Portfolio','Get Quote'] },
    erp:      { t: "We build custom ERP systems tailored to your process.\n\n\u2713 Multi-plant & multi-entity ERP\n\u2713 Finance, HR, Payroll, Inventory\n\u2713 Real-time dashboards & reports\n\u2713 Mobile ERP apps\n\u2713 Integrates with Tally, SAP, Zoho\n\nCase: Pinnacle Industries — INR 500Cr digitised in 8 months", q: ['Pricing','View Portfolio','Get Quote'] },
    web:      { t: "We build enterprise web platforms built to scale.\n\n\u2713 SaaS platforms & custom CRM\n\u2713 E-commerce & B2B portals\n\u2713 Progressive Web Apps\n\u2713 Performance A+ (Core Web Vitals)\n\u2713 Security hardened & pen-tested\n\nCase: HealthBridge — 80K+ patients, HIPAA compliant", q: ['Pricing','View Portfolio','Get Quote'] },
    mobile:   { t: "We build iOS & Android apps with native-grade performance.\n\n\u2713 iOS (Swift) & Android (Kotlin)\n\u2713 React Native & Flutter\n\u2713 Offline-first architecture\n\u2713 Real-time & push notifications\n\u2713 App Store & Play Store publishing\n\nCase: SwiftDeliver — 4.8 rating, 200K+ downloads", q: ['Pricing','View Portfolio','Get Quote'] },
    cloud:    { t: "We architect enterprise cloud infra on AWS/Azure/GCP.\n\n\u2713 Zero-downtime cloud migrations\n\u2713 Kubernetes & Docker orchestration\n\u2713 CI/CD pipelines\n\u2713 Infrastructure as Code (Terraform)\n\u2713 24/7 monitoring (Datadog, Grafana)\n\nSLA: 99.99% uptime guaranteed", q: ['Pricing','View Portfolio','Get Quote'] },
    dt:       { t: "We help enterprises go fully digital — end to end.\n\n\u2713 Digital Readiness Assessment\n\u2713 Legacy system modernisation\n\u2713 Process automation (RPA + AI)\n\u2713 Change management & training\n\u2713 Monthly advisory retainer available\n\nCase: 68% efficiency gain in 10 months", q: ['Pricing','Contact Team','Get Quote'] },
    pricing:  { t: "Our pricing is transparent and fixed-price.\n\nMinimum project: INR 5 Lakhs\nTypical enterprise: INR 25-80 Lakhs\nLarge-scale: INR 1 Crore+\n\nHow it works:\n\u2192 Free 1-hour technical call\n\u2192 Fixed-price proposal in 48hrs\n\u2192 Milestone-based payments\n\u2192 NDA before any call\n\u2192 90-day warranty included\n\nNo hidden costs. No retainer upfront.", q: ['Book Free Call','View Portfolio','Contact Us'] },
    timeline: { t: "Delivery timelines by project type:\n\nMVP / Module — 8-14 weeks\nMobile app — 3-5 months\nWeb platform/SaaS — 4-6 months\nERP system — 6-9 months\nAI platform — 4-7 months\n\n98.3% on-time delivery rate across 500+ projects.", q: ['Get Estimate','Pricing','Contact Team'] },
    process:  { t: "Our 5-step delivery process:\n\n1. Discovery — Requirements, NDA, tech planning\n2. Design — UX wireframes & architecture\n3. Build — Agile sprints with weekly demos\n4. QA & Test — Automated + manual\n5. Launch — Deploy, train, hand over docs\n\n90-day bug-fix warranty after launch. You own 100% of source code.", q: ['Start a Project','Pricing','Contact Us'] },
    nda:      { t: "Confidentiality is our priority.\n\n\u2713 Mutual NDA before any call\n\u2713 All team members bound by NDAs\n\u2713 Your IP belongs to you — always\n\u2713 Source code 100% yours on delivery\n\u2713 No reuse of client code or data\n\nWe work with banks, healthcare firms, and defence contractors.", q: ['Request NDA','Book a Call','Contact Us'] },
    support:  { t: "Post-delivery support included:\n\n\u2713 90-day bug-fix warranty — free\n\u2713 AMC (Annual Maintenance Contract)\n\u2713 2-hour response SLA on tickets\n\u2713 Critical bugs fixed in under 4 hours\n\u2713 Feature development retainers\n\nMost clients stay with us 3+ years.", q: ['Discuss AMC','Contact Support','Get Quote'] },
    team:     { t: "120+ expert engineers:\n\nAditya Sharma — Founder & CEO (IIT Delhi, 18 yrs)\nPriya Nair — CTO (Ex-Amazon)\nRohit Gupta — VP Engineering\nSneha Kapoor — Head AI/ML (PhD IISc, 20+ patents)\n\nAvg experience: 6+ years. No outsourcing, ever.\nNasscom Top 10 (2023).", q: ['About Us','Contact Team','Careers'] },
    contact:  { t: "Reach us anytime:\n\nEmail: hello@elitesaleslab.com\nPhone: +91 98765 43210\nWhatsApp: +91 98765 43210\nOffice: Level 12, Platina Bldg, BKC Mumbai\nHours: Mon-Fri 9AM-7PM IST\n\nResponse within 4 business hours.\nFree 1-hour technical assessment available.", q: ['Open Contact Page','WhatsApp Now','Book a Call'] },
    portfolio:{ t: "500+ projects delivered:\n\nNexaForce AI CRM — 47% conversion lift\nManufactureIQ ERP — INR 500Cr digitised\nSwiftDeliver App — 200K+ downloads, 4.8 rating\nHealthBridge Portal — 80K patients, HIPAA\nCloudVault Banking — 99.99% uptime\nRetailPulse Analytics — 32% waste reduction\n\n18 countries. 97% client satisfaction.", q: ['View Portfolio Page','View Case Studies','Start a Project'] },
    location: { t: "Our offices:\n\nMumbai HQ — Level 12, Platina Bldg, BKC, Mumbai 400 051\nGurugram — DLF Cyber City, Haryana\nDubai — Business Bay, UAE\nSingapore — One Raffles Place\n\nWe serve clients in 18 countries. Time zone is never a barrier.", q: ['Contact Mumbai Office','WhatsApp Us','Book a Call'] },
    careers:  { t: "We are hiring!\n\nSenior Laravel Developer — INR 18-32 LPA\nAI/ML Engineer — INR 20-40 LPA\nReact Native Developer — INR 14-24 LPA\nCloud DevOps Engineer — INR 18-30 LPA\nUI/UX Designer — INR 10-18 LPA\n\nPerks: Remote-friendly, INR 50K learning budget, fast growth", q: ['View Jobs Page','Apply Now','Contact HR'] },
    tech:     { t: "Our technology stack:\n\nAI/ML: Python, TensorFlow, PyTorch, LangChain\nBackend: Laravel, Node.js, Django, FastAPI\nFrontend: React, Vue.js, Next.js, TypeScript\nMobile: React Native, Flutter, Swift, Kotlin\nCloud: AWS, Azure, GCP, Docker, Kubernetes\nDatabase: MySQL, PostgreSQL, MongoDB, Redis", q: ['Discuss Stack','Our Services','Get Quote'] },
    thanks:   { t: "You're welcome! \uD83D\uDE0A Anything else I can help with?\n\nReady to discuss your project?\n\nBook a free 1-hour call\nWhatsApp: +91 98765 43210\nEmail: hello@elitesaleslab.com", q: ['Book Free Call','WhatsApp Now','Another Question'] },
    bye:      { t: "Thanks for chatting! \uD83D\uDC4B\n\nReach us anytime:\nPhone: +91 98765 43210\nEmail: hello@elitesaleslab.com\n\nHope to work together soon!", q: ['Contact Us','View Services'] },
    fallback: { t: "I'm not sure about that. Here's what I can help you with:", q: ['Our Services','Pricing','Timeline','Contact Team','Get a Quote'] },
  };

  /* ── quick reply → action ────────────────────────── */
  var QA = {
    'Our Services': 'services', 'Pricing': 'pricing', 'Get a Quote': 'contact',
    'Get Quote': 'contact', 'Our Work': 'portfolio', 'AI & ML': 'ai',
    'ERP': 'erp', 'Web Dev': 'web', 'Mobile': 'mobile', 'Cloud': 'cloud',
    'Transform': 'dt', 'Book Free Call': 'contact', 'Book a Call': 'contact',
    'Get Estimate': 'timeline', 'Contact Team': 'contact', 'Contact US': 'contact',
    'Contact Us': 'contact', 'Contact Support': 'contact', 'Contact HR': 'contact',
    'Contact Mumbai Office': 'location', 'Request NDA': 'nda', 'Discuss AMC': 'support',
    'Discuss Stack': 'tech', 'Start a Project': 'contact', 'About Us': 'team',
    'Careers': 'careers', 'View Services': 'services', 'Another Question': 'services',
    'WhatsApp Now': null, 'WhatsApp Us': null, 'Open Contact Page': null,
    'View Portfolio Page': null, 'View Case Studies': null, 'View Jobs Page': null,
    'Apply Now': null,
  };
  var QA_LINKS = {
    'WhatsApp Now': 'https://wa.me/919876543210',
    'WhatsApp Us': 'https://wa.me/919876543210',
    'Open Contact Page': 'contact.html',
    'View Portfolio Page': 'portfolio.html',
    'View Case Studies': 'case-studies.html',
    'View Jobs Page': 'careers.html',
    'Apply Now': 'careers.html',
  };

  /* ── detect ──────────────────────────────────────── */
  function detect(txt) {
    var t = txt.toLowerCase();
    for (var i = 0; i < INTENTS.length; i++) {
      for (var j = 0; j < INTENTS[i].k.length; j++) {
        if (t.indexOf(INTENTS[i].k[j]) !== -1) return INTENTS[i].id;
      }
    }
    return 'fallback';
  }

  /* ── add message ─────────────────────────────────── */
  function addMsg(role, text, quick) {
    var box = document.getElementById('ariaMessages');
    if (!box) return;

    var wrap = document.createElement('div');
    wrap.style.cssText = 'display:flex;gap:8px;margin-bottom:14px;align-items:flex-start;' +
      (role === 'user' ? 'justify-content:flex-end' : '');

    if (role === 'bot') {
      var av = document.createElement('div');
      av.style.cssText = 'width:28px;height:28px;min-width:28px;border-radius:50%;' +
        'background:linear-gradient(135deg,#2563EB,#8B5CF6);display:flex;align-items:center;' +
        'justify-content:center;font-weight:700;font-size:10px;color:#fff;flex-shrink:0;margin-top:2px;font-family:sans-serif';
      av.textContent = 'AI';
      wrap.appendChild(av);
    }

    var bub = document.createElement('div');
    bub.style.cssText = 'padding:10px 14px;font-size:13px;line-height:1.65;word-break:break-word;max-width:78%;' +
      (role === 'user'
        ? 'background:linear-gradient(135deg,#2563EB,#7C3AED);color:#fff;border-radius:16px 4px 16px 16px;'
        : 'background:#fff;color:#1E293B;border:1px solid #E2E8F0;border-radius:4px 16px 16px 16px;box-shadow:0 1px 4px rgba(0,0,0,.06);');
    bub.textContent = text;
    /* convert \n to <br> safely */
    bub.innerHTML = text.split('\n').map(function(l){ return escHtml(l); }).join('<br>');
    wrap.appendChild(bub);

    var grp = document.createElement('div');
    grp.appendChild(wrap);

    /* quick replies */
    if (quick && quick.length) {
      var qr = document.createElement('div');
      qr.style.cssText = 'display:flex;flex-wrap:wrap;gap:6px;margin-top:6px;' + (role === 'bot' ? 'padding-left:36px;' : '');
      qr.className = 'ariaQR';
      quick.forEach(function(q) {
        var b = document.createElement('button');
        b.style.cssText = 'padding:5px 12px;border-radius:20px;font-size:11px;font-weight:500;' +
          'background:#EFF6FF;border:1px solid #BFDBFE;color:#2563EB;cursor:pointer;' +
          'font-family:inherit;transition:all .15s;outline:none;white-space:nowrap';
        b.textContent = q;
        b.onmouseover = function() { b.style.background = '#DBEAFE'; b.style.borderColor = '#93C5FD'; };
        b.onmouseout  = function() { b.style.background = '#EFF6FF'; b.style.borderColor = '#BFDBFE'; };
        b.onclick = function() {
          document.querySelectorAll('.ariaQR').forEach(function(r) { r.remove(); });
          if (QA_LINKS[q]) {
            addMsg('user', q);
            var link = QA_LINKS[q];
            if (link.startsWith('http')) { window.open(link, '_blank'); }
            else { window.location.href = link; }
          } else if (QA[q]) {
            addMsg('user', q);
            setTimeout(function() { reply(QA[q]); }, 180);
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

  function escHtml(s) {
    return s.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
  }

  /* ── typing indicator ────────────────────────────── */
  function showTyping() {
    var box = document.getElementById('ariaMessages');
    if (!box) return;
    var el = document.createElement('div');
    el.id = 'ariaTyping';
    el.style.cssText = 'display:flex;align-items:center;gap:8px;margin-bottom:12px';
    var av = document.createElement('div');
    av.style.cssText = 'width:28px;height:28px;min-width:28px;border-radius:50%;background:linear-gradient(135deg,#2563EB,#8B5CF6);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:10px;color:#fff;flex-shrink:0;font-family:sans-serif';
    av.textContent = 'AI';
    var dots = document.createElement('div');
    dots.style.cssText = 'display:flex;gap:4px;align-items:center;background:#fff;border:1px solid #E2E8F0;border-radius:4px 16px 16px 16px;padding:10px 14px;box-shadow:0 1px 4px rgba(0,0,0,.06)';
    for (var i = 0; i < 3; i++) {
      var d = document.createElement('span');
      d.style.cssText = 'width:6px;height:6px;border-radius:50%;background:#93C5FD;display:inline-block;animation:ariaDot 1.2s ease infinite;animation-delay:' + (i * 0.18) + 's';
      dots.appendChild(d);
    }
    el.appendChild(av);
    el.appendChild(dots);
    box.appendChild(el);
    box.scrollTop = box.scrollHeight;
  }

  function hideTyping() {
    var el = document.getElementById('ariaTyping');
    if (el) el.parentNode.removeChild(el);
  }

  /* ── reply ───────────────────────────────────────── */
  function reply(id) {
    var r = R[id] || R.fallback;
    showTyping();
    setTimeout(function() {
      hideTyping();
      addMsg('bot', r.t, r.q || []);
    }, 500 + Math.random() * 600);
  }

  /* ── send ────────────────────────────────────────── */
  function sendMsg(txt) {
    if (!txt || !txt.trim()) return;
    addMsg('user', txt.trim());
    reply(detect(txt));
  }

  /* ── open / close ────────────────────────────────── */
  var isOpen = false;

  function openChat() {
    isOpen = true;
    var win = document.getElementById('ariaWindow');
    var badge = document.getElementById('ariaBadge');
    if (!win) return;
    win.style.display = 'flex';
    setTimeout(function() { win.style.opacity = '1'; win.style.transform = 'translateY(0) scale(1)'; }, 10);
    if (badge) badge.style.display = 'none';
    var box = document.getElementById('ariaMessages');
    if (box && box.children.length === 0) {
      setTimeout(function() { reply('greet'); }, 350);
    }
    setTimeout(function() {
      var inp = document.getElementById('ariaInput');
      if (inp) inp.focus();
    }, 400);
  }

  function closeChat() {
    isOpen = false;
    var win = document.getElementById('ariaWindow');
    if (!win) return;
    win.style.opacity = '0';
    win.style.transform = 'translateY(12px) scale(0.97)';
    setTimeout(function() { win.style.display = 'none'; }, 260);
  }

  function toggleChat() {
    if (isOpen) { closeChat(); } else { openChat(); }
  }

  /* ── build DOM ───────────────────────────────────── */
  function build() {
    /* Styles */
    var sty = document.createElement('style');
    sty.textContent = [
      '@keyframes ariaDot{0%,60%,100%{transform:translateY(0);opacity:.5}30%{transform:translateY(-5px);opacity:1}}',
      '@keyframes ariaPop{from{opacity:0;transform:scale(0.7) translateY(20px)}to{opacity:1;transform:scale(1) translateY(0)}}',
      '#ariaBtn{animation:ariaPop .5s .6s ease both}',
      '#ariaWindow{transition:opacity .25s ease,transform .25s ease}',
      '#ariaMessages::-webkit-scrollbar{width:4px}',
      '#ariaMessages::-webkit-scrollbar-thumb{background:#BFDBFE;border-radius:2px}',
      '#ariaInput::placeholder{color:#94A3B8}',
      '#ariaInput{background:transparent;border:none;outline:none;color:#1E293B;font-family:inherit;font-size:13px;width:100%;min-height:36px}',
      '.ariaQR button:focus{outline:2px solid #2563EB;outline-offset:2px}',
    ].join('');
    document.head.appendChild(sty);

    /* ── Floating button ── */
    var btn = document.createElement('button');
    btn.id = 'ariaBtn';
    btn.title = 'Chat with AI';
    btn.setAttribute('aria-label', 'Open AI Chat');
    btn.style.cssText = [
      'position:fixed;bottom:28px;left:28px;z-index:99999',
      'width:56px;height:56px;border-radius:50%;border:none;cursor:pointer',
      'background:linear-gradient(135deg,#2563EB,#7C3AED)',
      'box-shadow:0 4px 18px rgba(37,99,235,.5)',
      'display:flex;align-items:center;justify-content:center',
      'transition:transform .2s,box-shadow .2s',
    ].join(';');
    btn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>' +
      '<span id="ariaBadge" style="position:absolute;top:-3px;right:-3px;width:17px;height:17px;background:#EF4444;border-radius:50%;font-size:10px;font-weight:700;color:#fff;display:flex;align-items:center;justify-content:center;border:2px solid #F0F6FF;font-family:sans-serif">1</span>';
    btn.onmouseover = function() { btn.style.transform = 'scale(1.1)'; btn.style.boxShadow = '0 8px 26px rgba(37,99,235,.65)'; };
    btn.onmouseout  = function() { btn.style.transform = 'scale(1)';   btn.style.boxShadow = '0 4px 18px rgba(37,99,235,.5)'; };
    btn.onclick = toggleChat;
    document.body.appendChild(btn);

    /* ── Chat window ── */
    var win = document.createElement('div');
    win.id = 'ariaWindow';
    win.style.cssText = [
      'position:fixed;bottom:96px;left:28px',
      'width:340px;max-height:520px',
      'background:#F8FAFF',
      'border:1px solid #BFDBFE',
      'border-radius:18px',
      'box-shadow:0 16px 60px rgba(37,99,235,.18),0 2px 8px rgba(0,0,0,.08)',
      'display:none;flex-direction:column',
      'z-index:99998;overflow:hidden',
      'opacity:0;transform:translateY(12px) scale(0.97)',
      'font-family:"DM Sans",sans-serif',
    ].join(';');

    /* header */
    var hdr = document.createElement('div');
    hdr.style.cssText = [
      'background:linear-gradient(135deg,#1E40AF,#2563EB,#7C3AED)',
      'padding:14px 16px',
      'display:flex;align-items:center;gap:10px',
      'flex-shrink:0',
    ].join(';');

    var hAv = document.createElement('div');
    hAv.style.cssText = 'width:38px;height:38px;min-width:38px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;font-weight:800;font-size:13px;color:#fff;font-family:sans-serif;flex-shrink:0';
    hAv.textContent = 'AI';

    var hInfo = document.createElement('div');
    hInfo.style.cssText = 'flex:1;min-width:0';
    var hName = document.createElement('div');
    hName.style.cssText = 'font-weight:700;font-size:14px;color:#fff;font-family:"DM Sans",sans-serif';
    hName.textContent = 'Aria — AI Assistant';
    var hStatus = document.createElement('div');
    hStatus.style.cssText = 'display:flex;align-items:center;gap:5px;margin-top:2px';
    var hDot = document.createElement('span');
    hDot.style.cssText = 'width:7px;height:7px;border-radius:50%;background:#34D399;flex-shrink:0';
    var hTxt = document.createElement('span');
    hTxt.style.cssText = 'font-size:11px;color:rgba(255,255,255,.8);font-family:"DM Sans",sans-serif';
    hTxt.textContent = 'Online · Replies instantly';
    hStatus.appendChild(hDot);
    hStatus.appendChild(hTxt);
    hInfo.appendChild(hName);
    hInfo.appendChild(hStatus);

    var hClose = document.createElement('button');
    hClose.style.cssText = 'width:28px;height:28px;min-width:28px;border-radius:50%;background:rgba(255,255,255,.2);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#fff;font-family:sans-serif;font-size:16px;line-height:1;flex-shrink:0;transition:background .15s';
    hClose.textContent = '×';
    hClose.title = 'Close chat';
    hClose.onmouseover = function() { hClose.style.background = 'rgba(255,255,255,.35)'; };
    hClose.onmouseout  = function() { hClose.style.background = 'rgba(255,255,255,.2)'; };
    hClose.onclick = closeChat;

    hdr.appendChild(hAv);
    hdr.appendChild(hInfo);
    hdr.appendChild(hClose);

    /* messages */
    var msgs = document.createElement('div');
    msgs.id = 'ariaMessages';
    msgs.style.cssText = 'flex:1;overflow-y:auto;padding:14px 12px;display:flex;flex-direction:column;background:#F8FAFF;scroll-behavior:smooth';

    /* input bar */
    var inputBar = document.createElement('div');
    inputBar.style.cssText = 'padding:10px 12px;border-top:1px solid #DBEAFE;background:#fff;display:flex;gap:8px;align-items:center;flex-shrink:0';

    var inputWrap = document.createElement('div');
    inputWrap.style.cssText = 'flex:1;background:#F0F6FF;border:1.5px solid #BFDBFE;border-radius:10px;padding:8px 12px;display:flex;align-items:center;transition:border-color .2s';

    var inp = document.createElement('input');
    inp.id = 'ariaInput';
    inp.type = 'text';
    inp.placeholder = 'Ask anything…';
    inp.autocomplete = 'off';
    inp.onkeydown = function(e) {
      if (e.key === 'Enter') {
        var v = inp.value.trim();
        if (v) { inp.value = ''; sendMsg(v); }
      }
    };
    inp.onfocus = function() { inputWrap.style.borderColor = '#2563EB'; };
    inp.onblur  = function() { inputWrap.style.borderColor = '#BFDBFE'; };
    inputWrap.appendChild(inp);

    var sendBtn = document.createElement('button');
    sendBtn.style.cssText = 'width:36px;height:36px;min-width:36px;border-radius:10px;background:linear-gradient(135deg,#2563EB,#7C3AED);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:opacity .15s';
    sendBtn.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" width="15" height="15"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>';
    sendBtn.title = 'Send';
    sendBtn.onmouseover = function() { sendBtn.style.opacity = '.8'; };
    sendBtn.onmouseout  = function() { sendBtn.style.opacity = '1'; };
    sendBtn.onclick = function() {
      var v = inp.value.trim();
      if (v) { inp.value = ''; sendMsg(v); }
    };

    inputBar.appendChild(inputWrap);
    inputBar.appendChild(sendBtn);

    /* footer */
    var foot = document.createElement('div');
    foot.style.cssText = 'padding:6px 12px 8px;text-align:center;font-size:10px;color:#94A3B8;background:#fff;border-top:1px solid #E2E8F0;flex-shrink:0;font-family:"DM Sans",sans-serif';
    var footLink = document.createElement('a');
    footLink.href = 'contact.html';
    footLink.style.cssText = 'color:#2563EB;text-decoration:none;font-weight:500';
    footLink.textContent = 'Talk to a human →';
    foot.textContent = 'Powered by EliteSalesLab AI · ';
    foot.appendChild(footLink);

    win.appendChild(hdr);
    win.appendChild(msgs);
    win.appendChild(inputBar);
    win.appendChild(foot);
    document.body.appendChild(win);

    /* responsive: full width on mobile */
    if (window.innerWidth < 400) {
      win.style.left   = '8px';
      win.style.right  = '8px';
      win.style.width  = 'calc(100vw - 16px)';
      win.style.bottom = '88px';
      win.style.maxHeight = '70vh';
    }

    /* close on ESC */
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && isOpen) closeChat();
    });
  }

  /* ── boot ────────────────────────────────────────── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', build);
  } else {
    build();
  }

})();
