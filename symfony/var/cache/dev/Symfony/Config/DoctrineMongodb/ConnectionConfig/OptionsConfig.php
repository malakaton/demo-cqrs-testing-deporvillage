<?php

namespace Symfony\Config\DoctrineMongodb\ConnectionConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class OptionsConfig 
{
    private $authMechanism;
    private $connectTimeoutMS;
    private $db;
    private $authSource;
    private $journal;
    private $password;
    private $readPreference;
    private $readPreferenceTags;
    private $replicaSet;
    private $socketTimeoutMS;
    private $ssl;
    private $tls;
    private $tlsAllowInvalidCertificates;
    private $tlsAllowInvalidHostnames;
    private $tlsCAFile;
    private $tlsCertificateKeyFile;
    private $tlsCertificateKeyFilePassword;
    private $tlsDisableCertificateRevocationCheck;
    private $tlsDisableOCSPEndpointCheck;
    private $tlsInsecure;
    private $username;
    private $retryReads;
    private $retryWrites;
    private $w;
    private $wTimeoutMS;
    private $fsync;
    private $slaveOkay;
    private $timeout;
    private $wTimeout;
    
    /**
     * @default null
     * @param ParamConfigurator|'SCRAM-SHA-1'|'MONGODB-CR'|'MONGODB-X509'|'PLAIN'|'GSSAPI' $value
     * @return $this
     */
    public function authMechanism($value): self
    {
        $this->authMechanism = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function connectTimeoutMS($value): self
    {
        $this->connectTimeoutMS = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function db($value): self
    {
        $this->db = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function authSource($value): self
    {
        $this->authSource = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function journal($value): self
    {
        $this->journal = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function password($value): self
    {
        $this->password = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|'primary'|'primaryPreferred'|'secondary'|'secondaryPreferred'|'nearest' $value
     * @return $this
     */
    public function readPreference($value): self
    {
        $this->readPreference = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<array|ParamConfigurator> $value
     * @return $this
     */
    public function readPreferenceTags($value): self
    {
        $this->readPreferenceTags = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function replicaSet($value): self
    {
        $this->replicaSet = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function socketTimeoutMS($value): self
    {
        $this->socketTimeoutMS = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function ssl($value): self
    {
        $this->ssl = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tls($value): self
    {
        $this->tls = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tlsAllowInvalidCertificates($value): self
    {
        $this->tlsAllowInvalidCertificates = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tlsAllowInvalidHostnames($value): self
    {
        $this->tlsAllowInvalidHostnames = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tlsCAFile($value): self
    {
        $this->tlsCAFile = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tlsCertificateKeyFile($value): self
    {
        $this->tlsCertificateKeyFile = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function tlsCertificateKeyFilePassword($value): self
    {
        $this->tlsCertificateKeyFilePassword = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tlsDisableCertificateRevocationCheck($value): self
    {
        $this->tlsDisableCertificateRevocationCheck = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tlsDisableOCSPEndpointCheck($value): self
    {
        $this->tlsDisableOCSPEndpointCheck = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function tlsInsecure($value): self
    {
        $this->tlsInsecure = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function username($value): self
    {
        $this->username = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function retryReads($value): self
    {
        $this->retryReads = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function retryWrites($value): self
    {
        $this->retryWrites = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function w($value): self
    {
        $this->w = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function wTimeoutMS($value): self
    {
        $this->wTimeoutMS = $value;
    
        return $this;
    }
    
    /**
     * Deprecated. Please use the "journal" option instead.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function fsync($value): self
    {
        $this->fsync = $value;
    
        return $this;
    }
    
    /**
     * Deprecated. Please use the "readPreference" option instead.
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function slaveOkay($value): self
    {
        $this->slaveOkay = $value;
    
        return $this;
    }
    
    /**
     * Deprecated. Please use the "connectTimeoutMS" option instead.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function timeout($value): self
    {
        $this->timeout = $value;
    
        return $this;
    }
    
    /**
     * Deprecated. Please use the "wTimeoutMS" option instead.
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function wTimeout($value): self
    {
        $this->wTimeout = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['authMechanism'])) {
            $this->authMechanism = $value['authMechanism'];
            unset($value['authMechanism']);
        }
    
        if (isset($value['connectTimeoutMS'])) {
            $this->connectTimeoutMS = $value['connectTimeoutMS'];
            unset($value['connectTimeoutMS']);
        }
    
        if (isset($value['db'])) {
            $this->db = $value['db'];
            unset($value['db']);
        }
    
        if (isset($value['authSource'])) {
            $this->authSource = $value['authSource'];
            unset($value['authSource']);
        }
    
        if (isset($value['journal'])) {
            $this->journal = $value['journal'];
            unset($value['journal']);
        }
    
        if (isset($value['password'])) {
            $this->password = $value['password'];
            unset($value['password']);
        }
    
        if (isset($value['readPreference'])) {
            $this->readPreference = $value['readPreference'];
            unset($value['readPreference']);
        }
    
        if (isset($value['readPreferenceTags'])) {
            $this->readPreferenceTags = $value['readPreferenceTags'];
            unset($value['readPreferenceTags']);
        }
    
        if (isset($value['replicaSet'])) {
            $this->replicaSet = $value['replicaSet'];
            unset($value['replicaSet']);
        }
    
        if (isset($value['socketTimeoutMS'])) {
            $this->socketTimeoutMS = $value['socketTimeoutMS'];
            unset($value['socketTimeoutMS']);
        }
    
        if (isset($value['ssl'])) {
            $this->ssl = $value['ssl'];
            unset($value['ssl']);
        }
    
        if (isset($value['tls'])) {
            $this->tls = $value['tls'];
            unset($value['tls']);
        }
    
        if (isset($value['tlsAllowInvalidCertificates'])) {
            $this->tlsAllowInvalidCertificates = $value['tlsAllowInvalidCertificates'];
            unset($value['tlsAllowInvalidCertificates']);
        }
    
        if (isset($value['tlsAllowInvalidHostnames'])) {
            $this->tlsAllowInvalidHostnames = $value['tlsAllowInvalidHostnames'];
            unset($value['tlsAllowInvalidHostnames']);
        }
    
        if (isset($value['tlsCAFile'])) {
            $this->tlsCAFile = $value['tlsCAFile'];
            unset($value['tlsCAFile']);
        }
    
        if (isset($value['tlsCertificateKeyFile'])) {
            $this->tlsCertificateKeyFile = $value['tlsCertificateKeyFile'];
            unset($value['tlsCertificateKeyFile']);
        }
    
        if (isset($value['tlsCertificateKeyFilePassword'])) {
            $this->tlsCertificateKeyFilePassword = $value['tlsCertificateKeyFilePassword'];
            unset($value['tlsCertificateKeyFilePassword']);
        }
    
        if (isset($value['tlsDisableCertificateRevocationCheck'])) {
            $this->tlsDisableCertificateRevocationCheck = $value['tlsDisableCertificateRevocationCheck'];
            unset($value['tlsDisableCertificateRevocationCheck']);
        }
    
        if (isset($value['tlsDisableOCSPEndpointCheck'])) {
            $this->tlsDisableOCSPEndpointCheck = $value['tlsDisableOCSPEndpointCheck'];
            unset($value['tlsDisableOCSPEndpointCheck']);
        }
    
        if (isset($value['tlsInsecure'])) {
            $this->tlsInsecure = $value['tlsInsecure'];
            unset($value['tlsInsecure']);
        }
    
        if (isset($value['username'])) {
            $this->username = $value['username'];
            unset($value['username']);
        }
    
        if (isset($value['retryReads'])) {
            $this->retryReads = $value['retryReads'];
            unset($value['retryReads']);
        }
    
        if (isset($value['retryWrites'])) {
            $this->retryWrites = $value['retryWrites'];
            unset($value['retryWrites']);
        }
    
        if (isset($value['w'])) {
            $this->w = $value['w'];
            unset($value['w']);
        }
    
        if (isset($value['wTimeoutMS'])) {
            $this->wTimeoutMS = $value['wTimeoutMS'];
            unset($value['wTimeoutMS']);
        }
    
        if (isset($value['fsync'])) {
            $this->fsync = $value['fsync'];
            unset($value['fsync']);
        }
    
        if (isset($value['slaveOkay'])) {
            $this->slaveOkay = $value['slaveOkay'];
            unset($value['slaveOkay']);
        }
    
        if (isset($value['timeout'])) {
            $this->timeout = $value['timeout'];
            unset($value['timeout']);
        }
    
        if (isset($value['wTimeout'])) {
            $this->wTimeout = $value['wTimeout'];
            unset($value['wTimeout']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->authMechanism) {
            $output['authMechanism'] = $this->authMechanism;
        }
        if (null !== $this->connectTimeoutMS) {
            $output['connectTimeoutMS'] = $this->connectTimeoutMS;
        }
        if (null !== $this->db) {
            $output['db'] = $this->db;
        }
        if (null !== $this->authSource) {
            $output['authSource'] = $this->authSource;
        }
        if (null !== $this->journal) {
            $output['journal'] = $this->journal;
        }
        if (null !== $this->password) {
            $output['password'] = $this->password;
        }
        if (null !== $this->readPreference) {
            $output['readPreference'] = $this->readPreference;
        }
        if (null !== $this->readPreferenceTags) {
            $output['readPreferenceTags'] = $this->readPreferenceTags;
        }
        if (null !== $this->replicaSet) {
            $output['replicaSet'] = $this->replicaSet;
        }
        if (null !== $this->socketTimeoutMS) {
            $output['socketTimeoutMS'] = $this->socketTimeoutMS;
        }
        if (null !== $this->ssl) {
            $output['ssl'] = $this->ssl;
        }
        if (null !== $this->tls) {
            $output['tls'] = $this->tls;
        }
        if (null !== $this->tlsAllowInvalidCertificates) {
            $output['tlsAllowInvalidCertificates'] = $this->tlsAllowInvalidCertificates;
        }
        if (null !== $this->tlsAllowInvalidHostnames) {
            $output['tlsAllowInvalidHostnames'] = $this->tlsAllowInvalidHostnames;
        }
        if (null !== $this->tlsCAFile) {
            $output['tlsCAFile'] = $this->tlsCAFile;
        }
        if (null !== $this->tlsCertificateKeyFile) {
            $output['tlsCertificateKeyFile'] = $this->tlsCertificateKeyFile;
        }
        if (null !== $this->tlsCertificateKeyFilePassword) {
            $output['tlsCertificateKeyFilePassword'] = $this->tlsCertificateKeyFilePassword;
        }
        if (null !== $this->tlsDisableCertificateRevocationCheck) {
            $output['tlsDisableCertificateRevocationCheck'] = $this->tlsDisableCertificateRevocationCheck;
        }
        if (null !== $this->tlsDisableOCSPEndpointCheck) {
            $output['tlsDisableOCSPEndpointCheck'] = $this->tlsDisableOCSPEndpointCheck;
        }
        if (null !== $this->tlsInsecure) {
            $output['tlsInsecure'] = $this->tlsInsecure;
        }
        if (null !== $this->username) {
            $output['username'] = $this->username;
        }
        if (null !== $this->retryReads) {
            $output['retryReads'] = $this->retryReads;
        }
        if (null !== $this->retryWrites) {
            $output['retryWrites'] = $this->retryWrites;
        }
        if (null !== $this->w) {
            $output['w'] = $this->w;
        }
        if (null !== $this->wTimeoutMS) {
            $output['wTimeoutMS'] = $this->wTimeoutMS;
        }
        if (null !== $this->fsync) {
            $output['fsync'] = $this->fsync;
        }
        if (null !== $this->slaveOkay) {
            $output['slaveOkay'] = $this->slaveOkay;
        }
        if (null !== $this->timeout) {
            $output['timeout'] = $this->timeout;
        }
        if (null !== $this->wTimeout) {
            $output['wTimeout'] = $this->wTimeout;
        }
    
        return $output;
    }

}
