<?php 

namespace Casautomotive;


class Data{

    private function topBarData(){
        $fbImg= !empty(get_theme_mod( 'cs-facebook-topbar' ) )? wp_get_attachment_url( get_theme_mod( 'cs-facebook-topbar' ) ):'';
        $fbLink = !empty(get_theme_mod('fb-link'))? get_theme_mod('fb-link'):'' ;
        $igImg = !empty(get_theme_mod('cs-header-image-ig-topbar'))?  wp_get_attachment_url( get_theme_mod( 'cs-header-image-ig-topbar' ) ):'';
        $igLink = !empty(get_theme_mod('ig-link'))? get_theme_mod('ig-link'): '';
        $twImg = !empty(get_theme_mod('cs-header-image-tw-topbar'))?  wp_get_attachment_url( get_theme_mod( 'cs-header-image-tw-topbar' ) ):'';
        $twLink = !empty(get_theme_mod('tw-link'))? get_theme_mod('tw-link'): '';
        $lnImg = !empty(get_theme_mod('cs-header-image-ln-topbar'))?  wp_get_attachment_url( get_theme_mod( 'cs-header-image-ln-topbar' ) ):'';
        $lnLink = !empty(get_theme_mod('tw-link'))? get_theme_mod('tw-link'): '';
        return
            [
                "fbImg"=>$fbImg,
                "fbLink"=>$fbLink,
                "igImg"=>$igImg,
                "igLink"=> $igLink,
                "twImg"=>$twImg, 
                "twLink"=>$twLink,
                "lnImg"=> $lnImg,
                "lnLink" => $lnLink
            ];
        
    }
    private function getHeaderData(){
        $headerLogo = 
        $headerLogo = !empty(get_theme_mod('cs-header-logo-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-header-logo-image' ) ):'';
     
        return $headerLogo;
    }  
    private function getFooterData(){
        $footerLogo = 
        $footerLogo = !empty(get_theme_mod('cs-footer-logo-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-footer-logo-image' ) ):'';
        $footerCp = !empty(get_theme_mod('cp-text'))? get_theme_mod('cp-text'): '';

        return [
            "footerLogo"=>$footerLogo,
            "footerData"=>$footerCp
        ];
    }    
    private function getMenuItems(){
        $menuItems = wp_get_nav_menu_items( 'primary', array( 'order' => 'DESC' ) );
        $menuItemsArray = [];
        foreach($menuItems as $item){
           $menuItemsArray = [...$menuItemsArray, ["title"=>$item->title, "link"=>$item->url]];
        }
       return $menuItemsArray;
    }
    private function getMainWidget(){
        $mainWitGetItem = !empty(get_theme_mod('ca-home-widget-title'))? get_theme_mod('ca-home-widget-title'): '';
        return  $mainWitGetItem;
    }

    private function homePageItems(){
        return [
            "mainWidget"=> $this->getMainWidget(),
            "brandWidget"=>$this->brandsWidgetItems(),
            "aboutCareerWidget"=> $this->aboutWidgetItems(),
        ];
    }
    private function brandsWidgetItems(){
        $mainTitleBrand = !empty(get_theme_mod('ca-home-widget-title-brand'))? get_theme_mod('ca-home-widget-title-brand'): '';
        $mainSubTitleBrand = !empty(get_theme_mod('ca-home-widget-subtitle-brand'))? get_theme_mod('ca-home-widget-subtitle-brand'): '';
        $brand1 = !empty(get_theme_mod('cs-brand-1-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-brand-1-image' ) ):'';
        $brand2 = !empty(get_theme_mod('cs-brand-2-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-brand-2-image' ) ):'';
        $brand3 = !empty(get_theme_mod('cs-brand-3-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-brand-3-image' ) ):'';
        $brand4 = !empty(get_theme_mod('cs-brand-4-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-brand-4-image' ) ):'';
        $linkBrand1 = !empty(get_theme_mod('ca-brand-1'))? get_theme_mod('ca-brand-1'): '';
        $linkBrand2 = !empty(get_theme_mod('ca-brand-2'))? get_theme_mod('ca-brand-2'): '';
        $linkBrand3 = !empty(get_theme_mod('ca-brand-3'))? get_theme_mod('ca-brand-3'): '';
        $linkBrand4 = !empty(get_theme_mod('ca-brand-4'))? get_theme_mod('ca-brand-4'): '';
        return[
            
                "mainTitleBrand" => $mainTitleBrand,
                "mainSubTitleBrand"=> $mainSubTitleBrand,
                "brand1"=> $brand1,
                "brand2"=> $brand2,
                "brand3"=> $brand3,
                "brand4"=> $brand4,
                "linkBrand1"=> $linkBrand1,
                "linkBrand2"=> $linkBrand2,
                "linkBrand3"=> $linkBrand3,
                "linkBrand4"=> $linkBrand4,
                               
            
        ];
    }

    public function aboutWidgetItems(){
        $aboutTitle = !empty(get_theme_mod('ca-home-widget-title-about-1'))? get_theme_mod('ca-home-widget-title-about-1'): '';
        $aboutSubtitle = !empty(get_theme_mod('ca-home-widget-subtitle-about-1'))? get_theme_mod('ca-home-widget-subtitle-about-1'): '';
        $aboutBtnText = !empty(get_theme_mod('ca-home-widget-btn_text-about-1'))? get_theme_mod('ca-home-widget-btn_text-about-1'): '';
        $aboutBtnLink = !empty(get_theme_mod('ca-home-widget-btn_link-about-1'))? get_theme_mod('ca-home-widget-btn_link-about-1'): '';
        $careerTitle = !empty(get_theme_mod('ca-home-widget-title-about-2'))? get_theme_mod('ca-home-widget-title-about-2'): '';
        $careerSubtitle = !empty(get_theme_mod('ca-home-widget-subtitle-about-2'))? get_theme_mod('ca-home-widget-subtitle-about-2'): '';
        $careerBtnText = !empty(get_theme_mod('ca-home-widget-btn_text-about-2'))? get_theme_mod('ca-home-widget-btn_text-about-2'): '';
        $careerBtnLink = !empty(get_theme_mod('ca-home-widget-btn_link-about-2'))? get_theme_mod('ca-home-widget-btn_link-about-2'): '';

        return [
            "aboutTitle"=>$aboutTitle,
            "aboutSubtitle" =>$aboutSubtitle,
            "aboutBtnText" => $aboutBtnText,
            "aboutBtnLink" => $aboutBtnLink,
            "careerTitle" => $careerTitle,
            "careerSubtitle"=>$careerSubtitle,
            "careerBtnText" => $careerBtnText,
            "careerBtnLink" => $careerBtnLink,
        ];
    }
    private function mainAboutWidget(){
        $aboutTitle = !empty(get_theme_mod('ca-about-widget-title'))? get_theme_mod('ca-about-widget-title'): '';
        $aboutSubtitle = !empty(get_theme_mod('ca-about-widget-subtitle'))? get_theme_mod('ca-about-widget-subtitle'): '';
        $imageData1 = !empty(get_theme_mod('cs-data-1-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-data-1-image' ) ):'';
        $imageData2 = !empty(get_theme_mod('cs-data-2-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-data-2-image' ) ):'';
        $imageData3 = !empty(get_theme_mod('cs-data-3-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-data-3-image' ) ):'';
        $imageData4 = !empty(get_theme_mod('cs-data-4-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-data-4-image' ) ):'';
        return [
          "aboutTitle"=>  $aboutTitle,
          "aboutSubtitle"=> $aboutSubtitle,
          "imageData1" =>$imageData1,
          "imageData2"=>$imageData2,
          "imageData3" => $imageData3,
          "imageData4" =>$imageData4
        ];
    }

    private function aboutMissionWidget(){
        $missionTitle = !empty(get_theme_mod('ca-mission-about-widget-title'))? get_theme_mod('ca-mission-about-widget-title'): '';
        $missionSubtitle = !empty(get_theme_mod('ca-mission-about-widget-subtitle'))? get_theme_mod('ca-mission-about-widget-subtitle'): '';
        $missionSubtitle2 = !empty(get_theme_mod('ca-mission-about-widget-subtitle-2'))? get_theme_mod('ca-mission-about-widget-subtitle-2'): '';
        $btnText1 = !empty(get_theme_mod('ca-mission-about-widget-btn-text-1'))? get_theme_mod('ca-mission-about-widget-btn-text-1'): '';
        $btnLink1 = !empty(get_theme_mod('ca-mission-about-widget-btn-link-1'))? get_theme_mod('ca-mission-about-widget-btn-link-1'): '';
        $btnText2 = !empty(get_theme_mod('ca-mission-about-widget-btn-text-2'))? get_theme_mod('ca-mission-about-widget-btn-text-2'): '';
        $btnLink2 = !empty(get_theme_mod('ca-mission-about-widget-btn-link-2'))? get_theme_mod('ca-mission-about-widget-btn-link-2'): '';
        $featureImg = !empty(get_theme_mod('cs-feature-1-image'))?  wp_get_attachment_url( get_theme_mod( 'cs-feature-1-image' ) ):'';

        return  [
            "missionTitle"=>$missionTitle,
            "missionSubtitle"=>$missionSubtitle,
            "missionSubtitle2"=>$missionSubtitle2,
            "btnText1"=>$btnText1,
            "btnLink1"=>$btnLink1,
            "btnText2"=>$btnText2,
            "btnLink2"=>$btnLink2,
            "featureImg"=>$featureImg,
        ];
    }
    private function aboutPageItems(){
        return [
            "aboutWidget"=>$this->mainAboutWidget(),
            "missionWidget"=>$this->aboutMissionWidget()
        ];
    }
    
    private function brandPageItems(){
        
        $icon1 = !empty(get_theme_mod('brand-page-icon'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-icon' ) ):'';
        $featureImg1 = !empty(get_theme_mod('brand-page-image'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-image' ) ):'';
        $subtitle1 = !empty(get_theme_mod('brand-page-widget-subtitle'))? get_theme_mod('brand-page-widget-subtitle'): '';
        $text1 = !empty(get_theme_mod('brand-page-widget-text'))? get_theme_mod('brand-page-widget-text'): '';
        $link1 = !empty(get_theme_mod('brand-page-widget-link'))? get_theme_mod('brand-page-widget-link'): '';
        $textLink1 = !empty(get_theme_mod('brand-page-widget-link-text'))? get_theme_mod('brand-page-widget-link-text'): '';
        $icon2 = !empty(get_theme_mod('brand-page-icon-1'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-icon-1' ) ):'';
        $featureImg2 = !empty(get_theme_mod('brand-page-1-image'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-1-image' ) ):'';
        $subtitle2 = !empty(get_theme_mod('brand-page-widget-subtitle-1'))? get_theme_mod('brand-page-widget-subtitle-1'): '';
        $text2 = !empty(get_theme_mod('brand-page-widget-text-1'))? get_theme_mod('brand-page-widget-text-1'): '';
        $link2 = !empty(get_theme_mod('brand-page-widget-link-1'))? get_theme_mod('brand-page-widget-link-1'): '';
        $textLink2 = !empty(get_theme_mod('brand-page-widget-link-text-1'))? get_theme_mod('brand-page-widget-link-text-1'): '';
        $icon3 = !empty(get_theme_mod('brand-page-icon-2'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-icon-2' ) ):'';
        $featureImg3 = !empty(get_theme_mod('brand-page-2-image'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-2-image' ) ):'';
        $subtitle3 = !empty(get_theme_mod('brand-page-widget-subtitle-2'))? get_theme_mod('brand-page-widget-subtitle-2'): '';
        $text3 = !empty(get_theme_mod('brand-page-widget-text-2'))? get_theme_mod('brand-page-widget-text-2'): '';
        $link3 = !empty(get_theme_mod('brand-page-widget-link-2'))? get_theme_mod('brand-page-widget-link-2'): '';
        $textLink3 = !empty(get_theme_mod('brand-page-widget-link-text-2'))? get_theme_mod('brand-page-widget-link-text-2'): '';
        $icon4 = !empty(get_theme_mod('brand-page-icon-3'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-icon-3' ) ):'';
        $featureImg4 = !empty(get_theme_mod('brand-page-3-image'))?  wp_get_attachment_url( get_theme_mod( 'brand-page-3-image' ) ):'';
        $subtitle4 = !empty(get_theme_mod('brand-page-widget-subtitle-3'))? get_theme_mod('brand-page-widget-subtitle-3'): '';
        $text4 = !empty(get_theme_mod('brand-page-widget-text-3'))? get_theme_mod('brand-page-widget-text-3'): '';
        
        $link4 = !empty(get_theme_mod('brand-page-widget-link-3'))? get_theme_mod('brand-page-widget-link-3'): '';
        $textLink4 = !empty(get_theme_mod('brand-page-widget-link-text-3'))? get_theme_mod('brand-page-widget-link-text-3'): '';
        return [
            "icon1"=>$icon1,
            "featureImg1"=> $featureImg1,
            "subtitle1" => $subtitle1,
            "text1" => $text1,
            "textLink1" =>$textLink1,
            "icon2"=>$icon2,
            "featureImg2"=> $featureImg2,
            "subtitle2" => $subtitle2,
            "text2" => $text2,
            "link2" => $link2,
            "textLink2"=>$textLink2,
            "icon3"=>$icon3,
            "featureImg3"=> $featureImg3,
            "subtitle3" => $subtitle3,
            "text3" => $text3,
            "link3" => $link3,
            "textLink3"=>$textLink3,
            "icon4"=>$icon4,
            "featureImg4"=> $featureImg4,
            "subtitle4" => $subtitle4,
            "text4" => $text4,
            "link4" => $link4,
            "textLink4" =>$textLink4,
        ];
    }
    private function getCareerContent(){
        $title = !empty(get_theme_mod('career-page-widget-subtitle'))? get_theme_mod('career-page-widget-subtitle'): '';
        $subtitle = !empty(get_theme_mod('career-page-widget-text'))? get_theme_mod('career-page-widget-text'): '';

        return [
            "title"=>$title,
            "subtitle"=>$subtitle,
        ];
    }
    private function getCptCareerContent(){
        $args= [
        'post_type' => 'career',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        ];
      $careersCpt =  get_posts($args);
      $careersCptArr = [];
      foreach($careersCpt as $career){
        $careerArr = [];
        $careerTitle = $career->post_title;
        $careerArr['title'] = $careerTitle;
        $lookingImgArr = get_field('looking_image',$career->ID );         
         $lookingImgUrl = !empty($lookingImgArr)? $lookingImgArr['url']: '';  
        $careerArr['lookingImgUrl'] = $lookingImgUrl;
        $lookingHeading = get_field('looking_heading', $career->ID);
        $careerArr['lookingHeading'] =  $lookingHeading;
        $lookingContent = get_field('looking_content', $career->ID);
        $careerArr['lookingContent'] = $lookingContent;
        $offerImgArr = get_field('offer_image',$career->ID );         
        $offerImgUrl = !empty($offerImgArr)? $offerImgArr['url']: '';  
        $careerArr['offerImgUrl'] = $offerImgUrl;
        $offerHeading = get_field('offer_heading', $career->ID);
        $careerArr['offerHeading'] =  $offerHeading;
        $offerContent = get_field('offer_content', $career->ID);
        $careerArr['offerContent'] = $offerContent;



        
        $careersCptArr = [...$careersCptArr, $careerArr];


      }
      return $careersCptArr;
     
    }
    private function getCareerData(){
        return [
           
                "customizableCareer"=>$this->getCareerContent(),
                "careersCpt"=>$this->getCptCareerContent(),
            
        ];
    }
    private function getNonceWp(){
        return wp_create_nonce('wp_rest');
    }
    public function getData(){
        return [
            "topbar"=> $this->topBarData(),
            "headerLogo"=>$this->getHeaderData(),
            "footerLogo"=>$this->getFooterData(),
            "menu"=>$this->getMenuItems(),
            "homeContent"=>$this->homePageItems(),
            "aboutContent"=>$this->aboutPageItems(),
            "brandContent" => $this->brandPageItems(),
            "careerContent"=>$this->getCareerData(),
            "nonce"=>$this->getNonceWp(),
            
        ];
    }
}
