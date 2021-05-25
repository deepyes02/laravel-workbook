@extends('layouts.app')

@section('content')


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <p class="ml-3" id="modal_box_notification"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save">Save changes</button>
                <input type="hidden" id="todo_id" name="todo_id" value="0">
                
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>Laravel AJAX Example</h2>
            <p id="data_add_success" color="green"></p>
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">
            <!-- Button trigger modal -->
            <button class="btn btn-success" id="btn-add" data-toggle="modal" data-target="#formModal">
                Add Todo
            </button>
        </div>
    </div>

    <div>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="todos-list" name="todos-list">
               @for ($x = 1; $x < count($todos); $x++)
               <tr id="todo{{$x}}">
                <td>{{$x}}</td>
                <td>{{$todos[$x]->title}}</td>
                <td>{{$todos[$x]->description}}</td>
               </tr>
               @endfor
            </tbody>
        </table>

        @endsection

        <!-- @foreach ($todos as $data)
                <tr id="todo{{$data->id}}">
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                </tr>
                @endforeach -->