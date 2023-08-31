<template>
    <div class="w-1/2 mx-auto py-6">
        <div v-if="messages.length > 0" class="mb-4">
            <h3> Messages</h3>
            <div>
                <div v-for="message in messages" >
                    <p>{{message.id}}</p>
                    <p>{{message.body}}</p>
                    <p>{{message.time}}</p>
                </div>
            </div>
        </div>
        <div>
            <div class="mb-4">
                <input type="text" v-model="body" class="rounded-full border-gray-400" placeholder="your message">
            </div>
            <div class="mb-4">
                <a @click.prevent="store" href="#" class="rounded-lg block w-40 bg-sky-400 text-white text-center py-2">Sent</a>
            </div>
       </div>
    </div>
</template>


<script>
import axios from "axios";

export default {
    name: "Index",

    props: [
        'messages'
    ],

    data() {
        return {
            body: ''
        }
    },
    methods: {
        store() {
            axios.post('/messages', {body: this.body})
                .then(res => {
                    this.messages.unshift(res.data)
                })
        }
    }
}
</script>

<style scoped>

</style>
