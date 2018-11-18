<?php

declare(strict_types=1);

/**
 * Provides a test for comments and indentation.
 *
 * Lorem ipsum dolor sit amet, ei usu mundi similique. Malis regione voluptatum ei vel, per no labore blandit, at
 * duo aeque vivendo vituperata. Eu his augue postea. Dicit praesent consulatu id per, eos propriae omnesque
 * facilisis an.
 */
class Commenting
{
    /**
     * Sub-delimiters used in user info, query strings and fragments.
     *
     * @const string
     */
    public const CHAR_SUB_DELIMS = '!\$&\'\(\)\*\+,;=';

    /** @var int[] Array indexed by valid scheme names to their corresponding ports. */
    protected $allowedSchemes = [];

    /** @var string */
    private $scheme = '';

    /**
     * generated uri string cache
     *
     * @var string|null
     */
    private $uriString;

    /**
     * @param string|resource|StreamInterface $body    Stream identifier and/or actual stream resource
     * @param int                             $status  Status code for the response, if any.
     * @param array                           $headers Headers for the response, if any.
     * @throws Exception\InvalidArgumentException on any invalid element.
     */
    public function __construct($body = 'php://memory', int $status = 200, array $headers = [])
    {
        // ..
    }

    /**
     * Create a request from the supplied superglobal values.
     *
     * If any argument is not supplied, the corresponding superglobal value will
     * be used.
     *
     * The ServerRequest created is then passed to the fromServer() method in
     * order to marshal the request URI and headers.
     *
     * @see fromServer()
     * @param array $server  $_SERVER superglobal
     * @param array $query   $_GET superglobal
     * @param array $body    $_POST superglobal
     * @param array $cookies $_COOKIE superglobal
     * @param array $files   $_FILES superglobal
     * @return ServerRequest
     */
    public static function fromGlobals(
        ?array $server = null,
        ?array $query = null,
        ?array $body = null,
        ?array $cookies = null,
        ?array $files = null
    ) : ServerRequest {
        // ...
    }

    /**
     * Is a given port non-standard for the current scheme?
     */
    private function isNonStandardPort(string $scheme, string $host, ?int $port) : bool
    {
        // ...
    }

    /**
     * Retrieve the user-info part of the URI.
     *
     * This value is percent-encoded, per RFC 3986 Section 3.2.1.
     *
     * {@inheritdoc}
     */
    public function getUserInfo() : string
    {
        // ...
    }

    /**
     * {@inheritdoc}
     */
    public function getHost() : string
    {
        // ...
    }

    /**
     * Filters a part of user info in a URI to ensure it is properly encoded.
     *
     * @param string $part
     * @return string
     */
    private function filterUserInfoPart(string $part) : string
    {
        // Note the addition of `%` to initial charset; this allows `|` portion
        // to match and thus prevent double-encoding.
        return 'foo';
    }
}