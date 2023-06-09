<?php
/**
 * AssignmentTemplatesApi
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
 * AssignmentTemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssignmentTemplatesApi
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
        'apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost' => [
            'application/json',
        ],
        'apiIntegrationV1AssignmentTemplatesProjectProjectIdGet' => [
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
     * Operation apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost
     *
     * Apply an assignment template to the project
     *
     * @param  string $assignmentTemplateId assignment template ID (required)
     * @param  string $projectId project ID (required)
     * @param  int $deadlineHours set a deadline in hours (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SmartCat\Model\AssignmentTemplateApplicationResultModel
     */
    public function apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost($assignmentTemplateId, $projectId, $deadlineHours = null, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'][0])
    {
        list($response) = $this->apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostWithHttpInfo($assignmentTemplateId, $projectId, $deadlineHours, $contentType);
        return $response;
    }

    /**
     * Operation apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostWithHttpInfo
     *
     * Apply an assignment template to the project
     *
     * @param  string $assignmentTemplateId assignment template ID (required)
     * @param  string $projectId project ID (required)
     * @param  int $deadlineHours set a deadline in hours (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SmartCat\Model\AssignmentTemplateApplicationResultModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostWithHttpInfo($assignmentTemplateId, $projectId, $deadlineHours = null, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'][0])
    {
        $request = $this->apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostRequest($assignmentTemplateId, $projectId, $deadlineHours, $contentType);

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
                    if ('\SmartCat\Model\AssignmentTemplateApplicationResultModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SmartCat\Model\AssignmentTemplateApplicationResultModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SmartCat\Model\AssignmentTemplateApplicationResultModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SmartCat\Model\AssignmentTemplateApplicationResultModel';
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
                        '\SmartCat\Model\AssignmentTemplateApplicationResultModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostAsync
     *
     * Apply an assignment template to the project
     *
     * @param  string $assignmentTemplateId assignment template ID (required)
     * @param  string $projectId project ID (required)
     * @param  int $deadlineHours set a deadline in hours (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostAsync($assignmentTemplateId, $projectId, $deadlineHours = null, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'][0])
    {
        return $this->apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostAsyncWithHttpInfo($assignmentTemplateId, $projectId, $deadlineHours, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostAsyncWithHttpInfo
     *
     * Apply an assignment template to the project
     *
     * @param  string $assignmentTemplateId assignment template ID (required)
     * @param  string $projectId project ID (required)
     * @param  int $deadlineHours set a deadline in hours (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostAsyncWithHttpInfo($assignmentTemplateId, $projectId, $deadlineHours = null, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'][0])
    {
        $returnType = '\SmartCat\Model\AssignmentTemplateApplicationResultModel';
        $request = $this->apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostRequest($assignmentTemplateId, $projectId, $deadlineHours, $contentType);

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
     * Create request for operation 'apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'
     *
     * @param  string $assignmentTemplateId assignment template ID (required)
     * @param  string $projectId project ID (required)
     * @param  int $deadlineHours set a deadline in hours (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPostRequest($assignmentTemplateId, $projectId, $deadlineHours = null, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'][0])
    {

        // verify the required parameter 'assignmentTemplateId' is set
        if ($assignmentTemplateId === null || (is_array($assignmentTemplateId) && count($assignmentTemplateId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $assignmentTemplateId when calling apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'
            );
        }

        // verify the required parameter 'projectId' is set
        if ($projectId === null || (is_array($projectId) && count($projectId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $projectId when calling apiIntegrationV1AssignmentTemplatesAssignmentTemplateIdProjectProjectIdPost'
            );
        }



        $resourcePath = '/api/integration/v1/assignment-templates/{assignmentTemplateId}/project/{projectId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $deadlineHours,
            'deadlineHours', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($assignmentTemplateId !== null) {
            $resourcePath = str_replace(
                '{' . 'assignmentTemplateId' . '}',
                ObjectSerializer::toPathValue($assignmentTemplateId),
                $resourcePath
            );
        }
        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                '{' . 'projectId' . '}',
                ObjectSerializer::toPathValue($projectId),
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiIntegrationV1AssignmentTemplatesProjectProjectIdGet
     *
     * Get a list of available assignment templates
     *
     * @param  string $projectId project ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SmartCat\Model\AssignmentTemplateModel[]
     */
    public function apiIntegrationV1AssignmentTemplatesProjectProjectIdGet($projectId, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'][0])
    {
        list($response) = $this->apiIntegrationV1AssignmentTemplatesProjectProjectIdGetWithHttpInfo($projectId, $contentType);
        return $response;
    }

    /**
     * Operation apiIntegrationV1AssignmentTemplatesProjectProjectIdGetWithHttpInfo
     *
     * Get a list of available assignment templates
     *
     * @param  string $projectId project ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SmartCat\Model\AssignmentTemplateModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiIntegrationV1AssignmentTemplatesProjectProjectIdGetWithHttpInfo($projectId, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'][0])
    {
        $request = $this->apiIntegrationV1AssignmentTemplatesProjectProjectIdGetRequest($projectId, $contentType);

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
                    if ('\SmartCat\Model\AssignmentTemplateModel[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SmartCat\Model\AssignmentTemplateModel[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SmartCat\Model\AssignmentTemplateModel[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SmartCat\Model\AssignmentTemplateModel[]';
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
                        '\SmartCat\Model\AssignmentTemplateModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiIntegrationV1AssignmentTemplatesProjectProjectIdGetAsync
     *
     * Get a list of available assignment templates
     *
     * @param  string $projectId project ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1AssignmentTemplatesProjectProjectIdGetAsync($projectId, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'][0])
    {
        return $this->apiIntegrationV1AssignmentTemplatesProjectProjectIdGetAsyncWithHttpInfo($projectId, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiIntegrationV1AssignmentTemplatesProjectProjectIdGetAsyncWithHttpInfo
     *
     * Get a list of available assignment templates
     *
     * @param  string $projectId project ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1AssignmentTemplatesProjectProjectIdGetAsyncWithHttpInfo($projectId, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'][0])
    {
        $returnType = '\SmartCat\Model\AssignmentTemplateModel[]';
        $request = $this->apiIntegrationV1AssignmentTemplatesProjectProjectIdGetRequest($projectId, $contentType);

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
     * Create request for operation 'apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'
     *
     * @param  string $projectId project ID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiIntegrationV1AssignmentTemplatesProjectProjectIdGetRequest($projectId, string $contentType = self::contentTypes['apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'][0])
    {

        // verify the required parameter 'projectId' is set
        if ($projectId === null || (is_array($projectId) && count($projectId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $projectId when calling apiIntegrationV1AssignmentTemplatesProjectProjectIdGet'
            );
        }


        $resourcePath = '/api/integration/v1/assignment-templates/project/{projectId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($projectId !== null) {
            $resourcePath = str_replace(
                '{' . 'projectId' . '}',
                ObjectSerializer::toPathValue($projectId),
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
