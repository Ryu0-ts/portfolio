<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// top
Breadcrumbs::for('top', function ($trail) {
    $trail->push('ホーム', route('portfolio.index'));
});

// top>about
Breadcrumbs::for('about', function ($trail) {
    $trail->parent('top');
    $trail->push( '初めての方へ', route('portfolio.about'));
});

// top>search (dog)
Breadcrumbs::for('serach_dog', function ($trail) {
    $trail->parent('top');
    $trail->push( '保護犬を探す', route('portfolio.search_dog'));
});

// top>serch (dog)/{id}
Breadcrumbs::for('serach_dog/id', function ($trail,$array) {
    $trail->parent('serach_dog');
    $trail->push( "登録番号".$array["id"], route('portfolio.search_dog'));
});

// top>search (cat)
Breadcrumbs::for('serach_cat', function ($trail) {
    $trail->parent('top');
    $trail->push( '保護猫を探す', route('portfolio.search_cat'));
});

// top>contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('top');
    $trail->push( 'お問い合わせ', route('portfolio.contact'));
});

?>
