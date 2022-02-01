@extends('layouts.master')
@section('content')
<!--Modal Konfirmasi Delete-->
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog modal-dialog modal-dialog-centered ">
      <!-- Modal content-->
      <form action="" id="deleteForm" method="post">
          <div class="modal-content">
              <div class="modal-header bg-danger">
                  <h4 class="modal-title text-center text-white" >Konfirmasi Penghapusan</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <p class="text-center">Apakah anda yakin untuk menghapus Tarif? Data yang sudah dihapus tidak bisa kembali</p>
              </div>
              <div class="modal-footer">
                  <center>
                      <button type="button" class="btn btn-success" data-dismiss="modal">Tidak, Batal</button>
                      <button type="button" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Ya, Hapus</button>
                  </center>
              </div>
          </div>
      </form>
    </div>
   </div>
 <!--End Modal-->
     <div class="card shadow mb-4">
         <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Tarif</h6>
             <a href="{{route('tambah.tagihan')}}" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm">
             <i class="fas fa-plus fa-sm"></i>Tambah</a>
         </div>
             <div class="card-body">
               <div class="table-responsive">
                 <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                     <tr>
                       <th>No</th>
                       <th>Nama Pelanggan</th>
                       <th>Jumlah Meter</th>
                       <th>Tarif Kwh</th>
                       <th>Total Bayar</th>
                       <th>Status</th>
                       <th>Bukti Pemabayaran</th>
                       <th>Tindakan</th>
                     </tr>
                   </thead>
                   <tfoot>
                     <tr>
                       <th>No</th>
                       <th>Nama Pelanggan</th>
                       <th>Jumlah Meter</th>
                       <th>Tarif Kwh</th>
                       <th>Total Bayar</th>
                       <th>Status</th>
                       <th>Bukti Pemabayaran</th>
                       <th>Tindakan</th>
                     </tr>
                   </tfoot>
                   <tbody>
                   @foreach ($tagihan as $tagih)
                     <tr>
                       <td width="10%">{{$loop->iteration}}</td>
                       <td>{{ $tagih->pelanggan->name }}</td>
                       <td>{{$tagih->jumlah_meter }}</td>
                       <td>{{ $tagih->tarif_kwh }}</td>
                       <td>@rupiah($tagih->jumlah_bayar)</td>
                       <td>{{ $tagih->status }}</td>
                       <td>{{ $tagih->bukti }}</td>
                       <td>
                         <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$tagih->id}})" data-target="#DeleteModal" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                       </td>
                     </tr>
                   @endforeach
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
   <script type="text/javascript">
      function deleteData(id)
      {
          var id = id;
          var url = '{{ route("hapus.tagihan", ":id") }}';
          url = url.replace(':id', id);
          $("#deleteForm").attr('action', url);
      }

      function formSubmit()
      {
          $("#deleteForm").submit();
      }
   </script>
@endsection
