@extends('layouts.master')

@section('content')

        <body>
            <main id="main" class="main">
              <div class="col-lg-12">
                 <div class="card">
                    <div class="card-body">
                        <div  class="card-header">
                            <h5 style="font-size: 22px" class="card-title"> New Task </h5>
                            <h4 class="card-title" style="position: absolute; right: 30px; color: blue"><a href="{{route('display_data')}}">Check all tasks</a></h4>
                        </div>
                        <br>
                        <form action="{{route('new_task')}}" method="post" enctype='multipart/form-data' >
                            @csrf

                            <div class="row g-3">


                                <div class="col-md-4">
                                    <div>
                                        <label class="form-label">Admin Name</label>
                                        <select type="text" class="form-select" id="Admin_Name" name="admin_id">
                                            @foreach($admins as $admins_data)
                                                <option value="{{$admins_data->id}}">{{$admins_data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div>
                                        <label class="form-label">Title</label>
                                        <input type="text" name="tittle" class="form-control" id="floatingName" required>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div>
                                        <label class="form-label" for="select-users">Assigned User</label>
                                        <select type="text" class="form-select" id="Assigned_User" name="user_id">
                                            @foreach($users as $users_data)
                                                <option value="{{$users_data->id}}">{{$users_data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label">Description</label>
                                        <textarea style="height: 100px" name="description" type="text" class="form-control" id="floatingEmail" required> </textarea>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a style="color: blue" href="{{route('statistics')}}">Top 10 Users</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>

@endsection

    <script src="{{asset('../bootstrap_admin//tom-select/dist/js/tom-select.base.min.js')}}"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var elUsers = document.getElementById('Admin_Name');
            var elCities = document.getElementById('Assigned_User');

            if (window.TomSelect) {
                new TomSelect(elUsers, {
                    copyClassesToDropdown: false,
                    dropdownParent: 'body',
                    controlInput: '<input>',
                    render: {
                        item: function (data, escape) {
                            if (data.customProperties) {
                                return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                            }
                            return '<div>' + escape(data.text) + '</div>';
                        },
                        option: function (data, escape) {
                            if (data.customProperties) {
                                return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                            }
                            return '<div>' + escape(data.text) + '</div>';
                        },
                    },
                });

                new TomSelect(elCities, {

                });
            }
        });

    </script>

