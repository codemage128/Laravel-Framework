<table class="table table-responsive table-striped table-bordered" id="ericHongs-table" width="100%">
    <thead>
     <tr>
        <th>Name</th>
        <th>Address</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($ericHongs as $ericHong)
        <tr>
            <td>{!! $ericHong->name !!}</td>
            <td>{!! $ericHong->address !!}</td>
            <td>
                 <a href="{{ route('admin.ericHongs.show', collect($ericHong)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view ericHong"></i>
                 </a>
                 <a href="{{ route('admin.ericHongs.edit', collect($ericHong)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit ericHong"></i>
                 </a>
                 <a href="{{ route('admin.ericHongs.confirm-delete', collect($ericHong)->first() ) }}" data-toggle="modal" data-target="#delete_confirm">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete ericHong"></i>
                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap.css') }}">
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap.js') }}" ></script>

    <script>
        $('#ericHongs-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#ericHongs-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );

       </script>

@stop