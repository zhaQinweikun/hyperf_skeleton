<?php


namespace App\Model;


use HyperfExt\Auth\Contracts\AuthenticatableInterface;
use HyperfExt\Jwt\Contracts\JwtSubjectInterface;

class Admin extends Model implements AuthenticatableInterface, JwtSubjectInterface
{
    protected  $table= 'admin';
    const CREATED_AT = "add_time";
    const UPDATED_AT = "update_time";

    public function getJwtIdentifier()
    {
        // TODO: Implement getJwtIdentifier() method.

        return $this->getKey();
    }

    public function getJwtCustomClaims(): array
    {
        // TODO: Implement getJwtCustomClaims() method.
        return [];
    }

    public function getAuthIdentifierName(): string
    {
        // TODO: Implement getAuthIdentifierName() method.
        return 'id';
    }

    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
        return (string)$this->attributes['id'];
    }

    public function getAuthPassword(): ?string
    {
        return $this->attributes['password'];
        // TODO: Implement getAuthPassword() method.
    }

    public function getRememberToken(): ?string
    {
        // TODO: Implement getRememberToken() method.
    }

    public function setRememberToken(string $value)
    {
        // TODO: Implement setRememberToken() method.
    }

    public function getRememberTokenName(): ?string
    {
        // TODO: Implement getRememberTokenName() method.
        return  'remember_token';
    }
}
