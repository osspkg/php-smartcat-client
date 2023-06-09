<?php
/**
 * SegmentConfirmationStatisticsApi
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
 * SegmentConfirmationStatisticsApi Class Doc Comment
 *
 * @category Class
 * @package  SmartCat
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SegmentConfirmationStatisticsApi
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
        'apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet' => [
            'application/json',
        ],
        'apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet' => [
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
     * Operation apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $accountUserId ID of the supplier (user) in the account. If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SmartCat\Model\SegmentConfirmationStatisticsModel[]
     */
    public function apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $accountUserId = null, string $contentType = self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        list($response) = $this->apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetWithHttpInfo($projectId, $from, $to, $documentId, $targetLanguage, $accountUserId, $contentType);
        return $response;
    }

    /**
     * Operation apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetWithHttpInfo
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $accountUserId ID of the supplier (user) in the account. If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SmartCat\Model\SegmentConfirmationStatisticsModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetWithHttpInfo($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $accountUserId = null, string $contentType = self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        $request = $this->apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetRequest($projectId, $from, $to, $documentId, $targetLanguage, $accountUserId, $contentType);

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
                    if ('\SmartCat\Model\SegmentConfirmationStatisticsModel[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SmartCat\Model\SegmentConfirmationStatisticsModel[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SmartCat\Model\SegmentConfirmationStatisticsModel[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SmartCat\Model\SegmentConfirmationStatisticsModel[]';
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
                        '\SmartCat\Model\SegmentConfirmationStatisticsModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetAsync
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $accountUserId ID of the supplier (user) in the account. If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetAsync($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $accountUserId = null, string $contentType = self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        return $this->apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetAsyncWithHttpInfo($projectId, $from, $to, $documentId, $targetLanguage, $accountUserId, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetAsyncWithHttpInfo
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $accountUserId ID of the supplier (user) in the account. If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetAsyncWithHttpInfo($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $accountUserId = null, string $contentType = self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        $returnType = '\SmartCat\Model\SegmentConfirmationStatisticsModel[]';
        $request = $this->apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetRequest($projectId, $from, $to, $documentId, $targetLanguage, $accountUserId, $contentType);

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
     * Create request for operation 'apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date (inclusive) for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $accountUserId ID of the supplier (user) in the account. If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiIntegrationV1SegmentConfirmationStatisticsProjectIdGetRequest($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $accountUserId = null, string $contentType = self::contentTypes['apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'][0])
    {

        // verify the required parameter 'projectId' is set
        if ($projectId === null || (is_array($projectId) && count($projectId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $projectId when calling apiIntegrationV1SegmentConfirmationStatisticsProjectIdGet'
            );
        }







        $resourcePath = '/api/integration/v1/segment-confirmation-statistics/{projectId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from,
            'from', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $documentId,
            'documentId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $targetLanguage,
            'targetLanguage', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $accountUserId,
            'accountUserId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


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
     * Operation apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $userId ID of the supplier (user). If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SmartCat\Model\UserSegmentConfirmationStatisticsModel[]
     */
    public function apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $userId = null, string $contentType = self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        list($response) = $this->apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetWithHttpInfo($projectId, $from, $to, $documentId, $targetLanguage, $userId, $contentType);
        return $response;
    }

    /**
     * Operation apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetWithHttpInfo
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $userId ID of the supplier (user). If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \SmartCat\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SmartCat\Model\UserSegmentConfirmationStatisticsModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetWithHttpInfo($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $userId = null, string $contentType = self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        $request = $this->apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetRequest($projectId, $from, $to, $documentId, $targetLanguage, $userId, $contentType);

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
                    if ('\SmartCat\Model\UserSegmentConfirmationStatisticsModel[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\SmartCat\Model\UserSegmentConfirmationStatisticsModel[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SmartCat\Model\UserSegmentConfirmationStatisticsModel[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SmartCat\Model\UserSegmentConfirmationStatisticsModel[]';
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
                        '\SmartCat\Model\UserSegmentConfirmationStatisticsModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetAsync
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $userId ID of the supplier (user). If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetAsync($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $userId = null, string $contentType = self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        return $this->apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetAsyncWithHttpInfo($projectId, $from, $to, $documentId, $targetLanguage, $userId, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetAsyncWithHttpInfo
     *
     * Fetch segment confirmation statistics
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $userId ID of the supplier (user). If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetAsyncWithHttpInfo($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $userId = null, string $contentType = self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'][0])
    {
        $returnType = '\SmartCat\Model\UserSegmentConfirmationStatisticsModel[]';
        $request = $this->apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetRequest($projectId, $from, $to, $documentId, $targetLanguage, $userId, $contentType);

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
     * Create request for operation 'apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'
     *
     * @param  string $projectId Project ID (required)
     * @param  \DateTime $from The period starting date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  \DateTime $to The period end date for which statistics are requested. If not specified, this argument is not applicable (optional)
     * @param  string $documentId Document ID (optional)
     * @param  string $targetLanguage Target language code (optional)
     * @param  string $userId ID of the supplier (user). If not specified, include all suppliers (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiIntegrationV2SegmentConfirmationStatisticsProjectIdGetRequest($projectId, $from = null, $to = null, $documentId = null, $targetLanguage = null, $userId = null, string $contentType = self::contentTypes['apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'][0])
    {

        // verify the required parameter 'projectId' is set
        if ($projectId === null || (is_array($projectId) && count($projectId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $projectId when calling apiIntegrationV2SegmentConfirmationStatisticsProjectIdGet'
            );
        }







        $resourcePath = '/api/integration/v2/segment-confirmation-statistics/{projectId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from,
            'from', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to,
            'to', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $documentId,
            'documentId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $targetLanguage,
            'targetLanguage', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $userId,
            'userId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


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
