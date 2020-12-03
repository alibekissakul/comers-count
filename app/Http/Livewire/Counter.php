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
        $this->incrementCounterModel();
    }

    public function decrement()
    {
        $this->decrementCounterModel();
    }

    protected function incrementCounterModel()
    {
        $model = CounterModel::find(1);

        if (!$model) {
            return;
        }

        $model->update(['counter' => ++$model->counter]);

        event(new UpdateCounter($model->counter));
    }

    protected function decrementCounterModel()
    {
        $model = CounterModel::find(1);

        if (!$model) {
            return;
        }

        $model->update(['counter' => --$model->counter]);

        event(new UpdateCounter($model->counter));
    }
}
