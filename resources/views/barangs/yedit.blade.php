<br/>
<form method="post" action="{{url ('y/' .$model->id)}}">
    @csrf 
    <input type="hidden" name="_method" value="PATCH">
    @include('barangs.y_form')
</form> 