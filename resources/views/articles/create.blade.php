@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
        <div class= "col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-header">
                    Create article
                </div>
                <div class="card-body">

                <form action="/articles" method="POST">

                {{ csrf_field() }}

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control"></textarea>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="live">
                            Live
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="post_on">Post on</label>

                        <input type="datetime-local" name="post_on" class="form-control">
                    </div>
                

                    <input type="submit" class="btn btn-success float-right">
                
                </form>

                </div>
            </div>
        </div>
    </div>
@endsection