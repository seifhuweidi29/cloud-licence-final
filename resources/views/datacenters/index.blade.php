@extends('layouts.app')

@section('title', 'Datacenter Selection')

@section('content')
    <div>
        <h2>Select a Datacenter</h2>
        <form action="{{ route('datacenter.set') }}" method="POST">
            @csrf
            <select name="datacenter" required>
                @foreach ($datacenters as $datacenter)
                    <option value="{{ $datacenter->id }}">{{ $datacenter->name }}</option>
                @endforeach
            </select>
            <button type="submit">Proceed</button>
        </form>
    </div>
@endsection
