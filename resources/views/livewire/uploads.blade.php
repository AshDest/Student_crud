<div>
    <section style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        <div class="card-body">
                            <form id="form-upload" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" wire:model='title'/>
                                </div>
                                <div class="form-group">
                                    <label for="filename">File</label>
                                    <input type="file" name="filename" class="form-control" wire:model='filename'/>
                                </div>
                                <button type="submit" class="btn btn-success float-right">Upload</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
