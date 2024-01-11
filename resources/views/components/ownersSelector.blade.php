<select name="owner_id">
    @foreach($owners as $own)
        <option value="{{$own->id}}">{{$own->name}}</option>
    @endforeach
</select>
