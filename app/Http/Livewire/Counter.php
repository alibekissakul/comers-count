<?php

namespace App\Http\Livewire;

use App\Events\UpdateCounter;
use Livewire\Component;
use App\Models\Counter as CounterModel;

class Counter extends Component
{
    public $counter = 0;
    public $listeners = ['echo:counter,UpdateCounter' => 'updateCounter'];

    public function mount()
    {
        $this->counter = optional(CounterModel::find(1))->counter;
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function updateCounter($data)
    {
        $this->counter = isset($data['counter']) ? $data['counter'] : $this->counter;
    }

    public function increment()
    {
        $this->updateCounterModel(++$this->counter);
    }

    public function decrement()
    {
        $this->updateCounterModel(--$this->counter);
    }

    protected function updateCounterModel(int $counter)
    {
        if ($counter < 0) {
            return;
        }

        $model = CounterModel::find(1);

        if (!$model) {
            return;
        }

        $model->update(['counter' => $counter]);

        broadcast(new UpdateCounter($model->counter))->toOthers();
    }
}
