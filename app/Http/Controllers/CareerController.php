<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    private function jobs() {
        return [
            ['title'=>'Senior Laravel Developer','slug'=>'senior-laravel-developer','dept'=>'Engineering','location'=>'Remote / Mumbai','type'=>'Full-time','exp'=>'3-6 yrs','salary'=>'INR 18-32 LPA',
             'resp'=>['Design and build scalable Laravel APIs','Lead code reviews and mentor junior developers','Collaborate with product and design teams','Optimise database queries and application performance','Implement security best practices'],
             'req'=>['Strong PHP 8.x and Laravel 10/11 expertise','Experience with MySQL, Redis, and Elasticsearch','Docker and CI/CD pipeline familiarity','REST API and GraphQL design experience','Good communication and teamwork skills']],
            ['title'=>'React Native Developer','slug'=>'react-native-developer','dept'=>'Engineering','location'=>'Hybrid / Gurugram','type'=>'Full-time','exp'=>'2-4 yrs','salary'=>'INR 14-24 LPA',
             'resp'=>['Build cross-platform mobile apps with React Native','Integrate REST APIs and third-party SDKs','Optimise app performance for iOS and Android','Write clean, testable code with unit tests','Collaborate with UX designers on pixel-perfect implementation'],
             'req'=>['React Native and React.js proficiency','Experience publishing to App Store and Play Store','TypeScript knowledge preferred','Familiarity with Expo and native modules','Strong debugging and troubleshooting skills']],
            ['title'=>'AI / ML Engineer','slug'=>'ai-ml-engineer','dept'=>'AI & Data','location'=>'Gurugram / Remote','type'=>'Full-time','exp'=>'3-5 yrs','salary'=>'INR 20-40 LPA',
             'resp'=>['Design and deploy ML models in production','Build NLP and computer vision pipelines','Fine-tune LLMs for enterprise use cases','Collaborate with engineering on MLOps infrastructure','Write technical documentation and research reports'],
             'req'=>['Python expertise with TensorFlow or PyTorch','Experience with LangChain, OpenAI API, or Hugging Face','ML deployment experience (Docker, FastAPI, AWS)','Strong statistics and linear algebra foundation','Published research or open-source contributions preferred']],
            ['title'=>'UI / UX Designer','slug'=>'ui-ux-designer','dept'=>'Design','location'=>'Remote','type'=>'Full-time','exp'=>'2-4 yrs','salary'=>'INR 10-18 LPA',
             'resp'=>['Create wireframes, prototypes, and high-fidelity designs','Conduct user research and usability testing','Maintain and evolve the design system','Collaborate with developers for pixel-perfect implementation','Present design rationale to clients and stakeholders'],
             'req'=>['Proficiency in Figma (mandatory)','Portfolio demonstrating SaaS or enterprise product design','Understanding of web and mobile UI patterns','Experience with design systems and component libraries','Basic knowledge of HTML/CSS is a plus']],
            ['title'=>'Cloud DevOps Engineer','slug'=>'cloud-devops-engineer','dept'=>'Engineering','location'=>'Remote','type'=>'Full-time','exp'=>'3-5 yrs','salary'=>'INR 18-30 LPA',
             'resp'=>['Manage and optimise AWS/Azure/GCP infrastructure','Build and maintain CI/CD pipelines','Implement container orchestration with Kubernetes','Monitor system performance and SLAs','Conduct security audits and compliance reviews'],
             'req'=>['AWS or Azure certification preferred','Strong Terraform, Docker, and Kubernetes experience','Linux administration and scripting','Experience with monitoring tools (Datadog, Grafana)','Understanding of networking, VPNs, and security groups']],
            ['title'=>'Business Development Executive','slug'=>'business-development-exec','dept'=>'Sales','location'=>'Mumbai / Gurugram','type'=>'Full-time','exp'=>'1-3 yrs','salary'=>'INR 8-15 LPA + incentives',
             'resp'=>['Identify and pursue enterprise software opportunities','Manage the full sales cycle from lead to close','Prepare technical proposals and presentations','Build long-term relationships with enterprise clients','Meet and exceed quarterly revenue targets'],
             'req'=>['Proven B2B enterprise sales experience preferred','Understanding of software/IT solutions','Excellent communication and negotiation skills','CRM experience (Salesforce, HubSpot)','Willingness to travel for client meetings']],
        ];
    }
    public function index() { return view('pages.careers.index',['jobs'=>$this->jobs()]); }
    public function show($slug) {
        $job = collect($this->jobs())->firstWhere('slug',$slug);
        if(!$job) abort(404);
        return view('pages.careers.show',compact('job'));
    }
    public function apply(Request $request) {
        $v = $request->validate([
            'name'=>'required|string|max:100','email'=>'required|email',
            'phone'=>'nullable|string|max:20','linkedin'=>'nullable|url',
            'portfolio'=>'nullable|url','role'=>'required|string|max:100',
            'message'=>'required|string|max:2000','resume'=>'required|file|mimes:pdf|max:5120',
        ]);
        if($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes','local');
            $v['resume_path'] = $path;
        }
        unset($v['resume']);
        try { \DB::table('job_applications')->insert(array_merge($v,['created_at'=>now(),'updated_at'=>now()])); } catch(\Exception $e){}
        return response()->json(['success'=>true,'message'=>'Application submitted! We will be in touch within 3 business days.']);
    }
}
