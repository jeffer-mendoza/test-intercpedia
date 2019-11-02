<?php


namespace App\Http\Helpers;

use Illuminate\Http\UploadedFile;

class FileUpload
{
    const PERMITTED_CHAR = "0123456789abcdefghijklmnopqrstuvwxyz";

    /**
     * Store file in folder and  asign name it
     * @param UploadedFile|null $file
     * @return string
     */
    public static function store(UploadedFile $file = null) {
        if($file == null || !$file->isValid()) {
            return 'none';
        }
        try {
            $filename = substr(str_shuffle(FileUpload::PERMITTED_CHAR), 0, 10) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public', $filename);
            return $filename;
        } catch (\Exception $ex){
            return 'none';
        }
    }

}
