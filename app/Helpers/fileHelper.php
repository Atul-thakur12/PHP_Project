<?php

use Illuminate\Support\Facades\File;

function fileUpload($file, $file_path, $file_name, $exesting_file = null) {

    // Generate a unique file name
    $fileName = $file_name.'-'.time().'.'.$file->getClientOriginalExtension();
    // Define the destination path
    $destinationPath = public_path($file_path);
    // Ensure the directory exists
    if (!file_exists($destinationPath)) {
        mkdir($destinationPath, 0755, true); // Create directory if it doesn't exist
    }
    // Move the file to the desired directory
    $file->move($destinationPath, $fileName);

    if(!is_null($exesting_file)) {
        $filePath = public_path($exesting_file);
        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }

    return $file_path.$fileName;
}
