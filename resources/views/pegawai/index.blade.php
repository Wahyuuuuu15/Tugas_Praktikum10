@include('pegawai.header')
@include('pegawai.sidebar')
<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">pegawai</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Umur</th>
      <th scope="col">Telepon</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jhon Cena</td>
      <td>17-07-1987</td>
      <td>Tanggerang</td>
      <td>38</td>
      <td>085686548865</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Monkey D Luffy</td>
      <td>01-01-2001</td>
      <td>Depok</td>
      <td>26</td>
      <td>086583638161</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Naruto</td>
      <td>17-09-1998</td>
      <td>Medan</td>
      <td>28</td>
      <td>0897518625517</td>
    </tr>
  </tbody>
</table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('pegawai.footer')