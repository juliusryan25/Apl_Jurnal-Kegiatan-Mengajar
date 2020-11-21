<html>
<head>
	<title>Laporan {{$satuan}} jurnal</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan jurnal</h4>
	</center>

    @if ($satuan == 'semua')
        <table class='table table-bordered table-striped'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Semester</th>
                    <th>Tingkat</th>
                    <th>Jurusan</th>
                    <th>Rombel</th>
                    <th>id_mapel</th>
                    <th>muatan_mapel</th>
                    <th>kompetensi_dasar</th>
                    <th>jurnal</th>
                    <th>permasalahan</th>
                    <th>id_user</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($jurnal as $j)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{date('d F Y', strtotime($j->tanggal))}}</td>
                    <td>{{$j->semester}}</td>
                    <td>{{$j->tingkat}}</td>
                    <td>{{$j->jurusan}}</td>
                    <td>{{$j->rombel}}</td>
                    @foreach ($mapel as $mapels)
                        @if ($j->id_mapel == $mapels->id)
                            <td>{{$mapels->nama_mapel}}</td>
                        @endif
                    @endforeach
                    <td>{{$j->muatan_mapel}}</td>
                    <td>{{$j->kompetensi_dasar}}</td>
                    <td>{{$j->jurnal}}</td>
                    <td>{{$j->permasalahan}}</td>
                    @foreach ($user as $users)
                        @if ($j->id_user == $users->id)
                            <td>{{$users->name}}</td>
                        @endif
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    @elseif($satuan == 'satu')
        @foreach($jurnal as $j)
            <table class='table table-bordered'>
                <tr>
                    <td colspan="2">Tanggal Pertemuan: {{date('d F Y', strtotime($j->tanggal))}}</td>
                    <td>Semester: {{$j->semester}}</td>
                </tr>
                <tr>
                    <td>Tingkat: {{$j->tingkat}}</td>
                    <td>Jurusan: {{$j->jurusan}}</td>
                    <td>Rombel: {{$j->rombel}}</td>
                </tr>
                <tr>
                    <td>Mata Pelajaran: @foreach ($mapel as $mapels)@if ($j->id_mapel == $mapels->id){{$mapels->nama_mapel}}@endif @endforeach</td>
                    <td>Kompetensi Dasar (KD): {{$j->kompetensi_dasar}}</td>
                    <td>Materi Mapel: {{$j->muatan_mapel}}</td>
                </tr>
                <tr>
                    <td colspan="3">jurnal: <br> {{$j->jurnal}}</td>
                </tr>
                <tr>
                    <td colspan="3">Permasalahan: <br> {{$j->permasalahan}}</td>
                </tr>
                <tr>
                    <td colspan="3">Dibuat oleh: @foreach ($user as $users)@if ($j->id_user == $users->id){{$users->name}}@endif @endforeach</td>
                </tr>
            </table>
        @endforeach
    @endif

</body>
</html>
