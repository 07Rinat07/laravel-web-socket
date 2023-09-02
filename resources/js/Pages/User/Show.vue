<template>
<div class="p-6 w-1/3 mx-auto" >
    <div class="mb-4">
        User {{user.name}}
    </div>
    <div class="mb-4">
        <a href="#"  class="rounded-lg block w-40 bg-sky-400 text-white text-center py-2">Send like</a>
    </div>
    <div v-if="like_str">
        {{like_str}}
    </div>
</div>
</template>



<script>
export default {
    name: "Show",

    props: [
        'user'
    ],

    data() {
        return {
            like_str: ''
        }
    }
}
</script>



<style scoped>

</style>
