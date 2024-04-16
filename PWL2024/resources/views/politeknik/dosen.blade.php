<html>
    <h1> Daftar Dosen</h1>
    <ol>
        @foreach($dosen as $namaDosen)
            <li>{{ $namaDosen }}</li>
        @endforeach
    </ol>
</html>
