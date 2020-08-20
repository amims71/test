@extends('welcome')

@section('content')

    <body>
    <style>
        .button {
            text-align: center;
            padding-top: 20px;
            clear: both;
        }

        #hidden_div {
            display: none;
        }


    </style>


    <!-- <div class="row  border-bottom "></div> -->

    <!--   Put all the body contenet here -->


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <div class="col-lg-12">

                <div class="ibox float-e-margins">


                    <div class="ibox-content">

                        <div class="modal-content">
                            <div class="modal-body">
                                <form method="POST" action="{{route('customer.store')}} " class="form-horizontal"
                                      enctype="multipart/form-data">
                                    <div class="row">

                                        @csrf

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h3 class="m-t-none m-b navbar-static-top"> Customer Information </h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-12"><h3 class="m-t-none m-b navbar-static-top"></h3>
                                            <div class="row"> <!--First row option starts here-->
                                                <div class="col-sm-10">
                                                    <!--  Name  -->
                                                    <div class="form-group"><label class="col-sm-4 control-label"> Customer Name</label>

                                                        <div class="col-sm-8"><input type="text"
                                                                                     placeholder="  Customer Name "
                                                                                     name="name"
                                                                                     class="form-control"
                                                                                     value="{{ old('name') ?? $customer->name }}"
                                                                                     required>
                                                            <div class="alert-danger" >{{$errors->first('name')}} </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label class="col-sm-4 control-label"> Department Name</label>

                                                        <div class="col-sm-8">
                                                            <select class="select2_category  form-control"
                                                                                      name="department_id" required>
                                                                <option></option>
                                                                @foreach($departments as $department)
                                                                    {{--                                                                    {{dd($process)}}--}}
                                                                    <option {{ $department->id == old('$department') ?'selected':""}} value="{{$department->id}}">{{$department->department}}</option>

                                                                @endforeach

                                                            </select>
                                                            <div class="alert-danger" >{{$errors->first('name')}} </div>
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="button">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="button text-center">
                                                                <div class="form-group">
                                                                    <p><strong>Note:</strong> <font color="red">All
                                                                            Fields
                                                                            must be filled</font></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="button text-center">
                                                                <div class="form-group">
                                                                    <button id="add-user" class="btn btn-primary">Submit
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </form>


                            </div>


                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>




    @endsection

    @section('extra')


@endsection

