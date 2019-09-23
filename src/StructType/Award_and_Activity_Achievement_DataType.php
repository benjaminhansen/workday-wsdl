<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Award_and_Activity_Achievement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Award and Activity information.
 * @subpackage Structs
 */
class Award_and_Activity_Achievement_DataType extends AbstractStructBase
{
    /**
     * The Award_and_Activity_ID
     * Meta information extracted from the WSDL
     * - documentation: Award and Activity ID. If no value is provided, a new award and activity will be created. If a value is passed in and a corresponding award and activity is not found, a new award and activity will be created with the provided id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Award_and_Activity_ID;
    /**
     * The Remove_Award_and_Activity
     * Meta information extracted from the WSDL
     * - documentation: Used for inbound operations to indicate that the award and activity should be removed for the role. Will always return false for outbound operations.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Remove_Award_and_Activity;
    /**
     * The Award_and_Activity_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Award and Activity type.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Award_and_Activity_TypeObjectType
     */
    public $Award_and_Activity_Type_Reference;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: Award and Activity Title
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Sponsor_Issuer
     * Meta information extracted from the WSDL
     * - documentation: The authority granting the award and activity. Required unless the award is being removed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Sponsor_Issuer;
    /**
     * The Start_Date
     * Meta information extracted from the WSDL
     * - documentation: Start Date for the Award and Activity.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Start_Date;
    /**
     * The End_Date
     * Meta information extracted from the WSDL
     * - documentation: End date for the Award and Activity
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $End_Date;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Award and Activity description.
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: Award and Activity URL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The Related_Position_Reference
     * Meta information extracted from the WSDL
     * - documentation: Related position reference.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Position_ElementObjectType
     */
    public $Related_Position_Reference;
    /**
     * Constructor method for Award_and_Activity_Achievement_DataType
     * @uses Award_and_Activity_Achievement_DataType::setAward_and_Activity_ID()
     * @uses Award_and_Activity_Achievement_DataType::setRemove_Award_and_Activity()
     * @uses Award_and_Activity_Achievement_DataType::setAward_and_Activity_Type_Reference()
     * @uses Award_and_Activity_Achievement_DataType::setTitle()
     * @uses Award_and_Activity_Achievement_DataType::setSponsor_Issuer()
     * @uses Award_and_Activity_Achievement_DataType::setStart_Date()
     * @uses Award_and_Activity_Achievement_DataType::setEnd_Date()
     * @uses Award_and_Activity_Achievement_DataType::setDescription()
     * @uses Award_and_Activity_Achievement_DataType::setURL()
     * @uses Award_and_Activity_Achievement_DataType::setRelated_Position_Reference()
     * @param string $award_and_Activity_ID
     * @param bool $remove_Award_and_Activity
     * @param \WorkdayWsdl\\StructType\Award_and_Activity_TypeObjectType $award_and_Activity_Type_Reference
     * @param string $title
     * @param string $sponsor_Issuer
     * @param string $start_Date
     * @param string $end_Date
     * @param string $description
     * @param string $uRL
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $related_Position_Reference
     */
    public function __construct($award_and_Activity_ID = null, $remove_Award_and_Activity = null, \WorkdayWsdl\\StructType\Award_and_Activity_TypeObjectType $award_and_Activity_Type_Reference = null, $title = null, $sponsor_Issuer = null, $start_Date = null, $end_Date = null, $description = null, $uRL = null, \WorkdayWsdl\\StructType\Position_ElementObjectType $related_Position_Reference = null)
    {
        $this
            ->setAward_and_Activity_ID($award_and_Activity_ID)
            ->setRemove_Award_and_Activity($remove_Award_and_Activity)
            ->setAward_and_Activity_Type_Reference($award_and_Activity_Type_Reference)
            ->setTitle($title)
            ->setSponsor_Issuer($sponsor_Issuer)
            ->setStart_Date($start_Date)
            ->setEnd_Date($end_Date)
            ->setDescription($description)
            ->setURL($uRL)
            ->setRelated_Position_Reference($related_Position_Reference);
    }
    /**
     * Get Award_and_Activity_ID value
     * @return string|null
     */
    public function getAward_and_Activity_ID()
    {
        return $this->Award_and_Activity_ID;
    }
    /**
     * Set Award_and_Activity_ID value
     * @param string $award_and_Activity_ID
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setAward_and_Activity_ID($award_and_Activity_ID = null)
    {
        // validation for constraint: string
        if (!is_null($award_and_Activity_ID) && !is_string($award_and_Activity_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($award_and_Activity_ID, true), gettype($award_and_Activity_ID)), __LINE__);
        }
        $this->Award_and_Activity_ID = $award_and_Activity_ID;
        return $this;
    }
    /**
     * Get Remove_Award_and_Activity value
     * @return bool|null
     */
    public function getRemove_Award_and_Activity()
    {
        return $this->Remove_Award_and_Activity;
    }
    /**
     * Set Remove_Award_and_Activity value
     * @param bool $remove_Award_and_Activity
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setRemove_Award_and_Activity($remove_Award_and_Activity = null)
    {
        // validation for constraint: boolean
        if (!is_null($remove_Award_and_Activity) && !is_bool($remove_Award_and_Activity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($remove_Award_and_Activity, true), gettype($remove_Award_and_Activity)), __LINE__);
        }
        $this->Remove_Award_and_Activity = $remove_Award_and_Activity;
        return $this;
    }
    /**
     * Get Award_and_Activity_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_TypeObjectType|null
     */
    public function getAward_and_Activity_Type_Reference()
    {
        return $this->Award_and_Activity_Type_Reference;
    }
    /**
     * Set Award_and_Activity_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Award_and_Activity_TypeObjectType $award_and_Activity_Type_Reference
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setAward_and_Activity_Type_Reference(\WorkdayWsdl\\StructType\Award_and_Activity_TypeObjectType $award_and_Activity_Type_Reference = null)
    {
        $this->Award_and_Activity_Type_Reference = $award_and_Activity_Type_Reference;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Sponsor_Issuer value
     * @return string|null
     */
    public function getSponsor_Issuer()
    {
        return $this->Sponsor_Issuer;
    }
    /**
     * Set Sponsor_Issuer value
     * @param string $sponsor_Issuer
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setSponsor_Issuer($sponsor_Issuer = null)
    {
        // validation for constraint: string
        if (!is_null($sponsor_Issuer) && !is_string($sponsor_Issuer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sponsor_Issuer, true), gettype($sponsor_Issuer)), __LINE__);
        }
        $this->Sponsor_Issuer = $sponsor_Issuer;
        return $this;
    }
    /**
     * Get Start_Date value
     * @return string|null
     */
    public function getStart_Date()
    {
        return $this->Start_Date;
    }
    /**
     * Set Start_Date value
     * @param string $start_Date
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setStart_Date($start_Date = null)
    {
        // validation for constraint: string
        if (!is_null($start_Date) && !is_string($start_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_Date, true), gettype($start_Date)), __LINE__);
        }
        $this->Start_Date = $start_Date;
        return $this;
    }
    /**
     * Get End_Date value
     * @return string|null
     */
    public function getEnd_Date()
    {
        return $this->End_Date;
    }
    /**
     * Set End_Date value
     * @param string $end_Date
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setEnd_Date($end_Date = null)
    {
        // validation for constraint: string
        if (!is_null($end_Date) && !is_string($end_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end_Date, true), gettype($end_Date)), __LINE__);
        }
        $this->End_Date = $end_Date;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get Related_Position_Reference value
     * @return \WorkdayWsdl\\StructType\Position_ElementObjectType|null
     */
    public function getRelated_Position_Reference()
    {
        return $this->Related_Position_Reference;
    }
    /**
     * Set Related_Position_Reference value
     * @param \WorkdayWsdl\\StructType\Position_ElementObjectType $related_Position_Reference
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
     */
    public function setRelated_Position_Reference(\WorkdayWsdl\\StructType\Position_ElementObjectType $related_Position_Reference = null)
    {
        $this->Related_Position_Reference = $related_Position_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Award_and_Activity_Achievement_DataType
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
