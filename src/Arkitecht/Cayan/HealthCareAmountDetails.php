<?php

namespace Arkitecht\Cayan;

class HealthCareAmountDetails
{

    /**
     * @var float $CopayAmount
     */
    protected $CopayAmount = null;

    /**
     * @var float $ClinicalAmount
     */
    protected $ClinicalAmount = null;

    /**
     * @var float $DentalAmount
     */
    protected $DentalAmount = null;

    /**
     * @var float $HealthCareTotalAmount
     */
    protected $HealthCareTotalAmount = null;

    /**
     * @var float $PrescriptionAmount
     */
    protected $PrescriptionAmount = null;

    /**
     * @var float $VisionAmount
     */
    protected $VisionAmount = null;

    /**
     * @param float $CopayAmount
     * @param float $ClinicalAmount
     * @param float $DentalAmount
     * @param float $HealthCareTotalAmount
     * @param float $PrescriptionAmount
     * @param float $VisionAmount
     */
    public function __construct($CopayAmount, $ClinicalAmount, $DentalAmount, $HealthCareTotalAmount, $PrescriptionAmount, $VisionAmount)
    {
      $this->CopayAmount = $CopayAmount;
      $this->ClinicalAmount = $ClinicalAmount;
      $this->DentalAmount = $DentalAmount;
      $this->HealthCareTotalAmount = $HealthCareTotalAmount;
      $this->PrescriptionAmount = $PrescriptionAmount;
      $this->VisionAmount = $VisionAmount;
    }

    /**
     * @return float
     */
    public function getCopayAmount()
    {
      return $this->CopayAmount;
    }

    /**
     * @param float $CopayAmount
     * @return \Arkitecht\Cayan\HealthCareAmountDetails
     */
    public function setCopayAmount($CopayAmount)
    {
      $this->CopayAmount = $CopayAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getClinicalAmount()
    {
      return $this->ClinicalAmount;
    }

    /**
     * @param float $ClinicalAmount
     * @return \Arkitecht\Cayan\HealthCareAmountDetails
     */
    public function setClinicalAmount($ClinicalAmount)
    {
      $this->ClinicalAmount = $ClinicalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getDentalAmount()
    {
      return $this->DentalAmount;
    }

    /**
     * @param float $DentalAmount
     * @return \Arkitecht\Cayan\HealthCareAmountDetails
     */
    public function setDentalAmount($DentalAmount)
    {
      $this->DentalAmount = $DentalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getHealthCareTotalAmount()
    {
      return $this->HealthCareTotalAmount;
    }

    /**
     * @param float $HealthCareTotalAmount
     * @return \Arkitecht\Cayan\HealthCareAmountDetails
     */
    public function setHealthCareTotalAmount($HealthCareTotalAmount)
    {
      $this->HealthCareTotalAmount = $HealthCareTotalAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrescriptionAmount()
    {
      return $this->PrescriptionAmount;
    }

    /**
     * @param float $PrescriptionAmount
     * @return \Arkitecht\Cayan\HealthCareAmountDetails
     */
    public function setPrescriptionAmount($PrescriptionAmount)
    {
      $this->PrescriptionAmount = $PrescriptionAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getVisionAmount()
    {
      return $this->VisionAmount;
    }

    /**
     * @param float $VisionAmount
     * @return \Arkitecht\Cayan\HealthCareAmountDetails
     */
    public function setVisionAmount($VisionAmount)
    {
      $this->VisionAmount = $VisionAmount;
      return $this;
    }

}
