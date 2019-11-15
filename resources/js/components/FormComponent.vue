<template>
    <div class="container">
        <form class="w-full">
            <div class="w-full border-b border-b-2 border-indigo-500 py-2">
                <p class="block text-gray-700">Insert agent's productivity data:</p>
                <textarea class="w-full my-2 border border-gray-300 rounded-lg p-2" rows="20" placeholder="Enter some long form content."></textarea>
            </div>
            <div class="w-full px-3 mt-4 text-center">
                <button class="bg-white hover:bg-indigo-700 hover:text-white text-gray-800 font-semibold py-2 px-6 border border-gray-400 rounded shadow mr-2">Send</button>
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-6 border hover:border-red-400 border-gray-400 rounded shadow">Cancel</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
