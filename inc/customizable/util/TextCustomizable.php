<?php

namespace Casautomotive\customizable\util;
use Casautomotive\customizable\util\CustomizableInterface;
use WP_Customize_Control;
use WP_Customize_Manager;

class TextCustomizable implements CustomizableInterface
{

    private $label;
    private $control_id;
    private $settings;
    private $section_id;
    private $customize;
    private $type;


    /**
     * TextCustomizable constructor.
     * @param $label
     * @param $control_id
     * @param $section_id
     * @param $setting
     * @param WP_Customize_Manager $customize
     * @param $type
     */
    public function __construct($label,$control_id,$section_id,$setting,WP_Customize_Manager $customize,$type = 'text')
    {
        $this->customize = $customize;
        $this->label= $label;
        $this->control_id = $control_id;
        $this->section_id = $section_id;
        $this->settings = $setting;
        $this->type= $type;


    }

    public function addSetting()
    {
        $this->customize->add_setting($this->settings);

    }

    public function addControl()
    {

        $this->customize->add_control(new WP_Customize_Control($this->customize, $this->control_id, array(
            'label'=>$this->label,
            'section'=> $this->section_id,
             'settings'=> $this->settings,
            'type'=>$this->type
        )));


    }


}