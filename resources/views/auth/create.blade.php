<x-layout>
    <h1 class="my-16 text-center text-4xl font-medium text-red-400">
        Sign in to your account
    </h1>

    <x-card class="py-8 px-16">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            <div class="mb-8">
                <x-label for="email" :required="true">
                    Email
                </x-label>
                <x-text-input name="email" type="email"/>
            </div>

            <div class="mb-8">
                <x-label for="password" :required="true">
                    Password
                </x-label>
                <x-text-input name="password" type="password"/>
            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" class="rounded-sm border border-slate-400" name="remember"/>
                        <label for="remember"> Rember me </label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 underline    ">
                        Forgout password
                    </a>
                </div>
            </div>

            <div class="mb-4 text-center">
                <a href="{{ route('user.create') }}" class="underline">
                    Create Account
                </a>
            </div>
            <x-button class="w-full bg-green-100">
                Login
            </x-button>
        </form>
    </x-card>
</x-layout>