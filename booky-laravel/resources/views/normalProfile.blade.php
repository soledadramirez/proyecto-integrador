<ul>
@foreach ($userBooks as $userbook)

<li> {{$userbook->title->name}}</li>


@endforeach
</ul>
