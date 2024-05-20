@extends('layouts.app')
  
@section('title', 'Edit Plient')
  
@section('contents')
    <h1 class="mb-0">Edit Client</h1>
    <hr />
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $client->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $client->phone }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Home Address</label>
                <input type="text" name="address" class="form-control" placeholder="address" value="{{ $client->address }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">City</label>
                <textarea class="form-control" name="city" placeholder="City" >{{ $client->city }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection