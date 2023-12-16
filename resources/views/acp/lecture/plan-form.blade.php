@extends('acp.layout.root')

@section('content')
    <form action="{{ route('lecture.plan.save', ['lecture' => $lecture, 'plan' =>$plan]) }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">
                    {{ str("{$lecture->title} | Plan Form") }}
                </h1>
                <div class="card-toolbar">
                    <button type="submit" class="btn btn-light-info me-3" href="">
                        <i class="fas fa-plus"></i>
                        Save
                    </button>
                    <a class="btn btn-light-danger me-3" href="{{ route('lecture.plan.index',['lecture' => $lecture->id]) }}">
                        <i class="fas fa-cancel"></i>
                        Cancel
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-6">
                    <div class="col-12 form-group">
                        <label class="form-label">
                            Week of Day
                        </label>
                        <select required name="week_day" class="form-control form-select" data-control="select2">
                            @foreach (["sunday","monday","tuesday","wednesday","thursday","friday","saturday"] as $index => $day)
                                <option @selected($plan?->week_day == $index) value="{{ $index }}">{{ $day }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">
                            Start Time
                        </label>
                        <input value="{{ $plan?->start_time }}" required name="start_time" class="form-control" type="time">
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="form-label">
                            End Time
                        </label>
                        <input value="{{ $plan?->end_time }}" required name="end_time" class="form-control" type="text">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-light-info me-3" href="">
                    <i class="fas fa-plus"></i>
                    Save
                </button>
                <a class="btn btn-light-danger me-3" href="{{ route('lecture.plan.index',['lecture' => $lecture->id]) }}">
                    <i class="fas fa-cancel"></i>
                    Cancel
                </a>
            </div>
        </div>
    </form>
@endsection
