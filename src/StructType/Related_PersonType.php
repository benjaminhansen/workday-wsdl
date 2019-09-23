<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Related_PersonType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Related Person data.
 * @subpackage Structs
 */
class Related_PersonType extends AbstractStructBase
{
    /**
     * The Related_Person_Relationship_Reference
     * Meta information extracted from the WSDL
     * - documentation: A reference to the related person relationship.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Related_Person_RelationshipObjectType[]
     */
    public $Related_Person_Relationship_Reference;
    /**
     * The Person_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the Related Person.
     * - minOccurs: 0
     * @var \StructType\Unique_IdentifierObjectType
     */
    public $Person_Reference;
    /**
     * The Personal_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Personal_Information_DataType
     */
    public $Personal_Data;
    /**
     * The Dependent
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Dependent data.
     * - minOccurs: 0
     * @var \StructType\DependentType
     */
    public $Dependent;
    /**
     * The Beneficiary
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Beneficiary data.
     * - minOccurs: 0
     * @var \StructType\BeneficiaryType
     */
    public $Beneficiary;
    /**
     * The Emergency_Contact
     * Meta information extracted from the WSDL
     * - documentation: Encapsulating element containing all Emergency Contact data.
     * - minOccurs: 0
     * @var \StructType\Old_Emergency_ContactType
     */
    public $Emergency_Contact;
    /**
     * Constructor method for Related_PersonType
     * @uses Related_PersonType::setRelated_Person_Relationship_Reference()
     * @uses Related_PersonType::setPerson_Reference()
     * @uses Related_PersonType::setPersonal_Data()
     * @uses Related_PersonType::setDependent()
     * @uses Related_PersonType::setBeneficiary()
     * @uses Related_PersonType::setEmergency_Contact()
     * @param \StructType\Related_Person_RelationshipObjectType[] $related_Person_Relationship_Reference
     * @param \StructType\Unique_IdentifierObjectType $person_Reference
     * @param \StructType\Personal_Information_DataType $personal_Data
     * @param \StructType\DependentType $dependent
     * @param \StructType\BeneficiaryType $beneficiary
     * @param \StructType\Old_Emergency_ContactType $emergency_Contact
     */
    public function __construct(array $related_Person_Relationship_Reference = array(), \StructType\Unique_IdentifierObjectType $person_Reference = null, \StructType\Personal_Information_DataType $personal_Data = null, \StructType\DependentType $dependent = null, \StructType\BeneficiaryType $beneficiary = null, \StructType\Old_Emergency_ContactType $emergency_Contact = null)
    {
        $this
            ->setRelated_Person_Relationship_Reference($related_Person_Relationship_Reference)
            ->setPerson_Reference($person_Reference)
            ->setPersonal_Data($personal_Data)
            ->setDependent($dependent)
            ->setBeneficiary($beneficiary)
            ->setEmergency_Contact($emergency_Contact);
    }
    /**
     * Get Related_Person_Relationship_Reference value
     * @return \StructType\Related_Person_RelationshipObjectType[]|null
     */
    public function getRelated_Person_Relationship_Reference()
    {
        return $this->Related_Person_Relationship_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setRelated_Person_Relationship_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRelated_Person_Relationship_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRelated_Person_Relationship_ReferenceForArrayConstraintsFromSetRelated_Person_Relationship_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $related_PersonTypeRelated_Person_Relationship_ReferenceItem) {
            // validation for constraint: itemType
            if (!$related_PersonTypeRelated_Person_Relationship_ReferenceItem instanceof \StructType\Related_Person_RelationshipObjectType) {
                $invalidValues[] = is_object($related_PersonTypeRelated_Person_Relationship_ReferenceItem) ? get_class($related_PersonTypeRelated_Person_Relationship_ReferenceItem) : sprintf('%s(%s)', gettype($related_PersonTypeRelated_Person_Relationship_ReferenceItem), var_export($related_PersonTypeRelated_Person_Relationship_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Related_Person_Relationship_Reference property can only contain items of type \StructType\Related_Person_RelationshipObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Related_Person_Relationship_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Related_Person_RelationshipObjectType[] $related_Person_Relationship_Reference
     * @return \StructType\Related_PersonType
     */
    public function setRelated_Person_Relationship_Reference(array $related_Person_Relationship_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($related_Person_Relationship_ReferenceArrayErrorMessage = self::validateRelated_Person_Relationship_ReferenceForArrayConstraintsFromSetRelated_Person_Relationship_Reference($related_Person_Relationship_Reference))) {
            throw new \InvalidArgumentException($related_Person_Relationship_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Related_Person_Relationship_Reference = $related_Person_Relationship_Reference;
        return $this;
    }
    /**
     * Add item to Related_Person_Relationship_Reference value
     * @throws \InvalidArgumentException
     * @param \StructType\Related_Person_RelationshipObjectType $item
     * @return \StructType\Related_PersonType
     */
    public function addToRelated_Person_Relationship_Reference(\StructType\Related_Person_RelationshipObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Related_Person_RelationshipObjectType) {
            throw new \InvalidArgumentException(sprintf('The Related_Person_Relationship_Reference property can only contain items of type \StructType\Related_Person_RelationshipObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Related_Person_Relationship_Reference[] = $item;
        return $this;
    }
    /**
     * Get Person_Reference value
     * @return \StructType\Unique_IdentifierObjectType|null
     */
    public function getPerson_Reference()
    {
        return $this->Person_Reference;
    }
    /**
     * Set Person_Reference value
     * @param \StructType\Unique_IdentifierObjectType $person_Reference
     * @return \StructType\Related_PersonType
     */
    public function setPerson_Reference(\StructType\Unique_IdentifierObjectType $person_Reference = null)
    {
        $this->Person_Reference = $person_Reference;
        return $this;
    }
    /**
     * Get Personal_Data value
     * @return \StructType\Personal_Information_DataType|null
     */
    public function getPersonal_Data()
    {
        return $this->Personal_Data;
    }
    /**
     * Set Personal_Data value
     * @param \StructType\Personal_Information_DataType $personal_Data
     * @return \StructType\Related_PersonType
     */
    public function setPersonal_Data(\StructType\Personal_Information_DataType $personal_Data = null)
    {
        $this->Personal_Data = $personal_Data;
        return $this;
    }
    /**
     * Get Dependent value
     * @return \StructType\DependentType|null
     */
    public function getDependent()
    {
        return $this->Dependent;
    }
    /**
     * Set Dependent value
     * @param \StructType\DependentType $dependent
     * @return \StructType\Related_PersonType
     */
    public function setDependent(\StructType\DependentType $dependent = null)
    {
        $this->Dependent = $dependent;
        return $this;
    }
    /**
     * Get Beneficiary value
     * @return \StructType\BeneficiaryType|null
     */
    public function getBeneficiary()
    {
        return $this->Beneficiary;
    }
    /**
     * Set Beneficiary value
     * @param \StructType\BeneficiaryType $beneficiary
     * @return \StructType\Related_PersonType
     */
    public function setBeneficiary(\StructType\BeneficiaryType $beneficiary = null)
    {
        $this->Beneficiary = $beneficiary;
        return $this;
    }
    /**
     * Get Emergency_Contact value
     * @return \StructType\Old_Emergency_ContactType|null
     */
    public function getEmergency_Contact()
    {
        return $this->Emergency_Contact;
    }
    /**
     * Set Emergency_Contact value
     * @param \StructType\Old_Emergency_ContactType $emergency_Contact
     * @return \StructType\Related_PersonType
     */
    public function setEmergency_Contact(\StructType\Old_Emergency_ContactType $emergency_Contact = null)
    {
        $this->Emergency_Contact = $emergency_Contact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Related_PersonType
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
