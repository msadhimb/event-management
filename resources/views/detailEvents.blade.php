@extends('template')
@section('content') 
    <figure>
        <div class="container" id="detail-event">
            <form>
                <div class="mt-5">
                    <h1>Nama Event</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="https://via.placeholder.com/400" alt="imagePreview" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h4>Detail Event</h4>
                        <div class="d-flex">
                            <div class="col-md-4">
                                <p>Tanggal Mulai</p>
                                <p>Tanggal Berakhir</p>
                                <p>Deskripsi</p>
                            </div>
                            <div class="col-md-6">
                                <p>: 12-12-2021</p>
                                <p>: 12-12-2021</p>
                                <p>: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary mx-2" id="edit-button" type="button">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>

        {{-- Setelah tombol edit klik sembunyikan kode atas tampilkan kode bawah --}}

        <div class="container" id="detail-event-update">
            <form>
                <div class=" mt-5" id="page-desc">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Event Name" name="title">
                        <label for="floatingInput">Event Name</label>
                    </div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                         <!-- Input untuk memilih gambar -->
                         <img id="previewImage" src="https://via.placeholder.com/400" alt="hero" style="width: 100%; object-fit:cover" >
                         <div class="form-group mt-2">
                             <label for="imageInput">Pilih Gambar</label>
                             <input type="file" class="form-control-file" id="imageInput" name="poster" accept="image/*">
                         </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Detail Event</h4>
                        <div class="d-flex flex-column">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal Mulai" style="width: 100%" name="start">
                                <label for="floatingInput">Tanggal Mulai</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" placeholder="Tanggal Berakhir" name="end">
                                <label for="floatingInput">Tanggal Berakhir</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Pembicara" name="pembicara">
                                <label for="floatingInput">Pembicara</label>
                            </div>  
                        </div>
                        <h4 class="m-0 mt-3">Deskripsi</h4>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" placeholder="Deskripsi Event" id="floatingTextarea2" style="height: 10rem" name="description"></textarea>
                            <label for="floatingTextarea2">Deskripsi Event</label>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mt-3" id='button-update'>Update</button>
                    <button type="button" class="btn btn-secondary mt-3 mx-2" id="button-cancel">Cancel</button>
                </div>
            </form>
        </div>

    </figure>

    <script>
        const detailEvent = document.getElementById('detail-event');
        const detailEventUpdate = document.getElementById('detail-event-update');
        const buttonEdit = document.getElementById('edit-button');
        const buttonUpdate = document.getElementById('button-update');
        const buttonCancel = document.getElementById('button-cancel');

        detailEventUpdate.style.display = 'none';
        buttonEdit.addEventListener('click', function(){
            detailEvent.style.display = 'none';
            detailEventUpdate.style.display = 'block';
        })

        buttonCancel.addEventListener('click', function(){
            detailEvent.style.display = 'block';
            detailEventUpdate.style.display = 'none';
        })
        
    </script>
@endsection