@extends('layouts.app')
  
@section('name', 'Show Client')
  
@section('contents')
    <h1 class="mb-0">Detail Client</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $client->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Phone number</label>
            <input type="text" name="ohone" class="form-control" placeholder="Phone" value="{{ $client->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Home Address</label>
            <input type="text" name="address" class="form-control" placeholder="address" value="{{ $client->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">City</label>
            <textarea class="form-control" name="city" placeholder="City" readonly>{{ $client->city }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $client->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $client->updated_at }}" readonly>
        </div>
    </div>
@endsection