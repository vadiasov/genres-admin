<?php

namespace Vadiasov\GenresAdmin\Http;

use App\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'genres';
        $user   = Auth::user();
        $genres  = Genre::all();
        
        return view('genres-admin::admin.genres.index', compact(
            'active',
            'user',
            'genres'
        ));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = 'genres';
        $user   = Auth::user();
        
        return view('genres-admin::admin.genres.create', compact(
            'active',
            'user'
        ));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     *
     * @param \Vadiasov\GenresAdmin\Http\GenreRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(GenreRequest $request)
    {
        $genre = new Genre([
            'name' => $request->name,
            'slug' => $request->slug,
        ]);
        
        $genre->save();
        
        return redirect(route('admin/genres'))->with('status', 'New Genre has been created!');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active = 'genres';
        $user   = Auth::user();
        $genre   = Genre::whereId($id)->first();
        
        return view('genres-admin::admin.genres.edit', compact(
            'active',
            'user',
            'genre'
        ));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \Vadiasov\GenresAdmin\Http\GenreRequest $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(GenreRequest $request, $id)
    {
        $genre = Genre::whereId($id)->first();
        
        $genre->name = $request->name;
        $genre->slug = $request->slug;
    
        $genre->save();
    
        return redirect(route('admin/genres'))->with('status', 'The Genre has been edited!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::whereId($id);
    
        $genre->delete();
    
        return redirect(route('admin/genres'))->with('status', 'The Genre has been deleted!');
    }
    
    public function showUser()
    {
        return 'Genre from controller';
    }
}
