@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">EYB</a></li>
                        <li class="breadcrumb-item active">Question Type</li>
                    </ol>
                </div>
                <h4 class="page-title">Question Type</h4>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-lg-8 col-sm-10" style="margin: auto;">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" >Type Name</th>
                                <th scope="col">Total Question</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr >
                                <th scope="row" style="background: #76e2cc;"><a style="color:#212529;" href="{{route('create_question',[1])}}">True False</a></th>
{{--                                <th scope="row" style="background: #76e2cc;"><a style="color:#212529;" href="{{route('create_question','id=4')}}">True False</a></th>--}}
                                <td class="">1</td>
                            </tr>
                            <tr >
                                <th scope="row" style="background: #76e2cc;"><a style="color:#212529;" href="{{route('create_question',[2])}}">Multiple Choice</a></th>
                                <td class="">1</td>
                            </tr>
                            <tr >
                                <th scope="row" style="background: #76e2cc;"><a style="color:#212529;" href="{{route('create_question',[3])}}">Multiple Response</a></th>
                                <td class="">1</td>
                            </tr>
                            <tr >
                                <th scope="row" style="background: #76e2cc;"><a style="color:#212529;" href="{{route('create_question',[4])}}">Matching</a></th>
                                <td class="">1</td>
                            </tr>
                            <tr >
                                <th scope="row" style="background: #76e2cc;"><a style="color:#212529;" href="{{route('create_question',[5])}}">Fill In The Blanks</a></th>
                                <td class="">1</td>
                            </tr>
                            <tr >
                                <th scope="row" style="background: #76e2cc;"><a style="color:#212529;" href="{{route('create_question',[6])}}">Tutorial</a></th>
                                <td class="">1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div><!--end row-->
@endsection
