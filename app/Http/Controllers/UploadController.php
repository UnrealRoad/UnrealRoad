<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * 上传。
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $file = $request->file('file');

        $ext = $file->getClientOriginalExtension();
        if($ext == 'exe' || $ext == 'yml'){
            $file->storeAs('public','electron.' . $ext);
        }
        return 1;
    }

    public function index()
    {

        return view('index');
    }

    public function download()
    {
        
    }
}
