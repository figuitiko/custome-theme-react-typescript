<?php
namespace Casautomotive\customizable\util;

use Casautomotive\customizable\util\CustomizableInterface;
use WP_Customize_Cropped_Image_Control;
use WP_Customize_Manager;

class ImgCustomizable implements  CustomizableInterface
{

    private $label;
    private $control_id;
    private $settings;
    private $section_id;
    private $width;
    private $height;
    private $customize;
    /**
     * ImgCustomizable constructor.
     * @param $label
     * @param $control_id
     * @param $settings
     * @param $section_id
     * @param WP_Customize_Manager $customize
     */
    public function __construct($label, $control_id, $settings, $section_id, WP_Customize_Manager $customize,$width=750,$height =500)
    {
        $this->label = $label;
        $this->control_id = $control_id;
        $this->settings = $settings;
        $this->section_id = $section_id;
        $this->width = $width;
        $this->height = $height;
        $this->customize = $customize;
    }


    public function addSetting()
    {
        $this->customize->add_setting($this->settings);
    }

    public function addControl()
    {
        // TODO: Implement addControl() method.

        $this->customize->add_control( new WP_Customize_Cropped_Image_Control( $this->customize, $this->control_id, array(
            'label' => $this->label,
            'section' => $this->section_id,
            'settings' => $this->settings,
            'width' => $this->width,
            'height' => $this->height
        )));
    }
}