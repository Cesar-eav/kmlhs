<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mt-25">
                <h2 class="text-2xl font-bold leading-tight text-blue-900">
                    Bienvenidos a KML: Identificación de Riesgos Energéticos para una Minería Más Segura
                </h2>
            </div>
        </template>

        <div
            class="pb-6 pl-6 pr-6 flex flex-col gap-6 overflow-hidden bg-white rounded-md shadow-md lg:flex-row md:justify-between">
            <div>
                <p class="text-lg text-black">KML es un sistema avanzado para mapear y mitigar los riesgos asociados a cada tipo de energía en nuestras instalaciones.</p>

                <p class="py-4 text-black">Seleccione un tipo de energía para explorar los riesgos asociados:</p>
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'bolt']" class="mr-2" />
                        Eléctrica
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'cogs']" class="mr-2" />
                        Mecánica
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'wind']" class="mr-2" />
                        Cinética (Potencial)
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'water']" class="mr-2" />
                        Hidráulica
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'thermometer-half']" class="mr-2" />
                        Neumática
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'solar-panel']" class="mr-2" />
                        Térmica (Calórica)
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'wind']" class="mr-2" />
                        Eólica
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'radiation']" class="mr-2" />
                        Radiaciones Ionizantes
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'magnet']" class="mr-2" />
                        Magnética
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'volume-up']" class="mr-2" />
                        Presión Sonora
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'sun']" class="mr-2" />
                        Solar UV
                    </Button>
                    <Button class="w-full h-20 bg-gray-200 border-2 border-black text-center text-black hover:bg-gray-300 !text-black">
                        <font-awesome-icon :icon="['fas', 'mountain']" class="mr-2" />
                        Geotérmica
                    </Button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import Button from "@/Components/Button.vue"
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
</script>
