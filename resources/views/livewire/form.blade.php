<div>
    Name: <input type="text" wire:model.debounce.100ms='name'><br>

    Message: 
    <textarea name="" wire:model = 'message'></textarea><br>
    Marital Status: <br>
    Single: <input type="radio" value="Single" wire:model = 'marital_status'><br>
    Married: <input type="radio" value="Married" wire:model = 'marital_status'><br>

    Favorite Color: <br>
    Red <input type="checkbox" value="red" wire:model = 'colors'> 
    Green <input type="checkbox" value="green" wire:model = 'colors'>
    Blue <input type="checkbox" value="blue" wire:model = 'colors'> <br>

    Favourite Fruits: <br>
    <select wire:model = 'fruits'>
        <option value="" >Select Fruits</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
    </select>

    <hr>
    Name : {{$name}} <br>
    Message: {{$message}} <br>
    Marital Status: {{$marital_status}} <br>
    Faborite Color: <br>
    <ul> 
        @foreach($colors as $color)
            <li>Color: {{$color}}</li>
            
        @endforeach
    </ul>
    
    Fruits: {{$fruits}}

</div>
