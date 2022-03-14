<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $documents = Document::all();
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('welcome')->with('documents',$documents)->with('subcategories',$subcategories)->with('categories', $categories);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view ('create')->with('subcategories',$subcategories)->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = Document::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "subcategory_id"=>$request->subcategory_id
        ]);
        $document->save();
        $documents = Document::all();
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('welcome')->with('documents',$documents)->with('subcategories',$subcategories)->with('categories', $categories);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document=Document::find($id);
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view ('edit')->with('document',$document)->with('subcategories',$subcategories)->with('categories', $categories);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $document=Document::find($id);
        $data = request()->validate([
            'name' => 'required|unique:documents|min:5|max:255',
            'subcategory_id' => 'required'
        ]);
        $document->update([
            "name"=>$request->name,
            "description"=>$request->description,
            "subcategory_id"=>$request->subcategory_id
        ]);
        $document->save();
        $documents=Document::all();
        return redirect()->route('index')->with('documents');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document, $id)
    {
        $document=Document::findOrFail($id);
        $document->update([
            "deleted"=>1
        ]);
        return redirect()->route('index');
    }

    public function search(Request $request)
    {
        $search_text = $_GET['search'];
        $documents = Document::where('name','LIKE','%'.$search_text.'%')->get();
        $subcategories = Subcategory::all();
        $categories = Category::all();
        return view('welcome')->with('documents',$documents)->with('subcategories',$subcategories)->with('categories', $categories);
    }

    

    
}
