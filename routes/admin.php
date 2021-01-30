<?php



Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard');

// Route::get('author', [App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('author.index');
// Route::get('author/create', [App\Http\Controllers\Admin\AuthorController::class, 'create'])->name('author.create');
// Route::get('author/{author}/edit', [App\Http\Controllers\Admin\AuthorController::class, 'edit'])->name('author.edit');
// Route::put('author/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'update'])->name('author.update');
// Route::delete('author/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'destroy'])->name('author.destroy');
// Route::post('author', [App\Http\Controllers\Admin\AuthorController::class, 'store'])->name('author.store');


Route::get('/author/data', [App\Http\Controllers\Admin\DataController::class, 'authors'])->name('admin.author.data');
Route::get('/book/data', [App\Http\Controllers\Admin\DataController::class, 'books'])->name('admin.book.data');
Route::resource('author', App\Http\Controllers\Admin\AuthorController::class);
Route::resource('book', App\Http\Controllers\Admin\BookController::class);


?>