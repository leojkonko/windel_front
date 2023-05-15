<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class ProductsDetailsController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('Products-details')
            ->setTitle('Windel Compacto')
            ->setBreadTitle('Windel Compacto')
            ->pushBreadCrumb('Windel Compacto')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.products-details', [
            'page' => $page->getPage(),
        ]);
    }
}
