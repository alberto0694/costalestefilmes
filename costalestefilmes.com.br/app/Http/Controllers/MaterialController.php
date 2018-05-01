<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{

    public function create(Request $request)
    {
        $vimeo = $request->link;
        if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/", $vimeo, $output_array)) {
            $request->link = $output_array[5];
        }

        if($request->hasFile('imagem')){
            $path = $request->imagem->store('public/images');
            $path = $bodytag = str_replace("public/", "storage/",$path);
            Material::create([
               'titulo'  => $request->titulo,
               'video'  => 'https://player.vimeo.com/video/'.$request->link,
               'texto'  => $request->texto,
               'imagem'  => $path
            ]);
        }
        return (redirect(route('admin.index')));
    }

    public function update(Request $request, $id)
    {
        $material = Material::find($id);
        if($request->hasFile('imagem')){
            $path = $request->imagem->store('public/images');
            $path = $bodytag = str_replace("public/", "storage/",$path);
            $material->imagem = $path;
        }
        $vimeo = $request->link;
        if(preg_match("/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/", $vimeo, $output_array)) {
            $request->link = $output_array[5];
        }
        $material->titulo = $request->titulo;
        $material->video  = 'https://player.vimeo.com/video/'.$request->link;
        $material->texto  = $request->texto;
        $material->save();
        return (redirect(route('admin.index')));
    }

    public function delete(Request $request, $id)
    {
        $material = Material::find($id);
        $material->delete();
        return (redirect(route('admin.index')));
    }
}
