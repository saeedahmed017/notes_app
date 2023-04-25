<x-app-layout>
    <div class="container">
        <div class="my-12 text-4xl">My <b class="text-sky-500 font-semibold">Notes</b></div>
        <div>
            <a class="btn btn-primary px-4 my-3" href="{{ route('note.create') }}" role="button">Add Note</a>
        </div>


        <table id="myTable" class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    <th scope="col">Created</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $count = 1;
                @endphp
                @foreach ($notes as $note)
                    <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>{{ $note->title }}</td>
                        <td>{{ $note->description }}</td>
                        <td class="flex">
                            <a class="btn btn-primary btn-sm px-3" href="{{ route('note.edit', $note->id) }}"
                                role="button">Edit</a>
                            <form class="flex mx-3" action="{{ route('note.delete', $note->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm"role="button">Delete</button>
                            </form>
                        </td>
                        <td>
                          @if($note->created_at->diffInDays() > 0)
                            {{ $note->created_at->format('d-m-Y H:i:s') }}
                          @elseif($note->created_at->diffInHours() > 0)
                            {{ $note->created_at->format('H:i:s') }}
                          @else
                            {{ $note->created_at->diffForHumans() }}
                          @endif
                        </td>
                        
                      

                    </tr>
                    @php
                        $count++;
                    @endphp
                @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>
