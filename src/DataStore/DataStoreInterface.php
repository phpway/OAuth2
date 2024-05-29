<?php
namespace OAuth2\DataStore;

interface DataStoreInterface
{
    public function clientExists(string $clientId): bool;
    public function scopeExists(string $scope): bool;
    public function getRedirectUrls(string $clientId): array;
    public function saveAuthorizationCode(AuthorizationCode $authorizationCode): void;
    public function saveAccessToken(AccessToken $token): void;
    public function getAuthorizationCode($authorization_code): array;
    public function deleteAuthorizationCode(string $code): void;
}