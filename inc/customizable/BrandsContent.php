<?php
namespace Casautomotive\customizable;
use Casautomotive\customizable\util\CustomizableInterface;
use Casautomotive\customizable\util\ElementCustomizable;
use Casautomotive\customizable\util\ImgCustomizable;
use Casautomotive\customizable\util\TextCustomizable;
use WP_Customize_Manager;

class BrandsContent
{
    


    public function __construct()
    {
        add_action('customize_register', array( $this, 'customizeRegister'));
        add_action('customize_register', array( $this, 'customizeRegisterBrandWidget'));
        // add_action('customize_register', array( $this, 'customizeRegisterMissionWidget'));
        // add_action('customize_register', array( $this, 'customizeRegisterBrandWidget'));
        // add_action('customize_register', array( $this, 'customizeRegisterbrand'));
    }
    public  function customizeRegister( WP_Customize_Manager $wp_customize){
        $customizable_element= new ElementCustomizable($wp_customize, 'ca-brand-widget-section','brand_page_sections');
        $customizable_element->add_panel('brand Page Section', 'Adjust your brand.');

    }
    
    public function customizeRegisterBrandWidget(WP_Customize_Manager $wp_customize){

        $customizable_element_brand= new ElementCustomizable($wp_customize, 'ca-brand-widget-section','brand_page_sections');
        $customizable_element_brand->add_section('Brand widget Section');
        $widget_icon = new ImgCustomizable('Image icon 1', 'brand-page-icon-control', 'brand-page-icon',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_feature_img = new ImgCustomizable('Image Feature 1', 'brand-page-image-control', 'brand-page-image',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_subtitle = new TextCustomizable('Widget Title 1','brand-page-widget-subtitle-control',$customizable_element_brand->getSectionId(),'brand-page-widget-subtitle',$wp_customize);
        $widget_text = new TextCustomizable('Widget Text 1','brand-page-widget-text-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-text',$wp_customize,'textarea');
        $widget_link = new TextCustomizable('Widget Link 1','brand-page-widget-link-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link',$wp_customize);
        $widget_link_text = new TextCustomizable('Widget link text 1','brand-page-widget-link-text-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link-text',$wp_customize);
        $widget_icon_1 = new ImgCustomizable('Image icon 2', 'brand-page-icon-1-control', 'brand-page-icon-1',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_feature_img_1 = new ImgCustomizable('Image Feature 2', 'brand-page-image-1-control', 'brand-page-1-image',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_subtitle_1 = new TextCustomizable('Widget Title 2','brand-page-widget-subtitle-1-control',$customizable_element_brand->getSectionId(),'brand-page-widget-subtitle-1',$wp_customize);
        $widget_text_1 = new TextCustomizable('Widget Text 2','brand-page-widget-text-1-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-text-1',$wp_customize,'textarea'); 
        $widget_link_1 = new TextCustomizable('Widget Link 2','brand-page-widget-link-1-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link-1',$wp_customize);
        $widget_link_text_1 = new TextCustomizable('Widget link text 2','brand-page-widget-link-text-1-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link-text-1',$wp_customize);
        $widget_icon_2 = new ImgCustomizable('Image icon 3', 'brand-page-icon-2-control', 'brand-page-icon-2',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_feature_img_2 = new ImgCustomizable('Image Feature 3', 'brand-page-image-2-control', 'brand-page-2-image',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_subtitle_2 = new TextCustomizable('Widget Title 3','brand-page-widget-subtitle-2-control',$customizable_element_brand->getSectionId(),'brand-page-widget-subtitle-2',$wp_customize);
        $widget_text_2 = new TextCustomizable('Widget Text 3','brand-page-widget-text-2-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-text-2',$wp_customize, 'textarea');      
        $widget_link_2 = new TextCustomizable('Widget Link 3','brand-page-widget-link-2-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link-2',$wp_customize);
        $widget_link_text_2 = new TextCustomizable('Widget link text 3','brand-page-widget-link-text-2-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link-text-2',$wp_customize);
        $widget_icon_3 = new ImgCustomizable('Image icon 4', 'brand-page-icon-3-control', 'brand-page-icon-3',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_feature_img_3 = new ImgCustomizable('Image Feature 4', 'brand-page-image-3-control', 'brand-page-3-image',$customizable_element_brand->getSectionId(), $wp_customize);
        $widget_subtitle_3 = new TextCustomizable('Widget Title 4','brand-page-widget-subtitle-3-control',$customizable_element_brand->getSectionId(),'brand-page-widget-subtitle-3',$wp_customize);
        $widget_text_3 = new TextCustomizable('Widget Text 4','brand-page-widget-text-3-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-text-3',$wp_customize, 'textarea');
        $widget_link_3 = new TextCustomizable('Widget Link 4','brand-page-widget-link-3-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link-3',$wp_customize);
        $widget_link_text_3 = new TextCustomizable('Widget link text 3','brand-page-widget-link-text-3-control',  $customizable_element_brand->getSectionId(),'brand-page-widget-link-text-3',$wp_customize);
        $this->paintingElements( $widget_icon, $widget_feature_img, $widget_subtitle, $widget_text,$widget_link,$widget_link_text,
                            $widget_icon_1, $widget_feature_img_1, $widget_subtitle_1, $widget_text_1,$widget_link_1,$widget_link_text_1,
                            $widget_icon_2, $widget_feature_img_2, $widget_subtitle_2,  $widget_text_2,$widget_link_2,$widget_link_text_2,
                            $widget_icon_3, $widget_feature_img_3, $widget_subtitle_3, $widget_text_3, $widget_link_3,$widget_link_text_3);
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
