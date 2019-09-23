<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Related_Person_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Gender Description and Date of Birth are required for Dependents. | The Integration ID Data sub elements of Beneficiary Data, Emergency Contact Data, External Contact Data, and Dependent Data must not reference the same Person. |
 * Encapsulating element containing all Related Person data.
 * @subpackage Structs
 */
class Related_Person_DataType extends AbstractStructBase
{
    /**
     * The Related_Person_Descriptor_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Related_Person_Descriptor_DataType
     */
    public $Related_Person_Descriptor_Data;
    /**
     * The Person_Data
     * @var \WorkdayWsdl\\StructType\Person_DataType
     */
    public $Person_Data;
    /**
     * The External_Contact_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_Contact_DataType
     */
    public $External_Contact_Data;
    /**
     * The Emergency_Contact_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType
     */
    public $Emergency_Contact_Data;
    /**
     * The Beneficiary_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType
     */
    public $Beneficiary_Data;
    /**
     * The Dependent_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Dependent_Data_WWSType
     */
    public $Dependent_Data;
    /**
     * Constructor method for Related_Person_DataType
     * @uses Related_Person_DataType::setRelated_Person_Descriptor_Data()
     * @uses Related_Person_DataType::setPerson_Data()
     * @uses Related_Person_DataType::setExternal_Contact_Data()
     * @uses Related_Person_DataType::setEmergency_Contact_Data()
     * @uses Related_Person_DataType::setBeneficiary_Data()
     * @uses Related_Person_DataType::setDependent_Data()
     * @param \WorkdayWsdl\\StructType\Related_Person_Descriptor_DataType $related_Person_Descriptor_Data
     * @param \WorkdayWsdl\\StructType\Person_DataType $person_Data
     * @param \WorkdayWsdl\\StructType\External_Contact_DataType $external_Contact_Data
     * @param \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType $emergency_Contact_Data
     * @param \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType $beneficiary_Data
     * @param \WorkdayWsdl\\StructType\Dependent_Data_WWSType $dependent_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Related_Person_Descriptor_DataType $related_Person_Descriptor_Data = null, \WorkdayWsdl\\StructType\Person_DataType $person_Data = null, \WorkdayWsdl\\StructType\External_Contact_DataType $external_Contact_Data = null, \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType $emergency_Contact_Data = null, \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType $beneficiary_Data = null, \WorkdayWsdl\\StructType\Dependent_Data_WWSType $dependent_Data = null)
    {
        $this
            ->setRelated_Person_Descriptor_Data($related_Person_Descriptor_Data)
            ->setPerson_Data($person_Data)
            ->setExternal_Contact_Data($external_Contact_Data)
            ->setEmergency_Contact_Data($emergency_Contact_Data)
            ->setBeneficiary_Data($beneficiary_Data)
            ->setDependent_Data($dependent_Data);
    }
    /**
     * Get Related_Person_Descriptor_Data value
     * @return \WorkdayWsdl\\StructType\Related_Person_Descriptor_DataType|null
     */
    public function getRelated_Person_Descriptor_Data()
    {
        return $this->Related_Person_Descriptor_Data;
    }
    /**
     * Set Related_Person_Descriptor_Data value
     * @param \WorkdayWsdl\\StructType\Related_Person_Descriptor_DataType $related_Person_Descriptor_Data
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType
     */
    public function setRelated_Person_Descriptor_Data(\WorkdayWsdl\\StructType\Related_Person_Descriptor_DataType $related_Person_Descriptor_Data = null)
    {
        $this->Related_Person_Descriptor_Data = $related_Person_Descriptor_Data;
        return $this;
    }
    /**
     * Get Person_Data value
     * @return \WorkdayWsdl\\StructType\Person_DataType|null
     */
    public function getPerson_Data()
    {
        return $this->Person_Data;
    }
    /**
     * Set Person_Data value
     * @param \WorkdayWsdl\\StructType\Person_DataType $person_Data
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType
     */
    public function setPerson_Data(\WorkdayWsdl\\StructType\Person_DataType $person_Data = null)
    {
        $this->Person_Data = $person_Data;
        return $this;
    }
    /**
     * Get External_Contact_Data value
     * @return \WorkdayWsdl\\StructType\External_Contact_DataType|null
     */
    public function getExternal_Contact_Data()
    {
        return $this->External_Contact_Data;
    }
    /**
     * Set External_Contact_Data value
     * @param \WorkdayWsdl\\StructType\External_Contact_DataType $external_Contact_Data
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType
     */
    public function setExternal_Contact_Data(\WorkdayWsdl\\StructType\External_Contact_DataType $external_Contact_Data = null)
    {
        $this->External_Contact_Data = $external_Contact_Data;
        return $this;
    }
    /**
     * Get Emergency_Contact_Data value
     * @return \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType|null
     */
    public function getEmergency_Contact_Data()
    {
        return $this->Emergency_Contact_Data;
    }
    /**
     * Set Emergency_Contact_Data value
     * @param \WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType $emergency_Contact_Data
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType
     */
    public function setEmergency_Contact_Data(\WorkdayWsdl\\StructType\Emergency_Contact_Data_WWSType $emergency_Contact_Data = null)
    {
        $this->Emergency_Contact_Data = $emergency_Contact_Data;
        return $this;
    }
    /**
     * Get Beneficiary_Data value
     * @return \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType|null
     */
    public function getBeneficiary_Data()
    {
        return $this->Beneficiary_Data;
    }
    /**
     * Set Beneficiary_Data value
     * @param \WorkdayWsdl\\StructType\Beneficiary_Data_WWSType $beneficiary_Data
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType
     */
    public function setBeneficiary_Data(\WorkdayWsdl\\StructType\Beneficiary_Data_WWSType $beneficiary_Data = null)
    {
        $this->Beneficiary_Data = $beneficiary_Data;
        return $this;
    }
    /**
     * Get Dependent_Data value
     * @return \WorkdayWsdl\\StructType\Dependent_Data_WWSType|null
     */
    public function getDependent_Data()
    {
        return $this->Dependent_Data;
    }
    /**
     * Set Dependent_Data value
     * @param \WorkdayWsdl\\StructType\Dependent_Data_WWSType $dependent_Data
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType
     */
    public function setDependent_Data(\WorkdayWsdl\\StructType\Dependent_Data_WWSType $dependent_Data = null)
    {
        $this->Dependent_Data = $dependent_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Related_Person_DataType
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
