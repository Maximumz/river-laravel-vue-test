<template>
    <Header/>
    <router-view></router-view>
    <Footer/>
</template>

<script>
    import Footer from './components/Footer';
    import Header from "./components/Header";

    export default {
        components: { Header, Footer },
        mounted() {}
    }
</script>
