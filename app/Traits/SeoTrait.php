<?php
    namespace App\Traits;

    trait SeoTrait{
        public $json;

        public function __construct(){            
            $json = @file_get_contents(public_path().'/assets/json/seo/index.json');
            if($json == false){
                exit("SEO data not found...");
            }
            $this->json = json_decode($json);
        }

        public function makeMeta($lang = "en", $path, $meta, $vars = []){
            if(isset($this->json->{$path}->languages->{$lang}->metas->{$meta})){
                $url = (string) $this->json->{$path}->languages->{$lang}->metas->{$meta};
                $processedPath = preg_replace_callback('/{{(.*?)}}/', function ($preg) use ($vars) { 
                    return isset($vars[$preg[1]]) ? $vars[$preg[1]] : $preg[0]; 
                }, $url);     			
                return $processedPath;
            }else{
                return "";
            }
        }

        public function createURL($lang = "en", $path, $vars = array()){			
            if(isset($this->json->{$path}->languages->{$lang}->path)){
                $url = (string) $this->json->{$path}->languages->{$lang}->path;
                $processedPath = preg_replace_callback('/{{(.*?)}}/', function ($preg) use ($vars) { 
                    return isset($vars[$preg[1]]) ? $vars[$preg[1]] : $preg[0]; 
                }, $url);     			
                return $processedPath;
            }else{
                return "/";
            }
        }

        public function getAlternates($lang = "en", $path, $vars = array()){
            //dd($path, $this->json->{$path}->languages);
            if(isset($this->json->{$path}->alternates)){
                return (array) $this->json->{$path}->alternates;
                //return (array) $this->json->{$path}->alternates;
            }else{
                return [];
            }
        }

        public function getAlternateByPath($lang = "en", $path){
            if(isset($this->json->{$path}->alternates->{$lang})){
                return $this->json->{$path}->alternates->{$lang};
            }else{
                return "/";
            }
        }

        /**
         * Summary of seoData
         * @param mixed $code el identificador de la sección que se haya en el JSON file
         * @param mixed $preload las rutas de archivos css que se cargarán bajo la metrica preload
         * @param mixed $links las rutas de archivos css que se cargarán de manera tradicional
         * @return Landings
         */
        public function seoData($code = 'home', $preload = [], $links = []) {
            $this->seo['meta']['title'] = $this->makeMeta(app()->getLocale(), $code, "title");
            $this->seo['meta']['description'] = $this->makeMeta(app()->getLocale(), $code, "description");
            $this->seo['meta']['keywords'] = $this->makeMeta(app()->getLocale(), $code, "keywords");
            $this->seo['alternate'] = $this->getAlternates(app()->getLocale(), $code);
            $this->seo['preload'] = $preload;
            $this->seo['links'] = $links;
            $this->seo['nofollow'] = false;
    
            return $this;
        }

}