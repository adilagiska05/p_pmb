

@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data prodi
                        <a href="{{ route('biodata.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nik</th>
                                        <th>jk</th>
                                        <th>Tempat_lahir</th>
                                        <th>Tanggal_lahir</th>
                                        <th>Agama</th>
                                        <th>Status_kawin</th>
                                        <th>Email</th>
                                        <th>No_Hp</th>
                                        <th>Alamat</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Kelurahan</th>
                                        <th>Kecamatan</th>
                                        <th>Provinsi</th>
                                        <th>Kota/kab</th>
                                        <th>Kode_pos</th>
                                        <th>Kewarganegaraan</th>
                                        <th>Ukuran_almamater</th>
                                        <th>Up_ktp</th>
                                        <th>Vaksin</th>


                                        <th>Nama_ibu</th>
                                        <th>Nama_ayah</th>
                                        <th>Alamat_ortu</th>
                                        <th>Kecamatan_ortu</th>
                                        <th>Provinsi_ortu</th>
                                        <th>Kota/kab_ortu</th>
                                        <th>No_hp_ortu</th>
                                        <th>Pekerjaan_ibu</th>
                                        <th>Pekerjaan_ayah</th>
                                       
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($biodata as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->nik }}</td>
                                            <td>{{ $data->jk }}</td>
                                            <td>{{ $data->Tempat_lahir }}</td>
                                            <td>{{ $data->tgl_lahir}}</td>
                                            <td>{{ $data->agama}}</td>
                                            <td>{{ $data->status_kawin}}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->no_hp }}</td>
                                            <td>{{ $data->alamat}}</td>
                                            <td>{{ $data->rt}}</td>
                                            <td>{{ $data->rw }}</td>
                                            <td>{{ $data->kelurahan }}</td>
                                            <td>{{ $data->kecamatan }}</td>
                                            <td>{{ $data->provinsi }}</td>
                                            <td>{{ $data->kota/kab }}</td>
                                            <td>{{ $data->ode_pos }}</td>
                                            <td>{{ $data->kewarganegaraan }}</td>
                                            <td>{{ $data->ukuran_almamater }}</td>
                                            <td>{{ $data->up_ktp }}</td>
                                            <td>{{ $data->vaksin }}</td>


                                            <td>{{ $data->nama_ibu }}</td>
                                            <td>{{ $data->nama_ayah }}</td>
                                            <td>{{ $data->alamat_ortu }}</td>
                                            <td>{{ $data->kecamatan_ortu }}</td>
                                            <td>{{ $data->provinsi_ortu }}</td>
                                            <td>{{ $data->kota/kab_ortu }}</td>
                                            <td>{{ $data->no_hp_ortu }}</td>
                                            <td>{{ $data->pekerjaan_ibu }}</td>
                                            <td>{{ $data->pekerjaan_ayah }}</td>
                                            
                                            <td>
                                                <form action="{{ route('biodata.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('biodata.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('biodata.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
