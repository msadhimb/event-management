@extends('template')
@section('content')

    <div>
        <div class="container">
            <div class="mt-5">
                <h1>Add Event</h1>
                <p>Disini kita bisa menambahkan event.</p>
            </div>
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center">
                            <img id="imagePreview" src="https://via.placeholder.com/400" class="img-fluid" alt="Dummy Image">
                        </div>
                        <div class="form-group mt-2">
                            <label for="imageInput">Pilih Gambar</label>
                            <input type="file" class="form-control-file" id="imageInput" name="imagePreview" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="">
                            <label for="name">Nama Event</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="start" placeholder="">
                            <label for="start">Tanggal Mulai</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="end" placeholder="">
                            <label for="end">Tanggal Berakhir</label>
                        </div>  
                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="description" placeholder="" style="height: 15rem"></textarea>
                            <label for="description">Deskripsi</label>
                        </div>  
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('imageInput').addEventListener('change', function(event){
            const previewImage = document.getElementById('imagePreview');
            previewImage.src = URL.createObjectURL(event.target.files[0])
        })
    </script>

@endsection