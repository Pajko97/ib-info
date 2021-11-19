<template>
    <div>
        <h1>Delete Page</h1>
        <button class="delete-btn" @click="doDelete">Delete Page</button>
        <confirm-dialogue ref="confirmDialogue"></confirm-dialogue>
    </div>
</template>

<script>
import ConfirmDialogue from '../components/ConfirmDialogue.vue'

export default {
    components: { ConfirmDialogue },
    methods: {
        async doDelete() {
            const ok = await this.$refs.confirmDialogue.show({
                title: 'Delete Page',
                message: 'Are you sure you want to delete this page? It cannot be undone.',
                okButton: 'Delete Forever',
            })
            // If you throw an error, the method will terminate here unless you surround it wil try/catch
            if (ok) {
                alert('You have successfully delete this page.')
            } else {
                alert('You chose not to delete this page. Doing nothing now.')
            }
        },
    },
}
</script>

<style scoped>
.delete-btn {
    padding: 0.5em 1em;
    background-color: #eccfc9;
    color: #c5391a;
    border: 2px solid #ea3f1b;
    border-radius: 5px;
    font-weight: bold;
    font-size: 16px;
    text-transform: uppercase;
    cursor: pointer;
}
</style>