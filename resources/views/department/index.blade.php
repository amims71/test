@extends('welcome')

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <div class="col-lg-12">

                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5 style="color: #00aeef"> Department   Information </h5>
                        <a class="btn-primary pull-right btn-sm" href="{{route('department.create')}} "
                           data-toggle="modal">Add Department </a>


                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                <tr>

                                    <th>Sl.</th>
                                    <th >Department Name</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1;?>
                                @foreach($departments as $department)
                                    <tr>
                                        <td> {{$counter}} </td>
                                        <td> {{$department->department}} </td>
                                        <td class="center">

                                            <a href="{{route('department.edit', ['department' => $department])}} "><i
                                                    class="fa fa-edit"></i></a>
                                            <a>
                                                <form action="{{route('department.destroy', ['department' => $department]) }}"
                                                      method="POST">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button style="background: none!important;border: none;padding: 0!important;">
                                                        <i
                                                            class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </a>

                                        </td>
                                    </tr>







                                    <?php $counter+=1;?>
                                @endforeach


                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="row  border-bottom "></div> -->

    <!--   Put all the body contenet here -->





@endsection

@section('extra')


@endsection



