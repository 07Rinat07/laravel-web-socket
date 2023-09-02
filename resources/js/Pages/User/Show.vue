<template>
<div>
    <div class="p-6 w-1/3 mx-auto">
        User {{user.name}}
    </div>
</div>
</template>



<script>
export default {
    name: "Show",

    props: [
        'user'
    ]
}
</script>



<style scoped>

</style>
