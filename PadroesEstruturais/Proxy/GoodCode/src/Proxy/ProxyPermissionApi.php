<?php

namespace Src\Proxy;

use Src\Adapter\PermissionApi;

class ProxyPermissionApi extends PermissionApi
{

    private ?bool $verifyPermissionCache = null;
    private PermissionApi $permissionApi;

    public function __construct(PermissionApi $permissionApi)
    {
        $this->permissionApi = $permissionApi;
    }

    public function verifyPermission(string $permission): bool
    {
        if($this->verifyPermissionCache === null) {
            $this->verifyPermissionCache = $this->permissionApi->verifyPermission($permission);
        }

        return $this->verifyPermissionCache;
    }

}