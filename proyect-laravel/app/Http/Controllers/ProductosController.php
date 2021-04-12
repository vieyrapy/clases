<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\producto\productosCreateRequest;
use App\Http\Requests\producto\productosUpdateRequest;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Query\Builder;
class ProductosController extends Controller
{
  public function index()
  {
      $productos= Producto::
      select('productos.id_productos','productos.nombre_producto as producto','productos.precio', 'marcas.nombre_marca as marca')
      ->join('marcas', 'marcas.id_marcas','=', 'productos.id_marcas')->paginate(5);

      return view('CRUD/Index')->with('productos',$productos);
  }

//------------------------------------------------------------------------------

  public function create()
  {
      $marca_id= Marca::all();
      return view('CRUD/Producto')->with('marca_id', $marca_id);
  }

//------------------------------------------------------------------------------

  public function store(Request $request)
  {

      // $this->validate($request, [
      //   'nombre' => 'required',
      //   'precio' => 'required',
      //   'marca_id' => 'required'
      // ]);

      if(Producto::create($request->all())){
        return back()->with('msj', 'Datos guardados satisfactoriamente');
      }
      else {
        return back()->with('msj2', 'El producto no pudo ser procesado!, vuelva a intentarlo.');
      }

  }

//------------------------------------------------------------------------------

  public function show($id)
  {
    $producto= Producto::findOrFail($id);
    $idp= $producto->marca_id;
    $marca= Marca::find($idp);
    return view('CRUD/Eliminar')->with(['producto'=> $producto, 'marca'=> $marca]);
  }

//------------------------------------------------------------------------------

  public function edit($id)
  {
    $marca= Marca::all();
    $producto= Producto::findOrFail($id);
    return view('CRUD/Editar')->with(['marca'=>$marca, 'producto'=>$producto]);
  }


//------------------------------------------------------------------------------

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'nombre_producto' => 'required',
      'precio' => 'required',
    ]);
      $producto= productos::find($id);

              $producto->nombre_producto = $request->nombre_producto;
              $producto->precio = $request->precio;
              $producto->id_marcas = $request->id_marcas;

      if($producto->save()){
        return redirect('indexproducto')->with('msj', 'Datos guardados satisfactoriamente');
      }
      else {
        return back()->with('msj2', 'El producto no pudo ser procesado!, vuelva a intentarlo.');
      }

  }

//------------------------------------------------------------------------------

  public function destroy($id)
  {
      $producto= Producto::findOrFail($id);
      if($producto->delete()){
        return redirect('indexproducto')->with('msj', 'El producto se ha eliminado de la lista');
      }
      else {
        return back()->with('msj2', 'El producto no pudo ser procesado!, vuelva a intentarlo.');
      }
  }

}
