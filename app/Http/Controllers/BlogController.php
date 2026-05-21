<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private function posts() {
        return [
            ['id'=>1,'title'=>'How AI is Transforming Enterprise Sales in 2025','slug'=>'ai-enterprise-sales-2025','cat'=>'AI & Automation','read'=>7,'author'=>'Rahul Sharma','date'=>'May 15, 2025','excerpt'=>'AI-powered sales tools are helping enterprises close deals faster and predict revenue with precision.'],
            ['id'=>2,'title'=>'ERP vs Custom Software: What is Right for Your Business?','slug'=>'erp-vs-custom-software','cat'=>'ERP Solutions','read'=>9,'author'=>'Priya Nair','date'=>'May 8, 2025','excerpt'=>'We break down the key differences, costs, and long-term ROI of standard ERP versus tailored software.'],
            ['id'=>3,'title'=>'React Native vs Flutter: The Definitive 2025 Comparison','slug'=>'react-native-vs-flutter-2025','cat'=>'Mobile Dev','read'=>6,'author'=>'Aditya Verma','date'=>'Apr 28, 2025','excerpt'=>'Performance, ecosystem, developer experience — an honest technical comparison for your next mobile project.'],
            ['id'=>4,'title'=>'Why Cloud Migration is Non-Negotiable for Mid-Market Companies','slug'=>'cloud-migration-mid-market','cat'=>'Cloud','read'=>8,'author'=>'Sneha Kapoor','date'=>'Apr 20, 2025','excerpt'=>'The cost, security, and scalability arguments for cloud have never been stronger.'],
            ['id'=>5,'title'=>'Building High-Performance Laravel APIs: Lessons from 50+ Projects','slug'=>'high-performance-laravel-api','cat'=>'Web Dev','read'=>11,'author'=>'Vikram Singh','date'=>'Apr 12, 2025','excerpt'=>'Battle-tested techniques refined across enterprise Laravel builds covering caching, queries and more.'],
            ['id'=>6,'title'=>'Digital Transformation Playbook for Indian Manufacturers','slug'=>'digital-transformation-manufacturers','cat'=>'Enterprise','read'=>10,'author'=>'Rohit Gupta','date'=>'Apr 5, 2025','excerpt'=>'A phased approach to digitising manufacturing — from factory floor IoT to AI-powered forecasting.'],
        ];
    }
    public function index(Request $r) {
        $posts = $this->posts();
        $cat = $r->get('category');
        if($cat) $posts = array_values(array_filter($posts, fn($p)=>strtolower($p['cat'])===strtolower($cat)));
        return view('pages.blog.index', ['posts'=>$posts,'category'=>$cat]);
    }
    public function show($slug) {
        $all = $this->posts();
        $post = collect($all)->firstWhere('slug',$slug);
        if(!$post) abort(404);
        $related = array_slice(array_values(array_filter($all,fn($p)=>$p['slug']!==$slug)),0,3);
        return view('pages.blog.show', compact('post','related'));
    }
}
