<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\MainFormData;
use App\Models\Image;

class AdminController extends Controller
{
    public function index()
    {
        
        $mainFormDatas = MainFormData::all();
        $images = Image::all();
        return view('admin', compact( 'mainFormDatas','images'));
    }
   
    public function deleteMainFormData($id)
    {
        $mainFormData = MainFormData::findOrFail($id);
        $mainFormData->delete();
    
        return Redirect::back()->with('success', 'Запись успешно удалена');
    }
    
public function editMainFormData($id)
{
    $mainFormData = MainFormData::findOrFail($id);
    return view('edit_main_form', compact('mainFormData'));
}

public function updateMainFormData(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
       
        'phone' => 'required|string|max:20',
        
        'order' => 'required|string',
    ]);

    $mainFormData = MainFormData::find($id);
    $mainFormData->name = $validatedData['name'];
 
    $mainFormData->phone = $validatedData['phone'];
   
    $mainFormData->order = $validatedData['order'];
    $mainFormData->save();

    return redirect()->route('admin')->with('successChange', 'Запись успешно обновлена');
}
}