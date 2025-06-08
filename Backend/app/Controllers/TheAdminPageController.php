<?php

namespace App\Controllers;

// use App\Controllers\BaseController;

class TheAdminPageController extends BaseController
{
    private function render(string $page, string $title, array $data = []): string
    {
        return view('the_admin/layout', [
            'title' => $title,
            'content' => 'the_admin/pages/' . $page,
            'data' => $data,
        ]);
    }

    public function dashboard(): string
    {
        return $this->render('dashboard', 'À propos | ASUNICACO');
    }

    // public function dashboard()
    // {
    //     return view('the_admin/pages/dashboard');
    // }
}
