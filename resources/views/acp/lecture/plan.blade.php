@extends('acp.layout.root')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">
            {{ str("{$lecture->title} | Plans") }}
        </h1>
        <div class="card-toolbar">
            <a href="{{ route('lecture.plan.form', ['lecture' =>$lecture]) }}" class="btn btn-light-info" href="">
                <i class="fas fa-plus"></i>
                Create Plan
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-rounded table-striped border gy-7 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                        <th>LECTURE</th>
                        <th>DAY of WEEK</th>
                        <th>START TIME</th>
                        <th>END TIME</th>
                        <th>*</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lecture->plans?->sortByDesc('week_day') as $plan)
                        <tr>
                            <td>{{ $lecture->title }}</td>
                            <td>{{ $plan->week_name }}</td>
                            <td>{{ $plan->start_time }}</td>
                            <td>{{ $plan->end_time }}</td>
                            <td>
                                <a class="btn btn-icon btn-info btn-sm" href="{{ route('lecture.plan.form', ['lecture' => $lecture, 'plan' => $plan]) }}">
                                    <i class="fas fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
