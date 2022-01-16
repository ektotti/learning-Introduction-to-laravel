<form action="/learning-Introduction-to-laravel/laravelapp/public/rest" method="POST">
<table>
    @csrf
    <tr><th>message:</th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
    <tr><th>url:</th><td><input type="text" name="url" value="{{old('url')}}"></td></tr>
    <tr><th></th><td><input type="submit" name="submit" value="送信"></td></tr>
</table>
</form>