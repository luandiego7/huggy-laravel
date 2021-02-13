<?php

namespace App\Http\Controllers;

use App\Helpers\FormatHelper;
use App\Models\Lembretes;
use App\Notifications\Lembrete;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class LembreteController extends Controller
{
    public function index()
    {
        $lembretes = Lembretes::paginate(5);
        return view('lembretes.index', compact('lembretes'));
    }

    public function create()
    {
        $lembrete = new Lembretes();
        return view('lembretes.form', compact('lembrete'));
    }

    public function save(Request $request)
    {
        $data         = $request->except('_token');
        $data['data'] = FormatHelper::dateTimeUs($request->data.':00');

        try{
            DB::beginTransaction();

            Lembretes::updateOrCreate(['id' => $request->id],$data);

            DB::commit();
            return redirect('/')->with('type', 'success')->with('notify', 'Salvo com sucesso');

        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->withInput()->with('type', 'error')->with('notify', 'Erro: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $lembrete = Lembretes::find($id);
        return view('lembretes.form', compact('lembrete'));
    }

    public function delete($id)
    {
        Lembretes::find($id)->delete();

        return redirect('/')->with('type', 'success')->with('notify', 'Excluído com sucesso!');
    }
}
