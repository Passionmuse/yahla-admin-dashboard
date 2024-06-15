<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Translation;
use App\Models\Text;
use Illuminate\Support\Facades\Lang;

class TranslationController extends Controller
{
    public function fetch_languages ()
    {
        $languages = Language::all()->map(function ($item) {
            $data = [];
            $data['id'] = $item->id;
            $data['title'] = $item->title;
            $data['icon'] = url('/assets/img/' . $item->icon . '.png');

            return $data;
        });

        return response()->json(['success' => true, 'data' => json_decode($languages)]);
    }

    public function translate($id)
    {
        $default_id = Language::where('title', 'English')->first()->id;

        $translations = Text::with(['translations' => function ($query) use ($id, $default_id) {
            $query->where(function ($subQuery) use ($id, $default_id) {
                $subQuery->where('language_id', $id)
                    ->orWhere('language_id', $default_id);
            });   
        }])->whereHas('translations', function ($query) use ($id, $default_id) {
                $query->where(function ($subQuery) use ($id, $default_id) {
                    $subQuery->where('language_id', $id)
                        ->orWhere('language_id', $default_id);
                });
            }) ->get();
        $data = [];
        foreach ($translations as $translation) {
            foreach ($translation->translations as $lang_translation) {
                if (Translation::find($lang_translation->id)->language->id == $id) {
                    $data[$translation->text]['main'] = $lang_translation->translation;

                    continue;
                }
                $data[$translation->text]['default'] = $lang_translation->translation;
            }
        }

        return response()->json(['success' => true, 'data' => $data]);
    }
}
