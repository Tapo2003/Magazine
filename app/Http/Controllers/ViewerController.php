<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Contact;
use App\Models\MyPage;

class ViewerController extends Controller{
    public function index(Request $request){
        $post = new Post();
        $rows = $post->limit(3)->get();
        $data['rows'] = $rows;
        return view('index',$data);
    }

    public function aritcles(Request $request){
        if($request->method() == 'POST'){
            $validate = $request->validate([
                'title' => 'required',
            
            ]);
            if($request->input('title')){
                $query = "select * from posts where title like :title AND category = 'Articles' ";
                $title = "%".$request->input('title') . "%";
                if(!($rows = DB::select($query,['title' => $title]))){
                    $data['unexistingsubject'] = 'No Subject Found';
                }
                $data['rows'] = $rows;
                return view('articles',$data);
        
            }
           
        }
        $limit = 6;
        $page  = $request->input('page') ? (int)$request->input('page') : 1;
        $offset = ($page - 1) * $limit; 
        $totalPosts = DB::table('posts')->where('category','Articles')->count();    
        $totalPages = ceil($totalPosts / $limit);
        
        if($page > $totalPages && $totalPages > 0) {
            $arr['emptyarticle'] = 'No more articles';
            return view('articles',$arr);
            
        }
        $page_class = new Mypage();

        $links = $page_class->make_links($request->fullUrlWithQuery(['page' => $page]),$page,1);
        
        //skip for offset
        //take for limit
        $rows = Post::where('category','Articles')->orderBy('id','desc')->take($limit)->skip($offset)->get();
        $data['links'] = $links;
        $data['rows'] = $rows;
        return view('articles',$data);
    }


    public function news(Request $request){
        if($request->method() == 'POST'){
            $validate = $request->validate([
                'title' => 'required',
            ]);
            if($request->input('title')){
                $query = "select * from posts where title like :title AND category = 'News'";
                $title = "%".$request->input('title') . "%";
                if(!($rows = DB::select($query,['title' => $title]))){
                    $data['unexistingsubject'] = 'No Subject Found';
                }
                $data['rows'] = $rows;
                return view('news',$data);
        
            }
           
        }
        $limit = 6;
        $page  = $request->input('page') ? (int)$request->input('page') : 1;
        $offset = ($page - 1) * $limit; 
        $totalPosts = DB::table('posts')->where('category','News')->count();    
        $totalPages = ceil($totalPosts / $limit);
    
        if ($page > $totalPages && $totalPages > 0) {
           
            $arr['emptynews'] = 'No more news';
            return view('news',$arr);
            
        }
        $page_class = new Mypage();

        $links = $page_class->make_links($request->fullUrlWithQuery(['page' => $page]),$page,1);
        
        //skip for offset
        //take for limit
        $rows = Post::where('category','News')->orderBy('id','desc')->take($limit)->skip($offset)->get();
        $data['links'] = $links;
        $data['rows'] = $rows;
        return view('news',$data);
    }

    public function contents($slag = ''){
        $post  = new Post();
        $rows = Post::where('slag',$slag)->get();
        $data['rows']   = $rows;
        
        return view('contents',$data);
    }
    public function contact(Request $request){
        $contact = new Contact();
        if($request->method() == 'POST'){
            $validate = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'message' => 'required',
            ]);

            $data['name']           = $request->input('name');
            $data['email']          = $request->input('email');
            $data['message']        = $request->input('message');
            $data['created_at']     = date("Y-m-d H:i:s");
            $data['updated_at']     = date("Y-m-d H:i:s");

            $contact->insert($data); 
        }
        
        return view('contact');
    }
    
}
