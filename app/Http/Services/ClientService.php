<?php

namespace App\Http\Services;

use App\Models\Client;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ClientService
{
    public function storeClient(Client $client, mixed $request): Model|Builder
    {
        return $client::query()->updateOrCreate(
            [
                'id' => $client->id,
            ],[
            'client_name' => $request->get('client_name'),
            'client_desc' => $request->get('client_desc'),
            'value_added' => $request->get('value_added'),
            'is_published' => $request->get('is_published') == 1,
            'user_id' => auth()->id(),
        ]);
    }
}