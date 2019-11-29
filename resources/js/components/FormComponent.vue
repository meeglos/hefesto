<template>
    <div class="container">
        <form class="w-full" v-on:submit.prevent="onSubmit()">
            <div class="w-full border-b border-b-2 border-indigo-500 py-2">
                <p class="block text-gray-700">Insert agent's productivity data:</p>
                <textarea v-model="agentData" ref="agentData" class="w-full my-2 border border-gray-300 rounded-lg p-2 text-gray-600 text-sm" rows="20" placeholder="Enter some long form content."></textarea>
            </div>
            <div class="w-full px-3 mt-4 text-center">
                <button type="submit" class="bg-white hover:bg-indigo-700 hover:text-white text-gray-800 font-semibold py-2 px-6 border border-gray-400 rounded shadow mr-2">Send</button>
                <button v-on:click="clear()" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-6 border hover:border-red-400 border-gray-400 rounded shadow">Cancel</button>
            </div>
        </form>
    </div>
</template>

<script>
import { isArray } from 'util';
    export default {
        data() {
            return {
                agentData: '',
                tabs: '',
                final: [],
            }
        },
        methods: {
            onSubmit: function () {
                let cierre = 0, averia = 0;
                var names = ['id', 'userid', 'destination', 'action', 'status', 'type', 'category', 'code'];
                var items = [0, 1, 3, 4, 5, 6, 7, 28];  /* se ha quitado el item 18 (fecha de cierre [closed_at])*/
                var final = []; var el = [];
                // let final = 0;
                var lines = this.agentData.split('\n');
                for(var i = 0; i < lines.length; i++) {
                    var tabs = lines[i].split('\t');

                    el = items.map(function(val) { return tabs[val]; });
                    var array = names.reduce((obj, key, index) => ({ ...obj, [key]: el[index] }), {});

                    axios.post('/agents', array);
                }
            },

            clear: function () {
                this.agentData = '';
                this.$refs.agentData.focus();
            },
        },
    }
</script>
