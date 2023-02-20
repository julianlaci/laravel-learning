@props(['comment'])
<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div>
        <img src="https://i.pravatar.cc/100" alt="" class="rounded-xl">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">Posted <time>{{$comment->created_at->diffForHumans()}}</time></p>
        </header>
        <p>{{$comment->body}} </p>
    </div>
</article>
