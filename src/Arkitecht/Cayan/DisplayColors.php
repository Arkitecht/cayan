<?php

namespace Arkitecht\Cayan;

class DisplayColors
{

    /**
     * @var string $ScreenBackgroundColor
     */
    protected $ScreenBackgroundColor = null;

    /**
     * @var string $ContainerBackgroundColor
     */
    protected $ContainerBackgroundColor = null;

    /**
     * @var string $ContainerFontColor
     */
    protected $ContainerFontColor = null;

    /**
     * @var string $ContainerHelpFontColor
     */
    protected $ContainerHelpFontColor = null;

    /**
     * @var string $ContainerBorderColor
     */
    protected $ContainerBorderColor = null;

    /**
     * @var string $LogoBackgroundColor
     */
    protected $LogoBackgroundColor = null;

    /**
     * @var string $LogoBorderColor
     */
    protected $LogoBorderColor = null;

    /**
     * @var string $TooltipBackgroundColor
     */
    protected $TooltipBackgroundColor = null;

    /**
     * @var string $TooltipBorderColor
     */
    protected $TooltipBorderColor = null;

    /**
     * @var string $TooltipFontColor
     */
    protected $TooltipFontColor = null;

    /**
     * @var string $TextboxBackgroundColor
     */
    protected $TextboxBackgroundColor = null;

    /**
     * @var string $TextboxBorderColor
     */
    protected $TextboxBorderColor = null;

    /**
     * @var string $TextboxFocusBackgroundColor
     */
    protected $TextboxFocusBackgroundColor = null;

    /**
     * @var string $TextboxFocusBorderColor
     */
    protected $TextboxFocusBorderColor = null;

    /**
     * @var string $TextboxFontColor
     */
    protected $TextboxFontColor = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getScreenBackgroundColor()
    {
      return $this->ScreenBackgroundColor;
    }

    /**
     * @param string $ScreenBackgroundColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setScreenBackgroundColor($ScreenBackgroundColor)
    {
      $this->ScreenBackgroundColor = $ScreenBackgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerBackgroundColor()
    {
      return $this->ContainerBackgroundColor;
    }

    /**
     * @param string $ContainerBackgroundColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setContainerBackgroundColor($ContainerBackgroundColor)
    {
      $this->ContainerBackgroundColor = $ContainerBackgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerFontColor()
    {
      return $this->ContainerFontColor;
    }

    /**
     * @param string $ContainerFontColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setContainerFontColor($ContainerFontColor)
    {
      $this->ContainerFontColor = $ContainerFontColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerHelpFontColor()
    {
      return $this->ContainerHelpFontColor;
    }

    /**
     * @param string $ContainerHelpFontColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setContainerHelpFontColor($ContainerHelpFontColor)
    {
      $this->ContainerHelpFontColor = $ContainerHelpFontColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerBorderColor()
    {
      return $this->ContainerBorderColor;
    }

    /**
     * @param string $ContainerBorderColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setContainerBorderColor($ContainerBorderColor)
    {
      $this->ContainerBorderColor = $ContainerBorderColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogoBackgroundColor()
    {
      return $this->LogoBackgroundColor;
    }

    /**
     * @param string $LogoBackgroundColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setLogoBackgroundColor($LogoBackgroundColor)
    {
      $this->LogoBackgroundColor = $LogoBackgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogoBorderColor()
    {
      return $this->LogoBorderColor;
    }

    /**
     * @param string $LogoBorderColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setLogoBorderColor($LogoBorderColor)
    {
      $this->LogoBorderColor = $LogoBorderColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTooltipBackgroundColor()
    {
      return $this->TooltipBackgroundColor;
    }

    /**
     * @param string $TooltipBackgroundColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTooltipBackgroundColor($TooltipBackgroundColor)
    {
      $this->TooltipBackgroundColor = $TooltipBackgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTooltipBorderColor()
    {
      return $this->TooltipBorderColor;
    }

    /**
     * @param string $TooltipBorderColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTooltipBorderColor($TooltipBorderColor)
    {
      $this->TooltipBorderColor = $TooltipBorderColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTooltipFontColor()
    {
      return $this->TooltipFontColor;
    }

    /**
     * @param string $TooltipFontColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTooltipFontColor($TooltipFontColor)
    {
      $this->TooltipFontColor = $TooltipFontColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextboxBackgroundColor()
    {
      return $this->TextboxBackgroundColor;
    }

    /**
     * @param string $TextboxBackgroundColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTextboxBackgroundColor($TextboxBackgroundColor)
    {
      $this->TextboxBackgroundColor = $TextboxBackgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextboxBorderColor()
    {
      return $this->TextboxBorderColor;
    }

    /**
     * @param string $TextboxBorderColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTextboxBorderColor($TextboxBorderColor)
    {
      $this->TextboxBorderColor = $TextboxBorderColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextboxFocusBackgroundColor()
    {
      return $this->TextboxFocusBackgroundColor;
    }

    /**
     * @param string $TextboxFocusBackgroundColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTextboxFocusBackgroundColor($TextboxFocusBackgroundColor)
    {
      $this->TextboxFocusBackgroundColor = $TextboxFocusBackgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextboxFocusBorderColor()
    {
      return $this->TextboxFocusBorderColor;
    }

    /**
     * @param string $TextboxFocusBorderColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTextboxFocusBorderColor($TextboxFocusBorderColor)
    {
      $this->TextboxFocusBorderColor = $TextboxFocusBorderColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextboxFontColor()
    {
      return $this->TextboxFontColor;
    }

    /**
     * @param string $TextboxFontColor
     * @return \Arkitecht\Cayan\DisplayColors
     */
    public function setTextboxFontColor($TextboxFontColor)
    {
      $this->TextboxFontColor = $TextboxFontColor;
      return $this;
    }

}
