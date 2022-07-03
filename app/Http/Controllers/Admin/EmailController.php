<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailFormRequest;
use App\Models\Email;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function index(): Factory|View|Application
    {
        $emails = Email::query()->paginate();

        return view('backend.dashboard.modules.emails.index',['emails' => $emails]);
    }

    public function create() {

        return view('backend.dashboard.modules.emails.create');
    }

    public function store(EmailFormRequest $request) {

        
    }

    public function show(Email $email) {

    }

    public function edit(Email $email) {
        return view('backend.dashboard.modules.forms.edit', ['email' => $email]);
    }

    public function destroy(Email $email) {

    }
}
