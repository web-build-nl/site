<script src="https://cdn.tailwindcss.com"></script>

<div class="container mx-auto py-12">
<h1 class="text-3xl font-bold mb-5">Todo</h1>

    @foreach ($todos as $todo)
        <div class="bg-gray-200 rounded-lg p-4 my-3">
            <h2 class="">{{$todo->content}}</h2>
        </div>
    @endforeach

    <h3>Add more</h3>
    <form action="" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="content" name="content" class="bg-gray-200 border my-3">

        </div>
        <input type="submit" value="Add todo" class="bg-blue-500 text-white font-bold px-6 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
    </form>
</div>

