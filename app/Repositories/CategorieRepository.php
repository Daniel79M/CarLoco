<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\categories;

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
        return categories::all();
    }

    public function show($id)
    {
        return categories::findOrFail($id);
    }

    public function store(array $data) 
    {
        return categories::create($data);
    }

    public function update(array $data, $id)
    {
        return categories::findOrFail($id)->update($data);
    }

    public function delete($id)
    {
        return categories::destroy($id);
    }
}
