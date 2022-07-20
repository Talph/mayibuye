<?php

namespace App\Http\Services;

use App\Models\Client;

class ClientService
{
    public function storeClient(mixed $request){
        return Client::updateOrCreate(
            [
                'id' => $request->id,
            ],[
            'client_name' => $request->get('client_name'),
            'client_desc' => $request->get('client_desc'),
            'value_added' => $request->get('value_added'),
            'is_published' => $request->get('is_published') == 1,
            'user_id' => auth()->id(),
        ]);
    }
}