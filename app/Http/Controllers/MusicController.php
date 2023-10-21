<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// use App\Models\Student;

use App\Models\Music;











class MusicController extends Controller
{



    public function index()
    {
        $musics = Music::all();
        return view ('musics.index')->with('musics', $musics);
    }

 
    
    public function create()
    {
        return view('musics.create');
    }


 
// prob
    public function store(Request $request)
    {
        $input = $request->all();
        Music::create($input);
        return redirect('musicindex')->with('flash_message', 'Music Addedd!');  
    }
 
    

    public function show($id)
    {
        $music = Music::find($id);
        return view('musics.show')->with('music', $music);
    }
 
    
    public function edit($id)
    {
        $music = Music::find($id);
        return view('musics.edit')->with('musics', $music);
    }
 
  
    public function update(Request $request, $id)
    {
        $music = Music::find($id);
        $input = $request->all();
        $music->update($input);
        return redirect('musicindex')->with('flash_message', 'music Updated!');  
    }
 
   
    public function destroy($id)
    {
        Music::destroy($id);
        return redirect('musicindex')->with('flash_message', 'music deleted!');  
    }








    
}
