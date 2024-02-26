<!DOCTYPE html>
<html lang="en">
@include('meta')
@include('navbar')

<body class="bg-background">

    <section class="px-10 py-12">
        <h1 class="text-5xl font-bold mb-5 text-text"><span class="underline">User Settings</span></h1>
    </section>

    <div class="py-12">

        @if(session('status'))
        <div>
            <h1 class="text-2xl antialiased font-semibold leading-snug tracking-normal text-center  text-text">{{ session('status') }}</h1>
        </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">


            <div class="p-4 sm:p-8 text-text bg-custom-color shadow sm:rounded-lg">

                <table class="table-auto bg-custom-color">
                    <thead>
                        <tr>
                            <th class="text-text text-lg px-4 py-2">Name</th>
                            <th class="text-text text-lg px-4 py-2">Email</th>
                            <th class="text-text text-lg px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-text text-lg px-4 py-2 hover:bg-red-700">{{ $user->name }}</td>
                            <td class="text-text text-lg px-4 py-2">{{ $user->email }}</td>
                            <td class="px-4 py-2">
                                <form action="{{ route('user.delete', $user->id) }}" method="POST" class="flex justify-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
                            <td class="px-4 py-2">
                                <a href="{{ route('user.edit', $user->id) }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-4 sm:p-8  text-text bg-custom-color shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 text-text bg-custom-color shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 text-text bg-custom-color shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>

</body>

</html>