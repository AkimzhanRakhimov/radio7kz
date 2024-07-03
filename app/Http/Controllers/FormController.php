<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use App\Models\MainFormData;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormDataMail;
use App\Mail\MainFormDataMail;
class FormController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);
    
        $formData = FormData::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);
        Mail::to('rakhimovakimzhan@gmail.com')->send(new FormDataMail($formData));
        return response()->json(['message' => 'Форма успешно отправлена']);
    }
    
    public function storeMain(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string|max:255',
            'order' => 'required|string',
        ]);
    
        $mainFormData = MainFormData::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'company' => $request->company,
            'order' => $request->order,
        ]);
        Mail::to('rakhimovakimzhan@gmail.com')->send(new MainFormDataMail($mainFormData));
        return response()->json(['message' => 'Форма успешно отправлена']);
    }
    public function updateFormData(Request $request, $id)
{
    $formData = FormData::findOrFail($id);
    $formData->name = $request->input('name');
    $formData->phone = $request->input('phone');
    $formData->save();

    return redirect()->back()->with('success', 'Запись успешно обновлена');
}

// Для второй таблицы
public function updateMainFormData(Request $request, $id)
{
    $mainFormData = MainFormData::findOrFail($id);
    // Обновление полей второй таблицы
    $mainFormData->save();

    return redirect()->back()->with('success', 'Запись успешно обновлена');
}
}