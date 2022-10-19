@extends('layouts.main')

@section('title', 'Create')

@section('content')


<div>
    <form action="/events" method="POST">

    @csrf
        <div class="class form-group">
            <label for="evento">evento</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="class form-group">
            <label for="evento">city</label>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="class form-group">
            <label for="evento">evento</label>
            <select name="private" id="" class="form-group">
                <option value="0">nao</option>
                <option value="1">sim</option>
            </select>

        </div>
        <div class="class form-group">
            <label for="evento">evento</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>

            <input type="submit" class="btn btn-primary" value="Send">
        </div>
    </form>
</div>
