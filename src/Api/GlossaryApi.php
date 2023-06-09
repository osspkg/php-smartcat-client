<?php
/**
 * GlossaryApi
 * PHP version 7.4
 *
 * @category Class
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Smartcat API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SmartCat\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SmartCat\ApiException;
use SmartCat\Configuration;
use SmartCat\HeaderSelector;
use SmartCat\ObjectSerializer;

/**
 * GlossaryApi Class Doc Comment
 *
 * @category Class
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GlossaryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'apiIntegrationV1GlossariesGet' => [
            'application/json',
        ],
        'apiIntegrationV1GlossaryImportPost' => [
            'application/json-patch+json',
            'application/json',
            'text/json',
            'application/*+json',
        ],
        'apiIntegrationV1GlossaryImportTaskStateTaskIdGet' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiIntegrationV1GlossariesGet
     *
     * Fetch glossaries from the current account
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossariesGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SmartCat\Model\GlossaryModel[]
     */
    public function apiIntegrationV1GlossariesGet(string $contentType = self::contentTypes['apiIntegrationV1GlossariesGet'][0])
    {
        list($response) = $this->apiIntegrationV1GlossariesGetWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation apiIntegrationV1GlossariesGetWithHttpInfo
     *
     * Fetch glossaries from the current account
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossariesGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SmartCat\Model\GlossaryModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiIntegrationV1GlossariesGetWithHttpInfo(string $contentType = self::contentTypes['apiIntegrationV1GlossariesGet'][0])
    {
        $request = $this->apiIntegrationV1GlossariesGetRequest($contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\SmartCat\Model\GlossaryModel[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SmartCat\Model\GlossaryModel[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SmartCat\Model\GlossaryModel[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SmartCat\Model\GlossaryModel[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SmartCat\Model\GlossaryModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiIntegrationV1GlossariesGetAsync
     *
     * Fetch glossaries from the current account
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossariesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1GlossariesGetAsync(string $contentType = self::contentTypes['apiIntegrationV1GlossariesGet'][0])
    {
        return $this->apiIntegrationV1GlossariesGetAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiIntegrationV1GlossariesGetAsyncWithHttpInfo
     *
     * Fetch glossaries from the current account
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossariesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1GlossariesGetAsyncWithHttpInfo(string $contentType = self::contentTypes['apiIntegrationV1GlossariesGet'][0])
    {
        $returnType = '\SmartCat\Model\GlossaryModel[]';
        $request = $this->apiIntegrationV1GlossariesGetRequest($contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiIntegrationV1GlossariesGet'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossariesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiIntegrationV1GlossariesGetRequest(string $contentType = self::contentTypes['apiIntegrationV1GlossariesGet'][0])
    {


        $resourcePath = '/api/integration/v1/glossaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiIntegrationV1GlossaryImportPost
     *
     * Create a task for importing concepts from a glossary file
     *
     * @param  \SmartCat\Model\UploadedFile $uploadedFile File containing imported concepts (required)
     * @param  string $glossaryId Glossary ID (required)
     * @param  bool $clearBeforeImport Specifies whether to delete all glossary concepts before the import (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportPost'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function apiIntegrationV1GlossaryImportPost($uploadedFile, $glossaryId, $clearBeforeImport, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportPost'][0])
    {
        list($response) = $this->apiIntegrationV1GlossaryImportPostWithHttpInfo($uploadedFile, $glossaryId, $clearBeforeImport, $contentType);
        return $response;
    }

    /**
     * Operation apiIntegrationV1GlossaryImportPostWithHttpInfo
     *
     * Create a task for importing concepts from a glossary file
     *
     * @param  \SmartCat\Model\UploadedFile $uploadedFile File containing imported concepts (required)
     * @param  string $glossaryId Glossary ID (required)
     * @param  bool $clearBeforeImport Specifies whether to delete all glossary concepts before the import (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportPost'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiIntegrationV1GlossaryImportPostWithHttpInfo($uploadedFile, $glossaryId, $clearBeforeImport, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportPost'][0])
    {
        $request = $this->apiIntegrationV1GlossaryImportPostRequest($uploadedFile, $glossaryId, $clearBeforeImport, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiIntegrationV1GlossaryImportPostAsync
     *
     * Create a task for importing concepts from a glossary file
     *
     * @param  \SmartCat\Model\UploadedFile $uploadedFile File containing imported concepts (required)
     * @param  string $glossaryId Glossary ID (required)
     * @param  bool $clearBeforeImport Specifies whether to delete all glossary concepts before the import (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1GlossaryImportPostAsync($uploadedFile, $glossaryId, $clearBeforeImport, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportPost'][0])
    {
        return $this->apiIntegrationV1GlossaryImportPostAsyncWithHttpInfo($uploadedFile, $glossaryId, $clearBeforeImport, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiIntegrationV1GlossaryImportPostAsyncWithHttpInfo
     *
     * Create a task for importing concepts from a glossary file
     *
     * @param  \SmartCat\Model\UploadedFile $uploadedFile File containing imported concepts (required)
     * @param  string $glossaryId Glossary ID (required)
     * @param  bool $clearBeforeImport Specifies whether to delete all glossary concepts before the import (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1GlossaryImportPostAsyncWithHttpInfo($uploadedFile, $glossaryId, $clearBeforeImport, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportPost'][0])
    {
        $returnType = 'string';
        $request = $this->apiIntegrationV1GlossaryImportPostRequest($uploadedFile, $glossaryId, $clearBeforeImport, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiIntegrationV1GlossaryImportPost'
     *
     * @param  \SmartCat\Model\UploadedFile $uploadedFile File containing imported concepts (required)
     * @param  string $glossaryId Glossary ID (required)
     * @param  bool $clearBeforeImport Specifies whether to delete all glossary concepts before the import (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiIntegrationV1GlossaryImportPostRequest($uploadedFile, $glossaryId, $clearBeforeImport, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportPost'][0])
    {

        // verify the required parameter 'uploadedFile' is set
        if ($uploadedFile === null || (is_array($uploadedFile) && count($uploadedFile) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $uploadedFile when calling apiIntegrationV1GlossaryImportPost'
            );
        }

        // verify the required parameter 'glossaryId' is set
        if ($glossaryId === null || (is_array($glossaryId) && count($glossaryId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $glossaryId when calling apiIntegrationV1GlossaryImportPost'
            );
        }

        // verify the required parameter 'clearBeforeImport' is set
        if ($clearBeforeImport === null || (is_array($clearBeforeImport) && count($clearBeforeImport) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $clearBeforeImport when calling apiIntegrationV1GlossaryImportPost'
            );
        }


        $resourcePath = '/api/integration/v1/glossary/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $glossaryId,
            'glossaryId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $clearBeforeImport,
            'clearBeforeImport', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($uploadedFile)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($uploadedFile));
            } else {
                $httpBody = $uploadedFile;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiIntegrationV1GlossaryImportTaskStateTaskIdGet
     *
     * Fetch the status of a concept import task
     *
     * @param  string $taskId Concept import task ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function apiIntegrationV1GlossaryImportTaskStateTaskIdGet($taskId, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'][0])
    {
        list($response) = $this->apiIntegrationV1GlossaryImportTaskStateTaskIdGetWithHttpInfo($taskId, $contentType);
        return $response;
    }

    /**
     * Operation apiIntegrationV1GlossaryImportTaskStateTaskIdGetWithHttpInfo
     *
     * Fetch the status of a concept import task
     *
     * @param  string $taskId Concept import task ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiIntegrationV1GlossaryImportTaskStateTaskIdGetWithHttpInfo($taskId, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'][0])
    {
        $request = $this->apiIntegrationV1GlossaryImportTaskStateTaskIdGetRequest($taskId, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('string' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'string';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiIntegrationV1GlossaryImportTaskStateTaskIdGetAsync
     *
     * Fetch the status of a concept import task
     *
     * @param  string $taskId Concept import task ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1GlossaryImportTaskStateTaskIdGetAsync($taskId, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'][0])
    {
        return $this->apiIntegrationV1GlossaryImportTaskStateTaskIdGetAsyncWithHttpInfo($taskId, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiIntegrationV1GlossaryImportTaskStateTaskIdGetAsyncWithHttpInfo
     *
     * Fetch the status of a concept import task
     *
     * @param  string $taskId Concept import task ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1GlossaryImportTaskStateTaskIdGetAsyncWithHttpInfo($taskId, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'][0])
    {
        $returnType = 'string';
        $request = $this->apiIntegrationV1GlossaryImportTaskStateTaskIdGetRequest($taskId, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiIntegrationV1GlossaryImportTaskStateTaskIdGet'
     *
     * @param  string $taskId Concept import task ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiIntegrationV1GlossaryImportTaskStateTaskIdGetRequest($taskId, string $contentType = self::contentTypes['apiIntegrationV1GlossaryImportTaskStateTaskIdGet'][0])
    {

        // verify the required parameter 'taskId' is set
        if ($taskId === null || (is_array($taskId) && count($taskId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $taskId when calling apiIntegrationV1GlossaryImportTaskStateTaskIdGet'
            );
        }


        $resourcePath = '/api/integration/v1/glossary/importTaskState/{taskId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($taskId !== null) {
            $resourcePath = str_replace(
                '{' . 'taskId' . '}',
                ObjectSerializer::toPathValue($taskId),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
