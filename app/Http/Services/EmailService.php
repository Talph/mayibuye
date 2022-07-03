<?php

namespace App\Http\Services;


use App\Models\Email;

class EmailService
{
    public function storeEmail(mixed $request){
        return Email::create([
            'first__name' => $request->get('first__name'),
            'last__name' => $request->get('last__name'),
            '__phone' => $request->get('__phone'),
            '__message' => $request->get('__message'),
            '__email' => $request->get('__email'),
            '__terms' => $request->get('__terms') === 'on'
        ]);
    }
}