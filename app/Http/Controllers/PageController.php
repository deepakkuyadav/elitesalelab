<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $stats = [
            ['n'=>'500+','l'=>'Projects Delivered'],['n'=>'120+','l'=>'Team Members'],
            ['n'=>'18','l'=>'Countries Served'],['n'=>'97%','l'=>'Client Satisfaction'],
        ];
        $services = [
            ['title'=>'AI & Machine Learning','slug'=>'services.ai','desc'=>'Predictive analytics, NLP, ML pipelines, and intelligent automation that replaces manual bottlenecks.','color'=>'#3B7BFF'],
            ['title'=>'ERP Solutions','slug'=>'services.erp','desc'=>'Custom enterprise resource planning systems connecting inventory, finance, HR, and operations.','color'=>'#8B5CF6'],
            ['title'=>'Web Development','slug'=>'services.web','desc'=>'Scalable SaaS platforms, enterprise portals, and e-commerce systems built for high traffic.','color'=>'#22D3EE'],
            ['title'=>'Mobile Development','slug'=>'services.mobile','desc'=>'iOS, Android, and cross-platform apps with native performance and consumer-grade UX.','color'=>'#10B981'],
            ['title'=>'Cloud & DevOps','slug'=>'services.cloud','desc'=>'AWS, Azure, GCP architecture, migration, CI/CD pipelines, and managed infrastructure.','color'=>'#F59E0B'],
            ['title'=>'Digital Transformation','slug'=>'services','desc'=>'End-to-end digitisation strategy for traditional enterprises moving to modern tech stacks.','color'=>'#EC4899'],
        ];
        $testimonials = [
            ['name'=>'Rahul Verma','role'=>'CTO, FinNova Capital','init'=>'RV','rating'=>5,'text'=>'EliteSalesLab delivered our AI-powered CRM 2 weeks ahead of schedule. Quality far beyond expectations. They genuinely care about outcomes, not just deliverables.','grad'=>'135deg,#3B7BFF,#22D3EE'],
            ['name'=>'Sunita Patel','role'=>'COO, Pinnacle Industries','init'=>'SP','rating'=>5,'text'=>'Our ERP went live across 4 manufacturing plants in 8 months. Flawless communication. The best technology partner we have worked with.','grad'=>'135deg,#8B5CF6,#EC4899'],
            ['name'=>'Arjun Kapoor','role'=>'Founder, SwiftDeliver','init'=>'AK','rating'=>5,'text'=>'The mobile app has a 4.8 App Store rating and 200K+ downloads in 3 months. They understand product thinking, not just code.','grad'=>'135deg,#10B981,#22D3EE'],
            ['name'=>'Priya Sharma','role'=>'VP Tech, DataAxis','init'=>'PS','rating'=>5,'text'=>'Their AI team built our data pipeline from scratch. Reduced processing time by 78%. Absolutely world-class engineers.','grad'=>'135deg,#F59E0B,#EC4899'],
            ['name'=>'Vikram Singh','role'=>'CEO, RetailMax','init'=>'VS','rating'=>5,'text'=>'Migrated our entire cloud infrastructure with zero downtime. Saved 45% on AWS costs. EliteSalesLab is our permanent tech partner.','grad'=>'135deg,#3B7BFF,#8B5CF6'],
        ];
        $technologies = [
            'AI & ML'=>['Python','TensorFlow','PyTorch','OpenAI','LangChain','Hugging Face'],
            'Backend'=>['Laravel','Node.js','Django','FastAPI','GraphQL','REST API'],
            'Frontend'=>['React','Vue.js','Next.js','TypeScript','TailwindCSS','Nuxt.js'],
            'Mobile'=>['React Native','Flutter','Swift','Kotlin','Expo','Capacitor'],
            'Cloud'=>['AWS','Azure','GCP','Docker','Kubernetes','Terraform'],
            'Database'=>['MySQL','PostgreSQL','MongoDB','Redis','Elasticsearch','DynamoDB'],
        ];
        $clients = ['FinNova Capital','RetailMax Group','Nexus Logistics','HealthCore India','EduTech Pro','SwiftPay','DataAxis','CloudNine','AgriTech India','UrbanRide','MobiCommerce','PropManager'];
        $faqs = [
            ['q'=>'What is your typical project timeline?','a'=>'MVPs take 8-14 weeks. Full ERP or AI platforms run 4-9 months. After discovery we provide a fixed timeline with weekly milestones.'],
            ['q'=>'Do you work on fixed-price contracts?','a'=>'Yes. Most projects run on fixed-price milestone-based contracts. You know the scope, timeline, and cost before we write a single line of code.'],
            ['q'=>'What is your minimum project size?','a'=>'We start from INR 5 Lakhs for focused engagements. Enterprise average is INR 25-80 Lakhs. Dedicated team models available for ongoing builds.'],
            ['q'=>'Do you sign NDAs before discovery?','a'=>'Absolutely — mutual NDA before any discovery call. Your IP, business logic, and data remain 100% yours throughout and after the project.'],
            ['q'=>'What post-delivery support do you offer?','a'=>'90-day bug-fix warranty at no charge, plus AMC and dedicated support retainers for ongoing maintenance and feature development.'],
            ['q'=>'Do you work with international clients?','a'=>'Yes — 500+ projects across India, UAE, UK, USA, Singapore, and Australia. Time zone alignment is never a barrier for us.'],
        ];
        return view('pages.home', compact('stats','services','testimonials','technologies','clients','faqs'));
    }

    public function about()
    {
        $team = [
            ['name'=>'Aditya Sharma','role'=>'Founder & CEO','bio'=>'IIT Delhi alumnus with 18 years of enterprise software experience. Led digital transformation at Fortune 500 companies.'],
            ['name'=>'Priya Nair','role'=>'CTO','bio'=>'Ex-Amazon engineer. Architected AI systems processing 100M+ transactions daily. Deep expertise in distributed systems.'],
            ['name'=>'Rohit Gupta','role'=>'VP Engineering','bio'=>'14 years building enterprise ERP and cloud solutions. Certified AWS Solutions Architect and GCP Professional.'],
            ['name'=>'Sneha Kapoor','role'=>'Head of AI & ML','bio'=>'PhD in Machine Learning from IISc Bangalore. 20+ AI patents in fintech and healthcare domains.'],
        ];
        $milestones = [
            ['year'=>'2009','title'=>'Founded in Mumbai','desc'=>'Started with 5 engineers and a bold vision to build enterprise software differently.'],
            ['year'=>'2013','title'=>'First ERP Launch','desc'=>'Delivered our first full-scale ERP for a INR 200Cr manufacturing company.'],
            ['year'=>'2017','title'=>'AI Division Launched','desc'=>'Dedicated AI & Machine Learning practice. First ML model in production.'],
            ['year'=>'2020','title'=>'Global Expansion','desc'=>'Offices in Dubai and Singapore. 18 countries, 300+ clients milestone crossed.'],
            ['year'=>'2023','title'=>'Nasscom Top 10','desc'=>'Recognised as Nasscom Top 10 IT Companies. 120-member team, 500+ projects.'],
            ['year'=>'2025','title'=>'AI-First Strategy','desc'=>'GenAI solutions powering 40% of our new project deliveries.'],
        ];
        return view('pages.about', compact('team','milestones'));
    }

    public function services()     { return view('pages.services.index'); }
    public function aiSolutions()  { return view('pages.services.ai'); }
    public function erpSolutions() { return view('pages.services.erp'); }
    public function webDev()       { return view('pages.services.web'); }
    public function mobileDev()    { return view('pages.services.mobile'); }
    public function cloudSolutions(){ return view('pages.services.cloud'); }
    public function caseStudies()  {
        $cases = [
            ['title'=>'How FinNova Increased Sales Conversion by 47% with AI','client'=>'FinNova Capital','industry'=>'B2B SaaS','service'=>'AI & ML','color'=>'#3B7BFF','results'=>['47% conversion lift','3x pipeline velocity','60% less manual work']],
            ['title'=>'Pinnacle Industries Digitised INR 500Cr Operations in 8 Months','client'=>'Pinnacle Industries','industry'=>'Manufacturing','service'=>'ERP','color'=>'#8B5CF6','results'=>['INR 500Cr digitised','68% efficiency gain','4 plants connected']],
            ['title'=>'SwiftDeliver Achieves 4.8 Rating with 200K+ App Downloads','client'=>'SwiftDeliver','industry'=>'Logistics','service'=>'Mobile App','color'=>'#22D3EE','results'=>['4.8 App Store rating','200K+ downloads','50K daily deliveries']],
        ];
        return view('pages.case-studies', compact('cases'));
    }
    public function privacy() { return view('pages.privacy'); }
    public function terms()   { return view('pages.terms'); }
    public function sitemap() { return response()->view('sitemap')->header('Content-Type','application/xml'); }
}
