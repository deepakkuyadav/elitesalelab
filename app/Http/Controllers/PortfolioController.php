<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function projects() {
        return [
            ['title'=>'NexaForce AI CRM','slug'=>'nexaforce-ai-crm','cat'=>'ai','client'=>'NexaForce Corp','duration'=>'6 months','tech'=>['Python','TensorFlow','Laravel','Vue.js','AWS'],'results'=>['47% conversion lift','3x pipeline velocity','60% less manual work'],'desc'=>'AI-powered lead scoring and predictive sales forecasting platform.','color'=>'#3B7BFF'],
            ['title'=>'ManufactureIQ ERP Suite','slug'=>'manufactureiq-erp','cat'=>'erp','client'=>'Pinnacle Industries','duration'=>'8 months','tech'=>['Laravel','React','MySQL','Redis','Docker'],'results'=>['INR 500Cr digitised','68% efficiency gain','4 plants connected'],'desc'=>'End-to-end ERP across 4 manufacturing plants with real-time dashboards.','color'=>'#8B5CF6'],
            ['title'=>'SwiftDeliver Logistics App','slug'=>'swiftdeliver-app','cat'=>'mobile','client'=>'SwiftDeliver','duration'=>'5 months','tech'=>['React Native','Node.js','MongoDB','Google Maps','FCM'],'results'=>['4.8 App Store rating','200K+ downloads','50K daily deliveries'],'desc'=>'Real-time delivery tracking and route optimisation app.','color'=>'#22D3EE'],
            ['title'=>'HealthBridge Patient Portal','slug'=>'healthbridge-portal','cat'=>'web','client'=>'HealthBridge','duration'=>'4 months','tech'=>['Laravel','Vue.js','PostgreSQL','WebRTC','AWS'],'results'=>['80K+ patients','40% admin reduction','HIPAA compliant'],'desc'=>'HIPAA-compliant telemedicine and patient management portal.','color'=>'#10B981'],
            ['title'=>'CloudVault Banking Infra','slug'=>'cloudvault-banking','cat'=>'cloud','client'=>'SecureBank','duration'=>'3 months','tech'=>['AWS','Terraform','Docker','Kubernetes','Python'],'results'=>['99.99% uptime','45% cost saving','Zero downtime migration'],'desc'=>'AWS infrastructure migration for a leading private sector bank.','color'=>'#F59E0B'],
            ['title'=>'RetailPulse Analytics Engine','slug'=>'retailpulse-analytics','cat'=>'ai','client'=>'RetailPulse','duration'=>'5 months','tech'=>['Python','Apache Spark','Kafka','PostgreSQL','Tableau'],'results'=>['32% waste reduction','15% revenue increase','200+ outlets'],'desc'=>'Real-time shopper behaviour analysis and demand forecasting.','color'=>'#EC4899'],
        ];
    }
    public function index(Request $r) {
        $cat = $r->get('category','all');
        $projects = $this->projects();
        if($cat && $cat!=='all') $projects = array_values(array_filter($projects,fn($p)=>$p['cat']===$cat));
        return view('pages.portfolio.index',['projects'=>$projects,'category'=>$cat]);
    }
    public function show($slug) {
        $project = collect($this->projects())->firstWhere('slug',$slug);
        if(!$project) abort(404);
        return view('pages.portfolio.show',compact('project'));
    }
}
