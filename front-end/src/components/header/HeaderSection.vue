<script lang="ts">
import './header.css'
import { defineComponent } from 'vue'
import { useI18n } from 'vue-i18n';

export default defineComponent({
    components: {},
    setup() {
        const { t } = useI18n();

        return {
            t
        }
    }
})
</script>

<template>
    <header
    class="header bg-transparent bg-cover bg-center bg-no-repeat bg-gradient-to-b from-yellow-400 to-orange-400 flex flex-col h-20 items-center justify-center px-4 py-2 text-center text-white"
    >
        <p class="header-title text-4xl font-thin my-12">
            {{ t('helloWorld') }}
        </p>
    </header>
</template>
