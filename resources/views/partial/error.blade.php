@if($errors->count())
<div class="rounded badge-danger margin10">
        
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
           
</div>
@endif