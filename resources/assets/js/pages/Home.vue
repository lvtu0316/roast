<style>

</style>

<template>
    <div>

    </div>
</template>

<script>
    export default {
        created(){
            this.$store.dispatch( 'loadCafes' );
        }

    }
</script>