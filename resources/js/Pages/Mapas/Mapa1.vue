<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mt-15">
                <h2 class="text-2xl font-bold leading-tight text-blue-900">
                    Proceso Mina
                </h2>
            </div>
        </template>

        <div
            class="pl-6 flex flex-col justify-center gap-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1">
            <div id="GOOGLEMAPS" class="mb-6 flex justify-center">
                <iframe 
                    src="https://www.google.com/maps/d/u/0/embed?mid=17163pO-Tzp40JQTWBey4omBiIMd5Opc&ehbc=2E312F"
                    width="1000" height="480" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

            <div class="mt-6">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b py-2">Nombre</th>
                            <th class="border-b py-2">Descripción</th>
                            <th class="border-b py-2">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="image in images" :key="image.name" class="hover:bg-gray-100">
                            <td class="border-b py-2">{{ image.name }}</td>
                            <td class="border-b py-2">
                                <font-awesome-icon :icon="['fas', 'info-circle']" class="mr-2" />
                                {{ image.description }}
                            </td>
                            <td class="border-b py-2">
                                <button @click="openLightbox(image.src)" class="text-blue-600 hover:underline">
                                    <font-awesome-icon :icon="['fas', 'eye']" class="mr-1" />
                                    Ver
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Lightbox para mostrar la imagen con zoom -->
        <vue-easy-lightbox
            :visible="visible"
            :imgs="selectedImage"
            @hide="handleHide">
        </vue-easy-lightbox>
    </AppLayout>
</template>

<script setup>
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import VueEasyLightbox from 'vue-easy-lightbox'

// Importar los iconos de Font Awesome
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faInfoCircle, faEye } from '@fortawesome/free-solid-svg-icons'

// Añadir iconos a la librería
library.add(faInfoCircle, faEye)

const images = ref([
    { name: '0091', description: 'Sala eléctrica  001', src: '/images/f1.png' },
    { name: '0092', description: 'Sala eléctrica  002', src: '/images/f2.png' },
    { name: '0093', description: 'Sala eléctrica  003', src: '/images/f3.png' }
])

const visible = ref(false)
const selectedImage = ref([])

const openLightbox = (src) => {
    selectedImage.value = [src]
    visible.value = true
}

const handleHide = () => {
    visible.value = false
}
</script>

<style scoped>
/* Efecto de hover en las filas de la tabla */
.hover:bg-gray-100 {
    transition: background-color 0.3s ease;
}
</style>
