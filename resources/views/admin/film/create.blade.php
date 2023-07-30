@extends('admin.layout')
@section('main-content')
    <div class="card card-primary">
        <div class="card-header">
        </div>

        <form method="post" action="{{route('admin.film.do-create')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="2"
                              required></textarea>
                </div>
                <div class="form-group d-grid gap-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="btn btn-info mx-2" id="image"/>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div class="form-group">
                        <label for="path">Path</label>
                        <input type="text" name="path" class="form-control" id="path" placeholder="Enter Path" required>
                    </div>
                    <div class="from-group">
                        <label for="year">Year</label>
                        <input type="number" name="year" class="form-control" id="year" placeholder="Enter Year"
                               required>
                    </div>
                    <div class="from-group">
                        <label for="duration">Duration</label>
                        <input type="number" name="duration" class="form-control" id="duration"
                               placeholder="Enter Duration" required>
                    </div>
                    <div class="form-group">
                        <label for="country_id">Country</label>
                        <select name="country_id" id="country_id" class="form-control" required>
                            <option value="" disabled hidden selected>Country...</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="actor_id">Actor</label>
                    <select class="select2 select2-hidden-accessible" multiple=""
                            data-placeholder="Actor..." style="width: 100%;"
                            data-select2-id="1" tabindex="-1" aria-hidden="true"
                            name="actor_id[]" id="actor_id">
                        @foreach($actors as $actor)
                            <option value="{{$actor->id}}">{{$actor->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="select2 select2-hidden-accessible" multiple=""
                            data-placeholder="Category..." style="width: 100%;"
                            data-select2-id="2" tabindex="-1" aria-hidden="true"
                            name="category_id[]" id="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="director_id">Director</label>
                    <select class="select2 select2-hidden-accessible"
                            data-placeholder="Director..." style="width: 100%;"
                            data-select2-id="3" tabindex="-1" aria-hidden="true"
                            name="director_id" id="director_id">
                        <option value="" disabled hidden selected>Director...</option>
                        @foreach($directors as $director)
                            <option value="{{$director->id}}">{{$director->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-check d-flex align-items-center">
                    <div class="pr-4">
                        <input type="checkbox" value="1" class="p-4 form-check-input" type="checkbox" name="is_hot">
                        <label class="form-check-label" for="is_hot">Is Hot</label>
                    </div>
                    <div class="pl-4">
                        <input type="checkbox" value="1" class="p-4 form-check-input" type="checkbox" name="is_oscar">
                        <label class="form-check-label" for="is_oscar">Is Oscar</label>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item">
            <a href="{{route('admin.film.list')}}">Film</a>
        </li>
        <li class="breadcrumb-item active">
            Create
        </li>
    </ol>
@endsection

@section('title')
    Create Film
@endsection
