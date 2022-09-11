@extends('Layout.drAdmin')                              <!-- Menambahkan layout drAdmin -->

@section ('title', 'Edit Data')                               <!-- Judul pd tab browser -->

@section ('heading','Ubah Data')   

@section ('body')    
<div>
    <form action="/film/{{$film->id}}" method="POST" enctype="multipart/form-data"><!-- force method POST menjadi PUT -->
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul Film</label>
            <input type="text" class="form-control" name="judul" value="{{$film->judul}}" id="judul" placeholder="Masukkan Judul">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ringkasan">Ringkasan</label>
            <textarea class="form-control" name="ringkasan"  id="ringkasan" placeholder="Masukkan Ringkasan">{{$film->ringkasan}}</textarea>
            @error('ringkasan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ringkasan">Genre</label>
            <select name="genre_id" class="form-control" id="genre_id">
                <option value="">----- Pilih salah satu -----</option>
                @foreach ($genre as $item)
                    @if ($item->id === $film->genre_id)
                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>         
                    @else
                    <option value="{{ $item->id }}">{{ $item->nama }}</option> 
                    @endif        
                @endforeach
            </select>
            @error('genre_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="rating_id">Rating</label>
            <select name="rating_id" class="form-control" id="">
                <option value="">----- Pilih salah satu -----</option>
                @foreach ($rating as $item)
                    @if ($item->id === $film->rating_id)
                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>         
                    @else
                    <option value="{{ $item->id }}">{{ $item->nama }}</option> 
                    @endif        
                @endforeach
            </select>
            @error('rating_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tahun">Tahun Rilis</label>
            <input type="number" class="form-control" name="tahun" value="{{$film->tahun}}"  id="tahun" placeholder="Masukkan Tahun"> 
            @error('tahun')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="poster">File Poster</label>
                <input type="file" class="form-control" name="poster" value="{{asset('public/image/' . $film->poster)}}" id="poster">
                @error('poster')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="form-group">
            <label for="video">Link Url Video</label>
                <input type="url" class="form-control" name="video" value="{{$film->video}}" id="video">
                @error('video')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection

@push('scriptfile')
<script>
    $('poster').on('change',function(){
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>
@endpush
@section ('footer')    

@endsection