<div>
    <form action="" wire:submit.prevent="articleStore">
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" class="form-control" wire:model="title">
        </div>
        <div class="mb-3" wire:ignore>
            <textarea id="my-ckeditor">{{ $content }}</textarea>
        </div>
        <button class="btn btn-primary" type="submit" id="my-submit">Submit</button>
    </form>

    <ul>
        @foreach ($articles as $item)
            <li>
                <a href="{{ route('article.show',$item->id) }}">{{ $item->title }}</a>
            </li>
        @endforeach
    </ul>

    <script>
        $(document).ready(function(){
            const editor =  CKEDITOR.replace( 'my-ckeditor' );
            editor.on('change',function(event){
            console.log(event.editor.getData())
            @this.set('content',event.editor.getData());
            })
            window.addEventListener('articleStore',event => {
                CKEDITOR.instance['my-ckeditor'].setData('');
            })
        })
    </script>
</div>

