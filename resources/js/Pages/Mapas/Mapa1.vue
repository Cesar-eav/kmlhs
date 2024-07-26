<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <h2 class="text-xl font-semibold leading-tight">
                    Bienvenido
                </h2>


            </div>
        </template>

        <div
            class="p-6 flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row md:justify-between dark:bg-dark-eval-1">
            <div>
                <p class="text-2xl"><strong>Minera Antucoya</strong></p>

                <p class="py-2"> Los tipos de energía son eolica y mecánica.

                </p>

            </div>


            <div>
                <a href="#" class="text-blue-600 hover:underline" target="_blank">
                    Niveles de seguridad
                </a>
            </div>



        </div>
        <div class="GOOGLEMAPS map-container m-2">

            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=17163pO-Tzp40JQTWBey4omBiIMd5Opc&ehbc=2E312F"
                width="640" height="480" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>

        </div>

    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import Button from "@/Components/Button.vue"
import { GithubIcon } from "@/Components/Icons/Brands"
</script>


<style>
.map-container {
    width: 100%;
    height: 500px
        /* Ajusta el tamaño según tus necesidades */
}

iframe {
    width: 100%;
    height: 100%;
}
</style>