@extends('layouts.app')

@section('content')


<!-- Modal -->
<div class="modal fade" id="linkFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle`" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add New Url</h5>
                <p class="ml-3" id="modal_box_notification"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">Close &times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                    <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Enter url" value="">
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="">
                    </div>
                </form>
            </div>
            <!--Save Changes button-->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="link-btn-save">Save changes</button>
                <input type="hidden" id="todo_id" name="todo_id" value="0">
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>jQuery Ajax CRUD</h2>
            <p id="data_add_success" color="green"></p>
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">
            <!-- Add Url Button -->
            <button class="btn btn-success" id="link-btn-add" data-toggle="modal" data-target="#linkFormModal">
                Add an Url
            </button>
        </div>
    </div>

    <div>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Url</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="todos-list" name="todos-list">
                @for ($x = 0; $x < (count($links)); $x++) 
                <tr id="todo{{$x}}">
                
                    <td>{{$links[$x]->id}}</td>
                    <td>{{$links[$x]->url}}</td>
                    <td>{{$links[$x]->description}}</td>
                    <td>
                        <!--Edit Url Button-->
                        <button class="btn btn-success link-btn-edit" id="link-btn-edit" data-toggle="modal" data-target="#linkFormModal">Edit</button>
                        <!--Delete Url Button-->
                        <button class="btn btn-danger">Delete</button>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>

        @endsection