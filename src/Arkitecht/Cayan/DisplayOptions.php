<?php

namespace Arkitecht\Cayan;

class DisplayOptions
{

    /**
     * @var boolean $AlignLeft
     */
    protected $AlignLeft = null;

    /**
     * @var boolean $NoCardNumberMask
     */
    protected $NoCardNumberMask = null;

    /**
     * @var boolean $HideDetails
     */
    protected $HideDetails = null;

    /**
     * @var boolean $HideDowngradeMessage
     */
    protected $HideDowngradeMessage = null;

    /**
     * @var boolean $HideMessage
     */
    protected $HideMessage = null;

    /**
     * @var boolean $HideTooltips
     */
    protected $HideTooltips = null;

    /**
     * @var boolean $UseNativeButtons
     */
    protected $UseNativeButtons = null;

    /**
     * @param boolean $AlignLeft
     * @param boolean $NoCardNumberMask
     * @param boolean $HideDetails
     * @param boolean $HideDowngradeMessage
     * @param boolean $HideMessage
     * @param boolean $HideTooltips
     * @param boolean $UseNativeButtons
     */
    public function __construct($AlignLeft, $NoCardNumberMask, $HideDetails, $HideDowngradeMessage, $HideMessage, $HideTooltips, $UseNativeButtons)
    {
      $this->AlignLeft = $AlignLeft;
      $this->NoCardNumberMask = $NoCardNumberMask;
      $this->HideDetails = $HideDetails;
      $this->HideDowngradeMessage = $HideDowngradeMessage;
      $this->HideMessage = $HideMessage;
      $this->HideTooltips = $HideTooltips;
      $this->UseNativeButtons = $UseNativeButtons;
    }

    /**
     * @return boolean
     */
    public function getAlignLeft()
    {
      return $this->AlignLeft;
    }

    /**
     * @param boolean $AlignLeft
     * @return \Arkitecht\Cayan\DisplayOptions
     */
    public function setAlignLeft($AlignLeft)
    {
      $this->AlignLeft = $AlignLeft;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoCardNumberMask()
    {
      return $this->NoCardNumberMask;
    }

    /**
     * @param boolean $NoCardNumberMask
     * @return \Arkitecht\Cayan\DisplayOptions
     */
    public function setNoCardNumberMask($NoCardNumberMask)
    {
      $this->NoCardNumberMask = $NoCardNumberMask;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideDetails()
    {
      return $this->HideDetails;
    }

    /**
     * @param boolean $HideDetails
     * @return \Arkitecht\Cayan\DisplayOptions
     */
    public function setHideDetails($HideDetails)
    {
      $this->HideDetails = $HideDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideDowngradeMessage()
    {
      return $this->HideDowngradeMessage;
    }

    /**
     * @param boolean $HideDowngradeMessage
     * @return \Arkitecht\Cayan\DisplayOptions
     */
    public function setHideDowngradeMessage($HideDowngradeMessage)
    {
      $this->HideDowngradeMessage = $HideDowngradeMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideMessage()
    {
      return $this->HideMessage;
    }

    /**
     * @param boolean $HideMessage
     * @return \Arkitecht\Cayan\DisplayOptions
     */
    public function setHideMessage($HideMessage)
    {
      $this->HideMessage = $HideMessage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHideTooltips()
    {
      return $this->HideTooltips;
    }

    /**
     * @param boolean $HideTooltips
     * @return \Arkitecht\Cayan\DisplayOptions
     */
    public function setHideTooltips($HideTooltips)
    {
      $this->HideTooltips = $HideTooltips;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseNativeButtons()
    {
      return $this->UseNativeButtons;
    }

    /**
     * @param boolean $UseNativeButtons
     * @return \Arkitecht\Cayan\DisplayOptions
     */
    public function setUseNativeButtons($UseNativeButtons)
    {
      $this->UseNativeButtons = $UseNativeButtons;
      return $this;
    }

}
