<x-layout>
    
    <x-slot name="header">
        Profil
    </x-slot>

    <div class="container card p-4">
        <ul class="breadcrumb col-lg-12">
            <li>
                <a href="{{ route('alumni.profil') }}" class="breadcrumb-item active fw-bold text-success px-1">
                    Profil
                </a>
            </li>
            <span class="px-2">|</span>
            <li>
                <a href="{{ route('alumni') }}" class="px-1">
                    Data Alumni
                </a>
            </li>
            <span class="px-2">|</span>
            <li>
                <a href="{{ route('alumni.peta') }}" class="px-1">
                    Peta Alumni
                </a>
            </li>
        </ul>

        

    </div>
</x-layout>
