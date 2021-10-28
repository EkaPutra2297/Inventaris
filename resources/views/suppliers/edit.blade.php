<br/>
<form method="post" action="{{url ('x/' .$model->id)}}">
    @csrf 
    <input type="hidden" name="_method" value="PATCH">
    @include('suppliers._form')
</form> 