@extends('admin_dashboard')
@section('title') Admin @endsection
@section('admin')


<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('add.notice') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Notice</a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Notice</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">All Notice Table</h4>
                      
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Notice</th>                                    
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                        
                        
                            <tbody>
                                @foreach($notices as $key=>$item)
                                <tr>
                                    <td>{{ $key+1 }}</td>                                    
                                    <td>{!! $item->short_des_eng !!}</td>                                    
                                    <td>
                                        @if($item->status=='1')
                                        <a href="{{ route('notice.inactive',$item->id) }}" class="badge rounded-pill p-2 " style="background: green;color:white;font-size:12px">Active</a>
                                        @else
                                        <a href="{{ route('notice.active',$item->id) }}" class="badge rounded-pill bg-danger p-2" style="font-size:12px;color:white">Deactive</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('notice.edit',$item->id) }}" class="btn btn-info">Edit</a>
                                         <a href="{{ route('notice.delete',$item->id) }}" id="delete" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->



        
    </div> <!-- container -->

</div> <!-- content -->





@endsection