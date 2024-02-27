<?php

namespace App\View\Components\temp;

use Closure;
use App\Models\Order;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class orderTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.temp.order-table',[ 
            'orders'=> Order::all()
        ]);
    }
}
