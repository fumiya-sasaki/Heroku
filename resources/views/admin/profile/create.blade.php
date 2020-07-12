<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">

        <title>Myプロフィール</title>
    </head>
    <body>
        <h1>Myプロフィール作成画面</h1>
    
    @extends('layouts.admin')
    @section('title', 'プロフィールの新規作成')
    @section('content')
       <div class = "container">
          <div class = "row">
              <div class = "col-md-8 mx-auto">
                  <h2>プロフィール新規作成</h2>
                  <form action = "{{ action('Admin\ProfileController@create') }}" method = "post"
                   enctype = "multipart/form-data">
                      
                      @if (count($errors) > 0)
                         <ul>
                             @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                             @endforeach    
                         </ul>
                      @endif
                      <div class = "form-group row">
                          <label class = "col-md-2" for = 'title'>氏名</label>
                          <div class = "col-md-10">
                              <input type = "text" class = "form-control" name = "name" 
                               value = "{{ old('title') }}">
                          </div>
                      </div>
                      <div class = "from-group-row">
                          <label class = "col-md-2" for = 'title'>性別</label>
                          <div class = "col-md-10">
                               <input type = "text" class = "form-control-file" name = "gender">
                          </div>
                      </div>
                      <div class = "from-group-row">
                          <label class = "col-md-2" for = 'title'>趣味</label>
                          <div class = "col-md-10">
                               <input type = "text" class = "form-control-file" name = "hobby">
                          </div>
                      </div>
                      <div class = "form-group-row">
                          <label class = "col-md-2" for = 'body'>自己紹介欄</label>
                          <div class = "col-md-10">
                               <textarea class = "form-control" name = "introduction" rows = "20">{{ old('body') }}</textarea>
                          </div>
                      </div>

                      {{ csrf_field() }}
                      <input type = "submit" class = "btn btn-primary" value = "更新">
                  </form>
              </div>
          </div>
      </div>
    @endsection
        
    </body>
</html>