<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu=Menu::all();
        return view('home')->with('menus',$menu);
    }
    public function menu()
    {
        $menu=Menu::all();
        return view('home')->with('menus',$menu);
    }

    public function modificarMenu($id)
    {
        $categorias=Categoria::all();
        $menu=Menu::find($id);
        return view('agregarMenu')->with('menu',$menu)->with('categorias',$categorias);
    }

    public function modificarCategoria($id)
    {
        $categoria=Categoria::find($id);
        return view('agregarCategoria')->with('categoria',$categoria);
    }

    public function categorias()
    {
        $categorias=Categoria::all();
        return view('categorias')->with('categorias',$categorias);
    }

    public function agregarMenu()
    {
        $categorias=Categoria::all();
        return view('agregarMenu')->with('action','add')->with('categorias',$categorias);
    }
    public function agregarCategoria()
    {
        return view('agregarCategoria');
    }

    public function postagregarMenu(Request $request)
    {
        if($request->action=="add")
        {
            $menu=new Menu;
        }else{
            $menu=Menu::find($request->id);
        }
            $menu->titulo=$request->nombre;
            $menu->descripcion=$request->descripcion;
            $menu->precio=$request->precio;
            $menu->categoria=$request->categoria;
            $menu->save();
            return redirect('admin/menu');
    }

    public function postagregarCategoria(Request $request)
    {
        if($request->action=="add")
        {
            $menu=new Categoria;
        }else{
            $menu=Categoria::find($request->id);
        }
            $menu->titulo=$request->nombre;
            $menu->descripcion=$request->descripcion;
            //$menu->imagen=$request->precio;
            $menu->imagen="";
            $menu->save();
            return redirect('admin/categorias');
    }


    public function eliminarMenu($id)
    {
        $menu=Menu::find($id);
        $menu->delete();
        return redirect('admin/menu');
    }

    public function eliminarcategoria($id)
    {
        $menu=Categoria::find($id);
        $menu->delete();
        return redirect('admin/categorias');
    }

    
    
}
