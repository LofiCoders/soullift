<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Illuminate\Http\RedirectResponse;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SubscriberComponent extends Component
{
    #[Rule('required|email|min:5', message: 'You need to provide the email')]
    public string $email = '';

    public function subscribe(): RedirectResponse
    {
        $this->validate();

        Subscriber::create(['email' => $this->email]);

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.subscriber-component');
    }
}
