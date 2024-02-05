<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Productos;
use App\Models\ProductosFotos;
use Illuminate\Support\Str;

class BdController extends Controller
{
    //

    public  function bd_inicio(){

        return view('bd.home');

    }

    public  function bd_categorias(){

        $datos = Categorias::orderBy('id','desc')->get();
        //dd($datos);
        return view('bd.categorias',compact('datos'));
    }

    public  function bd_categorias_add(){

        return view('bd.categorias_add');
    }

    public function bd_categorias_add_post(Request $request){

        $request->validate(
            [
                'nombre'=>'required|min:4'
            ],
            [
                'nombre.required'=>'El campo Nombre esta vació',
                'nombre.min'=> 'El campo Nombre debe tener al menos 4 caracteres'
            ]
        );
        Categorias::create([
            'nombre'=>$request->input('nombre'),
            'slug'=>Str::slug($request->input('nombre'),'-')
        ]);
        $request->session()->flash('css','success');
        $request->session()->flash('mensaje','Se creó el registro exitosamente');
        return redirect()->route('bd_categorias_add');

    }

    public function bd_categorias_edit($id){

        $categorias = Categorias::where( ['id'=>$id])->firstOrFail();
        return view('bd.categorias_edit',compact('categorias'));
    }

    public function bd_categorias_edit_post(Request $request, $id){
        

        $request->validate(
            [
                'nombre'=>'required|min:6'
            ],
            [
                'nombre.required'=>'El campo Nombre esta vació',
                'nombre.min'=> 'El campo Nombre debe tener al menos 6 caracteres'
            ]
        );
        $categorias = Categorias::find( ['id'=>$id])->firstOrFail();
        $categorias->nombre = $request->input('nombre');
        $categorias->slug = Str::slug($request->input('nombre'),'-');
        $categorias->save();
        $request->session()->flash('css','success');
        $request->session()->flash('mensaje','Se creó el registro exitosamente');
        return redirect()->route('bd_categorias_edit',['id'=>$id]);

    }    

    public function bd_categorias_delete(Request $request, $id){

        if(Productos::where(['categorias_id'=>$id])->count()==0){
            Categorias::where(['id'=>$id])->delete();
            $request->session()->flash('css','success');
            $request->session()->flash('mensaje','Se creó el registro exitosamente');
            return redirect()->route('bd_categorias');
        }else{
            $request->session()->flash('css','danger');
            $request->session()->flash('mensaje','No es posible eliminar el registro');
            return redirect()->route('bd_categorias');
        }
    }

    public function bd_productos(){
        $datos = Productos::orderBy('id','desc')->get();
        return view('bd.productos', compact('datos'));
    }

    public function bd_productos_add(){
        $categorias = Categorias::get();
        return view('bd.productos_add', compact('categorias'));
    }


    public function bd_productos_add_post(Request $request){
        
        $request->validate(
            [
                'nombre'=>'required|min:4',
                'precio'=>'required|numeric',
                'descripcion'=>'required'
            ],
            [
                'nombre.required'=>'El campo Nombre esta vacío',
                'nombre.min'=>'El campo Nombre debe tener al menos 4 caracteres',
                'precio.required'=>'El campo Precio está vacío',
                'descripcion.required'=>'el campo Descripción está'
            ]
        );

        Productos::create(
            [
                'nombre'=>$request->input('nombre'),
                'slug'=>Str::slug($request->input('nombre'),'-'),
                'precio'=>$request->input('precio'),
                'stock'=>$request->input('stock'),
                'descripcion'=>$request->input('descripcion'),
                'categorias_id'=>$request->input('categorias_id'),
                'fecha'=>date('Y-m-d')
            ]
            );
            $request->session()->flash('css','success');
            $request->session()->flash('mensaje','Se creó el registro exitosamente');
            return redirect()->route('bd_productos_add');
    }


    public function bd_productos_edit($id){
        $producto = Productos::where(['id'=>$id])->firstOrFail();
        $categorias = Categorias::get();
        return view('bd.productos_edit',compact('producto','categorias'));
    }

    public function bd_productos_edit_post(Request $request, $id){
        $request->validate(
            [
                'nombre'=>'required|min:6',
                'precio'=>'required|numeric',
                'descripcion'=>'required'
            ],
            [
                'nombre.required'=>'El campo Nombre esta vacío',
                'nombre.min'=>'El campo Nombre debe tener al menos 6 caracteres',
                'precio.required'=>'El campo Precio está vacío',
                'descripcion.required'=>'el campo Descripción está'
            ]
        );
        $producto = Productos::where(['id'=>$id])->firstOrFail();
        $producto->nombre=$request->input('nombre');
        $producto->slug=Str::slug($request->input('nombre'),'-');
        $producto->categorias_id=$request->input('categorias_id');
        $producto->precio=$request->input('precio');
        $producto->stock=$request->input('stock');
        $producto->descripcion=$request->input('descripcion');
        $producto->save();
        $request->session()->flash('css','success');
        $request->session()->flash('mensaje','Se edito el registro exitosamente');
        return redirect()->route('bd_productos_edit',['id'=>$id]);        
    }

    public function bd_productos_delete(Request $request, $id ){

        $producto = Productos::where(['id'=>$id])->firstOrFail();  
        if(ProductosFotos::where(['productos_id'=>$id])->count()==0)
        {
            Productos::where(['id'=>$id])->delete();
            $request->session()->flash('css','success');
            $request->session()->flash('mensaje','Se eliminó el registro exitosamente');
            return redirect()->route('bd_productos',['id'=>$id]);        
        }   
        else
        {
            $request->session()->flash('css','danger');
            $request->session()->flash('mensaje','No es posible eliminar el registro');
            return redirect()->route('bd_productos');        
        }   
    }

    public function bd_productos_categorias($id){
        $categoria=Categorias::where(['id'=>$id])->firstOrFail();
        $datos = Productos::where(['categorias_id'=>$id])->orderBy('id','desc')->get();
        return view('bd.productos_categorias', compact('datos','categoria'));
    }

    public function bd_productos_fotos($id){

        $producto = Productos::where(['id'=>$id])->firstOrFail();
        $fotos = ProductosFotos::where(['productos_id'=>$id])->get();
        return view('bd.productos_fotos', compact('fotos','producto'));
    }

    public function bd_productos_fotos_post(Request $request, $id ){

        $producto = Productos::where(['id'=>$id])->firstOrFail();
        $request->validate(
            [
                'foto'=>'required|mimes:jpg,png|max:2040'
            ],
            [
                'foto.required'=>'El campo foto está vacío',
                'foto.mimes'=>'El campo foto debe ser JPG|PNG'
            ]
        );
    switch($_FILES['foto']['type']){
        case 'image/png':
            $extension=time().".png";
        break;
        case 'image/jpeg':
            $extension=time().".jpg";
        break;
    }
    copy($_FILES['foto']['tmp_name'],'upload/producto/'.$extension);
    ProductosFotos::create([
        'productos_id'=>$id,
        'nombre'=>$extension,
        'categorias_id'=>$producto->categorias_id
    ]);
    $request->session()->flash('css','success');
    $request->session()->flash('mensaje','Se creó el archivo exitosamente');
    return redirect()->route('bd_productos_fotos',['id'=>$id]);
    }

    public function bd_productos_fotos_delete(Request $request,$producto_id,$foto_id){

        $producto = Productos::where(['id'=>$producto_id])->firstOrFail();
        $foto = ProductosFotos::where(['id'=>$foto_id])->firstOrFail();
        unlink("C:/Users/nancho/proyectos/prueba_laravel/public/upload/producto/".$foto->nombre);
        ProductosFotos::where(['id'=>$foto_id])->delete();
        $request->session()->flash('css','success');
        $request->session()->flash('mensaje','Se elimino el registro exitosamente');
        return redirect()->route('bd_productos_fotos',['id'=>$producto_id]);
    }

    public function bd_productos_paginacion(){
        $datos = Productos::orderBy('id','desc')->paginate(2);
        return view('bd.paginacion',compact('datos'));
    }
   
public function bd_productos_buscador(){
    
    if(isset($_GET['b'])){
        $b=$_GET['b'];
        $datos = Productos::where('nombre','like','%'.$_GET['b'].'%')->orderBy('id','desc')->get();
    }
    else{
        $b='';
        $datos = Productos::orderBy('id','desc')->get();
    }
    //$datos = Productos::orderBy('id','desc')->get();
    return view('bd.buscador',compact('datos','b'));
}
}


