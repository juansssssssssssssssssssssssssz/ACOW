<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  text-gray-800 leading-tight">
            {{ __('Authors List') }}
        </h2>
    </x-slot>
        <div class="max-w-7xl mx-auto table-header">
           <br>
            <!--ADD BUTTON-->
            <a type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{route('authors.create')}}">
                 Add an Author
            </a>
            <br>
                @if(session('success'))
                    <div class="alert-success" role="alert">
                        <p>{{session('success')}}</p>
                    </div>
                @endif
        </div>
        <div class="max-w-7xl mx-auto bg-white shadow-sm sm:rounded-lg py-2 inline-block min-w-full sm:px-6 lg:px-8 ">
            <table class="table-authors">
                <thead class="border-b">
                    <tr>
                        <th scope="col" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            #
                        </th>
                        <th scope="col" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Author
                        </th>
                        <th scope="col" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Lifetime
                        </th>
                        <th scope="col" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Nationality
                        </th>
                        <th scope="col" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            URL
                        </th>
                        <th scope="col" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            Actions
                        </th>
                    </tr>

                </thead>
                <tbody>
                    @foreach($authors as $author)
                    <tr class="border-b">

                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$author['id']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$author['author']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$author['lifetime']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$author['nationality']}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="{{ url($author->url )}}">
                                {{$author['author']}}'s Wikipedia</a>
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <!-- Edit -->
                            <a type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 btn-edit" href="{{ route('authors.edit',[$author->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 background-color:red" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </a>
                            <!-- Delete -->
                            <a type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 btn-delete" href="{{ route('authors.delete',[$author->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 background-color:red" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                {{$authors->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
