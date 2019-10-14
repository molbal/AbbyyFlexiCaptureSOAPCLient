<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \AbbyyBridge\AbbyyClassMap::get(),
);
/**
 * Samples for Open ServiceType
 */
$open = new \AbbyyBridge\ServiceType\AbbyyOpen($options);
/**
 * Sample call for OpenSession operation/method
 */
if ($open->OpenSession(new \AbbyyBridge\StructType\AbbyyOpenSession()) !== false) {
    print_r($open->getResult());
} else {
    print_r($open->getLastError());
}
/**
 * Sample call for OpenProject operation/method
 */
if ($open->OpenProject(new \AbbyyBridge\StructType\AbbyyOpenProject()) !== false) {
    print_r($open->getResult());
} else {
    print_r($open->getLastError());
}
/**
 * Sample call for OpenBatch operation/method
 */
if ($open->OpenBatch(new \AbbyyBridge\StructType\AbbyyOpenBatch()) !== false) {
    print_r($open->getResult());
} else {
    print_r($open->getLastError());
}
/**
 * Sample call for OpenTask operation/method
 */
if ($open->OpenTask(new \AbbyyBridge\StructType\AbbyyOpenTask()) !== false) {
    print_r($open->getResult());
} else {
    print_r($open->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \AbbyyBridge\ServiceType\AbbyyGet($options);
/**
 * Sample call for GetSessionInfo operation/method
 */
if ($get->GetSessionInfo(new \AbbyyBridge\StructType\AbbyyGetSessionInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjects operation/method
 */
if ($get->GetProjects(new \AbbyyBridge\StructType\AbbyyGetProjects()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectsForUser operation/method
 */
if ($get->GetProjectsForUser(new \AbbyyBridge\StructType\AbbyyGetProjectsForUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProjectsForStationType operation/method
 */
if ($get->GetProjectsForStationType(new \AbbyyBridge\StructType\AbbyyGetProjectsForStationType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProcessingStages operation/method
 */
if ($get->GetProcessingStages(new \AbbyyBridge\StructType\AbbyyGetProcessingStages()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTemplates operation/method
 */
if ($get->GetTemplates(new \AbbyyBridge\StructType\AbbyyGetTemplates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBatchTypeTemplates operation/method
 */
if ($get->GetBatchTypeTemplates(new \AbbyyBridge\StructType\AbbyyGetBatchTypeTemplates()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBatchTypes operation/method
 */
if ($get->GetBatchTypes(new \AbbyyBridge\StructType\AbbyyGetBatchTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllowedBatchTypes operation/method
 */
if ($get->GetAllowedBatchTypes(new \AbbyyBridge\StructType\AbbyyGetAllowedBatchTypes()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBatchIdsRange operation/method
 */
if ($get->GetBatchIdsRange(new \AbbyyBridge\StructType\AbbyyGetBatchIdsRange()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBatchPercentCompleted operation/method
 */
if ($get->GetBatchPercentCompleted(new \AbbyyBridge\StructType\AbbyyGetBatchPercentCompleted()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDocuments operation/method
 */
if ($get->GetDocuments(new \AbbyyBridge\StructType\AbbyyGetDocuments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDocumentResultsList operation/method
 */
if ($get->GetDocumentResultsList(new \AbbyyBridge\StructType\AbbyyGetDocumentResultsList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBatchType operation/method
 */
if ($get->GetBatchType(new \AbbyyBridge\StructType\AbbyyGetBatchType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBatches operation/method
 */
if ($get->GetBatches(new \AbbyyBridge\StructType\AbbyyGetBatches()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetFilteredBatches operation/method
 */
if ($get->GetFilteredBatches(new \AbbyyBridge\StructType\AbbyyGetFilteredBatches()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBatch operation/method
 */
if ($get->GetBatch(new \AbbyyBridge\StructType\AbbyyGetBatch()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDocument operation/method
 */
if ($get->GetDocument(new \AbbyyBridge\StructType\AbbyyGetDocument()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomFileNames operation/method
 */
if ($get->GetCustomFileNames(new \AbbyyBridge\StructType\AbbyyGetCustomFileNames()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAttachmentNames operation/method
 */
if ($get->GetAttachmentNames(new \AbbyyBridge\StructType\AbbyyGetAttachmentNames()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAvailableTasks operation/method
 */
if ($get->GetAvailableTasks(new \AbbyyBridge\StructType\AbbyyGetAvailableTasks()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAvailableTasksByStageId operation/method
 */
if ($get->GetAvailableTasksByStageId(new \AbbyyBridge\StructType\AbbyyGetAvailableTasksByStageId()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTaskInfo operation/method
 */
if ($get->GetTaskInfo(new \AbbyyBridge\StructType\AbbyyGetTaskInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTask operation/method
 */
if ($get->GetTask(new \AbbyyBridge\StructType\AbbyyGetTask()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTaskByStageId operation/method
 */
if ($get->GetTaskByStageId(new \AbbyyBridge\StructType\AbbyyGetTaskByStageId()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCurrentTask operation/method
 */
if ($get->GetCurrentTask(new \AbbyyBridge\StructType\AbbyyGetCurrentTask()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTaskDocuments operation/method
 */
if ($get->GetTaskDocuments(new \AbbyyBridge\StructType\AbbyyGetTaskDocuments()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPostponedTasks operation/method
 */
if ($get->GetPostponedTasks(new \AbbyyBridge\StructType\AbbyyGetPostponedTasks()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNewTicket operation/method
 */
if ($get->GetNewTicket(new \AbbyyBridge\StructType\AbbyyGetNewTicket()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSettingValue operation/method
 */
if ($get->GetSettingValue(new \AbbyyBridge\StructType\AbbyyGetSettingValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUser operation/method
 */
if ($get->GetUser(new \AbbyyBridge\StructType\AbbyyGetUser()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUsers operation/method
 */
if ($get->GetUsers(new \AbbyyBridge\StructType\AbbyyGetUsers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAvailableUsers operation/method
 */
if ($get->GetAvailableUsers(new \AbbyyBridge\StructType\AbbyyGetAvailableUsers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRequestStatus operation/method
 */
if ($get->GetRequestStatus(new \AbbyyBridge\StructType\AbbyyGetRequestStatus()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRequests operation/method
 */
if ($get->GetRequests(new \AbbyyBridge\StructType\AbbyyGetRequests()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAvailableQueues operation/method
 */
if ($get->GetAvailableQueues(new \AbbyyBridge\StructType\AbbyyGetAvailableQueues()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserStatistics operation/method
 */
if ($get->GetUserStatistics(new \AbbyyBridge\StructType\AbbyyGetUserStatistics()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRoles operation/method
 */
if ($get->GetRoles(new \AbbyyBridge\StructType\AbbyyGetRoles()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetUserRoles operation/method
 */
if ($get->GetUserRoles(new \AbbyyBridge\StructType\AbbyyGetUserRoles()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCurrentUserIdentity operation/method
 */
if ($get->GetCurrentUserIdentity(new \AbbyyBridge\StructType\AbbyyGetCurrentUserIdentity()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Close ServiceType
 */
$close = new \AbbyyBridge\ServiceType\AbbyyClose($options);
/**
 * Sample call for CloseSession operation/method
 */
if ($close->CloseSession(new \AbbyyBridge\StructType\AbbyyCloseSession()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Sample call for CloseProject operation/method
 */
if ($close->CloseProject(new \AbbyyBridge\StructType\AbbyyCloseProject()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Sample call for CloseBatch operation/method
 */
if ($close->CloseBatch(new \AbbyyBridge\StructType\AbbyyCloseBatch()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Sample call for CloseTask operation/method
 */
if ($close->CloseTask(new \AbbyyBridge\StructType\AbbyyCloseTask()) !== false) {
    print_r($close->getResult());
} else {
    print_r($close->getLastError());
}
/**
 * Samples for Add ServiceType
 */
$add = new \AbbyyBridge\ServiceType\AbbyyAdd($options);
/**
 * Sample call for AddNewBatch operation/method
 */
if ($add->AddNewBatch(new \AbbyyBridge\StructType\AbbyyAddNewBatch()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddNewImage operation/method
 */
if ($add->AddNewImage(new \AbbyyBridge\StructType\AbbyyAddNewImage()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddNewDocument operation/method
 */
if ($add->AddNewDocument(new \AbbyyBridge\StructType\AbbyyAddNewDocument()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddNewPage operation/method
 */
if ($add->AddNewPage(new \AbbyyBridge\StructType\AbbyyAddNewPage()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Sample call for AddUserIfNotExist operation/method
 */
if ($add->AddUserIfNotExist(new \AbbyyBridge\StructType\AbbyyAddUserIfNotExist()) !== false) {
    print_r($add->getResult());
} else {
    print_r($add->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \AbbyyBridge\ServiceType\AbbyyDelete($options);
/**
 * Sample call for DeleteBatch operation/method
 */
if ($delete->DeleteBatch(new \AbbyyBridge\StructType\AbbyyDeleteBatch()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeletePage operation/method
 */
if ($delete->DeletePage(new \AbbyyBridge\StructType\AbbyyDeletePage()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteDocument operation/method
 */
if ($delete->DeleteDocument(new \AbbyyBridge\StructType\AbbyyDeleteDocument()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for DeleteRequest operation/method
 */
if ($delete->DeleteRequest(new \AbbyyBridge\StructType\AbbyyDeleteRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Move ServiceType
 */
$move = new \AbbyyBridge\ServiceType\AbbyyMove($options);
/**
 * Sample call for MoveBatchItem operation/method
 */
if ($move->MoveBatchItem(new \AbbyyBridge\StructType\AbbyyMoveBatchItem()) !== false) {
    print_r($move->getResult());
} else {
    print_r($move->getLastError());
}
/**
 * Samples for Process ServiceType
 */
$process = new \AbbyyBridge\ServiceType\AbbyyProcess($options);
/**
 * Sample call for ProcessBatch operation/method
 */
if ($process->ProcessBatch(new \AbbyyBridge\StructType\AbbyyProcessBatch()) !== false) {
    print_r($process->getResult());
} else {
    print_r($process->getLastError());
}
/**
 * Samples for Load ServiceType
 */
$load = new \AbbyyBridge\ServiceType\AbbyyLoad($options);
/**
 * Sample call for LoadDocumentResult operation/method
 */
if ($load->LoadDocumentResult(new \AbbyyBridge\StructType\AbbyyLoadDocumentResult()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Sample call for LoadCustomFile operation/method
 */
if ($load->LoadCustomFile(new \AbbyyBridge\StructType\AbbyyLoadCustomFile()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Sample call for LoadAttachment operation/method
 */
if ($load->LoadAttachment(new \AbbyyBridge\StructType\AbbyyLoadAttachment()) !== false) {
    print_r($load->getResult());
} else {
    print_r($load->getLastError());
}
/**
 * Samples for Is ServiceType
 */
$is = new \AbbyyBridge\ServiceType\AbbyyIs($options);
/**
 * Sample call for IsSessionExists operation/method
 */
if ($is->IsSessionExists(new \AbbyyBridge\StructType\AbbyyIsSessionExists()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \AbbyyBridge\ServiceType\AbbyyUpdate($options);
/**
 * Sample call for UpdateBatch operation/method
 */
if ($update->UpdateBatch(new \AbbyyBridge\StructType\AbbyyUpdateBatch()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateTicket operation/method
 */
if ($update->UpdateTicket(new \AbbyyBridge\StructType\AbbyyUpdateTicket()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Replace ServiceType
 */
$replace = new \AbbyyBridge\ServiceType\AbbyyReplace($options);
/**
 * Sample call for ReplacePageImage operation/method
 */
if ($replace->ReplacePageImage(new \AbbyyBridge\StructType\AbbyyReplacePageImage()) !== false) {
    print_r($replace->getResult());
} else {
    print_r($replace->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \AbbyyBridge\ServiceType\AbbyySet($options);
/**
 * Sample call for SetDocumentProperties operation/method
 */
if ($set->SetDocumentProperties(new \AbbyyBridge\StructType\AbbyySetDocumentProperties()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetSettingValue operation/method
 */
if ($set->SetSettingValue(new \AbbyyBridge\StructType\AbbyySetSettingValue()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetRequestStatus operation/method
 */
if ($set->SetRequestStatus(new \AbbyyBridge\StructType\AbbyySetRequestStatus()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetTaskPriority operation/method
 */
if ($set->SetTaskPriority(new \AbbyyBridge\StructType\AbbyySetTaskPriority()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetDocumentPriority operation/method
 */
if ($set->SetDocumentPriority(new \AbbyyBridge\StructType\AbbyySetDocumentPriority()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \AbbyyBridge\ServiceType\AbbyySave($options);
/**
 * Sample call for SaveCustomFile operation/method
 */
if ($save->SaveCustomFile(new \AbbyyBridge\StructType\AbbyySaveCustomFile()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for SaveAttachment operation/method
 */
if ($save->SaveAttachment(new \AbbyyBridge\StructType\AbbyySaveAttachment()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Remove ServiceType
 */
$remove = new \AbbyyBridge\ServiceType\AbbyyRemove($options);
/**
 * Sample call for RemoveCustomFile operation/method
 */
if ($remove->RemoveCustomFile(new \AbbyyBridge\StructType\AbbyyRemoveCustomFile()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Sample call for RemoveAttachment operation/method
 */
if ($remove->RemoveAttachment(new \AbbyyBridge\StructType\AbbyyRemoveAttachment()) !== false) {
    print_r($remove->getResult());
} else {
    print_r($remove->getLastError());
}
/**
 * Samples for Write ServiceType
 */
$write = new \AbbyyBridge\ServiceType\AbbyyWrite($options);
/**
 * Sample call for WriteToLog operation/method
 */
if ($write->WriteToLog(new \AbbyyBridge\StructType\AbbyyWriteToLog()) !== false) {
    print_r($write->getResult());
} else {
    print_r($write->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \AbbyyBridge\ServiceType\AbbyyCreate($options);
/**
 * Sample call for CreateTask operation/method
 */
if ($create->CreateTask(new \AbbyyBridge\StructType\AbbyyCreateTask()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateRequest operation/method
 */
if ($create->CreateRequest(new \AbbyyBridge\StructType\AbbyyCreateRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \AbbyyBridge\ServiceType\AbbyyCancel($options);
/**
 * Sample call for CancelTask operation/method
 */
if ($cancel->CancelTask(new \AbbyyBridge\StructType\AbbyyCancelTask()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Postpone ServiceType
 */
$postpone = new \AbbyyBridge\ServiceType\AbbyyPostpone($options);
/**
 * Sample call for PostponeTask operation/method
 */
if ($postpone->PostponeTask(new \AbbyyBridge\StructType\AbbyyPostponeTask()) !== false) {
    print_r($postpone->getResult());
} else {
    print_r($postpone->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \AbbyyBridge\ServiceType\AbbyySend($options);
/**
 * Sample call for SendTaskToException operation/method
 */
if ($send->SendTaskToException(new \AbbyyBridge\StructType\AbbyySendTaskToException()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendTask operation/method
 */
if ($send->SendTask(new \AbbyyBridge\StructType\AbbyySendTask()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Release ServiceType
 */
$release = new \AbbyyBridge\ServiceType\AbbyyRelease($options);
/**
 * Sample call for ReleaseTicket operation/method
 */
if ($release->ReleaseTicket(new \AbbyyBridge\StructType\AbbyyReleaseTicket()) !== false) {
    print_r($release->getResult());
} else {
    print_r($release->getLastError());
}
/**
 * Samples for Has ServiceType
 */
$has = new \AbbyyBridge\ServiceType\AbbyyHas($options);
/**
 * Sample call for HasRightsForBatchType operation/method
 */
if ($has->HasRightsForBatchType(new \AbbyyBridge\StructType\AbbyyHasRightsForBatchType()) !== false) {
    print_r($has->getResult());
} else {
    print_r($has->getLastError());
}
/**
 * Samples for Find ServiceType
 */
$find = new \AbbyyBridge\ServiceType\AbbyyFind($options);
/**
 * Sample call for FindUser operation/method
 */
if ($find->FindUser(new \AbbyyBridge\StructType\AbbyyFindUser()) !== false) {
    print_r($find->getResult());
} else {
    print_r($find->getLastError());
}
