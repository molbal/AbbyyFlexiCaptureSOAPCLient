<?php

namespace AbbyyBridge\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @package Abbyy
 * @subpackage Services
 */
class AbbyyGet extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetSessionInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetSessionInfo $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetSessionInfoResponse|bool
     */
    public function GetSessionInfo(\AbbyyBridge\StructType\AbbyyGetSessionInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSessionInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjects
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetProjects $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsResponse|bool
     */
    public function GetProjects(\AbbyyBridge\StructType\AbbyyGetProjects $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetProjects($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectsForUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetProjectsForUser $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForUserResponse|bool
     */
    public function GetProjectsForUser(\AbbyyBridge\StructType\AbbyyGetProjectsForUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetProjectsForUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProjectsForStationType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetProjectsForStationType $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetProjectsForStationTypeResponse|bool
     */
    public function GetProjectsForStationType(\AbbyyBridge\StructType\AbbyyGetProjectsForStationType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetProjectsForStationType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetProcessingStages
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetProcessingStages $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetProcessingStagesResponse|bool
     */
    public function GetProcessingStages(\AbbyyBridge\StructType\AbbyyGetProcessingStages $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetProcessingStages($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetTemplates $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetTemplatesResponse|bool
     */
    public function GetTemplates(\AbbyyBridge\StructType\AbbyyGetTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBatchTypeTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetBatchTypeTemplates $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypeTemplatesResponse|bool
     */
    public function GetBatchTypeTemplates(\AbbyyBridge\StructType\AbbyyGetBatchTypeTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBatchTypeTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBatchTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetBatchTypes $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypesResponse|bool
     */
    public function GetBatchTypes(\AbbyyBridge\StructType\AbbyyGetBatchTypes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBatchTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllowedBatchTypes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetAllowedBatchTypes $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetAllowedBatchTypesResponse|bool
     */
    public function GetAllowedBatchTypes(\AbbyyBridge\StructType\AbbyyGetAllowedBatchTypes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAllowedBatchTypes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBatchIdsRange
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetBatchIdsRange $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetBatchIdsRangeResponse|bool
     */
    public function GetBatchIdsRange(\AbbyyBridge\StructType\AbbyyGetBatchIdsRange $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBatchIdsRange($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBatchPercentCompleted
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetBatchPercentCompleted $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetBatchPercentCompletedResponse|bool
     */
    public function GetBatchPercentCompleted(\AbbyyBridge\StructType\AbbyyGetBatchPercentCompleted $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBatchPercentCompleted($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetDocuments $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetDocumentsResponse|bool
     */
    public function GetDocuments(\AbbyyBridge\StructType\AbbyyGetDocuments $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDocuments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDocumentResultsList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetDocumentResultsList $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetDocumentResultsListResponse|bool
     */
    public function GetDocumentResultsList(\AbbyyBridge\StructType\AbbyyGetDocumentResultsList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDocumentResultsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBatchType
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetBatchType $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetBatchTypeResponse|bool
     */
    public function GetBatchType(\AbbyyBridge\StructType\AbbyyGetBatchType $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBatchType($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBatches
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetBatches $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetBatchesResponse|bool
     */
    public function GetBatches(\AbbyyBridge\StructType\AbbyyGetBatches $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBatches($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFilteredBatches
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetFilteredBatches $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetFilteredBatchesResponse|bool
     */
    public function GetFilteredBatches(\AbbyyBridge\StructType\AbbyyGetFilteredBatches $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFilteredBatches($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetBatch $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetBatchResponse|bool
     */
    public function GetBatch(\AbbyyBridge\StructType\AbbyyGetBatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDocument
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetDocument $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetDocumentResponse|bool
     */
    public function GetDocument(\AbbyyBridge\StructType\AbbyyGetDocument $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDocument($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCustomFileNames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetCustomFileNames $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetCustomFileNamesResponse|bool
     */
    public function GetCustomFileNames(\AbbyyBridge\StructType\AbbyyGetCustomFileNames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCustomFileNames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAttachmentNames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetAttachmentNames $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetAttachmentNamesResponse|bool
     */
    public function GetAttachmentNames(\AbbyyBridge\StructType\AbbyyGetAttachmentNames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAttachmentNames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetAvailableTasks $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableTasksResponse|bool
     */
    public function GetAvailableTasks(\AbbyyBridge\StructType\AbbyyGetAvailableTasks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailableTasks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableTasksByStageId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageIdResponse|bool
     */
    public function GetAvailableTasksByStageId(\AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailableTasksByStageId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTaskInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetTaskInfo $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetTaskInfoResponse|bool
     */
    public function GetTaskInfo(\AbbyyBridge\StructType\AbbyyGetTaskInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTaskInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetTask $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetTaskResponse|bool
     */
    public function GetTask(\AbbyyBridge\StructType\AbbyyGetTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTaskByStageId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetTaskByStageId $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetTaskByStageIdResponse|bool
     */
    public function GetTaskByStageId(\AbbyyBridge\StructType\AbbyyGetTaskByStageId $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTaskByStageId($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCurrentTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetCurrentTask $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetCurrentTaskResponse|bool
     */
    public function GetCurrentTask(\AbbyyBridge\StructType\AbbyyGetCurrentTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCurrentTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTaskDocuments
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetTaskDocuments $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetTaskDocumentsResponse|bool
     */
    public function GetTaskDocuments(\AbbyyBridge\StructType\AbbyyGetTaskDocuments $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTaskDocuments($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPostponedTasks
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetPostponedTasks $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetPostponedTasksResponse|bool
     */
    public function GetPostponedTasks(\AbbyyBridge\StructType\AbbyyGetPostponedTasks $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPostponedTasks($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNewTicket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetNewTicket $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetNewTicketResponse|bool
     */
    public function GetNewTicket(\AbbyyBridge\StructType\AbbyyGetNewTicket $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNewTicket($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSettingValue
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetSettingValue $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetSettingValueResponse|bool
     */
    public function GetSettingValue(\AbbyyBridge\StructType\AbbyyGetSettingValue $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSettingValue($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetUser $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetUserResponse|bool
     */
    public function GetUser(\AbbyyBridge\StructType\AbbyyGetUser $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUser($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetUsers $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetUsersResponse|bool
     */
    public function GetUsers(\AbbyyBridge\StructType\AbbyyGetUsers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableUsers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetAvailableUsers $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableUsersResponse|bool
     */
    public function GetAvailableUsers(\AbbyyBridge\StructType\AbbyyGetAvailableUsers $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailableUsers($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRequestStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetRequestStatus $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetRequestStatusResponse|bool
     */
    public function GetRequestStatus(\AbbyyBridge\StructType\AbbyyGetRequestStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRequestStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRequests
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetRequests $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetRequestsResponse|bool
     */
    public function GetRequests(\AbbyyBridge\StructType\AbbyyGetRequests $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRequests($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableQueues
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetAvailableQueues $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetAvailableQueuesResponse|bool
     */
    public function GetAvailableQueues(\AbbyyBridge\StructType\AbbyyGetAvailableQueues $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailableQueues($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserStatistics
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetUserStatistics $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetUserStatisticsResponse|bool
     */
    public function GetUserStatistics(\AbbyyBridge\StructType\AbbyyGetUserStatistics $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserStatistics($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRoles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetRoles $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetRolesResponse|bool
     */
    public function GetRoles(\AbbyyBridge\StructType\AbbyyGetRoles $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRoles($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserRoles
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetUserRoles $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetUserRolesResponse|bool
     */
    public function GetUserRoles(\AbbyyBridge\StructType\AbbyyGetUserRoles $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserRoles($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCurrentUserIdentity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AbbyyBridge\StructType\AbbyyGetCurrentUserIdentity $parameters
     * @return \AbbyyBridge\StructType\AbbyyGetCurrentUserIdentityResponse|bool
     */
    public function GetCurrentUserIdentity(\AbbyyBridge\StructType\AbbyyGetCurrentUserIdentity $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCurrentUserIdentity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AbbyyBridge\StructType\AbbyyGetAllowedBatchTypesResponse|\AbbyyBridge\StructType\AbbyyGetAttachmentNamesResponse|\AbbyyBridge\StructType\AbbyyGetAvailableQueuesResponse|\AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageIdResponse|\AbbyyBridge\StructType\AbbyyGetAvailableTasksResponse|\AbbyyBridge\StructType\AbbyyGetAvailableUsersResponse|\AbbyyBridge\StructType\AbbyyGetBatchesResponse|\AbbyyBridge\StructType\AbbyyGetBatchIdsRangeResponse|\AbbyyBridge\StructType\AbbyyGetBatchPercentCompletedResponse|\AbbyyBridge\StructType\AbbyyGetBatchResponse|\AbbyyBridge\StructType\AbbyyGetBatchTypeResponse|\AbbyyBridge\StructType\AbbyyGetBatchTypesResponse|\AbbyyBridge\StructType\AbbyyGetBatchTypeTemplatesResponse|\AbbyyBridge\StructType\AbbyyGetCurrentTaskResponse|\AbbyyBridge\StructType\AbbyyGetCurrentUserIdentityResponse|\AbbyyBridge\StructType\AbbyyGetCustomFileNamesResponse|\AbbyyBridge\StructType\AbbyyGetDocumentResponse|\AbbyyBridge\StructType\AbbyyGetDocumentResultsListResponse|\AbbyyBridge\StructType\AbbyyGetDocumentsResponse|\AbbyyBridge\StructType\AbbyyGetFilteredBatchesResponse|\AbbyyBridge\StructType\AbbyyGetNewTicketResponse|\AbbyyBridge\StructType\AbbyyGetPostponedTasksResponse|\AbbyyBridge\StructType\AbbyyGetProcessingStagesResponse|\AbbyyBridge\StructType\AbbyyGetProjectsForStationTypeResponse|\AbbyyBridge\StructType\AbbyyGetProjectsForUserResponse|\AbbyyBridge\StructType\AbbyyGetProjectsResponse|\AbbyyBridge\StructType\AbbyyGetRequestsResponse|\AbbyyBridge\StructType\AbbyyGetRequestStatusResponse|\AbbyyBridge\StructType\AbbyyGetRolesResponse|\AbbyyBridge\StructType\AbbyyGetSessionInfoResponse|\AbbyyBridge\StructType\AbbyyGetSettingValueResponse|\AbbyyBridge\StructType\AbbyyGetTaskByStageIdResponse|\AbbyyBridge\StructType\AbbyyGetTaskDocumentsResponse|\AbbyyBridge\StructType\AbbyyGetTaskInfoResponse|\AbbyyBridge\StructType\AbbyyGetTaskResponse|\AbbyyBridge\StructType\AbbyyGetTemplatesResponse|\AbbyyBridge\StructType\AbbyyGetUserResponse|\AbbyyBridge\StructType\AbbyyGetUserRolesResponse|\AbbyyBridge\StructType\AbbyyGetUsersResponse|\AbbyyBridge\StructType\AbbyyGetUserStatisticsResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
