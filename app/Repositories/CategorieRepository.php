<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\categorie;

class CategorieRepository  implements CategoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        return categorie::all();
    }

    public function show($id)
    {
        return categorie::findOrFail($id);
    }

    public function store(array $data) 
    {
        return categorie::create($data);
    }

    public function update(array $data, $id)
    {
        return categorie::findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return categorie::destroy($id);
    }
}
