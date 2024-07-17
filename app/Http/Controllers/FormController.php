<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainFormData;
use Illuminate\Support\Facades\Mail;
use App\Mail\MainFormDataMail;
class FormController extends Controller
{
   
    
    public function storeMain(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
           
            'phone' => 'required|string|max:20',
      
            'order' => 'required|string',
        ]);
    
        $mainFormData = MainFormData::create([
            'name' => $request->name,
           
            'phone' => $request->phone,
            
            'order' => $request->order,
        ]);
        // Mail::to('exampleMail@gmail.com')->send(new MainFormDataMail($mainFormData));
        return redirect()->back()->with('success', 'Запись успешно отправлена');
        
    }
  

public function updateMainFormData(Request $request, $id)
{
    $mainFormData = MainFormData::findOrFail($id);
  
    $mainFormData->save();

    return redirect()->back()->with('success', 'Запись успешно обновлена');
}
}