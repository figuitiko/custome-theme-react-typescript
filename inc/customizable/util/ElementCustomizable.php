<?php

namespace Casautomotive\customizable\util;

use WP_Customize_Manager;

class ElementCustomizable
{

    private $section_id;
    private $panel_id;
    private  $customize;

    /**
     * ElementCustomizable constructor.
     * @param WP_Customize_Manager $customize
     * @param $section_id
     * @param null $panel_id
     */
    public function __construct( WP_Customize_Manager $customize, $section_id, $panel_id =null)
    {
        $this->customize = $customize;
        $this->section_id = $section_id;
        $this->panel_id = $panel_id;
    }

    /**
     * @return WP_Customize_Manager
     */
    public function getCustomize(): WP_Customize_Manager
    {
        return $this->customize;
    }

    /**
     * @return mixed
     */
    public function getSectionId()
    {
        return $this->section_id;
    }

    public  function add_panel($title, $description){

        $this->getCustomize()->add_panel(
          $this->panel_id, [
              'title'=> __($title),
              'description'=> esc_html__($description)
            ]
        );

    }


    public function add_section($title){

        $this->getCustomize()->add_section($this->getSectionId(),array(
           'title' => $title,
            'panel' =>$this->panel_id
        ));

        }



}