<?php

namespace App\Http\Controllers\Admin;

use App\Models\Text;
use App\Models\Language;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TranslationController extends Controller
{


    public function getText()
    {
        $texts = Text::get();
        return view('content.translation.index', compact('texts'));
    }

    public function translate($id)
    {
        $texts  = Text::where('id', $id)->first();
        $languages = DB::table('languages')->leftJoin('translations', function ($join) use ($texts) {
            $join->on('languages.id', '=', 'translations.language_id');
            $join->on('translations.text_id', '=', DB::raw($texts->id));
        })->select('languages.*', 'translations.id as translation_id', 'translations.translation', 'translations.text_id')->get();

        //     $languages = DB::table('languages')
        // ->leftJoin('translations', 'languages.id', '=', 'translations.language_id')
        // ->where('translations.text_id', $texts->id)
        // ->select('languages.*', 'translations.id as translation_id', 'translations.translation', 'translations.text_id')
        // ->get();

        // Alternative for this above query

        // SELECT languages.*, translations.id AS translation_id, translations.translation, translations.text_id FROM languages LEFT JOIN translations ON languages.id = translations.language_id WHERE translations.text_id = 2;
        return view('content.translation.translate', compact('languages', 'texts'));
    }

    public function translateLanguage(Request $request, $id = null)
    {
       
        foreach ($request->data as $item) {
            if ($item['id'] == '' && $item['value'] == '') continue;

            if ($item['id'] == '' && $item['value'] != '') {
                Translation::create([
                    'translation' => $item['value'],
                    'text_id' => $item['text_id'],
                    'language_id' => $item['language_id'] 
                ]);

                continue;
            }

            $translation = Translation::find($item['id']);
            $translation->translation = $item['value'] ?? '';
            $translation->save();
        }

        return response()->json(['sucess' => true, 'message' => 'Translation successfully saved.']);

    }
}
