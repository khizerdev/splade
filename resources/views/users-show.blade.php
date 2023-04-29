<x-splade-modal>
    <h1 class="text-2xl mb-4">
        User Details
    </h1>

    <b>Name</b>: {{$user->name}}
    <br/>
    <b>Email</b>: {{$user->email}}
    <br/>
    <b>Registered On</b>: {{$user->created_at}}

</x-splade-modal>
