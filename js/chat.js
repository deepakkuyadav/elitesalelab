/* ═══════════════════════════════════════════════════════════
   EliteSalesLab — AI Chat Assistant
   Smart conversational AI for website visitors
═══════════════════════════════════════════════════════════ */

const ESL_AI = {

  // ── Knowledge Base ────────────────────────────────────────
  kb: {
    services: {
      ai:     { name:'AI & Machine Learning', color:'#3B7BFF', page:'service-ai.html',     desc:'Predictive analytics, NLP, LLM integration, computer vision, ML model deployment. 138 models in production.' },
      erp:    { name:'ERP Solutions',         color:'#8B5CF6', page:'service-erp.html',     desc:'Custom ERP connecting finance, HR, inventory, operations. Multi-plant, mobile-ready.' },
      web:    { name:'Web Development',       color:'#22D3EE', page:'service-web.html',     desc:'SaaS platforms, enterprise portals, e-commerce. Laravel, React, Next.js.' },
      mobile: { name:'Mobile Development',    color:'#10B981', page:'service-mobile.html',  desc:'iOS, Android, React Native, Flutter. 4.8 avg App Store rating.' },
      cloud:  { name:'Cloud & DevOps',        color:'#F59E0B', page:'service-cloud.html',   desc:'AWS, Azure, GCP, Kubernetes, CI/CD, Terraform. 99.99% uptime SLA.' },
      dt:     { name:'Digital Transformation',color:'#EC4899', page:'service-dt.html',      desc:'Legacy modernisation, process automation, digital roadmap strategy.' },
    },
    company: {
      founded: '2009', team: '120+', projects: '500+', countries: '18',
      satisfaction: '97%', hq: 'Level 12, Platina Building, BKC, Mumbai 400 051',
      email: 'hello@elitesaleslab.com', phone: '+91 98765 43210',
      whatsapp: '+91 98765 43210',
    },
    pricing: {
      min: 'INR 5 Lakhs', avg: 'INR 25–80 Lakhs', enterprise: 'INR 1 Crore+',
      model: 'Fixed-price milestone-based contracts. You know scope, timeline, and cost before we write a single line of code.',
    },
    process: ['Discovery & NDA (Day 1)', 'Technical Planning & Architecture', 'Agile Sprint Development', 'QA & Testing', 'Go-live & Handover', '90-day warranty included'],
    guarantees: ['Fixed-price delivery', 'NDA on day one', '90-day bug-fix warranty', '2-hour response SLA', 'Weekly progress reports', 'Source code ownership'],
  },

  // ── Intent Detection ─────────────────────────────────────
  intents: [
    { keys:['hello','hi','hey','namaste','hlo','hii','good morning','good evening'], id:'greet' },
    { keys:['service','services','what do you','what you do','offer','build','develop','kya karte'], id:'services' },
    { keys:['ai','ml','machine learning','artificial intelligence','llm','neural','chatbot','automation','predict'], id:'ai' },
    { keys:['erp','enterprise resource','inventory','finance module','hr module','payroll','supply chain','manufacturing'], id:'erp' },
    { keys:['web','website','saas','portal','ecommerce','e-commerce','laravel','react','nextjs'], id:'web' },
    { keys:['mobile','app','ios','android','flutter','react native','play store','app store'], id:'mobile' },
    { keys:['cloud','aws','azure','gcp','devops','kubernetes','docker','terraform','ci cd','deployment'], id:'cloud' },
    { keys:['digital transform','legacy','modernise','modernize','old system','process automation'], id:'dt' },
    { keys:['price','pricing','cost','budget','how much','kitna','charges','rate','fee','pakage','package'], id:'pricing' },
    { keys:['timeline','how long','time','duration','delivery','kab','kitne din','weeks','months'], id:'timeline' },
    { keys:['process','how do you work','working process','steps','methodology','approach'], id:'process' },
    { keys:['nda','confidential','secret','ip','intellectual property','secure'], id:'nda' },
    { keys:['warranty','support','after','maintenance','bug fix','amc'], id:'support' },
    { keys:['team','who','expert','engineer','developer','employee','staff'], id:'team' },
    { keys:['contact','reach','call','email','phone','talk','meet','discuss','quote'], id:'contact' },
    { keys:['portfolio','project','case study','work','example','client','sample'], id:'portfolio' },
    { keys:['location','office','where','address','city','mumbai','india'], id:'location' },
    { keys:['career','job','hiring','vacancy','opening','join','work with you'], id:'careers' },
    { keys:['technology','tech stack','language','framework','tools'], id:'tech' },
    { keys:['thank','thanks','great','good','nice','perfect','awesome','superb'], id:'thanks' },
    { keys:['bye','goodbye','ok bye','take care','see you'], id:'bye' },
  ],

  // ── Responses ────────────────────────────────────────────
  responses: {
    greet: {
      text: "Hello! 👋 I'm **Aria**, EliteSalesLab's AI assistant. I can help you with:\n\n• Our services & pricing\n• Project timelines & process\n• Technical questions\n• Getting a free quote\n\nWhat can I help you with today?",
      quick: ['Our Services', 'Pricing', 'Get a Quote', 'Our Work']
    },
    services: {
      text: "We offer **6 core enterprise services**:\n\n🤖 **AI & Machine Learning** — Predictive analytics, LLM, NLP\n📊 **ERP Solutions** — Custom enterprise systems\n🌐 **Web Development** — SaaS, portals, e-commerce\n📱 **Mobile Apps** — iOS, Android, cross-platform\n☁️ **Cloud & DevOps** — AWS, K8s, CI/CD\n⚡ **Digital Transformation** — Legacy modernisation\n\nWhich service are you interested in?",
      quick: ['AI & ML', 'ERP', 'Web Dev', 'Mobile', 'Cloud', 'Transform']
    },
    ai: {
      text: "Our **AI & Machine Learning** practice has deployed **138 models** in production across fintech, healthcare, logistics, and retail.\n\n✅ Predictive Sales Intelligence (avg **47% conversion lift**)\n✅ NLP — contract analysis, support automation\n✅ Computer Vision — defect detection (99.7% accuracy)\n✅ LLM / GenAI — custom AI chatbots & document AI\n✅ Fraud Detection & Anomaly Detection\n✅ ML Model Deployment (MLOps, FastAPI, AWS)\n\nStack: Python, TensorFlow, PyTorch, LangChain, OpenAI API\n\nWant to discuss your AI project?",
      quick: ['Get AI Quote', 'View AI Cases', 'Pricing']
    },
    erp: {
      text: "We build **custom ERP systems** — not off-the-shelf software that forces you to change your process.\n\n✅ Multi-plant & multi-entity support\n✅ Finance, HR, Payroll, Inventory modules\n✅ Real-time dashboards & executive reports\n✅ Mobile ERP apps (iOS & Android)\n✅ Integrates with Tally, SAP, Zoho, Salesforce\n\n🏆 Our flagship project: **Pinnacle Industries** — INR 500Cr operations digitised across 4 plants in 8 months.\n\nStack: Laravel, React, MySQL, Redis, Docker",
      quick: ['ERP Pricing', 'View ERP Case Study', 'Get a Quote']
    },
    web: {
      text: "We build **enterprise-grade web platforms** — SaaS, portals, and e-commerce — engineered for scale from day one.\n\n✅ SaaS platform development\n✅ Custom CRM & CMS\n✅ B2B marketplace platforms\n✅ Progressive Web Apps (PWA)\n✅ Performance-optimised (Core Web Vitals A+ score)\n✅ Security hardening & penetration tested\n\n🏆 **HealthBridge** — 80K+ patients, HIPAA compliant, 4 months\n\nStack: Laravel, Vue.js, React, Next.js, TypeScript",
      quick: ['Web Dev Pricing', 'See Portfolio', 'Start Project']
    },
    mobile: {
      text: "We build **iOS, Android, and cross-platform apps** with native performance and consumer-grade UX.\n\n✅ iOS (Swift & SwiftUI)\n✅ Android (Kotlin & Jetpack Compose)\n✅ React Native — single codebase\n✅ Flutter — high-performance UI\n✅ Offline-first architecture\n✅ Real-time features, push notifications\n✅ App Store & Play Store publishing\n\n🏆 **SwiftDeliver** — 4.8 App Store rating, 200K+ downloads, 50K daily users",
      quick: ['Mobile Pricing', 'View App Portfolio', 'Get Quote']
    },
    cloud: {
      text: "We architect and manage **enterprise cloud infrastructure** on AWS, Azure, and GCP.\n\n✅ Cloud migration (zero-downtime track record)\n✅ Kubernetes & Docker orchestration\n✅ CI/CD pipelines (GitHub Actions, Jenkins)\n✅ Infrastructure as Code (Terraform)\n✅ 24/7 monitoring (Datadog, Grafana)\n✅ Security audits & compliance\n\n🏆 **SecureBank** — 60 servers to AWS, 45% cost saving, zero downtime\n\nSLA: **99.99% uptime** guaranteed",
      quick: ['Cloud Pricing', 'Migration Assessment', 'Get Quote']
    },
    dt: {
      text: "We help **traditional enterprises go fully digital** — not just by replacing software, but by rethinking processes.\n\n✅ Digital Readiness Assessment\n✅ Legacy system modernisation\n✅ Business process automation (RPA, AI)\n✅ Change management & staff training\n✅ Data migration strategy\n✅ Ongoing digital advisory (monthly retainer)\n\n🏆 **Pinnacle Industries** — 68% efficiency gain, 3x faster operations in 10 months",
      quick: ['Start Assessment', 'Pricing', 'Contact Team']
    },
    pricing: {
      text: "Our pricing is **transparent and fixed-price** — no surprises.\n\n💰 **Minimum project:** INR 5 Lakhs\n📊 **Typical enterprise:** INR 25–80 Lakhs\n🏢 **Large-scale platform:** INR 1 Crore+\n\n**How it works:**\n1. Free technical discovery call (1 hr)\n2. We send a detailed fixed-price proposal\n3. Milestone-based payments — you pay per delivery\n4. NDA signed before any call\n\nNo retainer upfront. No hidden costs. 90-day warranty included.",
      quick: ['Book Free Call', 'View Our Work', 'Contact Us']
    },
    timeline: {
      text: "Project timelines depend on scope:\n\n⚡ **MVP / Focused module:** 8–14 weeks\n📱 **Mobile app:** 3–5 months\n🌐 **Web platform / SaaS:** 4–6 months\n📊 **ERP system:** 6–9 months\n🤖 **AI platform:** 4–7 months\n\nEvery project gets a **detailed timeline with weekly milestones** before we start. We have delivered 98.3% of projects on time or early.\n\nWant a timeline estimate for your project?",
      quick: ['Get Timeline Estimate', 'Discuss Project', 'Pricing']
    },
    process: {
      text: "Our **5-step delivery process**:\n\n1️⃣ **Discovery** — Requirements, NDA, technical planning (Week 1)\n2️⃣ **Design** — UX wireframes & architecture (Week 2–3)\n3️⃣ **Build** — Agile sprints with weekly demos\n4️⃣ **QA & Test** — Automated + manual testing\n5️⃣ **Launch & Handover** — Deployment, training, docs\n\n➕ **90-day bug-fix warranty** after launch — no cost.\n\nYou get full source code, documentation, and zero vendor lock-in.",
      quick: ['Start a Project', 'Pricing', 'Contact Team']
    },
    nda: {
      text: "**Confidentiality is our priority.**\n\n✅ Mutual NDA signed **before any discovery call**\n✅ All team members are bound by NDAs\n✅ Your IP, business logic & data belong to **you** — always\n✅ Source code 100% owned by you upon delivery\n✅ We never reuse client-specific code or data\n\nWe have worked with banks, healthcare companies, and defence contractors — confidentiality is non-negotiable for us.",
      quick: ['Request NDA', 'Book a Call', 'Contact Us']
    },
    support: {
      text: "**Post-delivery support included:**\n\n✅ **90-day bug-fix warranty** — free, no questions asked\n✅ **AMC (Annual Maintenance Contract)** — ongoing support retainer\n✅ **Dedicated support team** — 2-hour response SLA\n✅ **Priority bug fixes** — critical issues in < 4 hours\n✅ Feature development retainers available\n\nWe don't disappear after delivery. Most of our clients have been with us 3+ years.",
      quick: ['Discuss AMC', 'Contact Support', 'Get Quote']
    },
    team: {
      text: "**120+ expert engineers** across Mumbai and Gurugram:\n\n👨‍💼 **Aditya Sharma** — Founder & CEO (IIT Delhi, 18 yrs exp)\n👩‍💻 **Priya Nair** — CTO (Ex-Amazon, AI systems)\n🔧 **Rohit Gupta** — VP Engineering (ERP & Cloud expert)\n🤖 **Sneha Kapoor** — Head of AI & ML (PhD IISc, 20+ patents)\n\n**Average engineer experience:** 6+ years\n**All engineers in-house** — no outsourcing ever\n\nWe are Nasscom Top 10 recognised (2023).",
      quick: ['View About Page', 'Contact Team', 'Careers']
    },
    contact: {
      text: "**Let's talk!** Our team responds within **4 business hours**.\n\n📧 **Email:** hello@elitesaleslab.com\n📞 **Phone:** +91 98765 43210\n💬 **WhatsApp:** +91 98765 43210\n📍 **Office:** Level 12, Platina Building, BKC, Mumbai\n⏰ **Hours:** Mon–Fri 9AM–7PM | Sat 10AM–4PM IST\n\nOr fill our contact form — we'll schedule a **free 1-hour technical assessment** within 24 hours.",
      quick: ['Open Contact Form', 'WhatsApp Now', 'Book a Call']
    },
    portfolio: {
      text: "**500+ projects delivered.** Some highlights:\n\n🤖 **NexaForce AI CRM** — 47% conversion lift (FinNova Capital)\n🏭 **ManufactureIQ ERP** — INR 500Cr digitised (Pinnacle)\n🚚 **SwiftDeliver App** — 200K+ downloads, 4.8 rating\n🏥 **HealthBridge Portal** — 80K+ patients, HIPAA compliant\n🏦 **CloudVault Banking** — 99.99% uptime, 45% cost saving\n📊 **RetailPulse Analytics** — 32% waste reduction\n\nAcross 18 countries. 97% client satisfaction.",
      quick: ['View Full Portfolio', 'View Case Studies', 'Start Similar Project']
    },
    location: {
      text: "**Our offices:**\n\n🇮🇳 **Mumbai HQ** — Level 12, Platina Building, BKC, Mumbai 400 051\n🇮🇳 **Gurugram** — DLF Cyber City, Gurugram, Haryana\n🇦🇪 **Dubai** — Business Bay, Dubai, UAE\n🇸🇬 **Singapore** — One Raffles Place\n\nWe work with clients across **18 countries**. Time zone is never a constraint — we have engineers across IST, GST, and SGT.",
      quick: ['Contact Mumbai Office', 'WhatsApp Us', 'Book a Call']
    },
    careers: {
      text: "**We're always hiring talented engineers!**\n\n🔥 **Open positions:**\n• Senior Laravel Developer — INR 18–32 LPA\n• AI/ML Engineer — INR 20–40 LPA\n• React Native Developer — INR 14–24 LPA\n• Cloud DevOps Engineer — INR 18–30 LPA\n• UI/UX Designer — INR 10–18 LPA\n\n**Perks:** Remote-friendly, INR 50K learning budget, fast growth, flat hierarchy\n\nApply at careers page or email hr@elitesaleslab.com",
      quick: ['View Open Jobs', 'Apply Now', 'Contact HR']
    },
    tech: {
      text: "**Our technology stack:**\n\n🤖 **AI/ML:** Python, TensorFlow, PyTorch, LangChain, OpenAI\n⚙️ **Backend:** Laravel, Node.js, Django, FastAPI, GraphQL\n🎨 **Frontend:** React, Vue.js, Next.js, TypeScript, TailwindCSS\n📱 **Mobile:** React Native, Flutter, Swift, Kotlin\n☁️ **Cloud:** AWS, Azure, GCP, Docker, Kubernetes, Terraform\n🗄️ **Database:** MySQL, PostgreSQL, MongoDB, Redis, Elasticsearch\n\nWe choose the right stack for your project — not the trendy one.",
      quick: ['Discuss Tech Stack', 'Our Services', 'Get Quote']
    },
    thanks: {
      text: "You're most welcome! 😊 Is there anything else I can help you with?\n\nIf you're ready to discuss your project, I'd suggest:\n\n📞 **Book a free call** — 1 hour, no commitment\n💬 **WhatsApp us** — fastest response\n📧 **Email us** — hello@elitesaleslab.com",
      quick: ['Book Free Call', 'WhatsApp Now', 'Another Question']
    },
    bye: {
      text: "Thanks for chatting! 👋 \n\nBefore you go — you can always reach us at:\n📞 +91 98765 43210\n📧 hello@elitesaleslab.com\n\nHope to work together soon! 🚀",
      quick: ['Contact Us', 'View Services']
    },
    fallback: {
      text: "I'm not sure I fully understood that. Let me help you with the right information. Are you looking for:",
      quick: ['Our Services', 'Pricing', 'Project Timeline', 'Contact Team', 'Get a Quote']
    }
  },

  // ── Quick Reply Actions ──────────────────────────────────
  quickActions: {
    'Our Services'         : () => ESL_AI.reply('services'),
    'Pricing'              : () => ESL_AI.reply('pricing'),
    'Get a Quote'          : () => ESL_AI.reply('contact'),
    'Get AI Quote'         : () => ESL_AI.reply('contact'),
    'ERP Pricing'          : () => ESL_AI.reply('pricing'),
    'Web Dev Pricing'      : () => ESL_AI.reply('pricing'),
    'Mobile Pricing'       : () => ESL_AI.reply('pricing'),
    'Cloud Pricing'        : () => ESL_AI.reply('pricing'),
    'Our Work'             : () => ESL_AI.reply('portfolio'),
    'View Portfolio'       : () => ESL_AI.reply('portfolio'),
    'View Our Work'        : () => ESL_AI.reply('portfolio'),
    'View Full Portfolio'  : () => { window.open('portfolio.html','_self'); },
    'View Case Studies'    : () => { window.open('case-studies.html','_self'); },
    'View AI Cases'        : () => { window.open('case-studies.html','_self'); },
    'View ERP Case Study'  : () => { window.open('case-studies.html','_self'); },
    'View App Portfolio'   : () => { window.open('portfolio.html','_self'); },
    'See Portfolio'        : () => { window.open('portfolio.html','_self'); },
    'Project Timeline'     : () => ESL_AI.reply('timeline'),
    'Get Timeline Estimate': () => ESL_AI.reply('timeline'),
    'Discuss Project'      : () => ESL_AI.reply('contact'),
    'Start Project'        : () => ESL_AI.reply('contact'),
    'Start Similar Project': () => ESL_AI.reply('contact'),
    'Start Assessment'     : () => ESL_AI.reply('contact'),
    'Contact Team'         : () => ESL_AI.reply('contact'),
    'Contact Us'           : () => ESL_AI.reply('contact'),
    'Contact HR'           : () => ESL_AI.reply('contact'),
    'Contact Support'      : () => ESL_AI.reply('contact'),
    'Book a Call'          : () => ESL_AI.reply('contact'),
    'Book Free Call'       : () => ESL_AI.reply('contact'),
    'Open Contact Form'    : () => { window.open('contact.html','_self'); },
    'Discuss AMC'          : () => ESL_AI.reply('support'),
    'Request NDA'          : () => ESL_AI.reply('nda'),
    'Migration Assessment' : () => ESL_AI.reply('contact'),
    'Discuss Tech Stack'   : () => ESL_AI.reply('tech'),
    'WhatsApp Now'         : () => { window.open('https://wa.me/919876543210','_blank'); },
    'WhatsApp Us'          : () => { window.open('https://wa.me/919876543210','_blank'); },
    'Contact Mumbai Office': () => ESL_AI.reply('location'),
    'View Open Jobs'       : () => { window.open('careers.html','_self'); },
    'Apply Now'            : () => { window.open('careers.html','_self'); },
    'View About Page'      : () => { window.open('about.html','_self'); },
    'Careers'              : () => { window.open('careers.html','_self'); },
    'AI & ML'              : () => ESL_AI.reply('ai'),
    'ERP'                  : () => ESL_AI.reply('erp'),
    'Web Dev'              : () => ESL_AI.reply('web'),
    'Mobile'               : () => ESL_AI.reply('mobile'),
    'Cloud'                : () => ESL_AI.reply('cloud'),
    'Transform'            : () => ESL_AI.reply('dt'),
    'Another Question'     : () => ESL_AI.addMsg('bot','What else can I help you with?',['Services','Pricing','Timeline','Contact']),
    'Get Quote'            : () => ESL_AI.reply('contact'),
  },

  msgs: [],
  open: false,
  typing: false,

  // ── Detect intent ────────────────────────────────────────
  detect(text) {
    const t = text.toLowerCase();
    for (const intent of this.intents) {
      if (intent.keys.some(k => t.includes(k))) return intent.id;
    }
    return 'fallback';
  },

  // ── Add message ──────────────────────────────────────────
  addMsg(role, text, quick = []) {
    const box = document.getElementById('esl-chat-msgs');
    if (!box) return;

    const wrap = document.createElement('div');
    wrap.style.cssText = `display:flex;${role==='user'?'justify-content:flex-end':'align-items:flex-start;gap:10px'};margin-bottom:14px;animation:msgIn .35s ease`;

    if (role === 'bot') {
      const av = document.createElement('div');
      av.style.cssText = 'width:32px;height:32px;border-radius:50%;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);display:flex;align-items:center;justify-content:center;flex-shrink:0;font-family:Syne,sans-serif;font-weight:700;font-size:.75rem;color:#fff;margin-top:2px';
      av.textContent = 'AI';
      wrap.appendChild(av);
    }

    const bubble = document.createElement('div');
    const maxW = role === 'user' ? '75%' : '80%';
    bubble.style.cssText = `max-width:${maxW};padding:11px 15px;border-radius:${role==='user'?'18px 18px 4px 18px':'18px 18px 18px 4px'};background:${role==='user'?'linear-gradient(135deg,#3B7BFF,#8B5CF6)':'rgba(20,26,56,.9)'};color:#EEF2FF;font-size:.84rem;line-height:1.65;border:${role==='user'?'none':'1px solid rgba(255,255,255,.08)'}`;

    // Parse markdown-like bold
    const parsed = text.replace(/\*\*(.*?)\*\*/g, '<strong style="color:#fff">$1</strong>')
                       .replace(/\n/g, '<br>');
    bubble.innerHTML = parsed;
    wrap.appendChild(bubble);

    const msgGroup = document.createElement('div');
    msgGroup.appendChild(wrap);

    // Quick replies
    if (quick.length) {
      const qr = document.createElement('div');
      qr.style.cssText = 'display:flex;flex-wrap:wrap;gap:7px;padding-left:42px;margin-top:6px;margin-bottom:8px';
      quick.forEach(q => {
        const btn = document.createElement('button');
        btn.textContent = q;
        btn.style.cssText = 'padding:6px 14px;border-radius:999px;font-size:.78rem;font-weight:500;background:rgba(59,123,255,.1);border:1px solid rgba(59,123,255,.3);color:#6A9FFF;cursor:pointer;font-family:DM Sans,sans-serif;transition:all .15s;white-space:nowrap';
        btn.onmouseover = () => { btn.style.background='rgba(59,123,255,.25)'; btn.style.color='#EEF2FF'; };
        btn.onmouseout  = () => { btn.style.background='rgba(59,123,255,.1)';  btn.style.color='#6A9FFF'; };
        btn.onclick = () => {
          // Remove all quick reply rows
          document.querySelectorAll('#esl-chat-msgs .qr-row').forEach(r => r.remove());
          if (ESL_AI.quickActions[q]) {
            ESL_AI.addMsg('user', q);
            setTimeout(() => ESL_AI.quickActions[q](), 200);
          } else {
            ESL_AI.send(q);
          }
        };
        qr.appendChild(btn);
      });
      qr.className = 'qr-row';
      msgGroup.appendChild(qr);
    }

    box.appendChild(msgGroup);
    box.scrollTop = box.scrollHeight;
  },

  // ── Typing indicator ─────────────────────────────────────
  showTyping() {
    const box = document.getElementById('esl-chat-msgs');
    if (!box) return;
    const el = document.createElement('div');
    el.id = 'esl-typing';
    el.style.cssText = 'display:flex;align-items:center;gap:10px;margin-bottom:12px';
    el.innerHTML = `
      <div style="width:32px;height:32px;border-radius:50%;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.75rem;color:#fff;font-family:Syne,sans-serif">AI</div>
      <div style="padding:11px 16px;border-radius:18px 18px 18px 4px;background:rgba(20,26,56,.9);border:1px solid rgba(255,255,255,.08);display:flex;gap:5px;align-items:center">
        <span style="width:6px;height:6px;border-radius:50%;background:#6A9FFF;animation:tdot 1.2s infinite"></span>
        <span style="width:6px;height:6px;border-radius:50%;background:#6A9FFF;animation:tdot 1.2s .2s infinite"></span>
        <span style="width:6px;height:6px;border-radius:50%;background:#6A9FFF;animation:tdot 1.2s .4s infinite"></span>
      </div>`;
    box.appendChild(el);
    box.scrollTop = box.scrollHeight;
  },

  hideTyping() {
    const el = document.getElementById('esl-typing');
    if (el) el.remove();
  },

  // ── Reply with intent ────────────────────────────────────
  reply(intentId) {
    const r = this.responses[intentId] || this.responses.fallback;
    this.showTyping();
    const delay = 600 + Math.random() * 700;
    setTimeout(() => {
      this.hideTyping();
      this.addMsg('bot', r.text, r.quick || []);
    }, delay);
  },

  // ── Send message ─────────────────────────────────────────
  send(text) {
    if (!text.trim()) return;
    this.addMsg('user', text);
    const intentId = this.detect(text);
    this.reply(intentId);
  },

  // ── Toggle chat window ───────────────────────────────────
  toggle() {
    const win = document.getElementById('esl-chat-win');
    const badge = document.getElementById('esl-badge');
    if (!win) return;
    this.open = !this.open;
    win.style.transform = this.open ? 'scale(1) translateY(0)' : 'scale(.9) translateY(20px)';
    win.style.opacity   = this.open ? '1' : '0';
    win.style.pointerEvents = this.open ? 'all' : 'none';
    if (badge) badge.style.display = 'none';
    if (this.open && document.getElementById('esl-chat-msgs').children.length === 0) {
      setTimeout(() => this.reply('greet'), 300);
    }
    if (this.open) setTimeout(() => document.getElementById('esl-inp')?.focus(), 400);
  },

  // ── Init ─────────────────────────────────────────────────
  init() {
    // Inject styles
    const sty = document.createElement('style');
    sty.textContent = `
      @keyframes msgIn { from{opacity:0;transform:translateY(10px)} to{opacity:1;transform:none} }
      @keyframes tdot  { 0%,60%,100%{transform:translateY(0)} 30%{transform:translateY(-5px)} }
      @keyframes chatPop { from{opacity:0;transform:scale(.8) translateY(20px)} to{opacity:1;transform:scale(1) translateY(0)} }
      #esl-chat-btn { animation:chatPop .5s .8s ease both; }
      #esl-chat-win { transition: transform .3s cubic-bezier(.34,1.56,.64,1), opacity .3s ease; }
      #esl-inp:focus { outline:none; }
      #esl-chat-msgs::-webkit-scrollbar { width:4px; }
      #esl-chat-msgs::-webkit-scrollbar-thumb { background:rgba(255,255,255,.1); border-radius:2px; }
    `;
    document.head.appendChild(sty);

    // Chat button
    const btn = document.createElement('div');
    btn.id = 'esl-chat-btn';
    btn.title = 'Chat with AI';
    btn.style.cssText = 'position:fixed;bottom:28px;left:28px;width:56px;height:56px;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;z-index:8000;box-shadow:0 6px 24px rgba(59,123,255,.5);transition:transform .2s,box-shadow .2s';
    btn.innerHTML = `
      <svg id="esl-chat-ico" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" width="24" height="24">
        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
      </svg>
      <span id="esl-badge" style="position:absolute;top:-4px;right:-4px;width:18px;height:18px;background:#EC4899;border-radius:50%;font-size:.65rem;font-weight:700;color:#fff;display:flex;align-items:center;justify-content:center;border:2px solid #06091A">1</span>`;
    btn.onmouseover = () => { btn.style.transform='scale(1.12)'; btn.style.boxShadow='0 10px 32px rgba(59,123,255,.65)'; };
    btn.onmouseout  = () => { btn.style.transform='scale(1)';    btn.style.boxShadow='0 6px 24px rgba(59,123,255,.5)'; };
    btn.onclick     = () => this.toggle();
    document.body.appendChild(btn);

    // Chat window
    const win = document.createElement('div');
    win.id = 'esl-chat-win';
    win.style.cssText = 'position:fixed;bottom:96px;left:28px;width:360px;height:520px;background:#06091A;border:1px solid rgba(255,255,255,.1);border-radius:22px;display:flex;flex-direction:column;z-index:7999;box-shadow:0 24px 80px rgba(0,0,0,.7);overflow:hidden;transform:scale(.9) translateY(20px);opacity:0;pointer-events:none';
    win.innerHTML = `
      <!-- Header -->
      <div style="background:linear-gradient(135deg,#3B7BFF,#8B5CF6);padding:16px 20px;display:flex;align-items:center;gap:12px;flex-shrink:0">
        <div style="width:40px;height:40px;border-radius:50%;background:rgba(255,255,255,.2);display:flex;align-items:center;justify-content:center;font-family:Syne,sans-serif;font-weight:800;font-size:.9rem;color:#fff;flex-shrink:0">AI</div>
        <div style="flex:1">
          <div style="font-family:Syne,sans-serif;font-weight:700;font-size:.95rem;color:#fff">Aria — AI Assistant</div>
          <div style="display:flex;align-items:center;gap:5px;margin-top:2px">
            <span style="width:7px;height:7px;border-radius:50%;background:#27C840;animation:pulse 2s infinite"></span>
            <span style="font-size:.72rem;color:rgba(255,255,255,.75)">Online · EliteSalesLab</span>
          </div>
        </div>
        <button onclick="ESL_AI.toggle()" style="width:30px;height:30px;border-radius:50%;background:rgba(255,255,255,.15);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1rem;line-height:1">×</button>
      </div>
      <!-- Messages -->
      <div id="esl-chat-msgs" style="flex:1;overflow-y:auto;padding:16px;display:flex;flex-direction:column;gap:2px;scroll-behavior:smooth"></div>
      <!-- Input -->
      <div style="padding:12px 14px;border-top:1px solid rgba(255,255,255,.07);background:#0B1028;display:flex;gap:8px;align-items:flex-end;flex-shrink:0">
        <input id="esl-inp" type="text" placeholder="Ask anything about EliteSalesLab…"
          style="flex:1;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:12px;padding:10px 14px;color:#EEF2FF;font-size:.84rem;font-family:DM Sans,sans-serif;resize:none;min-height:40px"
          onkeydown="if(event.key==='Enter'&&!event.shiftKey){event.preventDefault();ESL_AI.sendInput()}">
        <button onclick="ESL_AI.sendInput()" style="width:40px;height:40px;border-radius:12px;background:linear-gradient(135deg,#3B7BFF,#8B5CF6);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:opacity .2s" onmouseover="this.style.opacity='.8'" onmouseout="this.style.opacity='1'">
          <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" width="16" height="16"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        </button>
      </div>
      <!-- Footer -->
      <div style="padding:7px 14px 10px;text-align:center;font-size:.68rem;color:#4B5982;background:#0B1028">Powered by EliteSalesLab AI · <a href="contact.html" style="color:#3B7BFF;text-decoration:none">Talk to a human →</a></div>
    `;
    document.body.appendChild(win);

    // Mobile responsive
    if (window.innerWidth < 480) {
      win.style.left   = '10px';
      win.style.right  = '10px';
      win.style.width  = 'calc(100vw - 20px)';
      win.style.bottom = '90px';
      win.style.height = '65vh';
    }
  },

  sendInput() {
    const inp = document.getElementById('esl-inp');
    if (!inp || !inp.value.trim()) return;
    const msg = inp.value.trim();
    inp.value = '';
    this.send(msg);
  }
};

// ── Boot ─────────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => ESL_AI.init());
