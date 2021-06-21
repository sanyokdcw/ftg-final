<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Advantage;
use App\Models\Certificate;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\PartnerCard;
use App\Models\Position;
use App\Models\Project;
use App\Models\Customer;
use App\Models\Category;
use App\Models\AboutCompany;
use App\Models\Guarantee;
use App\Models\Product;

use App\Blog;

class MainController extends Controller
{
    public function index(){
        return view('index', [
            'advantages' => Advantage::all(),
            'customers' => Customer::all()->take(5),
            'blogs' => Blog::orderBy('created_at', 'desc')->take(3)->get(),
            'categories_menu' => Category::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function company(){
        return view('company', [
            'c' => AboutCompany::first(),
            'advantages' => Advantage::all(),
            'certificates'=> Certificate::all()
        ]);
    }
    public function delivery(){
        return view('delivery', [
            'deliveries' => Delivery::all(),
            'payments' => Payment::all()
        ]);
    }
    public function partners(){
        return view('partner', ['cards'=>PartnerCard::all()]);
    }

    public function team(){
        $positions = Position::all();
        foreach($positions as $position){
            $position->employees = $position->employees;
        }
        return view('team', compact('positions'));
    }
    
    public function blog(){
        return view('blog', ['blogs' => Blog::all()]);
    }

    public function blog_show($id) {
        if(Blog::find($id + 1) == null) {
            $next_id = Blog::first()->id;
        }
        else {
            $next_id = Blog::find($id + 1)->id;
        }
        return view('blog-show', ['blog' => Blog::find($id),
        'products' => Product::where('available', 1)->inRandomOrder()->take(3)->get(),
        'next_id' => $next_id
        ]);
    }

    public function guarange() {
        return view('guarange');
    }

    public function projects(){
        $projects = Project::all();

        foreach($projects as $project){
            $deadline = explode(" ", $project->deadline);
            $project->deadline = $deadline;
        }

        return view('project', ['projects' => $projects]);
    }

    public function pageproject($id){
        $project = Project::find($id);

        $deadline = explode(" ", $project->deadline);
        $project->deadline = $deadline;
                
        return view('pageproject', ['project'=> $project]);
    }


    public function calculator(){
        return view('calc');
    }

    public function calculation(Request $request){
        dd($request->all());
    }
    // public function search(Request $request) {
    //     $q = $request->q;
    //     $products = Product::where('name', 'like', '%'.$q .'%')->get();
    //     return view('search', compact('products', 'q'));
    // }
}
