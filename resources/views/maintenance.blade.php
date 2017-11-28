@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Maintenance Request</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="GET" action="{{ route('addmaintenance') }}">
                            {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="id" class="col-md-4 control-label">Unit ID Number</label>

                                    <div class="col-md-6">
                                        <input id="id" type="text" class="form-control" name="id" required>
                                    </div>
                                </div>

                            <div class="form-group">
                                <label for="maintenance" class="col-md-4 control-label">Maintenance Needed</label>

                                <div class="col-md-6">
                                    <input id="maintenance" type="text" class="form-control" name="maintenance" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Request
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
