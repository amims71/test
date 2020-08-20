@extends('welcome')

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <div class="col-lg-12">

                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5 style="color: #00aeef"> Customer   Information </h5>
                        <a class="btn-primary pull-right btn-sm" href="{{route('customer.create')}} "
                           data-toggle="modal">Add Customer </a>


                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover ">
                                <thead>
                                <tr>

                                    <th>Sl.</th>
                                    <th >Customer Name</th>
                                    <th >Department Name</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1;?>
                                @foreach($customers as $customer)
{{--                                    {{dd($customer->customerDepartment->department->department)}}--}}
                                    <tr>
                                        <td> {{$counter}} </td>
                                        <td> {{$customer->name}} </td>
                                        <td> {{$customer->customerDepartment->department->department}} </td>
                                        <td class="center">

                                            <a href="{{route('customer.edit', ['customer' => $customer])}} "><i
                                                    class="fa fa-edit"></i></a>
                                            <a>
                                                <form action="{{route('customer.destroy', ['customer' => $customer]) }}"
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
                            {{ $customers->links() }}

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



