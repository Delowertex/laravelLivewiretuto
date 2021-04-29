<div>
    <button type="button" wire:click="addTwoNumber(20, 25)">Sum</button> <br>
    <textarea wire:keydown.enter="displayMessage($event.target.value)"></textarea> <br>

    <form wire:submit.prevent="getSum" action="">
        Num 1: <input type="text" name="num1" wire:model="num1"> <br>
        Num 2: <input type="text" name="num2" wire:model="num2"> <br>
        <button type="submit">Submit</button>
    </form>
    Sum : {{$sum}} <br>

    Message: {{$message}}
</div>
