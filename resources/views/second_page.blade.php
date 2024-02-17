@extends('layouts.master')

@section('content')


    <body>
    <main id="main" class="main">
                <div class="page-body">
                    <div class="container-xl">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">

                                    <div  class="card-header">
                                        <h4 class="card-title">Tasks</h4>
                                        <h4 class="card-title" style="position: absolute; right: 20px; color: blue"><a href="{{route('statistics')}}">Top 10 Users</a></h4>
                                    </div>

                                    <div style="padding: 8px" class="table-responsive">

                                        <table id="files_list"  class="table display card-table table-vcenter text-nowrap datatable">
                                            <thead>
                                            <tr>
                                                <th style="text-align: center">title</th>
                                                <th style="text-align: center">description</th>
                                                <th style="text-align: center">Assigned name</th>
                                                <th style="text-align: center">Admin name</th>
                                                <th style="text-align: center">Date and Time</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($tasks as $tasks_data)
                                                <tr>
                                                    <td>{{$tasks_data->tittle}}</td>
                                                    <td>{{$tasks_data->description}}</td>
                                                    <td>{{$tasks_data->user_name}}</td>
                                                    <td>{{$tasks_data->admin_name}}</td>
                                                    <td>
                                                        <span style="background-color: #42C2A1; color: black" class="badge">{{date('d-m-Y', strtotime($tasks_data->created_at))}}</span>
                                                        <span style="background-color: #42C2A1; color: black" class="badge">{{date('h:i:s', strtotime($tasks_data->created_at))}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         </main>
    </body>

@endsection

    <script src="{{asset('../bootstrap_admin//tom-select/dist/js/tom-select.base.min.js')}}"></script>
    <script src='https://code.jquery.com/jquery-3.7.0.js' crossorigin='anonymous'></script>
    <script src='https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js' crossorigin='anonymous'></script>

    <script>
        $(document).ready(function() {
            $('#files_list').DataTable({
                "aLengthMenu": [
                    [10],
                    [10]
                ],
                "iDisplayLength": 10,
                "language": {
                    "sProcessing": "Loading...",
                    "sLengthMenu": "Show 10 entries",
                    "sZeroRecords": "No records found",
                    "sInfo": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "sInfoEmpty": "Displaying 0 to 0 of 0 records",
                    "sInfoFiltered": "(filtered from _MAX_ total entries)",
                    "sInfoPostFix": "",
                    "sSearch": "Search:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "First",
                        "sPrevious": "Previous",
                        "sNext": "Next",
                        "sLast": "Last"
                    }
                }
            });
        });

    </script>


