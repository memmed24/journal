@extends('layouts.app')


@section('content')

<div class="col-md-6 offset-md-3">
    @forelse($documents as $document)
    <div class="card">
        <div class="card-body" id="mydocuments">
            <div class="row">
                <div class="col-md-6">
                    {{$document->source}}
                </div>
                <div class="col-md-2 offset-4">
                    @if($document->status === 0)
                        <span class="badge badge-secondary">Not seen</span>
                    @elseif($document->status === 1)
                        <span class="badge badge-primary">In review</span>
                    @elseif($document->status === 2)
                        <span class="badge badge-success">Reviewed</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="card">
        No document
    </div>
    @endforelse

</div>

@endsection