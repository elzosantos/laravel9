@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $users->name ?? old('name')}}"><br>
<input type="email" name="email" placeholder="E-mail:" value="{{$users->email ?? old('name') }}"><br>
<input type="password" name="password" placeholder="Senha:"><br>
<button type="submit">Enviar</button>