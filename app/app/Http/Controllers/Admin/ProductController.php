<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): string
    {
        dump(route('admin.products.index'));
        return 'admin product list';
    } // read показує список продуктів

    public function create(): string
    {
        dump(route('admin.products.create'));
        return 'admin product create';
    } // create пуста форма для введення даних

    public function store(): string
    {
        return 'admin product store';
    } // create зберігає дані в бд

    public function show(int $product): string
    {
        return "admin product show: {$product}";
    } // read показує дані з бд

    public function edit(int $product): string
    {
        return "admin product edit: {$product}";
    } // update показує форму заповненими наявними даними

    public function update(int $product): string
    {
        return "admin product update: {$product}";
    } // update оновлення даних put/patch

    public function destroy(int $product): string
    {
        return "admin product destroy: {$product}";
    } // delete видаляє дані з бд
}
