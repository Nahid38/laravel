<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // function DemoAction():string{
    //     return "This is my first request-response";
    // }

    function DemoAction1(Request $request): array
    {
        $photoFile = $request->file(key: 'photo');
        $FileSize = filesize($photoFile);
        $FileType = filetype($photoFile);
        $FileOrginalName = $photoFile->getClientOriginalName();
        $FileTempName = $photoFile->getFilename();
        $FileExtension = $photoFile->extension();

        return array(
            "Filesize"=>$FileSize,
            "FileType"=>$FileType,
            "FileOrginalName"=>$FileOrginalName,
            "FileTempName"=>$FileTempName,
            "FileExtension"=>$FileExtension
        );
        
    }
}
