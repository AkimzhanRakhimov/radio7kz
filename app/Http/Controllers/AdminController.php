<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\FormData;
use App\Models\MainFormData;

class AdminController extends Controller
{
    public function index()
    {
        $formDatas = FormData::all();
        $mainFormDatas = MainFormData::all();

        return view('admin', compact('formDatas', 'mainFormDatas'));
    }
    public function deleteFormData($id)
    {
        $formData = FormData::findOrFail($id);
        $formData->delete();
    
        return Redirect::back()->with('success', 'Запись успешно удалена');
    }
    
    public function deleteMainFormData($id)
    {
        $mainFormData = MainFormData::findOrFail($id);
        $mainFormData->delete();
    
        return Redirect::back()->with('success', 'Запись успешно удалена');
    }
    public function editFormData($id)
{
    $formData = FormData::findOrFail($id); // Получаем данные записи по идентификатору
    return view('edit', compact('formData')); // Отображаем страницу редактирования с данными записи
}
    public function updateFormData(Request $request, $id)
{
    // Валидация данных
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
    ]);

    // Обновление данных в базе данных
    $formData = FormData::find($id);
    $formData->name = $validatedData['name'];
    $formData->phone = $validatedData['phone'];
    $formData->save();

    return redirect()->route('admin')->with('successChange', 'Запись успешно обновлена');
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
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'company' => 'required|string|max:255',
        'order' => 'required|string',
    ]);

    $mainFormData = MainFormData::find($id);
    $mainFormData->name = $validatedData['name'];
    $mainFormData->email = $validatedData['email'];
    $mainFormData->phone = $validatedData['phone'];
    $mainFormData->company = $validatedData['company'];
    $mainFormData->order = $validatedData['order'];
    $mainFormData->save();

    return redirect()->route('admin')->with('successChange', 'Запись успешно обновлена');
}
}