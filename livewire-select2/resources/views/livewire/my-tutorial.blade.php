<div>
    <div class="row">
        <div class="col-md-8">
            <form action="" wire:submit.prevent="store" method="post">
                <div class="mb-3">
                    <label for="">Judul Artikel</label>
                    <input type="text" class="form-control" wire:model="title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content Artikel</label>
                    <textarea rows="3" class="form-control" wire:model="content"></textarea>
                </div>
                <div class="mb-3" wire:ignore>
                    <label for="">Category</label>
                    <select id="my-category" class="js-example-basic w-100 d-block" wire:model="category">
                        <option></option>
                        @foreach($my_category as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3" wire:ignore>
                    <label>Tag</label>
                    <select id="my-tag" class="js-example-basic w-100 d-block" multiple="multiple" wire:model="tag">
                        @foreach(range(1,10) as $item)
                            <option value="tag {{ $item }}">Tag {{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.js-example-basic').select2();

            $('#my-category').select2({
                placeholder: "Pilih Kategori"
            });
            $('#my-tag').select2({
                placeholder: "Pilih Tag"
            });
            $('#my-category').on('change',function(e){
                var data = $('#my-category').select2("val");
                @this.set('category',data);
            })
            $('#my-tag').on('change',function(e){
                var data = $('#my-tag').select2("val");
                @this.set('tag',data);
            })
        });
        window.addEventListener('articleStore', event => {
                $('#my-category').val(null).trigger('change');
                $('#my-tag').val(null).trigger('change');
        })
    </script>
</div>
