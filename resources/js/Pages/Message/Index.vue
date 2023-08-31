<template>
    <div class="w-1/2 mx-auto py-6">
        <div v-if="messages.length > 0" class="mb-4">
            <h3> Messages</h3>
            <div>
                <div v-for="message in messages" >
                    <p>{{message.id}}</p>
                    <p>{{message.body}}</p>
                    <p>{{message.id}}</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mb-4">
                <input type="text" class="rounded-full border-gray-400" placeholder="your message">
            </div>
            <div class="mb-4">
                <a href="#" class="rounded-lg block w-40 bg-sky-400 text-white text-center py-2">Sent</a>
            </div>
       </div>
    </div>
</template>


<script>
export default {
    name: "Index",

    props: [
        'messages'
    ]
}
</script>

<style scoped>

</style>
