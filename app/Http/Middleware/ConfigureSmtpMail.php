<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin\Smtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ConfigureSmtpMail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Fetch active SMTP settings from the database
        $smtp = Smtp::where('status', 'active')->first();

        // If SMTP settings are found, set the mail configuration dynamically
        if ($smtp) {
            Config::set('mail.mailers.smtp.host', $smtp->host);
            Config::set('mail.mailers.smtp.port', $smtp->port);
            Config::set('mail.mailers.smtp.encryption', $smtp->encryption);
            Config::set('mail.mailers.smtp.username', $smtp->username);
            Config::set('mail.mailers.smtp.password', $smtp->password);
            Config::set('mail.from.address', $smtp->from_address);
            Config::set('mail.from.name', $smtp->from_name);
            // More settings can be configured as needed
        }

        return $next($request);
    }
}
