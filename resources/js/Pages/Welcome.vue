<template>
    <Head title="Welcome" />

    <div class="relative flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Ingresar
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Registrarse
                </Link>
            </template>
        </div>

        <!-- Óvalo con borde negro alrededor de los elementos -->
        <div class="border-4 border-gray-300 rounded-full px-16 py-8 text-center mb-12 inline-block bg-gray-200">
            <div class="flex justify-center items-center mb-4">
                <font-awesome-icon :icon="['fas', 'bolt']" class="text-blue-900 text-6xl" />
                <p class="text-9xl text-black font-bold ml-4">KML</p>
            </div>
            <h1 class="text-4xl font-semibold text-blue-900">Riesgos en sistemas Eléctricos</h1>
            <p class="text-lg text-black mt-4">Identificación de riesgos asociados con la electricidad.</p>
        </div>

        <!-- Sección de información adicional o enlaces -->
        <div class="mt-8">
            <Link :href="route('dashboard')" class="bg-black text-white px-6 py-2 rounded-full hover:bg-gray-900">
                Ingresar
            </Link>
        </div>
    </div>
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<style scoped>
/* Estilos adicionales si es necesario */
</style>
