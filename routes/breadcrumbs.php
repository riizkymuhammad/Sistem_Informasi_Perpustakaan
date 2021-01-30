<?php

// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

Breadcrumbs::for('author.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('author.index'));
});

Breadcrumbs::for('author.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('author.index'));
    $trail->push('Tambah Penulis', route('author.create'));
});

Breadcrumbs::for('author.edit', function ($trail, $autor) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('author.index'));
    $trail->push('Ubah Penulis', route('author.edit', $autor));
});

Breadcrumbs::for('book.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('book.index'));
});

Breadcrumbs::for('book.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('book.index'));
    $trail->push('Tambah Buku', route('book.create'));
});

Breadcrumbs::for('book.edit', function ($trail,$book) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('book.index'));
    $trail->push('Edit Buku', route('book.edit',$book));
});

// // Home > Blog
// Breadcrumbs::for('blog', function ($trail) {
//     $trail->parent('home');
//     $trail->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function ($trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category->id));
// });

// // Home > Blog > [Category] > [Post]
// Breadcrumbs::for('post', function ($trail, $post) {
//     $trail->parent('category', $post->category);
//     $trail->push($post->title, route('post', $post->id));
// });