<script lang="ts">
import '../../assets/header.css' // Import file CSS mới
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
<nav class="w-full inline-flex justify-center items-center h-28 text-xl font-thin border-b-4 text-gray-700">
   <div class="hidden lg:block w-full mr-12">
      <ul class="flex flex-row-reverse gap-12">
         <li class="relative">
            <a class="header-menu-item hover:text-green-900" href="#" target="_blank" rel="noreferrer">{{ t("header.menu") }}</a>
            <div class="wrapDrop">
               <ul></ul>
            </div>
         </li>
         <li class="relative">
            <a class="header-menu-item hover:text-green-900" href="/posts/tin-tuc">{{ t("header.newsBoard") }}</a>
            <div class="hidden">
               <ul>
                  <li><a href="#" target="_blank" rel="noreferrer">{{ t("header.loyaltyPolicy") }}</a></li>
                  <li><a href="/category/tin">{{ t("header.news") }}</a></li>
                  <li><a href="/category/hop-tac">{{ t("header.cooperation") }}</a></li>
                  <li><a href="/category/tin-van-hoa">{{ t("header.hereAndThere") }}</a></li>
                  <li><a href="/category/pha-che">{{ t("header.bartender") }}</a></li>
               </ul>
            </div>
         </li>
         <li class="relative">
            <a class="header-menu-item hover:text-green-900" href="#" target="_blank" rel="noreferrer">{{ t("header.story") }}</a>
            <div class="wrapDrop">
               <ul></ul>
            </div>
         </li>
      </ul>
   </div>
   <div class="">
      <h1 class="logo" style="cursor:pointer"><a>
      <img class="w-28 lg:w-48" src="../../assets/images/logo.png" alt="data_social_logo"></a></h1>
   </div>
   <div class="hidden lg:block w-full ml-12">
      <ul class="flex gap-12">
         <li class="relative">
            <a class="header-menu-item hover:text-green-900" href="javaScript:void(0);">{{ t("header.tradingCounter") }}</a>
            <div class="hidden">
               <ul>
                  <li><a href="#" target="_blank" rel="noreferrer">{{ t("header.tradingCounter") }}</a></li>
               </ul>
            </div>
         </li>
         <li class="relative">
            <a class="header-menu-item hover:text-green-900" href="/stores">{{ t("header.store") }}</a>
            <div class="wrapDrop">
               <ul></ul>
            </div>
         </li>
         <li class="relative">
            <a class="header-menu-item hover:text-green-900" href="/contact">{{ t("header.contact") }}</a>
            <div class="hidden">
               <ul>
                  <li><a href="#" target="_blank" rel="noreferrer">{{ t("header.recruitment") }}</a></li>
                  <li><a href="#" target="_blank" rel="noreferrer">{{ t("header.communityListen") }}</a></li>
                  <li><a href="#" target="_blank" rel="noreferrer">{{ t("header.aboutUs") }}</a></li>
               </ul>
            </div>
         </li>
      </ul>
   </div>
</nav>
</template>
