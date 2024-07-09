<template>
    <PerfrectScrollbar
        tagname="nav"
        aria-label="main"
        class="relative flex flex-col flex-1 max-h-full gap-4 px-3"
    >
        <SidebarLink
            title="Inicio"
            :href="route('dashboard')"
            :active="route().current('dashboard')"
        >
            <template #icon>
                <DashboardIcon
                    class="flex-shrink-0 w-6 h-6"
                    aria-hidden="true"
                />
            </template>
        </SidebarLink
            title="Mapa zona 1"
        >




        <SidebarCollapsible
            icon="mdi:note-outline"
            title="Mapa 1"
            :active="route().current('/dashboard')"
        >
            <SidebarCollapsibleItem
                :to="{ name: 'Blank' }"
                title="ZN1"
                :active="route().current('Blank')"
            />

            <SidebarCollapsibleItem
                :to="{ name: 'Blank' }"
                title="ZN2"
                :active="route().current('Blank')"
            />

        </SidebarCollapsible>

        
        <SidebarCollapsible
            icon="mdi:note-outline"
            title="Mapa 2"
            :active="route().current('/dashboard')"
        >
            <SidebarCollapsibleItem
                :to="{ name: 'Blank' }"
                title="ZN1"
                :active="route().current('Blank')"
            />

            <SidebarCollapsibleItem
                :to="{ name: 'Blank' }"
                title="ZN2"
                :active="route().current('Blank')"
            />

        </SidebarCollapsible>


        <SidebarCollapsible
            icon="mdi:note-outline"
            title="Mapa 3"
            :active="route().current('/dashboard')"
        >
            <SidebarCollapsibleItem
                :to="{ name: 'Blank' }"
                title="ZN1"
                :active="route().current('Blank')"
            />

            <SidebarCollapsibleItem
                :to="{ name: 'Blank' }"
                title="ZN2"
                :active="route().current('Blank')"
            />

        </SidebarCollapsible>

 
 

    </PerfrectScrollbar>
</template>

<script setup>
import PerfrectScrollbar from '@/Components/PerfectScrollbar'
import SidebarLink from '@/Components/Sidebar/SidebarLink.vue'
import { DashboardIcon } from '@/Components/Icons/Outline'
import SidebarCollapsibleItem from '@/Components/Sidebar/SidebarCollapsibleItem.vue'
import SidebarCollapsible from '@/Components/Sidebar/SidebarCollapsible.vue'
</script>
