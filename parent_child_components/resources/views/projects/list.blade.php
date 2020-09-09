@if (count($projects))


<ul class="divide-y divide-gray-200">
    @foreach ($projects as $project)
    <li class="py-6">
        <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
            <dl>
                <dt class="sr-only">Published on</dt>
                <dd class="text-base leading-6 font-medium text-gray-500"> {{$project->created_at->format('M d, Y')}}
                </dd>
            </dl>
            <div class="space-y-5 xl:col-span-3">
                <div class="space-y-6">
                    <h2 class="text-2xl leading-8 font-bold tracking-tight">
                        <a class="text-gray-900" href="#">{{ $project->name }}</a></h2>
                </div>
            </div>
        </article>

    </li>
    @endforeach
</ul>

<hr>
@endif