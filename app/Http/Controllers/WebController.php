<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\mail\sendMail;
use Illuminate\Support\Facades\Input;

class WebController extends Controller {

    public function home() {
        $all_posts = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.post_category', '=', 'tbl_category.category_id')
                ->select('*')
                ->where('tbl_post.publication_status', 1)
                ->paginate(1);
        return view('frontend/pages/home', compact('all_posts'));
    }

    public function single($id) {
        $post_info = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.post_category', '=', 'tbl_category.category_id')
                ->select('*')
                ->where('tbl_post.publication_status', 1)
                ->where('tbl_post.post_id', $id)
                ->first();
        return view('frontend/pages/single', compact('post_info'));
    }

    public function about() {
        return view('frontend/pages/about');
    }

    public function contact() {
        return view('frontend/pages/contact');
    }

    public function category($category_id) {
        $all_posts = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.post_category', '=', 'tbl_category.category_id')
                ->select('*')
                ->where('tbl_post.post_category', $category_id)
                ->where('tbl_post.publication_status', 1)
                ->paginate(1);
        return view('frontend/pages/category', compact('all_posts'));
    }

    public function search() {

       

        $search = Input::get('search');

        $all_posts = DB::table('tbl_post')
                ->join('tbl_category', 'tbl_post.post_category', '=', 'tbl_category.category_id')
                ->select('*')
                ->where('tbl_post.post_title', 'like', "%$search%")
                ->orwhere('tbl_post.post_description', 'like', "%$search%")
                ->orwhere('tbl_category.category_name', 'like', "%$search%")
                ->where('tbl_post.publication_status', 1)
                ->paginate(1);
        return view('frontend/pages/search', compact('all_posts'));
    }

    public function raf() {
        return view('frontend/login');
    }

    public function rrr() {
        $data = array();
        $data['name'] = 'Md rostom Ali';
        Mail::send(['text' => 'mail'], $data, function($message) {
            $message->to('rostomali4444@gmail.com', 'to roatom')->subject('Test Mail');
            $message->from('rrr@gmail.com');
        });
    }

    public function sendmail(Request $request) {
        $request->validate([
            'msg' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $result = Mail::send(new sendMail());

        return redirect('contact')->with('message', 'Mail Send Successfully');
    }

}
