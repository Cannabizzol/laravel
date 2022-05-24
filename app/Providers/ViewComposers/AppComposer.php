<?php
namespace App\Providers\ViewComposers;
use App\Models\Category;
use Illuminate\Contracts\View\View;

class AppComposer {

    public function compose(View $view) {
        $categories = Category::all();
        $view->with('categories',$categories);
    }

}
