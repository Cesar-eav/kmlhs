<template>

    <PerfectScrollbar tagname="nav" aria-label="main"
        class="relative flex flex-col flex-1 max-h-full gap-4 px-3 bg-white m-4 p-2 rounded-lg">

        <!-- Link principal al dashboard -->
        <SidebarLink title="Inicio" :href="route('dashboard')" :active="route().current('dashboard')">
            <template #icon>
                <DashboardIcon class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
            </template>
        </SidebarLink>

        <!-- Submenú principal: Minera Antucoya -->
        <SidebarCollapsible title="Minera Antucoya" :active="route().current('mapa1')"
            :isOpen="openSubmenu === 'configuracion-Antucoya'" @toggle="toggleSubmenu('configuracion-Antucoya')">
            <!-- Submenú interno: Proceso Mina -->
            <SidebarCollapsible title="Proceso Mina" :href="route('mapa1')" :active="route().current('mapa1')">
                <SidebarCollapsibleItem title="Operacion Mina" :href="'/mapa1'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Barrio Cívico" :href="'/#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="TruckShop" :href="'/#'"> </SidebarCollapsibleItem>


            </SidebarCollapsible>
            
            <SidebarCollapsible title="Chancao Primario" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

            <SidebarCollapsible title="Chancao Secundario" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

            <SidebarCollapsible title="Chancao Terciario" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>


            <SidebarCollapsible title="Torre de Transferencia" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

 
            <SidebarCollapsible title="Aglomerado" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>


            <SidebarCollapsible title="Pilas de Lixiviación" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

            <SidebarCollapsible title="Pilas Rom Lix" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

            <SidebarCollapsible title="Ripios" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>


            <SidebarCollapsible title="Planta Piloto" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>


            <SidebarCollapsible title="Muestra Geológica" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

            
        <SidebarCollapsible title="Geología" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>


            <SidebarCollapsible title="Lab. Químico" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

            <SidebarCollapsible title="Campamento" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>

            <SidebarCollapsible title="Nave EW" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>


            <SidebarCollapsible title="Nave SX" :href="route('mapa2')" :active="route().current('mapa2')">
                <SidebarCollapsibleItem title="Energía Mecánica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Hidraulica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Cinética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Neumática" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Térmica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Eólica" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Magnética" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Solar" :href="'#'"> </SidebarCollapsibleItem>
                <SidebarCollapsibleItem title="Energía Geotérmica" :href="'#'"> </SidebarCollapsibleItem>
            </SidebarCollapsible>
            
        </SidebarCollapsible>

    
    </PerfectScrollbar>


</template>

<script setup>
import PerfectScrollbar from '@/Components/PerfectScrollbar'
import SidebarLink from '@/Components/Sidebar/SidebarLink.vue'
import { DashboardIcon } from '@/Components/Icons/Outline'
import SidebarCollapsibleItem from '@/Components/Sidebar/SidebarCollapsibleItem.vue'
import SidebarCollapsible from '@/Components/Sidebar/SidebarCollapsible.vue'
import { ref } from 'vue';

const openSubmenu = ref(null);


</script>
