
@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
    <?php $message['level'] == 'danger' ? $message['level'] = 'error' : ''; ?>
        <div id="toast-container" class="toast-top-right">
             <div class="toast toast-{{ $message['level'] }}" aria-live="polite" style="display: block;">
              <div class="toast-message">
             
                     {!! $message['message'] !!}
          
            
           </div>
        </div>
        </div>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}




