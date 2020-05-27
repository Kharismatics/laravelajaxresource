@extends('products.layout')
 
@section('content')
    {{-- <div class="modal " id="myModal"> --}}
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="form"></div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> --}}
                </div>
            </div>
        </div>
    {{-- </div> --}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 7 TES CRUD AJAX</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a> --}}
                <a class="btn btn-success" onclick="CreateModel('products')"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div id="form"></div>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                    <a class="btn btn-info" onclick="ShowModel('products',{{ $product->id }})">Show</a>
    
                    {{-- <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a> --}}
                    <a class="btn btn-primary" onclick="EditModel('products',{{ $product->id }})">Edit</a>
                    <a class="btn btn-danger" onclick="DeleteModel('products',{{ $product->id }})">Del</a>
   
                    @csrf
                    @method('DELETE')
      
                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection