<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Interfaces\CategoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    private CategoryInterface $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->categoryInterface->index();

        return view('categories.index', [
            'page' => 'categories',
            'categories' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create', [
            'page' => 'categories.create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        $data = [
            "name" => $request->name,
            "description" => $request->description
        ];

        DB::beginTransaction();

        try {
            $this->categoryInterface->store($data);
            DB::commit();

            return back()->withSuccess("Categorie ajouter avec success");
        } catch (\Throwable $th) {
            return back()->withErrors("Erreur lors de la creation");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = $this->categoryInterface->show($id);
        return view('categories.edit', [
            'page' => 'categories',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {
        $data = [
            "name" => $request->name,
            "description" => $request->description
        ];

        DB::beginTransaction();

        try {
            $this->categoryInterface->update($data, $id);
            DB::commit();

            return back()->withSuccess("Categorie modifier avec success");
        } catch (\Throwable $th) {
            return back()->withErrors("Erreur lors de la modification");

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->categoryInterface->delete($id);
        return back()->withSuccess("Categorie supprimer avec success");

    }
}
