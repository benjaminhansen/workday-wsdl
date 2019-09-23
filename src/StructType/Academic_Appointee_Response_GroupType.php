<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Appointee_Response_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Academic Appointee Response Group
 * @subpackage Structs
 */
class Academic_Appointee_Response_GroupType extends AbstractStructBase
{
    /**
     * The Include_Reference
     * Meta information extracted from the WSDL
     * - documentation: Academic Appointee Response Group
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Reference;
    /**
     * The Include_Person_Name_Data
     * Meta information extracted from the WSDL
     * - documentation: Include Person Name Data
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Person_Name_Data;
    /**
     * The Include_Person_Identification_Data
     * Meta information extracted from the WSDL
     * - documentation: Include Person Identification Data
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Person_Identification_Data;
    /**
     * The Include_Personal_Information_Data
     * Meta information extracted from the WSDL
     * - documentation: Include Personal Information Data
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Personal_Information_Data;
    /**
     * The Include_Photo_Data
     * Meta information extracted from the WSDL
     * - documentation: Include Photo Data
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Photo_Data;
    /**
     * The Include_Appointment_Data
     * Meta information extracted from the WSDL
     * - documentation: Include Appointment Data
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Appointment_Data;
    /**
     * Constructor method for Academic_Appointee_Response_GroupType
     * @uses Academic_Appointee_Response_GroupType::setInclude_Reference()
     * @uses Academic_Appointee_Response_GroupType::setInclude_Person_Name_Data()
     * @uses Academic_Appointee_Response_GroupType::setInclude_Person_Identification_Data()
     * @uses Academic_Appointee_Response_GroupType::setInclude_Personal_Information_Data()
     * @uses Academic_Appointee_Response_GroupType::setInclude_Photo_Data()
     * @uses Academic_Appointee_Response_GroupType::setInclude_Appointment_Data()
     * @param bool $include_Reference
     * @param bool $include_Person_Name_Data
     * @param bool $include_Person_Identification_Data
     * @param bool $include_Personal_Information_Data
     * @param bool $include_Photo_Data
     * @param bool $include_Appointment_Data
     */
    public function __construct($include_Reference = null, $include_Person_Name_Data = null, $include_Person_Identification_Data = null, $include_Personal_Information_Data = null, $include_Photo_Data = null, $include_Appointment_Data = null)
    {
        $this
            ->setInclude_Reference($include_Reference)
            ->setInclude_Person_Name_Data($include_Person_Name_Data)
            ->setInclude_Person_Identification_Data($include_Person_Identification_Data)
            ->setInclude_Personal_Information_Data($include_Personal_Information_Data)
            ->setInclude_Photo_Data($include_Photo_Data)
            ->setInclude_Appointment_Data($include_Appointment_Data);
    }
    /**
     * Get Include_Reference value
     * @return bool|null
     */
    public function getInclude_Reference()
    {
        return $this->Include_Reference;
    }
    /**
     * Set Include_Reference value
     * @param bool $include_Reference
     * @return \StructType\Academic_Appointee_Response_GroupType
     */
    public function setInclude_Reference($include_Reference = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Reference) && !is_bool($include_Reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Reference, true), gettype($include_Reference)), __LINE__);
        }
        $this->Include_Reference = $include_Reference;
        return $this;
    }
    /**
     * Get Include_Person_Name_Data value
     * @return bool|null
     */
    public function getInclude_Person_Name_Data()
    {
        return $this->Include_Person_Name_Data;
    }
    /**
     * Set Include_Person_Name_Data value
     * @param bool $include_Person_Name_Data
     * @return \StructType\Academic_Appointee_Response_GroupType
     */
    public function setInclude_Person_Name_Data($include_Person_Name_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Person_Name_Data) && !is_bool($include_Person_Name_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Person_Name_Data, true), gettype($include_Person_Name_Data)), __LINE__);
        }
        $this->Include_Person_Name_Data = $include_Person_Name_Data;
        return $this;
    }
    /**
     * Get Include_Person_Identification_Data value
     * @return bool|null
     */
    public function getInclude_Person_Identification_Data()
    {
        return $this->Include_Person_Identification_Data;
    }
    /**
     * Set Include_Person_Identification_Data value
     * @param bool $include_Person_Identification_Data
     * @return \StructType\Academic_Appointee_Response_GroupType
     */
    public function setInclude_Person_Identification_Data($include_Person_Identification_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Person_Identification_Data) && !is_bool($include_Person_Identification_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Person_Identification_Data, true), gettype($include_Person_Identification_Data)), __LINE__);
        }
        $this->Include_Person_Identification_Data = $include_Person_Identification_Data;
        return $this;
    }
    /**
     * Get Include_Personal_Information_Data value
     * @return bool|null
     */
    public function getInclude_Personal_Information_Data()
    {
        return $this->Include_Personal_Information_Data;
    }
    /**
     * Set Include_Personal_Information_Data value
     * @param bool $include_Personal_Information_Data
     * @return \StructType\Academic_Appointee_Response_GroupType
     */
    public function setInclude_Personal_Information_Data($include_Personal_Information_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Personal_Information_Data) && !is_bool($include_Personal_Information_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Personal_Information_Data, true), gettype($include_Personal_Information_Data)), __LINE__);
        }
        $this->Include_Personal_Information_Data = $include_Personal_Information_Data;
        return $this;
    }
    /**
     * Get Include_Photo_Data value
     * @return bool|null
     */
    public function getInclude_Photo_Data()
    {
        return $this->Include_Photo_Data;
    }
    /**
     * Set Include_Photo_Data value
     * @param bool $include_Photo_Data
     * @return \StructType\Academic_Appointee_Response_GroupType
     */
    public function setInclude_Photo_Data($include_Photo_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Photo_Data) && !is_bool($include_Photo_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Photo_Data, true), gettype($include_Photo_Data)), __LINE__);
        }
        $this->Include_Photo_Data = $include_Photo_Data;
        return $this;
    }
    /**
     * Get Include_Appointment_Data value
     * @return bool|null
     */
    public function getInclude_Appointment_Data()
    {
        return $this->Include_Appointment_Data;
    }
    /**
     * Set Include_Appointment_Data value
     * @param bool $include_Appointment_Data
     * @return \StructType\Academic_Appointee_Response_GroupType
     */
    public function setInclude_Appointment_Data($include_Appointment_Data = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Appointment_Data) && !is_bool($include_Appointment_Data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Appointment_Data, true), gettype($include_Appointment_Data)), __LINE__);
        }
        $this->Include_Appointment_Data = $include_Appointment_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Academic_Appointee_Response_GroupType
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
