<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Edit_Named_Professorship_ResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper for Edit Named Professorship Web Service Response
 * @subpackage Structs
 */
class Edit_Named_Professorship_ResponseType extends AbstractStructBase
{
    /**
     * The Event_Reference
     * Meta information extracted from the WSDL
     * - documentation: Event Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Unique_IdentifierObjectType
     */
    public $Event_Reference;
    /**
     * The Gift_Reference
     * Meta information extracted from the WSDL
     * - documentation: Gift Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\GiftObjectType
     */
    public $Gift_Reference;
    /**
     * The Named_Professorship_Reference
     * Meta information extracted from the WSDL
     * - documentation: Named Professorship Reference
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType
     */
    public $Named_Professorship_Reference;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Edit_Named_Professorship_ResponseType
     * @uses Edit_Named_Professorship_ResponseType::setEvent_Reference()
     * @uses Edit_Named_Professorship_ResponseType::setGift_Reference()
     * @uses Edit_Named_Professorship_ResponseType::setNamed_Professorship_Reference()
     * @uses Edit_Named_Professorship_ResponseType::setVersion()
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $event_Reference
     * @param \WorkdayWsdl\\StructType\GiftObjectType $gift_Reference
     * @param \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference
     * @param string $version
     */
    public function __construct(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $event_Reference = null, \WorkdayWsdl\\StructType\GiftObjectType $gift_Reference = null, \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference = null, $version = null)
    {
        $this
            ->setEvent_Reference($event_Reference)
            ->setGift_Reference($gift_Reference)
            ->setNamed_Professorship_Reference($named_Professorship_Reference)
            ->setVersion($version);
    }
    /**
     * Get Event_Reference value
     * @return \WorkdayWsdl\\StructType\Unique_IdentifierObjectType|null
     */
    public function getEvent_Reference()
    {
        return $this->Event_Reference;
    }
    /**
     * Set Event_Reference value
     * @param \WorkdayWsdl\\StructType\Unique_IdentifierObjectType $event_Reference
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_ResponseType
     */
    public function setEvent_Reference(\WorkdayWsdl\\StructType\Unique_IdentifierObjectType $event_Reference = null)
    {
        $this->Event_Reference = $event_Reference;
        return $this;
    }
    /**
     * Get Gift_Reference value
     * @return \WorkdayWsdl\\StructType\GiftObjectType|null
     */
    public function getGift_Reference()
    {
        return $this->Gift_Reference;
    }
    /**
     * Set Gift_Reference value
     * @param \WorkdayWsdl\\StructType\GiftObjectType $gift_Reference
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_ResponseType
     */
    public function setGift_Reference(\WorkdayWsdl\\StructType\GiftObjectType $gift_Reference = null)
    {
        $this->Gift_Reference = $gift_Reference;
        return $this;
    }
    /**
     * Get Named_Professorship_Reference value
     * @return \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType|null
     */
    public function getNamed_Professorship_Reference()
    {
        return $this->Named_Professorship_Reference;
    }
    /**
     * Set Named_Professorship_Reference value
     * @param \WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_ResponseType
     */
    public function setNamed_Professorship_Reference(\WorkdayWsdl\\StructType\Named_ProfessorshipObjectType $named_Professorship_Reference = null)
    {
        $this->Named_Professorship_Reference = $named_Professorship_Reference;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_ResponseType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Edit_Named_Professorship_ResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
