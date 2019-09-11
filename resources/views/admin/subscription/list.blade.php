@extends('admin.master.skleton')

@section('title','Subscription')

@section('css')
<style>
  .content{
    padding:0px;
  }
  .content>.row{
    margin-left:0px;
    margin-right:0px;
  }
  .content h6{
    margin-top:10px;
  }
  .content .icons{
    margin-left:7px
  }
  .content .btn-square{
    padding-left:0px;
  }
  .dataTables_filter, .dataTables_info {
    display: none; 
  }
  .selected{
    background-color:red;
  }
</style>
@endsection

@section('content')
  <main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href=" {{ url('subscription') }} ">Subsctiption</a></li>
    </ol>
    <div class="container-fluid">
      <div class="animated fadeIn">
        <!-- /.row-->
        <div class="row">
          <div class="col-md-9">
            <div class="card">
                <div class="card-header content">
                  <div class="row">
                    <div class="col-md-4">
                      <h6>Member</h6>
                    </div>
                    <div class="col-md-1 offset-md-6">
                      <button class="btn btn-square btn-block btn-success" type="button"><i class="icon-plus icons font-2xl d-block"></i></button>
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-square btn-block btn-danger" type="button"><i class="icon-close icons font-2xl d-block"></i></button>
                    </div>
                  </div>
                  
                </div>                
                <div class="card-body">
                  <table id="myTable" class="table table-responsive-sm">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th>Subscription</th>
                          <th>Join Date</th>
                          <th style="width:15%;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>

          <div class="col-md-3">
            <button id="a">a</button>
            <div class="card">
                <div class="card-header">Filter</div>                
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Search By Name">
                  </div>
                  <div class="form-group">
                    <label for="name">Email</label>
                    <input class="form-control" id="name" type="text" placeholder="Search By Email">
                  </div>
                  <div class="form-group">
                    <label for="name">Status</label>
                    <select class="form-control">
                      <option value="1">Enable</option>
                      <option value="0">Disabled</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name">Subscription Status</label>
                    <select class="form-control">
                      <option value="1">Enable</option>
                      <option value="0">Disabled</option>
                    </select>
                  </div>
                </div>
            </div>
          </div>
          <!-- /.col-->
        </div>
      </div>
    </div>
  </main>
@endsection

@section('js')
<script>
 

$(document).ready( function () {
    var selected = [];
    $('#myTable tbody').on( 'click', 'tr', function () {
      var id = this.id;
      var index = $.inArray(id, selected);
      if ( index === -1 ) {
          selected.push( id );
      } else {
          selected.splice( index, 1 );
      }

      $(this).toggleClass('selected');
    });
    $("body").on("click",'#a',function(){
      console.log(table.rows('.selected').data().length +' row(s) selected');
    })

    $('#button').click( function () {
        alert( table.rows('.selected').data().length +' row(s) selected' );
    });
    var table = $('#myTable').DataTable({
      scrollX: true,
      processing: true,
      serverSide: true,
      ajax: {
        url:"{{ url('subscription') }}",
        type: 'get',
        data: {
          json:true
        }
      },
      rowId: 'id',
      rowCallback: function( row, data ) {
        console.log( selected)
        console.log( data.id)
        console.log($.inArray(data.id, selected))
        if ($.inArray(data.id, selected) != -1 ) {
            $(row).addClass('selected');
        }
      },
      columns: [
        {
          data: null, 
          name: 'firstname',
          render: function ( data, type, row, meta ) {
            return data.fullname
          }
        },
        {
          data: null, 
          name: 'email',
          render: function ( data, type, row, meta ) {
            return data.email
          }
        },
        {
          data: null, 
          name: 'status',
          render: function ( data, type, row, meta ) {
            return data.status
          }
        },
        {
          data: null, 
          name: 'status',
          render: function ( data, type, row, meta ) {
            return data.subscription
          }
        },
        {
          data: null, 
          name: 'created_at',
          render: function ( data, type, row, meta ) {
            return data.created_at
          }
        },
        {
          data: null, 
          name: 'action',
          orderable: false,
          render: function ( data, type, row, meta ) {
            return '<a href="javascript:void(0)" class="btn btn-success edit" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a> <a href="javascript:void(0)" class="btn btn-danger delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i><a>';
          }
        },
      ]
    });
});
</script>
@endsection