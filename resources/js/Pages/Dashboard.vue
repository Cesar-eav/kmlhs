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
                <p class="text-2xl"><strong>KML</strong> es un sistema de mapeo para identificar los riegos asociados a cada instalación.</p>

        

                <p class="py-2"> Los niveles de seguridad son estan representados por colores 
                    <span class="text-red-600 font-bold">rojo</span>, 
                    <span class="text-yellow-500 bold font-bold">amarillo</span> y 
                    <span class="text-green-500 font-bold">verde</span>: 


                
                
                </p>

                <p class="py-2"> Los tipo de energía son: 
                        <li>Eléctrica</li>
                        <li>Mecánica</li>
                        <li>Cinética (Potencial)</li>
                        <li>Hidráulica</li>
                        <li>Neumática</li>

                        <li>Térmica (Calórica)</li>
                        <li>Eólica</li>
                        <li>Radiaciones Ionizantes</li>
                        <li>Magnética</li>

                        <li>Presión Sonora</li>
                        <li>Solar UV</li>
                        <li>Geotérmica</li>





                </p>




            </div>


            <div>
                <a href="#" class="text-blue-600 hover:underline" target="_blank">
                    Niveles de seguridad
                </a>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import Button from "@/Components/Button.vue"
import { GithubIcon } from "@/Components/Icons/Brands"
</script>
