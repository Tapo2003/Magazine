<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Models\MyPage;
use App\Models\GenerateFileName;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function index(Request $request){
        return view('admin.admin',['page_title' => 'Dashboard']);
    }

    public function posts(Request $request, $type = '',$id = ''){
        switch ($type){
            case 'posts':
                $arr  = [];
                $post = new Post();
                if($request->method() == 'POST'){
                    $folder = 'uploads/';
                    if(!file_exists($folder)){
                       mkdir($folder,0777,true);
                    }

                    $validate = $request->validate([
                        'title'         => 'required',
                        'publisher'     => 'required',
                        'category'      => 'required',
                        'userfile'      => 'required',
                        'content'       => 'required'
                    ]); 

                    preg_match_all('/<img[^>]+>/',$request->input('content'),$matches);
                   
                    $new_content = $request->input('content');
                    
                    $file_class = new GenerateFileName();
                    // print_r($new_content);
                    // exit;
                    if(is_array($matches) && count($matches) > 0){
                        foreach($matches[0] as $match){
                           
                            preg_match('/src="[^"]+/',$match,$matches2);
                            
                            $parts = explode(",",$matches2[0]);
                            
                            $filename = $folder."base_64".$file_class->generateRandomFileName(50).".jpg";
                           
                            $new_content = str_replace($parts[0].",".$parts[1],'src="'.$filename,$new_content);

                            file_put_contents($filename,base64_decode($parts[1]));
                             
                        }
                       
                        
                    }
                    
                    $path = $request->file('userfile')->store('/',['disk' => 'my_disks']);
                    $data['title']          = $request->input('title');
                    $data['image']          = $path;
                    $data['content']        = $new_content;
                    $data['category']       = $request->input('category');
                    $data['publisher']      = $request->input('publisher');
                    $data['slag']           = $post->str_to_url($data['title']);
                    $data['created_at']     = date("Y-m-d H:i:s");
                    $data['updated_at']     = date("Y-m-d H:i:s");

                    if($post->insert($data)){
                        $arr['success'] = 'Message sent';
                    }else{
                        $arr['errorsending'] = 'Unable to send message';
                    }

                }
                return view('admin.upload',$arr);
                break;
            case 'edit-delete':
                $limit = 4;
                $page  = $request->input('page') ? (int)$request->input('page') : 1;
                $offset = ($page - 1) * $limit; 

                $page_class = new Mypage();
                
                $links = $page_class->make_links($request->fullUrlWithQuery(['page' => $page]),$page,1);

                $query = "select posts.* from posts order by id desc";
                $rows = DB::select($query);
                $data['rows'] = $rows;
                // $data['links'] = $links;
                return view('admin.edit-delete_upload',$data);
                break;
            
            case 'delete':
                $post   = new Post();
                $row    = $post->find($id);
                if($row){
                    $row->delete();
                }else{
                    return redirect('admin.edit-delete_upload');
                }

                $rows = $post->all();
                $data['rows']  = $rows;
                return view('admin.edit-delete_upload',$data);
                break;
            
            case 'edit':
                $post   = new Post();
                $folder = 'uploads/';
                if(!file_exists($folder)){
                    mkdir($folder,0777,true);
                 }
                if($request->method() == 'POST'){
                    $validate = $request->validate([
                        'publisher'     => 'required',
                        'title'         => 'required|string',
                        'category'      => 'required',
                        'content'       => 'required'
                    ]); 

                    preg_match_all('/<img[^>]+>/',$request->input('content'),$matches);
                    $new_content = $request->input('content');
                    
                    $file_class = new GenerateFileName();
                   
                    if(is_array($matches) && count($matches) > 0){
                        foreach($matches[0] as $match){
                           
                            preg_match('/src="[^"]+/',$match,$matches2);
                            
                            $parts = explode(",",$matches2[0]);
                            
                            $filename = $folder."base_64".$file_class->generateRandomFileName(50).".jpg";
                           
                           
                            $new_content = str_replace($parts[0].",".$parts[1],'src="'.$filename,$new_content);

                            file_put_contents($filename,base64_decode($parts[1]));
                           
                            
                             
                        }
                       
                        
                    }

                    if($request->file('userfile')){
                        $oldRow = $post->find($id);
                        if(file_exists('uploads/'.$oldRow->image)){
                            unlink('uploads/'.$oldRow->image);
                        }
                        $path = $request->file('userfile')->store('/',['disk' => 'my_disks']);
                        $data['image']  = $path;
                        
                    }

                    $data['id']     = $id;
                    $data['title']      = $request->input('title');
                    $data['publisher']  = $request->input('publisher');
                    $data['content']    = $new_content;
                    $data['category']  = $request->input('category');
                    $data['created_at']  = date("Y-m-d H:i:s");
                    $data['updated_at']  = date("Y-m-d H:i:s");

                    $post->where('id',$id)->update($data); 
                   
                }
                $row            = $post->find($id);
                $data['rows']   = $row;
                
                return view('admin.edit',$data);
                break;
                
            default:

            break;
            
        }
    }
    
    public function users(Request $request,$type = '',$id = ''){
        switch ($type) {
            case 'edit':
                $users = new User();
                if($request->method() == 'POST'){
                    $validate = $request->validate([
                        'fullname'     => 'required|string',
                        'email'        => 'required',
                    ]);

                    $data['id']  = $id;
                    $data['fullname']   = $request->input('fullname');
                    $data['email']      = $request->input('email');
                    $data['created_at'] = date("Y-m-d H:i:s");
                    $data['updated_at'] = date("Y-m-d H:i:s");

                    
                    if(!empty($request->input('password'))){
                        $data['password']   = Hash::make($request->input('password'));
                    }
                    
                    if(Auth::user()->id == 1){
                        $users->where('id',$id)->update($data); 
                    }else{
                        if(!$users->where('id',$id)->where('id','!=',1)->update($data)){
                            $error = 'You can not update, you are not the main admin';
                            $row = $users->find($id);
                            return view('admin.edit_users',[
                                'error' => $error,
                                'row' => $row,
                            ]);
                            // return view('users-admin/edit/'.$id,$arr);
                        }
                        
                    }
                   
                    return redirect('users-admin/edit/'.$id);
                }
                $row = $users->find($id);
                return view('admin.edit_users',[
                    'page_title' => 'edit',
                    'row' => $row,
                ]);
                break;
            case 'delete':   
                $users   = new User();
                $row    = $users->find($id);
                if($row->id !== 1){
                    $row->delete();
                    return redirect('admin/'); 
                }

                $query = 'select * from users';
                $rows = DB::select($query);
                $data['rows']       = $rows;

                return view('admin.users',$data);
                break;
            
            default:
            $query = 'select * from users';
            $rows = DB::select($query);
            $data['rows']       = $rows;

            return view('admin.users',$data);
            break;
        }
    }
    
}
