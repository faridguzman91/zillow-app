<template>
    <Link href="/">Main Page</Link>&nbsp;

    <Link href="/hello">Show Page</Link>

    <div>
        timer = {{ timer }}
    </div>
    <slot></slot>


</template>

<script setup>

import { Link } from '@inertiajs/vue3'
/* import MainLayout from '../Layouts/MainLayout.vue' */
import {ref} from 'vue'

const timer = ref(0)

setInterval(() => timer.value++, 1000)
</script>
