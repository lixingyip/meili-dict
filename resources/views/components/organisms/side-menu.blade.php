@props(['userAvatarUrl', 'userName', 'userEmail', 'otherUserEmail'])

<div class="border-e -mt-16 flex h-screen flex-col justify-between bg-white pt-16">
    <div class="px-4 py-6">

        <nav aria-label="Main Nav" class="flex flex-col space-y-1">
            <x-molecules.side-menu-item href="#" :is-active="true">
                <x-slot:icon>
                    <x-atoms.home-icon></x-atoms.home-icon>
                </x-slot:icon>
                Dashboard
            </x-molecules.side-menu-item>

            <x-molecules.side-menu-item href="#">
                <x-slot:icon>
                    <x-atoms.contact-icon></x-atoms.contact-icon>
                </x-slot:icon>
                Contacts
            </x-molecules.side-menu-item>

            <x-molecules.side-menu-item href="#">
                <x-slot:icon>
                    <x-atoms.company-icon></x-atoms.company-icon>
                </x-slot:icon>
                Companies
            </x-molecules.side-menu-item>
        </nav>
    </div>

    <div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
        <form action="/login" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ $otherUserEmail }}">
            <button type="submit" class="flex items-center gap-2 bg-white p-4 hover:bg-gray-50">
                <x-atoms.avatar image-url="{{ $userAvatarUrl }}"></x-atoms.avatar>

                <div class="text-left">
                    <p class="text-xs">
                        <strong class="block font-medium">{{ $userName }}</strong>

                        <span> {{ $userEmail }} </span>
                    </p>
                </div>
            </button>
        </form>
    </div>
</div>
