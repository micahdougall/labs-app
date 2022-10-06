<x-layout>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 5.999l-5.621 2.986c-.899-.104-1.806.191-2.474.859-.662.663-.95 1.561-.862 2.428l-3.043 5.728 5.724-3.042c.884.089 1.772-.205 2.432-.865.634-.634.969-1.524.859-2.473l2.985-5.621zm-5.97 7.22c-.689 0-1.25-.559-1.25-1.249-.001-.691.559-1.251 1.25-1.25.69 0 1.25.56 1.25 1.25-.001.689-.56 1.249-1.25 1.249zm.79-9.409v2.108h-.457l-.004-.007-.801-1.355v1.362h-.436v-2.108h.454l.808 1.365v-1.365h.436zm6.235 8.734v-.48h.957v-.384h-.957v-.417h1.043v-.413h-1.507v2.108h1.529v-.414h-1.065zm-12.998-1.694l-.315 1.395-.329-1.395h-.43l-.334 1.377-.304-1.377h-.465l.527 2.098.003.011h.463l.32-1.378.326 1.378h.455l.538-2.108h-.455zm5.188 9.209c.119.066.358.132.601.132.582 0 .853-.302.853-.657 0-.302-.173-.497-.547-.636-.277-.106-.394-.166-.394-.302 0-.106.101-.204.309-.204.204 0 .358.06.44.101l.106-.384c-.126-.06-.299-.107-.541-.107-.497 0-.802.274-.802.636 0 .312.232.507.585.632.255.089.355.167.355.296 0 .142-.116.233-.337.233-.204 0-.405-.066-.531-.133l-.097.393z"/>
                    </svg>
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="/labs2/vars/string"
                           class="underline text-gray-900 dark:text-white"
                        >Route 1</a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        This route will return a string.
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path d="M19.002 4.999l.501 2.001 1.496-4-3.998 1.5 2.001.499zm.416-4.999c-2.53 0-4.582 2.014-4.582 4.499 0 2.524 2.004 4.248 4.582 6.501 2.578-2.253 4.582-3.978 4.582-6.501 0-2.485-2.052-4.499-4.582-4.499zm0 7.791c-1.771 0-3.207-1.436-3.207-3.207 0-1.772 1.436-3.209 3.207-3.209s3.207 1.437 3.207 3.209c0 1.771-1.436 3.207-3.207 3.207zm-.356 6.213c0-.535.434-.968.968-.968.535 0 .969.433.969.968 0 .535-.434.968-.969.968-.534 0-.968-.433-.968-.968zm4.938-4.629v10.625l-6.455 4-5.545-4-5.545 4-6.455-4v-18l6.455 4 5.545-4 1 .777v7.223h-2v-4.813l-4 2.886v3.927h-1v-3.929l-4-2.479v13.294l4 2.479v-4.365h1v4.141l4-2.885v-3.256h2v3.255l4 2.885v-4.14h1v4.365l4-2.479v-7.5c.725-.654 1.409-1.315 2-2.011zm-8.76 5.252l-1.659-.945.583-1.024 1.66.945-.584 1.024zm2.252.805c-.433 0-.855-.087-1.253-.259l.467-1.082c.25.107.514.162.786.162.222 0 .441-.037.651-.11l.388 1.112c-.334.118-.683.177-1.039.177zm-10.922-1.2c.26 0 .514-.05.754-.148l.447 1.09c-.382.157-.786.236-1.201.236-.373 0-.741-.066-1.093-.195l.407-1.105c.221.081.452.122.686.122zm5.369-2.364c.42 0 .83.082 1.217.244l-.453 1.087c-.243-.101-.5-.153-.764-.153-.23 0-.457.04-.674.119l-.401-1.108c.346-.126.708-.189 1.075-.189zm-7.97 1.168c.535 0 .969.433.969.968 0 .535-.434.968-.969.968s-.969-.433-.969-.968c0-.535.434-.968.969-.968zm4.211.56l1.639-.981.605 1.011-1.639.982-.605-1.012z"/>
                    </svg>
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="/labs2/var/singlevar"
                           class="underline text-gray-900 dark:text-white"
                        >Route 2</a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        This route will return a string using a variable.
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <div class="flex items-center">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path d="M20.012 18v2h-20v-2h20zm3.973-13.118c.154 1.349-.884 2.615-1.927 3.491-.877.735-9.051 6.099-9.44 6.307-1.756.936-3.332 1.306-4.646 1.32-1.36.014-2.439-.354-3.144-.872l-4.784-3.977 3.742-2.373 4.203 1.445.984-.578-4.973-3.645 3.678-2.124 7.992 1.545c.744-.445 1.482-.9 2.225-1.348 1.049-.623 2.056-1.055 3.387-1.055 1.321 0 2.552.52 2.703 1.864zm-4.341.512c-.419.192-3.179 1.882-3.615 2.144l-8.01-1.55-.418.241 5.288 3.307-4.683 2.876-4.214-1.448-.69.395c.917.729 1.787 1.522 2.751 2.186 1.472.962 4.344.22 5.685-.663.9-.592 7.551-4.961 8.436-5.582.605-.431 1.797-1.414 1.824-2.152l.001-.004c-.644-.287-1.716-.041-2.355.25z"/>
                    </svg>
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="/labs2/twovars/var1/var2"
                           class="underline text-gray-900 dark:text-white"
                        >Route 3</a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        This route will return two variables.
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                <div class="flex items-center">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                        <path d="M16.143 2l5.857 5.858v8.284l-5.857 5.858h-8.286l-5.857-5.858v-8.284l5.857-5.858h8.286zm.828-2h-9.942l-7.029 7.029v9.941l7.029 7.03h9.941l7.03-7.029v-9.942l-7.029-7.029zm-6.281 7.526c-.099-.807.528-1.526 1.348-1.526.771 0 1.377.676 1.28 1.451l-.757 6.053c-.035.283-.276.496-.561.496s-.526-.213-.562-.496l-.748-5.978zm1.31 10.724c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"/>
                    </svg>
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                        Unused Route
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Currently, this route is unused.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
