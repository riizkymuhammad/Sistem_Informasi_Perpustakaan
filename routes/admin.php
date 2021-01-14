<?php
Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.dashboard')

?>