<?php
/**
 * FirewallApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Upcloud api
 *
 * The UpCloud API consists of operations used to control resources on UpCloud. The API is a web service interface. HTTPS is used to connect to the API. The API follows the principles of a RESTful web service wherever possible. The base URL for all API operations is  https://api.upcloud.com/. All API operations require authentication.
 *
 * OpenAPI spec version: 1.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * FirewallApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FirewallApi
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
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberDelete
     *
     * Remove firewall rule
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberDelete($server_id, $firewall_rule_number)
    {
        $this->serverServerIdFirewallRuleFirewallRuleNumberDeleteWithHttpInfo($server_id, $firewall_rule_number);
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberDeleteWithHttpInfo
     *
     * Remove firewall rule
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberDeleteWithHttpInfo($server_id, $firewall_rule_number)
    {
        $returnType = '';
        $request = $this->serverServerIdFirewallRuleFirewallRuleNumberDeleteRequest($server_id, $firewall_rule_number);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberDeleteAsync
     *
     * Remove firewall rule
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberDeleteAsync($server_id, $firewall_rule_number)
    {
        return $this->serverServerIdFirewallRuleFirewallRuleNumberDeleteAsyncWithHttpInfo($server_id, $firewall_rule_number)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberDeleteAsyncWithHttpInfo
     *
     * Remove firewall rule
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberDeleteAsyncWithHttpInfo($server_id, $firewall_rule_number)
    {
        $returnType = '';
        $request = $this->serverServerIdFirewallRuleFirewallRuleNumberDeleteRequest($server_id, $firewall_rule_number);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'serverServerIdFirewallRuleFirewallRuleNumberDelete'
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function serverServerIdFirewallRuleFirewallRuleNumberDeleteRequest($server_id, $firewall_rule_number)
    {
        // verify the required parameter 'server_id' is set
        if ($server_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $server_id when calling serverServerIdFirewallRuleFirewallRuleNumberDelete');
        }
        // verify the required parameter 'firewall_rule_number' is set
        if ($firewall_rule_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $firewall_rule_number when calling serverServerIdFirewallRuleFirewallRuleNumberDelete');
        }

        $resourcePath = '/server/{serverId}/firewall_rule/{firewallRuleNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($server_id !== null) {
            $resourcePath = str_replace('{' . 'serverId' . '}', ObjectSerializer::toPathValue($server_id), $resourcePath);
        }
        // path params
        if ($firewall_rule_number !== null) {
            $resourcePath = str_replace('{' . 'firewallRuleNumber' . '}', ObjectSerializer::toPathValue($firewall_rule_number), $resourcePath);
        }


        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'DELETE',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberGet
     *
     * Get firewall rule details
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2008
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberGet($server_id, $firewall_rule_number)
    {
        list($response) = $this->serverServerIdFirewallRuleFirewallRuleNumberGetWithHttpInfo($server_id, $firewall_rule_number);
        return $response;
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberGetWithHttpInfo
     *
     * Get firewall rule details
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberGetWithHttpInfo($server_id, $firewall_rule_number)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2008';
        $request = $this->serverServerIdFirewallRuleFirewallRuleNumberGetRequest($server_id, $firewall_rule_number);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2008', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberGetAsync
     *
     * Get firewall rule details
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberGetAsync($server_id, $firewall_rule_number)
    {
        return $this->serverServerIdFirewallRuleFirewallRuleNumberGetAsyncWithHttpInfo($server_id, $firewall_rule_number)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation serverServerIdFirewallRuleFirewallRuleNumberGetAsyncWithHttpInfo
     *
     * Get firewall rule details
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRuleFirewallRuleNumberGetAsyncWithHttpInfo($server_id, $firewall_rule_number)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2008';
        $request = $this->serverServerIdFirewallRuleFirewallRuleNumberGetRequest($server_id, $firewall_rule_number);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'serverServerIdFirewallRuleFirewallRuleNumberGet'
     *
     * @param string $server_id Server id (required)
     * @param string $firewall_rule_number Denotes the index of the firewall rule in the server&#39;s firewall rule list (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function serverServerIdFirewallRuleFirewallRuleNumberGetRequest($server_id, $firewall_rule_number)
    {
        // verify the required parameter 'server_id' is set
        if ($server_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $server_id when calling serverServerIdFirewallRuleFirewallRuleNumberGet');
        }
        // verify the required parameter 'firewall_rule_number' is set
        if ($firewall_rule_number === null) {
            throw new \InvalidArgumentException('Missing the required parameter $firewall_rule_number when calling serverServerIdFirewallRuleFirewallRuleNumberGet');
        }

        $resourcePath = '/server/{serverId}/firewall_rule/{firewallRuleNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($server_id !== null) {
            $resourcePath = str_replace('{' . 'serverId' . '}', ObjectSerializer::toPathValue($server_id), $resourcePath);
        }
        // path params
        if ($firewall_rule_number !== null) {
            $resourcePath = str_replace('{' . 'firewallRuleNumber' . '}', ObjectSerializer::toPathValue($firewall_rule_number), $resourcePath);
        }


        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation serverServerIdFirewallRuleGet
     *
     * List firewall rules
     *
     * @param string $server_id Server id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2007
     */
    public function serverServerIdFirewallRuleGet($server_id)
    {
        list($response) = $this->serverServerIdFirewallRuleGetWithHttpInfo($server_id);
        return $response;
    }

    /**
     * Operation serverServerIdFirewallRuleGetWithHttpInfo
     *
     * List firewall rules
     *
     * @param string $server_id Server id (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2007, HTTP status code, HTTP response headers (array of strings)
     */
    public function serverServerIdFirewallRuleGetWithHttpInfo($server_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2007';
        $request = $this->serverServerIdFirewallRuleGetRequest($server_id);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2007', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation serverServerIdFirewallRuleGetAsync
     *
     * List firewall rules
     *
     * @param string $server_id Server id (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRuleGetAsync($server_id)
    {
        return $this->serverServerIdFirewallRuleGetAsyncWithHttpInfo($server_id)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation serverServerIdFirewallRuleGetAsyncWithHttpInfo
     *
     * List firewall rules
     *
     * @param string $server_id Server id (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRuleGetAsyncWithHttpInfo($server_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2007';
        $request = $this->serverServerIdFirewallRuleGetRequest($server_id);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'serverServerIdFirewallRuleGet'
     *
     * @param string $server_id Server id (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function serverServerIdFirewallRuleGetRequest($server_id)
    {
        // verify the required parameter 'server_id' is set
        if ($server_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $server_id when calling serverServerIdFirewallRuleGet');
        }

        $resourcePath = '/server/{serverId}/firewall_rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($server_id !== null) {
            $resourcePath = str_replace('{' . 'serverId' . '}', ObjectSerializer::toPathValue($server_id), $resourcePath);
        }


        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'GET',
            $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Operation serverServerIdFirewallRulePost
     *
     * Create firewall rule
     *
     * @param string $server_id Server id (required)
     * @param \Swagger\Client\Model\FirewallRule $firewall_rule  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function serverServerIdFirewallRulePost($server_id, $firewall_rule)
    {
        $this->serverServerIdFirewallRulePostWithHttpInfo($server_id, $firewall_rule);
    }

    /**
     * Operation serverServerIdFirewallRulePostWithHttpInfo
     *
     * Create firewall rule
     *
     * @param string $server_id Server id (required)
     * @param \Swagger\Client\Model\FirewallRule $firewall_rule  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function serverServerIdFirewallRulePostWithHttpInfo($server_id, $firewall_rule)
    {
        $returnType = '';
        $request = $this->serverServerIdFirewallRulePostRequest($server_id, $firewall_rule);

        try {

            try {
                $response = $this->client->send($request);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    "[$statusCode] Error connecting to the API ({$request->getUri()})",
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 402:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation serverServerIdFirewallRulePostAsync
     *
     * Create firewall rule
     *
     * @param string $server_id Server id (required)
     * @param \Swagger\Client\Model\FirewallRule $firewall_rule  (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRulePostAsync($server_id, $firewall_rule)
    {
        return $this->serverServerIdFirewallRulePostAsyncWithHttpInfo($server_id, $firewall_rule)->then(function ($response) {
            return $response[0];
        });
    }

    /**
     * Operation serverServerIdFirewallRulePostAsyncWithHttpInfo
     *
     * Create firewall rule
     *
     * @param string $server_id Server id (required)
     * @param \Swagger\Client\Model\FirewallRule $firewall_rule  (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function serverServerIdFirewallRulePostAsyncWithHttpInfo($server_id, $firewall_rule)
    {
        $returnType = '';
        $request = $this->serverServerIdFirewallRulePostRequest($server_id, $firewall_rule);

        return $this->client->sendAsync($request)->then(function ($response) use ($returnType) {
            return [null, $response->getStatusCode(), $response->getHeaders()];
        }, function ($exception) {
            $response = $exception->getResponse();
            $statusCode = $response->getStatusCode();
            throw new ApiException(
                "[$statusCode] Error connecting to the API ({$exception->getRequest()->getUri()})",
                $statusCode,
                $response->getHeaders(),
                $response->getBody()
            );
        });
    }

    /**
     * Create request for operation 'serverServerIdFirewallRulePost'
     *
     * @param string $server_id Server id (required)
     * @param \Swagger\Client\Model\FirewallRule $firewall_rule  (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function serverServerIdFirewallRulePostRequest($server_id, $firewall_rule)
    {
        // verify the required parameter 'server_id' is set
        if ($server_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $server_id when calling serverServerIdFirewallRulePost');
        }
        // verify the required parameter 'firewall_rule' is set
        if ($firewall_rule === null) {
            throw new \InvalidArgumentException('Missing the required parameter $firewall_rule when calling serverServerIdFirewallRulePost');
        }

        $resourcePath = '/server/{serverId}/firewall_rule';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($server_id !== null) {
            $resourcePath = str_replace('{' . 'serverId' . '}', ObjectSerializer::toPathValue($server_id), $resourcePath);
        }

        // body params
        $_tempBody = null;
        if (isset($firewall_rule)) {
            $_tempBody = $firewall_rule;
        }

        if ($multipart) {
            $headers= $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present

        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                $httpBody = new MultipartStream($multipartContents); // for HTTP post (form)

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams); // for HTTP post (form)
            }
        }


        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        $url = $this->config->getHost() . $resourcePath . ($query ? '?' . $query : '');

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        return new Request(
            'POST',
            $url,
            $headers,
            $httpBody
        );
    }

}
