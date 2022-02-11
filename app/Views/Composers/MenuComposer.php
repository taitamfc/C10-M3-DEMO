<?php
namespace App\Views\Composers;

use Illuminate\View\View;

class MenuComposer {

    public function compose(View $view)
    {
        $menus = [
            [
                'name' => 'customers.index',
                'text' => 'Danh sach khach hang'
            ],
            [
                'name' => 'customers.create',
                'text' => 'Them moi khach hang'
            ]
        ];
        
        $view->with('menus', $menus);
    }
}
