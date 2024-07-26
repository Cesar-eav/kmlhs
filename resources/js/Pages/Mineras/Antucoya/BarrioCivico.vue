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
                <p class="text-2xl"><strong>MAPA 1 - Minera Escondida  </strong></p>

        

                <p class="py-2"> Los tipos de energía son eolica y mecánica.
            
                
                
                </p>
                <img src="https://images.adsttc.com/media/images/53bd/a76c/c07a/80ce/0b00/0018/newsletter/open-uri20140709-28092-ja7z7o.jpg?1404938089" alt="image_description">


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
