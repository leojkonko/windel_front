<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class PartnesController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('partners')
            ->setTitle('Parceiros')
            ->setBreadTitle('Parceiros')
            ->pushBreadCrumb('Parceiros')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.partners', [
            'page' => $page->getPage(),
        ]);
    }
}
