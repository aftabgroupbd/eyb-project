@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">EYB</a></li>
                        <li class="breadcrumb-item active">All Module</li>
                    </ol>
                </div>
                <h4 class="page-title">All module</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group font-12" style="float: left;margin-right: 10px;">
                        <label for="exampleInputName2">Module name</label>
                        <div class="select">
                            <input type="text" class="form-control width-130 font-12">
                        </div>
                    </div>
                    <div class="form-group font-12" style="float: left;margin-right: 10px;">
                        <label for="exampleInputName2">Level</label>
                        <div class="select">
                            <select class="form-control select-hidden width-130" name="studentgrade" style="font-size: 12px;">
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
                    <div class="form-group font-12" style="float: left;margin-right: 10px;">
                        <label for="exampleInputName2">Subject</label>
                        <div class="select">
                            <select class="form-control select-hidden width-130" name="studentgrade" style="font-size: 12px;">
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
                    <div class="form-group font-12" style="float: left;margin-right: 10px;">
                        <label for="exampleInputName2">Chapter</label>
                        <div class="select">
                            <select class="form-control select-hidden width-130" name="studentgrade" style="font-size: 12px;">
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
                    <div class="form-group " style="float: left;margin-right: 10px;">
                        <label for="exampleInputName2">&nbsp;</label>
                        <div class="select">
                            <button type="button" class="btn btn-danger btn-animation" data-animation="slideInDown" data-toggle="modal" data-target="#exampleModalLong-1">
                                Mark
                            </button>
                        </div>
                    </div>
                    <div class="form-group" style="float: left;margin-right: 10px;">
                        <label for="exampleInputName2">&nbsp;</label>
                        <div class="select">
                            <button type="button" class="btn btn-success btn-animation">
                                Save
                            </button>
                        </div>
                    </div>
                    <div class="form-group" style="float: left;margin-right: 10px;">
                        <label for="exampleInputName2">&nbsp;</label>
                        <div class="select">
                            <button type="button" class="btn btn-warning btn-animation">
                                 Preview
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
        <div class="modal fade" id="questionModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle-1">Question</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-9">
                    </div>
                    <div class="col-3" style="text-align: center;">
                        <button type="button" class="btn btn-success btn-animation" data-animation="slideInDown" data-toggle="modal" data-target="#questionModal">
                            Question
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-5 col-form-label">How many options</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="number" value="4" id="box_qty" onclick="getImageBox(this)">
                        </div>
                    </div>
                    <?php
                    $lettry_array = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'k', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T');
                    for ($i = 1; $i <= 2; $i++) {
                    ?>
                    <div class="row" id="list_box_<?php echo $i;?>" style="align-items: center;margin-bottom: 10px;">
                        <div class="col-6">
                            <div class="row" >
                                <div class="col-2">
                                    <p style="text-align: center;background: #eee;width:25px;font-size: 24px;height: 100px;line-height: 100px;"><?php echo $lettry_array[$i - 1]; ?></p>
                                </div>
                                <div class="col-9">
                                    <div class="box">
                                        <textarea class="form-control" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="ss_lette" style="height: 100px;line-height: 100px;background:#eee;text-align: center; ">
                                        <input type="radio" name="response_answer" value="<?php echo $i;?>" style="text-align: center;font-size: 24px;">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row ">
                                <div class="col-1">
                                    <p class="ss_lette" style="height: 100px;line-height: 100px;background:#eee;text-align: center; ">
                                        <input type="radio" name="response_answer" value="<?php echo $i;?>" style="text-align: center;font-size: 24px;">
                                    </p>

                                </div>
                                <div class="col-9">
                                    <div class="box">
                                        <textarea class="form-control" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="ss_lette" style="background: #eeeeee;text-align: center;display: table-cell;vertical-align: middle;height: 138px;">
                                        <input type="number" class="form-control" name="answer_<?php echo $i;?>" id="answer_<?php echo $i;?>" data="<?php echo $i;?>" onclick="getAnswer();">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                    <?php for ($desired_i = $i; $desired_i <= 20; $desired_i++) { ?>
                    <div class="row" id="list_box_<?php echo $desired_i;?>" style="align-items: center;display: none;margin-bottom: 10px;">
                        <div class="col-6">
                            <div class="row " >
                                <div class="col-2">
                                    <p style="text-align: center;background: #eee;width:25px;font-size: 24px;height: 100px;line-height: 100px;"><?php echo $lettry_array[$desired_i - 1]; ?></p>
                                </div>
                                <div class="col-9">
                                    <div class="box">
                                        <textarea class="form-control" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="ss_lette" style="height: 100px;line-height: 100px;background:#eee;text-align: center; ">
                                        <input type="radio" name="response_answer" value="<?php echo $desired_i;?>" style="text-align: center;font-size: 24px;">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row ">
                                <div class="col-1">
                                    <p class="ss_lette" style="height: 100px;line-height: 100px;background:#eee;text-align: center; ">
                                        <input type="radio" name="response_answer" value="<?php echo $desired_i;?>" style="text-align: center;font-size: 24px;">
                                    </p>

                                </div>
                                <div class="col-9">
                                    <div class="box">
                                        <textarea class="form-control" rows="5" style="margin-top: 0px; margin-bottom: 0px; height: 143px;"></textarea>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <p class="ss_lette" style="background: #eeeeee;text-align: center;display: table-cell;vertical-align: middle;height: 138px;">
                                        <input type="number" class="form-control" name="answer_<?php echo $desired_i;?>" id="answer_<?php echo $desired_i;?>" data="<?php echo $desired_i;?>" onclick="getAnswer();">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="image_quantity" id="image_quantity" value="4">
    <script>
        var qtye = $("#box_qty").val();
        document.getElementById("image_quantity").value = qtye;

        common(qtye);
        function getImageBox() {

            var qty = $("#box_qty").val();
            console.log(qty);
            if (qty < 3) {
                $("#box_qty").val(2);
            } else if (qty > 20) {
                $("#box_qty").val(20);
            } else {
                $('.editor_hide').hide();
                document.getElementById("image_quantity").value = qty;
                common(qty);
            }

        }
        function common(quantity)
        {
            for (var i = 1; i <= quantity; i++)
            {
                $('#list_box_' + i).show();
            }
        }
    </script>
@endsection
