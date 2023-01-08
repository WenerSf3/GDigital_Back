<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Links::all();
        return response()->json([
            'links' => $links
        ]);
    }

    public function only($id)
    {
        $links = Links::find($id);
        return response()->json([
            'links' => $links
        ]);
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $links = Links::create($request->all());

        return response()->json([
            'message' => 'Link Criado Com Sucesso',
            'link' => $links
        ],200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, links $links)
    {
        $links->update($request->all());
        return response()->json([
            'message' => 'Link Atualizado Com Sucesso!',
            'link' => $links
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Links  $links
     * @return \Illuminate\Http\Response
     */
    public function destroy(Links $links)
    {
        $links->delete();

        return response()->json([
            'message' => 'Link Deletado Com Sucesso!',

        ], 200);
    }
}
