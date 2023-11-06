<?php

namespace App\Http\Requests\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Determine login column name based on input (username or email)
     *
     * @return string
     */
    public function identity()
    {
        return filter_var($this->identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'identity' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();
        $identity = $this->string('identity');
        $password = $this->string('password');
        $hash_password = Hash::make($password);
        $remember = $this->boolean('remember');
        if (!Auth::guard('admin')->attempt([$this->identity() => $identity, 'password' => $password], $remember)) {
            RateLimiter::hit($this->throttleKey());

            // throw ValidationException::withMessages([
            //     'identity' => trans('auth.failed'),
            // ]);
            if (!Admin::where('email', $identity)->exists()) {
                $errors['email'] = trans('Email ID is not correct');
            } else if (!Admin::where('password', $hash_password)->exists()) {
                $errors['password'] = trans('Password is not correct');
            }

            throw ValidationException::withMessages($errors);
        }

        RateLimiter::clear($this->throttleKey());
    }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (!RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'identity' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower($this->input('identity')) . '|' . $this->ip();
    }
}
