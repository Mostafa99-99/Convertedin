@extends('layouts.master')

@section('content')


  <body>
    <main id="main" class="main">
        <div class="page-body">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                                <div class="card-header">
                                    <h2 style="font-size: 24px">Top 10 Users</h2>
                                </div>

                                 <div class="card-body">
                                        <form action="{{route('home')}}" method="post">
                                            @csrf
                                            <div class="divide-y">
                                                @foreach($top_users as $top)
                                                    <div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="text-truncate">
                                                                    <strong>{{$top->user_name}}</strong>
                                                                </div>

                                                            </div>
                                                            <div class="col-auto align-self-center">


                                                                    <strong>{{$top->count}} {{ $top->count == 1 ? 'Task' : 'Tasks' }}</strong>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                                    <div class="row">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Close</button>
                                                        </div>
                                                    </div>

                                            </div>
                                        </form>
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
                    "sLengthMenu": "Show _MENU_ entries",
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

