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
use App\Blog;

class MainController extends Controller
{
    public function index(){
        return view('index', [
            'advantages' => Advantage::all(),
            'customers' => Customer::all()->take(5),
            'projects' => Project::orderBy('created_at', 'desc')->take(3)->get(),
            'categories_menu' => Category::orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function company(){
        return view('company', [
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
        return view('pather', ['cards'=>PartnerCard::all()]);
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
    public function projects(){
        return view('project', ['projects' => Project::all()]);
    }
}
