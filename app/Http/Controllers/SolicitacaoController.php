<?php

namespace App\Http\Controllers;

use App\Services\SiteService;
use Ellite\PageCompany\Services\PageCompanyService;

class SolicitacaoController extends Controller
{
    public function index(SiteService $site, PageCompanyService $page)
    {
        $site->setAlternates('solicitacao')
            ->setTitle('Solicita uma demonstração')
            ->setBreadTitle('Solicita uma demonstração')
            ->pushBreadCrumb('Solicita uma demonstração')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);

        return view('front.pages.demonstracao', [
            'page' => $page->getPage(),
        ]);
    }
}
