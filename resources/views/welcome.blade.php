<x-layout>
    <div class="mt-8 bg-white overflow-hidden shadow sm:rounded-lg h-96">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="m-auto fixed inset-0 flex flex-col space-y-4 items-center w-96 h-96"
                         id="names-binding">
                        <label class="font-xs font-semibold text-gray-800"
                               for="input">Please enter your name</label>
                        <input class="rounded-lg border h-8 p-2
                                      border-fuchsia-600 shadow-lg shadow-fuchsia-200/50"
                               type="text"
                               id="input"
                               v-model="newName">
                        <p>@{{ $newName }}</p>
                        <button class="rounded border pd-6 w-24
                                       bg-gray-400
                                       hover:bg-cyan-400 hover:font-bold hover:text-white"
                                v-on:click="addName">
                            Enter
                        </button>
                        <div class="font-extralight text-md text-gray-800">
                            <ul>
                                <li v-for="name in names">
                                    @{{ name.first_name }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
<script>
    const Names = {
        data() {
            return {
                newName: "",
                names: []
            }
        },
        mounted() {
            axios.get("{{ route('api.people.index') }}")
                .then(response => {
                    this.names = response.data;
                }).catch(error => {
                    console.log(error.response.data)
                }
            )
        },
        methods: {
            addName() {
                axios.post(
                    "{{ route('api.people.store') }}", {
                        name: this.newName
                    }).then(response => {
                        this.names.push(response.data);
                        this.newName = "";
                    }).catch(error => {
                        console.log(error.response.data);
                    }
                );
            }
        }
    }
    Vue.createApp(Names).mount('#names-binding');
</script>
