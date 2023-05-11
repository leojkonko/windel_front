<?php

namespace App\Services;

use App\Models\AlternateLink;
use App\Models\BreadCrumb;
use App\Models\Configuration;
use App\Models\MetaTag;
use Illuminate\Support\Collection;
use Astrotomic\Translatable\Contracts\Translatable;
use Ellite\PagePrivacy\Services\PagePrivacyService;
use Ellite\PageHome\Services\PageHomeService;

class SiteService
{
	/**
	 * Title da aba do site
	 */
	private $title = '';

	/**
	 * H1 do site
	 */
	private $h1 = '';

	/**
	 * Texto do breadcrumb do site
	 */
	private $bread_title = '';

	/**
	 * Breadcrumbs do site
	 */
	private Collection $bread_crumbs;

	/**
	 * Links alternate do site
	 */
	private Collection $alternates;

	/**
	 * Configurações do site
	 */
	private Configuration $configurations;
	
	/**
	 * Meta tags do site
	 */
	private Collection $meta_tags;
	
	public function __construct(
		private LanguagesService $languages,
		private PagePrivacyService $privacy,
		private PageHomeService $home,
	)
	{
		$this->alternates = collect();
		$this->setAlternates('home');

		$this->bread_crumbs = collect();
		$this->pushBreadCrumb('Home', route_lang('home'));

		$this->meta_tags = collect();

		$this->setDescriptionIfNotEmpty($this->home->getPage()->description);
		$this->setKeywordsIfNotEmpty($this->home->getPage()->keywords);

		$this->configurations = Configuration::withTranslation()->firstOrCreate();
	}

	public function setTitle($title)
	{
		$this->title = $title;
		
		return $this;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setH1($h1)
	{
		$this->h1 = $h1;
		
		return $this;
	}

	public function getH1()
	{
		return $this->h1;
	}

	public function setBreadTitle($bread_title)
	{
		$this->bread_title = $bread_title;
		
		return $this;
	}

	public function getBreadTitle()
	{
		return $this->bread_title;
	}

    /**
     * Seta os links de meta tags alternate para o site
     * 
     * @param string $route_name Nome da rota para gerar alternates
     * @param callable|Translatable|null $function_param Função que retorna um array 
	 * para ser usado como parametro ou model que implementa Translatable, o campo 
	 * slug será pego automaticamente
     */
    public function setAlternates(string $route_name, callable|Translatable|null $param = null)
    {
        foreach ($this->languages->siteLanguages() as $language) {
            
			$params = [];

			if ($param instanceof Translatable) {
				$params = [
					$param->translate($language->locale, true)->slug,
				];
			}
			elseif ($param) {
				$params = $param($language);
			}

            $url = route_for_lang($route_name, $language, $params);

            $alternate = new AlternateLink(
                language: $language,
                url: $url,
            );

            $this->alternates = $this->alternates->put($language->id, $alternate);
        }

		return $this;
    }

    /**
     * Retorna os links alternate do site
     * 
     * @param bool $include_current Se deve retornar a rota para o idioma atual também
     */
    public function getAlternates(bool $include_current = true)
    {
        return $this->alternates->filter(
            fn($a) => $include_current 
                ? true
                : $a->getLanguage()->code !== $this->languages->getCurrentLanguage()->code
        );
    }

	public function pushBreadCrumb(string $text, $url = '')
	{
		$this->bread_crumbs->push(new BreadCrumb(
			text: $text,
			url: $url,
		));

		return $this;
	}
	
	public function getBreadCrumbs()
	{
		return $this->bread_crumbs;
	}

	public function setMetaName($name, $content)
	{
		$meta = new MetaTag();
		$meta->setName($name)->setContent($content);
		$this->meta_tags->put("name-$name", $meta);

		return $this;
	}
	
	public function setMetaProperty($property, $content)
	{
		$meta = new MetaTag();
		$meta->setProperty($property)->setContent($content);
		$this->meta_tags->put("prop-$property", $meta);
		
		return $this;
	}

	public function getMetaTags()
	{
		return $this->meta_tags;
	}

	public function configEmail()
	{
		if ($this->configurations->email_authenticated) {
			$dsn = $this->configurations->email_dsn;
			$url = parse_url($dsn);
			
			config(['mail.mailers.smtp.host' => $url['host']]);
			config(['mail.mailers.smtp.port' => $url['port']]);
			config(['mail.mailers.smtp.username' => $url['user']]);
			config(['mail.mailers.smtp.password' => $url['pass']]);
			
			config(['mail.from.address' => $url['user']]);
		}
		else {
			$email_from = $this->configurations->email_from;

			if ($email_from) {
				config(['mail.from.address' => $email_from]);
			}
		}
	}

	public function useLgpd()
	{
		return config('lgpd.active') && config('lgpd.code');
	}
	
	public function getLgpdCode()
	{
		return config('lgpd.code');
	}

	public function isLgpdTest()
	{
		return config('lgpd.code') === 'teste';
	}

	public function getCustomJsHead()
	{
		return (string) $this->configurations->custom_js_head;
	}
	
	public function getCustomJsBody()
	{
		return (string) $this->configurations->custom_js_body;
	}

	public function hasPrivacy()
	{
		return !empty($this->privacy->getPage()->text);
	}

	public function setDescriptionIfNotEmpty($content)
	{
		if ($content) {
			$this->setMetaProperty('og:description', $content);
			$this->setMetaName('description', $content);
		}
		return $this;
	}

	public function setKeywordsIfNotEmpty($content)
	{
		if ($content) {
			$this->setMetaName('keywords', $content);
		}
		return $this;
	}

	public function setMetasSocials($model, $images, string $type = '')
	{
		$this->setMetaProperty('og:title', $model->title);
		$this->setMetaProperty('og:url', request()->getUri());

		if ($type) {
			$this->setMetaProperty('og:type', $type);
		}

		if ($images->count()) {
			$image = $images->first();
			$this->setMetaProperty('og:image', $image->url());
		}

		return $this;
	}
}
