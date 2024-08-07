<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Access\Response;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use App\Models\Upload;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('posts.index',[
            'posts'=>Post::latest()->filter(
                request(['search','category','author'])
            )->paginate(18)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',[
            'post'=>$post
        ]);

      
    }  
    public function create(){
    
        return view('admin.posts.create');

        }

    //     public function store(Request $request){
        
    //         $attributes=request()->validate([
    //             'title'=>'required',
    //             'slug'=>['required',Rule::unique('posts','slug')],
    //             'excerpt'=>'required',
    //             'body'=>'required',
    //             'category_id'=>['required',Rule::exists('categories','id')]
    //         ]);

    //         $attributes['user_id']=auth()->id();



    //         Post::create($attributes);

            
    //         if ($request->hasFile('upload') && $request->file('upload')->isValid()) {
    //             $upload = new Upload();
<<<<<<< HEAD
        
    //             // 获取 MIME 类型
    //             $upload->mimeType = $request->file('upload')->getMimeType();
    //             $upload->originalName = $request->file('upload')->getClientOriginalName();
    //             $upload->path = $request->file('upload')->store('uploads');
    //             $upload->save();
        
    //             // 如果文件上传成功，返回相关信息视图
    //             return view('uploads.create', [
    //                 'id' => $upload->id,
    //                 'path' => $upload->path,
    //                 'originalName' => $upload->originalName,
    //                 'mimeType' => $upload->mimeType
    //             ]);
    //         }

    // return redirect('/');

         
        // }

=======
        
    //             // 获取 MIME 类型
    //             $upload->mimeType = $request->file('upload')->getMimeType();
    //             $upload->originalName = $request->file('upload')->getClientOriginalName();
    //             $upload->path = $request->file('upload')->store('uploads');
    //             $upload->save();
        
    //             // 如果文件上传成功，返回相关信息视图
    //             return view('uploads.create', [
    //                 'id' => $upload->id,
    //                 'path' => $upload->path,
    //                 'originalName' => $upload->originalName,
    //                 'mimeType' => $upload->mimeType
    //             ]);
    //         }

    // return redirect('/');

         
        // }
        public function store()
        {

            
            $attributes = request()->validate([
                'title' => 'required',
                'image_url' => 'image', 
                'slug' => ['required', Rule::unique('posts', 'slug')],
                'excerpt' => 'required',
                'body' => 'required',
                'category_id' => ['required', Rule::exists('categories', 'id')]
            ]);
        
            $attributes['user_id'] = auth()->id();
            if (request()->hasFile('image_url') && request()->file('image_url')->isValid()) {
            $attributes['image_url'] = request()->file('image_url')->store('img');}
            
            Post::create($attributes);
            // check update img
            if (request()->hasFile('image_url') && request()->file('image_url')->isValid()) {
                $upload = new Upload();
        
              
                $upload->mimeType = request()->file('image_url')->getMimeType();
                $upload->originalName = request()->file('image_url')->getClientOriginalName();
                $upload->path =$attributes['image_url'];
                $upload->save();
        
                // if success return view
                return view('uploads.create', [
                    'id' => $upload->id,
                    'path' => $upload->path,
                    'originalName' => $upload->originalName,
                    'mimeType' => $upload->mimeType
                ]);
            }else{
                return redirect('/');
          
            }
        
          
        
            
            // try {
            //     $attributes = request()->validate([
            //         'title' => 'required',
            //         'image_url' => 'required|image', 
            //         'slug' => ['required', Rule::unique('posts', 'slug')],
            //         'excerpt' => 'required',
            //         'body' => 'required',
            //         'category_id' => ['required', Rule::exists('categories', 'id')]
            //     ]);
            //     // dd($attributes);
            // } catch (\Illuminate\Validation\ValidationException $e) {
            //     $errors = $e->errors();
            //     dd($attributes);
            // }
        
            // $attributes['user_id'] = auth()->id();
           
            // $attributes['image_url'] = request()->file('image_url')->store('public/storage');
        
            // Post::create($attributes);
        
            // return redirect('/');

        }
>>>>>>> 1b6b05772ecf23153adb04a477218fe35139f0a4
}

?>