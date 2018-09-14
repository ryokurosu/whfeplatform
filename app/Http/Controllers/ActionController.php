<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class ActionController extends Controller
{
    public function download($filename = '' )
    {
  // Check if file exists in app/storage/file folder
        $file_path = storage_path() . "/app/downloads/" . $filename;
        $headers = array(
            'Content-Type: application/ex4+pdf',
            'Content-Disposition' => 'attachment; filename='.$filename,
        );
        if ( file_exists( $file_path ) ) {
            // Send Download
            return \Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Requested file does not exist on our server!' );
        }
    }

}
