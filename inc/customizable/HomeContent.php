<?php
namespace Casautomotive\customizable;
use Casautomotive\customizable\util\CustomizableInterface;
use Casautomotive\customizable\util\ElementCustomizable;
use Casautomotive\customizable\util\ImgCustomizable;
use Casautomotive\customizable\util\TextCustomizable;
use WP_Customize_Manager;

class HomeContent
{
    


    public function __construct()
    {
        add_action('customize_register', array( $this, 'customizeRegister'));
        add_action('customize_register', array( $this, 'customizeRegisterMainWidget'));
        add_action('customize_register', array( $this, 'customizeRegisterBrandWidget'));
        add_action('customize_register', array( $this, 'customizeRegisterAbout'));
    }
    public  function customizeRegister( WP_Customize_Manager $wp_customize){
        $customizable_element= new ElementCustomizable($wp_customize, 'ca-home-widget-section','home_page_sections');
        $customizable_element->add_panel('Home Page Section', 'Adjust your Home.');

    }
    public function customizeRegisterMainWidget(WP_Customize_Manager $wp_customize){

        $customizable_element_main= new ElementCustomizable($wp_customize, 'ca-home-widget-section','home_page_sections');
        $customizable_element_main->add_section('Main widget Section');
        $main_widget_title = new TextCustomizable('Widget Title','ca-home-widget-title-control',
        $customizable_element_main->getSectionId(),'ca-home-widget-title',$wp_customize, 'textarea');
       

       

        $this->paintingElements($main_widget_title);
    }
    public function customizeRegisterBrandWidget(WP_Customize_Manager $wp_customize){

        $customizable_element_brand= new ElementCustomizable($wp_customize, 'ca-home-widget-brand-section','home_page_sections');
        $customizable_element_brand->add_section('Brand widget Section');
        $main_widget_title_brand = new TextCustomizable('Widget Brans Title','ca-home-widget-title-brand-control',
        $customizable_element_brand->getSectionId(),'ca-home-widget-title-brand',$wp_customize);
        $main_widget_subtitle_brand = new TextCustomizable('Widget Brans Subtitle','ca-home-widget-subtitle-brand-control',
        $customizable_element_brand->getSectionId(),'ca-home-widget-subtitle-brand',$wp_customize, 'textarea');
        $link_brand1 = new TextCustomizable('Link Brand 1','ca-brand-1-control',
        $customizable_element_brand->getSectionId(),'ca-brand-1',$wp_customize);
        $brand_img_1 = new ImgCustomizable('Image for brand 1', 'cs-brand-image-1-control', 'cs-brand-1-image',$customizable_element_brand->getSectionId(), $wp_customize);
        $link_brand2 = new TextCustomizable('Link Brand 2','ca-brand-2-control',
        $customizable_element_brand->getSectionId(),'ca-brand-2',$wp_customize);
        $brand_img_2 = new ImgCustomizable('Image for brand 2', 'cs-brand-image-2-control', 'cs-brand-2-image',$customizable_element_brand->getSectionId(), $wp_customize);
        $link_brand3 = new TextCustomizable('Link Brand 3','ca-brand-3-control',
        $customizable_element_brand->getSectionId(),'ca-brand-3',$wp_customize);
        $brand_img_3 = new ImgCustomizable('Image for brand 3', 'cs-brand-image-3-control', 'cs-brand-3-image',$customizable_element_brand->getSectionId(), $wp_customize);
        $link_brand4 = new TextCustomizable('Link Brand 4','ca-brand-4-control',
        $customizable_element_brand->getSectionId(),'ca-brand-4',$wp_customize);
        $brand_img_4 = new ImgCustomizable('Image for brand 4', 'cs-brand-image-4-control', 'cs-brand-4-image',$customizable_element_brand->getSectionId(), $wp_customize);
      
       

        $this->paintingElements($main_widget_title_brand, $main_widget_subtitle_brand,$link_brand1, $brand_img_1,$link_brand2, $brand_img_2,$link_brand3, $brand_img_3,$link_brand4, $brand_img_4 );
    }
    public function customizeRegisterAbout(WP_Customize_Manager $wp_customize){
        $customizable_element_about= new ElementCustomizable($wp_customize, 'ca-home-widget-about-section','home_page_sections');
        $customizable_element_about->add_section('About widget Section');
        $main_widget_title_about_1 = new TextCustomizable('Widget About Title','ca-home-widget-title-about-1-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-title-about-1',$wp_customize);
        $main_widget_subtitle_about_1 = new TextCustomizable('Widget About  Subtitle','ca-home-widget-subtitle-about-1-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-subtitle-about-1',$wp_customize, 'textarea');
        $main_widget_subtitle_btn_text_1 = new TextCustomizable('Widget About Button  Text','ca-home-widget-btn_text-about-1-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-btn_text-about-1',$wp_customize);
        $main_widget_subtitle_btn_link_1 = new TextCustomizable('Widget About Button  Link','ca-home-widget-btn_link-about-1-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-btn_link-about-1',$wp_customize);
        $main_widget_title_about_2 = new TextCustomizable('Widget Career  Title ','ca-home-widget-title-about-2-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-title-about-2',$wp_customize);
        $main_widget_subtitle_about_2 = new TextCustomizable('Widget Career Subtitle','ca-home-widget-subtitle-about-2-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-subtitle-about-2',$wp_customize, 'textarea');
        $main_widget_subtitle_btn_text_2 = new TextCustomizable('Widget Career button  Text','ca-home-widget-btn_text-about-2-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-btn_text-about-2',$wp_customize);
        $main_widget_subtitle_btn_link_2 = new TextCustomizable('Widget Career button  Link','ca-home-widget-btn_link-about-2-control',
        $customizable_element_about->getSectionId(),'ca-home-widget-btn_link-about-2',$wp_customize);

        $this->paintingElements($main_widget_title_about_1,  $main_widget_subtitle_about_1, $main_widget_subtitle_btn_text_1,
                         $main_widget_subtitle_btn_link_1, $main_widget_title_about_2, $main_widget_subtitle_about_2, $main_widget_subtitle_btn_text_2, $main_widget_subtitle_btn_link_2);
       
        
    }
    public function paintingSection (CustomizableInterface $element){
        $element->addSetting();
        $element->addControl();
    }
    public function paintingElements(... $elements){
        foreach ($elements as $element){
            $this->paintingSection($element);
        }
    }
}
