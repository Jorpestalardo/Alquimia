<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Etiquetas;
use App\Models\Usuarios;
use App\Models\Empresas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboardAdmin() 
    {
        $user = auth()->user();
        if ($user->roles_id == 1) {
            $totalBlogs = Blog::count();
            $totalEmpresas = Empresas::count();
            $totalUsuarios = Usuarios::count();

            return view('admin.dashboardAdmin', [
                'totalBlogs' => $totalBlogs,
                'totalEmpresas' => $totalEmpresas,
                'totalUsuarios' => $totalUsuarios,
            ]);
        } else {
            return view('auth.login');
        }
    }
    public function dashboardBlog()
    {
        $user = auth()->user();
        if ($user->roles_id == 1) {
            $blogs = Blog::all();

            return view('admin.blog.dashboardBlog', [
                'blogs' => $blogs,
            ]);
        } else {
            return view('auth.login');
        }
    }
    public function formNewBlog()
    {
        $usuario = Auth::user();

        return view('admin.blog.formNewBlog', [
            'etiquetas' => Etiquetas::all(),
            'usuario' => $usuario
        ]);
    }

    public function runNewBlog(Request $request)
    {
        $data = $request->except('_token');
        $data['etiquetas_id'] = $request->input('etiquetas_id', []);
        // $data['usuario_id'] = $request->input('usuario_id');
        $data['usuario_id'] = Auth::id();

        $request->validate(Blog::validationRules(), Blog::validationMessages());


        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImg($request);
        }

        $blog = Blog::create($data);
        $blog->etiquetas()->attach($data['etiquetas_id']);

        return redirect()->route('admin.blog.dashboardBlog')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡La novedad <b>' . e($data['titulo']) . '</b> se publicó con éxito!');
    }

    public function deleteBlog(int $id)
    {
        return view('admin.blog.deleteBlog', [
            'blog' => Blog::findOrFail($id)
        ]);
    }

    public function deleteActionBlog(int $id)
    {
        $blog = Blog::findOrFail($id);

        $blog->etiquetas()->detach();

        $blog->delete();

        return redirect()->route('admin.blog.dashboardBlog')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡La novedad <b>' . e($blog->title) . '</b> se eliminó con éxito!');
    }

    public function editBlog(int $id)
    {
        return view('admin.blog.editBlog', [
            'blog' => Blog::findOrFail($id),
            'etiquetas' => Etiquetas::All(),
        ]);
    }

    public function editActionBlog(Request $request, int $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate(Blog::validationRules(), Blog::validationMessages());

        $data = $request->except(['_token']);

        $oldImg = $blog->img;

        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImg($request);
        }

        $blog->update($data);
        $blog->etiquetas()->sync($data['etiquetas_id']);

        if ($request->hasFile('img') && Storage::exists('img/' . $oldImg)) {
            Storage::delete('img/' . $oldImg);
        }

        return redirect()->route('admin.blog.dashboardBlog')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡La novedad <b>' . e($data['titulo']) . '</b> se editó con éxito!');
    }

    protected function uploadImg(Request $request): string
    {
        $img = $request->file('img');
        $titulo = $request->input('titulo');

        $imgName = date('YmdHis_') . \Str::slug($request->input('titulo')) . "." . $img->guessExtension();

        $img->storeAs('public/img', $imgName);

        return $imgName;
    }

    protected function deleteImg(?string $file): void
    {
        if ($file !== null && Storage::disk('public')->has('img/' . $file)) {
            Storage::disk('public')->delete('img/' . $file);
        }
    }
    //ADMIN EMPRESAS:
    public function dashboard()
    {
        $user = auth()->user();
        if ($user->roles_id == 1) {
            $empresas = Empresas::all();

            return view('admin.empresas.dashboard', [
                'empresas' => $empresas,
            ]);
        } else {
            return view('auth.login');
        }
    }

    public function formEmpresa()
    {
        $usuario = Auth::user();

        return view('admin.empresas.formEmpresa', [
            'usuario' => $usuario
        ]);
    }

    public function nuevaEmpresa(Request $request)
    {
        $data = $request->except('_token');
        $data['usuario_id'] = Auth::id();

        $request->validate(Empresas::validationRules(), Empresas::validationMessages());

        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImgEmpresa($request);
        }

        $empresas = Empresas::create($data);

        if (!$empresas) {
            return redirect()->back()->with('message.error', '<ion-icon name="sad-outline" class="fs-3"></ion-icon> Hubo un problema al publicar la donación. Inténtalo de nuevo.');
        }

        return redirect()->route('admin.empresas.dashboard')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡El Elemento <b>' . e($data['tituloEmpresa']) . '</b> se publicó con éxito!');

    }

    public function borrar(int $id)
    {
        return view('admin.empresas.borrar', [
            'empresa' => Empresas::findOrFail($id)
        ]);
    }

    public function borrarEmpresa(int $id)
    {
        $empresa = Empresas::findOrFail($id);

        $empresa->delete();

        return redirect()->route('admin.empresas.dashboard')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡La empresa <b>' . e($empresa->tituloEmpresa) . '</b> se eliminó con éxito!');
    }

    public function editar(int $id)
    {
        return view('admin.empresas.editar', [
            'empresa' => Empresas::findOrFail($id),
        ]);
    }

    public function editarEmpresa(Request $request, int $id)
    {
        $empresa = Empresas::findOrFail($id);

        $request->validate(Empresas::validationRules(), Empresas::validationMessages());

        $data = $request->except(['_token']);

        $oldImg = $empresa->img;

        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadImgEmpresa($request);
        }

        $empresa->update($data);

        if ($request->hasFile('img') && Storage::exists('public/img' . $oldImg)) {
            Storage::delete('public/img' . $oldImg);
        }

        return redirect()->route('admin.empresas.dashboard')->with('message.success', '<ion-icon name="happy-outline" class="fs-3"></ion-icon> ¡La empresa <b>' . e($data['tituloEmpresa']) . '</b> se editó con éxito!');
    }

    protected function uploadImgEmpresa(Request $request): string
    {
        $img = $request->file('img');
        $tituloEmpresa = $request->input('tituloEmpresa');

        $imgName = date('YmdHis_') . \Str::slug($request->input('tituloEmpresa')) . "." . $img->guessExtension();

        $img->storeAs('public/img', $imgName);

        return $imgName;
    }
}