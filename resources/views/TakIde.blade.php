@extends('layouts.MyLayout')
@section('content')
<div class="container" style="display:flex;align-items:center;justify-content:center;height:100vh;">
        <form method="POST" action="{{ route('add') }}">
            @csrf
            <fieldset>
                <legend style="text-align:center;">Uzupełnianie informacji o osobie</legend>
                @if($errors->any())
                <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                        @endforeach
                </ul>
        @endif
                <div class="form-row">
                    <input type="hidden" value="{{Auth::user()->id}}" name="id" />
                        <div class="form-group col-md-12">
                          <label for="idzie">Kiedy chcesz iść?</label>
                          <select name="idzie" id="idzie" class="form-control">
                            <option value="Lipiec">W Lipcu</option>
                            <option value="Sierpien">W Sierpniu</option>
                            <option value="Nie ide">Nie chce iść</option>
                          </select>
                        </div>   
                      <button type="submit" class="btn btn-primary">Wyślij</button>
            </fieldset>
        </form>
    </div>
@endsection