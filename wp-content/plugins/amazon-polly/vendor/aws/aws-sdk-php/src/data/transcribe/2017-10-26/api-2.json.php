<?php
// This file was auto-generated from sdk-root/src/data/transcribe/2017-10-26/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2017-10-26', 'endpointPrefix' => 'transcribe', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon Transcribe Service', 'serviceId' => 'Transcribe', 'signatureVersion' => 'v4', 'signingName' => 'transcribe', 'targetPrefix' => 'Transcribe', 'uid' => 'transcribe-2017-10-26', ], 'operations' => [ 'CreateLanguageModel' => [ 'name' => 'CreateLanguageModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateLanguageModelRequest', ], 'output' => [ 'shape' => 'CreateLanguageModelResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'CreateMedicalVocabulary' => [ 'name' => 'CreateMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateMedicalVocabularyRequest', ], 'output' => [ 'shape' => 'CreateMedicalVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'CreateVocabulary' => [ 'name' => 'CreateVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateVocabularyRequest', ], 'output' => [ 'shape' => 'CreateVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'CreateVocabularyFilter' => [ 'name' => 'CreateVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateVocabularyFilterRequest', ], 'output' => [ 'shape' => 'CreateVocabularyFilterResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'DeleteLanguageModel' => [ 'name' => 'DeleteLanguageModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteLanguageModelRequest', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteMedicalTranscriptionJob' => [ 'name' => 'DeleteMedicalTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteMedicalTranscriptionJobRequest', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteMedicalVocabulary' => [ 'name' => 'DeleteMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteMedicalVocabularyRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteTranscriptionJob' => [ 'name' => 'DeleteTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteTranscriptionJobRequest', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteVocabulary' => [ 'name' => 'DeleteVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteVocabularyRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DeleteVocabularyFilter' => [ 'name' => 'DeleteVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteVocabularyFilterRequest', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'BadRequestException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'DescribeLanguageModel' => [ 'name' => 'DescribeLanguageModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeLanguageModelRequest', ], 'output' => [ 'shape' => 'DescribeLanguageModelResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], 'GetMedicalTranscriptionJob' => [ 'name' => 'GetMedicalTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMedicalTranscriptionJobRequest', ], 'output' => [ 'shape' => 'GetMedicalTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], 'GetMedicalVocabulary' => [ 'name' => 'GetMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetMedicalVocabularyRequest', ], 'output' => [ 'shape' => 'GetMedicalVocabularyResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'BadRequestException', ], ], ], 'GetTranscriptionJob' => [ 'name' => 'GetTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetTranscriptionJobRequest', ], 'output' => [ 'shape' => 'GetTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], 'GetVocabulary' => [ 'name' => 'GetVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetVocabularyRequest', ], 'output' => [ 'shape' => 'GetVocabularyResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'BadRequestException', ], ], ], 'GetVocabularyFilter' => [ 'name' => 'GetVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetVocabularyFilterRequest', ], 'output' => [ 'shape' => 'GetVocabularyFilterResponse', ], 'errors' => [ [ 'shape' => 'NotFoundException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'BadRequestException', ], ], ], 'ListLanguageModels' => [ 'name' => 'ListLanguageModels', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListLanguageModelsRequest', ], 'output' => [ 'shape' => 'ListLanguageModelsResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListMedicalTranscriptionJobs' => [ 'name' => 'ListMedicalTranscriptionJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMedicalTranscriptionJobsRequest', ], 'output' => [ 'shape' => 'ListMedicalTranscriptionJobsResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListMedicalVocabularies' => [ 'name' => 'ListMedicalVocabularies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListMedicalVocabulariesRequest', ], 'output' => [ 'shape' => 'ListMedicalVocabulariesResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListTranscriptionJobs' => [ 'name' => 'ListTranscriptionJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTranscriptionJobsRequest', ], 'output' => [ 'shape' => 'ListTranscriptionJobsResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListVocabularies' => [ 'name' => 'ListVocabularies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListVocabulariesRequest', ], 'output' => [ 'shape' => 'ListVocabulariesResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'ListVocabularyFilters' => [ 'name' => 'ListVocabularyFilters', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListVocabularyFiltersRequest', ], 'output' => [ 'shape' => 'ListVocabularyFiltersResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], ], ], 'StartMedicalTranscriptionJob' => [ 'name' => 'StartMedicalTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartMedicalTranscriptionJobRequest', ], 'output' => [ 'shape' => 'StartMedicalTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'StartTranscriptionJob' => [ 'name' => 'StartTranscriptionJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartTranscriptionJobRequest', ], 'output' => [ 'shape' => 'StartTranscriptionJobResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'ConflictException', ], ], ], 'UpdateMedicalVocabulary' => [ 'name' => 'UpdateMedicalVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateMedicalVocabularyRequest', ], 'output' => [ 'shape' => 'UpdateMedicalVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'UpdateVocabulary' => [ 'name' => 'UpdateVocabulary', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateVocabularyRequest', ], 'output' => [ 'shape' => 'UpdateVocabularyResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], [ 'shape' => 'ConflictException', ], ], ], 'UpdateVocabularyFilter' => [ 'name' => 'UpdateVocabularyFilter', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateVocabularyFilterRequest', ], 'output' => [ 'shape' => 'UpdateVocabularyFilterResponse', ], 'errors' => [ [ 'shape' => 'BadRequestException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'InternalFailureException', ], [ 'shape' => 'NotFoundException', ], ], ], ], 'shapes' => [ 'BadRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'FailureReason', ], ], 'exception' => true, ], 'BaseModelName' => [ 'type' => 'string', 'enum' => [ 'NarrowBand', 'WideBand', ], ], 'Boolean' => [ 'type' => 'boolean', ], 'CLMLanguageCode' => [ 'type' => 'string', 'enum' => [ 'en-US', 'hi-IN', 'es-US', 'en-GB', 'en-AU', ], ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ContentRedaction' => [ 'type' => 'structure', 'required' => [ 'RedactionType', 'RedactionOutput', ], 'members' => [ 'RedactionType' => [ 'shape' => 'RedactionType', ], 'RedactionOutput' => [ 'shape' => 'RedactionOutput', ], ], ], 'CreateLanguageModelRequest' => [ 'type' => 'structure', 'required' => [ 'LanguageCode', 'BaseModelName', 'ModelName', 'InputDataConfig', ], 'members' => [ 'LanguageCode' => [ 'shape' => 'CLMLanguageCode', ], 'BaseModelName' => [ 'shape' => 'BaseModelName', ], 'ModelName' => [ 'shape' => 'ModelName', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], ], ], 'CreateLanguageModelResponse' => [ 'type' => 'structure', 'members' => [ 'LanguageCode' => [ 'shape' => 'CLMLanguageCode', ], 'BaseModelName' => [ 'shape' => 'BaseModelName', ], 'ModelName' => [ 'shape' => 'ModelName', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], 'ModelStatus' => [ 'shape' => 'ModelStatus', ], ], ], 'CreateMedicalVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', 'LanguageCode', 'VocabularyFileUri', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyFileUri' => [ 'shape' => 'Uri', ], ], ], 'CreateMedicalVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], ], ], 'CreateVocabularyFilterRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyFilterName', 'LanguageCode', ], 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'Words' => [ 'shape' => 'Words', ], 'VocabularyFilterFileUri' => [ 'shape' => 'Uri', ], ], ], 'CreateVocabularyFilterResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], ], ], 'CreateVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', 'LanguageCode', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'Phrases' => [ 'shape' => 'Phrases', ], 'VocabularyFileUri' => [ 'shape' => 'Uri', ], ], ], 'CreateVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], ], ], 'DataAccessRoleArn' => [ 'type' => 'string', 'max' => 2048, 'min' => 20, 'pattern' => '^arn:(aws|aws-cn|aws-us-gov|aws-iso-{0,1}[a-z]{0,1}):iam::[0-9]{0,63}:role/[A-Za-z0-9:_/+=,@.-]{0,1024}$', ], 'DateTime' => [ 'type' => 'timestamp', ], 'DeleteLanguageModelRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], ], ], 'DeleteMedicalTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'MedicalTranscriptionJobName', ], 'members' => [ 'MedicalTranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], ], ], 'DeleteMedicalVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], ], ], 'DeleteTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'TranscriptionJobName', ], 'members' => [ 'TranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], ], ], 'DeleteVocabularyFilterRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyFilterName', ], 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], ], ], 'DeleteVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], ], ], 'DescribeLanguageModelRequest' => [ 'type' => 'structure', 'required' => [ 'ModelName', ], 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], ], ], 'DescribeLanguageModelResponse' => [ 'type' => 'structure', 'members' => [ 'LanguageModel' => [ 'shape' => 'LanguageModel', ], ], ], 'FailureReason' => [ 'type' => 'string', ], 'GetMedicalTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'MedicalTranscriptionJobName', ], 'members' => [ 'MedicalTranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], ], ], 'GetMedicalTranscriptionJobResponse' => [ 'type' => 'structure', 'members' => [ 'MedicalTranscriptionJob' => [ 'shape' => 'MedicalTranscriptionJob', ], ], ], 'GetMedicalVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], ], ], 'GetMedicalVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'DownloadUri' => [ 'shape' => 'Uri', ], ], ], 'GetTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'TranscriptionJobName', ], 'members' => [ 'TranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], ], ], 'GetTranscriptionJobResponse' => [ 'type' => 'structure', 'members' => [ 'TranscriptionJob' => [ 'shape' => 'TranscriptionJob', ], ], ], 'GetVocabularyFilterRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyFilterName', ], 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], ], ], 'GetVocabularyFilterResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'DownloadUri' => [ 'shape' => 'Uri', ], ], ], 'GetVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], ], ], 'GetVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'DownloadUri' => [ 'shape' => 'Uri', ], ], ], 'IdentifiedLanguageScore' => [ 'type' => 'float', ], 'InputDataConfig' => [ 'type' => 'structure', 'required' => [ 'S3Uri', 'DataAccessRoleArn', ], 'members' => [ 'S3Uri' => [ 'shape' => 'Uri', ], 'TuningDataS3Uri' => [ 'shape' => 'Uri', ], 'DataAccessRoleArn' => [ 'shape' => 'DataAccessRoleArn', ], ], ], 'InternalFailureException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, 'fault' => true, ], 'JobExecutionSettings' => [ 'type' => 'structure', 'members' => [ 'AllowDeferredExecution' => [ 'shape' => 'Boolean', ], 'DataAccessRoleArn' => [ 'shape' => 'DataAccessRoleArn', ], ], ], 'KMSKeyId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^[A-Za-z0-9][A-Za-z0-9:_/+=,@.-]{0,2048}$', ], 'LanguageCode' => [ 'type' => 'string', 'enum' => [ 'af-ZA', 'ar-AE', 'ar-SA', 'cy-GB', 'da-DK', 'de-CH', 'de-DE', 'en-AB', 'en-AU', 'en-GB', 'en-IE', 'en-IN', 'en-US', 'en-WL', 'es-ES', 'es-US', 'fa-IR', 'fr-CA', 'fr-FR', 'ga-IE', 'gd-GB', 'he-IL', 'hi-IN', 'id-ID', 'it-IT', 'ja-JP', 'ko-KR', 'ms-MY', 'nl-NL', 'pt-BR', 'pt-PT', 'ru-RU', 'ta-IN', 'te-IN', 'tr-TR', 'zh-CN', ], ], 'LanguageModel' => [ 'type' => 'structure', 'members' => [ 'ModelName' => [ 'shape' => 'ModelName', ], 'CreateTime' => [ 'shape' => 'DateTime', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'LanguageCode' => [ 'shape' => 'CLMLanguageCode', ], 'BaseModelName' => [ 'shape' => 'BaseModelName', ], 'ModelStatus' => [ 'shape' => 'ModelStatus', ], 'UpgradeAvailability' => [ 'shape' => 'Boolean', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'InputDataConfig' => [ 'shape' => 'InputDataConfig', ], ], ], 'LanguageOptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'LanguageCode', ], 'min' => 2, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'ListLanguageModelsRequest' => [ 'type' => 'structure', 'members' => [ 'StatusEquals' => [ 'shape' => 'ModelStatus', ], 'NameContains' => [ 'shape' => 'ModelName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListLanguageModelsResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'Models' => [ 'shape' => 'Models', ], ], ], 'ListMedicalTranscriptionJobsRequest' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'TranscriptionJobStatus', ], 'JobNameContains' => [ 'shape' => 'TranscriptionJobName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListMedicalTranscriptionJobsResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'TranscriptionJobStatus', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MedicalTranscriptionJobSummaries' => [ 'shape' => 'MedicalTranscriptionJobSummaries', ], ], ], 'ListMedicalVocabulariesRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'StateEquals' => [ 'shape' => 'VocabularyState', ], 'NameContains' => [ 'shape' => 'VocabularyName', ], ], ], 'ListMedicalVocabulariesResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'VocabularyState', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Vocabularies' => [ 'shape' => 'Vocabularies', ], ], ], 'ListTranscriptionJobsRequest' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'TranscriptionJobStatus', ], 'JobNameContains' => [ 'shape' => 'TranscriptionJobName', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], ], ], 'ListTranscriptionJobsResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'TranscriptionJobStatus', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'TranscriptionJobSummaries' => [ 'shape' => 'TranscriptionJobSummaries', ], ], ], 'ListVocabulariesRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'StateEquals' => [ 'shape' => 'VocabularyState', ], 'NameContains' => [ 'shape' => 'VocabularyName', ], ], ], 'ListVocabulariesResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'VocabularyState', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Vocabularies' => [ 'shape' => 'Vocabularies', ], ], ], 'ListVocabularyFiltersRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NameContains' => [ 'shape' => 'VocabularyFilterName', ], ], ], 'ListVocabularyFiltersResponse' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'VocabularyFilters' => [ 'shape' => 'VocabularyFilters', ], ], ], 'MaxAlternatives' => [ 'type' => 'integer', 'max' => 10, 'min' => 2, ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'MaxSpeakers' => [ 'type' => 'integer', 'max' => 10, 'min' => 2, ], 'Media' => [ 'type' => 'structure', 'members' => [ 'MediaFileUri' => [ 'shape' => 'Uri', ], ], ], 'MediaFormat' => [ 'type' => 'string', 'enum' => [ 'mp3', 'mp4', 'wav', 'flac', 'ogg', 'amr', 'webm', ], ], 'MediaSampleRateHertz' => [ 'type' => 'integer', 'max' => 48000, 'min' => 8000, ], 'MedicalTranscript' => [ 'type' => 'structure', 'members' => [ 'TranscriptFileUri' => [ 'shape' => 'Uri', ], ], ], 'MedicalTranscriptionJob' => [ 'type' => 'structure', 'members' => [ 'MedicalTranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], 'TranscriptionJobStatus' => [ 'shape' => 'TranscriptionJobStatus', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'MediaSampleRateHertz' => [ 'shape' => 'MediaSampleRateHertz', ], 'MediaFormat' => [ 'shape' => 'MediaFormat', ], 'Media' => [ 'shape' => 'Media', ], 'Transcript' => [ 'shape' => 'MedicalTranscript', ], 'StartTime' => [ 'shape' => 'DateTime', ], 'CreationTime' => [ 'shape' => 'DateTime', ], 'CompletionTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'Settings' => [ 'shape' => 'MedicalTranscriptionSetting', ], 'Specialty' => [ 'shape' => 'Specialty', ], 'Type' => [ 'shape' => 'Type', ], ], ], 'MedicalTranscriptionJobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'MedicalTranscriptionJobSummary', ], ], 'MedicalTranscriptionJobSummary' => [ 'type' => 'structure', 'members' => [ 'MedicalTranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], 'CreationTime' => [ 'shape' => 'DateTime', ], 'StartTime' => [ 'shape' => 'DateTime', ], 'CompletionTime' => [ 'shape' => 'DateTime', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'TranscriptionJobStatus' => [ 'shape' => 'TranscriptionJobStatus', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'OutputLocationType' => [ 'shape' => 'OutputLocationType', ], 'Specialty' => [ 'shape' => 'Specialty', ], 'Type' => [ 'shape' => 'Type', ], ], ], 'MedicalTranscriptionSetting' => [ 'type' => 'structure', 'members' => [ 'ShowSpeakerLabels' => [ 'shape' => 'Boolean', ], 'MaxSpeakerLabels' => [ 'shape' => 'MaxSpeakers', ], 'ChannelIdentification' => [ 'shape' => 'Boolean', ], 'ShowAlternatives' => [ 'shape' => 'Boolean', ], 'MaxAlternatives' => [ 'shape' => 'MaxAlternatives', ], 'VocabularyName' => [ 'shape' => 'VocabularyName', ], ], ], 'ModelName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z._-]+', ], 'ModelSettings' => [ 'type' => 'structure', 'members' => [ 'LanguageModelName' => [ 'shape' => 'ModelName', ], ], ], 'ModelStatus' => [ 'type' => 'string', 'enum' => [ 'IN_PROGRESS', 'FAILED', 'COMPLETED', ], ], 'Models' => [ 'type' => 'list', 'member' => [ 'shape' => 'LanguageModel', ], ], 'NextToken' => [ 'type' => 'string', 'max' => 8192, 'pattern' => '.+', ], 'NotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'exception' => true, ], 'OutputBucketName' => [ 'type' => 'string', 'max' => 64, 'pattern' => '[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9]', ], 'OutputKey' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '[a-zA-Z0-9-_.!*\'()/]{1,1024}$', ], 'OutputLocationType' => [ 'type' => 'string', 'enum' => [ 'CUSTOMER_BUCKET', 'SERVICE_BUCKET', ], ], 'Phrase' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '.+', ], 'Phrases' => [ 'type' => 'list', 'member' => [ 'shape' => 'Phrase', ], ], 'RedactionOutput' => [ 'type' => 'string', 'enum' => [ 'redacted', 'redacted_and_unredacted', ], ], 'RedactionType' => [ 'type' => 'string', 'enum' => [ 'PII', ], ], 'Settings' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'ShowSpeakerLabels' => [ 'shape' => 'Boolean', ], 'MaxSpeakerLabels' => [ 'shape' => 'MaxSpeakers', ], 'ChannelIdentification' => [ 'shape' => 'Boolean', ], 'ShowAlternatives' => [ 'shape' => 'Boolean', ], 'MaxAlternatives' => [ 'shape' => 'MaxAlternatives', ], 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'VocabularyFilterMethod' => [ 'shape' => 'VocabularyFilterMethod', ], ], ], 'Specialty' => [ 'type' => 'string', 'enum' => [ 'PRIMARYCARE', ], ], 'StartMedicalTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'MedicalTranscriptionJobName', 'LanguageCode', 'Media', 'OutputBucketName', 'Specialty', 'Type', ], 'members' => [ 'MedicalTranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'MediaSampleRateHertz' => [ 'shape' => 'MediaSampleRateHertz', ], 'MediaFormat' => [ 'shape' => 'MediaFormat', ], 'Media' => [ 'shape' => 'Media', ], 'OutputBucketName' => [ 'shape' => 'OutputBucketName', ], 'OutputKey' => [ 'shape' => 'OutputKey', ], 'OutputEncryptionKMSKeyId' => [ 'shape' => 'KMSKeyId', ], 'Settings' => [ 'shape' => 'MedicalTranscriptionSetting', ], 'Specialty' => [ 'shape' => 'Specialty', ], 'Type' => [ 'shape' => 'Type', ], ], ], 'StartMedicalTranscriptionJobResponse' => [ 'type' => 'structure', 'members' => [ 'MedicalTranscriptionJob' => [ 'shape' => 'MedicalTranscriptionJob', ], ], ], 'StartTranscriptionJobRequest' => [ 'type' => 'structure', 'required' => [ 'TranscriptionJobName', 'Media', ], 'members' => [ 'TranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'MediaSampleRateHertz' => [ 'shape' => 'MediaSampleRateHertz', ], 'MediaFormat' => [ 'shape' => 'MediaFormat', ], 'Media' => [ 'shape' => 'Media', ], 'OutputBucketName' => [ 'shape' => 'OutputBucketName', ], 'OutputKey' => [ 'shape' => 'OutputKey', ], 'OutputEncryptionKMSKeyId' => [ 'shape' => 'KMSKeyId', ], 'Settings' => [ 'shape' => 'Settings', ], 'ModelSettings' => [ 'shape' => 'ModelSettings', ], 'JobExecutionSettings' => [ 'shape' => 'JobExecutionSettings', ], 'ContentRedaction' => [ 'shape' => 'ContentRedaction', ], 'IdentifyLanguage' => [ 'shape' => 'Boolean', ], 'LanguageOptions' => [ 'shape' => 'LanguageOptions', ], ], ], 'StartTranscriptionJobResponse' => [ 'type' => 'structure', 'members' => [ 'TranscriptionJob' => [ 'shape' => 'TranscriptionJob', ], ], ], 'String' => [ 'type' => 'string', ], 'Transcript' => [ 'type' => 'structure', 'members' => [ 'TranscriptFileUri' => [ 'shape' => 'Uri', ], 'RedactedTranscriptFileUri' => [ 'shape' => 'Uri', ], ], ], 'TranscriptionJob' => [ 'type' => 'structure', 'members' => [ 'TranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], 'TranscriptionJobStatus' => [ 'shape' => 'TranscriptionJobStatus', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'MediaSampleRateHertz' => [ 'shape' => 'MediaSampleRateHertz', ], 'MediaFormat' => [ 'shape' => 'MediaFormat', ], 'Media' => [ 'shape' => 'Media', ], 'Transcript' => [ 'shape' => 'Transcript', ], 'StartTime' => [ 'shape' => 'DateTime', ], 'CreationTime' => [ 'shape' => 'DateTime', ], 'CompletionTime' => [ 'shape' => 'DateTime', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'Settings' => [ 'shape' => 'Settings', ], 'ModelSettings' => [ 'shape' => 'ModelSettings', ], 'JobExecutionSettings' => [ 'shape' => 'JobExecutionSettings', ], 'ContentRedaction' => [ 'shape' => 'ContentRedaction', ], 'IdentifyLanguage' => [ 'shape' => 'Boolean', ], 'LanguageOptions' => [ 'shape' => 'LanguageOptions', ], 'IdentifiedLanguageScore' => [ 'shape' => 'IdentifiedLanguageScore', ], ], ], 'TranscriptionJobName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z._-]+', ], 'TranscriptionJobStatus' => [ 'type' => 'string', 'enum' => [ 'QUEUED', 'IN_PROGRESS', 'FAILED', 'COMPLETED', ], ], 'TranscriptionJobSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TranscriptionJobSummary', ], ], 'TranscriptionJobSummary' => [ 'type' => 'structure', 'members' => [ 'TranscriptionJobName' => [ 'shape' => 'TranscriptionJobName', ], 'CreationTime' => [ 'shape' => 'DateTime', ], 'StartTime' => [ 'shape' => 'DateTime', ], 'CompletionTime' => [ 'shape' => 'DateTime', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'TranscriptionJobStatus' => [ 'shape' => 'TranscriptionJobStatus', ], 'FailureReason' => [ 'shape' => 'FailureReason', ], 'OutputLocationType' => [ 'shape' => 'OutputLocationType', ], 'ContentRedaction' => [ 'shape' => 'ContentRedaction', ], 'ModelSettings' => [ 'shape' => 'ModelSettings', ], 'IdentifyLanguage' => [ 'shape' => 'Boolean', ], 'IdentifiedLanguageScore' => [ 'shape' => 'IdentifiedLanguageScore', ], ], ], 'Type' => [ 'type' => 'string', 'enum' => [ 'CONVERSATION', 'DICTATION', ], ], 'UpdateMedicalVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', 'LanguageCode', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'VocabularyFileUri' => [ 'shape' => 'Uri', ], ], ], 'UpdateMedicalVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], ], ], 'UpdateVocabularyFilterRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyFilterName', ], 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'Words' => [ 'shape' => 'Words', ], 'VocabularyFilterFileUri' => [ 'shape' => 'Uri', ], ], ], 'UpdateVocabularyFilterResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], ], ], 'UpdateVocabularyRequest' => [ 'type' => 'structure', 'required' => [ 'VocabularyName', 'LanguageCode', ], 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'Phrases' => [ 'shape' => 'Phrases', ], 'VocabularyFileUri' => [ 'shape' => 'Uri', ], ], ], 'UpdateVocabularyResponse' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], ], ], 'Uri' => [ 'type' => 'string', 'max' => 2000, 'min' => 1, 'pattern' => '(s3://|http(s*)://).+', ], 'Vocabularies' => [ 'type' => 'list', 'member' => [ 'shape' => 'VocabularyInfo', ], ], 'VocabularyFilterInfo' => [ 'type' => 'structure', 'members' => [ 'VocabularyFilterName' => [ 'shape' => 'VocabularyFilterName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], ], ], 'VocabularyFilterMethod' => [ 'type' => 'string', 'enum' => [ 'remove', 'mask', 'tag', ], ], 'VocabularyFilterName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z._-]+', ], 'VocabularyFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'VocabularyFilterInfo', ], ], 'VocabularyInfo' => [ 'type' => 'structure', 'members' => [ 'VocabularyName' => [ 'shape' => 'VocabularyName', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModifiedTime' => [ 'shape' => 'DateTime', ], 'VocabularyState' => [ 'shape' => 'VocabularyState', ], ], ], 'VocabularyName' => [ 'type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^[0-9a-zA-Z._-]+', ], 'VocabularyState' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'READY', 'FAILED', ], ], 'Word' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'Words' => [ 'type' => 'list', 'member' => [ 'shape' => 'Word', ], 'min' => 1, ], ],];
