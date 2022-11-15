<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Test') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
            <div class="bg-teal-300 rounded-lg py-5 px-6 mb-4 text-base text-slate-800 mb-3" role="alert">
                {{session('success')}}
            </div>
            @endif

            <div>
                <x-link-button :href="route('master_create')" class="bg-teal-300 p-2 text-white rounded">Input Data
                </x-link-button>
            </div>
            <div class="flex mt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur quisquam, fugit nam
                    illo maxime vitae, debitis, distinctio odio est cumque perspiciatis alias minima molestiae! Quaerat,
                    expedita illum aspernatur fuga unde repellat! Nulla veritatis praesentium aspernatur facere
                    recusandae tempora ipsa voluptates labore eos distinctio, asperiores officia velit maiores corporis?
                    Cupiditate excepturi obcaecati incidunt minima voluptatibus perferendis placeat dignissimos
                    asperiores quia vel quos amet, facilis labore, est ut dolor pariatur dolorum voluptatum consectetur,
                    cum minus. Hic laboriosam incidunt corrupti odit mollitia reprehenderit repudiandae iusto
                    consectetur in doloremque velit harum praesentium, obcaecati rerum omnis! Laboriosam molestiae quis
                    nobis incidunt non maiores veniam, odio sequi sit nulla laudantium recusandae dignissimos repellat
                    placeat sunt dolore voluptatibus! Reiciendis deleniti perferendis ipsam provident magnam repellendus
                    unde sed, tenetur, architecto fuga omnis consequatur. Maxime, earum? Quo quaerat optio hic quia
                    reprehenderit eligendi blanditiis aperiam, quis maiores animi alias adipisci non minus est a esse
                    repudiandae repellendus odit natus. Odit quos ut veniam libero officiis necessitatibus quisquam est
                    perspiciatis dolorem, cupiditate deleniti omnis doloremque consequuntur, nobis veritatis molestias
                    aliquid facilis alias ab sapiente explicabo quas. Deleniti provident eaque, iste non necessitatibus,
                    facere esse dolores distinctio, nulla neque consectetur nobis. Quod sunt odio culpa nemo eos
                    expedita corporis id?
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
