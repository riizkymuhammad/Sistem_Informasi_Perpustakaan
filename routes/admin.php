<?php
Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');

Route::get('author', [App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('author.index');
Route::get('author/create', [App\Http\Controllers\Admin\AuthorController::class, 'create'])->name('author.create');
Route::get('author/{author}/edit', [App\Http\Controllers\Admin\AuthorController::class, 'edit'])->name('author.edit');
Route::put('author/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'update'])->name('author.update');
Route::delete('author/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'destroy'])->name('author.destroy');
Route::post('author', [App\Http\Controllers\Admin\AuthorController::class, 'store'])->name('author.store');
Route::get('author/data', [App\Http\Controllers\Admin\DataController::class, 'authors'])->name('admin.author.data');

?>