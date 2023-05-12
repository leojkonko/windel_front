<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Services\SiteService;
use Ellite\Contact\Services\ContactService;

class ContactController extends Controller
{
    public function index(SiteService $site, ContactService $page)
    {
        $site->setAlternates('contact')
            ->pushBreadCrumb('Fale conosco')
            ->setBreadTitle('Fale conosco')
            ->setTitle('Fale conosco')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);
        
        return view('front.pages.contact', [
            
        ]);
    }
    public function trabalhe(SiteService $site, ContactService $page)
    {
        $site->setAlternates('contact')
            ->pushBreadCrumb('Trabalhe conosco')
            ->setBreadTitle('Trabalhe conosco')
            ->setTitle('Trabalhe conosco')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);
        
        return view('front.pages.trabalhe-conosco', [
            
        ]);
    }
    public function vaga(SiteService $site, ContactService $page)
    {
        $site->setAlternates('contact')
            ->pushBreadCrumb('Programador Back-End')
            ->setBreadTitle('Programador Back-End')
            ->setTitle('Programador Back-End')
            ->setDescriptionIfNotEmpty($page->getPage()->description)
            ->setKeywordsIfNotEmpty($page->getPage()->keywords);
        
        return view('front.pages.vaga-detalhe', [
            
        ]);
    }
}
