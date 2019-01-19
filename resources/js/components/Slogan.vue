<template>
        <p class="slogan">Quand tout te casse les <span class="noix">noix</span>, connecte-toi et détends-toi!</p>
</template>

<script>
export default{
    data(){
        return{
               
        }
    }
}
</script>

<style scoped>
    .slogan{
    font-family: 'Allerta Stencil', sans-serif;
    grid-column:1/2;
    grid-row:3;
    padding-left: 20px;
    color:white;
    font-size:20px;
}

.noix{
    font-style: italic;
    font-family: 'Allura', sans-serif;
    font-size:36px;
}
</style>