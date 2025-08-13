<?php

namespace App\Services;

use App\Models\Tenant;

class TenantManager
{
    protected $tenant = null;

    public function setTenant($tenant)
    {
        $this->tenant = $tenant;
    }

    public function getTenant()
    {
        return $this->tenant;
    }

    public function tenantId()
    {
        return $this->tenant->id ?? null;
    }
}
