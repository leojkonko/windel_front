<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class BlogDetalheController extends Controller
{
    public function detalhes(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('blog-detalhe')
            ->setTitle('Blog detalhe')
            ->setBreadTitle('Blog detalhe')
            ->pushBreadCrumb('Blog detalhe')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.blog_details', [
            'page' => $page->getPage(),
        ]);
    }
}
