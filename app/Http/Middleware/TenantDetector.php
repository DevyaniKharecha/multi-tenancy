<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\TenantManager;
use App\Models\Tenants;

class TenantDetector
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $host = $request->getHost(); 
       $parts = explode('.', $host);

       $subdomain = $parts[0] ?? null;

       if ($subdomain) {
           $tenant = Tenants::where('subdomain', $subdomain)->first();
           if ($tenant) {
               resolve(TenantManager::class)->setTenant($tenant);
           } else {
               Optionally: abort(404, 'Tenant not found');
           }
       }

       return $next($request);
    }
}
