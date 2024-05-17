<div {{ $attributes }}>
    <table class="table-auto border-collapse">
        <thead>
        <tr class="border-b-2 border-b-gray-400 dark:border-b-gray-500 bg-gray-100 dark:bg-gray-800">
            <th class="px-2 py-2 text-right">Number</th>
            <th class="px-2 py-2 text-left">Name</th>
            @if($showCourse)
                <th class="px-2 py-2 text-left hidden md:table-cell">Course</th>
            @endif
            <th class="px-2 py-2 text-left hidden lg:table-cell">Email</th>
            @if($showView)
                <th></th>
            @endif
            @if($showEdit)
                <th></th>
            @endif
            @if($showDelete)
                <th></th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr class="border-b border-b-gray-400 dark:border-b-gray-500">
                <td class="px-2 py-2 text-right">{{ $student->number }}</td>
                <td class="px-2 py-2 text-left">{{ $student->user->name }}</td>
                @if($showCourse)
                    <td class="px-2 py-2 text-left hidden md:table-cell">{{ $student?->courseRef?->name }}</td>
                @endif
                <td class="px-2 py-2 text-left hidden lg:table-cell">{{ $student->user->email }}</td>
                @if($showView)
                    <td>
                        <x-table.icon-show class="ps-3 px-0.5"
                        href="{{ route('students.show', ['student' => $student]) }}"/>
                    </td>
                @endif
                @if($showEdit)
                    <td>
                        <x-table.icon-edit class="px-0.5"
                        href="{{ route('students.edit', ['student' => $student]) }}"/>
                    </td>
                @endif
                @if($showDelete)
                    <td>
                        <x-table.icon-delete class="px-0.5"
                        action="{{ route('students.destroy', ['student' => $student]) }}"/>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
