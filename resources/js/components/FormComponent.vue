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
                line: '',
                tabs: ''
            }
        },
        methods: {
            onSubmit: function () {
                let cierre = 0;
                let averia = 0;
                var lines = this.agentData.split('\n');
                for(var i = 0; i < lines.length; i++){
                    var tabs = lines[i].split('\t');
                        if (tabs[5] === 'Cerrado' && tabs[1] === 'mrcasap1' && tabs[6] === 'Cliente') {
                            cierre++;
                        }

                        if (tabs[6] === 'Cliente') {
                            averia++;
                        }
                    }
                console.log('Registros: ' + lines.length + '\nCierres: ' + cierre + '\nAverias: ' + averia);
            },
            clear: function () {
                this.agentData = '';
                this.$refs.agentData.focus();
            },
        },
    }
</script>
