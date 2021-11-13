<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render(): View|string|\Closure
    {

        return view('components.category-dropdown', [
            'categories' => Category::all(),
            'currentCategory' => Category::query()
                ->firstWhere('slug', '=', request(['category'])),
        ]);
    }
}
