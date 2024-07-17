<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();  
        $image->move(public_path('images'), $imageName);
        
        $imageUpload = new Image();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        
        return back()
            ->with('success','Image uploaded successfully')
            ->with('image',$imageName);
    }

    public function delete($id)
    {
        $image = Image::findOrFail($id);
        $imagePath = public_path('images/' . $image->filename);
        
        if (file_exists($imagePath)) {
            unlink($imagePath); // Удаление файла из папки
        }
        
        $image->delete(); // Удаление записи из базы данных
        
        return back()
            ->with('success','Image deleted successfully');
    }
}
