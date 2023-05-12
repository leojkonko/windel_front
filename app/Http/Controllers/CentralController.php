<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class CentralController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('suporte')
            ->setTitle('Central de suporte')
            ->setBreadTitle('Central de suporte')
            ->pushBreadCrumb('Central de suporte')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.central-de-ajuda', [
            'page' => $page->getPage(),
        ]);
    }
}
