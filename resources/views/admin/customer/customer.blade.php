@extends('topbar')
@section('admin')
<div class="mt-5">
    <div class="col-12 table-responsive">
        <table id="table" class="table table-striped table-secondary table-hover table-borderless">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.Telp</th>
                    <th>Created at</th>
                    <th>Status</th>
                    <th>Options</th> 
                </tr>
            </thead>
            <tbody>
                            <a class="btn btn-success"><i class="fa-solid fa-pencil"></i></a>
                            <a class="btn btn-danger" data-toggle="modal"><i class="fa-solid fa-trash"></i></a>
                            <form  method="POST" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                @csrf
                                @method('PUT')
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Delete item</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      Are you sure you want to delete this item?
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                  </div>
                                </div>
                            </form>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</div>

<style>
    #table{
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-collapse: separate; 
    }
</style>