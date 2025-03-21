<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    public function index()
    {
        $All = Blog::with('getCategory')->orderBy('rank')->get();
        $Kategori = BlogCategory::all();
        return view('backend.blog.index', compact('All', 'Kategori'));
    }

    public function create()
    {
        $Kategori = BlogCategory::all();
        return view('backend.blog.create',compact('Kategori'));
    }


    public function store(BlogRequest $request)
    {
        $create = Blog::create($request->except('_token', 'image', 'gallery'));

        $this->mediaService->handleMediaUpload(
            $create, 
            $request->file('image'),
            'page',
            false
        );

        $this->mediaService->handleMediaUpload(
            $create, 
            $request->file('cover'),
            'cover',
            false
        );

        if ($request->hasFile('gallery')) {
            $files = $request->file('gallery');
            
            $this->mediaService->handleMultipleMediaUpload(
                $create,
                $files,
                'gallery',
            );
        }

        toast(SWEETALERT_MESSAGE_CREATE,'success');
        return redirect()->route('blog.index');

    }


    public function show($id)
    {
        $Show = Blog::findOrFail($id);
        return view('frontend.blog.index', compact('Show'));
    }

    public function edit($id)
    {
        $Edit = Blog::findOrFail($id);
        $Kategori = BlogCategory::all();
        return view('backend.blog.edit', compact('Edit', 'Kategori'));
    }

    public function update(BlogRequest $request, Blog $update)
    {
        $update->update($request->except('_token', '_method', 'image', 'gallery'));

        
        $this->mediaService->updateMedia(
            $update, 
            $request->file('image'),
            'page',
            false
        );

        $this->mediaService->updateMedia(
            $update, 
            $request->file('cover'),
            'cover',
            false
        );

        if ($request->hasFile('gallery')) {
            $files = $request->file('gallery');
            
            $this->mediaService->handleMultipleMediaUpload(
                $update,
                $files,
                'gallery',
                false
            );

        }

        toast(SWEETALERT_MESSAGE_UPDATE,'success');
        return redirect()->route('blog.index');

    }

    public function destroy($id)
    {
        $Delete = Blog::findOrFail($id);
        $Delete->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('blog.index');
    }

    public function getTrash(){
        $Trash = Blog::onlyTrashed()->orderBy('deleted_at','desc')->get();
        return view('backend.blog.trash', compact('Trash'));
    }

    public function getOrder(Request $request){
        foreach($request->get('page') as  $key => $rank ){
            Blog::where('id',$rank)->update(['rank'=>$key]);
        }
    }

    public function getSwitch(Request $request){
        $update = Blog::findOrFail($request->id);
        $update->status = $request->status == "true" ? 1 : 0 ;
        $update->save();
    }

    public function postUpload(Request $request)
    {

        if($request->hasFile('upload')) {
            $filenamewithextension = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = Str::slug($filename, '-').time().'.'.$extension;
            $request->file('upload')->storeAs('public/uploads', $filenametostore);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Resim Yüklendi';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function deleteGaleriDelete($id){

        $Delete = Blog::find($id);
        $Delete->media()->where('id', \request('image_id'))->delete();

        toast(SWEETALERT_MESSAGE_DELETE,'success');
        return redirect()->route('blog.edit', $id);

    }
}
