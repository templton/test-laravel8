@foreach($cats as $cat)
    <div>{{$cat->name}} - {{$cat->owner->name}} ({{$cat->owner->old}})</div>
@endforeach
