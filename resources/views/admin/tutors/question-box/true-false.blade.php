@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">EYB</a></li>
                        <li class="breadcrumb-item active">True false</li>
                    </ol>
                </div>
                <h4 class="page-title">Question Type</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group" style="float: left;margin-right: 10px;">
                            <label for="exampleInputName2">Level</label>
                            <div class="select">
                                <select class="form-control select-hidden" name="studentgrade">
                                    <option value="">Select Level</option>
                                    <option value="1">
                                        1
                                    </option>
                                    <option value="2">
                                        2
                                    </option>
                                    <option value="3">
                                        3
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="float: left;margin-right: 10px;">
                            <label for="exampleInputName2">Subject</label>
                            <div class="select">
                                <select class="form-control select-hidden" name="studentgrade">
                                    <option value="">Select Subject</option>
                                    <option value="1">
                                        1
                                    </option>
                                    <option value="2">
                                        2
                                    </option>
                                    <option value="3">
                                        3
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="float: left;margin-right: 10px;">
                            <label for="exampleInputName2">Chapter</label>
                            <div class="select">
                                <select class="form-control select-hidden" name="studentgrade">
                                    <option value="">Select Chapter</option>
                                    <option value="1">
                                        1
                                    </option>
                                    <option value="2">
                                        2
                                    </option>
                                    <option value="3">
                                        3
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="float: left;margin-right: 10px;">
                            <label for="exampleInputName2">&nbsp;</label>
                            <div class="select">
                                <button type="button" class="btn btn-danger btn-animation" data-animation="slideInDown" data-toggle="modal" data-target="#exampleModalLong-1">
                                    Question Mark
                                </button>
                            </div>
                        </div>
                        <div class="form-group" style="float: left;margin-right: 10px;">
                            <label for="exampleInputName2">&nbsp;</label>
                            <div class="select">
                                <button type="button" class="btn btn-success btn-animation">
                                    Question Save
                                </button>
                            </div>
                        </div>
                        <div class="form-group" style="float: left;margin-right: 10px;">
                            <label for="exampleInputName2">&nbsp;</label>
                            <div class="select">
                                <button type="button" class="btn btn-warning btn-animation">
                                    Question Preview
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        <div class="modal fade" id="exampleModalLong-1" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle-1">Question mark</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-0">
                            <label class="mb-2 pb-1">Mark</label>
                            <input type="number" class="form-control" placeholder="Set Question Mark">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="my-2 py-1">Question</label>
                        <div>
                            <textarea class="form-control" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">How many options</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="number" value="2" id="example-text-input">
                        </div>
                    </div>
                    <div class="row " id="list_box_1" style="align-items: center">
                        <div class="col-2">
                            <p style="text-align: center;background: #eee;width:25px;font-size: 24px;height: 100px;line-height: 100px;">A</p>
                        </div>
                        <div class="col-9">
                            <div class="box">
                                <textarea class="form-control" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
                            </div>
                        </div>
                        <div class="col-1">
                            <p class="ss_lette" style="height: 100px;line-height: 100px;background:#eee;text-align: center; ">
                                <input type="radio" name="response_answer" value="1" style="text-align: center;font-size: 24px;">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
