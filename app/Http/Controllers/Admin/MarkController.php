<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MarkImportRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MarkImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\Mark;


class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function markImportStore(MarkImportRequest $request){
        $request->validated();
        if($request->isMethod('post')){
            if($request->hasFile('markFile')) {
                $file = $request->file('markFile');
                $fileName=Str::uuid().'csv';
                $file->move(public_path() . '/csv',$fileName);
                Excel::import(new MarkImport,'csv/mark.csv');
                File::delete($fileName);
                return to_route('admin.mark.index');        
            }else{
                return to_route('admin.mark.import');

            }
         }
       
        //dd($request->file('markFile'));
       // (new MarkImport)->import($request->file('markFile'),null, \Maatwebsite\Excel\Excel::CSV);
        
    }
    
     public function index()
    {
        $data=Mark::with('item')->paginate(20);
        return view('mark.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function markImport(){
       
        return view('mark.import');
    }
}
