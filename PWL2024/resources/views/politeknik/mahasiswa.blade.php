<html>
    <h1> Daftar Dosen</h1>
    <ol>
        @foreach($mahasiswa as $namaMahasiswa)
            <li>{{ $namaMahasiswa }}</li>
        @endforeach
    </ol>
</html>
