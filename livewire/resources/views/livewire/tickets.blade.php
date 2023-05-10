<div>
    <div class="mt-5 border pt-4 ps-2"
    style="min-height:200px;font-family:sans-serif;">
    <h3>Support Tickets</h3>


    @foreach ($tickets as $ticket)
        
    <div
        class="d-flex mx-auto border  mt-3 py-3 px-3 flex-column rounded {{ $active== $ticket->id ?'bg-secondary text-white':'' }}"
        style="min-height: 150px;" wire:click="$emit('ticketSelected',{{ $ticket->id }})"
    >
        <div class="pt-3">
            {{ $ticket->questions }}
        </div>
    </div>
    @endforeach
</div>
    
</div>

