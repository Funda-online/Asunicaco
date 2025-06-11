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
        return $this->render('dashboard', 'Dashboard | ASUNICACO');
    }

    public function adminActualites(): string
    {

        return view('the_admin/layout', [
            'title' => 'Actualites | ASUNICACO',
            'content' => 'the_admin/pages/adminActualites/actualites',
        ]);
    }

    public function adminProvinces(): string
    {

        return view('the_admin/layout', [
            'title' => 'Provinces | ASUNICACO',
            'content' => 'the_admin/pages/adminProvinces/provinces',
        ]);
    }

    public function adminUniversites(): string
    {

        return view('the_admin/layout', [
            'title' => 'Universites | ASUNICACO',
            'content' => 'the_admin/pages/adminUniversites/universites',
        ]);
    }
}
