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
            'client_name' => $request->client_name,
            'client_desc' => $request->client_desc,
            'value_added' => $request->value_added,
            'is_published' => $request->is_published,
            'user_id' => auth()->user()->id,
        ]);
    }
}