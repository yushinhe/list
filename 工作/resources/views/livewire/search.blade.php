<div>
    <input type="text" class="form-control my-2" id="formGroupExampleInput" wire:model="search">
    <div class="list-group">
        {{-- {{ $movein->links() }} --}}
        @foreach ($movein as $l)
            <div class="d-flex list-group-item list-group-item-action">
                {{ '品項名稱:' . $l->object }}
                <a class="px-2" href="{{ '/asset-sys-asset/' . $l->id . '/detail' }}">詳細資料</a>
                @if (Auth::user()->role == 'controller')    
                   <a class="px-2 " href="{{ '/asset-sys-asset/' . $l->id . '/edit' }}"><span
                        class="fas fa-edit text-info "></a>
                   
                <span class=" px-2 fas fa-trash text-danger " onclick="event.preventDefault();
                             if(confirm('確定要刪除此筆資料?')) { document.getElementById('form-delete-{{ $l->id }}').submit()}"></span>
                <form action="{{ route('asset.destroy', $l->id) }}" id="{{ 'form-delete-' . $l->id }}" method="POST">
                    @csrf
                    @method('delete')

                </form>
                @else
                @endif
            </div>
        @endforeach
    </div>
</div>
